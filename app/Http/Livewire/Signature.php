<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\User;
use setasign\Fpdi\Fpdi;
use Image;

class Signature extends Component
{
    use WithFileUploads;
    public $document;
    public $receiver_id;
    public $documentList = [];
    public $allBoxers = [];
    public $selectedSignatureId;
    public $signatureModalShow = false;
    public $signature;

    protected function rules()
    {
        return [
            'receiver_id' => ['required'],
            'document' =>  ['required']
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount()
    {
        $this->allBoxers = User::role('Boxer')
            ->get()->toArray();
        $this->getDocuments();
    }

    private function getDocuments()
    {
        $myId = auth()->user()->id;
        $this->documentList = \App\Models\Signature::where('sender_id', $myId)
            ->orWhere('receiver_id', $myId)
            ->get();
    }

    public function saveDocument()
    {
        $this->validate();

        $document = $this->document->store('documents', 'public');
        \App\Models\Signature::create([
            'sender_id' => auth()->user()->id,
            'receiver_id' => $this->receiver_id,
            'document_path' => $document
        ]);

        $this->notify('Sent a document to the boxer', 'success');
        $this->document = null;
        $this->getDocuments();
    }

    public function showSignatureModal($id)
    {
        $this->selectedSignatureId = $id;
        $this->signatureModalShow = true;
    }

    public function addSignature()
    {
        $signatureImagePath = 'signatures/signature' . time() . '.png';
        \Storage::put($signatureImagePath, base64_decode(\Str::of($this->signature)->after(',')));
        $signatureImageRealPath = \Storage::path($signatureImagePath);

        $img = Image::make($signatureImageRealPath);
        $img->resize(250, 150, function ($const) {
            $const->aspectRatio();
        })->save($signatureImageRealPath);


        $signatureModel = \App\Models\Signature::where('id', $this->selectedSignatureId)->first();
        $originalPath = \Storage::path("public/" . $signatureModel->document_path);

        // Set source PDF file 
        $pdf = new Fpdi();
        if (file_exists($originalPath)) {
            $pagecount = $pdf->setSourceFile($originalPath);
        } else {
            return;
        }
        // Add signature image to PDF last page
        for ($i = 1; $i <= $pagecount; $i++) {
            $tpl = $pdf->importPage($i);
            $size = $pdf->getTemplateSize($tpl);
            $pdf->addPage();
            $pdf->useTemplate($tpl, 1, 1, $size['width'], $size['height'], TRUE);

            if ($i < $pagecount) {
                continue;
            }

            //Put the watermark 
            $xxx_final = ($size['width'] - 100);
            $yyy_final = ($size['height'] - 50);
            $pdf->Image($signatureImageRealPath, $xxx_final, $yyy_final, 0, 0, 'png');
        }

        // Output PDF with watermark 
        $signedSignaturePath = "documents/" . time() . ".pdf";
        $signedSignatureRealPath = \Storage::path("public/" . $signedSignaturePath);

        $pdf->Output('F', $signedSignatureRealPath);

        // update model
        $signatureModel->signed_path = $signedSignaturePath;
        $signatureModel->save();

        $this->notify('Sent a document to the boxer', 'success');
        $this->getDocuments();
        $this->signatureModalShow = false;
    }

    public function render()
    {
        return view('livewire.signature');
    }
}
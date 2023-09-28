<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Profile extends Component
{
    public $user;
    public $name = '';
    public $email = '';
    public $phone = '';
    public $cpf = '';

    protected function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:12'],
            'cpf' => ['required', 'string', 'max:11'],
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount($id = null)
    {
        if (!empty($id)) {
            $this->user = User::find($id);
        }

        if (empty($this->user)) {
            $this->user = auth()->user();
        }

        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->phone = $this->user->phone;
        $this->cpf = $this->user->cpf;
    }

    public function updateProfile()
    {
        $this->validate();
        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'cpf' => $this->cpf,
        ]);

        // show alert
        $this->notify('Your profile was updated.', 'success');
    }

    public function render()
    {
        return view('livewire.edit-profile');
    }
}
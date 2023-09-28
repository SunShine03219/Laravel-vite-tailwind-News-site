<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use \App\Models\Categories;

class News extends Component
{
    use WithPagination;
    
    public $updateMode = false;
    public $allNews = '';
    public $news = '';

    public $categories = [];

    public $category = '';
    public $title = '';
    public $content = '';
    public $create_date = '';

    public $edit_category = '';
    public $edit_title = '';
    public $edit_content = '';
    public $edit_create_date = '';

    private function resetInputFields(){
        $this->category = '';
        $this->title = '';
        $this->content = '';
        $this->create_date = now()->format('Y-m-d');
    }

    protected function rules()
    {
        $rules = [];
    
        if ($this->updateMode) {
            $rules = [
                'edit_category' => ['required'],
                'edit_title' => ['required'],
                'edit_content' => ['required'],
                'edit_create_date' => ['required', 'after_or_equal:' . now()->format('Y-m-d')]
            ];
        } else {
            $rules = [
                'category' => ['required'],
                'title' => ['required'],
                'content' => ['required'],
                'create_date' => ['required', 'after_or_equal:' . now()->format('Y-m-d')]
            ];
        }    
        return $rules;
    }

    public function mount($userId = null, $editable = true, $separatable = true)
    {
        $this->categories = Categories::orderBy('category_name')->get()->toArray();
        $this->getNews();    
    }

    private function getNews()
    {
        $this->allNews = \App\Models\News::with('categoryDetail')->orderBy('id')->get()->toArray();
    }

    public function createNews()
    {
        $this->validate();
        \App\Models\News::create([
            'create_date' => $this->create_date,
            'title' => $this->title,
            'category' => $this->category,
            'content' => $this->content
        ]);
        // show alert
        $this->notify('Added a News', 'success');
        $this->resetInputFields();
        $this->getNews();    
    }

    
    public function editNews($id)
    {
        $this->news = \App\Models\News::find($id);
        $this->edit_category = $this->news->category;
        $this->edit_title = $this->news->title;
        $this->edit_content = $this->news->content;
        $this->edit_create_date = $this->news->create_date;
        $this->updateMode = true;
    }

    public function updateNews()
    {
        $this->validate();
        $this->news->update([
            'create_date' => $this->edit_create_date,
            'title' => $this->edit_title,
            'category' => $this->edit_category,
            'content' => $this->edit_content
        ]);
        
        $this->updateMode = false;
        $this->resetInputFields();
        $this->getNews();
        // show alert
        $this->notify('The news was updated.', 'success');
    }
    
    public function deleteNews($newsId)
    {
        $category = \App\Models\News::find($newsId);
        $category->delete();

        $this->notify('Deleted Successfully.', 'success');
        $this->getNews();
    }

    public function render()
    {
        return view('livewire.news');
    }
}
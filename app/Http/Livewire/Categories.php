<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Categories extends Component
{
    public $categories = '';
    public $category = '';
    public $category_name = '';
    public $edit_category_name = '';
    public $updateMode = false;

    private function resetInputFields(){
        $this->category_name = '';
        $this->edit_category_name = '';
    }

    protected function rules()
    {
        $rules = [];
    
        if ($this->updateMode) {
            $rules = [
                'edit_category_name' => ['required'],
            ];
        } else {
            $rules = [
                'category_name' => ['required'],
            ];
        }
    
        return $rules;
    }

    public function mount() 
    {
        $this->getCategories();
    }

    public function getCategories()
    {
        $this->categories = \App\Models\Categories::orderBy('id')->get()->toArray();
    }

    public function createCategory()
    {
        $this->validate();

        \App\Models\Categories::create([
            'category_name' => $this->category_name,
        ]);

        $this->category_name = "";
        // show alert
        $this->notify('Created new category.', 'success');

        $this->getCategories();
    }

    public function editCategory($id)
    {
        $this->category = \App\Models\Categories::find($id);
        $this->edit_category_id = $id;
        $this->edit_category_name = $this->category->category_name;
        $this->updateMode = true;
    }

    public function updateCategory()
    {
        $this->validate();
        $this->category->update([
            'category_name' => $this->edit_category_name,
        ]);
        
        $this->updateMode = false;
        $this->resetInputFields();
        $this->getCategories();
        // show alert
        $this->notify('The category was updated.', 'success');
    }

    public function deleteCategory($categoryId)
    {
        $category = \App\Models\Categories::find($categoryId);
        $category->delete();

        $this->notify('Deleted Successfully.', 'success');
        $this->getCategories();
    }


    public function render()
    {
        return view('livewire.categories');
    }
}

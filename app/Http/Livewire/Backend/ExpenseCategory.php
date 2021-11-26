<?php

namespace App\Http\Livewire\Backend;

use App\Models\ExpenseCategory as ModelsExpenseCategory;
use Livewire\Component;

class ExpenseCategory extends Component
{
    public $expenseCategories;

    public $name;

    public $select_for_edit = null;
    public $select_for_delete = null;

    public function create_new(){
        $this->select_for_edit = $this->name = null;
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string'
        ]);

        if($this->select_for_edit != null){
            $model = $this->select_for_edit;
        }else{
            $model = new ModelsExpenseCategory();
        }
        $model->name = $this->name;
        $model->save();
        $this->create_new();
        $this->expenseCategories = ModelsExpenseCategory::latest()->get();
        session()->flash('message', 'Successfully done');
    }

    public function select_for_edit($id)
    {
        $this->select_for_edit = ModelsExpenseCategory::find($id);
        $this->name =  $this->select_for_edit->name;
    }

    public function select_for_delete($id){
        $this->select_for_delete = ModelsExpenseCategory::find($id);
    }

    public function delete()
    {
        $this->select_for_delete->delete();
        $this->select_for_delete = null;
        $this->expenseCategories = ModelsExpenseCategory::latest()->get();
        session()->flash('message', 'Successfully done');
    }

    public function mount()
    {
        $this->expenseCategories = ModelsExpenseCategory::latest()->get();
    }

    public function render()
    {
        return view('livewire.backend.expense-category')->layout('layouts.backend.app');
    }
}

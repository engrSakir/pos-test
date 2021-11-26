<?php

namespace App\Http\Livewire\Backend;

use App\Models\Expense as ModelsExpense;
use App\Models\ExpenseCategory;
use App\Models\ProductCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class Expense extends Component
{

    use WithFileUploads;

    public $expenses, $expenseCategories;

    public $name, $amount, $category, $receipt;
    public $select_for_edit = null;
    public $select_for_delete = null;

    public function create_new(){
        $this->select_for_edit = $this->name = $this->amount = $this->category = $this->receipt = null;
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string',
            'amount' => 'required|numeric|min:0',
            'category' => 'required|exists:product_categories,id',
            'receipt' => 'nullable|image|max:1024'
        ]);

        if($this->select_for_edit != null){
            $model = $this->select_for_edit;
        }else{
            $model = new ModelsExpense();
        }

        $model->expense_category_id = $this->category;
        $model->name = $this->name;
        $model->amount = $this->amount;
        if($this->receipt)
        $model->receipt = 'storage/'.$this->receipt->store('images', 'public');
        $model->save();
        $this->create_new();
        $this->expenses = ModelsExpense::latest()->get();
        session()->flash('message', 'Successfully done');
    }


    public function select_for_edit($id)
    {
        $this->select_for_edit = ModelsExpense::find($id);
        $this->name = $this->select_for_edit->name;
        $this->amount = $this->select_for_edit->amount;
        $this->category = $this->select_for_edit->expense_category_id;
        // $this->receipt = $this->select_for_edit->receipt;
    }

    public function select_for_delete($id){
        $this->select_for_delete = ModelsExpense::find($id);
    }

    public function delete()
    {
        $this->select_for_delete->delete();
        $this->select_for_delete = null;
        $this->expenses = ModelsExpense::latest()->get();
        session()->flash('message', 'Successfully done');
    }

    public function mount()
    {
        $this->expenses = ModelsExpense::latest()->get();
        $this->expenseCategories = ExpenseCategory::latest()->get();
    }
    public function render()
    {
        return view('livewire.backend.expense')->layout('layouts.backend.app');
    }
}

<?php

namespace App\Http\Livewire\Backend;

use App\Models\ProductCategory as ModelsProductCategory;
use Livewire\Component;
use Illuminate\Support\Str;

class ProductCategory extends Component
{
    public $productCategories;

    public $name, $status, $online;

    public $select_for_edit = null;
    public $select_for_delete = null;

    public function create_new(){
        $this->select_for_edit = $this->name =  $this->status = $this->online = null;
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string',
            'online' => 'nullable|boolean',
            'status' => 'nullable|boolean'
        ]);

        if($this->select_for_edit != null){
            $model = $this->select_for_edit;
        }else{
            $model = new ModelsProductCategory();
        }
        $model->name = $this->name;
        $model->status = $this->status ?? false;
        $model->online = $this->online ?? false;
        $model->save();
        $this->create_new();
        $this->productCategories = ModelsProductCategory::latest()->get();
        session()->flash('message', 'Successfully done');
    }

    public function select_for_edit($id)
    {
        $this->select_for_edit = ModelsProductCategory::find($id);
        $this->name =  $this->select_for_edit->name;
        $this->status =  $this->select_for_edit->status;
        $this->online =  $this->select_for_edit->online;
    }

    public function select_for_delete($id){
        $this->select_for_delete = ModelsProductCategory::find($id);
    }

    public function delete()
    {
        $this->select_for_delete->delete();
        $this->select_for_delete = null;
        $this->productCategories = ModelsProductCategory::latest()->get();
        session()->flash('message', 'Successfully done');
    }

    public function mount()
    {
        $this->productCategories = ModelsProductCategory::latest()->get();
    }

    public function render()
    {
        return view('livewire.backend.product-category')->layout('layouts.backend.app');
    }


}

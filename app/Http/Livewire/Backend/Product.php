<?php

namespace App\Http\Livewire\Backend;

use Livewire\WithFileUploads;
use App\Models\Product as ModelsProduct;
use App\Models\ProductCategory;
use Livewire\Component;
use Illuminate\Support\Str;
class Product extends Component
{
    use WithFileUploads;

    public $products, $productCategories;

    public $name, $price, $category, $image, $status, $online;
    public $select_for_edit = null;
    public $select_for_delete = null;

    public function create_new(){
        $this->select_for_edit = $this->name = $this->price = $this->category = $this->image = $this->status = $this->online = null;
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string',
            'price' => 'required|numeric|min:0',
            'category' => 'required|exists:product_categories,id',
            'image' => 'nullable|image|max:1024', // 1MB Max
            'status' => 'nullable|boolean',
            'online' => 'nullable|boolean',
        ]);

        if($this->select_for_edit != null){
            $model = $this->select_for_edit;
        }else{
            $model = new ModelsProduct();
        }

        $model->product_category_id = $this->category;
        $model->status = $this->status ?? false;
        $model->online = $this->online ?? false;
        $model->name = $this->name;
        $model->slug = Str::slug($this->name);
        $model->price = $this->price;
        if($this->image)
        $model->image = 'storage/'.$this->image->store('images', 'public');
        $model->save();
        $this->create_new();
        $this->products = ModelsProduct::latest()->get();
        session()->flash('message', 'Successfully done');
    }


    public function select_for_edit($id)
    {
        $this->select_for_edit = ModelsProduct::find($id);
        $this->name = $this->select_for_edit->name;
        $this->price = $this->select_for_edit->price;
        $this->category = $this->select_for_edit->product_category_id;
        // $this->image = $this->select_for_edit->image;
        $this->status = $this->select_for_edit->status;
        $this->online = $this->select_for_edit->online;
    }

    public function select_for_delete($id){
        $this->select_for_delete = ModelsProduct::find($id);
    }

    public function delete()
    {
        $this->select_for_delete->delete();
        $this->select_for_delete = null;
        $this->products = ModelsProduct::latest()->get();
        session()->flash('message', 'Successfully done');
    }

    public function mount()
    {
        $this->products = ModelsProduct::latest()->get();
        $this->productCategories = ProductCategory::latest()->get();
    }

    public function render()
    {
        return view('livewire.backend.product')->layout('layouts.backend.app');
    }
}

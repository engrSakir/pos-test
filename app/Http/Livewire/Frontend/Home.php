<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Product;
use App\Models\ProductCategory;
use Livewire\Component;
use Livewire\WithPagination;

class Home extends Component
{
    use WithPagination;

    public $priduct_categories, $products;

    public function mount(){
        $this->priduct_categories = ProductCategory::where('status', true)->where('online', true)->get();
        $this->products = Product::where('status', true)->where('online', true)->get();
    }

    public function render()
    {
        return view('livewire.frontend.home')->layout('layouts.frontend.app');
    }
}

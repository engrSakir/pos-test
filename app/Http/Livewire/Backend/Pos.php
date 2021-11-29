<?php

namespace App\Http\Livewire\Backend;

use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\Product;
use App\Models\ProductCategory;
use Livewire\Component;

class Pos extends Component
{
    public $products, $productCategories;
    public $basket = array();
    public $searched_key = null;
    public $customer_phone = null;
    public $discount_amount = 0;
    public $invoice_url = null;
    public $paid_amount = 0;
    public $searched_product = null;
    public $searched_product_category = null;
    public $parcel = null;
    public $sales_receipt_id = null;
    public $product_id_number = null;


    public function addToCard($id)
    {
        $this->invoice_url = null;
        $this->searched_key = null;
        foreach ($this->basket as $array_key => $val) {
            if ($val['id'] === $id) {
                $this->searched_key =  $array_key;
            }
        }
        if($this->searched_key === null || count($this->basket) < 1){
            array_push($this->basket, [
                'id' => $id,
                'qty' => 1,
                'name' => Product::find($id)->name,
                'price' => Product::find($id)->price,
                'sub_total_price' => Product::find($id)->price,
            ]);
        }else{
            $this->basket[$this->searched_key]['qty']++;
            $this->basket[$this->searched_key]['sub_total_price'] += Product::find($id)->price;
        }
    }

    public function removeFromCard($id)
    {
        try{
            $this->searched_key = null;
            foreach ($this->basket as $array_key => $val) {
                if ($val['id'] === $id) {
                    $this->searched_key =  $array_key;
                }
            }
            if($this->basket[$this->searched_key]['qty'] > 1){
                $this->basket[$this->searched_key]['qty']--;
                $this->basket[$this->searched_key]['sub_total_price'] -= Product::find($id)->price;
            }else{
                unset($this->basket[$this->searched_key]);
            }
        }catch(\Exception $e){

        }
    }

    public function allRemoveFromCard($id)
    {
        try{
            $this->searched_key = null;
            foreach ($this->basket as $array_key => $val) {
                if ($val['id'] === $id) {
                    $this->searched_key =  $array_key;
                }
            }
            unset($this->basket[$this->searched_key]);
        }catch(\Exception $e){

        }
    }

    public function addByProductID(){
        $this->validate([
            'product_id_number' => 'required|exists:products,id'
        ]);

        $this->addToCard($this->product_id_number);
    }

    public function save()
    {
        if(count($this->basket) > 0){
            try{
                $invoice = Invoice::create([
                     // 'custom_id' => '',
                     'customer_phone' => $this->customer_phone,
                     'discount_amount' => $this->discount_amount,
                     'paid_amount' => $this->paid_amount,
                     'parcel' => $this->parcel ?? false
                ]);
     
                foreach ($this->basket as $card_item) {
                     InvoiceItem::create([
                         'invoice_id' => $invoice->id,
                         'product_id' => $card_item['id'],
                         'quantity' => $card_item['qty'],
                         'price' => $card_item['price'],
                     ]);
                 }
             }catch(\Exception $e){
                 session()->flash('message', $e->getMessage());
             }
             $this->basket = array();
             $this->searched_key = null;
             $this->customer_phone = null;
             $this->discount_amount = 0;
             $this->paid_amount = 0;
             $this->parcel = false;
             $this->invoice_url = route('invoice.show', [$invoice, 'kitchen=yes']);
             // session()->flash('message', 'Successfully done');
             toastr()->success('Success');
        }else{
            session()->flash('message', 'Item not found');
        }
    }

    public function mount()
    {
        $this->products = Product::latest()->where('status', true)->get();
        $this->productCategories = ProductCategory::latest()->where('status', true)->get();
    }

    public function render()
    {
        //Searching
        if(strlen($this->searched_product) > 0){
            $this->products = Product::where('status', true)->where('name', 'like', '%'.$this->searched_product.'%')->get();
        }else if(strlen($this->searched_product_category) > 0 && $this->searched_product_category != 'all'){
            $this->products = Product::where('status', true)->where('product_category_id', $this->searched_product_category)->get();
        }else{
            $this->products = Product::latest()->where('status', true)->get();
        }
        toastr()->success('Welcome to POS module');
        return view('livewire.backend.pos')
            ->layout('layouts.pos.app');
    }
}

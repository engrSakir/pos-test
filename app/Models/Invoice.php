<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Wildside\Userstamps\Userstamps;

class Invoice extends Model
{
    use HasFactory, Userstamps;

    protected $fillable = [
        'custom_id',
        'customer_phone',
        'discount_amount',
        'paid_amount',
        'parcel',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    public function items(){
        return $this->hasMany(InvoiceItem::class, 'invoice_id', 'id');
    }

    public function total_price(){
         $total_price = 0;
         foreach($this->items as $item){
             $total_price += $item->price * $item->quantity;
         }
         return round($total_price, 2);
    }

    public function total_price_after_discount(){
        return $this->total_price() - $this->discount_amount;
    }
}

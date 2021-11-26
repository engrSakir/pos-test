<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Wildside\Userstamps\Userstamps;

class InvoiceItem extends Model
{
    use HasFactory, Userstamps;

    protected $fillable = [
        'invoice_id',
        'product_id',
        'price',
        'quantity',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    public function invoice(){
        return $this->belongsTo(Invoice::class, 'invoice_id', 'id');
    }

    public function product(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}

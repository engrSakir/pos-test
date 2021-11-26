<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Wildside\Userstamps\Userstamps;

class Expense extends Model
{
    use HasFactory, Userstamps;

    protected $fillable = [
        'expense_category_id',
        'amount',
        'name',
        'note',
        'receipt'
    ];

    public function category(){
        return $this->belongsTo(ExpenseCategory::class, 'expense_category_id', 'id');
    }
}

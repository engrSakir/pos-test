<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Wildside\Userstamps\Userstamps;
class ExpenseCategory extends Model
{
    use HasFactory, Userstamps;

    protected $fillable = [
        'name'
    ];

    public function expenses(){
        return $this->hasMany(Expense::class, 'expense_category_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Wildside\Userstamps\Userstamps;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory, Userstamps;

    protected $fillable = [
        'product_category_id',
        'status',
        'online',
        'name',
        'price',
        'image',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id', 'id');
    }

    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            // ... code here
        });

        self::created(function ($model) {
            $model->slug = Str::slug($model->name);
            $model->save();
        });

        self::updating(function ($model) {
            // ... code here
        });

        self::updated(function ($model) {
            // ... code here
        });

        self::deleting(function ($model) {
            // ... code here
        });

        self::deleted(function ($model) {
            // ... code here
        });
    }
}

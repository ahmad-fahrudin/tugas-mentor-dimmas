<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = ['productname', 'cat_id', 'brand_id', 'price'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    use HasFactory;
}

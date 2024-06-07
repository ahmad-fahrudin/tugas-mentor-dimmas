<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = ['productname', 'cat_id', 'price'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }

    use HasFactory;
}

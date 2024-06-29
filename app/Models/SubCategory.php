<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'subCategory_name',
        'subCategory_description',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
}

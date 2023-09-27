<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;

class Products extends Model
{
    use HasFactory;
    public function categories(){
        return $this->belongsTo(Categories::class);
    }
    protected $fillable = [
        'id',
        'Name',
        'Description',
        'Price',
        'Image',
        'Category_Id'

    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    public function product(){
        return $this->hasMany(Products::class);
    }
    protected $fillable = [
        'id',
        'Name'

    ];
}

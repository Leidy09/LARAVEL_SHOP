<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table ='categories';
    protected $fillable =[
    'name',
    'description',
    'color',
    ];

    public function product(){
    return $this->hasMany(Product::class);
    }
}

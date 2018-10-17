<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table ='products';
    protected $fillable =[
        'name',
        'description',
        'size',
        'visible',
        'idcategory',
        'price',
        'iva',
    ];
        public function category(){
        return $this->belongsTo(Category::class);
    }
        public function image(){
        return $this->hasMany(Image::class);
    }
        public function sale(){
        return $this->hasMany(Sale::class);
    }
}

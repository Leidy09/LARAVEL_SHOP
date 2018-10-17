<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected  $table ='';
    protected  $fillable =[
        'route_image',
        'idProduct',
    ];
    public function product(){
        return $this->belongsTo(Product::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected  $table ='items';
    protected $fillable =[
        'price',
        'idProduct',
        'idOrder',
        'quantity',
        'iva',

    ];
        public function client(){
        return $this->belongsTo(Client::class);
    }
        public function order(){
        return $this->hasMany(Order::class);
    }


}

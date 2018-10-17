<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    //
    protected $table ='sales';
    protected $fillable =[
        'datefrom',
        'dateto',
        'disscount',
        'idProduct',
    ];
        public function product(){
        return $this->belongsTo(Product::class);
    }
}

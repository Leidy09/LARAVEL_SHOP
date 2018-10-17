<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'orders';
    protected $fillable = [
        'dataShoped',
        'userIdUser',
        'authotizationNumber',
        'idPayMethod',
        'idPostofficeProvider',
        'tracing_Number',
        'post_Status',
    ];

    public function item(){
        return $this->hasMany(Item::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function paymethod(){
        return $this->belongsTo(PayMethod::class);
    }

        public function postOficceProvider(){
            return $this->hasMany(PostOfficeProvider::class);
        }
}
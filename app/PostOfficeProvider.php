<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostOfficeProvider extends Model
{
    //
    protected $table ='post_office_providers';
    protected $fillable =[
        'name',
    ];
        public function order(){
            return $this->hasMany(Order::class);
        }
}

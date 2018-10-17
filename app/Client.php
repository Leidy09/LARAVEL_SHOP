<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $table = 'clients';
    protected $fillable = [
        'first_name',
        'last_name',
        'document',
        'address',
        'city',
        'date_Of_Birth',
        'email',
        'phone',
        'Expiry_Month',
        'Expiry_year',
        'CCV',
        'idTipoDocuement_idDocument',
        'userId_idDocument',
];
        public function item(){
        return $this->hasMany(Item::class);
         }

        public function user(){
        return $this->belongsTo(User::class);
        }

        public function typeDocument(){
            return $this->belongsTo(TypeDocumet::class);
        }
}

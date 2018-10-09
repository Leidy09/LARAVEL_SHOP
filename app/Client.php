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
}

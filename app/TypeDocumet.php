<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeDocumet extends Model
{
    //
    protected $table = 'type_documents';
    protected $fillable = [
        'name',
        'abbreviation',
    ];
}

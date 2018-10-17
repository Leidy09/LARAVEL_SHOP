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
        public function client(){
            return $this->belongsTo(Client::class);
        }
}

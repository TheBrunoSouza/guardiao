<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model{

    protected $fillable = ['nome', 'sigla'];

    public function cidade(){
        return $this->belongsTo('App\Cidade');
    }
}

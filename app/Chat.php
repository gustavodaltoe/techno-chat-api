<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $table = 'chat';
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function users()
    {
        return $this->hasMany('App\User')
                        ->as('participantes');
    }
    public function mensagens()
    {
        return $this->hasMany('App\Mensagem');
    }
}

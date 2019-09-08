<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $table = 'chat';
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function participantes()
    {
        return $this->hasMany('App\Participante');
    }
    public function mensagens()
    {
        return $this->hasMany('App\Mensagem');
    }
}

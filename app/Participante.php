<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    protected $table = 'participante';
    protected $fillable = ['fk_id_chat', 'ref_usuario'];
    protected $dates = ['deleted_at'];
    function chat() 
    {
        return $this->belongsTo('App\Chat');
    }
    function mensagens() 
    {
        return $this->hasMany('App\Mensagem');
    }
}

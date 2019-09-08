<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    protected $table = 'mensagem';
    protected $fillable = ['conteudo', 'fk_id_participante', 'fk_id_chat'];
    protected $dates = ['created_at', 'deleted_at'];

    function participante()
    {
        return $this->belongsTo('App\Participante');
    }
    function chat()
    {
        return $this->belongsTo('App\Chat');
    }
}

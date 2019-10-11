<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    protected $table = 'mensagem';
    // protected $fillable = ['conteudo', 'fk_id_user', 'fk_id_chat'];
    protected $fillable = ['conteudo'];
    protected $dates = ['created_at', 'deleted_at'];

    function user()
    {
        return $this->belongsTo(User::class);
    }
    // function chat()
    // {
    //     return $this->belongsTo('App\Chat');
    // }
}

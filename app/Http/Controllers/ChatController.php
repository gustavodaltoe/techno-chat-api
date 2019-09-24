<?php

namespace App\Http\Controllers;

use App\Chat;
use App\Mensagem;
use App\Events\MessageSent;
use App\Http\Controllers\ParticipanteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('chat');
    }

    /**
     * Fetch All Messages
     * 
     * @return Mensagem
     */
    public function fetchMessages() {
        return Mensagem::with('user')::with('participante')->get();
    }

    /**
     * Persist message to the database
     * 
     * @param Request $request
     * @return Response
     */
    public function sendMessage(Request $request)
    {
        $user = Auth::user();


        // $chat = $request->input('chatID');
        // $participante = ;

        $mensagem = $user->messages()->create([
            'conteudo' => $request->input('conteudo')
        ]);

        return ['status' => 'Mensagem enviada!!'];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ref_usuario' => 'required|array'
        ]);

        if ($validator->fails()) {
            return $validator->messages()->first();
        }

        $chat = new Chat;
        $chat->save();
        foreach ($request->input('ref_usuario') as $participante) {
            $partRequest = new Request([
                'ref_usuario' => $participante,
                'fk_id_chat' => $chat->getKey()
            ]);

            ParticipanteController::store($partRequest);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

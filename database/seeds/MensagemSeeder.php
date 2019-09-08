<?php

use Illuminate\Database\Seeder;

class MensagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Mensagem::create([
            'conteudo' => str_random(10) . " " . str_random(7) . " " . str_random(5),
            'fk_id_participante' => mt_rand(1, 2),
            'fk_id_chat' => 1
        ]);
    }
}

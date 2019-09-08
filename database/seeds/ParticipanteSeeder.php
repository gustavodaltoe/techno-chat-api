<?php

use Illuminate\Database\Seeder;

class ParticipanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Participante::create([
            'fk_id_chat' => 1,
            'ref_usuario' => 1
        ]);
    }   
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model::unguard();

        $this->call(ChatSeeder::class);
        $this->call(ParticipanteSeeder::class);
        $this->call(ParticipanteSeeder::class);
        $this->call(MensagemSeeder::class);
        $this->call(MensagemSeeder::class);
        $this->call(MensagemSeeder::class);
        $this->call(MensagemSeeder::class);

        // Model::reguard();
    }
}

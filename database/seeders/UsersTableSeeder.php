<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert(array (
            0 => 
            array (
            'id' => 1,
            'email' => 'bapt.audeon@gmail.com',
            'email_verified_at' => NULL,
            'password' => '$2y$12$tQ96y8KdYt8DXZdLRyEEreImE2ZcHgugQ.GgYnWtQICVziwupM4Lq',
            'remember_token' => NULL,
            'created_at' => '2024-03-15 11:14:47',
            'updated_at' => '2024-03-15 11:14:47',
            'VIS_MATRICULE' => NULL,
            'VIS_NOM' => 'AUDEON',
            'VIS_PRENOM' => 'Baptiste',
            'VIS_ADRESSE' => '1 rue de la gare',
            'VIS_CP' => '44270',
            'VIS_VILLE' => 'machecoul'
            ),
        ));
    }
}
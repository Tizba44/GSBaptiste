<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RapportVisiteTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {



        \DB::table('rapport_visite')->delete();




        \DB::table('rapport_visite')->insert(array(
            0 =>
            array(
                'PRA_NUM' => 1,
                'RAP_DATE' => '2023-12-13 07:44:10',
                'RAP_BILAN' => 'Bilan 1 lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nunc. Nulla facilisi. Sed ut nunc nec purus feugiat, molestie ipsum et, consequat nunc. Nulla facilisi. Sed ut.',
                'RAP_MOTIF' => 'MAL AU VENTRE',
                'RAP_MEDICAMENT' => '3MYC7',
                'updated_at' => '2023-12-13 07:44:10',
                'created_at' => '2023-12-13 07:44:10',
                'users_id' => 1,
                'id' => 1,
            ),
            1 =>
            array(
                'PRA_NUM' => 2,
                'RAP_DATE' => '2023-12-13 07:44:10',
                'RAP_BILAN' => 'Bilan 2 lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nunc. Nulla facilisi. Sed ut nunc nec purus feugiat, molestie ipsum et, consequat nunc. Nulla facilisi. Sed ut. lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nunc. Nulla facilisi. Sed ut nunc nec purus feugiat, molestie ipsum et, consequat nunc. Nulla facilisi. Sed ut.',
                'RAP_MOTIF' => 'mal de tête',
                'RAP_MEDICAMENT' => 'AMOPIL7',
                'updated_at' => '2023-12-13 07:44:10',
                'created_at' => '2023-12-13 07:44:10',
                'users_id' => 1,
                'id' => 2,
            ),

        ));
    }
}

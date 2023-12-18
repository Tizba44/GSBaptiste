<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SecteurTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('secteur')->delete();
        
        \DB::table('secteur')->insert(array (
            0 => 
            array (
                'SEC_CODE' => 'E',
                'SEC_LIBELLE' => 'Est',
            ),
            1 => 
            array (
                'SEC_CODE' => 'N',
                'SEC_LIBELLE' => 'Nord',
            ),
            2 => 
            array (
                'SEC_CODE' => 'O',
                'SEC_LIBELLE' => 'Ouest',
            ),
            3 => 
            array (
                'SEC_CODE' => 'P',
                'SEC_LIBELLE' => 'Paris centre',
            ),
            4 => 
            array (
                'SEC_CODE' => 'S',
                'SEC_LIBELLE' => 'Sud',
            ),
        ));
        
        
    }
}
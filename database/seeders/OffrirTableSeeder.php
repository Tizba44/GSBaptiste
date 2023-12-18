<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OffrirTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('offrir')->delete();
        
        \DB::table('offrir')->insert(array (
            0 => 
            array (
                'VIS_MATRICULE' => 'a17',
                'RAP_NUM' => 4,
                'MED_DEPOTLEGAL' => '3MYC7',
                'OFF_QTE' => 3,
            ),
            1 => 
            array (
                'VIS_MATRICULE' => 'a17',
                'RAP_NUM' => 4,
                'MED_DEPOTLEGAL' => 'AMOX45',
                'OFF_QTE' => 12,
            ),
            2 => 
            array (
                'VIS_MATRICULE' => 'zzz',
                'RAP_NUM' => 9,
                'MED_DEPOTLEGAL' => 'AMOX45',
                'OFF_QTE' => NULL,
            ),
            3 => 
            array (
                'VIS_MATRICULE' => 'zzz',
                'RAP_NUM' => 10,
                'MED_DEPOTLEGAL' => 'BITALV',
                'OFF_QTE' => NULL,
            ),
            4 => 
            array (
                'VIS_MATRICULE' => 'zzz',
                'RAP_NUM' => 12,
                'MED_DEPOTLEGAL' => 'AMOX45',
                'OFF_QTE' => NULL,
            ),
            5 => 
            array (
                'VIS_MATRICULE' => 'zzz',
                'RAP_NUM' => 12,
                'MED_DEPOTLEGAL' => 'BACTIG10',
                'OFF_QTE' => NULL,
            ),
            6 => 
            array (
                'VIS_MATRICULE' => 'zzz',
                'RAP_NUM' => 13,
                'MED_DEPOTLEGAL' => 'CARTION6',
                'OFF_QTE' => NULL,
            ),
            7 => 
            array (
                'VIS_MATRICULE' => 'zzz',
                'RAP_NUM' => 14,
                'MED_DEPOTLEGAL' => 'CLAZER6',
                'OFF_QTE' => NULL,
            ),
            8 => 
            array (
                'VIS_MATRICULE' => 'zzz',
                'RAP_NUM' => 15,
                'MED_DEPOTLEGAL' => 'BITALV',
                'OFF_QTE' => NULL,
            ),
            9 => 
            array (
                'VIS_MATRICULE' => 'zzz',
                'RAP_NUM' => 16,
                'MED_DEPOTLEGAL' => 'BACTIV13',
                'OFF_QTE' => NULL,
            ),
        ));
        
        
    }
}
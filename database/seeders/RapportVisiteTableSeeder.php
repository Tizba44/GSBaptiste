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
        
        \DB::table('rapport_visite')->insert(array (
            0 => 
            array (
                'VIS_MATRICULE' => 'a131',
                'RAP_NUM' => 3,
                'PRA_NUM' => 23,
                'RAP_DATE' => '2002-04-18 00:00:00',
                'RAP_BILAN' => 'Médecin curieux, à recontacer en décembre pour réunion',
                'RAP_MOTIF' => 'Actualisation annuelle',
            ),
            1 => 
            array (
                'VIS_MATRICULE' => 'a131',
                'RAP_NUM' => 7,
                'PRA_NUM' => 41,
                'RAP_DATE' => '2003-03-23 00:00:00',
                'RAP_BILAN' => 'RAS
Changement de tel : 05 89 89 89 89',
                'RAP_MOTIF' => 'Rapport Annuel',
            ),
            2 => 
            array (
                'VIS_MATRICULE' => 'a17',
                'RAP_NUM' => 4,
                'PRA_NUM' => 4,
                'RAP_DATE' => '2003-05-21 00:00:00',
                'RAP_BILAN' => 'Changement de direction, redéfinition de la politique médicamenteuse, recours au générique',
                'RAP_MOTIF' => 'Baisse activité',
            ),
            3 => 
            array (
                'VIS_MATRICULE' => 'zzz',
                'RAP_NUM' => 9,
                'PRA_NUM' => 84,
                'RAP_DATE' => '2017-03-07 00:00:00',
                'RAP_BILAN' => 'test',
                'RAP_MOTIF' => 'thu',
            ),
            4 => 
            array (
                'VIS_MATRICULE' => 'zzz',
                'RAP_NUM' => 10,
                'PRA_NUM' => 12,
                'RAP_DATE' => '2017-03-07 00:00:00',
                'RAP_BILAN' => 'gtfhfg',
                'RAP_MOTIF' => 'regdf',
            ),
            5 => 
            array (
                'VIS_MATRICULE' => 'zzz',
                'RAP_NUM' => 12,
                'PRA_NUM' => 82,
                'RAP_DATE' => '2017-03-04 00:00:00',
                'RAP_BILAN' => 'hvjujfthgbdf',
                'RAP_MOTIF' => 'zeatgr',
            ),
            6 => 
            array (
                'VIS_MATRICULE' => 'zzz',
                'RAP_NUM' => 13,
                'PRA_NUM' => 41,
                'RAP_DATE' => '2017-03-07 00:00:00',
                'RAP_BILAN' => 'popopoopo',
                'RAP_MOTIF' => 'jean pierre lulu',
            ),
            7 => 
            array (
                'VIS_MATRICULE' => 'zzz',
                'RAP_NUM' => 14,
                'PRA_NUM' => 81,
                'RAP_DATE' => '2017-03-07 00:00:00',
                'RAP_BILAN' => 'dodood',
                'RAP_MOTIF' => 'malle a dos',
            ),
            8 => 
            array (
                'VIS_MATRICULE' => 'zzz',
                'RAP_NUM' => 15,
                'PRA_NUM' => 84,
                'RAP_DATE' => '2017-03-07 00:00:00',
                'RAP_BILAN' => 'bilan',
                'RAP_MOTIF' => 'mal a la gorge',
            ),
            9 => 
            array (
                'VIS_MATRICULE' => 'zzz',
                'RAP_NUM' => 16,
                'PRA_NUM' => 12,
                'RAP_DATE' => '2017-03-21 00:00:00',
                'RAP_BILAN' => 'fsdgd',
                'RAP_MOTIF' => 'pour',
            ),
            10 => 
            array (
                'VIS_MATRICULE' => 'a131',
                'RAP_NUM' => 17,
                'PRA_NUM' => 52,
                'RAP_DATE' => '1111-12-08 00:00:00',
                'RAP_BILAN' => 'super nikel ',
                'RAP_MOTIF' => 'chepa ',
            ),
        ));
        
        
    }
}
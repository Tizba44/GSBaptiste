<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FamilleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('famille')->delete();
        
        \DB::table('famille')->insert(array (
            0 => 
            array (
                'FAM_CODE' => 'AA',
                'FAM_LIBELLE' => 'Antalgiques en association',
            ),
            1 => 
            array (
                'FAM_CODE' => 'AAA',
                'FAM_LIBELLE' => 'Antalgiques antipyrétiques en association',
            ),
            2 => 
            array (
                'FAM_CODE' => 'AAC',
                'FAM_LIBELLE' => 'Antidépresseur d\'action centrale',
            ),
            3 => 
            array (
                'FAM_CODE' => 'AAH',
                'FAM_LIBELLE' => 'Antivertigineux antihistaminique H1',
            ),
            4 => 
            array (
                'FAM_CODE' => 'ABA',
                'FAM_LIBELLE' => 'Antibiotique antituberculeux',
            ),
            5 => 
            array (
                'FAM_CODE' => 'ABC',
                'FAM_LIBELLE' => 'Antibiotique antiacnéique local',
            ),
            6 => 
            array (
                'FAM_CODE' => 'ABP',
            'FAM_LIBELLE' => 'Antibiotique de la famille des béta-lactamines (pénicilline A)',
            ),
            7 => 
            array (
                'FAM_CODE' => 'AFC',
                'FAM_LIBELLE' => 'Antibiotique de la famille des cyclines',
            ),
            8 => 
            array (
                'FAM_CODE' => 'AFM',
                'FAM_LIBELLE' => 'Antibiotique de la famille des macrolides',
            ),
            9 => 
            array (
                'FAM_CODE' => 'AH',
                'FAM_LIBELLE' => 'Antihistaminique H1 local',
            ),
            10 => 
            array (
                'FAM_CODE' => 'AIM',
            'FAM_LIBELLE' => 'Antidépresseur imipraminique (tricyclique)',
            ),
            11 => 
            array (
                'FAM_CODE' => 'AIN',
                'FAM_LIBELLE' => 'Antidépresseur inhibiteur sélectif de la recapture de la sérotonine',
            ),
            12 => 
            array (
                'FAM_CODE' => 'ALO',
            'FAM_LIBELLE' => 'Antibiotique local (ORL)',
            ),
            13 => 
            array (
                'FAM_CODE' => 'ANS',
                'FAM_LIBELLE' => 'Antidépresseur IMAO non sélectif',
            ),
            14 => 
            array (
                'FAM_CODE' => 'AO',
                'FAM_LIBELLE' => 'Antibiotique ophtalmique',
            ),
            15 => 
            array (
                'FAM_CODE' => 'AP',
                'FAM_LIBELLE' => 'Antipsychotique normothymique',
            ),
            16 => 
            array (
                'FAM_CODE' => 'AUM',
                'FAM_LIBELLE' => 'Antibiotique urinaire minute',
            ),
            17 => 
            array (
                'FAM_CODE' => 'CRT',
                'FAM_LIBELLE' => 'Corticoïde, antibiotique et antifongique à  usage local',
            ),
            18 => 
            array (
                'FAM_CODE' => 'HYP',
                'FAM_LIBELLE' => 'Hypnotique antihistaminique',
            ),
            19 => 
            array (
                'FAM_CODE' => 'PSA',
                'FAM_LIBELLE' => 'Psychostimulant, antiasthénique',
            ),
        ));
        
        
    }
}
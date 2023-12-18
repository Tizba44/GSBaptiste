<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TypePraticienTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('type_praticien')->delete();
        
        \DB::table('type_praticien')->insert(array (
            0 => 
            array (
                'TYP_CODE' => 'MH',
                'TYP_LIBELLE' => 'Médecin Hospitalier',
                'TYP_LIEU' => 'Hopital ou clinique',
            ),
            1 => 
            array (
                'TYP_CODE' => 'MV',
                'TYP_LIBELLE' => 'Médecine de Ville',
                'TYP_LIEU' => 'Cabinet',
            ),
            2 => 
            array (
                'TYP_CODE' => 'PH',
                'TYP_LIBELLE' => 'Pharmacien Hospitalier',
                'TYP_LIEU' => 'Hopital ou clinique',
            ),
            3 => 
            array (
                'TYP_CODE' => 'PO',
                'TYP_LIBELLE' => 'Pharmacien Officine',
                'TYP_LIEU' => 'Pharmacie',
            ),
            4 => 
            array (
                'TYP_CODE' => 'PS',
                'TYP_LIBELLE' => 'Personnel de santé',
                'TYP_LIEU' => 'Centre paramédical',
            ),
        ));
        
        
    }
}
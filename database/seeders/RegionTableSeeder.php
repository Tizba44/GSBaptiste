<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RegionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('region')->delete();
        
        \DB::table('region')->insert(array (
            0 => 
            array (
                'REG_CODE' => 'AL',
                'SEC_CODE' => 'E',
                'REG_NOM' => 'Alsace Lorraine',
            ),
            1 => 
            array (
                'REG_CODE' => 'AQ',
                'SEC_CODE' => 'S',
                'REG_NOM' => 'Aquitaine',
            ),
            2 => 
            array (
                'REG_CODE' => 'AU',
                'SEC_CODE' => 'P',
                'REG_NOM' => 'Auvergne',
            ),
            3 => 
            array (
                'REG_CODE' => 'BG',
                'SEC_CODE' => 'O',
                'REG_NOM' => 'Bretagne',
            ),
            4 => 
            array (
                'REG_CODE' => 'BN',
                'SEC_CODE' => 'O',
                'REG_NOM' => 'Basse Normandie',
            ),
            5 => 
            array (
                'REG_CODE' => 'BO',
                'SEC_CODE' => 'E',
                'REG_NOM' => 'Bourgogne',
            ),
            6 => 
            array (
                'REG_CODE' => 'CA',
                'SEC_CODE' => 'N',
                'REG_NOM' => 'Champagne Ardennes',
            ),
            7 => 
            array (
                'REG_CODE' => 'CE',
                'SEC_CODE' => 'P',
                'REG_NOM' => 'Centre',
            ),
            8 => 
            array (
                'REG_CODE' => 'FC',
                'SEC_CODE' => 'E',
                'REG_NOM' => 'Franche Comté',
            ),
            9 => 
            array (
                'REG_CODE' => 'HN',
                'SEC_CODE' => 'N',
                'REG_NOM' => 'Haute Normandie',
            ),
            10 => 
            array (
                'REG_CODE' => 'IF',
                'SEC_CODE' => 'P',
                'REG_NOM' => 'Ile de France',
            ),
            11 => 
            array (
                'REG_CODE' => 'LG',
                'SEC_CODE' => 'S',
                'REG_NOM' => 'Languedoc',
            ),
            12 => 
            array (
                'REG_CODE' => 'LI',
                'SEC_CODE' => 'P',
                'REG_NOM' => 'Limousin',
            ),
            13 => 
            array (
                'REG_CODE' => 'MP',
                'SEC_CODE' => 'S',
                'REG_NOM' => 'Midi Pyrénée',
            ),
            14 => 
            array (
                'REG_CODE' => 'NP',
                'SEC_CODE' => 'N',
                'REG_NOM' => 'Nord Pas de Calais',
            ),
            15 => 
            array (
                'REG_CODE' => 'PA',
                'SEC_CODE' => 'S',
                'REG_NOM' => 'Provence Alpes Cote d\'Azur',
            ),
            16 => 
            array (
                'REG_CODE' => 'PC',
                'SEC_CODE' => 'O',
                'REG_NOM' => 'Poitou Charente',
            ),
            17 => 
            array (
                'REG_CODE' => 'PI',
                'SEC_CODE' => 'N',
                'REG_NOM' => 'Picardie',
            ),
            18 => 
            array (
                'REG_CODE' => 'PL',
                'SEC_CODE' => 'O',
                'REG_NOM' => 'Pays de Loire',
            ),
            19 => 
            array (
                'REG_CODE' => 'RA',
                'SEC_CODE' => 'E',
                'REG_NOM' => 'Rhone Alpes',
            ),
            20 => 
            array (
                'REG_CODE' => 'RO',
                'SEC_CODE' => 'S',
                'REG_NOM' => 'Roussilon',
            ),
            21 => 
            array (
                'REG_CODE' => 'VD',
                'SEC_CODE' => 'O',
                'REG_NOM' => 'Vendée',
            ),
        ));
        
        
    }
}
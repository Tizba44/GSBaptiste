<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaboTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('labo')->delete();
        
        \DB::table('labo')->insert(array (
            0 => 
            array (
                'LAB_CODE' => 'BC',
                'LAB_NOM' => 'Bichat',
                'LAB_CHEFVENTE' => 'Suzanne Terminus',
            ),
            1 => 
            array (
                'LAB_CODE' => 'GY',
                'LAB_NOM' => 'Gyverny',
                'LAB_CHEFVENTE' => 'Marcel MacDouglas',
            ),
            2 => 
            array (
                'LAB_CODE' => 'SW',
                'LAB_NOM' => 'Swiss Kane',
                'LAB_CHEFVENTE' => 'Alain Poutre',
            ),
        ));
        
        
    }
}
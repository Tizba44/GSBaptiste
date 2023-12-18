<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SwitchboardItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('switchboard_items')->delete();
        
        \DB::table('switchboard_items')->insert(array (
            0 => 
            array (
                'SwitchboardID' => 1,
                'ItemNumber' => 0,
                'ItemText' => 'Gestion des comptes rendus',
                'Command' => NULL,
                'Argument' => 'Par défaut',
            ),
            1 => 
            array (
                'SwitchboardID' => 1,
                'ItemNumber' => 1,
                'ItemText' => 'Comptes-Rendus',
                'Command' => 3,
                'Argument' => 'RAPPORT_VISITE',
            ),
            2 => 
            array (
                'SwitchboardID' => 1,
                'ItemNumber' => 2,
                'ItemText' => 'Visiteurs',
                'Command' => 3,
                'Argument' => 'F_VISITEUR',
            ),
            3 => 
            array (
                'SwitchboardID' => 1,
                'ItemNumber' => 3,
                'ItemText' => 'Praticiens',
                'Command' => 3,
                'Argument' => 'F_PRATICIEN',
            ),
            4 => 
            array (
                'SwitchboardID' => 1,
                'ItemNumber' => 4,
                'ItemText' => 'Medicaments',
                'Command' => 3,
                'Argument' => 'F_MEDICAMENT',
            ),
            5 => 
            array (
                'SwitchboardID' => 1,
                'ItemNumber' => 5,
                'ItemText' => 'Quitter',
                'Command' => 8,
                'Argument' => 'quitter',
            ),
        ));
        
        
    }
}
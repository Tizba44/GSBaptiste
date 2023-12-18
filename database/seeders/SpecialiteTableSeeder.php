<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SpecialiteTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('specialite')->delete();
        
        \DB::table('specialite')->insert(array (
            0 => 
            array (
                'SPE_CODE' => 'ACP',
                'SPE_LIBELLE' => 'anatomie et cytologie pathologiques',
            ),
            1 => 
            array (
                'SPE_CODE' => 'AMV',
                'SPE_LIBELLE' => 'angéiologie, médecine vasculaire',
            ),
            2 => 
            array (
                'SPE_CODE' => 'ARC',
                'SPE_LIBELLE' => 'anesthésiologie et réanimation chirurgicale',
            ),
            3 => 
            array (
                'SPE_CODE' => 'BM',
                'SPE_LIBELLE' => 'biologie médicale',
            ),
            4 => 
            array (
                'SPE_CODE' => 'CAC',
                'SPE_LIBELLE' => 'cardiologie et affections cardio-vasculaires',
            ),
            5 => 
            array (
                'SPE_CODE' => 'CCT',
                'SPE_LIBELLE' => 'chirurgie cardio-vasculaire et thoracique',
            ),
            6 => 
            array (
                'SPE_CODE' => 'CG',
                'SPE_LIBELLE' => 'chirurgie générale',
            ),
            7 => 
            array (
                'SPE_CODE' => 'CMF',
                'SPE_LIBELLE' => 'chirurgie maxillo-faciale',
            ),
            8 => 
            array (
                'SPE_CODE' => 'COM',
                'SPE_LIBELLE' => 'cancérologie, oncologie médicale',
            ),
            9 => 
            array (
                'SPE_CODE' => 'COT',
                'SPE_LIBELLE' => 'chirurgie orthopédique et traumatologie',
            ),
            10 => 
            array (
                'SPE_CODE' => 'CPR',
                'SPE_LIBELLE' => 'chirurgie plastique reconstructrice et esthétique',
            ),
            11 => 
            array (
                'SPE_CODE' => 'CU',
                'SPE_LIBELLE' => 'chirurgie urologique',
            ),
            12 => 
            array (
                'SPE_CODE' => 'CV',
                'SPE_LIBELLE' => 'chirurgie vasculaire',
            ),
            13 => 
            array (
                'SPE_CODE' => 'DN',
                'SPE_LIBELLE' => 'diabétologie-nutrition, nutrition',
            ),
            14 => 
            array (
                'SPE_CODE' => 'DV',
                'SPE_LIBELLE' => 'dermatologie et vénéréologie',
            ),
            15 => 
            array (
                'SPE_CODE' => 'EM',
                'SPE_LIBELLE' => 'endocrinologie et métabolismes',
            ),
            16 => 
            array (
                'SPE_CODE' => 'ETD',
                'SPE_LIBELLE' => 'évaluation et traitement de la douleur',
            ),
            17 => 
            array (
                'SPE_CODE' => 'GEH',
            'SPE_LIBELLE' => 'gastro-entérologie et hépatologie (appareil digestif)',
            ),
            18 => 
            array (
                'SPE_CODE' => 'GMO',
                'SPE_LIBELLE' => 'gynécologie médicale, obstétrique',
            ),
            19 => 
            array (
                'SPE_CODE' => 'GO',
                'SPE_LIBELLE' => 'gynécologie-obstétrique',
            ),
            20 => 
            array (
                'SPE_CODE' => 'HEM',
            'SPE_LIBELLE' => 'maladies du sang (hématologie)',
            ),
            21 => 
            array (
                'SPE_CODE' => 'MBS',
                'SPE_LIBELLE' => 'médecine et biologie du sport',
            ),
            22 => 
            array (
                'SPE_CODE' => 'MDT',
                'SPE_LIBELLE' => 'médecine du travail',
            ),
            23 => 
            array (
                'SPE_CODE' => 'MMO',
                'SPE_LIBELLE' => 'médecine manuelle - ostéopathie',
            ),
            24 => 
            array (
                'SPE_CODE' => 'MN',
                'SPE_LIBELLE' => 'médecine nucléaire',
            ),
            25 => 
            array (
                'SPE_CODE' => 'MPR',
                'SPE_LIBELLE' => 'médecine physique et de réadaptation',
            ),
            26 => 
            array (
                'SPE_CODE' => 'MTR',
                'SPE_LIBELLE' => 'médecine tropicale, pathologie infectieuse et tropicale',
            ),
            27 => 
            array (
                'SPE_CODE' => 'NEP',
                'SPE_LIBELLE' => 'néphrologie',
            ),
            28 => 
            array (
                'SPE_CODE' => 'NRC',
                'SPE_LIBELLE' => 'neurochirurgie',
            ),
            29 => 
            array (
                'SPE_CODE' => 'NRL',
                'SPE_LIBELLE' => 'neurologie',
            ),
            30 => 
            array (
                'SPE_CODE' => 'ODM',
                'SPE_LIBELLE' => 'orthopédie dento maxillo-faciale',
            ),
            31 => 
            array (
                'SPE_CODE' => 'OPH',
                'SPE_LIBELLE' => 'ophtalmologie',
            ),
            32 => 
            array (
                'SPE_CODE' => 'ORL',
                'SPE_LIBELLE' => 'oto-rhino-laryngologie',
            ),
            33 => 
            array (
                'SPE_CODE' => 'PEA',
                'SPE_LIBELLE' => 'psychiatrie de l\'enfant et de l\'adolescent',
            ),
            34 => 
            array (
                'SPE_CODE' => 'PME',
                'SPE_LIBELLE' => 'pédiatrie maladies des enfants',
            ),
            35 => 
            array (
                'SPE_CODE' => 'PNM',
                'SPE_LIBELLE' => 'pneumologie',
            ),
            36 => 
            array (
                'SPE_CODE' => 'PSC',
                'SPE_LIBELLE' => 'psychiatrie',
            ),
            37 => 
            array (
                'SPE_CODE' => 'RAD',
            'SPE_LIBELLE' => 'radiologie (radiodiagnostic et imagerie médicale)',
            ),
            38 => 
            array (
                'SPE_CODE' => 'RDT',
            'SPE_LIBELLE' => 'radiothérapie (oncologie option radiothérapie)',
            ),
            39 => 
            array (
                'SPE_CODE' => 'RGM',
                'SPE_LIBELLE' => 'reproduction et gynécologie médicale',
            ),
            40 => 
            array (
                'SPE_CODE' => 'RHU',
                'SPE_LIBELLE' => 'rhumatologie',
            ),
            41 => 
            array (
                'SPE_CODE' => 'STO',
                'SPE_LIBELLE' => 'stomatologie',
            ),
            42 => 
            array (
                'SPE_CODE' => 'SXL',
                'SPE_LIBELLE' => 'sexologie',
            ),
            43 => 
            array (
                'SPE_CODE' => 'TXA',
                'SPE_LIBELLE' => 'toxicomanie et alcoologie',
            ),
        ));
        
        
    }
}
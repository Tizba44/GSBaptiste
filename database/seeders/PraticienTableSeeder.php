<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PraticienTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('praticien')->delete();
        
        \DB::table('praticien')->insert(array (
            0 => 
            array (
                'PRA_NUM' => 1,
                'PRA_NOM' => 'Notini',
                'PRA_PRENOM' => 'Alain',
                'PRA_ADRESSE' => '114 r Authie',
                'PRA_CP' => '85000',
                'PRA_VILLE' => 'LA ROCHE SUR YON',
                'PRA_COEFNOTORIETE' => 290.03,
                'TYP_CODE' => 'MH',
            ),
            1 => 
            array (
                'PRA_NUM' => 2,
                'PRA_NOM' => 'Gosselin',
                'PRA_PRENOM' => 'Albert',
                'PRA_ADRESSE' => '13 r Devon',
                'PRA_CP' => '41000',
                'PRA_VILLE' => 'BLOIS',
                'PRA_COEFNOTORIETE' => 307.49,
                'TYP_CODE' => 'MV',
            ),
            2 => 
            array (
                'PRA_NUM' => 3,
                'PRA_NOM' => 'Delahaye',
                'PRA_PRENOM' => 'André',
                'PRA_ADRESSE' => '36 av 6 Juin',
                'PRA_CP' => '25000',
                'PRA_VILLE' => 'BESANCON',
                'PRA_COEFNOTORIETE' => 185.79,
                'TYP_CODE' => 'PS',
            ),
            3 => 
            array (
                'PRA_NUM' => 4,
                'PRA_NOM' => 'Leroux',
                'PRA_PRENOM' => 'André',
                'PRA_ADRESSE' => '47 av Robert Schuman',
                'PRA_CP' => '60000',
                'PRA_VILLE' => 'BEAUVAIS',
                'PRA_COEFNOTORIETE' => 172.04,
                'TYP_CODE' => 'PH',
            ),
            4 => 
            array (
                'PRA_NUM' => 5,
                'PRA_NOM' => 'Desmoulins',
                'PRA_PRENOM' => 'Anne',
                'PRA_ADRESSE' => '31 r St Jean',
                'PRA_CP' => '30000',
                'PRA_VILLE' => 'NIMES',
                'PRA_COEFNOTORIETE' => 94.75,
                'TYP_CODE' => 'PO',
            ),
            5 => 
            array (
                'PRA_NUM' => 6,
                'PRA_NOM' => 'Mouel',
                'PRA_PRENOM' => 'Anne',
                'PRA_ADRESSE' => '27 r Auvergne',
                'PRA_CP' => '80000',
                'PRA_VILLE' => 'AMIENS',
                'PRA_COEFNOTORIETE' => 45.2,
                'TYP_CODE' => 'MH',
            ),
            6 => 
            array (
                'PRA_NUM' => 7,
                'PRA_NOM' => 'Desgranges-Lentz',
                'PRA_PRENOM' => 'Antoine',
                'PRA_ADRESSE' => '1 r Albert de Mun',
                'PRA_CP' => '29000',
                'PRA_VILLE' => 'MORLAIX',
                'PRA_COEFNOTORIETE' => 20.07,
                'TYP_CODE' => 'MV',
            ),
            7 => 
            array (
                'PRA_NUM' => 8,
                'PRA_NOM' => 'Marcouiller',
                'PRA_PRENOM' => 'Arnaud',
                'PRA_ADRESSE' => '31 r St Jean',
                'PRA_CP' => '68000',
                'PRA_VILLE' => 'MULHOUSE',
                'PRA_COEFNOTORIETE' => 396.52,
                'TYP_CODE' => 'PS',
            ),
            8 => 
            array (
                'PRA_NUM' => 9,
                'PRA_NOM' => 'Dupuy',
                'PRA_PRENOM' => 'Benoit',
                'PRA_ADRESSE' => '9 r Demolombe',
                'PRA_CP' => '34000',
                'PRA_VILLE' => 'MONTPELLIER',
                'PRA_COEFNOTORIETE' => 395.66,
                'TYP_CODE' => 'PH',
            ),
            9 => 
            array (
                'PRA_NUM' => 10,
                'PRA_NOM' => 'Lerat',
                'PRA_PRENOM' => 'Bernard',
                'PRA_ADRESSE' => '31 r St Jean',
                'PRA_CP' => '59000',
                'PRA_VILLE' => 'LILLE',
                'PRA_COEFNOTORIETE' => 257.79,
                'TYP_CODE' => 'PO',
            ),
            10 => 
            array (
                'PRA_NUM' => 11,
                'PRA_NOM' => 'Marçais-Lefebvre',
                'PRA_PRENOM' => 'Bertrand',
                'PRA_ADRESSE' => '86Bis r Basse',
                'PRA_CP' => '67000',
                'PRA_VILLE' => 'STRASBOURG',
                'PRA_COEFNOTORIETE' => 450.96,
                'TYP_CODE' => 'MH',
            ),
            11 => 
            array (
                'PRA_NUM' => 12,
                'PRA_NOM' => 'Boscher',
                'PRA_PRENOM' => 'Bruno',
                'PRA_ADRESSE' => '94 r Falaise',
                'PRA_CP' => '10000',
                'PRA_VILLE' => 'TROYES',
                'PRA_COEFNOTORIETE' => 356.14,
                'TYP_CODE' => 'MV',
            ),
            12 => 
            array (
                'PRA_NUM' => 13,
                'PRA_NOM' => 'Morel',
                'PRA_PRENOM' => 'Catherine',
                'PRA_ADRESSE' => '21 r Chateaubriand',
                'PRA_CP' => '75000',
                'PRA_VILLE' => 'PARIS',
                'PRA_COEFNOTORIETE' => 379.57,
                'TYP_CODE' => 'PS',
            ),
            13 => 
            array (
                'PRA_NUM' => 14,
                'PRA_NOM' => 'Guivarch',
                'PRA_PRENOM' => 'Chantal',
                'PRA_ADRESSE' => '4 av Gén Laperrine',
                'PRA_CP' => '45000',
                'PRA_VILLE' => 'ORLEANS',
                'PRA_COEFNOTORIETE' => 114.56,
                'TYP_CODE' => 'PH',
            ),
            14 => 
            array (
                'PRA_NUM' => 15,
                'PRA_NOM' => 'Bessin-Grosdoit',
                'PRA_PRENOM' => 'Christophe',
                'PRA_ADRESSE' => '92 r Falaise',
                'PRA_CP' => '6000',
                'PRA_VILLE' => 'NICE',
                'PRA_COEFNOTORIETE' => 222.06,
                'TYP_CODE' => 'PO',
            ),
            15 => 
            array (
                'PRA_NUM' => 16,
                'PRA_NOM' => 'Rossa',
                'PRA_PRENOM' => 'Claire',
                'PRA_ADRESSE' => '14 av Thiès',
                'PRA_CP' => '6000',
                'PRA_VILLE' => 'NICE',
                'PRA_COEFNOTORIETE' => 529.78,
                'TYP_CODE' => 'MH',
            ),
            16 => 
            array (
                'PRA_NUM' => 17,
                'PRA_NOM' => 'Cauchy',
                'PRA_PRENOM' => 'Denis',
                'PRA_ADRESSE' => '5 av Ste Thérèse',
                'PRA_CP' => '11000',
                'PRA_VILLE' => 'NARBONNE',
                'PRA_COEFNOTORIETE' => 458.82,
                'TYP_CODE' => 'MV',
            ),
            17 => 
            array (
                'PRA_NUM' => 18,
                'PRA_NOM' => 'Gaffé',
                'PRA_PRENOM' => 'Dominique',
                'PRA_ADRESSE' => '9 av 1ère Armée Française',
                'PRA_CP' => '35000',
                'PRA_VILLE' => 'RENNES',
                'PRA_COEFNOTORIETE' => 213.4,
                'TYP_CODE' => 'PS',
            ),
            18 => 
            array (
                'PRA_NUM' => 19,
                'PRA_NOM' => 'Guenon',
                'PRA_PRENOM' => 'Dominique',
                'PRA_ADRESSE' => '98 bd Mar Lyautey',
                'PRA_CP' => '44000',
                'PRA_VILLE' => 'NANTES',
                'PRA_COEFNOTORIETE' => 175.89,
                'TYP_CODE' => 'PH',
            ),
            19 => 
            array (
                'PRA_NUM' => 20,
                'PRA_NOM' => 'Prévot',
                'PRA_PRENOM' => 'Dominique',
                'PRA_ADRESSE' => '29 r Lucien Nelle',
                'PRA_CP' => '87000',
                'PRA_VILLE' => 'LIMOGES',
                'PRA_COEFNOTORIETE' => 151.36,
                'TYP_CODE' => 'PO',
            ),
            20 => 
            array (
                'PRA_NUM' => 21,
                'PRA_NOM' => 'Houchard',
                'PRA_PRENOM' => 'Eliane',
                'PRA_ADRESSE' => '9 r Demolombe',
                'PRA_CP' => '49100',
                'PRA_VILLE' => 'ANGERS',
                'PRA_COEFNOTORIETE' => 436.96,
                'TYP_CODE' => 'MH',
            ),
            21 => 
            array (
                'PRA_NUM' => 22,
                'PRA_NOM' => 'Desmons',
                'PRA_PRENOM' => 'Elisabeth',
                'PRA_ADRESSE' => '51 r Bernières',
                'PRA_CP' => '29000',
                'PRA_VILLE' => 'QUIMPER',
                'PRA_COEFNOTORIETE' => 281.17,
                'TYP_CODE' => 'MV',
            ),
            22 => 
            array (
                'PRA_NUM' => 23,
                'PRA_NOM' => 'Flament',
                'PRA_PRENOM' => 'Elisabeth',
                'PRA_ADRESSE' => '11 r Pasteur',
                'PRA_CP' => '35000',
                'PRA_VILLE' => 'RENNES',
                'PRA_COEFNOTORIETE' => 315.6,
                'TYP_CODE' => 'PS',
            ),
            23 => 
            array (
                'PRA_NUM' => 24,
                'PRA_NOM' => 'Goussard',
                'PRA_PRENOM' => 'Emmanuel',
                'PRA_ADRESSE' => '9 r Demolombe',
                'PRA_CP' => '41000',
                'PRA_VILLE' => 'BLOIS',
                'PRA_COEFNOTORIETE' => 40.72,
                'TYP_CODE' => 'PH',
            ),
            24 => 
            array (
                'PRA_NUM' => 25,
                'PRA_NOM' => 'Desprez',
                'PRA_PRENOM' => 'Eric',
                'PRA_ADRESSE' => '9 r Vaucelles',
                'PRA_CP' => '33000',
                'PRA_VILLE' => 'BORDEAUX',
                'PRA_COEFNOTORIETE' => 406.85,
                'TYP_CODE' => 'PO',
            ),
            25 => 
            array (
                'PRA_NUM' => 26,
                'PRA_NOM' => 'Coste',
                'PRA_PRENOM' => 'Evelyne',
                'PRA_ADRESSE' => '29 r Lucien Nelle',
                'PRA_CP' => '19000',
                'PRA_VILLE' => 'TULLE',
                'PRA_COEFNOTORIETE' => 441.87,
                'TYP_CODE' => 'MH',
            ),
            26 => 
            array (
                'PRA_NUM' => 27,
                'PRA_NOM' => 'Lefebvre',
                'PRA_PRENOM' => 'Frédéric',
                'PRA_ADRESSE' => '2 pl Wurzburg',
                'PRA_CP' => '55000',
                'PRA_VILLE' => 'VERDUN',
                'PRA_COEFNOTORIETE' => 573.63,
                'TYP_CODE' => 'MV',
            ),
            27 => 
            array (
                'PRA_NUM' => 28,
                'PRA_NOM' => 'Lemée',
                'PRA_PRENOM' => 'Frédéric',
                'PRA_ADRESSE' => '29 av 6 Juin',
                'PRA_CP' => '56000',
                'PRA_VILLE' => 'VANNES',
                'PRA_COEFNOTORIETE' => 326.4,
                'TYP_CODE' => 'PS',
            ),
            28 => 
            array (
                'PRA_NUM' => 29,
                'PRA_NOM' => 'Martin',
                'PRA_PRENOM' => 'Frédéric',
                'PRA_ADRESSE' => 'Bât A 90 r Bayeux',
                'PRA_CP' => '70000',
                'PRA_VILLE' => 'VESOUL',
                'PRA_COEFNOTORIETE' => 506.06,
                'TYP_CODE' => 'PH',
            ),
            29 => 
            array (
                'PRA_NUM' => 30,
                'PRA_NOM' => 'Marie',
                'PRA_PRENOM' => 'Frédérique',
                'PRA_ADRESSE' => '172 r Caponière',
                'PRA_CP' => '70000',
                'PRA_VILLE' => 'VESOUL',
                'PRA_COEFNOTORIETE' => 313.31,
                'TYP_CODE' => 'PO',
            ),
            30 => 
            array (
                'PRA_NUM' => 31,
                'PRA_NOM' => 'Rosenstech',
                'PRA_PRENOM' => 'Geneviève',
                'PRA_ADRESSE' => '27 r Auvergne',
                'PRA_CP' => '75000',
                'PRA_VILLE' => 'PARIS',
                'PRA_COEFNOTORIETE' => 366.82,
                'TYP_CODE' => 'MH',
            ),
            31 => 
            array (
                'PRA_NUM' => 32,
                'PRA_NOM' => 'Pontavice',
                'PRA_PRENOM' => 'Ghislaine',
                'PRA_ADRESSE' => '8 r Gaillon',
                'PRA_CP' => '86000',
                'PRA_VILLE' => 'POITIERS',
                'PRA_COEFNOTORIETE' => 265.58,
                'TYP_CODE' => 'MV',
            ),
            32 => 
            array (
                'PRA_NUM' => 33,
                'PRA_NOM' => 'Leveneur-Mosquet',
                'PRA_PRENOM' => 'Guillaume',
                'PRA_ADRESSE' => '47 av Robert Schuman',
                'PRA_CP' => '64000',
                'PRA_VILLE' => 'PAU',
                'PRA_COEFNOTORIETE' => 184.97,
                'TYP_CODE' => 'PS',
            ),
            33 => 
            array (
                'PRA_NUM' => 34,
                'PRA_NOM' => 'Blanchais',
                'PRA_PRENOM' => 'Guy',
                'PRA_ADRESSE' => '30 r Authie',
                'PRA_CP' => '8000',
                'PRA_VILLE' => 'SEDAN',
                'PRA_COEFNOTORIETE' => 502.48,
                'TYP_CODE' => 'PH',
            ),
            34 => 
            array (
                'PRA_NUM' => 35,
                'PRA_NOM' => 'Leveneur',
                'PRA_PRENOM' => 'Hugues',
                'PRA_ADRESSE' => '7 pl St Gilles',
                'PRA_CP' => '62000',
                'PRA_VILLE' => 'ARRAS',
                'PRA_COEFNOTORIETE' => 7.39,
                'TYP_CODE' => 'PO',
            ),
            35 => 
            array (
                'PRA_NUM' => 36,
                'PRA_NOM' => 'Mosquet',
                'PRA_PRENOM' => 'Isabelle',
                'PRA_ADRESSE' => '22 r Jules Verne',
                'PRA_CP' => '76000',
                'PRA_VILLE' => 'ROUEN',
                'PRA_COEFNOTORIETE' => 77.1,
                'TYP_CODE' => 'MH',
            ),
            36 => 
            array (
                'PRA_NUM' => 37,
                'PRA_NOM' => 'Giraudon',
                'PRA_PRENOM' => 'Jean-Christophe',
                'PRA_ADRESSE' => '1 r Albert de Mun',
                'PRA_CP' => '38100',
                'PRA_VILLE' => 'VIENNE',
                'PRA_COEFNOTORIETE' => 92.62,
                'TYP_CODE' => 'MV',
            ),
            37 => 
            array (
                'PRA_NUM' => 38,
                'PRA_NOM' => 'Marie',
                'PRA_PRENOM' => 'Jean-Claude',
                'PRA_ADRESSE' => '26 r Hérouville',
                'PRA_CP' => '69000',
                'PRA_VILLE' => 'LYON',
                'PRA_COEFNOTORIETE' => 120.1,
                'TYP_CODE' => 'PS',
            ),
            38 => 
            array (
                'PRA_NUM' => 39,
                'PRA_NOM' => 'Maury',
                'PRA_PRENOM' => 'Jean-François',
                'PRA_ADRESSE' => '5 r Pierre Girard',
                'PRA_CP' => '71000',
                'PRA_VILLE' => 'CHALON SUR SAONE',
                'PRA_COEFNOTORIETE' => 13.73,
                'TYP_CODE' => 'PH',
            ),
            39 => 
            array (
                'PRA_NUM' => 40,
                'PRA_NOM' => 'Dennel',
                'PRA_PRENOM' => 'Jean-Louis',
                'PRA_ADRESSE' => '7 pl St Gilles',
                'PRA_CP' => '28000',
                'PRA_VILLE' => 'CHARTRES',
                'PRA_COEFNOTORIETE' => 550.69,
                'TYP_CODE' => 'PO',
            ),
            40 => 
            array (
                'PRA_NUM' => 41,
                'PRA_NOM' => 'Ain',
                'PRA_PRENOM' => 'Jean-Pierre',
                'PRA_ADRESSE' => '4 résid Olympia',
                'PRA_CP' => '2000',
                'PRA_VILLE' => 'LAON',
                'PRA_COEFNOTORIETE' => 5.59,
                'TYP_CODE' => 'MH',
            ),
            41 => 
            array (
                'PRA_NUM' => 42,
                'PRA_NOM' => 'Chemery',
                'PRA_PRENOM' => 'Jean-Pierre',
                'PRA_ADRESSE' => '51 pl Ancienne Boucherie',
                'PRA_CP' => '14000',
                'PRA_VILLE' => 'CAEN',
                'PRA_COEFNOTORIETE' => 396.58,
                'TYP_CODE' => 'MV',
            ),
            42 => 
            array (
                'PRA_NUM' => 43,
                'PRA_NOM' => 'Comoz',
                'PRA_PRENOM' => 'Jean-Pierre',
                'PRA_ADRESSE' => '35 r Auguste Lechesne',
                'PRA_CP' => '18000',
                'PRA_VILLE' => 'BOURGES',
                'PRA_COEFNOTORIETE' => 340.35,
                'TYP_CODE' => 'PS',
            ),
            43 => 
            array (
                'PRA_NUM' => 44,
                'PRA_NOM' => 'Desfaudais',
                'PRA_PRENOM' => 'Jean-Pierre',
                'PRA_ADRESSE' => '7 pl St Gilles',
                'PRA_CP' => '29000',
                'PRA_VILLE' => 'BREST',
                'PRA_COEFNOTORIETE' => 71.76,
                'TYP_CODE' => 'PH',
            ),
            44 => 
            array (
                'PRA_NUM' => 45,
                'PRA_NOM' => 'Phan',
                'PRA_PRENOM' => 'JérÃ´me',
                'PRA_ADRESSE' => '9 r Clos Caillet',
                'PRA_CP' => '79000',
                'PRA_VILLE' => 'NIORT',
                'PRA_COEFNOTORIETE' => 451.61,
                'TYP_CODE' => 'PO',
            ),
            45 => 
            array (
                'PRA_NUM' => 46,
                'PRA_NOM' => 'Riou',
                'PRA_PRENOM' => 'Line',
                'PRA_ADRESSE' => '43 bd Gén Vanier',
                'PRA_CP' => '77000',
                'PRA_VILLE' => 'MARNE LA VALLEE',
                'PRA_COEFNOTORIETE' => 193.25,
                'TYP_CODE' => 'MH',
            ),
            46 => 
            array (
                'PRA_NUM' => 47,
                'PRA_NOM' => 'Chubilleau',
                'PRA_PRENOM' => 'Louis',
                'PRA_ADRESSE' => '46 r Eglise',
                'PRA_CP' => '17000',
                'PRA_VILLE' => 'SAINTES',
                'PRA_COEFNOTORIETE' => 202.07,
                'TYP_CODE' => 'MV',
            ),
            47 => 
            array (
                'PRA_NUM' => 48,
                'PRA_NOM' => 'Lebrun',
                'PRA_PRENOM' => 'Lucette',
                'PRA_ADRESSE' => '178 r Auge',
                'PRA_CP' => '54000',
                'PRA_VILLE' => 'NANCY',
                'PRA_COEFNOTORIETE' => 410.41,
                'TYP_CODE' => 'PS',
            ),
            48 => 
            array (
                'PRA_NUM' => 49,
                'PRA_NOM' => 'Goessens',
                'PRA_PRENOM' => 'Marc',
                'PRA_ADRESSE' => '6 av 6 Juin',
                'PRA_CP' => '39000',
                'PRA_VILLE' => 'DOLE',
                'PRA_COEFNOTORIETE' => 548.57,
                'TYP_CODE' => 'PH',
            ),
            49 => 
            array (
                'PRA_NUM' => 50,
                'PRA_NOM' => 'Laforge',
                'PRA_PRENOM' => 'Marc',
                'PRA_ADRESSE' => '5 résid Prairie',
                'PRA_CP' => '50000',
                'PRA_VILLE' => 'SAINT LO',
                'PRA_COEFNOTORIETE' => 265.05,
                'TYP_CODE' => 'PO',
            ),
            50 => 
            array (
                'PRA_NUM' => 51,
                'PRA_NOM' => 'Millereau',
                'PRA_PRENOM' => 'Marc',
                'PRA_ADRESSE' => '36 av 6 Juin',
                'PRA_CP' => '72000',
                'PRA_VILLE' => 'LA FERTE BERNARD',
                'PRA_COEFNOTORIETE' => 430.42,
                'TYP_CODE' => 'MH',
            ),
            51 => 
            array (
                'PRA_NUM' => 52,
                'PRA_NOM' => 'Dauverne',
                'PRA_PRENOM' => 'Marie-Christine',
                'PRA_ADRESSE' => '69 av Charlemagne',
                'PRA_CP' => '21000',
                'PRA_VILLE' => 'DIJON',
                'PRA_COEFNOTORIETE' => 281.05,
                'TYP_CODE' => 'MV',
            ),
            52 => 
            array (
                'PRA_NUM' => 53,
                'PRA_NOM' => 'Vittorio',
                'PRA_PRENOM' => 'Myriam',
                'PRA_ADRESSE' => '3 pl Champlain',
                'PRA_CP' => '94000',
                'PRA_VILLE' => 'BOISSY SAINT LEGER',
                'PRA_COEFNOTORIETE' => 356.23,
                'TYP_CODE' => 'PS',
            ),
            53 => 
            array (
                'PRA_NUM' => 54,
                'PRA_NOM' => 'Lapasset',
                'PRA_PRENOM' => 'Nhieu',
                'PRA_ADRESSE' => '31 av 6 Juin',
                'PRA_CP' => '52000',
                'PRA_VILLE' => 'CHAUMONT',
                'PRA_COEFNOTORIETE' => 107.0,
                'TYP_CODE' => 'PH',
            ),
            54 => 
            array (
                'PRA_NUM' => 55,
                'PRA_NOM' => 'Plantet-Besnier',
                'PRA_PRENOM' => 'Nicole',
                'PRA_ADRESSE' => '10 av 1ère Armée Française',
                'PRA_CP' => '86000',
                'PRA_VILLE' => 'CHATELLEREAULT',
                'PRA_COEFNOTORIETE' => 369.94,
                'TYP_CODE' => 'PO',
            ),
            55 => 
            array (
                'PRA_NUM' => 56,
                'PRA_NOM' => 'Chubilleau',
                'PRA_PRENOM' => 'Pascal',
                'PRA_ADRESSE' => '3 r Hastings',
                'PRA_CP' => '15000',
                'PRA_VILLE' => 'AURRILLAC',
                'PRA_COEFNOTORIETE' => 290.75,
                'TYP_CODE' => 'MH',
            ),
            56 => 
            array (
                'PRA_NUM' => 57,
                'PRA_NOM' => 'Robert',
                'PRA_PRENOM' => 'Pascal',
                'PRA_ADRESSE' => '31 r St Jean',
                'PRA_CP' => '93000',
                'PRA_VILLE' => 'BOBIGNY',
                'PRA_COEFNOTORIETE' => 162.41,
                'TYP_CODE' => 'MV',
            ),
            57 => 
            array (
                'PRA_NUM' => 58,
                'PRA_NOM' => 'Jean',
                'PRA_PRENOM' => 'Pascale',
                'PRA_ADRESSE' => '114 r Authie',
                'PRA_CP' => '49100',
                'PRA_VILLE' => 'SAUMUR',
                'PRA_COEFNOTORIETE' => 375.52,
                'TYP_CODE' => 'PS',
            ),
            58 => 
            array (
                'PRA_NUM' => 59,
                'PRA_NOM' => 'Chanteloube',
                'PRA_PRENOM' => 'Patrice',
                'PRA_ADRESSE' => '14 av Thiès',
                'PRA_CP' => '13000',
                'PRA_VILLE' => 'MARSEILLE',
                'PRA_COEFNOTORIETE' => 478.01,
                'TYP_CODE' => 'PH',
            ),
            59 => 
            array (
                'PRA_NUM' => 60,
                'PRA_NOM' => 'Lecuirot',
                'PRA_PRENOM' => 'Patrice',
                'PRA_ADRESSE' => 'résid St Pères 55 r Pigacière',
                'PRA_CP' => '54000',
                'PRA_VILLE' => 'NANCY',
                'PRA_COEFNOTORIETE' => 239.66,
                'TYP_CODE' => 'PO',
            ),
            60 => 
            array (
                'PRA_NUM' => 61,
                'PRA_NOM' => 'Gandon',
                'PRA_PRENOM' => 'Patrick',
                'PRA_ADRESSE' => '47 av Robert Schuman',
                'PRA_CP' => '37000',
                'PRA_VILLE' => 'TOURS',
                'PRA_COEFNOTORIETE' => 599.06,
                'TYP_CODE' => 'MH',
            ),
            61 => 
            array (
                'PRA_NUM' => 62,
                'PRA_NOM' => 'Mirouf',
                'PRA_PRENOM' => 'Patrick',
                'PRA_ADRESSE' => '22 r Puits Picard',
                'PRA_CP' => '74000',
                'PRA_VILLE' => 'ANNECY',
                'PRA_COEFNOTORIETE' => 458.42,
                'TYP_CODE' => 'MV',
            ),
            62 => 
            array (
                'PRA_NUM' => 63,
                'PRA_NOM' => 'Boireaux',
                'PRA_PRENOM' => 'Philippe',
                'PRA_ADRESSE' => '14 av Thiès',
                'PRA_CP' => '10000',
                'PRA_VILLE' => 'CHALON EN CHAMPAGNE',
                'PRA_COEFNOTORIETE' => 454.48,
                'TYP_CODE' => 'PS',
            ),
            63 => 
            array (
                'PRA_NUM' => 64,
                'PRA_NOM' => 'Cendrier',
                'PRA_PRENOM' => 'Philippe',
                'PRA_ADRESSE' => '7 pl St Gilles',
                'PRA_CP' => '12000',
                'PRA_VILLE' => 'RODEZ',
                'PRA_COEFNOTORIETE' => 164.16,
                'TYP_CODE' => 'PH',
            ),
            64 => 
            array (
                'PRA_NUM' => 65,
                'PRA_NOM' => 'Duhamel',
                'PRA_PRENOM' => 'Philippe',
                'PRA_ADRESSE' => '114 r Authie',
                'PRA_CP' => '34000',
                'PRA_VILLE' => 'MONTPELLIER',
                'PRA_COEFNOTORIETE' => 98.62,
                'TYP_CODE' => 'PO',
            ),
            65 => 
            array (
                'PRA_NUM' => 66,
                'PRA_NOM' => 'Grigy',
                'PRA_PRENOM' => 'Philippe',
                'PRA_ADRESSE' => '15 r Mélingue',
                'PRA_CP' => '44000',
                'PRA_VILLE' => 'CLISSON',
                'PRA_COEFNOTORIETE' => 285.1,
                'TYP_CODE' => 'MH',
            ),
            66 => 
            array (
                'PRA_NUM' => 67,
                'PRA_NOM' => 'Linard',
                'PRA_PRENOM' => 'Philippe',
                'PRA_ADRESSE' => '1 r Albert de Mun',
                'PRA_CP' => '81000',
                'PRA_VILLE' => 'ALBI',
                'PRA_COEFNOTORIETE' => 486.3,
                'TYP_CODE' => 'MV',
            ),
            67 => 
            array (
                'PRA_NUM' => 68,
                'PRA_NOM' => 'Lozier',
                'PRA_PRENOM' => 'Philippe',
                'PRA_ADRESSE' => '8 r Gaillon',
                'PRA_CP' => '31000',
                'PRA_VILLE' => 'TOULOUSE',
                'PRA_COEFNOTORIETE' => 48.4,
                'TYP_CODE' => 'PS',
            ),
            68 => 
            array (
                'PRA_NUM' => 69,
                'PRA_NOM' => 'Dechâtre',
                'PRA_PRENOM' => 'Pierre',
                'PRA_ADRESSE' => '63 av Thiès',
                'PRA_CP' => '23000',
                'PRA_VILLE' => 'MONTLUCON',
                'PRA_COEFNOTORIETE' => 253.75,
                'TYP_CODE' => 'PH',
            ),
            69 => 
            array (
                'PRA_NUM' => 70,
                'PRA_NOM' => 'Goessens',
                'PRA_PRENOM' => 'Pierre',
                'PRA_ADRESSE' => '22 r Jean Romain',
                'PRA_CP' => '40000',
                'PRA_VILLE' => 'MONT DE MARSAN',
                'PRA_COEFNOTORIETE' => 426.19,
                'TYP_CODE' => 'PO',
            ),
            70 => 
            array (
                'PRA_NUM' => 71,
                'PRA_NOM' => 'Leménager',
                'PRA_PRENOM' => 'Pierre',
                'PRA_ADRESSE' => '39 av 6 Juin',
                'PRA_CP' => '57000',
                'PRA_VILLE' => 'METZ',
                'PRA_COEFNOTORIETE' => 118.7,
                'TYP_CODE' => 'MH',
            ),
            71 => 
            array (
                'PRA_NUM' => 72,
                'PRA_NOM' => 'Née',
                'PRA_PRENOM' => 'Pierre',
                'PRA_ADRESSE' => '39 av 6 Juin',
                'PRA_CP' => '82000',
                'PRA_VILLE' => 'MONTAUBAN',
                'PRA_COEFNOTORIETE' => 72.54,
                'TYP_CODE' => 'MV',
            ),
            72 => 
            array (
                'PRA_NUM' => 73,
                'PRA_NOM' => 'Guyot',
                'PRA_PRENOM' => 'Pierre-Laurent',
                'PRA_ADRESSE' => '43 bd Gén Vanier',
                'PRA_CP' => '48000',
                'PRA_VILLE' => 'MENDE',
                'PRA_COEFNOTORIETE' => 352.31,
                'TYP_CODE' => 'PS',
            ),
            73 => 
            array (
                'PRA_NUM' => 74,
                'PRA_NOM' => 'Chauchard',
                'PRA_PRENOM' => 'Roger',
                'PRA_ADRESSE' => '9 r Vaucelles',
                'PRA_CP' => '13000',
                'PRA_VILLE' => 'MARSEILLE',
                'PRA_COEFNOTORIETE' => 552.19,
                'TYP_CODE' => 'PH',
            ),
            74 => 
            array (
                'PRA_NUM' => 75,
                'PRA_NOM' => 'Mabire',
                'PRA_PRENOM' => 'Roland',
                'PRA_ADRESSE' => '11 r Boutiques',
                'PRA_CP' => '67000',
                'PRA_VILLE' => 'STRASBOURG',
                'PRA_COEFNOTORIETE' => 422.39,
                'TYP_CODE' => 'PO',
            ),
            75 => 
            array (
                'PRA_NUM' => 76,
                'PRA_NOM' => 'Leroy',
                'PRA_PRENOM' => 'Soazig',
                'PRA_ADRESSE' => '45 r Boutiques',
                'PRA_CP' => '61000',
                'PRA_VILLE' => 'ALENCON',
                'PRA_COEFNOTORIETE' => 570.67,
                'TYP_CODE' => 'MH',
            ),
            76 => 
            array (
                'PRA_NUM' => 77,
                'PRA_NOM' => 'Guyot',
                'PRA_PRENOM' => 'Stéphane',
                'PRA_ADRESSE' => '26 r Hérouville',
                'PRA_CP' => '46000',
                'PRA_VILLE' => 'FIGEAC',
                'PRA_COEFNOTORIETE' => 28.85,
                'TYP_CODE' => 'MV',
            ),
            77 => 
            array (
                'PRA_NUM' => 78,
                'PRA_NOM' => 'Delposen',
                'PRA_PRENOM' => 'Sylvain',
                'PRA_ADRESSE' => '39 av 6 Juin',
                'PRA_CP' => '27000',
                'PRA_VILLE' => 'DREUX',
                'PRA_COEFNOTORIETE' => 292.01,
                'TYP_CODE' => 'PS',
            ),
            78 => 
            array (
                'PRA_NUM' => 79,
                'PRA_NOM' => 'Rault',
                'PRA_PRENOM' => 'Sylvie',
                'PRA_ADRESSE' => '15 bd Richemond',
                'PRA_CP' => '2000',
                'PRA_VILLE' => 'SOISSON',
                'PRA_COEFNOTORIETE' => 526.6,
                'TYP_CODE' => 'PH',
            ),
            79 => 
            array (
                'PRA_NUM' => 80,
                'PRA_NOM' => 'Renouf',
                'PRA_PRENOM' => 'Sylvie',
                'PRA_ADRESSE' => '98 bd Mar Lyautey',
                'PRA_CP' => '88000',
                'PRA_VILLE' => 'EPINAL',
                'PRA_COEFNOTORIETE' => 425.24,
                'TYP_CODE' => 'PO',
            ),
            80 => 
            array (
                'PRA_NUM' => 81,
                'PRA_NOM' => 'Alliet-Grach',
                'PRA_PRENOM' => 'Thierry',
                'PRA_ADRESSE' => '14 av Thiès',
                'PRA_CP' => '7000',
                'PRA_VILLE' => 'PRIVAS',
                'PRA_COEFNOTORIETE' => 451.31,
                'TYP_CODE' => 'MH',
            ),
            81 => 
            array (
                'PRA_NUM' => 82,
                'PRA_NOM' => 'Bayard',
                'PRA_PRENOM' => 'Thierry',
                'PRA_ADRESSE' => '92 r Falaise',
                'PRA_CP' => '42000',
                'PRA_VILLE' => 'SAINT ETIENNE',
                'PRA_COEFNOTORIETE' => 271.71,
                'TYP_CODE' => 'MV',
            ),
            82 => 
            array (
                'PRA_NUM' => 83,
                'PRA_NOM' => 'Gauchet',
                'PRA_PRENOM' => 'Thierry',
                'PRA_ADRESSE' => '7 r Desmoueux',
                'PRA_CP' => '38100',
                'PRA_VILLE' => 'GRENOBLE',
                'PRA_COEFNOTORIETE' => 406.1,
                'TYP_CODE' => 'PS',
            ),
            83 => 
            array (
                'PRA_NUM' => 84,
                'PRA_NOM' => 'Bobichon',
                'PRA_PRENOM' => 'Tristan',
                'PRA_ADRESSE' => '219 r Caponière',
                'PRA_CP' => '9000',
                'PRA_VILLE' => 'FOIX',
                'PRA_COEFNOTORIETE' => 218.36,
                'TYP_CODE' => 'PH',
            ),
            84 => 
            array (
                'PRA_NUM' => 85,
                'PRA_NOM' => 'Duchemin-Laniel',
                'PRA_PRENOM' => 'Véronique',
                'PRA_ADRESSE' => '130 r St Jean',
                'PRA_CP' => '33000',
                'PRA_VILLE' => 'LIBOURNE',
                'PRA_COEFNOTORIETE' => 265.61,
                'TYP_CODE' => 'PO',
            ),
            85 => 
            array (
                'PRA_NUM' => 86,
                'PRA_NOM' => 'Laurent',
                'PRA_PRENOM' => 'Younès',
                'PRA_ADRESSE' => '34 r Demolombe',
                'PRA_CP' => '53000',
                'PRA_VILLE' => 'MAYENNE',
                'PRA_COEFNOTORIETE' => 496.1,
                'TYP_CODE' => 'MH',
            ),
        ));
        
        
    }
}
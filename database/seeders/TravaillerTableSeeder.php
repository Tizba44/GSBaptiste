<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TravaillerTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('travailler')->delete();
        
        \DB::table('travailler')->insert(array (
            0 => 
            array (
                'VIS_MATRICULE' => 'p49',
                'JJMMAA' => '1977-10-03 00:00:00',
                'REG_CODE' => 'CE',
                'TRA_ROLE' => 'Visiteur',
            ),
            1 => 
            array (
                'VIS_MATRICULE' => 'k53',
                'JJMMAA' => '1983-03-23 00:00:00',
                'REG_CODE' => 'CA',
                'TRA_ROLE' => 'Visiteur',
            ),
            2 => 
            array (
                'VIS_MATRICULE' => 'r24',
                'JJMMAA' => '1984-07-29 00:00:00',
                'REG_CODE' => 'BN',
                'TRA_ROLE' => 'Visiteur',
            ),
            3 => 
            array (
                'VIS_MATRICULE' => 'g53',
                'JJMMAA' => '1985-10-02 00:00:00',
                'REG_CODE' => 'BG',
                'TRA_ROLE' => 'Visiteur',
            ),
            4 => 
            array (
                'VIS_MATRICULE' => 'a55',
                'JJMMAA' => '1987-07-17 00:00:00',
                'REG_CODE' => 'MP',
                'TRA_ROLE' => 'Visiteur',
            ),
            5 => 
            array (
                'VIS_MATRICULE' => 'm35',
                'JJMMAA' => '1987-10-06 00:00:00',
                'REG_CODE' => 'MP',
                'TRA_ROLE' => 'Visiteur',
            ),
            6 => 
            array (
                'VIS_MATRICULE' => 'e39',
                'JJMMAA' => '1988-04-26 00:00:00',
                'REG_CODE' => 'IF',
                'TRA_ROLE' => 'Visiteur',
            ),
            7 => 
            array (
                'VIS_MATRICULE' => 'c14',
                'JJMMAA' => '1989-02-01 00:00:00',
                'REG_CODE' => 'PA',
                'TRA_ROLE' => 'Visiteur',
            ),
            8 => 
            array (
                'VIS_MATRICULE' => 'e22',
                'JJMMAA' => '1989-03-24 00:00:00',
                'REG_CODE' => 'AL',
                'TRA_ROLE' => 'Visiteur',
            ),
            9 => 
            array (
                'VIS_MATRICULE' => 'p7',
                'JJMMAA' => '1990-03-01 00:00:00',
                'REG_CODE' => 'RO',
                'TRA_ROLE' => 'Visiteur',
            ),
            10 => 
            array (
                'VIS_MATRICULE' => 'r58',
                'JJMMAA' => '1990-06-30 00:00:00',
                'REG_CODE' => 'BG',
                'TRA_ROLE' => 'Visiteur',
            ),
            11 => 
            array (
                'VIS_MATRICULE' => 'm45',
                'JJMMAA' => '1990-10-13 00:00:00',
                'REG_CODE' => 'AL',
                'TRA_ROLE' => 'Visiteur',
            ),
            12 => 
            array (
                'VIS_MATRICULE' => 'e5',
                'JJMMAA' => '1990-11-27 00:00:00',
                'REG_CODE' => 'MP',
                'TRA_ROLE' => 'Visiteur',
            ),
            13 => 
            array (
                'VIS_MATRICULE' => 't60',
                'JJMMAA' => '1991-03-29 00:00:00',
                'REG_CODE' => 'CE',
                'TRA_ROLE' => 'Visiteur',
            ),
            14 => 
            array (
                'VIS_MATRICULE' => 'c54',
                'JJMMAA' => '1991-04-09 00:00:00',
                'REG_CODE' => 'AL',
                'TRA_ROLE' => 'Visiteur',
            ),
            15 => 
            array (
                'VIS_MATRICULE' => 'p8',
                'JJMMAA' => '1991-06-23 00:00:00',
                'REG_CODE' => 'BO',
                'TRA_ROLE' => 'Visiteur',
            ),
            16 => 
            array (
                'VIS_MATRICULE' => 'a17',
                'JJMMAA' => '1991-08-26 00:00:00',
                'REG_CODE' => 'RA',
                'TRA_ROLE' => 'Visiteur',
            ),
            17 => 
            array (
                'VIS_MATRICULE' => 'e52',
                'JJMMAA' => '1991-10-31 00:00:00',
                'REG_CODE' => 'HN',
                'TRA_ROLE' => 'Visiteur',
            ),
            18 => 
            array (
                'VIS_MATRICULE' => 'd13',
                'JJMMAA' => '1991-12-05 00:00:00',
                'REG_CODE' => 'PL',
                'TRA_ROLE' => 'Visiteur',
            ),
            19 => 
            array (
                'VIS_MATRICULE' => 'k53',
                'JJMMAA' => '1992-04-03 00:00:00',
                'REG_CODE' => 'AL',
                'TRA_ROLE' => 'Délégué',
            ),
            20 => 
            array (
                'VIS_MATRICULE' => 'c3',
                'JJMMAA' => '1992-05-05 00:00:00',
                'REG_CODE' => 'CA',
                'TRA_ROLE' => 'Visiteur',
            ),
            21 => 
            array (
                'VIS_MATRICULE' => 'n58',
                'JJMMAA' => '1992-08-30 00:00:00',
                'REG_CODE' => 'CE',
                'TRA_ROLE' => 'Visiteur',
            ),
            22 => 
            array (
                'VIS_MATRICULE' => 's21',
                'JJMMAA' => '1992-09-25 00:00:00',
                'REG_CODE' => 'LI',
                'TRA_ROLE' => 'Visiteur',
            ),
            23 => 
            array (
                'VIS_MATRICULE' => 'h40',
                'JJMMAA' => '1992-11-01 00:00:00',
                'REG_CODE' => 'CA',
                'TRA_ROLE' => 'Visiteur',
            ),
            24 => 
            array (
                'VIS_MATRICULE' => 'a131',
                'JJMMAA' => '1992-12-11 00:00:00',
                'REG_CODE' => 'BN',
                'TRA_ROLE' => 'Visiteur',
            ),
            25 => 
            array (
                'VIS_MATRICULE' => 'p40',
                'JJMMAA' => '1992-12-14 00:00:00',
                'REG_CODE' => 'BN',
                'TRA_ROLE' => 'Délégué',
            ),
            26 => 
            array (
                'VIS_MATRICULE' => 'j50',
                'JJMMAA' => '1992-12-16 00:00:00',
                'REG_CODE' => 'NP',
                'TRA_ROLE' => 'Visiteur',
            ),
            27 => 
            array (
                'VIS_MATRICULE' => 'p32',
                'JJMMAA' => '1992-12-24 00:00:00',
                'REG_CODE' => 'IF',
                'TRA_ROLE' => 'Visiteur',
            ),
            28 => 
            array (
                'VIS_MATRICULE' => 'h13',
                'JJMMAA' => '1993-05-08 00:00:00',
                'REG_CODE' => 'LI',
                'TRA_ROLE' => 'Visiteur',
            ),
            29 => 
            array (
                'VIS_MATRICULE' => 'e24',
                'JJMMAA' => '1993-05-17 00:00:00',
                'REG_CODE' => 'AL',
                'TRA_ROLE' => 'Délégué',
            ),
            30 => 
            array (
                'VIS_MATRICULE' => 'f21',
                'JJMMAA' => '1993-06-08 00:00:00',
                'REG_CODE' => 'RA',
                'TRA_ROLE' => 'Visiteur',
            ),
            31 => 
            array (
                'VIS_MATRICULE' => 'h35',
                'JJMMAA' => '1993-08-26 00:00:00',
                'REG_CODE' => 'AU',
                'TRA_ROLE' => 'Visiteur',
            ),
            32 => 
            array (
                'VIS_MATRICULE' => 'b34',
                'JJMMAA' => '1993-12-06 00:00:00',
                'REG_CODE' => 'CE',
                'TRA_ROLE' => 'Délégué',
            ),
            33 => 
            array (
                'VIS_MATRICULE' => 'f4',
                'JJMMAA' => '1994-05-03 00:00:00',
                'REG_CODE' => 'MP',
                'TRA_ROLE' => 'Visiteur',
            ),
            34 => 
            array (
                'VIS_MATRICULE' => 'b25',
                'JJMMAA' => '1994-07-03 00:00:00',
                'REG_CODE' => 'PL',
                'TRA_ROLE' => 'Visiteur',
            ),
            35 => 
            array (
                'VIS_MATRICULE' => 't55',
                'JJMMAA' => '1994-11-29 00:00:00',
                'REG_CODE' => 'MP',
                'TRA_ROLE' => 'Visiteur',
            ),
            36 => 
            array (
                'VIS_MATRICULE' => 'p42',
                'JJMMAA' => '1994-12-12 00:00:00',
                'REG_CODE' => 'PI',
                'TRA_ROLE' => 'Visiteur',
            ),
            37 => 
            array (
                'VIS_MATRICULE' => 'n59',
                'JJMMAA' => '1994-12-19 00:00:00',
                'REG_CODE' => 'PI',
                'TRA_ROLE' => 'Visiteur',
            ),
            38 => 
            array (
                'VIS_MATRICULE' => 'o26',
                'JJMMAA' => '1995-01-05 00:00:00',
                'REG_CODE' => 'LG',
                'TRA_ROLE' => 'Visiteur',
            ),
            39 => 
            array (
                'VIS_MATRICULE' => 'l14',
                'JJMMAA' => '1995-02-02 00:00:00',
                'REG_CODE' => 'PL',
                'TRA_ROLE' => 'Visiteur',
            ),
            40 => 
            array (
                'VIS_MATRICULE' => 't43',
                'JJMMAA' => '1995-03-09 00:00:00',
                'REG_CODE' => 'BO',
                'TRA_ROLE' => 'Visiteur',
            ),
            41 => 
            array (
                'VIS_MATRICULE' => 'a55',
                'JJMMAA' => '1995-05-19 00:00:00',
                'REG_CODE' => 'RO',
                'TRA_ROLE' => 'Visiteur',
            ),
            42 => 
            array (
                'VIS_MATRICULE' => 'l23',
                'JJMMAA' => '1995-06-05 00:00:00',
                'REG_CODE' => 'PC',
                'TRA_ROLE' => 'Visiteur',
            ),
            43 => 
            array (
                'VIS_MATRICULE' => 'b59',
                'JJMMAA' => '1995-10-21 00:00:00',
                'REG_CODE' => 'RA',
                'TRA_ROLE' => 'Visiteur',
            ),
            44 => 
            array (
                'VIS_MATRICULE' => 's10',
                'JJMMAA' => '1995-11-14 00:00:00',
                'REG_CODE' => 'FC',
                'TRA_ROLE' => 'Visiteur',
            ),
            45 => 
            array (
                'VIS_MATRICULE' => 'e5',
                'JJMMAA' => '1995-11-27 00:00:00',
                'REG_CODE' => 'MP',
                'TRA_ROLE' => 'Délégué',
            ),
            46 => 
            array (
                'VIS_MATRICULE' => 'g7',
                'JJMMAA' => '1996-01-13 00:00:00',
                'REG_CODE' => 'LI',
                'TRA_ROLE' => 'Visiteur',
            ),
            47 => 
            array (
                'VIS_MATRICULE' => 'g19',
                'JJMMAA' => '1996-01-18 00:00:00',
                'REG_CODE' => 'IF',
                'TRA_ROLE' => 'Visiteur',
            ),
            48 => 
            array (
                'VIS_MATRICULE' => 'e49',
                'JJMMAA' => '1996-02-19 00:00:00',
                'REG_CODE' => 'MP',
                'TRA_ROLE' => 'Visiteur',
            ),
            49 => 
            array (
                'VIS_MATRICULE' => 'l56',
                'JJMMAA' => '1996-02-27 00:00:00',
                'REG_CODE' => 'FC',
                'TRA_ROLE' => 'Visiteur',
            ),
            50 => 
            array (
                'VIS_MATRICULE' => 'n42',
                'JJMMAA' => '1996-03-06 00:00:00',
                'REG_CODE' => 'HN',
                'TRA_ROLE' => 'Visiteur',
            ),
            51 => 
            array (
                'VIS_MATRICULE' => 'b13',
                'JJMMAA' => '1996-03-11 00:00:00',
                'REG_CODE' => 'AL',
                'TRA_ROLE' => 'Visiteur',
            ),
            52 => 
            array (
                'VIS_MATRICULE' => 'a131',
                'JJMMAA' => '1996-05-27 00:00:00',
                'REG_CODE' => 'BG',
                'TRA_ROLE' => 'Visiteur',
            ),
            53 => 
            array (
                'VIS_MATRICULE' => 'k4',
                'JJMMAA' => '1996-11-21 00:00:00',
                'REG_CODE' => 'LG',
                'TRA_ROLE' => 'Visiteur',
            ),
            54 => 
            array (
                'VIS_MATRICULE' => 'l46',
                'JJMMAA' => '1997-01-24 00:00:00',
                'REG_CODE' => 'PL',
                'TRA_ROLE' => 'Visiteur',
            ),
            55 => 
            array (
                'VIS_MATRICULE' => 'c14',
                'JJMMAA' => '1997-02-01 00:00:00',
                'REG_CODE' => 'PA',
                'TRA_ROLE' => 'Délégué',
            ),
            56 => 
            array (
                'VIS_MATRICULE' => 'f39',
                'JJMMAA' => '1997-02-15 00:00:00',
                'REG_CODE' => 'RA',
                'TRA_ROLE' => 'Visiteur',
            ),
            57 => 
            array (
                'VIS_MATRICULE' => 'b16',
                'JJMMAA' => '1997-03-21 00:00:00',
                'REG_CODE' => 'BG',
                'TRA_ROLE' => 'Visiteur',
            ),
            58 => 
            array (
                'VIS_MATRICULE' => 'p6',
                'JJMMAA' => '1997-03-30 00:00:00',
                'REG_CODE' => 'AQ',
                'TRA_ROLE' => 'Visiteur',
            ),
            59 => 
            array (
                'VIS_MATRICULE' => 't47',
                'JJMMAA' => '1997-08-29 00:00:00',
                'REG_CODE' => 'PI',
                'TRA_ROLE' => 'Visiteur',
            ),
            60 => 
            array (
                'VIS_MATRICULE' => 'q17',
                'JJMMAA' => '1997-09-06 00:00:00',
                'REG_CODE' => 'BN',
                'TRA_ROLE' => 'Visiteur',
            ),
            61 => 
            array (
                'VIS_MATRICULE' => 'a17',
                'JJMMAA' => '1997-09-19 00:00:00',
                'REG_CODE' => 'RA',
                'TRA_ROLE' => 'Délégué',
            ),
            62 => 
            array (
                'VIS_MATRICULE' => 'b4',
                'JJMMAA' => '1997-09-25 00:00:00',
                'REG_CODE' => 'AQ',
                'TRA_ROLE' => 'Visiteur',
            ),
            63 => 
            array (
                'VIS_MATRICULE' => 'd51',
                'JJMMAA' => '1997-11-18 00:00:00',
                'REG_CODE' => 'FC',
                'TRA_ROLE' => 'Délégué',
            ),
            64 => 
            array (
                'VIS_MATRICULE' => 'b50',
                'JJMMAA' => '1998-01-18 00:00:00',
                'REG_CODE' => 'PA',
                'TRA_ROLE' => 'Visiteur',
            ),
            65 => 
            array (
                'VIS_MATRICULE' => 'j45',
                'JJMMAA' => '1998-02-25 00:00:00',
                'REG_CODE' => 'CA',
                'TRA_ROLE' => 'Responsable',
            ),
            66 => 
            array (
                'VIS_MATRICULE' => 'h30',
                'JJMMAA' => '1998-04-26 00:00:00',
                'REG_CODE' => 'IF',
                'TRA_ROLE' => 'Visiteur',
            ),
            67 => 
            array (
                'VIS_MATRICULE' => 'r24',
                'JJMMAA' => '1998-05-25 00:00:00',
                'REG_CODE' => 'BN',
                'TRA_ROLE' => 'Responsable',
            ),
            68 => 
            array (
                'VIS_MATRICULE' => 'j8',
                'JJMMAA' => '1998-06-18 00:00:00',
                'REG_CODE' => 'IF',
                'TRA_ROLE' => 'Responsable',
            ),
            69 => 
            array (
                'VIS_MATRICULE' => 'p41',
                'JJMMAA' => '1998-07-27 00:00:00',
                'REG_CODE' => 'PC',
                'TRA_ROLE' => 'Visiteur',
            ),
            70 => 
            array (
                'VIS_MATRICULE' => 'a93',
                'JJMMAA' => '1999-01-02 00:00:00',
                'REG_CODE' => 'PC',
                'TRA_ROLE' => 'Visiteur',
            ),
            71 => 
            array (
                'VIS_MATRICULE' => 'b19',
                'JJMMAA' => '1999-01-31 00:00:00',
                'REG_CODE' => 'PL',
                'TRA_ROLE' => 'Visiteur',
            ),
            72 => 
            array (
                'VIS_MATRICULE' => 'g30',
                'JJMMAA' => '1999-03-27 00:00:00',
                'REG_CODE' => 'PI',
                'TRA_ROLE' => 'Délégué',
            ),
            73 => 
            array (
                'VIS_MATRICULE' => 'm45',
                'JJMMAA' => '1999-04-08 00:00:00',
                'REG_CODE' => 'AL',
                'TRA_ROLE' => 'Délégué',
            ),
            74 => 
            array (
                'VIS_MATRICULE' => 'b34',
                'JJMMAA' => '1999-06-18 00:00:00',
                'REG_CODE' => 'CE',
                'TRA_ROLE' => 'Responsable',
            ),
            75 => 
            array (
                'VIS_MATRICULE' => 'p40',
                'JJMMAA' => '1999-07-17 00:00:00',
                'REG_CODE' => 'BN',
                'TRA_ROLE' => 'Responsable',
            ),
            76 => 
            array (
                'VIS_MATRICULE' => 'a55',
                'JJMMAA' => '1999-08-21 00:00:00',
                'REG_CODE' => 'RO',
                'TRA_ROLE' => 'Délégué',
            ),
            77 => 
            array (
                'VIS_MATRICULE' => 'b25',
                'JJMMAA' => '2000-01-01 00:00:00',
                'REG_CODE' => 'PL',
                'TRA_ROLE' => 'Délégué',
            ),
            78 => 
            array (
                'VIS_MATRICULE' => 'e24',
                'JJMMAA' => '2000-02-29 00:00:00',
                'REG_CODE' => 'AL',
                'TRA_ROLE' => 'Responsable',
            ),
            79 => 
            array (
                'VIS_MATRICULE' => 'b28',
                'JJMMAA' => '2000-08-02 00:00:00',
                'REG_CODE' => 'LG',
                'TRA_ROLE' => 'Visiteur',
            ),
            80 => 
            array (
                'VIS_MATRICULE' => 'g30',
                'JJMMAA' => '2000-10-31 00:00:00',
                'REG_CODE' => 'PI',
                'TRA_ROLE' => 'Responsable',
            ),
            81 => 
            array (
                'VIS_MATRICULE' => 'e5',
                'JJMMAA' => '2000-11-27 00:00:00',
                'REG_CODE' => 'AQ',
                'TRA_ROLE' => 'Responsable',
            ),
            82 => 
            array (
                'VIS_MATRICULE' => 'c14',
                'JJMMAA' => '2001-03-03 00:00:00',
                'REG_CODE' => 'PA',
                'TRA_ROLE' => 'Responsable',
            ),
            83 => 
            array (
                'VIS_MATRICULE' => 'd51',
                'JJMMAA' => '2002-03-20 00:00:00',
                'REG_CODE' => 'FC',
                'TRA_ROLE' => 'Responsable',
            ),
        ));
        
        
    }
}
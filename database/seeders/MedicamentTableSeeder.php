<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MedicamentTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('medicament')->delete();
        
        \DB::table('medicament')->insert(array (
            0 => 
            array (
                'MED_DEPOTLEGAL' => '3MYC7',
                'MED_NOMCOMMERCIAL' => 'TRIMYCINE',
                'FAM_CODE' => 'CRT',
            'MED_COMPOSITION' => 'Triamcinolone (acétonide) + Néomycine + Nystatine',
                'MED_EFFETS' => 'Ce médicament est un corticoïde à  activité forte ou très forte associé à  un antibiotique et un antifongique, utilisé en application locale dans certaines atteintes cutanées surinfectées.',
                'MED_CONTREINDIC' => 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants, d\'infections de la peau ou de parasitisme non traités, d\'acné. Ne pas appliquer sur une plaie, ni sous un pansement occlusif.',
                'MED_PRIXECHANTILLON' => NULL,
            ),
            1 => 
            array (
                'MED_DEPOTLEGAL' => 'ADIMOL9',
                'MED_NOMCOMMERCIAL' => 'ADIMOL',
                'FAM_CODE' => 'ABP',
                'MED_COMPOSITION' => 'Amoxicilline + Acide clavulanique',
                'MED_EFFETS' => 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.',
                'MED_CONTREINDIC' => 'Ce médicament est contre-indiqué en cas d\'allergie aux pénicillines ou aux céphalosporines.',
                'MED_PRIXECHANTILLON' => NULL,
            ),
            2 => 
            array (
                'MED_DEPOTLEGAL' => 'AMOPIL7',
                'MED_NOMCOMMERCIAL' => 'AMOPIL',
                'FAM_CODE' => 'ABP',
                'MED_COMPOSITION' => 'Amoxicilline',
                'MED_EFFETS' => 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.',
                'MED_CONTREINDIC' => 'Ce médicament est contre-indiqué en cas d\'allergie aux pénicillines. Il doit être administré avec prudence en cas d\'allergie aux céphalosporines.',
                'MED_PRIXECHANTILLON' => NULL,
            ),
            3 => 
            array (
                'MED_DEPOTLEGAL' => 'AMOX45',
                'MED_NOMCOMMERCIAL' => 'AMOXAR',
                'FAM_CODE' => 'ABP',
                'MED_COMPOSITION' => 'Amoxicilline',
                'MED_EFFETS' => 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.',
                'MED_CONTREINDIC' => 'La prise de ce médicament peut rendre positifs les tests de dépistage du dopage.',
                'MED_PRIXECHANTILLON' => NULL,
            ),
            4 => 
            array (
                'MED_DEPOTLEGAL' => 'AMOXIG12',
                'MED_NOMCOMMERCIAL' => 'AMOXI Gé',
                'FAM_CODE' => 'ABP',
                'MED_COMPOSITION' => 'Amoxicilline',
                'MED_EFFETS' => 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.',
                'MED_CONTREINDIC' => 'Ce médicament est contre-indiqué en cas d\'allergie aux pénicillines. Il doit être administré avec prudence en cas d\'allergie aux céphalosporines.',
                'MED_PRIXECHANTILLON' => NULL,
            ),
            5 => 
            array (
                'MED_DEPOTLEGAL' => 'APATOUX22',
                'MED_NOMCOMMERCIAL' => 'APATOUX Vitamine C',
                'FAM_CODE' => 'ALO',
            'MED_COMPOSITION' => 'Tyrothricine + Tétracaïne + Acide ascorbique (Vitamine C)',
                'MED_EFFETS' => 'Ce médicament est utilisé pour traiter les affections de la bouche et de la gorge.',
                'MED_CONTREINDIC' => 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants, en cas de phénylcétonurie et chez l\'enfant de moins de 6 ans.',
                'MED_PRIXECHANTILLON' => NULL,
            ),
            6 => 
            array (
                'MED_DEPOTLEGAL' => 'BACTIG10',
                'MED_NOMCOMMERCIAL' => 'BACTIGEL',
                'FAM_CODE' => 'ABC',
                'MED_COMPOSITION' => 'Erythromycine',
                'MED_EFFETS' => 'Ce médicament est utilisé en application locale pour traiter l\'acné et les infections cutanées bactériennes associées.',
                'MED_CONTREINDIC' => 'Ce médicament est contre-indiqué en cas d\'allergie aux antibiotiques de la famille des macrolides ou des lincosanides.',
                'MED_PRIXECHANTILLON' => NULL,
            ),
            7 => 
            array (
                'MED_DEPOTLEGAL' => 'BACTIV13',
                'MED_NOMCOMMERCIAL' => 'BACTIVIL',
                'FAM_CODE' => 'AFM',
                'MED_COMPOSITION' => 'Erythromycine',
                'MED_EFFETS' => 'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques.',
            'MED_CONTREINDIC' => 'Ce médicament est contre-indiqué en cas d\'allergie aux macrolides (dont le chef de file est l\'érythromycine).',
                'MED_PRIXECHANTILLON' => NULL,
            ),
            8 => 
            array (
                'MED_DEPOTLEGAL' => 'BITALV',
                'MED_NOMCOMMERCIAL' => 'BIVALIC',
                'FAM_CODE' => 'AAA',
                'MED_COMPOSITION' => 'Dextropropoxyphène + Paracétamol',
                'MED_EFFETS' => 'Ce médicament est utilisé pour traiter les douleurs d\'intensité modérée ou intense.',
                'MED_CONTREINDIC' => 'Ce médicament est contre-indiqué en cas d\'allergie aux médicaments de cette famille, d\'insuffisance hépatique ou d\'insuffisance rénale.',
                'MED_PRIXECHANTILLON' => NULL,
            ),
            9 => 
            array (
                'MED_DEPOTLEGAL' => 'CARTION6',
                'MED_NOMCOMMERCIAL' => 'CARTION',
                'FAM_CODE' => 'AAA',
            'MED_COMPOSITION' => 'Acide acétylsalicylique (aspirine) + Acide ascorbique (Vitamine C) + Paracétamol',
                'MED_EFFETS' => 'Ce médicament est utilisé dans le traitement symptomatique de la douleur ou de la fièvre.',
            'MED_CONTREINDIC' => 'Ce médicament est contre-indiqué en cas de troubles de la coagulation (tendances aux hémorragies), d\'ulcère gastroduodénal, maladies graves du foie.',
                'MED_PRIXECHANTILLON' => NULL,
            ),
            10 => 
            array (
                'MED_DEPOTLEGAL' => 'CLAZER6',
                'MED_NOMCOMMERCIAL' => 'CLAZER',
                'FAM_CODE' => 'AFM',
                'MED_COMPOSITION' => 'Clarithromycine',
                'MED_EFFETS' => 'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques. Il est également utilisé dans le traitement de l\'ulcère gastro-duodénal, en association avec d\'autres médicaments.',
            'MED_CONTREINDIC' => 'Ce médicament est contre-indiqué en cas d\'allergie aux macrolides (dont le chef de file est l\'érythromycine).',
                'MED_PRIXECHANTILLON' => NULL,
            ),
            11 => 
            array (
                'MED_DEPOTLEGAL' => 'DEPRIL9',
                'MED_NOMCOMMERCIAL' => 'DEPRAMIL',
                'FAM_CODE' => 'AIM',
                'MED_COMPOSITION' => 'Clomipramine',
                'MED_EFFETS' => 'Ce médicament est utilisé pour traiter les épisodes dépressifs sévères, certaines douleurs rebelles, les troubles obsessionnels compulsifs et certaines énurésies chez l\'enfant.',
                'MED_CONTREINDIC' => 'Ce médicament est contre-indiqué en cas de glaucome ou d\'adénome de la prostate, d\'infarctus récent, ou si vous avez reà§u un traitement par IMAO durant les 2 semaines précédentes ou en cas d\'allergie aux antidépresseurs imipraminiques.',
                'MED_PRIXECHANTILLON' => NULL,
            ),
            12 => 
            array (
                'MED_DEPOTLEGAL' => 'DIMIRTAM6',
                'MED_NOMCOMMERCIAL' => 'DIMIRTAM',
                'FAM_CODE' => 'AAC',
                'MED_COMPOSITION' => 'Mirtazapine',
                'MED_EFFETS' => 'Ce médicament est utilisé pour traiter les épisodes dépressifs sévères.',
                'MED_CONTREINDIC' => 'La prise de ce produit est contre-indiquée en cas de d\'allergie à  l\'un des constituants.',
                'MED_PRIXECHANTILLON' => NULL,
            ),
            13 => 
            array (
                'MED_DEPOTLEGAL' => 'DOLRIL7',
                'MED_NOMCOMMERCIAL' => 'DOLORIL',
                'FAM_CODE' => 'AAA',
            'MED_COMPOSITION' => 'Acide acétylsalicylique (aspirine) + Acide ascorbique (Vitamine C) + Paracétamol',
                'MED_EFFETS' => 'Ce médicament est utilisé dans le traitement symptomatique de la douleur ou de la fièvre.',
                'MED_CONTREINDIC' => 'Ce médicament est contre-indiqué en cas d\'allergie au paracétamol ou aux salicylates.',
                'MED_PRIXECHANTILLON' => NULL,
            ),
            14 => 
            array (
                'MED_DEPOTLEGAL' => 'DORNOM8',
                'MED_NOMCOMMERCIAL' => 'NORMADOR',
                'FAM_CODE' => 'HYP',
                'MED_COMPOSITION' => 'Doxylamine',
                'MED_EFFETS' => 'Ce médicament est utilisé pour traiter l\'insomnie chez l\'adulte.',
            'MED_CONTREINDIC' => 'Ce médicament est contre-indiqué en cas de glaucome, de certains troubles urinaires (rétention urinaire) et chez l\'enfant de moins de 15 ans.',
                'MED_PRIXECHANTILLON' => NULL,
            ),
            15 => 
            array (
                'MED_DEPOTLEGAL' => 'EQUILARX6',
                'MED_NOMCOMMERCIAL' => 'EQUILAR',
                'FAM_CODE' => 'AAH',
                'MED_COMPOSITION' => 'Méclozine',
                'MED_EFFETS' => 'Ce médicament est utilisé pour traiter les vertiges et pour prévenir le mal des transports.',
                'MED_CONTREINDIC' => 'Ce médicament ne doit pas être utilisé en cas d\'allergie au produit, en cas de glaucome ou de rétention urinaire.',
                'MED_PRIXECHANTILLON' => NULL,
            ),
            16 => 
            array (
                'MED_DEPOTLEGAL' => 'EVILR7',
                'MED_NOMCOMMERCIAL' => 'EVEILLOR',
                'FAM_CODE' => 'PSA',
                'MED_COMPOSITION' => 'Adrafinil',
                'MED_EFFETS' => 'Ce médicament est utilisé pour traiter les troubles de la vigilance et certains symptomes neurologiques chez le sujet agé.',
                'MED_CONTREINDIC' => 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants.',
                'MED_PRIXECHANTILLON' => NULL,
            ),
            17 => 
            array (
                'MED_DEPOTLEGAL' => 'INSXT5',
                'MED_NOMCOMMERCIAL' => 'INSECTIL',
                'FAM_CODE' => 'AH',
                'MED_COMPOSITION' => 'Diphénydramine',
                'MED_EFFETS' => 'Ce médicament est utilisé en application locale sur les piqûres d\'insecte et l\'urticaire.',
                'MED_CONTREINDIC' => 'Ce médicament est contre-indiqué en cas d\'allergie aux antihistaminiques.',
                'MED_PRIXECHANTILLON' => NULL,
            ),
            18 => 
            array (
                'MED_DEPOTLEGAL' => 'JOVAI8',
                'MED_NOMCOMMERCIAL' => 'JOVENIL',
                'FAM_CODE' => 'AFM',
                'MED_COMPOSITION' => 'Josamycine',
                'MED_EFFETS' => 'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques.',
            'MED_CONTREINDIC' => 'Ce médicament est contre-indiqué en cas d\'allergie aux macrolides (dont le chef de file est l\'érythromycine).',
                'MED_PRIXECHANTILLON' => NULL,
            ),
            19 => 
            array (
                'MED_DEPOTLEGAL' => 'LIDOXY23',
                'MED_NOMCOMMERCIAL' => 'LIDOXYTRACINE',
                'FAM_CODE' => 'AFC',
                'MED_COMPOSITION' => 'Oxytétracycline +Lidocaïne',
                'MED_EFFETS' => 'Ce médicament est utilisé en injection intramusculaire pour traiter certaines infections spécifiques.',
                'MED_CONTREINDIC' => 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants. Il ne doit pas être associé aux rétinoïdes.',
                'MED_PRIXECHANTILLON' => NULL,
            ),
            20 => 
            array (
                'MED_DEPOTLEGAL' => 'LITHOR12',
                'MED_NOMCOMMERCIAL' => 'LITHORINE',
                'FAM_CODE' => 'AP',
                'MED_COMPOSITION' => 'Lithium',
                'MED_EFFETS' => 'Ce médicament est indiqué dans la prévention des psychoses maniaco-dépressives ou pour traiter les états maniaques.',
                'MED_CONTREINDIC' => 'Ce médicament ne doit pas être utilisé si vous êtes allergique au lithium. Avant de prendre ce traitement, signalez à  votre médecin traitant si vous souffrez d\'insuffisance rénale, ou si vous avez un régime sans sel.',
                'MED_PRIXECHANTILLON' => NULL,
            ),
            21 => 
            array (
                'MED_DEPOTLEGAL' => 'PARMOL16',
                'MED_NOMCOMMERCIAL' => 'PARMOCODEINE',
                'FAM_CODE' => 'AA',
                'MED_COMPOSITION' => 'Codéine + Paracétamol',
                'MED_EFFETS' => 'Ce médicament est utilisé pour le traitement des douleurs lorsque des antalgiques simples ne sont pas assez efficaces.',
                'MED_CONTREINDIC' => 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants, chez l\'enfant de moins de 15 Kg, en cas d\'insuffisance hépatique ou respiratoire, d\'asthme, de phénylcétonurie et chez la femme qui allaite.',
                'MED_PRIXECHANTILLON' => NULL,
            ),
            22 => 
            array (
                'MED_DEPOTLEGAL' => 'PHYSOI8',
                'MED_NOMCOMMERCIAL' => 'PHYSICOR',
                'FAM_CODE' => 'PSA',
                'MED_COMPOSITION' => 'Sulbutiamine',
                'MED_EFFETS' => 'Ce médicament est utilisé pour traiter les baisses d\'activité physique ou psychique, souvent dans un contexte de dépression.',
                'MED_CONTREINDIC' => 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants.',
                'MED_PRIXECHANTILLON' => NULL,
            ),
            23 => 
            array (
                'MED_DEPOTLEGAL' => 'PIRIZ8',
                'MED_NOMCOMMERCIAL' => 'PIRIZAN',
                'FAM_CODE' => 'ABA',
                'MED_COMPOSITION' => 'Pyrazinamide',
                'MED_EFFETS' => 'Ce médicament est utilisé, en association à  d\'autres antibiotiques, pour traiter la tuberculose.',
                'MED_CONTREINDIC' => 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants, d\'insuffisance rénale ou hépatique, d\'hyperuricémie ou de porphyrie.',
                'MED_PRIXECHANTILLON' => NULL,
            ),
            24 => 
            array (
                'MED_DEPOTLEGAL' => 'POMDI20',
                'MED_NOMCOMMERCIAL' => 'POMADINE',
                'FAM_CODE' => 'AO',
                'MED_COMPOSITION' => 'Bacitracine',
                'MED_EFFETS' => 'Ce médicament est utilisé pour traiter les infections oculaires de la surface de l\'oeil.',
                'MED_CONTREINDIC' => 'Ce médicament est contre-indiqué en cas d\'allergie aux antibiotiques appliqués localement.',
                'MED_PRIXECHANTILLON' => NULL,
            ),
            25 => 
            array (
                'MED_DEPOTLEGAL' => 'TROXT21',
                'MED_NOMCOMMERCIAL' => 'TROXADET',
                'FAM_CODE' => 'AIN',
                'MED_COMPOSITION' => 'Paroxétine',
                'MED_EFFETS' => 'Ce médicament est utilisé pour traiter la dépression et les troubles obsessionnels compulsifs. Il peut également être utilisé en prévention des crises de panique avec ou sans agoraphobie.',
                'MED_CONTREINDIC' => 'Ce médicament est contre-indiqué en cas d\'allergie au produit.',
                'MED_PRIXECHANTILLON' => NULL,
            ),
            26 => 
            array (
                'MED_DEPOTLEGAL' => 'TXISOL22',
                'MED_NOMCOMMERCIAL' => 'TOUXISOL Vitamine C',
                'FAM_CODE' => 'ALO',
            'MED_COMPOSITION' => 'Tyrothricine + Acide ascorbique (Vitamine C)',
                'MED_EFFETS' => 'Ce médicament est utilisé pour traiter les affections de la bouche et de la gorge.',
                'MED_CONTREINDIC' => 'Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants et chez l\'enfant de moins de 6 ans.',
                'MED_PRIXECHANTILLON' => NULL,
            ),
            27 => 
            array (
                'MED_DEPOTLEGAL' => 'URIEG6',
                'MED_NOMCOMMERCIAL' => 'URIREGUL',
                'FAM_CODE' => 'AUM',
                'MED_COMPOSITION' => 'Fosfomycine trométamol',
                'MED_EFFETS' => 'Ce médicament est utilisé pour traiter les infections urinaires simples chez la femme de moins de 65 ans.',
                'MED_CONTREINDIC' => 'La prise de ce médicament est contre-indiquée en cas d\'allergie à  l\'un des constituants et d\'insuffisance rénale.',
                'MED_PRIXECHANTILLON' => NULL,
            ),
        ));
        
        
    }
}
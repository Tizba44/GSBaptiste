<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(ActiviteComplTableSeeder::class);
        $this->call(ComposantTableSeeder::class);
        $this->call(ConstituerTableSeeder::class);
        $this->call(DosageTableSeeder::class);
        $this->call(FamilleTableSeeder::class);
        $this->call(FormulerTableSeeder::class);
        $this->call(InteragirTableSeeder::class);
        $this->call(InviterTableSeeder::class);
        $this->call(LaboTableSeeder::class);
        $this->call(MedicamentTableSeeder::class);
        $this->call(OffrirTableSeeder::class);
        $this->call(PossederTableSeeder::class);
        $this->call(PraticienTableSeeder::class);
        $this->call(PrescrireTableSeeder::class);
        $this->call(PresentationTableSeeder::class);
        $this->call(RapportVisiteTableSeeder::class);
        $this->call(RealiserTableSeeder::class);
        $this->call(RegionTableSeeder::class);
        $this->call(SecteurTableSeeder::class);
        $this->call(SpecialiteTableSeeder::class);
        $this->call(TravaillerTableSeeder::class);
        $this->call(TypeIndividuTableSeeder::class);
        $this->call(TypePraticienTableSeeder::class);
        // $this->call(VisiteurTableSeeder::class);
        $this->call(SwitchboardItemsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}

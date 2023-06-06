<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // "en_cours", "terminé", "servi", "emporté"])->default("en_cours");
        DB::table("commandes")->insert([
            [
              'serveur_id'=>1,
              'numero_table'=>5,
              'etat'=> "en_cours", 
              'paye'=>true
            ],
               [
              'serveur_id'=>2,
              'numero_table'=>4,
              'etat'=> "servi",
              'paye'=>false
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServeurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("serveurs")->insert([[
            "nom"=>"hicham saki",
            "date_embauche"=>"2022/01/14"
        ],
        [
            "nom"=>"Mohamed redouan",
            "date_embauche"=>"2022/05/04"
        ],
        [
            "nom"=>"Fouad melouki",
            "date_embauche"=>"2023/02/09"
        ]
    ]);
    }
}

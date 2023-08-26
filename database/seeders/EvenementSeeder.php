<?php

namespace Database\Seeders;

use App\Models\Evenement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EvenementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Evenement::create([
            'titre'=>'Forum',
            'description'=>'Journée mondiale des compétences des jeunes',
            'lieu'=>'BOBO', 
            'date'=>'2023/10/04',
            'user_id'=> 1,
        ]);


    }
}

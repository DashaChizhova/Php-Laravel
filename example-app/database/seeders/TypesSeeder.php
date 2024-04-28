<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typesArray = array();
        array_push($typesArray, 'Пожелание', 'Ошибка', 'Авария'); 
        foreach($typesArray as $type){
        DB::table('types')->insert([
            'type_name' => $type,
            'type_name' => $type,
            'type_name' => $type,
            'type_name' => $type,
        ]);
        }
    }
}

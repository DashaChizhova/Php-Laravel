<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        $statusArray = array();
        array_push($statusArray, 'Новая', 'Выполняется', 'Тестирование', 'Завершена');
        foreach($statusArray as $status){
        DB::table('status')->insert([
            'status_name' => $status,
            'status_name' => $status,
            'status_name' => $status,
            'status_name' => $status,
        ]);
        }
    }
}

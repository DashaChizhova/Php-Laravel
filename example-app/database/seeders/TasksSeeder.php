<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        DB::table('tasks')->insert([
            ['project_id' => 1, 'status_id' => 1, 'type_id'=>1, 'title' => 'Task1', 'description' => 'Description1'],
            ['project_id' => 2, 'status_id' => 2, 'type_id'=>2, 'title' => 'Task2', 'description' => 'Description2'],
            ['project_id' => 3, 'status_id' => 3, 'type_id'=>3, 'title' => 'Task3', 'description' => 'Description3'],
         ]);
    }
}

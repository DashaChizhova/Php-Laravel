<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        $projectsArray = array();
        array_push($projectsArray, 'Project1', 'Project2', 'Project3', 'Project4');
        foreach($projectsArray as $projects){
        DB::table('projects')->insert([
            'project_name' => $projects,
            'project_name' => $projects,
            'project_name' => $projects,
            'project_name' => $projects,
        ]);
        }
    }
}

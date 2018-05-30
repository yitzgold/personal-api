<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([

            [
                'name' => 'Yitzi Goldman API',
                'summary' => 'returns personal info about Yitzi Goldman in JSON',
                'url' => 'http://api.yitzigoldman'
            ],
            [   
                'name' => 'Practice Makes Perfect',
                'summary' => 'A web site that you can create a login and track your practice hours on a area of your choice',
                'url' => 'under construction'
            ]
        ]);
    }
}

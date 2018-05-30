<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([

            [
                'name' => 'Java'
            ],
            [   
                'name' => 'MySQL'
            ],
            [
                'name' => 'PHP'
            ],
            [
                'name' => 'Laravel'
            ],
            [
                'name' => 'HTML 5'
            ],
            [
                'name' => 'CSS'
            ],
            [
                'name' => 'Javascript'
            ],
            [
                'name' => 'JQuery'
            ],
            [
                'name' => 'Angular'
            ],
            [
                'name' => 'React'
            ],
            [
                'name' => 'Node'
            ],
            [
                'name' => 'Express'
            ],
            [
                'name' => 'MongoDB'
            ]
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class InstitutionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('institutions')->insert([

            [
                'name' => 'Beth Medrash Govoah',
                'street' => '617 6th street',
                'city' => 'Lakewood',
                'state' => 'NJ',
                'zip' => '08701',
                'start_date' => 'April 2004',
                'end_date' => 'September 2017'
            ],
            [   
                'name' => 'PCS',
                'street' => '1771 Madison Ave.',
                'city' => 'Lakewood',
                'state' => 'NJ',
                'zip' => '08701',
                'start_date' => 'October 2016',
                'end_date' => 'April 2018'
            ]
        ]);
    }
}

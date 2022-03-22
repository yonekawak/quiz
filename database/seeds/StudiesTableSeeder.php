<?php

use Illuminate\Database\Seeder;

class StudiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('studies')->insert([
                'user_id' => 1,
                'quiz_id' => 1,
                'selected' => 1,
                'count' => 1,
        ]);
    }
}

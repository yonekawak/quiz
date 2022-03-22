<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'souki',
            'number' => 0,
        ]);
         DB::table('categories')->insert([
            'name' => 'tetugaku',
            'number' => 1,
        ]);
         DB::table('categories')->insert([
            'name' => 'rekisi',
            'number' => 2,
        ]);
         DB::table('categories')->insert([
            'name' => 'sixyakaikagaku',
            'number' => 3,
        ]);
         DB::table('categories')->insert([
            'name' => 'sizennkagaku',
            'number' => 4,
        ]); 
        DB::table('categories')->insert([
            'name' => 'gizixyutu',
            'number' => 5,
        ]);
         DB::table('categories')->insert([
            'name' => 'sanngixyou',
            'number' => 6,
        ]);
         DB::table('categories')->insert([
            'name' => 'geizixyutu',
            'number' => 7,
        ]);
         DB::table('categories')->insert([
            'name' => 'genngo',
            'number' => 8,
        ]);
         DB::table('categories')->insert([
            'name' => 'bunngaku',
            'number' => 9,
        ]);
    }
}

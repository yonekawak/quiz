<?php

use Illuminate\Database\Seeder;

class QuizzesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quizzes')->insert([
            'question' => '問題文',
            'choice1' => '選択肢１',
        ]);
        
    }
    
    factory(App\Quiz::class, 3)->create();
}

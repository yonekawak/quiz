<?php

use Illuminate\Database\Seeder;
use App\Models\Fruit;

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
            'question' => '問題文1',
            'answer_number' => 1,
            'choice1' => '選択肢1',
            'choice2' => '選択肢2',
            'choice3' => '選択肢3',
            'choice4' => '選択肢4',
            'category_id' => 1,
        ]);
        DB::table('quizzes')->insert([
            'question' => '問題文2',
            'answer_number' => 2,
            'choice1' => '選択肢1',
            'choice2' => '選択肢2',
            'choice3' => '選択肢3',
            'choice4' => '選択肢4',
            'category_id' => 1,
        ]);
        DB::table('quizzes')->insert([
            'question' => '問題文3',
            'answer_number' => 2,
            'choice1' => '選択肢1',
            'choice2' => '選択肢2',
            'choice3' => '選択肢3',
            'choice4' => '選択肢4',
            'category_id' => 1,
        ]);
        DB::table('quizzes')->insert([
            'question' => '問題文4',
            'answer_number' => 2,
            'choice1' => '選択肢1',
            'choice2' => '選択肢2',
            'choice3' => '選択肢3',
            'choice4' => '選択肢4',
            'category_id' => 1,
        ]);
        DB::table('quizzes')->insert([
            'question' => '問題文5',
            'answer_number' => 2,
            'choice1' => '選択肢1',
            'choice2' => '選択肢2',
            'choice3' => '選択肢3',
            'choice4' => '選択肢4',
            'category_id' => 1,
        ]);
        DB::table('quizzes')->insert([
            'question' => '問題文6',
            'answer_number' => 2,
            'choice1' => '選択肢1',
            'choice2' => '選択肢2',
            'choice3' => '選択肢3',
            'choice4' => '選択肢4',
            'category_id' => 1,
        ]);
        DB::table('quizzes')->insert([
            'question' => '問題文7',
            'answer_number' => 2,
            'choice1' => '選択肢1',
            'choice2' => '選択肢2',
            'choice3' => '選択肢3',
            'choice4' => '選択肢4',
            'category_id' => 1,
        ]);
        DB::table('quizzes')->insert([
            'question' => '問題文8',
            'answer_number' => 2,
            'choice1' => '選択肢1',
            'choice2' => '選択肢2',
            'choice3' => '選択肢3',
            'choice4' => '選択肢4',
            'category_id' => 1,
        ]);
        DB::table('quizzes')->insert([
            'question' => '問題文9',
            'answer_number' => 2,
            'choice1' => '選択肢1',
            'choice2' => '選択肢2',
            'choice3' => '選択肢3',
            'choice4' => '選択肢4',
            'category_id' => 1,
        ]);
        DB::table('quizzes')->insert([
            'question' => '問題文10',
            'answer_number' => 2,
            'choice1' => '選択肢1',
            'choice2' => '選択肢2',
            'choice3' => '選択肢3',
            'choice4' => '選択肢4',
            'category_id' => 1,
        ]);
    }
}

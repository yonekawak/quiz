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
            'question' => '類目表「0類」には何が分類されている？',
            'answer_number' => 3,
            'choice1' => '哲学',
            'choice2' => '産業',
            'choice3' => '総記',
            'choice4' => '言語',
            'category_id' => 1,
        ]);
        DB::table('quizzes')->insert([
            'question' => '「総記」に含まれないものはどれ？',
            'answer_number' => 4,
            'choice1' => '情報学',
            'choice2' => '新聞',
            'choice3' => '逐次刊行物',
            'choice4' => '倫理学',
            'category_id' => 1,
        ]);
        DB::table('quizzes')->insert([
            'question' => '網目表「01」は何が分類されている？',
            'answer_number' => 4,
            'choice1' => '日本文学',
            'choice2' => '図書/書誌学',
            'choice3' => '貴重書',
            'choice4' => '図書館/図書館情報学',
            'category_id' => 1,
        ]);
        DB::table('quizzes')->insert([
            'question' => '細目表「002」学問、学術に分類されないものはどれ？',
            'answer_number' => 1,
            'choice1' => '知識の分類',
            'choice2' => '知的協力',
            'choice3' => '人文科学',
            'choice4' => '学術事情',
            'category_id' => 1,
        ]);
        DB::table('quizzes')->insert([
            'question' => '細目表「007」情報学の中でも、人工知能に最も当てはまる番号は次のうちどれ？',
            'answer_number' => 3,
            'choice1' => '007.1',
            'choice2' => '007.11',
            'choice3' => '007.13',
            'choice4' => '007.632',
            'category_id' => 1,
        ]);
        DB::table('quizzes')->insert([
            'question' => '細目表「016」各種の図書館のうち「児童図書館に当てはまるのは次のうちどれ？',
            'answer_number' => 2,
            'choice1' => '016.1',
            'choice2' => '016.28',
            'choice3' => '016.53',
            'choice4' => '016.9',
            'category_id' => 1,
        ]);
        DB::table('quizzes')->insert([
            'question' => '第2次区分表を指す言葉はどれ？',
            'answer_number' => 1,
            'choice1' => '網目表',
            'choice2' => '類目表',
            'choice3' => '同目表',
            'choice4' => '細目表',
            'category_id' => 1,
        ]);
        DB::table('quizzes')->insert([
            'question' => '「索引，検索用の構造化された統制語彙集」を表す言葉は次のうちどれ？',
            'answer_number' => 4,
            'choice1' => 'ネットワーク',
            'choice2' => 'シェルフリスト',
            'choice3' => 'リーフレット',
            'choice4' => 'シソーラス',
            'category_id' => 1,
        ]);
        DB::table('quizzes')->insert([
            'question' => '図書館サービスの中で特に乳幼児に対するサービスは何？',
            'answer_number' => 3,
            'choice1' => 'レファレンスサービス',
            'choice2' => 'ブックトーク',
            'choice3' => 'ブックスタート',
            'choice4' => 'ヤングアダルトサービス',
            'category_id' => 1,
        ]);
        DB::table('quizzes')->insert([
            'question' => '図書館間相互貸借の略語は次のうちどれ？',
            'answer_number' => 1,
            'choice1' => 'ILL',
            'choice2' => 'LLブック',
            'choice3' => 'LD',
            'choice4' => 'NDLC',
            'category_id' => 1,
        ]);
    }
}

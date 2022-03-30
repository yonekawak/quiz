<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class category extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
    'name',
    'number',
    'quiz_id',
    'user_id'
    ];
    /**
    *  カテゴリーごとに属するクイズを取得する処理
    * @param $
    * @return $
    */
    public function getByCategory(int $limit_count = 10)
    {
        return $this->quizzes()->with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
        
        //あるCategoryインスタンスのクイズのうち、nameが'souki'のものを取得する
        $category->quizzes()->where('name', 'souki')->get();

    }
    /**
    *  リレーション １対多
    */
    public function quizzes()   
    {
        return $this->hasMany('App\Quiz');  
    }
}

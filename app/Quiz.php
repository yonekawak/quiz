<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quiz extends Model
{
    use SoftDeletes;
    
     protected $fillable = [
    'question',
    'choice1',
    'choice2',
    'choice3',
    'choice4',
    'answer_number',
    'category_id'
    ];
    /**
    *  クイズごとにカテゴリーを表示する処理
    * @param $
    * @return $
    */
    function getPaginateByLimit(int $limit_count = 10)
    {
        return $this::with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    /**
    *  リレーション １対多
    */
    public function results()   
    {
        return $this->hasMany('App\Result');  
    }
    /**
    *  リレーション 多対１
    */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    /**
    *  リレーション １対多
    */
    public function wrongs()   
    {
        return $this->hasMany('App\Wrong');  
    }
    public function users() 
    {
        return $this->belongsToMany('App\User','wrongs');
    }
    
}


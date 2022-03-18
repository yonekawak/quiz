<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
     protected $fillable = [
    'name',
    'number'
    ];
    
    public function getByCategory(int $limit_count = 10)
    {
        return $this->quizzes()->with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    public function quizzes()   
    {
        return $this->hasMany('App\Quiz');  
    }
}

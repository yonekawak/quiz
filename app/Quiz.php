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
    
    function getPaginateByLimit(int $limit_count = 10)
    {
        return $this::with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}


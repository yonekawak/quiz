<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
     protected $fillable = [
    'question',
    'choice1',
    'choice2',
    'choice3',
    'choice4',
    'answer_number',
    ];
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}


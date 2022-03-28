<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Study;
use App\Quiz;

class Study extends Model
{
    public function getData()
    {
        $result = new Result;
        $results = $result->get();
        $error = [];
        foreach($results as $input){
            if($input->choice_number != Quiz::where("id",$input->quiz_id)->first()->answer_number){
                if( count($error) == 0 ){
                    array_push($error,[Quiz::where("id",$input->quiz_id)->first(),1]);
                }else{
                    for($i = 0; $i < count($error) ; $i++ ){
                        if(Quiz::where("id",$input->quiz_id)->first()->question == $error[$i][0]->question){
                            $error[$i][1]++;
                            $i = count($error);
                        }elseif($i == count($error)-1){
                            $i = count($error);
                            array_push($error,[Quiz::where("id",$input->quiz_id)->first(),1]);
                        }
                    }
                }
            }
        }
        return $error;
    }
    
}



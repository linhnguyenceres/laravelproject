<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class indexController extends Controller
{
    public function index(){
        /*   $user = DB::select('select * from nasa where id = ?', [1]); */
        $data = DB::table('hight')
            ->where('id',1)->first();
              $question_name =$data->question;
        /*     $answer1 = DB::table('nasa')->where('answer1',[1])->get();;
              $answer2 = DB::table('nasa')->where('answer2')->get();
              $answer3 = DB::table('nasa')->where('answer3')->get();
              $answer4 =DB::table('nasa')->where('answer4')->get();
              $answer =DB::table('nasa')->where('answer')->get();
   */
            $answer1 = $data->answer1;
            $answer2 = $data->answer2;
            $answer3 = $data->answer3;
            $answer4 = $data->answer4;
            $answer = $data->answer;
           return view("index")->with([
               'question'=>$question,
               'answer1'=>$answer1,
               'answer2'=>$answer2,
               'answer3'=>$answer3,
               'answer4'=>$answer4,
               'answer'=>$answer
           ]);
    }
}

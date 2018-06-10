<?php

namespace App\Http\Controllers\Main;

use App\Choice;
use App\Question;
use App\Quizz;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
//        $quizzes = Quizz::get()->toArray();
        $quizzes = Quizz::where('id', '!=', null)
            ->orderBy('id', 'desc')
            ->get();
        $new_quizzes = count($quizzes) - 3;
        return view('Main.home', compact('quizzes', 'new_quizzes'));
    }

    public function quizz($language)
    {
        $quizz = Quizz::where(strtolower('language'), strtolower($language))
            ->get()
            ->toArray();
        if($quizz==null)
        {
            return redirect( route('home_route') );
        }
        $quizz = $quizz[0];
        $questions = Question::where('quizz_id', $quizz["id"])
            ->get()
            ->toArray();
        $choices[] = null;
        foreach ($questions as $i => $question)
        {
            $choice = Choice::where('question_id', $question['id'])
                ->get();
            $choices[$i] = $choice;
        }
        return view('Main.quizz', compact('quizz', 'questions', 'choices'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Quizz;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }

    public function createQuiz()
    {
        return view('admin.quiz.create');
    }

    public function readQuiz()
    {
        $quizzes = Quizz::get();
        $quizzes->toArray();
        return view('admin.quiz.read', compact('quizzes'));
    }

    public function updateQuiz($id)
    {
        $quiz = Quizz::where('id', $id)->first();
        if($quiz)
        {
            return view('admin.quiz.update', compact('quiz'));
        }
        return view('admin.quiz.update');
    }

    public function deleteQuiz()
    {
        return view('admin.quiz.delete');
    }

    public function questionQuiz($id)
    {
        $viewPath = 'admin.quiz.question';
        $quiz = Quizz::find($id);
        if($quiz)
        {
            $questions = $quiz->question;
            if($questions)
            {
                foreach ($questions as $question)
                {
                    $question['choices'] = Question::find($question->id)->choice;
                }
                return view($viewPath, compact('quiz', 'questions'));
            }
        }
        return view($viewPath);
    }
}

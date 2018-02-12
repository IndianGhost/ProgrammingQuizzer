<?php

namespace App\Http\Controllers\Main;

use App\Question;
use App\Quizz;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $quizzes = Quizz::get()->toArray();
        return view('Main.home', compact('quizzes'));
    }

    public function quizz($id)
    {
        $quizz = Quizz::get()->where('id', $id);
        $questions = Question::get();
    }
}

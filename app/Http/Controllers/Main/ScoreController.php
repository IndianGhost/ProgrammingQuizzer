<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ScoreController extends Controller
{
    public function answers(Request $request, $language)
    {
        $response = array('id'=>1, 'name'=>"achraf", "job"=>"web developer");
        return $response;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizzesController extends Controller
{
    public function index()
    {
        return view('quizzes.show');
    }

    public function create()
    {
        return view('quizzes.create');
    }

}

<?php

namespace Modules\Form\App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class QuestionController extends Controller
{

    public function index(){
        return view('form::form.dashboard.question.index');
    }
}

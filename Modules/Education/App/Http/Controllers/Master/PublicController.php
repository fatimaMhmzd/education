<?php

namespace Modules\Education\App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Modules\Education\App\Models\EducationProduct;

class PublicController extends Controller
{
    public function index(Request $request)
    {
        //$courses = EducationProduct::where('creatorId',Auth::id())->get();
        $courses = EducationProduct::all();

        return view('education::master.mastersPanel.mastersPanel',compact('courses'));
    }

    public function test()
    {
        return view('education::mastersDashboard.mastersPanel.mastersPanel');
    }
}

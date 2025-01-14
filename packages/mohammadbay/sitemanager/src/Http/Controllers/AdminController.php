<?php
namespace mohammadbay\sitemanager\Http\Controllers;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('sitemanager::dashboard.index');
    }
}

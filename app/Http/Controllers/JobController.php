<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;

class JobController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $records = Application::all();
        return view('job_list',['records'=>$records]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Job;
use App\Models\ShowJobStatic;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $showJobStatics = ShowJobStatic::all();

        return view('Home/index', ['jobs' => Job::JobList(), 'showJobStatics' => $showJobStatics]);
    }

    public function login()
    {
        return view('Home/index', ['jobs' => Job::JobList()]);
    }


    public function jobs()
    {
        return view('Jobs', ['jobs' => Job::JobList()]);
    }

    public function test()
    {

        return view('test', ['job' => Job::JobList()[0]]);
    }

    public function about()
    {
        $abouts = About::all();
        return view('About', ['abouts' => $abouts]);
    }
}

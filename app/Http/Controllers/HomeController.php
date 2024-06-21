<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('Home/index', ['jobs' => Job::JobList()]);
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
}

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
}

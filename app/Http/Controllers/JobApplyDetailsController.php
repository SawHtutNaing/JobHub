<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobApplyDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobApplyDetailsController extends Controller
{
    public function store(Request $request)
    {
        $job = Job::where('id', $request->job_id)->first();

        $user = Auth::user();
        $job_id = $job->id;
        $cv_file = $request->cv_file;



        $cv_fileName = time() . '.' . $cv_file->getClientOriginalExtension();


        $request->cv_file->move(public_path('cv'), $cv_fileName);

        JobApplyDetails::create([
            'name' => $user->name,
            'user_id' => $user->id,
            'job_id' => $job->id,
            'email' => $user->email,
            'exp_years' => $request->exp_years,
            'cover_letter' => $request->cover_letter,
            'cv_file' =>  $cv_fileName,
            'prefered_type' => $request->prefered_type



        ]);
        return redirect()->route('home');
    }

    public function acceptInterview(JobApplyDetails $jobApplyDetails)
    {
        // dd($jobApplyDetails);
        $jobApplyDetails->accept = true;
        $jobApplyDetails->update();
        return redirect()->back();
    }
}

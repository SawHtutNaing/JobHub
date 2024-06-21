<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Job;
use Illuminate\Support\Carbon;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $min = $request->query('min', null);
        $title = $request->query('title', null);
        $location = $request->query('location', null);
        $category = $request->query('category', null);
        $max = $request->query('max', PHP_INT_MAX);
        $postedDate = $request->query('postedDate', 'any_date');
        $employmentType = $request->query('employmentType', "");

        // Build the query
        $query = Job::query();


        if ($category) {
            $query->where('category', $category);
        }
        if ($title) {
            $query->where('title', 'like', '%' . $title . '%');
        }

        if ($location) {
            $query->where('location', 'like', '%' . $location . '%');
        }
        if ($employmentType) {
            $query->where('employmentType', $employmentType);
        }


        if (!is_null($min)) {
            $query->where('salary', '>=', (int) $min);
        }


        if ($max) {
            $query->where('salary', '<=', (int) $max);
        }

        switch ($postedDate) {
            case 'today':
                $query->whereDate('created_at', Carbon::today());
                break;
            case 'any_date':


                break;
            case 'last-3-days':
                $query->where('created_at', '>=', Carbon::now()->subDays(3));
                break;
            case 'last-7-days':
                $query->where('created_at', '>=', Carbon::now()->subDays(7));
                break;
        }


        $jobs = $query->get();
        // dd($jobs);
        return view('Jobs', ['jobs' => $jobs]);
    }

    public function apply(Job $job)
    {

        // dd($job);
        return view('AppliedJob', compact('job'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return  view('JobPostForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobRequest $request)
    {

        // dd($request);

        // for job image 

        $job_image = $request->job_image; // Correct way to get the file instance

        // Generate a unique name for the file
        $job_imageName = time() . '.' . $job_image->getClientOriginalExtension();


        $request->job_image->move(public_path('images'), $job_imageName);

        // for job image 

        // for company logo

        $company_logo = $request->company_logo;

        $Company_logoName = time() . '.' . $company_logo->getClientOriginalExtension();
        $request->company_logo->move(public_path('images'), $Company_logoName);
        // for company logo
        $subCategory = $request->subCategory;
        $qualifications = $request->qualifications;
        $subCategoryArray = explode(',', $subCategory);
        $qualificationsArr = explode(',', $qualifications);
        $date = new Date();

        $job = [
            'user_id' => Auth::user()->id,
            'name' => $request->job_title,
            'employmentType' => $request->job_type,
            'location' => $request->location,
            'salary' => $request->salary,
            'description' => $request->description,
            'qualifications' => json_encode($qualificationsArr),
            'subCategories' => json_encode($subCategoryArray),
            'category' => $request->category,
            'companyName' => $request->companyName,
            'job_imagePath' => $job_imageName,
            'company_logoPath' => $Company_logoName,
            'date' => date('Y-m-d H:i:s')

        ];

        Job::insert($job);
        return view('Home/index', ['jobs' => Job::JobList()]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }


    public function filter(Request $request)
    {
        $min = $request->query('min');
        $max = $request->query('max');
        $postedDates = $request->query('postedDate'); // This will be an array


    }
}

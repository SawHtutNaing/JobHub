<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonalProfileRequest;
use App\Http\Requests\UpdatePersonalProfileRequest;
use App\Models\PersonalProfile;

class PersonalProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePersonalProfileRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PersonalProfile $personalProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PersonalProfile $personalProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePersonalProfileRequest $request, PersonalProfile $personalProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PersonalProfile $personalProfile)
    {
        //
    }
}

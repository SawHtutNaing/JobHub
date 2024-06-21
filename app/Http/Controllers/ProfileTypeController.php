<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfileTypeRequest;
use App\Http\Requests\UpdateProfileTypeRequest;
use App\Models\PersonalProfile;
use App\Models\ProfileType;
use Illuminate\Http\Request;



use Illuminate\Support\Facades\Auth;

class ProfileTypeController extends Controller
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
    public function store(StoreProfileTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProfileType $profileType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProfileType $profileType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfileTypeRequest $request, ProfileType $profileType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProfileType $profileType)
    {
        //
    }

    public function profile()
    {
        return view('profile/profile');
    }

    public function profileSetting()
    {
        $details = Auth::user()->personalDetails;
        // dd($details);

        return view('profile/person_profile_setting', compact('details'));
    }

    public function profileSettingStore(Request $request)
    {
        // dd($request->input('graduated'));
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;

        $user->update();
        $profile_img = $request->profile_img;

        $profile_imgName = time() . '.' . $profile_img->getClientOriginalExtension();


        $request->profile_img->move(public_path('users_profile'), $profile_imgName);
        $personalDetails = $user->personalDetails;
        PersonalProfile::updateOrCreate(
            [
                'user_id' => $user->id,
            ],
            [
                'user_id' => $user->id,
                'university' => $request->university,
                'birthday' => $request->birthday,
                'address' => $request->address,
                'nationality' => $request->nationality,
                'phones' => $request->phone,
                'graduated' => $request->graduated,
                'profile_img' => $profile_imgName





            ]

        );
        return redirect()->route('home');
    }
}

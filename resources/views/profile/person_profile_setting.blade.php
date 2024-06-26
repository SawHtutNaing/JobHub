@extends('layouts.app')

@section('title', 'Home Page')
@section('content')







    <form class="space-y-4 md:space-y-6 max-w-md mx-auto" method="POST"  action="{{route('profileSettingStore')}}" enctype="multipart/form-data">
        @csrf
        <div>
          
            <label for="Name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Name</label>
            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your Name..." required="" value="{{Auth::user()->name}}">
        </div>
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="" value="{{Auth::user()->email}}">
        </div>
        
        <div>
          
            <label for="university" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your university</label>
            <input type="text" name="university" id="university" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your university..." required="" value="{{$details?->university}}">
        </div>
        <div class="flex items-center">
            <input  name="graduated" value="true" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="disabled-checked-checkbox" class="ms-2 text-sm font-medium  dark:text-gray-500">Graduated</label>
        </div>

        <div>
            <label for="birthday" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your birthday</label>
            <input type="date" name="birthday" id="birthday" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your birthday..." lue="{{ old('birthday', $details->birthday ? $details->birthday->format('Y-m-d') : '') }}">
        </div>
        

        <div>
          
            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your address</label>
            <input type="text" name="address" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your address..." value="{{$details?->address}}"  >
        </div>
        <div>
          
            <label for="nationality" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your nationality</label>
            <input type="text" name="nationality" id="nationality" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your nationality..."   value="{{$details?->nationality}}">
        </div>
        <div>
          
            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your phone</label>
            <input type="text" name="phone" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your phone..."   value="{{$details?->phone}}">

        </div>

        <div class="mb-4 md:mb-0">
            <label for="company-logo" class="block text-gray-700 text-sm mb-2">Your Photo</label>
            <input type="file" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3  px-8  mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="profile_img">
          </div>



        <button type="submit" class="w-full  bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center text-white">Save Changes</button>
      
    </form>

</form>

@endsection
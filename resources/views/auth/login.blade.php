@extends('layouts.app')

@section('title', 'Home Page')
@section('content')



<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">


    <div class="sm:mx-auto sm:w-full sm:max-w-sm flex justify-around items-center">

        

        <img src="{{ asset('storage/images/logo.jpg') }}" class="h-8" alt="Job Hub" />

        
      <h2 class="text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
    </div>
  
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="#" method="POST" autocomplete="false">
        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
          <div class="mt-2">
            

            <input id="email" name="email"   type="email"  required  autocomplete="false" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
  
        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
            <div class="text-sm">
              <a href="#" class="font-semibold text-primary hover:text-indigo-500">Forgot password?</a>
            </div>
          </div>
          <div class="mt-2">
            <input id="password" value=""  autocomplete="off"  name="password" type="password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
  
        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-primary-auto px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-primary-light focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
        </div>
      </form>
      <p class="text-sm font-light ">
       If you don't have an account , <a href="/register" class="font-medium text-primary-600 hover:underline dark:text-primary-500">register here</a>
    </p>
  
    
    </div>
  </div>
  @endsection
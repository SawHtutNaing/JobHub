@extends('layouts.app')

@section('title', 'Home Page')
@section('content')



<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">

  @if($errors->any())
               
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                
            @endif
    <div class="sm:mx-auto sm:w-full sm:max-w-sm flex justify-around items-center">

        

        <img src="{{ asset('storage/images/logo.jpg') }}" class="h-8" alt="Hire Hub" />

        
      <h2 class="text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
    </div>
  
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="{{route('login')}}" method="POST" autocomplete="false">
        @csrf
        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
          <div class="mt-2">
            

            <input id="email" name="email"   type="email"  required  autocomplete="false" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
  
        <div>
         
          </div>
          <div class="mt-2">
            <input id="password" value=""  autocomplete="off"  name="password" type="password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
  
        <div>
          <button type="submit" class="flex  min-w-64 mx-auto  mt-10 justify-center rounded-md  bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
        </div>
      </form>
      <p class="text-sm font-light text-center mt-6">
       If you don't have an account , <a href="{{route('auth.register')}}" class="font-medium text-primary-600 hover:underline dark:text-primary-500">register here</a>
    </p>
  
    
    </div>
  </div>
  @endsection
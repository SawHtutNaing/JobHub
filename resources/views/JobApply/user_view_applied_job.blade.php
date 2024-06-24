@extends('layouts.app')

@section('title', 'Home Page')
@section('content')
<section class="w-full">
    <div class="mt-10  w-5/6     gap-y-14  ">

<body>
    <div class=" max-w-md shadow mx-auto ps-8 h-[30rem]">
      <h1 class=" mt-7">
        Name - {{$applyDetail->user->name}}
      </h1>
      <h1 class=" mt-7">
        Job Name - {{$applyDetail->job->name}}
      </h1>
      <h1 class=" mt-7">
        Email - {{$applyDetail->email}}
  
      </h1>
      <h1 class=" mt-7">
        Exp Years - {{$applyDetail->exp_years}}
      </h1>
      <p class=" mt-7">
  Cover Letter - {{$applyDetail->cover_letter}}
      </p>
      <p class=" mt-7">
        Prefered Type - {{$applyDetail->prefered_type}}
      </p>
      <div class=" mt-12">
        <a download="{{$applyDetail->user->name}}" href="{{asset('cv').'/'.$applyDetail->cv_file}}" class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded " >
          Download Cv 
        </a>

      </div>
     
     
    </div>
  </body>

  </section>
  @endsection
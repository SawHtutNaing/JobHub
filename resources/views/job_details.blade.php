@extends('layouts.app')

@section('title', 'Home Page')
@section('content')
<section
class=" lg:flex justify-center gap-36 p-6"
>
   
    <section class="flex justify-center lg:block  lg:w-2/5">
        <div class="   rounded-lg ">
            
                <img class="rounded-t-lg"
 

                src={{asset('storage').'/'.$job->job_imagePath}}
        alt="" />
            
    
         
            <div class="p-5 flex flex-col  justify-between gap-y-4">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$job->name}} </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                  {{$job->companyName}}
                </p>
                <div>
                    <span class="bg-blue-100 text-blue1000-800 text-sm font-medium me-2 px-4 py-2 rounded dark:bg-blue-900 dark:text-blue-300">{{$job->employmentType}}</span>
                    <span class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-4 py-2 rounded dark:bg-blue-900 dark:text-blue-300"> <i class="fa-solid fa-calendar"></i> {{$job->date}}</span>
        
                </div> 
                 <div class=" mt-4">
                    
                    <span class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-4 py-2 rounded dark:bg-blue-900 dark:text-blue-300"> {{$job->salary}}\month</span>
        
                </div>
                <div class=" my-5 flex justify-start  gap-y-3 flex-wrap">
                  {{-- @if() --}}
                  {{-- @dd($job->subCategories) --}}
                    @foreach ($job->subCategories as $item)
                    <span class="  bg-green-100 text-green-800 text-sm font-medium me-2 px-4 py-2 rounded dark:bg-green-900 dark:text-green-300">{{$item}}</span>
                        
                    @endforeach
                   
                </div>
                <div class=" mt-4">
                    
                  <span class=" text-md font-medium  py-2 rounded dark:bg-blue-900 dark:text-blue-300"> 

                   {{$job->description}}
                  </span>
      
              </div>

              {{-- <div class=" mt-4">
                <h1 class=" text-black  text-lg">
                  Responsibilities
                </h1>
                <ul class=" list-decimal	">
               @if (count($job->responsibilities) > 0 )

                  @foreach ($job->responsibilities as $item)
                  <li>
                    {{$item}}
                  </li>
                  @endforeach
                  @endif
                </ul>

    
            </div> --}}

            <div class=" mt-4">
              <h1 class=" text-black  text-lg">
                Qualifications
              </h1>
              <ul class=" list-decimal	">
               @if (count($job->qualifications) > 0 )
               @foreach ($job->qualifications as $item)
               <li>
                 {{$item}}
               </li>
               @endforeach
               @endif
              </ul>

  
          </div>
        
            </div>
        </div>
    </section>
@endsection
@extends('layouts.app')

@section('title', 'Home Page')


<?php 
$storageAppPath = dirname(__DIR__, 2) . '/app/public/images/top-companies';

// dd($storageAppPath);
$images =glob($storageAppPath . '/*.*');



?>
@section('content')


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- <div class="divA flex justify-center mt-16 mx-auto ">
<div class="divB flex justify-between gap-6">
    
    @foreach ($images as $image) 
        
      <img src="{{ asset('storage/images/top-companies/'. basename($image)) }}" alt="">
    
    @endforeach
    
</div>

    </div> --}}

<div class=" flex lg:flex-row  flex-col justify-between h-96   gap-x-14 mt-28  px-6  lg:h-50">

        <div class="  flex flex-col   justify-around  lg:w-1/2">
         <div class=" ">

            <h1 
            class=" text-2xl  lg:text-4xl h1 bold  text-center font-sans"
                >
                Welcome to Hire Hub  , {{Auth::check()?? Auth::user()->name}}  Your Premier Job Finding Network
        
        
            </h1>
            <p 
             class=" ps-11 mt-5 text-lg"
              >
              We connect you with thousands of job opportunities tailored to your skills and passions. Upload your resume, set personalized job alerts, and access expert career advice to navigate your job search with confidence.
            </p>
         </div>
          
        </div>
    
    <div class="  lg:w-1/2 mx-auto lg:h-full">
        <img src="{{asset('storage/images/hero.svg')}}" alt="" class=" w-full h-full ">
    </div>
</div>
<div class=" lg:flex justify-center ">
  <form class="w-1/2   mx-auto mt-10">
    

         
        
          
    {{-- <div class="relative w-full flex flex-col lg:flex-row"> --}}
      {{-- <input type="search" id="search-dropdown" class="p-2.5 w-full text-sm text-gray-900 bg-gray-50 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Jobs title.." required />
      <input type="search" id="search-dropdown" class="p-2.5 w-full text-sm text-gray-900 bg-gray-50  border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="City name .." required /> --}}
    
      {{-- <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300  hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button"><span class=" lg:block">Jobs categories</span>
         <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
      </svg>
    </button>
            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                <li>
                    <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">IT</button>
                </li>
                <li>
                    <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Construction</button>
                </li>
                <li>
                    <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Design</button>
                </li>
                <li>
                    <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Human Resources</button>
                </li>
                <li>
                    <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Marketing</button>
                </li>
                <li>
                    <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Human Resources</button>
                </li>
           
    
                </ul>
            </div> --}}
{{--     
      <button type="submit" class="p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none flex justify-center items-center focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
        </svg>
        <span class="sr-only">Search</span>
      </button>
    </div> --}}
    
      
  </form>

</div>

<section class=" container w-screen mx-auto mt-28 flex  justify-between" >
 

@foreach ($showJobStatics as $showJobStatic)
<div 
class=" w-1/5  text-start"
>
<h1 class="  text-4xl text-black font-bold flex ">
{{$showJobStatic->jobs_count}}  

<span class=" ms-5">
    {{-- <i class="fa-solid fa-briefcase"></i> --}}
    <img  alt=""   class=" w-14"   src={{asset('storage').'/'.$showJobStatic->logo}}>

</span>
</h1>
<h4  class=" text-2xl text-black font-normal">
  {{$showJobStatic->title}} 
</h4>
<p>
  {{$showJobStatic->content}} 
</p>
</div>
@endforeach

</section >
{{-- <div 
    class="  mt-16"

>
    <h1
    class="  text-3xl text-bold text-center "
        >
        Categories
    </h1>
    <div 
        class="mx-auto w-4/5  mt-20  gap-x-9  owl-carousel owl-theme"
    >

        <div class="flex flex-col items-center hover:bg-indigo-800 justify-center text-white text-medium   bg-indigo-600 py-7 px-4 item">
          <i class="fa-solid text-md fa-code"></i>
            
          <dt class="mb-2 mt-3  text-3xl font-extrabold">IT</dt>
            
        </div>
        <div class="flex flex-col items-center hover:bg-indigo-800 justify-center text-white text-medium   bg-indigo-600 py-7 px-4 item">
          <i class="fa-solid text-md  fa-building"></i>  
          <dt class="mb-2 mt-3  text-3xl font-extrabold"> Construction </dt>
            
        </div>
        <div class="flex flex-col items-center hover:bg-indigo-800 justify-center text-white text-medium   bg-indigo-600 py-7 px-4 item">
          <i class="fa-solid  text-md fa-pen-nib"></i>  
          <dt class="mb-2 mt-3  text-3xl font-extrabold">Design</dt>
            
        </div>
        <div class="flex flex-col items-center hover:bg-indigo-800 justify-center text-white text-medium   bg-indigo-600 py-7 px-4 item">
          <i class="fa-solid fa-people-group text-md"></i>
          <dt class="mb-2 mt-3  text-3xl font-extrabold">Human Resources</dt>
            
        </div>

        <div class="flex flex-col items-center hover:bg-indigo-800 justify-center text-white text-medium   bg-indigo-600 py-7 px-4 item">
          <i class="fa-solid fa-chart-simple text-md"></i>  
          <dt class="mb-2 mt-3  text-3xl font-extrabold">Marketing</dt>
            
        </div>
        
    </div> --}}
</div>

<h1 class=" text-end text-green-600  text-2xl w-10/12 mt-20">
  <a href="/jobs">View all jobs </a>
</h1>

<div class="mt-10 mx-auto w-5/6 grid grid-cols-1 md:grid-cols-2  gap-4">

    @for ($i = 0; $i < count($jobs); $i++) <div class=" mt-10 ">
        @include('components.JobCard',['job'=>$jobs[$i]])

</div>




@endfor

    {{-- partner companies  --}}

   


</div>


<section
    class="  mt-8"
>
    <div
        class=" text-center flex flex-col gap-y-4"
    >
        <h2
        class=" text-4xl text-center"
    >
        Featured Companies 
    </h2>
    <p
    
    >Amazing companies are looking for greate talent </p>
    <p>
        Apply now to start working anywhere .
    </p>
    </div>
    <div>
{{-- old top companies  --}}
        {{-- <div
        class= "grid mt-20 grid-flow-row-dense grid-cols-3 grid-rows-3"
            >
<div class="w-32   mx-auto mt-10">
    <div class= "flex justify-evenly gap-x-6">
        <img class=" w-12" src="{{asset('storage/images/top-companies/2.webp')}}" alt="">
        <h1
            class=" text-center mt-3 text-2xl "
        >GitHub</h1>
    </div>
</div>
<div class="w-32   mx-auto mt-10">
    <div class= "flex justify-evenly gap-x-6">
               <img class=" w-12" src="{{asset('storage/images/top-companies/3.webp')}}" alt="">

        <h1
            class=" text-center mt-3 text-2xl "
        >Amazon</h1>
    </div>
</div>
<div class="w-32   mx-auto mt-10">
    <div class= "flex justify-evenly gap-x-6">
               <img class=" w-12" src="{{asset('storage/images/top-companies/8.webp')}}" alt="">

        <h1
            class=" text-center mt-3 text-2xl "
        >
        Microsoft
      </h1>
    </div>
</div>
<div class="w-32   mx-auto mt-10">
    <div class= "flex justify-evenly gap-x-6">
               <img class=" w-12" src="{{asset('storage/images/top-companies/9.webp')}}" alt="">

        <h1
            class=" text-center mt-3 text-2xl "
        >Nividia</h1>
    </div>
</div>
<div class="w-32   mx-auto mt-10">
    <div class= "flex justify-evenly gap-x-6">
               <img class=" w-12" src="{{asset('storage/images/top-companies/6.webp')}}" alt="">

        <h1
            class=" text-center mt-3 text-2xl "
        >Google</h1>
    </div>
</div>
<div class="w-32   mx-auto mt-10">
    <div class= "flex justify-evenly gap-x-6">
               <img class=" w-12" src="{{asset('storage/images/top-companies/7.webp')}}" alt="">

        <h1
            class=" text-center mt-3 text-2xl "
        >JPM</h1>
    </div>
</div>

        </div> --}}

        <div
        class= "grid mt-20 grid-flow-row-dense grid-cols-3 ps-12 "
        >
        <div class="max-w-xs mx-auto bg-white dark:bg-gray-900 rounded-lg overflow-hidden shadow-lg">
          <div class="border-b px-4 pb-6">
              <div class="text-center my-4">
                  <img class="h-32 w-32 rounded-full border-4 border-white dark:border-gray-800 mx-auto my-4"
                  src="{{asset('storage/images/top-companies/3.webp')}}"
                       alt="">
                  <div class="py-2">
                      <h3 class="font-bold text-2xl text-gray-800 dark:text-white mb-1">Cait Genevieve</h3>
                      <div class="inline-flex text-gray-700 dark:text-gray-300 items-center">
                          <svg class="h-5 w-5 text-gray-400 dark:text-gray-600 mr-1" fill="currentColor"
                              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                              <path class=""
                                  d="M5.64 16.36a9 9 0 1 1 12.72 0l-5.65 5.66a1 1 0 0 1-1.42 0l-5.65-5.66zm11.31-1.41a7 7 0 1 0-9.9 0L12 19.9l4.95-4.95zM12 14a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                          </svg>
                          New York, NY
                      </div>
                  </div>
              </div>
              <div class="flex gap-2 px-2">
                  <button
                      class="flex-1 rounded-full bg-blue-600 dark:bg-blue-800 text-white dark:text-white antialiased font-bold hover:bg-blue-800 dark:hover:bg-blue-900 px-4 py-2">
                      Follow
                  </button>
                
              </div>
          </div>
          <p class=" p-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat deleniti nesciunt autem dolorem recusandae aperiam incidunt consectetur suscipit sapiente aut.
          </p>
          <div class="px-4 py-4">
              <div class="flex gap-2 items-center text-gray-800 dark:text-gray-300 mb-4">
                  <svg class="h-6 w-6 text-gray-600 dark:text-gray-400" fill="currentColor"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                      <path class=""
                          d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v2z" />
                  </svg>
                  <span><strong class="text-black dark:text-white">1005</strong> Followers</span>
              </div>
              <div class="flex">
                  <div class="flex justify-end mr-2">
                      <img class="border-2 border-white dark:border-gray-800 rounded-full h-10 w-10 -mr-2"
                          src="https://randomuser.me/api/portraits/men/32.jpg" alt="">
                      <img class="border-2 border-white dark:border-gray-800 rounded-full h-10 w-10 -mr-2"
                          src="https://randomuser.me/api/portraits/women/31.jpg" alt="">
                      <img class="border-2 border-white dark:border-gray-800 rounded-full h-10 w-10 -mr-2"
                          src="https://randomuser.me/api/portraits/men/33.jpg" alt="">
                      <img class="border-2 border-white dark:border-gray-800 rounded-full h-10 w-10 -mr-2"
                          src="https://randomuser.me/api/portraits/women/32.jpg" alt="">
                      <img class="border-2 border-white dark:border-gray-800 rounded-full h-10 w-10 -mr-2"
                          src="https://randomuser.me/api/portraits/men/44.jpg" alt="">
                      <img class="border-2 border-white dark:border-gray-800 rounded-full h-10 w-10 -mr-2"
                          src="https://randomuser.me/api/portraits/women/42.jpg" alt="">
                      <span
                          class="flex items-center justify-center bg-white dark:bg-gray-800 text-sm text-gray-800 dark:text-white font-semibold border-2 border-gray-200 dark:border-gray-700 rounded-full h-10 w-10">
                          +999
                      </span>
                  </div>
              </div>
          </div>
      </div>
      <div class="max-w-xs mx-auto bg-white dark:bg-gray-900 rounded-lg overflow-hidden shadow-lg">
        <div class="border-b px-4 pb-6">
            <div class="text-center my-4">
                <img class="h-32 w-32 rounded-full border-4 border-white dark:border-gray-800 mx-auto my-4"
                src="{{asset('storage/images/top-companies/4.webp')}}"
                     alt="">
                <div class="py-2">
                    <h3 class="font-bold text-2xl text-gray-800 dark:text-white mb-1">Cait Genevieve</h3>
                    <div class="inline-flex text-gray-700 dark:text-gray-300 items-center">
                        <svg class="h-5 w-5 text-gray-400 dark:text-gray-600 mr-1" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path class=""
                                d="M5.64 16.36a9 9 0 1 1 12.72 0l-5.65 5.66a1 1 0 0 1-1.42 0l-5.65-5.66zm11.31-1.41a7 7 0 1 0-9.9 0L12 19.9l4.95-4.95zM12 14a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                        </svg>
                        New York, NY
                    </div>
                </div>
            </div>
            <div class="flex gap-2 px-2">
                <button
                    class="flex-1 rounded-full bg-blue-600 dark:bg-blue-800 text-white dark:text-white antialiased font-bold hover:bg-blue-800 dark:hover:bg-blue-900 px-4 py-2">
                    Follow
                </button>
              
            </div>
        </div>
        <p class=" p-4">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat deleniti nesciunt autem dolorem recusandae aperiam incidunt consectetur suscipit sapiente aut.
        </p>
        <div class="px-4 py-4">
            <div class="flex gap-2 items-center text-gray-800 dark:text-gray-300 mb-4">
                <svg class="h-6 w-6 text-gray-600 dark:text-gray-400" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path class=""
                        d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v2z" />
                </svg>
                <span><strong class="text-black dark:text-white">1005</strong> Followers</span>
            </div>
            <div class="flex">
                <div class="flex justify-end mr-2">
                    <img class="border-2 border-white dark:border-gray-800 rounded-full h-10 w-10 -mr-2"
                        src="https://randomuser.me/api/portraits/men/32.jpg" alt="">
                    <img class="border-2 border-white dark:border-gray-800 rounded-full h-10 w-10 -mr-2"
                        src="https://randomuser.me/api/portraits/women/31.jpg" alt="">
                    <img class="border-2 border-white dark:border-gray-800 rounded-full h-10 w-10 -mr-2"
                        src="https://randomuser.me/api/portraits/men/33.jpg" alt="">
                    <img class="border-2 border-white dark:border-gray-800 rounded-full h-10 w-10 -mr-2"
                        src="https://randomuser.me/api/portraits/women/32.jpg" alt="">
                    <img class="border-2 border-white dark:border-gray-800 rounded-full h-10 w-10 -mr-2"
                        src="https://randomuser.me/api/portraits/men/44.jpg" alt="">
                    <img class="border-2 border-white dark:border-gray-800 rounded-full h-10 w-10 -mr-2"
                        src="https://randomuser.me/api/portraits/women/42.jpg" alt="">
                    <span
                        class="flex items-center justify-center bg-white dark:bg-gray-800 text-sm text-gray-800 dark:text-white font-semibold border-2 border-gray-200 dark:border-gray-700 rounded-full h-10 w-10">
                        +999
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-xs mx-auto bg-white dark:bg-gray-900 rounded-lg overflow-hidden shadow-lg">
      <div class="border-b px-4 pb-6">
          <div class="text-center my-4">
              <img class="h-32 w-32 rounded-full border-4 border-white dark:border-gray-800 mx-auto my-4"
              src="{{asset('storage/images/top-companies/5.webp')}}"
                   alt="">
              <div class="py-2">
                  <h3 class="font-bold text-2xl text-gray-800 dark:text-white mb-1">Cait Genevieve</h3>
                  <div class="inline-flex text-gray-700 dark:text-gray-300 items-center">
                      <svg class="h-5 w-5 text-gray-400 dark:text-gray-600 mr-1" fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                          <path class=""
                              d="M5.64 16.36a9 9 0 1 1 12.72 0l-5.65 5.66a1 1 0 0 1-1.42 0l-5.65-5.66zm11.31-1.41a7 7 0 1 0-9.9 0L12 19.9l4.95-4.95zM12 14a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                      </svg>
                      New York, NY
                  </div>
              </div>
          </div>
          <div class="flex gap-2 px-2">
              <button
                  class="flex-1 rounded-full bg-blue-600 dark:bg-blue-800 text-white dark:text-white antialiased font-bold hover:bg-blue-800 dark:hover:bg-blue-900 px-4 py-2">
                  Follow
              </button>
            
          </div>
      </div>
      <p class=" p-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat deleniti nesciunt autem dolorem recusandae aperiam incidunt consectetur suscipit sapiente aut.
      </p>
      <div class="px-4 py-4">
          <div class="flex gap-2 items-center text-gray-800 dark:text-gray-300 mb-4">
              <svg class="h-6 w-6 text-gray-600 dark:text-gray-400" fill="currentColor"
                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path class=""
                      d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v2z" />
              </svg>
              <span><strong class="text-black dark:text-white">1005</strong> Followers</span>
          </div>
          <div class="flex">
              <div class="flex justify-end mr-2">
                  <img class="border-2 border-white dark:border-gray-800 rounded-full h-10 w-10 -mr-2"
                      src="https://randomuser.me/api/portraits/men/32.jpg" alt="">
                  <img class="border-2 border-white dark:border-gray-800 rounded-full h-10 w-10 -mr-2"
                      src="https://randomuser.me/api/portraits/women/31.jpg" alt="">
                  <img class="border-2 border-white dark:border-gray-800 rounded-full h-10 w-10 -mr-2"
                      src="https://randomuser.me/api/portraits/men/33.jpg" alt="">
                  <img class="border-2 border-white dark:border-gray-800 rounded-full h-10 w-10 -mr-2"
                      src="https://randomuser.me/api/portraits/women/32.jpg" alt="">
                  <img class="border-2 border-white dark:border-gray-800 rounded-full h-10 w-10 -mr-2"
                      src="https://randomuser.me/api/portraits/men/44.jpg" alt="">
                  <img class="border-2 border-white dark:border-gray-800 rounded-full h-10 w-10 -mr-2"
                      src="https://randomuser.me/api/portraits/women/42.jpg" alt="">
                  <span
                      class="flex items-center justify-center bg-white dark:bg-gray-800 text-sm text-gray-800 dark:text-white font-semibold border-2 border-gray-200 dark:border-gray-700 rounded-full h-10 w-10">
                      +999
                  </span>
              </div>
          </div>
      </div>
  </div>

    </div>
</section>

{{-- about us  --}}
<section>

<div class="bg-white sm:px-8 py-12 mt-">
 
    <div
      class="relative max-w-screen-xl mt-24 px-8 md:px-12 lg:px-16 xl:px-32 py-16 mx-auto  shadow-neutral-300 text-gray-900 sm:rounded-lg shadow-lg">
      <div class="absolute right-0 bottom-0 hero-pattern w-64 h-56"></div>
      <div class="relative">
        <div>
          <h2 class="text-center text-gray-800 text-4xl lg:text-5xl font-bold leading-tight">About us</h2>
          <div class="my-4 mx-auto w-12 h-2 border-4 border-indigo-500"></div>
          <div class="text-center text-gray-700 font-light">Here are what some of our users
            saying ...</div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:mx-12">
          <div
            class="relative mx-auto mt-8 rounded-lg shadow max-w-sm p-10 bg-gray-100 text-gray-700 leading-snug flex flex-col justify-between">
            <div class="-ml-4">
              <svg class="w-8 opacity-25 text-indigo-500" xmlns="http://www.w3.org/2000/svg"
                shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality"
                fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0
                                                                                                               640 640"
                fill=currentColor>
                <path
                  d="M557.133 561.704H442.128c-44.256 0-80.458-36.19-80.458-80.446 0-165.58-42.32-347.485 160.656-399.418 91.95-23.516 115.915 77.753 18.119 84.745-59.647 4.276-71.293 42.804-73.147 101.068h92.269c44.256 0 80.458 36.201 80.458 80.458v130.702c0 45.591-37.3 82.89-82.891 82.89zm-358.032 0H84.096c-44.256 0-80.446-36.19-80.446-80.446 0-165.58-42.331-347.485 160.644-399.418 91.95-23.516 115.915 77.753 18.118 84.745-59.646 4.276-71.292 42.804-73.146 101.068h92.269c44.256 0 80.457 36.201 80.457 80.458v130.702c0 45.591-37.3 82.89-82.89 82.89z" />
              </svg>
            </div>
            <div class="mt-2">
              I felt disorganized. Pieces of paper everywhere. I was constantly making new lists, losing old ones,
              crossing off items and adding new ones. I was forever worried things were slipping and not getting done. My
              brain was tired
            </div>
            <div>
              <div class="mx-auto w-full border border-gray-300 my-8"></div>
              <div class="flex items-center">
                <div>
                  <img class="w-12 h-12 rounded-full border-2 border-indigo-400"
                    src="https://avatars2.githubusercontent.com/u/2741?s=64&v=4">
                </div>
                <div class="ml-4">
                  <div class="font-bold">David H. Hansson</div>
                  <div class="text-sm text-gray-600 mt-1">CTO, <a href="https://timerse.com/7-steps-to-boost-your-metabolism/">Boosting Metabolism</a></div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="mx-auto mt-8 rounded-lg shadow max-w-sm p-10 bg-gray-100 text-gray-700 leading-snug flex flex-col justify-between">
            <div class="-ml-4">
              <svg class="w-8 opacity-25 text-indigo-500" xmlns="http://www.w3.org/2000/svg"
                shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality"
                fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0
                                                                                                               640 640"
                fill=currentColor>
                <path
                  d="M557.133 561.704H442.128c-44.256 0-80.458-36.19-80.458-80.446 0-165.58-42.32-347.485 160.656-399.418 91.95-23.516 115.915 77.753 18.119 84.745-59.647 4.276-71.293 42.804-73.147 101.068h92.269c44.256 0 80.458 36.201 80.458 80.458v130.702c0 45.591-37.3 82.89-82.891 82.89zm-358.032 0H84.096c-44.256 0-80.446-36.19-80.446-80.446 0-165.58-42.331-347.485 160.644-399.418 91.95-23.516 115.915 77.753 18.118 84.745-59.646 4.276-71.292 42.804-73.146 101.068h92.269c44.256 0 80.457 36.201 80.457 80.458v130.702c0 45.591-37.3 82.89-82.89 82.89z" />
              </svg>
            </div>
            <div class="mt-2">
              I felt disorganized. Pieces of paper everywhere. I was constantly making new lists, losing old ones,
              crossing off items and adding new ones. I was forever worried things were slipping and not getting done. My
              brain was tired
            </div>
            <div>
              <div class="mx-auto w-full border border-gray-300 my-8"></div>
              <div class="flex items-center">
                <div>
                  <img class="w-12 h-12 rounded-full border-2 border-indigo-400"
                    src="https://avatars0.githubusercontent.com/u/810438?s=100">
                </div>
                <div class="ml-4">
                  <div class="font-bold">Dan Abramov</div>
                  <div class="text-sm text-gray-600 mt-1">Creator, <a href="https://swift.org/">Java</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</section>
<div class="relative w-10/12 mx-auto isolate overflow-hidden py-16 sm:py-24 lg:py-32 
">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2">
        <div class="max-w-xl lg:max-w-lg">
          <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">Subscribe to our newsletter.</h2>
          <p class="mt-4 text-lg leading-8 ">Nostrud amet eu ullamco nisi aute in ad minim nostrud adipisicing velit quis. Duis tempor incididunt dolore.</p>
          <div class="mt-6 flex max-w-md gap-x-4">
            <label for="email-address" class="sr-only">Email address</label>
            <input id="email-address" name="email" type="email" autocomplete="email" required class="min-w-0 flex-auto rounded-md border-0 bg-white/5 px-3.5 py-2 shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset ring-indigo-500 sm:text-sm sm:leading-6" placeholder="Enter your email">
            <button type="submit" class="flex-none rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Subscribe</button>
          </div>
        </div>
        <dl class="grid grid-cols-1 gap-x-8 gap-y-10 sm:grid-cols-2 lg:pt-2">
          <div class="flex flex-col items-start">
            <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
              <svg class="h-6 w-6 dd" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
              </svg>
            </div>
            <dt class="mt-4 font-semibold dd">Weekly articles</dt>
            <dd class="mt-2 leading-7 dd">Non laboris consequat cupidatat laborum magna. Eiusmod non irure cupidatat duis commodo amet.</dd>
          </div>
        
        </dl>
      </div>
    </div>
    <div class="absolute left-1/2 top-0 -z-10 -translate-x-1/2 blur-3xl xl:-top-6" aria-hidden="true">
      <div class="aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr  opacity-30" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
  </div>
  
<sec/tion>

</section>
<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
</script>

@endsection
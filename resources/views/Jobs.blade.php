@extends('layouts.app')

@section('title', 'Home Page')
@section('content')


<?php



?>

<section class=" w-screen lg:flex  justify-center px-2 gap-x-8">
    <section class=" w-2/12 lg:w-1/5">
        <button data-drawer-target="sidebar" data-drawer-toggle="sidebar" aria-controls="sidebar" type="button" class="inline-flex bg-primary-auto text-white items-center px-4  py-2 text-center rounded   lg:hidden hover:bg-primary-light focus:outline-none focus:ring-2   ">
          Filter
         </button>
         
         <aside id="sidebar" class="fixed   lg:top-16   xl:left-36 lg:left-0 z-40  transition-transform -translate-x-full lg:translate-x-0 h-screen" >
           <div class="overflow-y-auto text-center py-5 px-3 h-full bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
               
            <div class="z-10 mt-5 bg-white rounded-lg shadow w-60 dark:bg-gray-700">
               
                <h1  class='lg:text-xl xl:text-2xl'>
                    Work Setting
                </h1>
                <ul class=" px-3 pb-3 overflow-y-auto  text-gray-700 dark:text-gray-200" aria-labelledby="dropdownSearchButton">
                  <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                      <input id="checkbox-item-11" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                      <label for="checkbox-item-11" class="w-full ms-2  font-medium text-gray-900 rounded dark:text-gray-300"> On Site (5000)</label>
                    </div>
                  </li>
                  <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                        <input checked id="checkbox-item-12" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="checkbox-item-12" class="w-full ms-2  font-medium text-gray-900 rounded dark:text-gray-300">Remote (400)</label>
                      </div>
                  </li>
                  <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                      <input id="checkbox-item-13" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                      <label for="checkbox-item-13" class="w-full ms-2  font-medium text-gray-900 rounded dark:text-gray-300">Hydrid (400)</label>
                    </div>
                  </li>

                        
                </ul>
            
            </div>
            <div class="z-10 mt-5 bg-white rounded-lg shadow w-60 dark:bg-gray-700 pb-5">
               
              <h1  class='lg:text-xl xl:text-2xl'>
                  Salary 
              </h1>
             <div class=" flex  justify-around  ">
              <div>
                <label for="min" class="">Min</label>
                <input type="text" id="min" class="bg-gray-50 w-20 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block " placeholder="Min" required />
              </div>
              <div>
                <label for="max" class="">Max</label>
                <input type="text" id="max" class="bg-gray-50 w-20 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block " placeholder="Max" required />
              </div>
             </div>
          
          </div>
            <div class="z-10 mt-5 bg-white rounded-lg shadow w-60 dark:bg-gray-700">
               
                <h1  class='lg:text-xl xl:text-2xl'>
                   Posted Date
                </h1>
                <ul class=" px-3 pb-3 overflow-y-auto  text-gray-700 dark:text-gray-200" aria-labelledby="dropdownSearchButton">
                  <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                      <input id="checkbox-item-11" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                      <label for="checkbox-item-11" class="w-full ms-2  font-medium text-gray-900 rounded dark:text-gray-300">Any Date</label>
                    </div>
                  </li>
                  <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                        <input checked id="checkbox-item-12" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="checkbox-item-12" class="w-full ms-2  font-medium text-gray-900 rounded dark:text-gray-300">Today</label>
                      </div>
                  </li>
                  <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                      <input id="checkbox-item-13" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                      <label for="checkbox-item-13" class="w-full ms-2  font-medium text-gray-900 rounded dark:text-gray-300">Last 3 Days</label>
                    </div>
                  </li>
                  <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                      <input id="checkbox-item-14" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                      <label for="checkbox-item-14" class="w-full ms-2  font-medium text-gray-900 rounded dark:text-gray-300">Last 7 Days</label>
                    </div>
                  </li>
                 
                 
                      
                </ul>
            
            </div>
            <div class="z-10 mt-5 bg-white rounded-lg shadow w-60 dark:bg-gray-700">
               
                <h1  class='lg:text-xl xl:text-2xl'>
                  Employment Type
                </h1>
                <ul class=" px-3 pb-3 overflow-y-auto  text-gray-700 dark:text-gray-200" aria-labelledby="dropdownSearchButton">
                  <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                      <input id="checkbox-item-11" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                      <label for="checkbox-item-11" class="w-full ms-2  font-medium text-gray-900 rounded dark:text-gray-300">Full-time (555)</label>
                    </div>
                  </li>
                
                
                  <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                      <input id="checkbox-item-16" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                      <label for="checkbox-item-16" class="w-full ms-2  font-medium text-gray-900 rounded dark:text-gray-300">Part Time (100)</label>
                    </div>
                  </li>
                        <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                      <input id="checkbox-item-17" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                      <label for="checkbox-item-17" class="w-full ms-2  font-medium text-gray-900 rounded dark:text-gray-300">Contract (300)</label>
                    </div>
                  </li>
                   <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                      <input id="checkbox-item-17" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                      <label for="checkbox-item-17" class="w-full ms-2  font-medium text-gray-900 rounded dark:text-gray-300">Third Party  (223)</label>
                    </div>
                  </li>
                </ul>
            
            </div>
            <div class="z-10 mt-5 bg-white rounded-lg shadow mb-10 w-60 dark:bg-gray-700">
               
              <h1  class='lg:text-xl xl:text-2xl'>
              Work Authorization
              </h1>
              <ul class=" px-3 pb-3 overflow-y-auto  text-gray-700 dark:text-gray-200" aria-labelledby="dropdownSearchButton">
                <li>
                  <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                    <input id="checkbox-item-11" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="checkbox-item-11" class="w-full ms-2  font-medium text-gray-900 rounded dark:text-gray-300">Willing to sponsor</label>
                  </div>
                </li>
               
              </ul>
          
          </div>
            <div class="z-10 mt-5 bg-white rounded-lg shadow mb-10 w-60 dark:bg-gray-700">
               
                <h1  class='lg:text-xl xl:text-2xl'>
                Easy Apply
                </h1>
                <ul class=" px-3 pb-3 overflow-y-auto  text-gray-700 dark:text-gray-200" aria-labelledby="dropdownSearchButton">
                  <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                      <input id="checkbox-item-11" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                      <label for="checkbox-item-11" class="w-full ms-2  font-medium text-gray-900 rounded dark:text-gray-300">Bonnie Green</label>
                    </div>
                  </li>
                 
                </ul>
            
            </div>
           </div>
         
         </aside></section>
    <section class= "  flex justify-center xs:w-10/12  lg:w-4/5">  

       <div>
       <div 
        class=" "
       >
        <form class=" max-w-xl mx-auto">
            <div class="flex">
           
                <div class="relative w-full">
                    <input type="search" id="location-search" class="block p-2.5 w-full z-20 text-sm text-gray-900 rounded-e-lg  border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Enter your email" required />
                    <button type="submit" class="absolute top-0 end-0 h-full p-2.5 text-sm font-medium text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <i class="fa-solid fa-bell"></i>
                    </button>
                </div>
            </div>
        </form>
       </div>

       
       <div class="relative w-full flex flex-col justify-center lg:flex-row mt-9">
        <input type="search" id="search-dropdown" class="p-2.5 text-sm text-gray-900 bg-gray-50 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Jobs title.." required />
        <input type="search" id="search-dropdown" class="p-2.5  text-sm text-gray-900 bg-gray-50  border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="City name .." required />
      
        <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300  hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button"><span class=" lg:block">Jobs categories</span>
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
              </div>
      
        <button type="submit" class="p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none flex justify-center items-center focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
          </svg>
          <span class="sr-only">Search</span>
        </button>
      </div>
        
        <div class="mt-10 mx-auto w-5/6">


            <p>
                
                <span class="bg-green-300 me-2 px-2.5 py-0.5 rounded ">  40</span>

               Results Found 
            </p>
        </div>
        <div class="mt-10 mx-auto w-5/6 grid grid-cols-1   gap-y-14  gap-4">
        
            @for ($i = 0; $i < count($jobs); $i++) 
                @include('components.JobCard',['job'=>$jobs[$i]])
                @endfor
        
    
      
        
        </div>
       </div>
        </section>
</section>

@endsection

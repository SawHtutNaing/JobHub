<?php 
$subCategories = ["Node.js", "Express", "MongoDB"]
?>
@extends('layouts.app')

@section('title', 'Home Page')
@section('content')

<section
class=" lg:flex justify-center gap-36 p-6"
>
   
    <section class="flex justify-center lg:block  lg:w-2/5">
        <div class="   rounded-lg ">
            
                <img class="rounded-t-lg" src="{{ asset('storage/images/jobone.png') }}" alt="" />
            
    
         
            <div class="p-5 flex flex-col  justify-between gap-y-4">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Backend Developer </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    NextGen Solutions
                </p>
                <div>
                    <span class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-4 py-2 rounded dark:bg-blue-900 dark:text-blue-300">Hybrid</span>
                    <span class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-4 py-2 rounded dark:bg-blue-900 dark:text-blue-300"> <i class="fa-solid fa-calendar"></i> 2024-05-14</span>
        
                </div> 
                 <div class=" mt-4">
                    
                    <span class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-4 py-2 rounded dark:bg-blue-900 dark:text-blue-300"> 1000$\month</span>
        
                </div>
                <div class=" my-5 flex justify-start  gap-y-3 flex-wrap">
        
                    @foreach ($subCategories as $item)
                    <span class="  bg-green-100 text-green-800 text-sm font-medium me-2 px-4 py-2 rounded dark:bg-green-900 dark:text-green-300">{{$item}}</span>
                        
                    @endforeach
                   
                </div>
        
            </div>
        </div>
    </section>
  <section 
    class=" mx-auto mt-5 w-3/5  lg:mt-20"
  >
  <div class="w-full md:w-96 md:max-w-full mx-auto">
    <div class="p-6  sm:rounded-md">
      <form
        method="POST"
        action="https://herotofu.com/start"
        enctype="multipart/form-data"
      >
        <label class="block mb-6">
          <span class="text-gray-700">Your name</span>
          <input
            required
            name="name"
            type="text"
            class="
              block
              w-full
              mt-1
              border-gray-300
              rounded-md
              shadow-sm
              focus:border-indigo-300
              focus:ring
              focus:ring-indigo-200
              focus:ring-opacity-50
            "
            placeholder="Joe Bloggs"
          />
        </label>
        <label class="block mb-6">
          <span class="text-gray-700">Email address</span>
          <input
            required
            name="email"
            type="email"
            class="
              block
              w-full
              mt-1
              border-gray-300
              rounded-md
              shadow-sm
              focus:border-indigo-300
              focus:ring
              focus:ring-indigo-200
              focus:ring-opacity-50
            "
            placeholder="joe.bloggs@example.com"
          />
        </label>
        <label class="block mb-6">
          <span class="text-gray-700">Years of experience</span>
          <select
            required
            name="experience"
            class="
              block
              w-full
              mt-1
              border-gray-300
              rounded-md
              shadow-sm
              focus:border-indigo-300
              focus:ring
              focus:ring-indigo-200
              focus:ring-opacity-50
            "
          >
            <option>Less than a year</option>
            <option>1 - 2 years</option>
            <option>2 - 4 years</option>
            <option>4 - 7 years</option>
            <option>7 - 10 years</option>
            <option>10+ years</option>
          </select>
        </label>
        <label class="block mb-6">
          <span class="text-gray-700">Tell us more about yourself</span>
          <textarea
            name="message"
            class="
              block
              w-full
              mt-1
              border-gray-300
              rounded-md
              shadow-sm
              focus:border-indigo-300
              focus:ring
              focus:ring-indigo-200
              focus:ring-opacity-50
            "
            rows="3"
            placeholder="What motivates you?"
          ></textarea>
        </label>
        <label class="block mb-6">
          <span class="text-gray-700">Your CV</span>
          <input
            required
            name="cv"
            type="file"
            class="
              block
              w-full
              mt-1
              focus:border-indigo-300
              focus:ring
              focus:ring-indigo-200
              focus:ring-opacity-50
            "
          />
        </label>
        <div class="mb-6">
          <div class="mt-2">
            <div>
              <label class="inline-flex items-center">
                <input
                  name="remote"
                  value="yes"
                  type="radio"
                  class="
                    text-indigo-600
                    border-gray-300
                    rounded-full
                    shadow-sm
                    focus:border-indigo-300
                    focus:ring
                    focus:ring-offset-0
                    focus:ring-indigo-200
                    focus:ring-opacity-50
                  "
                  checked
                />
                <span class="ml-2">You'd like to work remotely</span>
              </label>
            </div>
            <div>
              <label class="inline-flex items-center">
                <input
                  name="re"
                  value="no"
                  type="radio"
                  class="
                    text-indigo-600
                    border-gray-300
                    rounded-full
                    shadow-sm
                    focus:border-indigo-300
                    focus:ring
                    focus:ring-offset-0
                    focus:ring-indigo-200
                    focus:ring-opacity-50
                  "
                />
                <span class="ml-2">You'd prefer to work onsite</span>
              </label>
            </div>
          </div>
        </div>
        <div class="mb-6">
          <button
            type="submit"
            class="
              h-10
              px-5
              text-indigo-100
              bg-indigo-700
              rounded-lg
              transition-colors
              duration-150
              focus:shadow-outline
              hover:bg-indigo-800
            "
          >
            Apply
          </button>
        </div>
        <div>
          <div class="mt-2 text-gray-700 text-right text-xs">
            by
            <a href="https://herotofu.com" class="hover:underline" target="_blank"
              >HeroTofu</a
            >
          </div>
        </div>
      </form>
    </div>
  </div>
  

{{-- 
<form class=" mx-auto">
    <div class="relative z-0 w-full mb-5 group">
        <input type="password" name="repeat_password" id="floating_repeat_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
    </div>
    <div class="relative z-0 w-full mb-5 group">
        <input type="password" name="repeat_password" id="floating_repeat_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
    </div>
    <div class="relative z-0 w-full mb-5 group">
        <input type="password" name="repeat_password" id="floating_repeat_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="floating_repeat_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Confirm password</label>
    </div>
    <div class="grid md:grid-cols-2 md:gap-6">
      <div class="relative z-0 w-full mb-5 group">
          <input type="text" name="floating_first_name" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
          <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First name</label>
      </div>
      <div class="relative z-0 w-full mb-5 group">
          <input type="text" name="floating_last_name" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
          <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last name</label>
      </div>
    </div>
    <div class="grid md:grid-cols-2 md:gap-6">
      <div class="relative z-0 w-full mb-5 group">
        <input type="password" name="repeat_password" id="floating_repeat_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
          <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone</label>
      </div>
      <div class="relative z-0 w-full mb-5 group">
          <input type="text" name="floating_company" id="floating_company" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
          <label for="floating_company" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Former Work</label>
      </div>
    </div>
  <div 
    class=" flex md:justify-start sm:justify-center"
  >

    <button
    style="background-color: #1e429f"
    onmouseover="this.style.backgroundColor='#072675';" 
    onmouseout="this.style.backgroundColor='#1e429f';"
    type="submit" class="text-white   focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center "
        
    >Submit</button>
  </div>
  </form> --}}
  
  </section>
  </section
@endsection
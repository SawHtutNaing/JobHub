
@vite('resources/css/app.css')


{{-- old design  --}}

{{-- 
    <div class="max-w-sm  bg-white border   border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="rounded-t-lg h-52" src="{{ asset('storage/images/job'.$job->image) }}" alt="" />
        </a>

     
        <div class="p-5 h-card flex flex-col justify-between">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$job->name}} </h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                {{$job->companyName}}
            </p>
            <div>
                <div class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-4 py-2 rounded dark:bg-blue-900 dark:text-blue-300">{{$job->jobType}}</div>
                <br>
                <div class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-4 py-2 rounded dark:bg-blue-900 dark:text-blue-300"> <i class="fa-solid fa-calendar"></i> {{$job->date}}</div>
    
            </div> 
             <div class=" mt-4">
                
                <span class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-4 py-2 rounded dark:bg-blue-900 dark:text-blue-300"> {{$job->salary}}\month</span>
    
            </div>
            <div class=" my-5 flex justify-start  gap-y-3 flex-wrap">
    
                @foreach ($job->subCategories as $item)
                <span class="  bg-green-100 text-green-800 text-sm font-medium me-2 px-4 py-2 rounded dark:bg-green-900 dark:text-green-300">{{$item}}</span>
                    
                @endforeach
               
            </div>
            <div 
                class=" flex justify-center md:justify-start"
            >
                <a href="/job-apply" class="  inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white  bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">
                    Apply Now
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
    </div> --}}

    

    <div
    class="relative  flex w-full max-w-[26rem] flex-col rounded-xl bg-transparent bg-clip-border text-gray-700 shadow hover:shadow-2xl transition-all py-7">
    <div
      class="relative flex items-center gap-4 pt-0 pb-8 mx-0 mt-4 overflow-hidden text-gray-700 bg-transparent shadow-none rounded-xl bg-clip-border">
      <img
      {{-- src="{{ asset('storage/images/top-companies/meta.jpg') }}"
       --}}
       src={{asset('storage').'/'.$job->job_imagePath}}
     
        class="relative inline-block h-[58px] w-[58px] !rounded-full  object-cover object-center" />
      <div class="flex w-full flex-col gap-0.5">
        <div class="flex items-center justify-between">
          <h5
            class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
            {{$job->name}}
          </h5>
         
        </div>
        <p class="block font-sans text-base antialiased font-bold leading-relaxed text-blue-gray-900">
        by   {{$job->companyName}} in {{$job->category}}
        </p>
      </div>
    </div>
  
      <div class=" flex  ms-4">
        <div class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-4 py-2 rounded dark:bg-blue-900 dark:text-blue-300">{{$job->employmentType}}</div>
    
        <span class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-4 py-2 rounded dark:bg-blue-900 dark:text-blue-300"> {{$job->salary}}\month</span>
  
  
    </div> 
    {{-- <div class=" text-blue-800 text-sm font-medium me-2 px-4 py-2 rounded dark:bg-blue-900 dark:text-blue-300"> <i class="fa-solid fa-calendar"></i>   {{ getDayLeft($job->date)  }} Days left </div> --}}
  
   
   
  </div>  

@vite('resources/css/app.css')


    <div class="max-w-sm bg-white border  border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="rounded-t-lg" src="{{ asset('storage/images/jobone.png') }}" alt="" />
        </a>

     
        <div class="p-5 h-card flex flex-col justify-between">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$job->name}} </h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                {{$job->companyName}}
            </p>
            <div>
                <span class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-4 py-2 rounded dark:bg-blue-900 dark:text-blue-300">{{$job->jobType}}</span>
                <span class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-4 py-2 rounded dark:bg-blue-900 dark:text-blue-300"> <i class="fa-solid fa-calendar"></i> {{$job->date}}</span>
    
            </div>
            <div class=" my-5 flex justify-start  gap-y-3 flex-wrap">
    
                @foreach ($job->subCategories as $item)
                <span class="  bg-green-100 text-green-800 text-sm font-medium me-2 px-4 py-2 rounded dark:bg-green-900 dark:text-green-300">{{$item}}</span>
                    
                @endforeach
               
            </div>
            <div 
                class=" flex justify-center md:justify-start"
            >
                <a href="#" class="  inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white  bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">
                    Apply Now
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
    </div>


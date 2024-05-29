@extends('layouts.app')

@section('title', 'Home Page')
@section('content')
<section>

<div 
class= " grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-2 "
>
  <div class="col-span-1 text-center ">

    <h1 class=" text-4xl "> 
        EXPLORE COMPANIES
    </h1>
    <h4 class=" text-2xl ">
        Browse offices before you apply.
    </h4>
  </div>
 <div class=" ">

    We think company culture is pretty important. We show you inside offices before you apply to make sure you'll love working there.
 </div>

</div>

<div id="default-carousel" class="  mt-20  lg:h-screen  relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative   overflow-hidden rounded-lg  xs:h-56 lg:h-full">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
  
  
            
              <img src="{{asset('storage/images/company_images/humanone.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            
  
         
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{asset('storage/images/company_images/humantwo.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img  src="{{asset('storage/images/company_images/humanthree.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
       
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
     
      
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
  </div>
  
</section>

<section>

    <div 
        class=" mt-28 text-center text-3xl"
    >

    <h1>
        THE MUSE TEAM PICKS

    </h1>




    </div>

   
    <div class="mt-10 mx-auto w-5/6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3  gap-4">
        
        <div class="flip-card w-72   h-64">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                  <img src="{{asset('storage/images/companies_card/one.jpg')}}"  class="h-full w-full " alt="">
                </div>
                <div class="flip-card-back">
                   <h1>
                    Suntory Global Spirits
                   </h1>
                   <p>
                    Consumer Goods & Services , Food & Beverage
                   </p>
                </div>
            </div>
          </div>

          <div class="flip-card w-72   h-64">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                  <img src="{{asset('storage/images/companies_card/three.jpg')}}"  class="h-full w-full " alt="">
                </div>
                <div class="flip-card-back">
                   <h1>
                    SalesForce
                   </h1>
                   <p>
                 Technology / large size 
                   </p>
                </div>
            </div>
          </div>

          <div class="flip-card w-72   h-64">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                  <img src="{{asset('storage/images/companies_card/five.jpg')}}"  class="h-full w-full " alt="">
                </div>
                <div class="flip-card-back">
                   <h1>
                  DXL
                   </h1>
                   <p>
                    Reality Large Size / Cargon , MA
                   </p>
                </div>
            </div>
          </div>

          <div class="flip-card w-72   h-64">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                  <img src="{{asset('storage/images/companies_card/six.jpg')}}"  class="h-full w-full " alt="">
                </div>
                <div class="flip-card-back">
                   <h1>
                    Suntory Global Spirits
                   </h1>
                   <p>
                    Consumer Goods & Services , Food & Beverage
                   </p>
                </div>
            </div>
          </div>

          <div class="flip-card w-72   h-64">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                  <img src="{{asset('storage/images/companies_card/seven.jpg')}}"  class="h-full w-full " alt="">
                </div>
                <div class="flip-card-back">
                   <h1>
                    Geisinger
                   </h1>
                   <p>
                   Healthcare , large size
                   </p>
                </div>
            </div>
          </div>

          <div class="flip-card w-72   h-64">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                  <img src="{{asset('storage/images/companies_card/eight.jpg')}}"  class="h-full w-full " alt="">
                </div>
                <div class="flip-card-back">
                   <h1>
                    
                    Apple 
                   </h1>
                   <p>
                  Information Technology
                   </p>
                </div>
            </div>
          </div>
          
          <div class="flip-card w-72   h-64">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                  <img src="{{asset('storage/images/companies_card/nine.jpg')}}"  class="h-full w-full " alt="">
                </div>
                <div class="flip-card-back">
                   <h1>
                 Crown Cork 
                   </h1>
                   <p>
                    Manifacturing 
                   </p>
                </div>
            </div>
          </div>

          
    

  </div>
   

</section>
@endsection

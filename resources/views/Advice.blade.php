@extends('layouts.app')

@section('title', 'Home Page')
@section('content')

<!-- A simple testimonials page built with tailwind css utilities and heropatterns-->
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Contact Form Template</title>
  

</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<section
class="container mx-auto mt-14"
>
    <div
    class="  "
        >
    <h1
    class=" text-small text-indigo-700"
>
    Job Search 
</h1>
<h1
    class="  text-6xl mt-12"
>
    Finding A  Job 
</h1>
<p class=" mt-16">We know: Finding a new job isn’t easy. We’ve got you covered with everything you need to know about looking for jobs in your field and finding one that feels like a good fit for you and your career. Plus, don’t miss our helpful lists of companies that are hiring right now.</p>
    </div>
</section>
<section
    class="mx-auto mt-28 container"
>

    <h2 
        class=" text-3xl "
    >




        Featured Articles
    </h2>
    <div 
    class=" mt-10"

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
            <dt class="mb-2 text-3xl font-extrabold">IT</dt>
            
        </div>
        <div class="flex flex-col items-center hover:bg-indigo-800 justify-center text-white text-medium   bg-indigo-600 py-7 px-4 item">
            <dt class="mb-2 text-3xl font-extrabold"> Construction </dt>
            
        </div>
        <div class="flex flex-col items-center hover:bg-indigo-800 justify-center text-white text-medium   bg-indigo-600 py-7 px-4 item">
            <dt class="mb-2 text-3xl font-extrabold">Design</dt>
            
        </div>
        <div class="flex flex-col items-center hover:bg-indigo-800 justify-center text-white text-medium   bg-indigo-600 py-7 px-4 item">
            <dt class="mb-2 text-3xl font-extrabold">Human Resources</dt>
            
        </div>

        <div class="flex flex-col items-center hover:bg-indigo-800 justify-center text-white text-medium   bg-indigo-600 py-7 px-4 item">
            <dt class="mb-2 text-3xl font-extrabold">Marketing</dt>
            
        </div>
        
    </div>
</div>
 

        <div class="my_card mt-12 grid grid-cols-1 sm:grid-cols-1 w-full md:grid-cols-1 lg:grid-cols-3 gap-4">
       
    @for ($i = 0; $i < 10 ; $i++) 
        @include('components.AdviceCard')





@endfor


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
</section>
</html>


@endsection
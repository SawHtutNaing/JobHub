@extends('layouts.app')

@section('title', 'Home Page')


<?php 
$storageAppPath = dirname(__DIR__, 2) . '/app/public/images/top-companies';

// dd($storageAppPath);
$images =glob($storageAppPath . '/*.*');



?>
@section('content')




    <div class="divA flex justify-center mt-16 mx-auto ">
<div class="divB flex justify-between gap-6">
    
    @foreach ($images as $image) 
        
      <img src="{{ asset('storage/images/top-companies/'. basename($image)) }}" alt="">
    
    @endforeach
    
</div>

    </div>

<div class=" mt-10 p-4">
    <h1 
    class="  text-4xl h1 bold  text-center font-sans"
        >
        Welcome to Job Hub – Your Premier Job Finding Network


    </h1>
    <p class=" mt-5 text-center text-2xl font-serif  font-medium">
       " At Job Hub, we pride ourselves on being the most reliable and effective job-finding platform in the industry. Our network is trusted by the top 300 companies to source their talent, ensuring that we connect the best professionals with the most suitable job opportunities."
    </p>
</div>


<div class="mt-10 mx-auto w-5/6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3  gap-4">

    @for ($i = 0; $i < count($jobs); $i++) <div class=" mt-10 ">
        @include('components.JobCard',['job'=>$jobs[$i]])

</div>

@endfor
</div>
@endsection
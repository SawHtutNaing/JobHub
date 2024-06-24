@extends('layouts.app')

@section('title', 'Home Page')
@section('content')

<div
 class=" w-72 h-72 shadow"
 style="
display:flex;
align-items:flex-end;
 background-image:url('https://dmwnucuzzd3uc.cloudfront.net/image/o9SXyF4kPWv_4nhtaCnNLGYxBS3WTgb-rDVnUOjLjD4Gt-wSkJrrN8sn6KFkcQe6CAkNF4xfhQNjNKPmXS-5BRgD5md3qyYIoYCqMWcztzY=');
 background-size:100%; 
 background-repeat:no-repeat;
 "
>
  
<div class=" h-60 w-full mb-0  bg-white">
 <div class=" flex  justify-between">
  <div>
    <img
      style="
      margin-top:-1rem;
      width:4rem ;
      height:4rem;
      "
    src="https://dmwnucuzzd3uc.cloudfront.net/image/o9SXyF4kPWv_4nhtaCnNLNLW1kzQZys5O5E8iiBjrSnVHUVLHUvh9hdhI6apJRTZQX9iw4xpdas=" alt="">
  </div>
  <div class="me-3">
    <h1 class=" leading-[23px] w-[73px] text-center bg-gradient-to-r from-[#ddac11] to-[#eec34a] rounded-[2px] text-white text-[13px] mt-2">
      Premium
    </h1>
  </div>
 </div>
 <div class="mt-3 ms-3 ">
  <h1 class="underline text-[#462267]"">
    AIA myanmar 
  </h1>
  <p class="text-slate-500">
    <i class="fa-solid fa-file"></i>

    <span>

     Engergy / water
    </span>
  </p>
  <p class= "text-slate-500">
    <i class="fa-solid fa-briefcase"></i>
     <span>

      Engergy / water
     </span>
  </p>

 </div>

</div>
</div>

@endsection
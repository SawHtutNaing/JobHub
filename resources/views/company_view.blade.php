@extends('layouts.app')

@section('title', 'Home Page')
@section('content')
<section>
    <div class="mt-10 mx-auto w-5/6 grid lg:grid-cols-2 grid-cols-1    gap-y-14  gap-4">
    @foreach ($applyDetails as   $applyDetail)
    @include('JobApply/company_view_the_user' ,['applyDetail'=>$applyDetail])
        
    @endforeach
    </div>
</section>
@endsection
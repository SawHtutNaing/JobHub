@extends('layouts.app')
@section('title', 'Verification')

@section('content')

<div class="container mx-auto px-4">
    <div class="flex justify-center">
        <div class="w-full max-w-md">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="bg-gray-100 px-6 py-4 border-b">
                    {{ __('Verify Your Email Address') }}
                </div>

                <div class="p-6">
                    @if (session('status') == 'verification-link-sent')
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    <p>{{ __('Before proceeding, please check your email for a verification link.') }}</p>
                    <p>{{ __('If you did not receive the email') }},
                    <form class="inline" method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button type="submit" class="text-blue-500 hover:underline">{{ __('click here to request another') }}</button>.
                    </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

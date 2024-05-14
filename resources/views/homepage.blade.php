@extends('layouts.main')

@section('title', 'Strona Główna | Młode Małżeństwa')

@section('content')





<section class="flex flex-col-reverse justify-center w-full mt-8 md:flex-row">
    <div class="flex flex-col gap-8 p-8 md:mt-24 md:w-1/2">
        <h1 class="text-4xl font-extrabold text-balance">Stacjonarna szkoła dla młodych małżeństw w Krakowie</h1>
        <p class="text-balance">Tworzymy katechumenat dla małżeństw przygotowujący do sakramentalnego spotkania się z Jezusem Chrystusem we wspólnocie małżeńskiej.</p>
        <button class="bg-[#BC5A5A] w-fit text-center mx-auto px-14 py-4 rounded-full text-white shadow-xl">Zapisz się!</button>
    </div>
    <div class="flex items-center md:w-1/2 justify-normal">
        <img src="{{ asset('images/copule.png') }}" alt="Przytulająca się para" height="518" width="554">
    </div>
</section>


</div>

@endsection


{{-- @if (Route::has('login')) --}}
{{-- @if (false)
<div class="z-10 p-6 text-right sm:fixed sm:top-0 sm:right-0">
    @auth
    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Panel</a>
@else
<a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

@if (Route::has('register'))
<a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
@endif
@endauth --}}

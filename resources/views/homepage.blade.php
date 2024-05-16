@extends('layouts.main')

@section('title', 'Strona Główna | Młode Małżeństwa')

@section('content')





<section class="flex flex-col-reverse items-center justify-center w-full mt-8 md:items-start md:flex-row">
    <div class="flex flex-col gap-8 p-8 md:mt-24 md:w-1/2">
        <h1 class="text-4xl font-extrabold text-balance">Stacjonarna szkoła dla młodych małżeństw w Krakowie</h1>
        <p class="text-balance">Tworzymy katechumenat dla małżeństw przygotowujący do sakramentalnego spotkania się z Jezusem Chrystusem we wspólnocie małżeńskiej.</p>
        <a class="bg-[#BC5A5A] w-fit text-center mx-auto px-14 py-4 rounded-full text-white shadow-xl hover:opacity-90 transition-opacity duration-150" href="#apply">Zapisz się!</a>
    </div>
    <div class="flex items-center md:w-1/2 justify-normal">
        <img src="{{ asset('images/copule.png') }}" class="w-full max-w-xs sm:w-auto sm:h-auto sm:max-w-none" alt="Przytulająca się para" loading="lazy">
    </div>
</section>
<section class="flex flex-col justify-around w-full gap-8 mb-16 md:m-4 md:gap-0 md:flex-row">
    <div class="text-center">
        <h2 class="text-[#BC5A5A] text-4xl font-bold">2 lata</h2>
        <h3 class="text-[#363A45] text-2xl font-semibold mt-4">działalności</h3>
    </div>
    <div class="text-center">
        <h2 class="text-[#BC5A5A] text-4xl font-bold">50 godzin</h2>
        <h3 class="text-[#363A45] text-2xl font-semibold mt-4">zajęć w roku</h3>
    </div>
    <div class="text-center">
        <h2 class="text-[#BC5A5A] text-4xl font-bold">30</h2>
        <h3 class="text-[#363A45] text-2xl font-semibold mt-4">szkolonych małżeństw</h3>
    </div>
</section>
<section class="flex flex-col items-center justify-center w-full mt-16 md:items-start md:mt-36 md:flex-row">
    <div class="flex items-center md:w-1/2 justify-normal">
        <img src="{{ asset('images/thinking.png') }}" alt="Zastanawiająca się para" class="w-full max-w-xs sm:w-auto sm:h-auto sm:max-w-none" loading="lazy">
    </div>
    <div class="flex flex-col gap-8 p-8 md:mt-24 md:w-1/2">
        <h1 class="text-4xl font-extrabold text-balance">O Szkole Młodych Małżeństw</h1>
        <p class="text-balance">Tworzymy katechumenat dla małżeństw przygotowujący do sakramentalnego spotkania się z Jezusem Chrystusem we wspólnocie małżeńskiej. Tworzymy katechumenat dla małżeństw przygotowujący do sakramentalnego spotkania się z Jezusem Chrystusem we wspólnocie małżeńskiej.</p>
        <a href="{{ route('about') }}" class="bg-[#BC5A5A] w-fit text-center mx-auto px-14 py-4 rounded-full text-white shadow-xl hover:opacity-90 transition-opacity duration-150">Dowiedz się więcej</a>
    </div>
</section>
@include('partials.form')




@endsection

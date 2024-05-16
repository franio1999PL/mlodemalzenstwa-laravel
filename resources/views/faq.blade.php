@extends('layouts.main')

@section('title', 'FAQ | Młode Małżeństwa')

@section('content')
<section class="flex flex-col-reverse items-center justify-center w-full mt-8 md:items-start md:flex-row">
    <div class="flex flex-col gap-8 p-8 md:mt-24 md:w-1/2">
        <h1 class="pr-6 text-4xl font-extrabold text-center md:text-4xl md:text-left">Często zawane pytania na temat Szkoły Młodych Małżeństw</h1>
    </div>
    <div class="flex items-center md:w-1/2 justify-normal">
        <img src="{{ asset('images/thinking.png') }}" class="w-full max-w-xs sm:w-auto sm:h-auto sm:max-w-none" alt="Przytulająca się para" loading="lazy">
    </div>
</section>
<section class="flex flex-col gap-6 my-16">
    <div>
        <h2 class="pl-1 text-2xl font-extrabold">1. Czy szkoła jest odpłatna?</h2>
        <p class="text-[#363A45]">Uczestnicy płacą za wynajem sali, kawę, herbatę, ciastka (do tej pory było to 50 zł od pary za każde spotkanie). Trzeba także zapłacić za rekolekcje wyjazdowe, które kosztują według aktualnych stawek domu rekolekcyjnego.</p>
    </div>
    <div>
        <h2 class="pl-1 text-2xl font-extrabold">2. Gdzie są prowadzone zajęcia?</h2>
        <p class="text-[#363A45]">W tej chwili wynajmujemy salę konferencyjną w hotelu Domus Mater na ul. Saskiej 2C w Krakowie</p>
    </div>
    <div>
        <h2 class="pl-1 text-2xl font-extrabold">3. Ile lat musi mieć małżeństwo, aby się móc zapisać?</h2>
        <p class="text-[#363A45]">Szkoła jest dla młodych małżeństw. Są małżeństwa, które ją zaczynają tydzień po ślubie. Większość z dwu i trzy letnim stażem. Granica górna około 5 lat. Starsze na zasadzie wyjątku. </p>
    </div>
    <div>
        <h2 class="pl-1 text-2xl font-extrabold">4. Jak długo trwa szkoła?</h2>
        <p class="text-[#363A45]">Pary, które skończyły I klasę mogą zapisać się do kolejnej klasy. W tej chwili mamy już trzy klasy. Nie ma obowiązku zapisywać się do kolejnej klasy.</p>
    </div>
</section>

@include('partials.form')




@endsection

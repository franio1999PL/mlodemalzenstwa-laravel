@extends('layouts.main')

@section('title', 'O szkole | Młode Małżeństwa')

@section('content')
<section class="flex flex-col-reverse items-center justify-center w-full mt-8 md:items-start md:flex-row">
    <div class="flex flex-col gap-8 p-8 md:mt-24 md:w-1/2">
        <h1 class="pr-8 text-3xl font-extrabold text-center md:text-4xl md:text-left text-balance">O Szkole Młodych Małżeństw</h1>
        <p class="text-balance">Małżeństwa nie mają przygotowania do życia w stałym związku. To co jest im proponowane przed ślubem jest niewystarczające. Także nauczenie się życia sakramentem małżeństwa wymaga dłuższego okresu. Chcemy, aby małżeństwa nauczyły się rozmawiać ze sobą na ważne tematy, zdobyć podstawową wiedzę psychologiczną, moralną i teologiczną, aby móc rozwijać się w związku. Ostatecznie chodzi o wdrożenie w życie z Jezusem Chrystusem obecnym we więzi małżeńskiej na mocy sakramentu małżeństwa.</p>
    </div>
    <div class="flex items-center md:w-1/2 justify-normal">
        <img src="{{ asset('images/copule.png') }}" class="w-full max-w-xs sm:w-auto sm:h-auto sm:max-w-none" alt="Przytulająca się para" loading="lazy">
    </div>
</section>
<section>
    <div class="flex flex-col items-center justify-center">
        <h2 class="p-4 text-4xl font-extrabold">Obejrzyj film</h2>
        <iframe class="w-full max-w-7xl h-[320px] p-2 md:p-0 md:h-[640px] rounded-2xl" src="https://www.youtube.com/embed/7h4c2QmYXgI?si=rRBY89Ago42efDVf" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</section>
<section class="flex flex-col items-center justify-center mt-16 md:items-start">
    <h3 class="p-4 text-3xl font-extrabold md:pl-0">Jak wyglądają zajęcia?</h3>
    <p class="p-4 md:pl-0 text-balance">Małżonkowie przychodzą do szkoły raz w miesiącu, wieczorem. Zaczynamy o 18.30 i kończymy o 20.30. Przez cały rok szkolny przerabiamy różne tematy związane z życiem małżeńskim. Spotkanie składa się z wykładu kapłana i małżonków, po którym jest czas na dialog między małżonkami albo spotkanie w grupach czy dyskusję, zależnie od tematu. Raz w roku wyjeżdżamy na rekolekcje weekendowe.</p>
    <p class="p-4 md:pl-0 text-balance">Małżeństwa przerobią najważniejsze tematy związane z życiem małżeńskim: komunikację, seksualność, życie religijne, finanse, wychowanie dzieci, konflikty, kryzysy…Przekazujemy wiedzę o małżeństwie z każdej dziedziny: psychologii, teologii, moralności, pedagogiki, seksuologii. Starsze małżeństwa mówią młodszym o swoim doświadczeniu życia, problemach jakie przeżywali i jak je rozwiązywali.</p>
</section>
<section class="flex flex-col gap-8 my-16">
    <h2 class="p-4 pl-0 mb-16 text-3xl font-extrabold text-center">O organizatorach</h2>
    <div class="flex flex-col items-center justify-center md:items-start md:flex-row">
        <img src="{{ asset('images/ksawery-knotz.png') }}" alt="Ksawery Knotz" class="w-full max-w-[356px] my-8 md:my-0" loading="lazy">
        <div class="flex flex-col justify-start px-8">
            <h3 class="text-2xl font-extrabold">Ksawery Knotz</h3>
            <p class="py-6 text-[#363A45]">Tworzymy katechumenat dla małżeństw przygotowujący do sakramentalnego spotkania się z Jezusem Chrystusem we wspólnocie małżeńskiej. Tworzymy katechumenat dla małżeństw przygotowujący do sakramentalnego spotkania się z Jezusem Chrystusem we wspólnocie małżeńskiej. Tworzymy katechumenat dla małżeństw przygotowujący do sakramentalnego spotkania się z Jezusem Chrystusem we wspólnocie małżeńskiej. Tworzymy katechumenat dla małżeństw przygotowujący do sakramentalnego spotkania się z Jezusem Chrystusem we wspólnocie małżeńskiej.</p>
        </div>
    </div>
    <div class="flex flex-col items-center justify-center md:items-start md:flex-row">
        <img src="{{ asset('images/magda-i-maciej-poprawa.png') }}" alt="Magda i Maciej Poprawa" class="w-full max-w-[356px] my-8 md:my-0" loading="lazy">
        <div class="flex flex-col justify-start px-8">
            <h3 class="text-2xl font-extrabold">Magda i Maciej Poprawa</h3>
            <p class="py-6 text-[#363A45]">Małżeństwo z 20-letnim stażem. Rodzice trójki nastolatków. Od wielu lat współpracują z o. Ksawerym prowadząc z nim rekolekcje. Od 2 lat współtworzą Szkołę dla Młodych Małżeństw.
                Prywatnie często chodzą do kina, wykańczają powoli dom pod Krakowem, zajmują się dwoma psami i kotem. I choć się bardzo od siebie różnią, uczą się bycia razem każdego dnia. Małżeństwo jest ich pasją również zawodowo.
                Magda jest psychoterapeutą i seksuologiem. Prowadzi terapie indywidualne i par/małżeństw. Szczególnym obszarem jej zainteresowania są zaburzenia na tle religijnym objawiające się zwłaszcza w obszarze seksualnym.
                Maciej obecnie studiuje psychologię. To prawdziwa złota rączka. Potrafi wszystko naprawić i załatwić wiele spraw.
                Oboje prowadzą warsztaty dla par/małżeństw.</p>
        </div>
    </div>
</section>
@include('partials.form')
@endsection

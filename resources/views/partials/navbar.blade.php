<div class="sticky top-0 z-10 w-full bg-[#FEF4EA] shadow-md" x-data="{ open: false }">
    <header class="flex-col items-center justify-center w-full mx-auto md:flex-row md:justify-between md:flex max-w-7xl">
        <div class="flex items-center justify-center gap-6 p-4 md:justify-normal">
            <a href="{{ route('homepage') }}" class="flex items-center gap-2">
                <div class="text-white bg-[#bc5a5a] w-12 h-12 flex justify-center italic font-bold items-center text-center text-3xl rounded-full selection:bg-none hover:cursor-pointer">m</div>
                <div class="flex flex-col text-xl font-bold">
                    <span>Młode</span>
                    <span>Małżestwa</span>
                </div>
        </div>
        </a>
        <button class="absolute z-10 md:hidden top-8 right-4" @click="open = !open">
            <x-radix-hamburger-menu class="w-6 h-6 text-red-600" x-show="!open" />
            <x-css-close class="w-6 h-6 text-red-600" x-show="open" />
        </button>
        <nav x-bind:class="! open ? 'hidden md:block' : 'md:block'">
            <ul class="flex flex-col items-center justify-center gap-6 p-4 text-lg md:flex-row items font-semithin">
                <li>
                    <a href="{{ route('about') }}" class="hover:cursor-pointer hover:underline">O szkole</a>
                </li>
                <li><a href="{{ route('faq') }}" class="hover:cursor-pointer hover:underline">FAQ</a></li>
                <a class="px-6 py-4 border-black rounded-full border-[1px] hover:cursor-pointer hover:bg-[#BC5A5A] hover:border-black/50 hover:text-white transition-colors duration-150" href="#apply">Zapisz się</a>
            </ul>
        </nav>
    </header>
</div>

<div class="sticky top-0 w-full bg-[#FEF4EA] shadow-md" x-data="{ open: false }">
    <header class="flex-col items-center justify-center w-full mx-auto md:flex-row md:justify-between md:flex max-w-7xl">
        <div class="flex items-center justify-center gap-6 p-4 md:justify-normal">
            <div class="text-white bg-[#bc5a5a] w-12 h-12 flex justify-center italic font-bold items-center text-center text-3xl rounded-full selection:bg-none hover:cursor-pointer">m</div>
            <div class="flex flex-col text-xl font-bold">
                <span>Młode</span>
                <span>Małżestwa</span>
            </div>
        </div>
        <button class="absolute z-10 md:hidden top-8 right-4" @click="open = !open">
            <x-radix-hamburger-menu class="w-6 h-6 text-red-600" x-show="!open" />
            <x-css-close class="w-6 h-6 text-red-600" x-show="open" />
        </button>
        <nav x-bind:class="! open ? 'hidden' : 'md:hidden'">
            <ul class="flex flex-col items-center justify-center gap-6 p-4 text-lg items font-semithin">
                <li class="hover:cursor-pointer">O szkole</li>
                <li class="hover:cursor-pointer">FAQ</li>
                <li class="px-6 py-4 border-black rounded-full border-[1px] hover:cursor-pointer hover:bg-[#BC5A5A] hover:border-black/50 hover:text-white transition-colors duration-150">Zapisz się</li>
            </ul>
        </nav>
        <nav class="hidden md:block">
            <ul class="flex items-center justify-center gap-4 p-4 text-lg items font-semithin">
                <li class="hover:cursor-pointer">O szkole</li>
                <li class="hover:cursor-pointer">FAQ</li>
                <li>
                    <a href="#apply" class="px-6 py-4 border-black rounded-full border-[1px] hover:cursor-pointer hover:bg-[#BC5A5A] hover:border-black/50 hover:text-white transition-colors duration-150">
                        Zapisz się
                    </a>
                </li>
            </ul>
        </nav>
    </header>
</div>

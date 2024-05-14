<footer class="flex flex-col-reverse justify-center w-full mx-auto mt-12 md:mt-24 md:justify-between md:flex-row max-w-7xl">
    <div class="flex flex-col gap-4">
        <div class="flex items-center justify-center gap-6 p-4 md:justify-normal">
            <div class="text-white bg-[#bc5a5a] w-12 h-12 flex justify-center italic font-bold items-center text-center text-3xl rounded-full selection:bg-none hover:cursor-pointer">m</div>
            <div class="flex flex-col text-xl font-bold">
                <span>Młode</span>
                <span>Małżestwa</span>
            </div>
        </div>
        <div class="flex flex-col items-center md:items-start">
            <p class="text-lg hover:underline">Kontakt: <a href="mailto:apostolstwo@szansaspotkania.pl">apostolstwo@szansaspotkania.pl</a></p>
            <p class="text-lg">Copyright © <span>{{ date("Y") }}</span> młodemałżeństwa.pl</p>
        </div>
        <div class="flex justify-center gap-4 md:justify-start">
            <span class="bg-[#FE6A6A] h-12 w-12 rounded-full block"></span>
            <span class="bg-[#FE6A6A] h-12 w-12 rounded-full block"></span>
            <span class="bg-[#FE6A6A] h-12 w-12 rounded-full block"></span>
        </div>
    </div>
    <div class="flex flex-col justify-center w-full gap-8 p-4 md:gap-0 md:w-1/3 md:justify-between md:flex-row">
        <div class="flex flex-col items-center gap-4 md:justify-start">
            <h3 class="text-2xl font-bold">Menu</h3>
            <ul class="flex flex-col gap-2">
                <li>
                    <a class="hover:underline" href="#">Kontakt</a>
                </li>
                <li>
                    <a class="hover:underline" href="#">FAQ</a>
                </li>
                <li>
                    <a class="hover:underline" href="#">O szkole</a>
                </li>
            </ul>
        </div>
        <div class="flex flex-col items-center gap-4 md:justify-start">
            <h3 class="text-2xl font-bold">Warto zobaczyć</h3>
            <ul class="flex flex-col gap-2">
                <li>
                    <a class="hover:underline" href="https://szansaspotkania.pl/" target="_blank" rel="noopener noreferrer">SzansaSpotkania</a>
                </li>
                <li>
                    <a class="hover:underline" href="https://komuniamalzenstw.pl/" target="_blank" rel="noopener noreferrer">KomuniaMalzenstw</a>
                </li>
                <li>
                    <a class="hover:underline" href="https://porozmawiajmykochanie.pl/" target="_blank" rel="noopener noreferrer">PorozmawiajmyKochanie</a>
                </li>
            </ul>
            <a class="px-6 py-4 border-black rounded-full border-[1px] hover:cursor-pointer hover:bg-[#BC5A5A] hover:border-black/50 hover:text-white transition-colors duration-150" href="https://szansaspotkania.pl/wesprzyj/" target="_blank" rel="noopener noreferrer">Wesprzyj nas</a>
        </div>
    </div>
</footer>
</div>

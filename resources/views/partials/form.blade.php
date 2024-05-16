<section id="apply">
    <form class="bg-[#BC5A5A] p-4 rounded-2xl md:rounded-[4rem] w-full" method="POST" action="{{ route('application') }}">
        @csrf
        <h3 class="text-4xl font-bold text-center text-white">Zapisy do Szkoły</h3>
        <div class="w-full px-4 py-8 md:p-16 md:py-16 md:px-16">
            <div class="flex flex-col justify-between gap-4 md:flex-row">
                <div class="w-full mb-4 md:w-1/3">
                    <label for="wife_name" class="block font-semibold text-white">Imię małżonki</label>
                    <input type="text" name="wife_name" id="wife_name" placeholder="np. Katarzyna" required class="w-full p-2 bg-[#c27070] placeholder:text-white placeholder:opacity-70 border-none focus:outline-none focus:ring-[#FEF4EA]/50 focus:ring-2 focus:border-transparent text-white px-2 py-4 rounded-full pl-4">
                </div>
                <div class="w-full mb-4 md:w-1/3">
                    <label for="husband_name" class="block font-semibold text-white">Imię małżonka</label>
                    <input type="text" name="husband_name" id="husband_name" placeholder="np. Jan" required class="w-full p-2 bg-[#c27070] placeholder:text-white placeholder:opacity-70 border-none focus:outline-none focus:ring-[#FEF4EA]/50 focus:ring-2 focus:border-transparent text-white px-2 py-4 rounded-full pl-4">
                </div>
                <div class="w-full mb-4 md:w-1/3">
                    <label for="age" class="block font-semibold text-white">Wiek Małżeństwa</label>
                    <div class="relative w-full">
                        <input type="number" name="age" id="age" placeholder="np. 3 lata" max="80" required class="w-full p-2 bg-[#c27070] placeholder:text-white placeholder:opacity-70 border-none focus:outline-none focus:ring-[#FEF4EA]/50 focus:ring-2 focus:border-transparent text-white px-2 py-4 rounded-full pl-4 custom-number-input">
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-4 md:flex-row md:justify-between">
                <div class="w-full mb-4 md:w-1/2">
                    <label for="surname" class="block font-semibold text-white">Nazwisko</label>
                    <input type="text" name="surname" id="surname" placeholder="np. Nowak" required class="w-full p-2 bg-[#c27070] placeholder:text-white placeholder:opacity-70 border-none focus:outline-none focus:ring-[#FEF4EA]/50 focus:ring-2 focus:border-transparent text-white px-2 py-4 rounded-full pl-4">
                </div>
                <div class="w-full mb-4 md:w-1/2">
                    <label for="city" class="block font-semibold text-white">Miasto</label>
                    <input type="text" name="city" id="city" placeholder="np. Kraków" required class="w-full p-2 bg-[#c27070] placeholder:text-white placeholder:opacity-70 border-none focus:outline-none focus:ring-[#FEF4EA]/50 focus:ring-2 focus:border-transparent text-white px-2 py-4 rounded-full pl-4">
                </div>
            </div>
            <div class="mb-4">
                <label for="email" class="block font-semibold text-white">Adres e-mail</label>
                <input type="email" name="email" id="email" placeholder="np. jan.kowalski@example.com" required class="w-full p-2 bg-[#c27070] placeholder:text-white placeholder:opacity-70 border-none focus:outline-none focus:ring-[#FEF4EA]/50 focus:ring-2 focus:border-transparent text-white px-2 py-4 rounded-full pl-4">
            </div>
            <div class="md:mb-4">
                <label for="message" class="block font-semibold text-white">Wiadomość</label>
                <textarea name="message" id="message" placeholder="Treść wiadomości..." required class="w-full p-2 bg-[#c27070] placeholder:text-white placeholder:opacity-70 border-none focus:outline-none focus:ring-[#FEF4EA]/50 focus:ring-2 focus:border-transparent text-white rounded-3xl pl-4 resize-none h-40 overflow-y-hidden"></textarea>
            </div>

        </div>
        <div class="flex items-center justify-center md:justify-end">
           {!! NoCaptcha::renderJs() !!}
           {!! NoCaptcha::display() !!}
        </div>
        <div class="flex p-4">
            <button type="submit" class="w-2/4 px-4 py-4 mx-auto text-xl font-semibold text-center text-black transition-opacity duration-150 bg-white rounded-full hover:opacity-80">Wyślij</button>
        </div>

    </form>
</section>

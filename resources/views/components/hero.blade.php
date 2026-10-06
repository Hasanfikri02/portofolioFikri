<section id="home" class="relative flex min-h-screen flex-col overflow-hidden bg-black font-sans text-white">

    {{-- 1. Gradient Bulatan Putih Tipis (Pojok Kiri Atas) --}}
    <div class="white-spot-top-left z-0"></div>

    {{-- 2. Gradient Bulatan Putih Tipis (Pojok Kanan Bawah) --}}
    <div class="white-spot-bottom-right z-0"></div>

    {{-- 3. Grid Pattern Layer (Hanya Terlihat di Spot Gradient) --}}
    <div class="bg-grid-pattern mask-corner-spots absolute inset-0 z-0 pointer-events-none opacity-80"></div>

    {{-- Main Hero Content --}}
    <div class="relative z-10 mx-auto grid w-full max-w-7xl flex-1 items-center gap-12 px-6 pb-0 pt-32 lg:grid-cols-2 lg:px-8 lg:pt-20">

        {{-- Left: Hero Text --}}
        <div class="relative z-10 flex flex-col items-start">

            {{-- Greeting Label --}}
            <div class="reveal relative mb-8 inline-flex items-center justify-center border-2 border-white px-7 py-3" style="transition-delay: 100ms;">

                {{-- Corner Accent 1: Top-Left --}}
                <span class="absolute -left-2.5 -top-2.5 h-4 w-7 bg-accent"></span>

                {{-- Corner Accent 2: Top-Right --}}
                <span class="absolute -right-2.5 -top-2.5 h-4 w-7 bg-accent"></span>

                {{-- Corner Accent 3: Bottom-Left --}}
                <span class="absolute -bottom-2.5 -left-2.5 h-4 w-7 bg-accent"></span>

                {{-- Corner Accent 4: Bottom-Right --}}
                <span class="absolute -bottom-2.5 -right-2.5 h-4 w-7 bg-accent"></span>

                {{-- Text Content --}}
                <span class="relative z-10 text-base font-semibold tracking-wider text-white sm:text-lg">
                    Hello There
                </span>

            </div>

            {{-- Main Heading --}}
            <h1 class="reveal max-w-2xl text-4xl font-bold leading-[1.1] tracking-tight sm:text-5xl md:text-6xl lg:text-7xl" style="transition-delay: 200ms;">
                I’m Muhammad
                <span class="mt-1 block">Hasan Fikri</span>
            </h1>

            {{-- Description --}}
            <p class="reveal mt-6 max-w-lg text-base leading-relaxed text-white/80 sm:text-lg" style="transition-delay: 300ms;">
                I build web application and explore technology through development, application design, and creative work
            </p>

            {{-- Action Buttons --}}
            <div class="reveal mt-8 flex flex-wrap items-center gap-4" style="transition-delay: 400ms;">

                <a href="#projects"
                    class="group inline-flex items-center gap-3 rounded-full bg-white px-8 py-3.5 text-base font-bold text-black transition-all duration-300 hover:bg-accent sm:text-lg">
                    View Projects
                    <i class="fa-solid fa-arrow-right text-lg transition-transform duration-300 group-hover:translate-x-1"></i>
                </a>

                <a href="#contact"
                    class="inline-flex items-center justify-center rounded-full border-2 border-white px-8 py-3.5 text-base font-bold text-white transition-all duration-300 hover:border-accent hover:bg-accent hover:text-black sm:min-w-44 sm:text-lg">
                    Contact Me
                </a>

            </div>

        </div>

        {{-- Right: Hero Visual --}}
        <div class="relative flex min-h-80 items-center justify-center lg:min-h-125 lg:justify-end">

            {{-- Main Hero Image --}}
            <img src="{{ asset('hero/Hero1.png') }}" alt="Hero visual" 
                class="reveal h-auto w-full max-w-125 object-contain" 
                style="transition-delay: 200ms;"
                fetchpriority="high">

            {{-- Portfolio Label Image (Gambar 2) --}}
            <img src="{{ asset('hero/Hero2.png') }}" alt="Portfolio"
                class="reveal absolute right-0 top-0 w-28 object-contain sm:w-36 lg:right-2 lg:top-2"
                style="transition-delay: 400ms;">

            {{-- Creative Developer Label Image (Gambar 3) --}}
            <img src="{{ asset('hero/Hero3.png') }}" alt="Creative Developer"
                class="reveal absolute bottom-2 left-0 w-32 object-contain sm:w-40 lg:bottom-4 lg:left-[-5%]"
                style="transition-delay: 500ms;">

        </div>

    </div>

    {{-- Bottom Category Bar (Infinite Running Marquee) --}}
    <div class="reveal relative z-10 w-full overflow-hidden bg-accent py-4 text-black" style="transition-delay: 600ms;">

        <div class="animate-marquee flex items-center whitespace-nowrap">

            {{-- Set 1 (Item Utama) --}}
            <div class="flex items-center gap-8 px-4 sm:gap-12 lg:gap-16">
                <div class="flex items-center gap-3 text-lg font-bold sm:text-xl lg:text-2xl">
                    <img src="{{ asset('hero/icon-bottom.png') }}" alt="icon"
                        class="h-5 w-auto object-contain sm:h-6 lg:h-7">
                    <span>Website</span>
                </div>

                <div class="flex items-center gap-3 text-lg font-bold sm:text-xl lg:text-2xl">
                    <img src="{{ asset('hero/icon-bottom.png') }}" alt="icon"
                        class="h-5 w-auto object-contain sm:h-6 lg:h-7">
                    <span>Mobile App</span>
                </div>

                <div class="flex items-center gap-3 text-lg font-bold sm:text-xl lg:text-2xl">
                    <img src="{{ asset('hero/icon-bottom.png') }}" alt="icon"
                        class="h-5 w-auto object-contain sm:h-6 lg:h-7">
                    <span>UI/UX Design</span>
                </div>

                <div class="flex items-center gap-3 text-lg font-bold sm:text-xl lg:text-2xl">
                    <img src="{{ asset('hero/icon-bottom.png') }}" alt="icon"
                        class="h-5 w-auto object-contain sm:h-6 lg:h-7">
                    <span>Design Creative</span>
                </div>
            </div>

            {{-- Set 2 (Duplikasi untuk Seamless Infinite Loop) --}}
            <div class="flex items-center gap-8 px-4 sm:gap-12 lg:gap-16">
                <div class="flex items-center gap-3 text-lg font-bold sm:text-xl lg:text-2xl">
                    <img src="{{ asset('hero/icon-bottom.png') }}" alt="icon"
                        class="h-5 w-auto object-contain sm:h-6 lg:h-7">
                    <span>Website</span>
                </div>

                <div class="flex items-center gap-3 text-lg font-bold sm:text-xl lg:text-2xl">
                    <img src="{{ asset('hero/icon-bottom.png') }}" alt="icon"
                        class="h-5 w-auto object-contain sm:h-6 lg:h-7">
                    <span>Mobile App</span>
                </div>

                <div class="flex items-center gap-3 text-lg font-bold sm:text-xl lg:text-2xl">
                    <img src="{{ asset('hero/icon-bottom.png') }}" alt="icon"
                        class="h-5 w-auto object-contain sm:h-6 lg:h-7">
                    <span>UI/UX Design</span>
                </div>

                <div class="flex items-center gap-3 text-lg font-bold sm:text-xl lg:text-2xl">
                    <img src="{{ asset('hero/icon-bottom.png') }}" alt="icon"
                        class="h-5 w-auto object-contain sm:h-6 lg:h-7">
                    <span>Design Creative</span>
                </div>
            </div>

        </div>

    </div>

</section>
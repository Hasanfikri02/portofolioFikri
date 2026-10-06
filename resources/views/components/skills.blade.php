<section id="skills" class="relative isolate overflow-hidden bg-background px-6 py-24 font-sans text-white lg:px-8">

    {{-- 1. Gradient Bulatan Putih Tipis (Pojok Kiri Atas) --}}
    <div class="white-spot-top-left z-0"></div>

    {{-- 2. Gradient Bulatan Putih Tipis (Pojok Kanan Bawah) --}}
    <div class="white-spot-bottom-right z-0"></div>

    {{-- 3. Grid Pattern Layer (Hanya Terlihat di Spot Gradient) --}}
    <div class="bg-grid-pattern mask-corner-spots pointer-events-none absolute inset-0 z-0 opacity-80"></div>

    <div class="relative z-10 mx-auto max-w-7xl">

        {{-- Section Header --}}
        <div class="reveal max-w-2xl" style="transition-delay: 100ms;">
            <p class="mb-4 text-sm font-semibold uppercase tracking-[0.2em] text-accent">
                Skills & Tools
            </p>

            <h2 class="text-4xl font-bold leading-tight tracking-tight text-white sm:text-5xl">
                Technologies I use to build things.
            </h2>

            <p class="mt-5 text-lg leading-8 text-white/80">
                A collection of technologies and tools I have used throughout my projects and learning journey.
            </p>
        </div>

        {{-- Technology Grid (White Card Style) --}}
        <div class="mt-14 grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-4">

            {{-- PHP --}}
            <div style="transition-delay: 150ms;"
                class="reveal group relative flex aspect-square flex-col items-center justify-center rounded-2xl border-2 border-[#777BB4]/30 bg-white p-6 shadow-md transition-all duration-300 hover:-translate-y-1 hover:border-[#777BB4] hover:shadow-[0_0_25px_rgba(119,123,180,0.5)]">
                <i class="fa-brands fa-php text-5xl text-[#777BB4] transition duration-300 group-hover:scale-110"></i>
                <span class="mt-4 text-sm font-bold tracking-wider text-slate-800">PHP</span>
            </div>

            {{-- Laravel --}}
            <div style="transition-delay: 200ms;"
                class="reveal group relative flex aspect-square flex-col items-center justify-center rounded-2xl border-2 border-[#FF2D20]/30 bg-white p-6 shadow-md transition-all duration-300 hover:-translate-y-1 hover:border-[#FF2D20] hover:shadow-[0_0_25px_rgba(255,45,32,0.5)]">
                <i
                    class="fa-brands fa-laravel text-5xl text-[#FF2D20] transition duration-300 group-hover:scale-110"></i>
                <span class="mt-4 text-sm font-bold tracking-wider text-slate-800">Laravel</span>
            </div>

            {{-- JavaScript --}}
            <div style="transition-delay: 250ms;"
                class="reveal group relative flex aspect-square flex-col items-center justify-center rounded-2xl border-2 border-[#F7DF1E]/50 bg-white p-6 shadow-md transition-all duration-300 hover:-translate-y-1 hover:border-[#F7DF1E] hover:shadow-[0_0_25px_rgba(247,223,30,0.5)]">
                <i class="fa-brands fa-js text-5xl text-[#E5C100] transition duration-300 group-hover:scale-110"></i>
                <span class="mt-4 text-sm font-bold tracking-wider text-slate-800">JavaScript</span>
            </div>

            {{-- Python --}}
            <div style="transition-delay: 300ms;"
                class="reveal group relative flex aspect-square flex-col items-center justify-center rounded-2xl border-2 border-[#3776AB]/30 bg-white p-6 shadow-md transition-all duration-300 hover:-translate-y-1 hover:border-[#3776AB] hover:shadow-[0_0_25px_rgba(55,118,171,0.5)]">
                <i
                    class="fa-brands fa-python text-5xl text-[#3776AB] transition duration-300 group-hover:scale-110"></i>
                <span class="mt-4 text-sm font-bold tracking-wider text-slate-800">Python</span>
            </div>

            {{-- Dart / Flutter --}}
            <div style="transition-delay: 350ms;"
                class="reveal group relative flex aspect-square flex-col items-center justify-center rounded-2xl border-2 border-[#01B5F6]/30 bg-white p-6 shadow-md transition-all duration-300 hover:-translate-y-1 hover:border-[#01B5F6] hover:shadow-[0_0_25px_rgba(1,181,246,0.5)]">
                <i
                    class="fa-brands fa-flutter text-5xl text-[#01B5F6] transition duration-300 group-hover:scale-110"></i>
                <span class="mt-4 text-sm font-bold tracking-wider text-slate-800">Dart</span>
            </div>

            {{-- HTML --}}
            <div style="transition-delay: 400ms;"
                class="reveal group relative flex aspect-square flex-col items-center justify-center rounded-2xl border-2 border-[#E34F26]/30 bg-white p-6 shadow-md transition-all duration-300 hover:-translate-y-1 hover:border-[#E34F26] hover:shadow-[0_0_25px_rgba(227,79,38,0.5)]">
                <i class="fa-brands fa-html5 text-5xl text-[#E34F26] transition duration-300 group-hover:scale-110"></i>
                <span class="mt-4 text-sm font-bold tracking-wider text-slate-800">HTML</span>
            </div>

            {{-- CSS --}}
            <div style="transition-delay: 450ms;"
                class="reveal group relative flex aspect-square flex-col items-center justify-center rounded-2xl border-2 border-[#1572B6]/30 bg-white p-6 shadow-md transition-all duration-300 hover:-translate-y-1 hover:border-[#1572B6] hover:shadow-[0_0_25px_rgba(21,114,182,0.5)]">
                <i
                    class="fa-brands fa-css3-alt text-5xl text-[#1572B6] transition duration-300 group-hover:scale-110"></i>
                <span class="mt-4 text-sm font-bold tracking-wider text-slate-800">CSS</span>
            </div>

            {{-- MySQL --}}
            <div style="transition-delay: 500ms;"
                class="reveal group relative flex aspect-square flex-col items-center justify-center rounded-2xl border-2 border-[#00758F]/30 bg-white p-6 shadow-md transition-all duration-300 hover:-translate-y-1 hover:border-[#00758F] hover:shadow-[0_0_25px_rgba(0,117,143,0.5)]">
                <i
                    class="fa-solid fa-database text-5xl text-[#00758F] transition duration-300 group-hover:scale-110"></i>
                <span class="mt-4 text-sm font-bold tracking-wider text-slate-800">MySQL</span>
            </div>

        </div>

        {{-- Tools Section (RGB Neon Badges) --}}
        <div class="mt-16">
            <p class="reveal mb-5 text-sm font-semibold uppercase tracking-[0.2em] text-accent" style="transition-delay: 550ms;">
                Tools & Environment
            </p>

            <div class="flex flex-wrap gap-3">
                {{-- Git --}}
                <span style="transition-delay: 600ms;"
                    class="reveal group inline-flex items-center gap-2 rounded-xl border border-[#F05032]/30 bg-white px-5 py-2.5 text-sm font-semibold text-slate-800 shadow-sm backdrop-blur-md transition-all duration-300 hover:border-[#F05032] hover:bg-[#F05032] hover:text-white hover:shadow-[0_0_15px_rgba(240,80,50,0.4)]">
                    <i
                        class="fa-brands fa-git-alt text-[#F05032] transition-colors duration-300 group-hover:text-white"></i>
                    Git
                </span>

                {{-- GitHub --}}
                <span style="transition-delay: 650ms;"
                    class="reveal group inline-flex items-center gap-2 rounded-xl border border-slate-200 bg-white px-5 py-2.5 text-sm font-semibold text-slate-800 shadow-sm backdrop-blur-md transition-all duration-300 hover:border-slate-900 hover:bg-slate-900 hover:text-white hover:shadow-[0_0_15px_rgba(15,23,42,0.4)]">
                    <i
                        class="fa-brands fa-github text-slate-900 transition-colors duration-300 group-hover:text-white"></i>
                    GitHub
                </span>

                {{-- VS Code --}}
                <span style="transition-delay: 700ms;"
                    class="reveal group inline-flex items-center gap-2 rounded-xl border border-[#007ACC]/30 bg-white px-5 py-2.5 text-sm font-semibold text-slate-800 shadow-sm backdrop-blur-md transition-all duration-300 hover:border-[#007ACC] hover:bg-[#007ACC] hover:text-white hover:shadow-[0_0_15px_rgba(0,122,204,0.4)]">
                    <i
                        class="fa-solid fa-code text-[#007ACC] transition-colors duration-300 group-hover:text-white"></i>
                    VS Code
                </span>

                {{-- Figma --}}
                <span style="transition-delay: 750ms;"
                    class="reveal group inline-flex items-center gap-2 rounded-xl border border-[#F24E1E]/30 bg-white px-5 py-2.5 text-sm font-semibold text-slate-800 shadow-sm backdrop-blur-md transition-all duration-300 hover:border-[#F24E1E] hover:bg-[#F24E1E] hover:text-white hover:shadow-[0_0_15px_rgba(242,78,30,0.4)]">
                    <i
                        class="fa-brands fa-figma text-[#F24E1E] transition-colors duration-300 group-hover:text-white"></i>
                    Figma
                </span>

                {{-- Canva --}}
                <span style="transition-delay: 800ms;"
                    class="reveal group inline-flex items-center gap-2 rounded-xl border border-[#00C4CC]/30 bg-white px-5 py-2.5 text-sm font-semibold text-slate-800 shadow-sm backdrop-blur-md transition-all duration-300 hover:border-[#00C4CC] hover:bg-[#00C4CC] hover:text-white hover:shadow-[0_0_15px_rgba(0,196,204,0.4)]">
                    <i
                        class="fa-solid fa-palette text-[#00C4CC] transition-colors duration-300 group-hover:text-white"></i>
                    Canva
                </span>

                {{-- Unity --}}
                <span style="transition-delay: 850ms;"
                    class="reveal group inline-flex items-center gap-2 rounded-xl border border-slate-300 bg-white px-5 py-2.5 text-sm font-semibold text-slate-800 shadow-sm backdrop-blur-md transition-all duration-300 hover:border-slate-900 hover:bg-slate-900 hover:text-white hover:shadow-[0_0_15px_rgba(15,23,42,0.4)]">
                    <i
                        class="fa-solid fa-cubes text-slate-900 transition-colors duration-300 group-hover:text-white"></i>
                    Unity
                </span>
            </div>
        </div>

    </div>
</section>
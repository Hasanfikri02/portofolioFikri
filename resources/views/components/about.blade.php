<section id="about" class="relative isolate overflow-hidden bg-background px-6 py-24 font-sans text-white lg:px-8">

    {{-- Watermark Logo Besar di Background --}}
    <div class="pointer-events-none absolute -right-12 top-1/3 z-0 -translate-y-1/2 opacity-25" >
        <img src="{{ asset('about/logo-upgris.png') }}" 
             alt="Logo UPGRIS" 
             class="reveal h-105 w-auto object-contain filter drop-shadow-[0_0_50px_rgba(187,254,1,0.3)]" style="transition-delay: 100ms;">
    </div>

    {{-- 1. Gradient Bulatan Putih Tipis --}}
    <div class="white-spot-top-left z-0"></div>
    <div class="white-spot-bottom-right z-0"></div>
    <div class="bg-grid-pattern mask-corner-spots pointer-events-none absolute inset-0 z-0 opacity-80"></div>

    <div class="relative z-10 mx-auto max-w-7xl">
        {{-- Header & Content Tetap Rapi --}}
        <div class="grid gap-12 lg:grid-cols-2 lg:items-start">
            <div class="reveal" style="transition-delay: 150ms;">
                <p class="mb-4 text-sm font-semibold uppercase tracking-[0.2em] text-accent">
                    About Me
                </p>

                <h2 class="max-w-xl text-4xl font-bold leading-tight tracking-tight text-white sm:text-5xl">
                    Building digital solutions with code & creativity.
                </h2>
            </div>

            <div class="reveal max-w-2xl space-y-5 text-lg leading-8 text-white/90" style="transition-delay: 250ms;">
                <p>
                    I am an Informatics graduate from Universitas PGRI Semarang with experience in web application development using PHP and Laravel, database management, and multi-role systems.
                </p>

                <p>
                    I have also explored mobile application development using Flutter and Firebase, along with UI/UX design. Through academic, collaborative, and individual projects, I continue to develop my technical skills and create practical digital solutions.
                </p>

                <div class="pt-2">
                    <a href="{{ asset('about/transkrip.pdf') }}" target="_blank"
                        class="inline-flex items-center gap-2 rounded-xl bg-accent px-5 py-3 text-sm font-semibold text-black shadow-lg shadow-accent/20 transition-all duration-300 hover:bg-white hover:shadow-white/20 hover:-translate-y-0.5">
                        <i class="fa-solid fa-file-lines text-base"></i>
                        <span>Lihat Transkrip Nilai</span>
                    </a>
                </div>
            </div>
        </div>

        {{-- Highlight Cards Grid --}}
        <div class="mt-16 grid gap-6 sm:grid-cols-2 lg:grid-cols-4 lg:items-stretch">

            {{-- Card 1: Informatics (Standard - Dark) --}}
            <div
                class="reveal group flex h-full flex-col justify-between rounded-2xl border border-white/10 bg-surface/60 p-8 backdrop-blur-md transition-all duration-500 ease-out hover:-translate-y-2 hover:scale-[1.02] hover:border-accent hover:bg-accent hover:text-black hover:shadow-xl hover:shadow-accent/20">
                <div>
                    <div
                        class="mb-5 flex h-11 w-11 items-center justify-center rounded-xl border border-white/10 bg-white/5 text-accent transition-all duration-500 ease-out group-hover:border-black/10 group-hover:bg-black/10 group-hover:text-black">
                        <i class="fa-solid fa-graduation-cap text-lg"></i>
                    </div>

                    <h3
                        class="text-lg font-bold text-white transition-colors duration-500 ease-out group-hover:text-black">
                        Informatics
                    </h3>

                    <p
                        class="mt-2 text-sm leading-6 text-white/70 transition-colors duration-500 ease-out group-hover:text-black/80">
                        Academic background in Informatics, software development, and information systems.
                    </p>
                </div>
            </div>

            {{-- Card 2: Web Development (Featured - Accent) --}}
            <div
                class="reveal group flex h-full flex-col justify-between rounded-2xl border border-accent bg-accent p-8 text-black shadow-xl shadow-accent/20 backdrop-blur-md transition-all duration-500 ease-out hover:scale-105 lg:-translate-y-5">
                <div>
                    <div
                        class="mb-5 flex h-11 w-11 items-center justify-center rounded-xl bg-black/10 text-black transition-all duration-500 ease-out group-hover:bg-black group-hover:text-accent">
                        <i class="fa-solid fa-code text-lg"></i>
                    </div>

                    <h3 class="text-lg font-bold text-black">
                        Web Development
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-black/80">
                        Building web applications using PHP, Laravel, Python, Flask, and database technologies.
                    </p>
                </div>
            </div>

            {{-- Card 3: Mobile & Interactive Apps (Featured - Accent) --}}
            <div
                class="reveal group flex h-full flex-col justify-between rounded-2xl border border-accent bg-accent p-8 text-black shadow-xl shadow-accent/20 backdrop-blur-md transition-all duration-500 ease-out hover:scale-105 lg:-translate-y-5">
                <div>
                    <div
                        class="mb-5 flex h-11 w-11 items-center justify-center rounded-xl bg-black/10 text-black transition-all duration-500 ease-out group-hover:bg-black group-hover:text-accent">
                        <i class="fa-solid fa-mobile-screen-button text-lg"></i>
                    </div>

                    <h3 class="text-lg font-bold text-black">
                        Mobile & AR Apps
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-black/80">
                        Developing mobile solutions with Flutter and creating interactive Augmented Reality applications using Unity.
                    </p>
                </div>
            </div>

            {{-- Card 4: UI/UX & Design (Standard - Dark) --}}
            <div
                 class="reveal group flex h-full flex-col justify-between rounded-2xl border border-white/10 bg-surface/60 p-8 backdrop-blur-md transition-all duration-500 ease-out hover:-translate-y-2 hover:scale-[1.02] hover:border-accent hover:bg-accent hover:text-black hover:shadow-xl hover:shadow-accent/20">
                <div>
                    <div
                        class="mb-5 flex h-11 w-11 items-center justify-center rounded-xl border border-white/10 bg-white/5 text-accent transition-all duration-500 ease-out group-hover:border-black/10 group-hover:bg-black/10 group-hover:text-black">
                        <i class="fa-solid fa-pen-nib text-lg"></i>
                    </div>

                    <h3
                        class="text-lg font-bold text-white transition-colors duration-500 ease-out group-hover:text-black">
                        UI/UX & Creative Design
                    </h3>

                    <p
                        class="mt-2 text-sm leading-6 text-white/70 transition-colors duration-500 ease-out group-hover:text-black/80">
                        Designing user interfaces and creating digital visuals using Figma and Canva.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>
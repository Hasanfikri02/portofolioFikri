<header class="fixed inset-x-0 top-0 z-50 py-4 transition-all duration-300">
    <nav class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- Floating Glass Pill Container --}}
        <div
            class="relative flex items-center justify-between rounded-full border-2 border-accent bg-zinc-900/70 px-6 py-3.5 backdrop-blur-xl shadow-lg shadow-accent/10 transition-all duration-300 hover:shadow-accent/20">

            {{-- Logo Brand --}}
            <a href="#home" class="group flex items-center gap-3">
                {{-- Container Logo Gambar dengan Glow Effect --}}
                <div
                    class="relative flex h-10 w-10 items-center justify-center transition-all duration-300 group-hover:scale-105">
                    {{-- Img Tag Logo dengan Glow Langsung pada Bentuk Logo --}}
                    <img src="{{ asset('hero/logo.png') }}" alt="Logo"
                        class="h-full w-full object-contain filter drop-shadow-[0_0_15px_rgba(187,254,1,0.8)] transition-all duration-300 group-hover:drop-shadow-[0_0_18px_rgba(187,254,1,1)]" />
                </div>

                {{-- Teks Brand --}}
                <span class="text-xl font-bold tracking-tight text-white transition group-hover:text-accent">
                    Portofolio<span class="text-accent">.</span>
                </span>
            </a>

            {{-- Desktop Navigation --}}
            <div class="hidden items-center gap-7 md:flex">

                <a href="#about" class="text-sm font-semibold text-white/90 transition hover:text-accent">
                    About
                </a>

                <a href="#skills" class="text-sm font-semibold text-white/90 transition hover:text-accent">
                    Skills
                </a>

                <a href="#experience" class="text-sm font-semibold text-white/90 transition hover:text-accent">
                    Experience
                </a>

                <a href="#projects" class="text-sm font-semibold text-white/90 transition hover:text-accent">
                    Projects
                </a>

                <a href="#design" class="text-sm font-semibold text-white/90 transition hover:text-accent">
                    Design
                </a>

                <a href="#contact" class="text-sm font-semibold text-white/90 transition hover:text-accent">
                    Contact
                </a>

            </div>

            {{-- Mobile Menu Button --}}
            <button type="button" id="mobile-menu-button"
                class="flex h-9 w-9 items-center justify-center rounded-full border border-accent/40 bg-white/5 text-lg text-white transition hover:border-accent hover:bg-accent hover:text-black md:hidden"
                aria-label="Toggle navigation menu" aria-expanded="false">
                <i id="mobile-menu-icon" class="fa-solid fa-bars"></i>
            </button>

        </div>

        {{-- Mobile Navigation Dropdown --}}
        <div id="mobile-menu"
            class="hidden mt-2 overflow-hidden rounded-2xl border border-accent/40 bg-zinc-900/90 p-4 backdrop-blur-xl shadow-2xl md:hidden">
            <div class="flex flex-col space-y-1">

                <a href="#about"
                    class="mobile-menu-link rounded-xl px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-accent/10 hover:text-accent">
                    About
                </a>

                <a href="#skills"
                    class="mobile-menu-link rounded-xl px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-accent/10 hover:text-accent">
                    Skills
                </a>

                <a href="#experience"
                    class="mobile-menu-link rounded-xl px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-accent/10 hover:text-accent">
                    Experience
                </a>

                <a href="#projects"
                    class="mobile-menu-link rounded-xl px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-accent/10 hover:text-accent">
                    Projects
                </a>

                <a href="#design"
                    class="mobile-menu-link rounded-xl px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-accent/10 hover:text-accent">
                    Design
                </a>

                <a href="#contact"
                    class="mobile-menu-link rounded-xl px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-accent/10 hover:text-accent">
                    Contact
                </a>

            </div>
        </div>

    </nav>
</header>

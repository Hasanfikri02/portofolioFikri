<header class="fixed inset-x-0 top-0 z-50 border-b border-gray-200 bg-white/90 backdrop-blur-md">
    <nav class="mx-auto max-w-7xl px-6 lg:px-8">

        {{-- Navbar Top --}}
        <div class="flex items-center justify-between py-4">

            {{-- Logo --}}
            <a href="#home" class="text-xl font-bold tracking-tight text-gray-900">
                Fikri.
            </a>

            {{-- Desktop Navigation --}}
            <div class="hidden items-center gap-8 md:flex">

                <a href="#about" class="text-sm font-medium text-gray-600 transition hover:text-gray-900">
                    About
                </a>

                <a href="#skills" class="text-sm font-medium text-gray-600 transition hover:text-gray-900">
                    Skills
                </a>

                <a href="#experience" class="text-sm font-medium text-gray-600 transition hover:text-gray-900">
                    Experience
                </a>

                <a href="#projects" class="text-sm font-medium text-gray-600 transition hover:text-gray-900">
                    Projects
                </a>

                <a href="#design" class="text-sm font-medium text-gray-600 transition hover:text-gray-900">
                    Design
                </a>

                <a href="#contact" class="text-sm font-medium text-gray-600 transition hover:text-gray-900">
                    Contact
                </a>

            </div>

            {{-- Mobile Menu Button --}}
            <button type="button" id="mobile-menu-button"
                class="flex h-9 w-9 items-center justify-center text-lg text-gray-800 md:hidden"
                aria-label="Toggle navigation menu" aria-expanded="false">
                <i id="mobile-menu-icon" class="fa-solid fa-bars"></i>
            </button>

        </div>

        {{-- Mobile Navigation --}}
        <div id="mobile-menu" class="hidden border-t border-gray-200 py-4 md:hidden">
            <div class="flex flex-col">

                <a href="#about"
                    class="mobile-menu-link border-b border-gray-100 py-3 text-sm font-medium text-gray-600 transition hover:text-gray-900">
                    About
                </a>

                <a href="#skills"
                    class="mobile-menu-link border-b border-gray-100 py-3 text-sm font-medium text-gray-600 transition hover:text-gray-900">
                    Skills
                </a>

                <a href="#experience"
                    class="mobile-menu-link border-b border-gray-100 py-3 text-sm font-medium text-gray-600 transition hover:text-gray-900">
                    Experience
                </a>

                <a href="#projects"
                    class="mobile-menu-link border-b border-gray-100 py-3 text-sm font-medium text-gray-600 transition hover:text-gray-900">
                    Projects
                </a>

                <a href="#design"
                    class="mobile-menu-link border-b border-gray-100 py-3 text-sm font-medium text-gray-600 transition hover:text-gray-900">
                    Design
                </a>

                <a href="#contact"
                    class="mobile-menu-link py-3 text-sm font-medium text-gray-600 transition hover:text-gray-900">
                    Contact
                </a>

            </div>
        </div>

    </nav>
</header>

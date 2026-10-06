<section id="contact" class="relative isolate overflow-hidden bg-background px-6 py-24 font-sans text-white lg:px-8">

    {{-- 1. Gradient Bulatan Putih Tipis (Pojok Kiri Atas) --}}
    <div class="white-spot-top-left z-0"></div>

    {{-- 2. Gradient Bulatan Putih Tipis (Pojok Kanan Bawah) --}}
    <div class="white-spot-bottom-right z-0"></div>

    {{-- 3. Grid Pattern Layer (Hanya Terlihat di Spot Gradient) --}}
    <div class="bg-grid-pattern mask-corner-spots pointer-events-none absolute inset-0 z-0 opacity-80"></div>

    <div class="mx-auto max-w-7xl">

        {{-- Header --}}
        <div class="reveal grid gap-12 lg:grid-cols-2 lg:items-end" style="transition-delay: 100ms;">

            <div>
                <p class="mb-4 text-sm font-semibold uppercase tracking-[0.2em] text-accent">
                    Contact
                </p>

                <h2 class="max-w-2xl text-4xl font-bold leading-tight tracking-tight text-white sm:text-5xl">
                    Let's connect and build something together.
                </h2>
            </div>

            <div class="max-w-xl lg:justify-self-end">
                <p class="text-lg leading-8 text-white">
                    Interested in working together, discussing a project, or simply connecting? Feel free to reach out through any of the platforms below.
                </p>
            </div>

        </div>

        {{-- Contact Links --}}
        <div class="mt-14 grid gap-4 sm:grid-cols-3">

            {{-- WhatsApp --}}
            <a href="https://wa.me/62895412708713" target="_blank" rel="noopener noreferrer"
                style="transition-delay: 200ms;"
                class="reveal group rounded-2xl border border-accent bg-surface p-6 transition duration-300 hover:-translate-y-1 hover:border-white">
                <div class="flex items-center justify-between">

                    <div
                        class="flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-black transition-colors duration-300 group-hover:bg-white">
                        <i class="fa-brands fa-whatsapp text-xl"></i>
                    </div>

                    <i
                        class="fa-solid fa-arrow-up-right-from-square text-sm text-accent transition-colors duration-300 group-hover:text-white"></i>

                </div>

                <h3 class="mt-6 font-semibold text-white">
                    WhatsApp
                </h3>

                <p class="mt-2 text-sm leading-6 text-gray-400">
                    Send me a direct message for a quick conversation.
                </p>

            </a>

            {{-- LinkedIn --}}
            <a href="https://www.linkedin.com/in/muhammad-hasan-fikri-43652a2a5" target="_blank"
                rel="noopener noreferrer"
                style="transition-delay: 350ms;"
                class="reveal group rounded-2xl border border-accent bg-surface p-6 transition duration-300 hover:-translate-y-1 hover:border-white">
                <div class="flex items-center justify-between">

                    <div
                        class="flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-black transition-colors duration-300 group-hover:bg-white">
                        <i class="fa-brands fa-linkedin-in text-xl"></i>
                    </div>

                    <i
                        class="fa-solid fa-arrow-up-right-from-square text-sm text-accent transition-colors duration-300 group-hover:text-white"></i>

                </div>

                <h3 class="mt-6 font-semibold text-white">
                    LinkedIn
                </h3>

                <p class="mt-2 text-sm leading-6 text-gray-400">
                    Connect with me and explore my professional background.
                </p>

            </a>

            {{-- Instagram --}}
            <a href="https://www.instagram.com/hasanfikri.m" target="_blank" rel="noopener noreferrer"
                style="transition-delay: 500ms;"
                class="reveal group rounded-2xl border border-accent bg-surface p-6 transition duration-300 hover:-translate-y-1 hover:border-white">
                <div class="flex items-center justify-between">

                    <div
                        class="flex h-11 w-11 items-center justify-center rounded-xl bg-accent text-black transition-colors duration-300 group-hover:bg-white">
                        <i class="fa-brands fa-instagram text-xl"></i>
                    </div>

                    <i
                        class="fa-solid fa-arrow-up-right-from-square text-sm text-accent transition-colors duration-300 group-hover:text-white"></i>

                </div>

                <h3 class="mt-6 font-semibold text-white">
                    Instagram
                </h3>

                <p class="mt-2 text-sm leading-6 text-gray-400">
                    A glimpse into my personal life and everyday moments.
                </p>

            </a>

        </div>

    </div>
</section>
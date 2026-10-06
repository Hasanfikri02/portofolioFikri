<section id="projects" class="relative isolate overflow-hidden bg-background px-6 py-24 font-sans text-white lg:px-8">

    {{-- Canvas Background --}}
    <canvas id="bgCanvas" class="pointer-events-none absolute inset-0 -z-10 h-full w-full"></canvas>

    {{-- 1. Gradient Bulatan Putih Tipis (Pojok Kiri Atas) --}}
    <div class="white-spot-top-left z-0"></div>

    {{-- 2. Gradient Bulatan Putih Tipis (Pojok Kanan Bawah) --}}
    <div class="white-spot-bottom-right z-0"></div>

    {{-- 3. Grid Pattern Layer (Hanya Terlihat di Spot Gradient) --}}
    <div class="bg-grid-pattern mask-corner-spots pointer-events-none absolute inset-0 z-0 opacity-80"></div>

    <div class="relative z-10 mx-auto max-w-7xl">

        {{-- Section Header --}}
        <div class="max-w-2xl">

            <p class="mb-4 text-sm font-semibold uppercase tracking-[0.2em] text-accent">
                Projects
            </p>

            <h2 class="text-4xl font-bold leading-tight tracking-tight text-white sm:text-5xl">
                Selected projects I've worked on.
            </h2>

            <p class="mt-5 text-lg leading-8 text-white/80">
                A selection of academic, collaborative, and individual projects developed through coursework, professional programs, research, and real-world development experience.
            </p>

        </div>


        {{-- Projects --}}
        <div class="mt-16 space-y-24">


            {{-- Project 1 --}}
            <article class="grid gap-10 lg:grid-cols-2 lg:items-center lg:gap-16">

                {{-- Project Information --}}
                <div>
                    <h3 class="mt-3 text-3xl font-bold tracking-tight text-white">
                        Sistem Booking & Management Lapangan
                    </h3>

                    {{-- Badges / Tech Stack --}}
                    <div class="mt-4 flex flex-wrap gap-2">
                        <span
                            class="rounded-full border bg-accent px-3 py-1 text-xs font-semibold text-slate-800 shadow-sm">
                            Laravel
                        </span>

                        <span
                            class="rounded-full border bg-accent px-3 py-1 text-xs font-semibold text-slate-800 shadow-sm">
                            PHP
                        </span>

                        <span
                            class="rounded-full border bg-accent px-3 py-1 text-xs font-semibold text-slate-800 shadow-sm">
                            MySQL
                        </span>

                        <span
                            class="rounded-full border bg-accent px-3 py-1 text-xs font-semibold text-slate-800 shadow-sm">
                            Midtrans
                        </span>
                    </div>

                    <p class="mt-6 text-sm font-medium uppercase tracking-wider text-white/60">
                        Collaborative Project
                    </p>

                    <ul class="mt-4 space-y-3 text-white/80">

                        <li class="flex gap-3">
                            <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>
                            <span>
                                Mengembangkan sistem pemesanan dan pengelolaan
                                lapangan berbasis web.
                            </span>
                        </li>

                        <li class="flex gap-3">
                            <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>
                            <span>
                                Mengimplementasikan fitur pengecekan ketersediaan
                                lapangan, jadwal, dan kalender pemesanan.
                            </span>
                        </li>

                        <li class="flex gap-3">
                            <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>
                            <span>
                                Berkontribusi dalam integrasi pembayaran menggunakan
                                Midtrans, termasuk pengelolaan bukti pembayaran.
                            </span>
                        </li>

                        <li class="flex gap-3">
                            <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>
                            <span>
                                Mengembangkan dashboard admin dengan fitur
                                pengelolaan pemesanan dan laporan keuangan.
                            </span>
                        </li>

                    </ul>

                </div>


                {{-- Project Preview --}}
                <div class="group relative w-full" data-carousel>
                    {{-- Carousel Body / Image Container (Tanpa Border) --}}
                    <div class="relative w-full overflow-hidden ">
                        {{-- Slides Track --}}
                        <div class="flex h-full w-full transition-transform duration-500 ease-out" data-carousel-track>

                            {{-- Slide 1 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('projects/booking/Sampanganlap1.png') }}"
                                    alt="Sistem Booking & Management Lapangan 1"
                                    class="max-w-md h-auto object-contain select-none" draggable="false">
                            </div>

                            {{-- Slide 2 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('projects/booking/Sampanganlap2.png') }}"
                                    alt="Sistem Booking & Management Lapangan 2"
                                    class="h-full w-full object-cover object-center select-none" draggable="false">
                            </div>

                            {{-- Slide 3 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('projects/booking/Sampanganlap3.png') }}"
                                    alt="Sistem Booking & Management Lapangan 3"
                                    class="h-full w-full object-cover object-center select-none" draggable="false">
                            </div>

                            {{-- Slide 4 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('projects/booking/Sampanganlap4.png') }}"
                                    alt="Sistem Booking & Management Lapangan 4"
                                    class="h-full w-full object-cover object-center select-none" draggable="false">
                            </div>
                            {{-- Slide 5 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('projects/booking/Sampanganlap5.png') }}"
                                    alt="Sistem Booking & Management Lapangan 5"
                                    class="h-full w-full object-cover object-center select-none" draggable="false">
                            </div>

                        </div>
                    </div>

                    {{-- Bottom Control Bar --}}
                    <div class="mt-4 flex items-center justify-center gap-4">
                        {{-- Previous Button --}}
                        <button type="button" data-carousel-prev aria-label="Previous project image"
                            class="flex h-9 w-9 items-center justify-center rounded-full bg-white text-slate-900 backdrop-blur-md transition-all duration-300 hover:bg-accent  active:scale-95">
                            <i class="fa-solid fa-chevron-left text-xs"></i>
                        </button>

                        {{-- Indicator --}}
                        <div class="text-xs font-bold tracking-widest text-white" data-carousel-indicator>
                            1 / 5
                        </div>

                        {{-- Next Button --}}
                        <button type="button" data-carousel-next aria-label="Next project image"
                            class="flex h-9 w-9 items-center justify-center rounded-full bg-white text-slate-900 backdrop-blur-md transition-all duration-300 hover:bg-accent  active:scale-95">
                            <i class="fa-solid fa-chevron-right text-xs"></i>
                        </button>
                    </div>
                </div>

            </article>


            {{-- Project 2 --}}
            <article class="grid gap-10 lg:grid-cols-2 lg:items-center lg:gap-16">

                {{-- Project Preview: Pensiun --}}
                <div class="group relative w-full" data-carousel>
                    {{-- Carousel Body & Image Wrapper --}}
                    <div class="relative w-full overflow-hidden ">
                        {{-- Slides Track --}}
                        <div class="flex h-full w-full transition-transform duration-500 ease-out" data-carousel-track>

                            {{-- Slide 1 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('projects/pensiun/pensiun1.png') }}"
                                    alt="Sistem Kepensiunan Pegawai Non-ASN 1"
                                    class="max-w-md h-auto object-contain select-none" draggable="false">
                            </div>

                            {{-- Slide 2 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('projects/pensiun/pensiun2.png') }}"
                                    alt="Sistem Kepensiunan Pegawai Non-ASN 2"
                                    class="h-full w-full object-cover object-center select-none" draggable="false">
                            </div>

                            {{-- Slide 3 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('projects/pensiun/pensiun3.png') }}"
                                    alt="Sistem Kepensiunan Pegawai Non-ASN 3"
                                    class="h-full w-full object-cover object-center select-none" draggable="false">
                            </div>

                            {{-- Slide 4 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('projects/pensiun/pensiun4.png') }}"
                                    alt="Sistem Kepensiunan Pegawai Non-ASN 4"
                                    class="h-full w-full object-cover object-center select-none" draggable="false">
                            </div>
                            {{-- Slide 5 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('projects/pensiun/pensiun5.png') }}"
                                    alt="Sistem Kepensiunan Pegawai Non-ASN 5"
                                    class="h-full w-full object-cover object-center select-none" draggable="false">
                            </div>

                        </div>
                    </div>

                    {{-- Controls & Indicator di Bawah Gambar --}}
                    <div class="mt-4 flex items-center justify-center gap-4">
                        <button type="button" data-carousel-prev aria-label="Previous project image"
                             class="flex h-9 w-9 items-center justify-center rounded-full bg-white text-slate-900 backdrop-blur-md transition-all duration-300 hover:bg-accent  active:scale-95"">
                            <i class="fa-solid fa-chevron-left text-xs"></i>
                        </button>

                        <div class="text-xs font-bold tracking-wider text-white" data-carousel-indicator>
                            1 / 5
                        </div>

                        <button type="button" data-carousel-next aria-label="Next project image"
                             class="flex h-9 w-9 items-center justify-center rounded-full bg-white text-slate-900 backdrop-blur-md transition-all duration-300 hover:bg-accent  active:scale-95"">
                            <i class="fa-solid fa-chevron-right text-xs"></i>
                        </button>
                    </div>
                </div>


                {{-- Project Information --}}
                <div class="order-1 lg:order-2">
                    <h3 class="mt-3 text-3xl font-bold tracking-tight text-white">
                        Sistem Kepensiunan Pegawai Non-ASN
                    </h3>

                    <div class="mt-4 flex flex-wrap gap-2">

                        <span class="rounded-full border bg-accent px-3 py-1 text-xs font-semibold text-slate-800 shadow-sm">
                            Laravel
                        </span>

                        <span class="rounded-full border bg-accent px-3 py-1 text-xs font-semibold text-slate-800 shadow-sm">
                            PHP
                        </span>

                        <span class="rounded-full border bg-accent px-3 py-1 text-xs font-semibold text-slate-800 shadow-sm">
                            MySQL
                        </span>

                    </div>

                    <p class="mt-6 text-sm font-medium uppercase tracking-wider text-white/60">
                        Collaborative Project — Universitas Diponegoro
                    </p>

                    <ul class="mt-4 space-y-3 text-white/80">

                        <li class="flex gap-3">
                            <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>
                            <span>
                                Berkontribusi pada pengembangan role Super Admin,
                                Supervisor, dan Pemroses.
                            </span>
                        </li>

                        <li class="flex gap-3">
                            <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>
                            <span>
                                Mengimplementasikan autentikasi dan pembatasan
                                akses berdasarkan role pengguna.
                            </span>
                        </li>

                        <li class="flex gap-3">
                            <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>
                            <span>
                                Mengembangkan fitur pengelolaan data, upload
                                dokumen, serta pemantauan status dan progres
                                proses pensiun.
                            </span>
                        </li>

                        <li class="flex gap-3">
                            <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>
                            <span>
                                Mengembangkan antarmuka menggunakan Laravel Blade
                                dan mengelola data menggunakan MySQL.
                            </span>
                        </li>

                    </ul>

                </div>

            </article>


            {{-- Project 3 --}}
            <article class="grid gap-10 lg:grid-cols-2 lg:items-center lg:gap-16">

                {{-- Project Information --}}
                <div>
                    <h3 class="mt-3 text-3xl font-bold tracking-tight text-white">
                        Diabetes Self Management Education
                    </h3>

                    <div class="mt-4 flex flex-wrap gap-2">

                        <span class="rounded-full border bg-accent px-3 py-1 text-xs font-semibold text-slate-800 shadow-sm">
                            Flutter
                        </span>

                        <span class="rounded-full border bg-accent px-3 py-1 text-xs font-semibold text-slate-800 shadow-sm">
                            Dart
                        </span>

                        <span class="rounded-full border bg-accent px-3 py-1 text-xs font-semibold text-slate-800 shadow-sm">
                            Firebase
                        </span>

                    </div>

                    <p class="mt-6 text-sm font-medium uppercase tracking-wider text-white/60">
                        Individual Project
                    </p>

                    <ul class="mt-4 space-y-3 text-white/80">

                        <li class="flex gap-3">
                            <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>
                            <span>
                                Mengembangkan aplikasi mobile untuk mendukung
                                edukasi, pencatatan, dan pengelolaan aktivitas
                                terkait diabetes menggunakan Flutter.
                            </span>
                        </li>

                        <li class="flex gap-3">
                            <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>
                            <span>
                                Mengintegrasikan Firebase sebagai layanan backend
                                dan pengelolaan data aplikasi.
                            </span>
                        </li>

                        <li class="flex gap-3">
                            <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>
                            <span>
                                Merancang dan mengimplementasikan antarmuka
                                aplikasi dengan memperhatikan User Experience.
                            </span>
                        </li>

                    </ul>

                </div>


                {{-- Project Preview: Diabetes Self Management Education (Mobile) --}}
                <div class="group relative flex flex-col items-center justify-center w-full" data-carousel>
                    {{-- Carousel Body & Image Wrapper (Khusus Ratio HP/Portrait) --}}
                    <div class="relative aspect-9/16 w-full max-w-[320px] max-h-125 overflow-hidden">
                        {{-- Slides Track --}}
                        <div class="flex h-full w-full transition-transform duration-500 ease-out" data-carousel-track>

                            {{-- Slide 1 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('projects/diabetes/diabetes1.png') }}"
                                    alt="Diabetes Self Management Education 1"
                                    class="h-full w-full object-contain object-center select-none" draggable="false">
                            </div>

                            {{-- Slide 2 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('projects/diabetes/diabetes2.png') }}"
                                    alt="Diabetes Self Management Education 2"
                                    class="h-full w-full object-contain object-center select-none" draggable="false">
                            </div>

                            {{-- Slide 3 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('projects/diabetes/diabetes3.png') }}"
                                    alt="Diabetes Self Management Education 3"
                                    class="h-full w-full object-contain object-center select-none" draggable="false">
                            </div>

                            {{-- Slide 4 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('projects/diabetes/diabetes4.png') }}"
                                    alt="Diabetes Self Management Education 4"
                                    class="h-full w-full object-contain object-center select-none" draggable="false">
                            </div>
                            {{-- Slide 5 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('projects/diabetes/diabetes5.png') }}"
                                    alt="Diabetes Self Management Education 5"
                                    class="h-full w-full object-contain object-center select-none" draggable="false">
                            </div>

                        </div>
                    </div>

                    {{-- Controls & Indicator di Bawah Gambar --}}
                    <div class="mt-4 flex items-center justify-center gap-4">
                        <button type="button" data-carousel-prev aria-label="Previous project image"
                             class="flex h-9 w-9 items-center justify-center rounded-full bg-white text-slate-900 backdrop-blur-md transition-all duration-300 hover:bg-accent  active:scale-95"">
                            <i class="fa-solid fa-chevron-left text-xs"></i>
                        </button>

                        <div class="text-xs font-bold tracking-wider text-white" data-carousel-indicator>
                            1 / 5
                        </div>

                        <button type="button" data-carousel-next aria-label="Next project image"
                             class="flex h-9 w-9 items-center justify-center rounded-full bg-white text-slate-900 backdrop-blur-md transition-all duration-300 hover:bg-accent  active:scale-95"">
                            <i class="fa-solid fa-chevron-right text-xs"></i>
                        </button>
                    </div>
                </div>

            </article>


            {{-- Project 4 --}}
            <article class="grid gap-10 lg:grid-cols-2 lg:items-center lg:gap-16">

                {{-- Project Preview: DigestAR (Tanpa Border) --}}
                <div class="group relative w-full" data-carousel>
                    {{-- Carousel Body & Image Wrapper --}}
                    <div class="relative w-full overflow-hidden rounded-xl">
                        {{-- Slides Track --}}
                        <div class="flex h-full w-full transition-transform duration-500 ease-out" data-carousel-track>

                            {{-- Slide 1 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('projects/digestar/digestar1.png') }}" alt="DigestAR 1"
                                    class="h-full w-full object-cover object-center select-none" draggable="false">
                            </div>

                            {{-- Slide 2 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('projects/digestar/digestar2.png') }}" alt="DigestAR 2"
                                    class="h-full w-full object-cover object-center select-none" draggable="false">
                            </div>

                            {{-- Slide 3 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('projects/digestar/digestar3.png') }}" alt="DigestAR 3"
                                    class="h-full w-full object-cover object-center select-none" draggable="false">
                            </div>

                            {{-- Slide 4 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('projects/digestar/digestar4.png') }}" alt="DigestAR 4"
                                    class="h-full w-full object-cover object-center select-none" draggable="false">
                            </div>
                            {{-- Slide 5 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('projects/digestar/digestar5.png') }}" alt="DigestAR 5"
                                    class="h-full w-full object-cover object-center select-none" draggable="false">
                            </div>

                        </div>
                    </div>

                    {{-- Controls & Indicator di Bawah Gambar --}}
                    <div class="mt-4 flex items-center justify-center gap-4 pb-2">
                        <button type="button" data-carousel-prev aria-label="Previous project image"
                            class="flex h-8 w-8 items-center justify-center rounded-full bg-white text-slate-900 backdrop-blur-md transition-all duration-300 hover:bg-accent  active:scale-95">
                            <i class="fa-solid fa-chevron-left text-xs"></i>
                        </button>

                        <div class="text-xs font-bold tracking-wider text-white" data-carousel-indicator>
                            1 / 5
                        </div>

                        <button type="button" data-carousel-next aria-label="Next project image"
                            class="flex h-8 w-8 items-center justify-center rounded-full bg-white text-slate-900 backdrop-blur-md transition-all duration-300 hover:bg-accent  active:scale-95">
                            <i class="fa-solid fa-chevron-right text-xs"></i>
                        </button>
                    </div>
                </div>


                {{-- Project Information --}}
                <div class="order-1 lg:order-2">

                    <h3 class="mt-2 text-3xl font-bold tracking-tight text-white">
                        DigestAR
                    </h3>

                    <p class="mt-1 text-sm font-medium text-gray-400">
                        Aplikasi Augmented Reality untuk Pembelajaran Sistem Pencernaan
                    </p>

                    <div class="mt-4 flex flex-wrap gap-2">

                        <span
                            class="rounded-full bg-accent px-3 py-1 text-xs font-semibold text-slate-800 shadow-sm">
                            Unity
                        </span>

                        <span
                            class="rounded-full bg-accent px-3 py-1 text-xs font-semibold text-slate-800 shadow-sm">
                            C#
                        </span>

                        <span
                            class="rounded-full bg-accent px-3 py-1 text-xs font-semibold text-slate-800 shadow-sm">
                            Augmented Reality
                        </span>

                        <span
                            class="rounded-full bg-accent px-3 py-1 text-xs font-semibold text-slate-800 shadow-sm">
                            Fisher-Yates
                        </span>

                    </div>

                    <p class="mt-6 text-sm font-semibold text-gray-400">
                        Individual Project & Final Research
                    </p>

                    <ul class="mt-4 space-y-3 text-gray-300">

                        <li class="flex gap-3">
                            <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>
                            <span>
                                Mengembangkan aplikasi Android berbasis Augmented Reality untuk membantu pembelajaran
                                sistem pencernaan bagi siswa SD kelas 5.
                            </span>
                        </li>

                        <li class="flex gap-3">
                            <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>
                            <span>
                                Mengembangkan fitur pembelajaran interaktif menggunakan Unity dan C#.
                            </span>
                        </li>

                        <li class="flex gap-3">
                            <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>
                            <span>
                                Menerapkan algoritma Fisher-Yates untuk melakukan pengacakan soal kuis.
                            </span>
                        </li>

                        <li class="flex gap-3">
                            <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>
                            <span>
                                Melakukan penelitian terkait pengembangan dan penggunaan aplikasi sebagai media
                                pembelajaran.
                            </span>
                        </li>

                        <li class="flex gap-3">
                            <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>
                            <span>
                                Penelitian dipublikasikan pada jurnal SISFOKOM dan terindeks SINTA 3.
                            </span>
                        </li>

                    </ul>

                </div>

            </article>


            {{-- Project 5 --}}
            <article class="grid gap-10 lg:grid-cols-2 lg:items-center lg:gap-16">

                {{-- Project Information --}}
                <div>

                    <h3 class="mt-3 text-3xl font-bold tracking-tight text-white">
                        Platform Layanan Bimble BBC
                    </h3>

                    <div class="mt-4 flex flex-wrap gap-2">

                        <span class="rounded-full border bg-accent px-3 py-1 text-xs font-semibold text-slate-800 shadow-sm">
                            Python
                        </span>

                        <span class="rounded-full border bg-accent px-3 py-1 text-xs font-semibold text-slate-800 shadow-sm">
                            MongoDB
                        </span>

                    </div>

                    <p class="mt-6 text-sm font-medium uppercase tracking-wider text-white/60">
                        Collaborative Project — Real-world Case Study
                    </p>

                    <ul class="mt-4 space-y-3 text-white/80">

                        <li class="flex gap-3">
                            <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>
                            <span>
                                Mengembangkan platform pendaftaran bimble berbasis
                                web untuk menampilkan layanan dan memungkinkan
                                pengguna melakukan pendaftaran.
                            </span>
                        </li>

                        <li class="flex gap-3">
                            <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>
                            <span>
                                Mengimplementasikan autentikasi serta sistem role
                                admin dan user.
                            </span>
                        </li>

                        <li class="flex gap-3">
                            <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>
                            <span>
                                Mengembangkan fitur layanan, pendaftaran, dan
                                fitur informatif lainnya.
                            </span>
                        </li>

                        <li class="flex gap-3">
                            <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>
                            <span>
                                Menggunakan Python dan MongoDB untuk membangun
                                fungsionalitas serta pengelolaan data aplikasi.
                            </span>
                        </li>

                    </ul>

                </div>


                {{-- Project Preview: Bimble BBC --}}
                <div class="group relative w-full" data-carousel>
                    {{-- Carousel Body & Image Wrapper --}}
                    <div class="relative w-full overflow-hidden">
                        {{-- Slides Track --}}
                        <div class="flex h-full w-full transition-transform duration-500 ease-out" data-carousel-track>

                            {{-- Slide 1 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('projects/bimble/msib1.png') }}" alt="Bimble BBC 1"
                                    class="max-w-md h-auto object-contain select-none" draggable="false">
                            </div>

                            {{-- Slide 2 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('projects/bimble/msib2.png') }}" alt="Bimble BBC 2"
                                    class="h-full w-full object-cover object-center select-none" draggable="false">
                            </div>

                            {{-- Slide 3 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('projects/bimble/msib3.png') }}" alt="Bimble BBC 3"
                                    class="h-full w-full object-cover object-center select-none" draggable="false">
                            </div>

                            {{-- Slide 4 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('projects/bimble/msib4.png') }}" alt="Bimble BBC 4"
                                    class="h-full w-full object-cover object-center select-none" draggable="false">
                            </div>
                            {{-- Slide 5 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('projects/bimble/msib5.png') }}" alt="Bimble BBC 5"
                                    class="h-full w-full object-cover object-center select-none" draggable="false">
                            </div>

                        </div>
                    </div>

                    {{-- Controls & Indicator di Bawah Gambar --}}
                    <div class="mt-4 flex items-center justify-center gap-4">
                        <button type="button" data-carousel-prev aria-label="Previous project image"
                             class="flex h-9 w-9 items-center justify-center rounded-full bg-white text-slate-900 backdrop-blur-md transition-all duration-300 hover:bg-accent  active:scale-95"">
                            <i class="fa-solid fa-chevron-left text-xs"></i>
                        </button>

                        <div class="text-xs font-bold tracking-wider text-white" data-carousel-indicator>
                            1 / 5
                        </div>

                        <button type="button" data-carousel-next aria-label="Next project image"
                             class="flex h-9 w-9 items-center justify-center rounded-full bg-white text-slate-900 backdrop-blur-md transition-all duration-300 hover:bg-accent  active:scale-95"">
                            <i class="fa-solid fa-chevron-right text-xs"></i>
                        </button>
                    </div>
                </div>

            </article>

        </div>

    </div>
</section>

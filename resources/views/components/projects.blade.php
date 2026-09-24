<section id="projects" class="px-6 py-24 lg:px-8">
    <div class="mx-auto max-w-7xl">

        {{-- Section Header --}}
        <div class="max-w-2xl">

            <p class="mb-4 text-sm font-semibold uppercase tracking-[0.2em] text-gray-500">
                Projects
            </p>

            <h2 class="text-4xl font-bold leading-tight tracking-tight text-gray-900 sm:text-5xl">
                Selected projects I've worked on.
            </h2>

            <p class="mt-5 text-lg leading-8 text-gray-600">
                A selection of academic, collaborative, and individual
                projects developed across different technologies.
            </p>

        </div>


        {{-- Projects --}}
        <div class="mt-16 space-y-24">


            {{-- Project 1 --}}
            <article class="grid gap-10 lg:grid-cols-2 lg:items-center lg:gap-16">

                {{-- Project Information --}}
                <div>

                    <p class="text-sm font-medium text-gray-400">
                        01
                    </p>

                    <h3 class="mt-3 text-3xl font-bold tracking-tight text-gray-900">
                        Sistem Booking & Management Lapangan
                    </h3>

                    <div class="mt-4 flex flex-wrap gap-2">
                        <span class="rounded-full bg-gray-100 px-3 py-1 text-xs font-medium text-gray-600">
                            Laravel
                        </span>

                        <span class="rounded-full bg-gray-100 px-3 py-1 text-xs font-medium text-gray-600">
                            PHP
                        </span>

                        <span class="rounded-full bg-gray-100 px-3 py-1 text-xs font-medium text-gray-600">
                            MySQL
                        </span>

                        <span class="rounded-full bg-gray-100 px-3 py-1 text-xs font-medium text-gray-600">
                            Midtrans
                        </span>
                    </div>

                    <p class="mt-6 text-sm font-medium text-gray-500">
                        Collaborative Project
                    </p>

                    <ul class="mt-4 space-y-3 text-gray-600">

                        <li class="flex gap-3">
                            <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-gray-400"></span>
                            <span>
                                Mengembangkan sistem pemesanan dan pengelolaan
                                lapangan berbasis web.
                            </span>
                        </li>

                        <li class="flex gap-3">
                            <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-gray-400"></span>
                            <span>
                                Mengimplementasikan fitur pengecekan ketersediaan
                                lapangan, jadwal, dan kalender pemesanan.
                            </span>
                        </li>

                        <li class="flex gap-3">
                            <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-gray-400"></span>
                            <span>
                                Berkontribusi dalam integrasi pembayaran menggunakan
                                Midtrans, termasuk pengelolaan bukti pembayaran.
                            </span>
                        </li>

                        <li class="flex gap-3">
                            <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-gray-400"></span>
                            <span>
                                Mengembangkan dashboard admin dengan fitur
                                pengelolaan pemesanan dan laporan keuangan.
                            </span>
                        </li>

                    </ul>

                </div>


                {{-- Project Preview --}}
                <div class="group relative w-full" data-carousel>
                    {{-- Carousel Body / Image Container --}}
                    <div class="relative aspect-16/10 w-full overflow-hidden">
                        {{-- Slides Track --}}
                        <div class="flex h-full w-full transition-transform duration-500 ease-out" data-carousel-track>

                            {{-- Slide 1 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('storage/projects/booking/booking (1).png') }}"
                                    alt="Sistem Booking & Management Lapangan 1"
                                    class="h-full w-full object-cover object-center select-none" draggable="false">
                            </div>

                            {{-- Slide 2 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('storage/projects/booking/booking (2).png') }}"
                                    alt="Sistem Booking & Management Lapangan 2"
                                    class="h-full w-full object-cover object-center select-none" draggable="false">
                            </div>

                            {{-- Slide 3 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('storage/projects/booking/booking (3).png') }}"
                                    alt="Sistem Booking & Management Lapangan 3"
                                    class="h-full w-full object-cover object-center select-none" draggable="false">
                            </div>

                            {{-- Slide 4 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('storage/projects/booking/booking (4).png') }}"
                                    alt="Sistem Booking & Management Lapangan 4"
                                    class="h-full w-full object-cover object-center select-none" draggable="false">
                            </div>

                        </div>
                    </div>

                    {{-- Bottom Control Bar (Sejajar di Bawah Gambar) --}}
                    <div class="mt-4 flex items-center justify-center gap-4">
                        {{-- Previous Button --}}
                        <button type="button" data-carousel-prev aria-label="Previous project image"
                            class="flex h-8 w-8 items-center justify-center rounded-full border border-gray-200 text-gray-600 transition hover:bg-gray-100 hover:text-gray-900 active:scale-95">
                            <i class="fa-solid fa-chevron-left text-xs"></i>
                        </button>

                        {{-- Indicator --}}
                        <div class="text-xs font-semibold tracking-wider text-gray-500" data-carousel-indicator>
                            1 / 4
                        </div>

                        {{-- Next Button --}}
                        <button type="button" data-carousel-next aria-label="Next project image"
                            class="flex h-8 w-8 items-center justify-center rounded-full border border-gray-200 text-gray-600 transition hover:bg-gray-100 hover:text-gray-900 active:scale-95">
                            <i class="fa-solid fa-chevron-right text-xs"></i>
                        </button>
                    </div>
                </div>

            </article>


            {{-- Project 2 --}}
            <article class="grid gap-10 lg:grid-cols-2 lg:items-center lg:gap-16">

                {{-- Project Preview: DigestAR --}}
                <div class="group relative w-full" data-carousel>
                    {{-- Carousel Body & Image Wrapper --}}
                    <div class="relative aspect-16/10 w-full overflow-hidden">
                        {{-- Slides Track --}}
                        <div class="flex h-full w-full transition-transform duration-500 ease-out" data-carousel-track>

                            {{-- Slide 1 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('storage/projects/digestar/digestar (1).jpeg') }}" alt="DigestAR 1"
                                    class="h-full w-full object-cover object-center select-none" draggable="false">
                            </div>

                            {{-- Slide 2 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('storage/projects/digestar/digestar (2).jpeg') }}" alt="DigestAR 2"
                                    class="h-full w-full object-cover object-center select-none" draggable="false">
                            </div>

                            {{-- Slide 3 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('storage/projects/digestar/digestar (3).jpeg') }}" alt="DigestAR 3"
                                    class="h-full w-full object-cover object-center select-none" draggable="false">
                            </div>

                            {{-- Slide 4 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('storage/projects/digestar/digestar (4).jpeg') }}" alt="DigestAR 4"
                                    class="h-full w-full object-cover object-center select-none" draggable="false">
                            </div>

                        </div>
                    </div>

                    {{-- Controls & Indicator di Bawah Gambar --}}
                    <div class="mt-4 flex items-center justify-center gap-4">
                        <button type="button" data-carousel-prev aria-label="Previous project image"
                            class="flex h-8 w-8 items-center justify-center rounded-full border border-gray-200 text-gray-600 transition hover:bg-gray-100 hover:text-gray-900 active:scale-95">
                            <i class="fa-solid fa-chevron-left text-xs"></i>
                        </button>

                        <div class="text-xs font-semibold tracking-wider text-gray-500" data-carousel-indicator>
                            1 / 4
                        </div>

                        <button type="button" data-carousel-next aria-label="Next project image"
                            class="flex h-8 w-8 items-center justify-center rounded-full border border-gray-200 text-gray-600 transition hover:bg-gray-100 hover:text-gray-900 active:scale-95">
                            <i class="fa-solid fa-chevron-right text-xs"></i>
                        </button>
                    </div>
                </div>


                {{-- Project Information --}}
                <div class="order-1 lg:order-2">

                    <p class="text-sm font-medium text-gray-400">
                        02
                    </p>

                    <h3 class="mt-3 text-3xl font-bold tracking-tight text-gray-900">
                        DigestAR
                    </h3>

                    <p class="mt-1 text-sm font-medium text-gray-500">
                        Aplikasi Augmented Reality untuk Pembelajaran Sistem Pencernaan
                    </p>

                    <div class="mt-4 flex flex-wrap gap-2">

                        <span class="rounded-full bg-gray-100 px-3 py-1 text-xs font-medium text-gray-600">
                            Unity
                        </span>

                        <span class="rounded-full bg-gray-100 px-3 py-1 text-xs font-medium text-gray-600">
                            C#
                        </span>

                        <span class="rounded-full bg-gray-100 px-3 py-1 text-xs font-medium text-gray-600">
                            Augmented Reality
                        </span>

                        <span class="rounded-full bg-gray-100 px-3 py-1 text-xs font-medium text-gray-600">
                            Fisher-Yates
                        </span>

                    </div>

                    <p class="mt-6 text-sm font-medium text-gray-500">
                        Individual Project & Final Research
                    </p>

                    <ul class="mt-4 space-y-3 text-gray-600">

                        <li class="flex gap-3">
                            <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-gray-400"></span>
                            <span>
                                Mengembangkan aplikasi Android berbasis Augmented
                                Reality untuk membantu pembelajaran sistem
                                pencernaan bagi siswa SD kelas 5.
                            </span>
                        </li>

                        <li class="flex gap-3">
                            <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-gray-400"></span>
                            <span>
                                Mengembangkan fitur pembelajaran interaktif
                                menggunakan Unity dan C#.
                            </span>
                        </li>

                        <li class="flex gap-3">
                            <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-gray-400"></span>
                            <span>
                                Menerapkan algoritma Fisher-Yates untuk melakukan
                                pengacakan soal kuis.
                            </span>
                        </li>

                        <li class="flex gap-3">
                            <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-gray-400"></span>
                            <span>
                                Melakukan penelitian terkait pengembangan dan
                                penggunaan aplikasi sebagai media pembelajaran.
                            </span>
                        </li>

                        <li class="flex gap-3">
                            <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-gray-400"></span>
                            <span>
                                Penelitian dipublikasikan pada jurnal SISFOKOM
                                dan terindeks SINTA 3.
                            </span>
                        </li>

                    </ul>

                </div>

            </article>


            {{-- Project 3 --}}
            <article class="grid gap-10 lg:grid-cols-2 lg:items-center lg:gap-16">

                {{-- Project Information --}}
                <div>

                    <p class="text-sm font-medium text-gray-400">
                        03
                    </p>

                    <h3 class="mt-3 text-3xl font-bold tracking-tight text-gray-900">
                        Diabetes Self Management Education
                    </h3>

                    <div class="mt-4 flex flex-wrap gap-2">

                        <span class="rounded-full bg-gray-100 px-3 py-1 text-xs font-medium text-gray-600">
                            Flutter
                        </span>

                        <span class="rounded-full bg-gray-100 px-3 py-1 text-xs font-medium text-gray-600">
                            Dart
                        </span>

                        <span class="rounded-full bg-gray-100 px-3 py-1 text-xs font-medium text-gray-600">
                            Firebase
                        </span>

                    </div>

                    <p class="mt-6 text-sm font-medium text-gray-500">
                        Individual Project
                    </p>

                    <ul class="mt-4 space-y-3 text-gray-600">

                        <li class="flex gap-3">
                            <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-gray-400"></span>
                            <span>
                                Mengembangkan aplikasi mobile untuk mendukung
                                edukasi, pencatatan, dan pengelolaan aktivitas
                                terkait diabetes menggunakan Flutter.
                            </span>
                        </li>

                        <li class="flex gap-3">
                            <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-gray-400"></span>
                            <span>
                                Mengintegrasikan Firebase sebagai layanan backend
                                dan pengelolaan data aplikasi.
                            </span>
                        </li>

                        <li class="flex gap-3">
                            <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-gray-400"></span>
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
                                <img src="{{ asset('storage/projects/diabetes/diabetes (1).jpeg') }}"
                                    alt="Diabetes Self Management Education 1"
                                    class="h-full w-full object-contain object-center select-none" draggable="false">
                            </div>

                            {{-- Slide 2 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('storage/projects/diabetes/diabetes (2).jpeg') }}"
                                    alt="Diabetes Self Management Education 2"
                                    class="h-full w-full object-contain object-center select-none" draggable="false">
                            </div>

                            {{-- Slide 3 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('storage/projects/diabetes/diabetes (3).jpeg') }}"
                                    alt="Diabetes Self Management Education 3"
                                    class="h-full w-full object-contain object-center select-none" draggable="false">
                            </div>

                            {{-- Slide 4 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('storage/projects/diabetes/diabetes (4).jpeg') }}"
                                    alt="Diabetes Self Management Education 4"
                                    class="h-full w-full object-contain object-center select-none" draggable="false">
                            </div>

                        </div>
                    </div>

                    {{-- Controls & Indicator di Bawah Gambar --}}
                    <div class="mt-4 flex items-center justify-center gap-4">
                        <button type="button" data-carousel-prev aria-label="Previous project image"
                            class="flex h-8 w-8 items-center justify-center rounded-full border border-gray-200 text-gray-600 transition hover:bg-gray-100 hover:text-gray-900 active:scale-95">
                            <i class="fa-solid fa-chevron-left text-xs"></i>
                        </button>

                        <div class="text-xs font-semibold tracking-wider text-gray-500" data-carousel-indicator>
                            1 / 4
                        </div>

                        <button type="button" data-carousel-next aria-label="Next project image"
                            class="flex h-8 w-8 items-center justify-center rounded-full border border-gray-200 text-gray-600 transition hover:bg-gray-100 hover:text-gray-900 active:scale-95">
                            <i class="fa-solid fa-chevron-right text-xs"></i>
                        </button>
                    </div>
                </div>

            </article>


            {{-- Project 4 --}}
            <article class="grid gap-10 lg:grid-cols-2 lg:items-center lg:gap-16">

                {{-- Project Preview: Pensiun --}}
                <div class="group relative w-full" data-carousel>
                    {{-- Carousel Body & Image Wrapper --}}
                    <div class="relative aspect-16/10 w-full overflow-hidden ">
                        {{-- Slides Track --}}
                        <div class="flex h-full w-full transition-transform duration-500 ease-out" data-carousel-track>

                            {{-- Slide 1 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('storage/projects/pensiun/pensiun (1).png') }}"
                                    alt="Sistem Kepensiunan Pegawai Non-ASN 1"
                                    class="h-full w-full object-cover object-center select-none" draggable="false">
                            </div>

                            {{-- Slide 2 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('storage/projects/pensiun/pensiun (2).png') }}"
                                    alt="Sistem Kepensiunan Pegawai Non-ASN 2"
                                    class="h-full w-full object-cover object-center select-none" draggable="false">
                            </div>

                            {{-- Slide 3 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('storage/projects/pensiun/pensiun (3).png') }}"
                                    alt="Sistem Kepensiunan Pegawai Non-ASN 3"
                                    class="h-full w-full object-cover object-center select-none" draggable="false">
                            </div>

                            {{-- Slide 4 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('storage/projects/pensiun/pensiun (4).png') }}"
                                    alt="Sistem Kepensiunan Pegawai Non-ASN 4"
                                    class="h-full w-full object-cover object-center select-none" draggable="false">
                            </div>

                        </div>
                    </div>

                    {{-- Controls & Indicator di Bawah Gambar --}}
                    <div class="mt-4 flex items-center justify-center gap-4">
                        <button type="button" data-carousel-prev aria-label="Previous project image"
                            class="flex h-8 w-8 items-center justify-center rounded-full border border-gray-200 text-gray-600 transition hover:bg-gray-100 hover:text-gray-900 active:scale-95">
                            <i class="fa-solid fa-chevron-left text-xs"></i>
                        </button>

                        <div class="text-xs font-semibold tracking-wider text-gray-500" data-carousel-indicator>
                            1 / 4
                        </div>

                        <button type="button" data-carousel-next aria-label="Next project image"
                            class="flex h-8 w-8 items-center justify-center rounded-full border border-gray-200 text-gray-600 transition hover:bg-gray-100 hover:text-gray-900 active:scale-95">
                            <i class="fa-solid fa-chevron-right text-xs"></i>
                        </button>
                    </div>
                </div>


                {{-- Project Information --}}
                <div class="order-1 lg:order-2">

                    <p class="text-sm font-medium text-gray-400">
                        04
                    </p>

                    <h3 class="mt-3 text-3xl font-bold tracking-tight text-gray-900">
                        Sistem Kepensiunan Pegawai Non-ASN
                    </h3>

                    <div class="mt-4 flex flex-wrap gap-2">

                        <span class="rounded-full bg-gray-100 px-3 py-1 text-xs font-medium text-gray-600">
                            Laravel
                        </span>

                        <span class="rounded-full bg-gray-100 px-3 py-1 text-xs font-medium text-gray-600">
                            PHP
                        </span>

                        <span class="rounded-full bg-gray-100 px-3 py-1 text-xs font-medium text-gray-600">
                            MySQL
                        </span>

                    </div>

                    <p class="mt-6 text-sm font-medium text-gray-500">
                        Collaborative Project — Universitas Diponegoro
                    </p>

                    <ul class="mt-4 space-y-3 text-gray-600">

                        <li class="flex gap-3">
                            <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-gray-400"></span>
                            <span>
                                Berkontribusi pada pengembangan role Super Admin,
                                Supervisor, dan Pemroses.
                            </span>
                        </li>

                        <li class="flex gap-3">
                            <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-gray-400"></span>
                            <span>
                                Mengimplementasikan autentikasi dan pembatasan
                                akses berdasarkan role pengguna.
                            </span>
                        </li>

                        <li class="flex gap-3">
                            <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-gray-400"></span>
                            <span>
                                Mengembangkan fitur pengelolaan data, upload
                                dokumen, serta pemantauan status dan progres
                                proses pensiun.
                            </span>
                        </li>

                        <li class="flex gap-3">
                            <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-gray-400"></span>
                            <span>
                                Mengembangkan antarmuka menggunakan Laravel Blade
                                dan mengelola data menggunakan MySQL.
                            </span>
                        </li>

                    </ul>

                </div>

            </article>


            {{-- Project 5 --}}
            <article class="grid gap-10 lg:grid-cols-2 lg:items-center lg:gap-16">

                {{-- Project Information --}}
                <div>

                    <p class="text-sm font-medium text-gray-400">
                        05
                    </p>

                    <h3 class="mt-3 text-3xl font-bold tracking-tight text-gray-900">
                        Platform Layanan Bimble BBC
                    </h3>

                    <div class="mt-4 flex flex-wrap gap-2">

                        <span class="rounded-full bg-gray-100 px-3 py-1 text-xs font-medium text-gray-600">
                            Python
                        </span>

                        <span class="rounded-full bg-gray-100 px-3 py-1 text-xs font-medium text-gray-600">
                            MongoDB
                        </span>

                    </div>

                    <p class="mt-6 text-sm font-medium text-gray-500">
                        Collaborative Project — Real-world Case Study
                    </p>

                    <ul class="mt-4 space-y-3 text-gray-600">

                        <li class="flex gap-3">
                            <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-gray-400"></span>
                            <span>
                                Mengembangkan platform pendaftaran bimble berbasis
                                web untuk menampilkan layanan dan memungkinkan
                                pengguna melakukan pendaftaran.
                            </span>
                        </li>

                        <li class="flex gap-3">
                            <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-gray-400"></span>
                            <span>
                                Mengimplementasikan autentikasi serta sistem role
                                admin dan user.
                            </span>
                        </li>

                        <li class="flex gap-3">
                            <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-gray-400"></span>
                            <span>
                                Mengembangkan fitur layanan, pendaftaran, dan
                                fitur informatif lainnya.
                            </span>
                        </li>

                        <li class="flex gap-3">
                            <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-gray-400"></span>
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
                    <div class="relative aspect-16/10 w-full overflow-hidden">
                        {{-- Slides Track --}}
                        <div class="flex h-full w-full transition-transform duration-500 ease-out" data-carousel-track>

                            {{-- Slide 1 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('storage/projects/bimble/msib (1).png') }}" alt="Bimble BBC 1"
                                    class="h-full w-full object-cover object-center select-none" draggable="false">
                            </div>

                            {{-- Slide 2 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('storage/projects/bimble/msib (2).png') }}" alt="Bimble BBC 2"
                                    class="h-full w-full object-cover object-center select-none" draggable="false">
                            </div>

                            {{-- Slide 3 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('storage/projects/bimble/msib (3).png') }}" alt="Bimble BBC 3"
                                    class="h-full w-full object-cover object-center select-none" draggable="false">
                            </div>

                            {{-- Slide 4 --}}
                            <div class="flex h-full w-full min-w-full shrink-0 items-center justify-center">
                                <img src="{{ asset('storage/projects/bimble/msib (4).png') }}" alt="Bimble BBC 4"
                                    class="h-full w-full object-cover object-center select-none" draggable="false">
                            </div>

                        </div>
                    </div>

                    {{-- Controls & Indicator di Bawah Gambar --}}
                    <div class="mt-4 flex items-center justify-center gap-4">
                        <button type="button" data-carousel-prev aria-label="Previous project image"
                            class="flex h-8 w-8 items-center justify-center rounded-full border border-gray-200 text-gray-600 transition hover:bg-gray-100 hover:text-gray-900 active:scale-95">
                            <i class="fa-solid fa-chevron-left text-xs"></i>
                        </button>

                        <div class="text-xs font-semibold tracking-wider text-gray-500" data-carousel-indicator>
                            1 / 4
                        </div>

                        <button type="button" data-carousel-next aria-label="Next project image"
                            class="flex h-8 w-8 items-center justify-center rounded-full border border-gray-200 text-gray-600 transition hover:bg-gray-100 hover:text-gray-900 active:scale-95">
                            <i class="fa-solid fa-chevron-right text-xs"></i>
                        </button>
                    </div>
                </div>

            </article>

        </div>

    </div>
</section>

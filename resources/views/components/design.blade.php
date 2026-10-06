<section id="design" class="relative isolate overflow-hidden bg-background px-6 py-24 font-sans text-white lg:px-8">

    {{-- 1. Gradient Bulatan Putih Tipis (Pojok Kiri Atas) --}}
    <div class="white-spot-top-left z-0"></div>

    {{-- 2. Gradient Bulatan Putih Tipis (Pojok Kanan Bawah) --}}
    <div class="white-spot-bottom-right z-0"></div>

    {{-- 3. Grid Pattern Layer (Hanya Terlihat di Spot Gradient) --}}
    <div class="bg-grid-pattern mask-corner-spots pointer-events-none absolute inset-0 z-0 opacity-80"></div>
    
    <div class="mx-auto max-w-7xl">

        {{-- Section Header --}}
        <div class="reveal max-w-2xl" style="transition-delay: 100ms;">
            <p class="mb-4 text-sm font-semibold uppercase tracking-[0.2em] text-accent">
                Design & Creative
            </p>

            <h2 class="text-4xl font-bold leading-tight tracking-tight text-white sm:text-5xl">
                Visual work beyond development.
            </h2>

            <p class="mt-5 text-lg leading-8 text-gray-400">
                A collection of visual work including social media content, posters, flyers, and other creative projects created alongside my development work.
            </p>
        </div>

        {{-- Design Gallery --}}
        <div class="mt-14 columns-1 gap-5 sm:columns-2 lg:columns-5">

            {{-- Feed 1 --}}
            <div style="transition-delay: 150ms;"
                class="reveal group mb-5 break-inside-avoid overflow-hidden rounded-2xl border border-white bg-surface transition-colors duration-300 hover:border-accent/50">
                <img src="{{ asset('design/feed1.png') }}" alt="Social Media Design 1"
                    class="h-auto w-full cursor-zoom-in transition duration-500 group-hover:scale-[1.02]" loading="lazy"
                    data-lightbox-image>
            </div>

            {{-- Feed 2 --}}
            <div style="transition-delay: 200ms;"
                class="reveal group mb-5 break-inside-avoid overflow-hidden rounded-2xl border border-white bg-surface transition-colors duration-300 hover:border-accent/50">
                <img src="{{ asset('design/feed2.png') }}" alt="Social Media Design 2"
                    class="h-auto w-full cursor-zoom-in transition duration-500 group-hover:scale-[1.02]" loading="lazy"
                    data-lightbox-image>
            </div>

            {{-- Feed 3 --}}
            <div style="transition-delay: 250ms;"
                class="reveal group mb-5 break-inside-avoid overflow-hidden rounded-2xl border border-white bg-surface transition-colors duration-300 hover:border-accent/50">
                <img src="{{ asset('design/feed3.png') }}" alt="Social Media Design 3"
                    class="h-auto w-full cursor-zoom-in transition duration-500 group-hover:scale-[1.02]" loading="lazy"
                    data-lightbox-image>
            </div>

            {{-- Feed 4 --}}
            <div style="transition-delay: 300ms;"
                class="reveal group mb-5 break-inside-avoid overflow-hidden rounded-2xl border border-white bg-surface transition-colors duration-300 hover:border-accent/50">
                <img src="{{ asset('design/feed4.png') }}" alt="Social Media Design 4"
                    class="h-auto w-full cursor-zoom-in transition duration-500 group-hover:scale-[1.02]" loading="lazy"
                    data-lightbox-image>
            </div>

            {{-- Feed 5 --}}
            <div style="transition-delay: 350ms;"
                class="reveal group mb-5 break-inside-avoid overflow-hidden rounded-2xl border border-white bg-surface transition-colors duration-300 hover:border-accent/50">
                <img src="{{ asset('design/feed5.png') }}" alt="Social Media Design 5"
                    class="h-auto w-full cursor-zoom-in transition duration-500 group-hover:scale-[1.02]" loading="lazy"
                    data-lightbox-image>
            </div>

            {{-- Feed 6 --}}
            <div style="transition-delay: 400ms;"
                class="reveal group mb-5 break-inside-avoid overflow-hidden rounded-2xl border border-white bg-surface transition-colors duration-300 hover:border-accent/50">
                <img src="{{ asset('design/feed6.png') }}" alt="Social Media Design 6"
                    class="h-auto w-full cursor-zoom-in transition duration-500 group-hover:scale-[1.02]" loading="lazy"
                    data-lightbox-image>
            </div>

            {{-- Frame Story --}}
            <div style="transition-delay: 450ms;"
                class="reveal group mb-5 break-inside-avoid overflow-hidden rounded-2xl border border-white bg-white transition-colors duration-300 hover:border-accent/50">
                <img src="{{ asset('design/frameStory.png') }}" alt="Story Frame Design"
                    class="h-auto w-full cursor-zoom-in transition duration-500 group-hover:scale-[1.02]" loading="lazy"
                    data-lightbox-image>
            </div>

            {{-- Poster 1 --}}
            <div style="transition-delay: 500ms;"
                class="reveal group mb-5 break-inside-avoid overflow-hidden rounded-2xl border border-white bg-surface transition-colors duration-300 hover:border-accent/50">
                <img src="{{ asset('design/poster1.jpg') }}" alt="Poster Design 1"
                    class="h-auto w-full cursor-zoom-in transition duration-500 group-hover:scale-[1.02]" loading="lazy"
                    data-lightbox-image>
            </div>

            {{-- Poster 2 --}}
            <div style="transition-delay: 550ms;"
                class="reveal group mb-5 break-inside-avoid overflow-hidden rounded-2xl border border-white bg-surface transition-colors duration-300 hover:border-accent/50">
                <img src="{{ asset('design/poster2.png') }}" alt="Poster Design 2"
                    class="h-auto w-full cursor-zoom-in transition duration-500 group-hover:scale-[1.02]" loading="lazy"
                    data-lightbox-image>
            </div>

            {{-- Story --}}
            <div style="transition-delay: 600ms;"
                class="reveal group mb-5 break-inside-avoid overflow-hidden rounded-2xl border border-white bg-surface transition-colors duration-300 hover:border-accent/50">
                <img src="{{ asset('design/story.png') }}" alt="Story Design"
                    class="h-auto w-full cursor-zoom-in transition duration-500 group-hover:scale-[1.02]" loading="lazy"
                    data-lightbox-image>
            </div>

        </div>

    </div>

    {{-- Lightbox --}}
    <div id="design-lightbox" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/90 p-6 backdrop-blur-md"
        aria-hidden="true">
        {{-- Close Button --}}
        <button type="button" id="lightbox-close" aria-label="Close image preview"
            class="absolute right-6 top-6 z-10 flex h-10 w-10 items-center justify-center rounded-full bg-white/10 text-xl text-white backdrop-blur-sm transition hover:bg-accent hover:text-black">
            <i class="fa-solid fa-xmark"></i>
        </button>

        {{-- Image --}}
        <img id="lightbox-image" src="" alt=""
            class="max-h-[75vh] max-w-[90vw] rounded-xl border border-white object-contain shadow-2xl">
    </div>
</section>
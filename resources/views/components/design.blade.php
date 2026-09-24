<section id="design" class="px-6 py-24 lg:px-8">
    <div class="mx-auto max-w-7xl">

        {{-- Section Header --}}
        <div class="max-w-2xl">
            <p class="mb-4 text-sm font-semibold uppercase tracking-[0.2em] text-gray-500">
                Design & Creative
            </p>

            <h2 class="text-4xl font-bold leading-tight tracking-tight text-gray-900 sm:text-5xl">
                Visual work beyond development.
            </h2>

            <p class="mt-5 text-lg leading-8 text-gray-600">
                A collection of visual work including social media
                designs, posters, and other creative projects.
            </p>
        </div>

        {{-- Design Gallery --}}
        <div class="mt-14 columns-1 gap-5 sm:columns-2 lg:columns-5">

            {{-- Feed 1 --}}
            <div class="group mb-5 break-inside-avoid overflow-hidden rounded-2xl border border-gray-200 bg-gray-50">
                <img src="{{ asset('design/feed1.png') }}" alt="Social Media Design 1"
                    class="h-auto w-full cursor-zoom-in transition duration-500 group-hover:scale-[1.02]" loading="lazy"
                    data-lightbox-image>
            </div>

            {{-- Feed 2 --}}
            <div class="group mb-5 break-inside-avoid overflow-hidden rounded-2xl border border-gray-200 bg-gray-50">
                <img src="{{ asset('design/feed2.png') }}" alt="Social Media Design 2"
                    class="h-auto w-full cursor-zoom-in transition duration-500 group-hover:scale-[1.02]" loading="lazy"
                    data-lightbox-image>
            </div>

            {{-- Feed 3 --}}
            <div class="group mb-5 break-inside-avoid overflow-hidden rounded-2xl border border-gray-200 bg-gray-50">
                <img src="{{ asset('design/feed3.png') }}" alt="Social Media Design 3"
                    class="h-auto w-full cursor-zoom-in transition duration-500 group-hover:scale-[1.02]" loading="lazy"
                    data-lightbox-image>
            </div>

            {{-- Feed 4 --}}
            <div class="group mb-5 break-inside-avoid overflow-hidden rounded-2xl border border-gray-200 bg-gray-50">
                <img src="{{ asset('design/feed4.png') }}" alt="Social Media Design 4"
                    class="h-auto w-full cursor-zoom-in transition duration-500 group-hover:scale-[1.02]" loading="lazy"
                    data-lightbox-image>
            </div>

            {{-- Feed 5 --}}
            <div class="group mb-5 break-inside-avoid overflow-hidden rounded-2xl border border-gray-200 bg-gray-50">
                <img src="{{ asset('design/feed5.png') }}" alt="Social Media Design 5"
                    class="h-auto w-full cursor-zoom-in transition duration-500 group-hover:scale-[1.02]" loading="lazy"
                    data-lightbox-image>
            </div>

            {{-- Feed 6 --}}
            <div class="group mb-5 break-inside-avoid overflow-hidden rounded-2xl border border-gray-200 bg-gray-50">
                <img src="{{ asset('design/feed6.png') }}" alt="Social Media Design 6"
                    class="h-auto w-full cursor-zoom-in transition duration-500 group-hover:scale-[1.02]" loading="lazy"
                    data-lightbox-image>
            </div>

            {{-- Frame Story --}}
            <div class="group mb-5 break-inside-avoid overflow-hidden rounded-2xl border border-gray-200 bg-gray-50">
                <img src="{{ asset('design/frameStory.png') }}" alt="Story Frame Design"
                    class="h-auto w-full cursor-zoom-in transition duration-500 group-hover:scale-[1.02]" loading="lazy"
                    data-lightbox-image>
            </div>

            {{-- Poster 1 --}}
            <div class="group mb-5 break-inside-avoid overflow-hidden rounded-2xl border border-gray-200 bg-gray-50">
                <img src="{{ asset('design/poster1.jpg') }}" alt="Poster Design 1"
                    class="h-auto w-full cursor-zoom-in transition duration-500 group-hover:scale-[1.02]" loading="lazy"
                    data-lightbox-image>
            </div>

            {{-- Poster 2 --}}
            <div class="group mb-5 break-inside-avoid overflow-hidden rounded-2xl border border-gray-200 bg-gray-50">
                <img src="{{ asset('design/poster2.png') }}" alt="Poster Design 2"
                    class="h-auto w-full cursor-zoom-in transition duration-500 group-hover:scale-[1.02]" loading="lazy"
                    data-lightbox-image>
            </div>

            {{-- Story --}}
            <div class="group mb-5 break-inside-avoid overflow-hidden rounded-2xl border border-gray-200 bg-gray-50">
                <img src="{{ asset('design/story.png') }}" alt="Story Design"
                    class="h-auto w-full cursor-zoom-in transition duration-500 group-hover:scale-[1.02]" loading="lazy"
                    data-lightbox-image>
            </div>

        </div>

    </div>

    {{-- Lightbox --}}
    <div id="design-lightbox" class="fixed inset-0 z-100 hidden items-center justify-center bg-black/80 p-6"
        aria-hidden="true">
        {{-- Close Button --}}
        <button type="button" id="lightbox-close" aria-label="Close image preview"
            class="absolute right-6 top-6 z-10 flex h-10 w-10 items-center justify-center rounded-full bg-white/10 text-xl text-white backdrop-blur-sm transition hover:bg-white/20">
            <i class="fa-solid fa-xmark"></i>
        </button>

        {{-- Image --}}
        <img id="lightbox-image" src="" alt=""
            class="max-h-[90vh] max-w-[90vw] rounded-lg object-contain shadow-2xl">
    </div>
</section>

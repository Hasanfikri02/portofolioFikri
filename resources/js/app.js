document.addEventListener('DOMContentLoaded', () => {
    const carousels = document.querySelectorAll('[data-carousel]');

    carousels.forEach((carousel) => {
        const track = carousel.querySelector('[data-carousel-track]');
        const prevButton = carousel.querySelector('[data-carousel-prev]');
        const nextButton = carousel.querySelector('[data-carousel-next]');
        const indicator = carousel.querySelector('[data-carousel-indicator]');

        if (!track) return;

        const slides = track.children;

        if (slides.length === 0) return;

        let currentIndex = 0;

        const updateCarousel = () => {
            track.style.transform = `translateX(-${currentIndex * 100}%)`;

            if (indicator) {
                indicator.textContent = `${currentIndex + 1} / ${slides.length}`;
            }
        };

        const nextSlide = () => {
            currentIndex = (currentIndex + 1) % slides.length;
            updateCarousel();
        };

        const previousSlide = () => {
            currentIndex = (currentIndex - 1 + slides.length) % slides.length;
            updateCarousel();
        };

        if (nextButton) {
            nextButton.addEventListener('click', nextSlide);
        }

        if (prevButton) {
            prevButton.addEventListener('click', previousSlide);
        }

        // Touch & Swipe Support
        let startX = 0;
        let isDragging = false;

        track.addEventListener(
            'touchstart',
            (event) => {
                startX = event.touches[0].clientX;
                isDragging = true;
            },
            { passive: true }
        );

        track.addEventListener(
            'touchend',
            (event) => {
                if (!isDragging) return;

                const endX = event.changedTouches[0].clientX;
                const difference = startX - endX;

                if (Math.abs(difference) > 40) {
                    if (difference > 0) {
                        nextSlide();
                    } else {
                        previousSlide();
                    }
                }

                isDragging = false;
            },
            { passive: true }
        );

        updateCarousel();
    });

    // Design Lightbox
    const lightbox = document.getElementById('design-lightbox');
    const lightboxImage = document.getElementById('lightbox-image');
    const lightboxClose = document.getElementById('lightbox-close');
    const lightboxImages = document.querySelectorAll('[data-lightbox-image]');

    if (lightbox && lightboxImage && lightboxClose) {
        const openLightbox = (image) => {
            lightboxImage.src = image.src;
            lightboxImage.alt = image.alt;

            lightbox.classList.remove('hidden');
            lightbox.classList.add('flex');

            document.body.classList.add('overflow-hidden');
        };

        const closeLightbox = () => {
            lightbox.classList.add('hidden');
            lightbox.classList.remove('flex');

            lightboxImage.src = '';
            lightboxImage.alt = '';

            document.body.classList.remove('overflow-hidden');
        };

        lightboxImages.forEach((image) => {
            image.addEventListener('click', () => {
                openLightbox(image);
            });
        });

        lightboxClose.addEventListener('click', closeLightbox);

        lightbox.addEventListener('click', (event) => {
            if (event.target === lightbox) {
                closeLightbox();
            }
        });

        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape' && !lightbox.classList.contains('hidden')) {
                closeLightbox();
            }
        });
    }


    // Mobile Navbar
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuIcon = document.getElementById('mobile-menu-icon');
    const mobileMenuLinks = document.querySelectorAll('.mobile-menu-link');

    if (mobileMenuButton && mobileMenu && mobileMenuIcon) {
        const toggleMobileMenu = () => {
            const isOpen = !mobileMenu.classList.contains('hidden');

            mobileMenu.classList.toggle('hidden');

            mobileMenuIcon.classList.toggle('fa-bars', isOpen);
            mobileMenuIcon.classList.toggle('fa-xmark', !isOpen);

            mobileMenuButton.setAttribute('aria-expanded', String(!isOpen));
        };

        mobileMenuButton.addEventListener('click', toggleMobileMenu);

        mobileMenuLinks.forEach((link) => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');

                mobileMenuIcon.classList.remove('fa-xmark');
                mobileMenuIcon.classList.add('fa-bars');

                mobileMenuButton.setAttribute('aria-expanded', 'false');
            });
        });
    }
});
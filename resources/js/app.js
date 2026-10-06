document.addEventListener('DOMContentLoaded', () => {
    const reveals = document.querySelectorAll(".reveal");

    if (reveals.length > 0) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    // Ketika elemen masuk ke layar -> Tambahkan animasi
                    entry.target.classList.add("active");
                } else {
                    // Ketika elemen keluar dari layar -> Reset animasi
                    entry.target.classList.remove("active");
                }
            });
        }, {
            threshold: 0.15 // Elemen terpicu jika minimal 15% bagiannya terlihat
        });

        reveals.forEach((el) => observer.observe(el));
    }
// ==========================================
// 3D Point-Wave Canvas Background (Double Mirror)
// ==========================================
const canvas = document.getElementById('bgCanvas');
if (canvas) {
    const ctx = canvas.getContext('2d');
    let W = (canvas.width = canvas.parentElement ? canvas.parentElement.clientWidth : window.innerWidth);
    let H = (canvas.height = canvas.parentElement ? canvas.parentElement.clientHeight : window.innerHeight);
    let pixels = [];

    function initPixels() {
        pixels = [];
        // Rentang grid X dan Z
        for (let x = -400; x < 400; x += 5) {
            for (let z = -250; z < 250; z += 5) {
                pixels.push({ x: x, y: 0, z: z });
            }
        }
    }

    initPixels();

    window.addEventListener('resize', () => {
        if (canvas.parentElement) {
            W = canvas.width = canvas.parentElement.clientWidth;
            H = canvas.height = canvas.parentElement.clientHeight;
        } else {
            W = canvas.width = window.innerWidth;
            H = canvas.height = window.innerHeight;
        }
    });

    function render(ts) {
        const imageData = ctx.getImageData(0, 0, W, H);
        const len = pixels.length;
        const fov = 250;
        let pixel, scale, x2d, y2d_top, y2d_bottom, cTop, cBottom;

        // Fungsi helper kecil untuk set pixel warna hijau (#BBFE01)
        const setPixelColor = (x, y) => {
            if (x >= 0 && x <= W && y >= 0 && y <= H) {
                const index = (Math.round(y) * imageData.width + Math.round(x)) * 4;
                imageData.data[index] = 187;     // R
                imageData.data[index + 1] = 254; // G
                imageData.data[index + 2] = 1;   // B
                imageData.data[index + 3] = 255; // Alpha
            }
        };

        for (let i = 0; i < len; i++) {
            pixel = pixels[i];
            scale = fov / (fov + pixel.z);
            x2d = pixel.x * scale + W / 2;
            
            // 1. GELOMBANG ATAS (Menghadap / Melengkung ke Atas)
            // Offset di area 15% dari atas canvas
            y2d_top = pixel.y * scale + (H * 0.50);
            setPixelColor(x2d, y2d_top);

            // 2. GELOMBANG BAWAH (Mirror / Lawan Arah ke Bawah)
            // Menggunakan -pixel.y agar gelombangnya terbalik penuh
            // Offset di area 85% dari atas canvas (di bagian bawah)
            y2d_bottom = (-pixel.y) * scale + (H * 0.50);
            setPixelColor(x2d, y2d_bottom);

            // Pergerakan Z (maju)
            pixel.z -= 0.4;
            
            // Pergerakan Gelombang Y
            pixel.y = -80 + Math.sin((i / len) * 15 + ts / 450) * 18;

            // Reset loop kedalaman Z
            if (pixel.z < -fov) pixel.z += 2 * fov;
        }

        ctx.putImageData(imageData, 0, 0);
    }

    function drawFrame(ts) {
        requestAnimationFrame(drawFrame);
        ctx.fillStyle = '#000000';
        ctx.fillRect(0, 0, W, H);
        render(ts);
    }

    requestAnimationFrame(drawFrame);
}

    // ==========================================
    // Carousel & Kode JS Anda Selanjutnya...
    // ==========================================
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
<section id="testimonies" class="bg-gray-50 dark:bg-gray-800 px-6 py-10 flex flex-col items-center">
    <!-- Title -->
    <h1 class="font-bold text-5xl text-white mb-8">
        Apa yang
        <span class="text-blue-600 underline underline-offset-4">Client</span>
        Katakan!
    </h1>

    <div class="swiper">
        <div class="swiper-wrapper max-w-[72rem] mb-16">
            <div class="swiper-slide text-white bg-gray-700 rounded-xl p-8 max-w-xl">
                <div class="flex items-center gap-8">
                    <div class="flex flex-col items-center font-bold">
                        <img src="{{ asset('assets/AboutUs.png') }}" class="w-60 aspect-square object-cover rounded-lg">
                        <h3>Alex Johnson</h3>
                        <h3>Mahasiswa IT</h3>
                    </div>
                    <p class="text-lg">
                        Hasil kerja mereka luar biasa! Sangat merekomendasikan kepada siapa pun yang butuh jasa
                        profesional. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>
            </div>
            <div class="swiper-slide text-white bg-gray-700 rounded-xl p-8 max-w-xl">
                <div class="flex items-center gap-8">
                    <div class="flex flex-col items-center font-bold">
                        <img src="{{ asset('assets/AboutUs.png') }}" class="w-60 aspect-square object-cover rounded-lg">
                        <h3>Alex Johnson</h3>
                        <h3>Mahasiswa IT</h3>
                    </div>
                    <p class="text-lg">
                        Hasil kerja mereka luar biasa! Sangat merekomendasikan kepada siapa pun yang butuh jasa
                        profesional. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>
            </div>
            <div class="swiper-slide text-white bg-gray-700 rounded-xl p-8 max-w-xl">
                <div class="flex items-center gap-8">
                    <div class="flex flex-col items-center font-bold">
                        <img src="{{ asset('assets/AboutUs.png') }}" class="w-60 aspect-square object-cover rounded-lg">
                        <h3>Alex Johnson</h3>
                        <h3>Mahasiswa IT</h3>
                    </div>
                    <p class="text-lg">
                        Hasil kerja mereka luar biasa! Sangat merekomendasikan kepada siapa pun yang butuh jasa
                        profesional. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>

        <!-- Navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const swiper = new Swiper('.swiper', {
            loop: true,
            speed: 400,
            spaceBetween: 16, // Adds spacing between slides

            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },

            slidesPerView: 3, // Ensure one slide is visible at a time
            // centeredSlides: true, // Centers the active slide
        });
    });
</script>

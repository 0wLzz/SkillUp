<!-- Testimonies Section -->
<section id="testimonies" class="bg-gray-50 dark:bg-gray-800 px-6 py-12 flex flex-col items-center">
    <!-- Title -->
    <h1 class="font-bold text-5xl text-white">
        Apa yang
        <span class="text-blue-600 underline underline-offset-4">Client</span> 
        Katakan!
    </h1>

    <!-- Testimony Wrapper (Centering Applied) -->
    <div class="flex items-center gap-8 mt-8 w-full max-w-screen-xl justify-center">
        <!-- Prev Button -->
        <button id="prev-testimony" type="button" class="max-h-10 px-4 py-2 rounded-full bg-gray-900 hover:bg-gray-400">
            <svg class="w-4 h-4 text-white dark:text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
        </button>
    
        <div id="testimonyWrapper" class="flex items-center shrink-0 gap-4 w-full max-w-264 overflow-hidden">
            <!-- Testimonials -->
            <div class="testimonial text-white bg-gray-700 rounded-xl p-8 min-w-lg max-w-lg h-full">
                <div class="flex items-center gap-8">
                    <div class="flex flex-col items-center font-bold w-1/3">
                        <img src="{{asset('assets/AboutUs.png')}}" class="w-60 aspect-square object-cover rounded-lg">
                        <h3>Cecily Villarreal</h3>
                        <h3>Mahasiswa CS</h3>
                    </div>
                    <p class="text-lg w-2/3 flex-grow">
                        Saya berkesempatan bekerja dengan Client dalam sebuah proyek untuk kebutuhan saya, dan saya sangat puas dengan hasilnya. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>
            </div>
    
            <div class="testimonial text-white bg-gray-700 rounded-xl p-8 min-w-lg max-w-lg h-full">
                <div class="flex items-center gap-8">
                    <div class="flex flex-col items-center font-bold w-1/3">
                        <img src="{{asset('assets/AboutUs.png')}}" class="w-60 aspect-square object-cover rounded-lg">
                        <h3>Alex Johnson</h3>
                        <h3>Mahasiswa IT</h3>
                    </div>
                    <p class="text-lg w-2/3 flex-grow">
                        Hasil kerja mereka luar biasa! Sangat merekomendasikan kepada siapa pun yang butuh jasa profesional. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>
            </div>
    
            <div class="testimonial text-white bg-gray-700 rounded-xl p-8 min-w-lg max-w-lg h-full">
                <div class="flex items-center gap-8">
                    <div class="flex flex-col items-center font-bold w-1/3">
                        <img src="{{asset('assets/AboutUs.png')}}" class="w-60 aspect-square object-cover rounded-lg">
                        <h3>Alex Johnson</h3>
                        <h3>Mahasiswa IT</h3>
                    </div>
                    <p class="text-lg w-2/3 flex-grow">
                        Hasil kerja mereka luar biasa! Sangat merekomendasikan kepada siapa pun yang butuh jasa profesional. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>
            </div>
        </div>        
    
        <!-- Next Button -->
        <button id="next-testimony" type="button" class="max-h-10 px-4 py-2 rounded-full bg-gray-900 hover:bg-gray-400 order-3">
            <svg class="w-4 h-4 text-white dark:text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
        </button>
    </div>
</section>
<!-- End block -->
<section id="hero" class="bg-gray-900">
    <div class="grid max-w-screen-xl p-6 mx-auto grid-cols-12">
        <div class="mr-auto place-self-center col-span-7">
            <h1
                class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">
                Learn Real World Skill <br>with <span class="dark:text-blue-500">SkillUp!</span></h1>

            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad iusto perferendis modi eveniet eos, enim
                iure dicta rerum eligendi nobis distinctio accusantium neque tempora deserunt. Architecto, fugiat quis.
                Perferendis, incidunt? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi numquam quia iusto
                eos deleniti, accusamus vitae porro minima doloremque qui magni fugit eveniet optio voluptatibus error
                provident possimus consequatur praesentium?
            </p>
        </div>

        {{-- Hero Images --}}
        <div class="mt-0 col-span-5 flex">
            <div id="default-carousel" class="relative w-full h-96 overflow-hidden rounded-lg" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative w-full h-full">
                    <!-- Item 1 -->
                    <div class="duration-700 ease-in-out" data-carousel-item="active">
                        <img src="{{ asset('assets/default.jpg') }}" class="aspect-3/2 object-cover rounded-lg">
                    </div>

                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('assets/default.jpg') }}" class="aspect-3/2 object-cover rounded-lg">
                    </div>
                </div>

                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                </div>

                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>

                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

        </div>
    </div>
</section>

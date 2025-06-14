<!-- Courses -->
<section id="courses">
    <div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-10 lg:py-10 lg:px-6">
        <!-- Row -->
        <div class="text-center py-10 px-6">
            <h1
                class="mb-6 text-4xl font-extrabold leading-tight tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                Discover <mark
                    class="px-3 py-1 text-white bg-gradient-to-r from-blue-600 to-indigo-600 rounded dark:from-blue-500 dark:to-purple-500">New
                    COURSES</mark> to Elevate Your Skills!
            </h1>
            <p class="text-lg font-medium text-gray-600 lg:text-xl dark:text-gray-400 max-w-2xl mx-auto">
                Di <span class="font-semibold text-blue-600 dark:text-blue-400">SkillUp</span>, kami menghubungkan Anda
                dengan kursus siap pakai untuk industri dan tutor kelas dunia — semua dirancang untuk membantu Anda
                berkembang lebih cepat dan lebih cerdas.
            </p>

        </div>

        {{-- <div id="category-carousel"
            class="items-center relative w-full text-center bg-gray-900 rounded drop-shadow-xl text-gray-500 sm:text-lg dark:text-gray-400">
            <!-- Category Display -->
            <div class="relative h-16 flex items-center justify-center text-2xl font-bold gap-24">
                <span id="category-label-1" class="text-blue-400">Leadership</span>
                <span id="category-label-2" class="">Communication</span>
                <span id="category-label-3" class="">Problem Solving</span>
                <span id="category-label-4" class="">Time Managment</span>
            </div>

            <!-- Slider controls -->
            <button id="prev-category" type="button"
                class="absolute left-0 top-1/2 transform -translate-y-1/2 px-4 py-2">
                <svg class="w-4 h-4 text-white dark:text-gray-400 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
            </button>

            <button id="next-category" type="button"
                class="absolute right-0 top-1/2 transform -translate-y-1/2 px-4 py-2">
                <svg class="w-4 h-4 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
            </button>
        </div> --}}

        {{-- Courses --}}
        <div class="grid grid-cols-4 gap-8">
            @foreach ($courses->take(12) as $course)
                <x-card.course-card :course="$course" />
            @endforeach

        </div>

        <div class="flex justify-center items-center">
            <a href="{{ route('course_page') }}"
                class="text-white font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 bg-blue-700 hover:bg-blue-600 focus:outline-none focus:ring-blue-800">
                Lihat Lebih Banyak >
            </a>
        </div>
    </div>
</section>
<!-- End block -->

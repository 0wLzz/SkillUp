<x-layout>
    <section class="bg-gradient-to-b from-gray-900 to-gray-800 min-h-screen pb-8 ">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Breadcrumb Navigation -->
            <nav class="flex py-6" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="{{ route('home_page') }}"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <a href="{{ route('home_page') }}"
                                class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Tutors</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span
                                class="ms-1 text-sm font-medium text-blue-600 md:ms-2 dark:text-gray-400">{{ $tutor->name }}</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Course Header Section -->
            <div class="grid grid-cols-1 lg:grid-cols-2 mb-16">
                <!-- Course Card -->
                <div
                    class="w-128 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl shadow-lg overflow-hidden transition-transform">
                    <div class="relative">
                        <img class="w-full h-100 object-cover"
                            src="{{ $tutor->image ? asset('storage/' . $tutor->image) : asset('assets/default-teacher.jpg') }}"
                            alt="Course Cover">
                    </div>

                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                {{-- Category --}}
                                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mt-1"> {{ $tutor->name }}
                                </h2>
                                <p class="text-blue-600 dark:text-blue-400 font-semibold"> {{ $tutor->occupation }} </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course Details -->
                <div class="text-gray-900 dark:text-white">
                    <h1 class="text-3xl md:text-4xl font-bold mb-6">Tutor Description</h1>

                    <div class="prose dark:prose-invert max-w-none mb-8">
                        <p class="text-lg text-gray-700 dark:text-gray-300 mb-4">
                            {{ $tutor->description }}
                        </p>
                    </div>

                    <div class="prose dark:prose-invert max-w-none mb-8">
                        <div class="bg-blue-50 dark:bg-gray-800 p-4 rounded-lg border-l-4 border-blue-500 mb-8">
                            <h3 class="font-bold text-blue-700 dark:text-blue-400 mb-2">Tutor softskills:</h3>
                            <ul class="list-disc pl-5 space-y-1">
                                <li>Communication</li>
                                <li>Time Management</li>
                                <li>Relation</li>
                                <li>Information Gathering</li>
                                <li>Problem Solving</li>
                            </ul>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-yellow-400 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>

                        <p class="text-sm font-bold text-gray-900 dark:text-white">4.95 instructor rating</p>
                        <span class="w-1 h-1 mx-2 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                        <p class="text-sm text-gray-600 dark:text-gray-300">2,345 reviews</p>
                        <span class="w-1 h-1 mx-2 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                        <p class="text-sm text-gray-600 dark:text-gray-300">15,678 students</p>
                        <span class="w-1 h-1 mx-2 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                        <p class="text-sm text-gray-600 dark:text-gray-300">8 courses</p>

                    </div>
                </div>
            </div>

            <!-- Courses Section -->
            <div class="bg-gray-800 p-12">
                <div class="rounded-lg mx-auto container">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-bold text-white">Tutor Courses</h2>
                    </div>

                    <!-- Course Grid -->
                    <div class="grid grid-cols-4 gap-6">
                        <!-- Course Card 1 -->
                        @forelse ($ownedCourse as $course)
                            <div
                                class="bg-gray-700 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                                <a href="{{ route('course_detail', $course) }}">
                                    <img src="{{ $course->thumbnail ? asset('storage/' . $course->thumbnail) : asset('assets/course-default.png') }}"
                                        alt="Course Image" class="w-full object-cover aspect-video">
                                </a>
                                <div class="p-4">
                                    <div class="flex justify-between items-start">
                                        <h3 class="text-lg font-semibold text-white mb-2">{{ $course->title }}</h3>
                                        <span class="bg-blue-500 text-white text-xs px-2 py-1 rounded">Active</span>
                                    </div>
                                    <p class="text-gray-300 text-sm mb-4">{{ $course->subtitle }}</p>
                                    <div class="flex justify-between items-center">
                                        <div class="flex items-center text-yellow-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <span class="ml-1 text-sm">4.8</span>
                                        </div>
                                        <span class="text-gray-400 text-sm">{{ $course->curriculums->count() }}
                                            Lessons</span>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div
                                class="flex flex-col items-center justify-center py-12 text-center text-gray-400 col-span-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-4 text-gray-300"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M12 2a10 10 0 100 20 10 10 0 000-20z" />
                                </svg>
                                <p class="text-lg font-semibold">No courses</p>
                                <p class="text-sm text-gray-500 mt-1">Wait for the tutor to add one</p>
                            </div>
                        @endforelse

                        <!-- Add New Course Card -->
                        <div id="addCourseCard"
                            class="hidden bg-gray-700 rounded-lg border-2 border-dashed border-gray-600 hover:border-gray-500 transition-colors">
                            <div class="h-full flex flex-col items-center justify-center p-6">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400 mb-3"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                                <h3 class="text-lg font-semibold text-white mb-2">Add New Course</h3>
                                <form id="courseForm" class="w-full space-y-4" method="POST"
                                    action="{{ route('courses.store') }}">
                                    @csrf
                                    <div>
                                        <label for="courseTitle"
                                            class="block text-sm font-medium text-gray-300 mb-1">Course
                                            Title</label>
                                        <input type="text" id="courseTitle" name="title"
                                            class="w-full bg-gray-800 border border-gray-600 text-white rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    </div>
                                    <div>
                                        <label for="courseDescription"
                                            class="block text-sm font-medium text-gray-300 mb-1">Description</label>
                                        <textarea id="courseDescription" rows="3" name="description"
                                            class="w-full bg-gray-800 border border-gray-600 text-white rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                                    </div>
                                    <div class="flex gap-3">
                                        <button type="submit"
                                            class="flex-1 bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg">Save</button>
                                        <button type="button" id="cancelAddCourse"
                                            class="flex-1 bg-gray-600 hover:bg-gray-700 text-white py-2 px-4 rounded-lg">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <script>
        // Initialize accordion functionality
        document.querySelectorAll('[data-accordion-target]').forEach(button => {
            button.addEventListener('click', () => {
                const targetId = button.getAttribute('data-accordion-target');
                const target = document.querySelector(targetId);
                const isExpanded = button.getAttribute('aria-expanded') === 'true';

                // Toggle visibility
                target.classList.toggle('hidden');
                button.setAttribute('aria-expanded', !isExpanded);

                // Rotate icon
                const icon = button.querySelector('[data-accordion-icon]');
                icon.classList.toggle('rotate-180');
            });
        });
    </script>
</x-layout>

<x-layout>
    <!-- Courses Section -->
    <div class="bg-gray-800 p-12 min-h-screen">
        <div class="rounded-lg mx-auto container">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-white">Owned Courses</h2>
            </div>

            <!-- Course Grid -->
            <div class="grid grid-cols-4 gap-6">
                <!-- Course Card 1 -->
                @forelse ($ownedCourse as $course)
                    <div class="bg-gray-700 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
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
                    <div class="flex flex-col items-center justify-center py-12 text-center text-gray-400 col-span-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-4 text-gray-300" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M12 2a10 10 0 100 20 10 10 0 000-20z" />
                        </svg>
                        <p class="text-lg font-semibold">No courses</p>
                        <p class="text-sm text-gray-500 mt-1">Go buy take a course now!</p>
                        <a href="{{ route('course_page') }}"
                            class="text-white font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 bg-blue-700 hover:bg-blue-600 focus:outline-none focus:ring-blue-800">
                            Lihat Lebih Banyak >
                        </a>
                    </div>
                @endforelse

            </div>
        </div>
    </div>
</x-layout>

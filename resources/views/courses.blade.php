<x-layout>
    <section class="bg-gradient-to-b from-gray-900 to-gray-800 min-h-screen pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Hero Section -->
            <div class="text-center py-20">
                <h1 class="text-5xl md:text-6xl font-extrabold text-white mb-6">
                    <span class="relative inline-block">
                        <span class="absolute inset-0 bg-blue-600 transform -skew-x-12"></span>
                        <span class="relative px-4 text-white">Expand Your Skills</span>
                    </span>
                    <span class="block mt-4 text-4xl font-light text-blue-300">With Our Top Courses</span>
                </h1>
                <p class="mt-6 max-w-2xl mx-auto text-xl text-gray-300">
                    Discover expert-led courses to advance your career and personal growth.
                </p>
            </div>

            <!-- Featured Courses -->
            <div class="mb-16">
                <h2 class="text-3xl font-bold text-white mb-8 flex items-center">
                    <span class="w-4 h-8 bg-blue-600 mr-4"></span>
                    Featured Courses
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($featured->take(6) as $feature)
                        <x-card.course-card :course="$feature" />
                    @endforeach
                </div>
            </div>

            <!-- All Courses -->
            <div>
                <div class="flex justify-between items-center mb-8">
                    <h2 class="text-3xl font-bold text-white flex items-center">
                        <span class="w-4 h-8 bg-blue-600 mr-4"></span>
                        All Courses
                    </h2>
                    <div class="flex space-x-4">
                        <select
                            class="bg-gray-700 text-white px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option>Filter</option>
                            <option>Popular</option>
                            <option>Newest</option>
                            <option>Highest Rated</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-4 gap-8 mb-8">
                    @forelse ($courses as $course)
                        <x-card.course-card :course="$course" />
                    @empty
                        <div
                            class="flex flex-col items-center justify-center py-12 text-center text-gray-400 col-span-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-4 text-gray-300" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M12 2a10 10 0 100 20 10 10 0 000-20z" />
                            </svg>
                            <p class="text-lg font-semibold">No courses found</p>
                            <p class="text-sm text-gray-500 mt-1">Try adjusting your search or check back later.</p>
                        </div>
                    @endforelse
                </div>
                {{ $courses->links() }}
            </div>
        </div>
    </section>
</x-layout>

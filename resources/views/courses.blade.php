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
                    <x-card.course featured="true" />
                    <x-card.course featured="true" />
                    <x-card.course featured="true" />
                </div>
            </div>

            <!-- Category Carousel -->
            <div
                class="mb-16 items-center relative w-full text-center bg-gray-900 rounded drop-shadow-xl text-gray-500 sm:text-lg dark:text-gray-400">

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
                    <svg class="w-4 h-4 text-gray-400 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                </button>
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
                        <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg transition-colors">
                            View All
                        </button>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                    <x-card.course />
                    <x-card.course />
                    <x-card.course />
                    <x-card.course />
                    <x-card.course />
                    <x-card.course />
                    <x-card.course />
                    <x-card.course />
                </div>

                <div class="mt-12 flex justify-center">
                    <button class="bg-gray-700 hover:bg-gray-600 text-white px-8 py-3 rounded-lg transition-colors">
                        Load More Courses
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <div class="bg-gray-800 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h3 class="text-2xl font-bold text-white mb-4">Stay Updated</h3>
            <p class="text-gray-300 mb-6 max-w-2xl mx-auto">
                Subscribe to our newsletter to get the latest course updates and exclusive offers.
            </p>
            <div class="flex flex-col sm:flex-row justify-center max-w-md mx-auto gap-4">
                <input type="email" placeholder="Your email address"
                    class="flex-grow px-4 py-3 rounded-lg bg-gray-700 text-white 
                              focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg transition-colors">
                    Subscribe
                </button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const categories = [{
                    id: 1,
                    name: "Leadership",
                    color: "bg-blue-600"
                },
                {
                    id: 2,
                    name: "Communication",
                    color: "bg-purple-600"
                },
                {
                    id: 3,
                    name: "Problem Solving",
                    color: "bg-green-600"
                },
                {
                    id: 4,
                    name: "Time Management",
                    color: "bg-yellow-600"
                },
                {
                    id: 5,
                    name: "Creativity",
                    color: "bg-red-600"
                },
                {
                    id: 6,
                    name: "Teamwork",
                    color: "bg-indigo-600"
                },
                {
                    id: 7,
                    name: "Critical Thinking",
                    color: "bg-pink-600"
                },
                {
                    id: 8,
                    name: "Adaptability",
                    color: "bg-teal-600"
                }
            ];

            const slider = document.getElementById('category-slider');
            const categoryWidth = 200; // Adjust based on your design

            // Populate categories
            categories.forEach(category => {
                const categoryEl = document.createElement('div');
                categoryEl.className = `flex-shrink-0 px-6 py-4 mx-2 rounded-xl cursor-pointer 
                                        transition-all hover:scale-105 ${category.color} text-white 
                                        font-semibold text-center w-48`;
                categoryEl.textContent = category.name;
                categoryEl.onclick = () => filterCourses(category.id);
                slider.appendChild(categoryEl);
            });

            let currentPosition = 0;
            const prevBtn = document.getElementById('prev-category');
            const nextBtn = document.getElementById('next-category');

            prevBtn.addEventListener('click', () => {
                currentPosition = Math.min(currentPosition + categoryWidth * 2, 0);
                slider.style.transform = `translateX(${currentPosition}px)`;
            });

            nextBtn.addEventListener('click', () => {
                const maxPosition = -(categories.length * categoryWidth - window.innerWidth + 100);
                currentPosition = Math.max(currentPosition - categoryWidth * 2, maxPosition);
                slider.style.transform = `translateX(${currentPosition}px)`;
            });

            function filterCourses(categoryId) {
                console.log(`Filtering by category: ${categoryId}`);
                // Add your filtering logic here
            }
        });
    </script>
</x-layout>

<script src="https://cdn.jsdelivr.net/npm/apexcharts@3.46.0/dist/apexcharts.min.js"></script>
<x-layout>
    <div class="bg-gray-900">
        <div class="container mx-auto p-4 md:p-6">
            <!-- Header -->
            <header class="mb-8">
                <h1 class="text-3xl font-bold text-white">My Dashboard</h1>
            </header>


            <x-alert />

            <!-- Dashboard Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Left Column -->
                <div class="space-y-6 lg:col-span-2">
                    <!-- Analytics Card -->
                    <div class="bg-gray-800 rounded-lg p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h5 class="text-3xl font-bold text-white pb-2">32.4k</h5>
                                <p class="text-gray-400">Users this week</p>
                            </div>
                            <div class="relative">
                                <button id="dropdownDefaultButton" data-dropdown-toggle="lastDaysdropdown"
                                    class="text-sm font-medium text-gray-400 hover:text-white inline-flex items-center"
                                    type="button">
                                    Last 7 days
                                    <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="lastDaysdropdown"
                                    class="hidden z-10 bg-gray-700 divide-y divide-gray-600 rounded-lg shadow w-44 absolute right-0">
                                    <ul class="py-2 text-sm text-gray-200">
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-600">Yesterday</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-600">Today</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-600">Last 7 days</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-600">Last 30 days</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-600">Last 90 days</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="area-chart" class="h-64"></div>
                    </div>

                    <!-- Bottom Left Cards -->
                    <div class="grid grid-cols-2 gap-6">
                        <!-- Meeting Card -->
                        <div class="bg-gray-800 rounded-lg p-6">
                            <h2 class="text-xl font-semibold text-white mb-4">Upcoming Meeting</h2>
                            <ul class="space-y-2 text-gray-300">
                                <li class="flex items-center">
                                    <span class="w-2 h-2 bg-blue-500 rounded-full mr-2"></span>
                                    Lockereb
                                </li>
                                <li class="flex items-center">
                                    <span class="w-2 h-2 bg-purple-500 rounded-full mr-2"></span>
                                    Time Management
                                </li>
                                <li class="flex items-center">
                                    <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                    US$/MWh
                                </li>
                                <li class="flex items-center">
                                    <span class="w-2 h-2 bg-yellow-500 rounded-full mr-2"></span>
                                    Others' Training
                                </li>
                                <li class="flex items-center">
                                    <span class="w-2 h-2 bg-red-500 rounded-full mr-2"></span>
                                    Communication
                                </li>
                            </ul>
                        </div>

                        <!-- Calendar Card -->
                        <div class="bg-gray-800 rounded-lg p-6">
                            <h2 class="text-xl font-semibold text-white mb-4">Calendar</h2>
                            <div class="overflow-x-auto">
                                <table class="w-full text-gray-300">
                                    <thead>
                                        <tr class="border-b border-gray-700">
                                            <th class="text-left py-2">Date</th>
                                            <th class="text-left py-2">Progress</th>
                                            <th class="text-left py-2">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-b border-gray-700">
                                            <td class="py-3">1st January</td>
                                            <td class="py-3">—</td>
                                            <td class="py-3">0%</td>
                                        </tr>
                                        <tr class="border-b border-gray-700">
                                            <td class="py-3">2nd January</td>
                                            <td class="py-3">—</td>
                                            <td class="py-3">5%</td>
                                        </tr>
                                        <tr>
                                            <td class="py-3">3rd February</td>
                                            <td class="py-3">—</td>
                                            <td class="py-3">8%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Forum Card -->
                        <div class="bg-gray-800 rounded-lg p-6 col-span-2">
                            <h2 class="text-xl font-semibold text-white mb-4">Forum Discussions</h2>
                            <ul class="divide-y divide-gray-700">
                                <!-- Forum Post -->
                                <li class="py-4 flex items-start gap-4">
                                    <img class="w-10 h-10 rounded-full object-cover"
                                        src="https://i.pravatar.cc/40?img=3" alt="User Avatar">
                                    <div class="flex-1">
                                        <h3 class="text-white font-semibold">How to improve my communication skill?</h3>
                                        <p class="text-gray-400 text-sm mt-1">Started by <span
                                                class="font-medium text-gray-300">johndoe</span> • 2 hours ago</p>
                                    </div>
                                    <div class="text-sm text-gray-400 whitespace-nowrap">14 replies</div>
                                </li>

                                <!-- Forum Post -->
                                <li class="py-4 flex items-start gap-4">
                                    <img class="w-10 h-10 rounded-full object-cover"
                                        src="https://i.pravatar.cc/40?img=5" alt="User Avatar">
                                    <div class="flex-1">
                                        <h3 class="text-white font-semibold">Best practices for presenting?</h3>
                                        <p class="text-gray-400 text-sm mt-1">Started by <span
                                                class="font-medium text-gray-300">janesmith</span> • 5 hours ago</p>
                                    </div>
                                    <div class="text-sm text-gray-400 whitespace-nowrap">8 replies</div>
                                </li>
                            </ul>
                        </div>



                    </div>
                </div>

                <!-- Right Column -->
                <div class="space-y-6">
                    <!-- Profile Card -->
                    <div class="bg-gray-800 rounded-lg p-6">
                        <div class="flex flex-col items-center mb-4">
                            <img src="{{ asset('assets/AboutUs.png') }}"
                                class="w-24 h-24 rounded-full object-cover mb-3 border-2 border-blue-500">
                            <h2 class="text-xl font-semibold text-white">{{ Auth::guard('tutor')->user()->name }} </h2>
                        </div>

                        <div class="space-y-3 mb-5">
                            <div>
                                <p class="text-gray-400 text-sm">Occupation</p>
                                <p class="text-white">{{ Auth::guard('tutor')->user()->occupation }} </p>
                            </div>
                            <div>
                                <p class="text-gray-400 text-sm">Email</p>
                                <p class="text-white truncate">{{ Auth::guard('tutor')->user()->email }} </p>
                            </div>
                        </div>

                        <button
                            class="w-full flex items-center justify-center gap-2 px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                    d="M8 7V6a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1M3 18v-7a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                            </svg>

                            View Earnings
                        </button>
                    </div>

                    <!-- Questions Card -->
                    <div class="bg-gray-800 rounded-lg p-6">
                        <h2 class="text-xl font-bold text-white mb-4">Pertanyaan</h2>

                        <div class="space-y-4">
                            <!-- Question 1 -->
                            <div class="bg-gray-700 rounded-lg p-4">
                                <div class="flex items-start gap-3">
                                    <div
                                        class="flex-shrink-0 w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold">
                                        EM
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex justify-between items-start">
                                            <div>
                                                <h3 class="font-semibold text-white">Elliot Møller</h3>
                                                <span class="text-xs text-gray-300">Communication</span>
                                            </div>
                                            <span class="text-xs text-gray-400">7 mnt lalu</span>
                                        </div>
                                        <p class="mt-2 text-gray-300">
                                            Cara untuk blabla gimana ya kak? Soalnya saya masih mayan bingung
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Question 2 -->
                            <div class="bg-gray-700 rounded-lg p-4">
                                <div class="flex items-start gap-3">
                                    <div
                                        class="flex-shrink-0 w-10 h-10 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold">
                                        OP
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex justify-between items-start">
                                            <div>
                                                <h3 class="font-semibold text-white">Olivia Pedersen</h3>
                                                <span class="text-xs text-gray-300">Time Management</span>
                                            </div>
                                            <span class="text-xs text-gray-400">19 mnt lalu</span>
                                        </div>
                                        <p class="mt-2 text-gray-300">
                                            Saya sudah menentukan jadwal saya kak, tapi masih sulit untuk bisa
                                            konsisten.
                                            Apakah kakakuya ada saran?
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Question 3 -->
                            <div class="bg-gray-700 rounded-lg p-4">
                                <div class="flex items-start gap-3">
                                    <div
                                        class="flex-shrink-0 w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white font-bold">
                                        ND
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex justify-between items-start">
                                            <div>
                                                <h3 class="font-semibold text-white">Niklas Döring</h3>
                                                <span class="text-xs text-gray-300">Communication</span>
                                            </div>
                                            <span class="text-xs text-gray-400">1 jam lalu</span>
                                        </div>
                                        <p class="mt-2 text-gray-300">
                                            Ada saran gak kak untuk mulai percakapan dengan cewek? Soalnya tim saya
                                            kebanyakan cewek, dan saya orangnya lumayan canggung
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Courses Section -->
        <div class="bg-gray-800 p-12">
            <div class="rounded-lg mx-auto container">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-white">My Courses</h2>
                    <!-- Add Course Button -->
                    <button id="addCourseBtn"
                        class="flex items-center gap-2 px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                        Add Course
                    </button>
                </div>

                <!-- Course Grid -->
                <div class="grid grid-cols-4 gap-6">
                    <!-- Course Card 1 -->
                    @foreach ($ownedCourse as $course)
                        <div
                            class="bg-gray-700 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                            <a href="{{ route('courses.edit', $course) }}">
                                <img src="{{ asset('assets/AboutUs.png') }}" alt="Course Image"
                                    class="w-full object-cover">
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
                                    <span class="text-gray-400 text-sm">24 Lessons</span>
                                </div>
                            </div>
                        </div>
                    @endforeach

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
</x-layout>

<!-- JavaScript for Course Management -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const addCourseBtn = document.getElementById('addCourseBtn');
        const addCourseCard = document.getElementById('addCourseCard');
        const cancelAddCourse = document.getElementById('cancelAddCourse');
        const courseForm = document.getElementById('courseForm');

        // Show add course form
        addCourseBtn.addEventListener('click', function() {
            addCourseCard.classList.remove('hidden');
            addCourseCard.scrollIntoView({
                behavior: 'smooth'
            });
        });

        // Hide add course form
        cancelAddCourse.addEventListener('click', function() {
            addCourseCard.classList.add('hidden');
            courseForm.reset();
        });
    });
</script>
<script>
    const options = {
        chart: {
            height: "75%",
            maxWidth: "100%",
            type: "area",
            fontFamily: "Inter, sans-serif",
            dropShadow: {
                enabled: false,
            },
            toolbar: {
                show: false,
            },
        },
        tooltip: {
            enabled: true,
            x: {
                show: false,
            },
        },
        fill: {
            type: "gradient",
            gradient: {
                opacityFrom: 0.55,
                opacityTo: 0,
                shade: "#1C64F2",
                gradientToColors: ["#1C64F2"],
            },
        },
        dataLabels: {
            enabled: false,
        },
        stroke: {
            width: 6,
        },
        grid: {
            show: false,
            strokeDashArray: 4,
            padding: {
                left: 2,
                right: 2,
                top: 0
            },
        },
        series: [{
            name: "New users",
            data: [6500, 6418, 6456, 6526, 6356, 6456],
            color: "#1A56DB",
        }, ],
        xaxis: {
            categories: ['01 February', '02 February', '03 February', '04 February', '05 February', '06 February',
                '07 February'
            ],
            labels: {
                show: false,
            },
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false,
            },
        },
        yaxis: {
            show: false,
        },
    }

    if (document.getElementById("area-chart") && typeof ApexCharts !== 'undefined') {
        const chart = new ApexCharts(document.getElementById("area-chart"), options);
        chart.render();
    }
</script>

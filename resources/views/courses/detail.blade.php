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
                            <a href="{{ route('course_page') }}"
                                class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Courses</a>
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
                                class="ms-1 text-sm font-medium text-blue-600 md:ms-2 dark:text-gray-400">{{ $course->title }}</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Course Header Section -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16">
                <!-- Course Card -->
                <div
                    class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl shadow-lg overflow-hidden transition-transform hover:scale-[1.01]">
                    <div class="relative">
                        <img class="w-full h-64 object-cover"
                            src="{{ $course->thumbnail ? asset('storage/' . $course->thumbnail) : asset('assets/course-default.png') }}"
                            alt="Course Cover">
                        <div
                            class="absolute top-4 right-4 bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full">
                            Bestseller
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                {{-- Category --}}
                                <p class="text-blue-600 font-semibold">Communication</p>
                                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mt-1">Benefits</h2>
                            </div>
                            <div class="flex items-center bg-gray-100 dark:bg-gray-700 px-3 py-1 rounded-full">
                                <svg class="w-4 h-4 text-yellow-400 me-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <span class="text-sm font-bold text-gray-900 dark:text-white">4.95</span>
                                <span class="text-xs text-gray-500 dark:text-gray-300">(73 reviews)</span>
                            </div>
                        </div>

                        <ul class="space-y-3 mb-6 text-gray-700 dark:text-gray-300">
                            @foreach ($course->benefits as $benefit)
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    {{ $benefit->benefit }}
                                </li>
                            @endforeach
                        </ul>

                        <div class="grid grid-cols-4 gap-4 text-center mb-6">
                            <div class="flex flex-col items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-8 h-8 text-white mb-1">
                                    <path
                                        d="M7.493 18.5c-.425 0-.82-.236-.975-.632A7.48 7.48 0 0 1 6 15.125c0-1.75.599-3.358 1.602-4.634.151-.192.373-.309.6-.397.473-.183.89-.514 1.212-.924a9.042 9.042 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75A.75.75 0 0 1 15 2a2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H14.23c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23h-.777ZM2.331 10.727a11.969 11.969 0 0 0-.831 4.398 12 12 0 0 0 .52 3.507C2.28 19.482 3.105 20 3.994 20H4.9c.445 0 .72-.498.523-.898a8.963 8.963 0 0 1-.924-3.977c0-1.708.476-3.305 1.302-4.666.245-.403-.028-.959-.5-.959H4.25c-.832 0-1.612.453-1.918 1.227Z" />
                                </svg>

                                <span class="text-sm text-gray-600 dark:text-gray-300">
                                    {{ $course->rating }} Likes</span>
                            </div>
                            <div class="flex flex-col items-center">
                                <svg class="w-8 h-8 text-gray-800 dark:text-white mb-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-width="2"
                                        d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                                <span class="text-sm text-gray-600 dark:text-gray-300">{{ $course->purchases->count() }}
                                    Students</span>
                            </div>
                            <div class="flex flex-col items-center">
                                <svg class="w-8 h-8 text-gray-800 dark:text-white mb-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z" />
                                </svg>
                                <span class="text-sm text-gray-600 dark:text-gray-300">{{ $course->views }}
                                    Favorites</span>
                            </div>
                            <div class="flex flex-col items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="w-8 h-8 text-gray-800 dark:text-white mb-1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.068.157 2.148.279 3.238.364.466.037.893.281 1.153.671L12 21l2.652-3.978c.26-.39.687-.634 1.153-.67 1.09-.086 2.17-.208 3.238-.365 1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                                </svg>
                                <span class="text-sm text-gray-600 dark:text-gray-300">Chat</span>
                            </div>
                        </div>

                        <div class="border-t border-gray-200 dark:border-gray-700 pt-6">
                            <div class="flex justify-between items-center mb-6">
                                <div>
                                    <span class="text-gray-500 dark:text-gray-400 line-through">@currency($course->price * 1.2)</span>
                                    <p class="text-2xl font-bold text-gray-900 dark:text-white">@currency($course->price)</p>
                                </div>
                                <span
                                    class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">15%
                                    OFF</span>
                            </div>
                            @if ($is_purchased)
                                <button
                                    class="cursor-not-allowed block w-full text-center bg-blue-400  text-white font-bold py-3 px-4 rounded-lg transition-colors duration-300"
                                    disabled>
                                    Bought
                                </button>
                            @else
                                <a href="{{ route('course.payment', $course) }}"
                                    class="block w-full text-center bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition-colors duration-300">
                                    Enroll Now
                                </a>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Course Details -->
                <div class="text-gray-900 dark:text-white">
                    <h1 class="text-3xl md:text-4xl font-bold mb-6">{{ $course->title }}</h1>

                    <div class="prose dark:prose-invert max-w-none mb-8">
                        <p class="text-lg text-gray-700 dark:text-gray-300 mb-4">
                            {{ $course->subtitle }}
                        </p>

                        <div class="bg-blue-50 dark:bg-gray-800 p-4 rounded-lg border-l-4 border-blue-500 mb-6">
                            <h3 class="font-bold text-blue-700 dark:text-blue-400 mb-2">What You'll Learn:</h3>
                            <ul class="list-disc pl-5 space-y-1">
                                <li>Proven techniques to initiate conversations with strangers</li>
                                <li>Strategies to build rapport quickly and effectively</li>
                                <li>How to read body language and social cues</li>
                                <li>Methods to maintain and nurture new connections</li>
                                <li>Overcoming social anxiety and fear of rejection</li>
                            </ul>
                        </div>
                    </div>

                    <div class="mb-8">
                        <h2 class="text-2xl font-bold mb-4">Course Description</h2>
                        <div class="prose dark:prose-invert max-w-none text-gray-700 dark:text-gray-300">
                            {{ $course->description }}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Instructor Section -->
            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-8 mb-16">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">About the Instructor</h2>
                <div class="flex flex-col md:flex-row gap-8">
                    <div class="flex-shrink-0">
                        <img class="w-32 h-32 rounded-full object-cover shadow-lg"
                            src="{{ $tutor->image ? asset('storage/' . $tutor->image) : asset('assets/default-avatarjpg.jpg') }}"
                            alt="Ambda Jansen">
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white">{{ $tutor->name }} </h3>
                        <p class="text-blue-600 dark:text-blue-400 font-medium mb-4">{{ $tutor->occupation }}</p>
                        <p class="text-gray-700 dark:text-gray-300 mb-4">
                            {{ $tutor->description }}
                        </p>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-yellow-400 me-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <p class="text-sm font-bold text-gray-900 dark:text-white">4.95 instructor rating</p>
                            <span class="w-1 h-1 mx-2 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                            <p class="text-sm text-gray-600 dark:text-gray-300">2,345 reviews</p>
                            <span class="w-1 h-1 mx-2 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                            <p class="text-sm text-gray-600 dark:text-gray-300">
                                {{ $tutor->courses->sum('purchases_count') }} students</p>
                            <span class="w-1 h-1 mx-2 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                            <p class="text-sm text-gray-600 dark:text-gray-300">{{ $tutor->courses->count() }} courses
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Curriculum Section -->
            <div class="mb-16">
                <div class="bg-gray-700 py-4 px-6 rounded-t-lg">
                    <h2 class="text-2xl font-bold text-white">Course Curriculum</h2>
                </div>

                <div id="accordion-collapse" data-accordion="collapse">
                    @foreach ($course->curriculums as $curriculum)
                        <div class="border border-gray-200 dark:border-gray-700 rounded-b-lg overflow-hidden">
                            @if ($is_purchased)
                                <h2 id="{{ 'accordion-collapse-heading-' . $loop->index }}">
                                    <button type="button"
                                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-white bg-gray-800 hover:bg-gray-700 gap-3"
                                        data-accordion-target="{{ '#accordion-collapse-body-' . $loop->index }}"
                                        aria-expanded="true"
                                        aria-controls="
                                    {{ 'accordion-collapse-body-' . $loop->index }}">
                                        <span class="flex items-center">
                                            <span
                                                class="w-8 h-8 flex items-center justify-center bg-blue-600 text-white rounded-full mr-3">{{ $loop->index + 1 }}</span>
                                            {{ $curriculum->title }}
                                        </span>
                                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                        </svg>
                                    </button>
                                </h2>
                            @else
                                <h2 id="{{ 'accordion-collapse-heading-' . $loop->index }}">
                                    <button type="button"
                                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-white bg-gray-800 gap-3">
                                        <span class="flex items-center">
                                            <span
                                                class="w-8 h-8 flex items-center justify-center bg-blue-600 text-white rounded-full mr-3">{{ $loop->index + 1 }}</span>
                                            {{ $curriculum->title }}
                                        </span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                                        </svg>
                                    </button>
                                </h2>
                            @endif
                            <div id="{{ 'accordion-collapse-body-' . $loop->index }}" class="hidden"
                                aria-labelledby="{{ 'accordion-collapse-heading-' . $loop->index }}">
                                <div class="p-5 border-t border-gray-200 dark:border-gray-700">
                                    @forelse ($curriculum->getAllMaterials() as $material)
                                        @if ($material->getTable() === 'material_videos')
                                            {{-- Video --}}
                                            <div class="flex items-center justify-between py-3 px-4 hover:bg-gray-700">
                                                <div class="flex items-center">
                                                    <svg class="w-5 h-5 text-gray-400 mr-3" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                        </path>
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                        </path>
                                                    </svg>
                                                    <a href="{{ route('course.video', ['video' => $material]) }}"
                                                        class="hover:underline underline-offset-2 decoration-sky-500">
                                                        <span class="text-white">{{ $material->title }}</span>
                                                    </a>
                                                </div>
                                                <span
                                                    class="text-sm text-gray-400">{{ $material->video ? date('H:i:s', $material->getDuration()) : '1:53' }}</span>
                                            </div>
                                        @else
                                            {{-- Worksheet --}}
                                            <div class="flex items-center justify-between py-3 px-4 hover:bg-gray-700">
                                                <div class="flex items-center">
                                                    <svg class="w-5 h-5 text-gray-400 mr-3" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                                        </path>
                                                    </svg>
                                                    <a href="{{ $material->worksheet ? asset('storage/' . $material->worksheet) : asset('assets/WorksheetDefault.pdf') }}"
                                                        target="_blank"
                                                        class="hover:underline underline-offset-2 decoration-sky-500">
                                                        <span class="text-white">Worksheet:
                                                            {{ $material->title }}</span>
                                                    </a>
                                                </div>
                                                <span
                                                    class="text-sm text-gray-400">{{ strtoupper(substr($material->worksheet, -3, 3)) }}</span>
                                            </div>
                                        @endif
                                    @empty
                                        <p class="text-gray-500 dark:text-gray-400">Coming soon...</p>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Related Courses -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">You May Also Like</h2>

                <div class="relative">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        @foreach ($course->similar() as $course)
                            <x-card.course-card :course="$course" />
                        @endforeach
                    </div>
                </div>

                <a href="{{ route('course_page') }}" class="flex justify-end m-2 text-xl text-blue-600">More
                    Courses..</a>

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

<x-layout>
    <form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data">
        <div class="bg-gray-800">
            <div class="p-6 bg-gray-900 w-full h-40">
                <header class="mx-auto ml-8 mb-8 grid grid-cols-4 gap-4 items-center">
                    <div class="flex justify-self-end">
                        <img id="profile-preview"
                            src="{{ Auth::user()->image ? asset('storage/' . Auth::user()->image) : asset('assets/default-avatarjpg.jpg') }}"
                            class="w-50 h-50 aspect-square rounded-full border-4 border-gray-600 object-cover">
                    </div>
                    <h1 class="text-5xl font-bold text-white justify-self-center">
                        {{ Auth::user()->name }}
                    </h1>
                </header>
            </div>

            <x-alert />

            <div class="p-6 bg-gray-800">
                <div class="container mx-auto mt-20">
                    <div class="bg-gray-900 p-4">
                        <h1 class="text-white font-bold text-3xl text-center">Informasi Pribadi</h1>
                    </div>
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-2 py-8 gap-8">
                        <div class="flex flex-col col-span-2">
                            <span class="text-2xl text-white font-bold mb-2">Profile Picture</span>
                            <input type="file" name="image" id="profile-pciture-input" accept="image/*"
                                class="border-3 border-gray-600 p-4 text-white">
                            @error('image')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col col-span-2">
                            <span class="text-2xl text-white font-bold mb-2">Nama</span>
                            <input type="text" name="name" placeholder="Name"
                                class="border-3 border-gray-600 p-4 text-white" value="{{ Auth::user()->name }}">
                            @error('name')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col col-span-2">
                            <span class="text-2xl text-white font-bold mb-2">Email</span>
                            <input type="email" name="email" placeholder="test@gmail.com"
                                class="border-3 border-gray-600 p-4 text-white" value="{{ Auth::user()->email }}">
                            @error('email')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col col-span-2">
                            <span class="text-2xl text-white font-bold mb-2">No Handphone</span>
                            <input type="text" name="handphone" placeholder="+85 1234 5678 901"
                                value="{{ $user->handphone }}" class="border-3 border-gray-600 p-4 text-white">
                            @error('handphone')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <span class="text-2xl text-white font-bold mb-2">Jenis Kelamin</span>
                            <select id="sex" name="gender"
                                class="border-gray-600 p-4 border-3 text-white bg-gray-800">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Attack Helicopter</option>
                            </select>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-2xl text-white font-bold mb-2">Tanggal Lahir</span>
                            <input id="dob" name="dob" class="border-3 border-gray-600 p-4 text-white">
                            @error('dob')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg text-xl">
                        Save & Submit
                    </button>
                </div>
            </div>
        </div>
    </form>

    <!-- Courses Section -->
    <div class="bg-gray-800 p-12">
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

                <!-- Add New Course Card -->
                <div id="addCourseCard"
                    class="hidden bg-gray-700 rounded-lg border-2 border-dashed border-gray-600 hover:border-gray-500 transition-colors">
                    <div class="h-full flex flex-col items-center justify-center p-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400 mb-3" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                        <h3 class="text-lg font-semibold text-white mb-2">Add New Course</h3>
                        <form id="courseForm" class="w-full space-y-4" method="POST"
                            action="{{ route('courses.store') }}">
                            @csrf
                            <div>
                                <label for="courseTitle" class="block text-sm font-medium text-gray-300 mb-1">Course
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
</x-layout>

<script>
    document.getElementById('profile-pciture-input').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const preview = document.getElementById('profile-preview');

        if (file) {
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
            }

            ;
            reader.readAsDataURL(file);
        }
    });
    flatpickr("#dob", {
        dateFormat: "Y-m-d",
        allowInput: true
    });
</script>

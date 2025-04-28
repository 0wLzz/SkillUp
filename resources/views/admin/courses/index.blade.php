<x-admin_layout>
    <div class="bg-gray-800">
        <div class="max-w-screen-xl flex justify-between p-4 mx-auto items-center">
            <h1 class="text-white text-xl font-bold">Manage Courses</h1>
            <a href="{{ route('courses.create') }}"
                class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg px-4 py-2">
                + Add Course
            </a>
        </div>
    </div>

    <div class="max-w-screen-xl mx-auto p-4 bg-white rounded-xl mt-4 space-y-4">
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded">
                {{ session('success') }}
            </div>
        @endif

        @forelse ($courses as $course)
            <div class="grid grid-cols-6 gap-4 items-center p-4">
                <img src="{{ asset('storage/' . $course->thumbnail) }}" alt="Thumbnail"
                    class="w-24 h-24 object-cover rounded">

                <div>
                    <h2 class="font-bold text-lg">{{ $course->title }}</h2>
                    <p class="text-gray-500">{{ $course->subtitle }}</p>
                </div>

                <div>
                    <p class="text-sm text-gray-400">Students</p>
                    <p class="font-bold">{{ $course->students }}</p>
                </div>

                <div>
                    <p class="text-sm text-gray-400">Videos</p>
                    <p class="font-bold">{{ $course->videos }}</p>
                </div>

                <div>
                    <p class="text-sm text-gray-400">Teacher</p>
                    <p class="font-bold">{{ $course->teacher }}</p>
                </div>

                <div class="flex gap-2">
                    <a href="{{ route('courses.edit', $course->id) }}"
                        class="bg-purple-600 hover:bg-purple-700 text-white text-sm px-4 py-2 rounded">Edit</a>

                    <form action="{{ route('courses.destroy', $course->id) }}" method="POST")">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-600 hover:bg-red-700 text-white text-sm px-4 py-2 rounded">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <p class="text-center text-gray-500">Belum ada kursus.</p>
        @endforelse
    </div>
</x-admin_layout>


<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.querySelectorAll('form[onsubmit]').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Yakin?',
                text: "Kursus akan dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            });
        });
    });
</script>

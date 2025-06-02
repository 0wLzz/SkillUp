<x-admin_layout>
    <div class="bg-gray-800">
        <div class="max-w-screen-xl flex justify-between p-4 mx-auto items-center">
            <h1 class="text-white text-xl font-bold">Manage Courses</h1>
        </div>
    </div>

    <div class="max-w-screen-xl mx-auto p-4 bg-white rounded-xl mt-4 space-y-4">
        @forelse ($courses as $course)
            <div class="flex items-center justify-between bg-gray-50 p-4 rounded-lg shadow-sm">
                <div class="flex items-center gap-4">
                    <img src="{{ $course->thumbnail ? asset('storage/' . $course->thumbnail) : asset('assets/course-default.png') }}"
                        alt="Thumbnail" class="w-24 h-24 object-cover rounded-lg border border-gray-200">
                    <div>
                        <h2 class="font-bold text-lg">{{ $course->title }}</h2>
                        <p class="text-sm text-gray-500">{{ $course->subtitle }}</p>

                        <form action="{{ route('admin.course.select', $course) }}" method="POST" class="mt-2">
                            @csrf
                            @method('PATCH')
                            <label class="inline-flex items-center space-x-2">
                                <input type="checkbox" onchange="this.form.submit()"
                                    {{ $course->is_featured ? 'checked' : '' }}>
                                <span class="text-sm text-gray-700">Show on Homepage</span>
                            </label>
                        </form>
                    </div>
                </div>

                <form action="{{ route('admin.course.delete', $course) }}" method="POST" onsubmit="">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white text-sm px-4 py-2 rounded">
                        Delete
                    </button>
                </form>
            </div>
        @empty
            <p class="text-center text-gray-500">No courses available.</p>
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

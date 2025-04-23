<x-admin_layout>
    <div class="max-w-xl mx-auto p-4 bg-white rounded-xl mt-6">
        <h1 class="text-xl font-bold mb-4">Edit Kursus</h1>

        <form action="{{ route('courses.update', $course->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="title" class="block mb-1 font-medium">Title</label>
                <input id="title" type="text" name="title" value="{{ $course->title }}" required class="w-full border rounded p-2" />
                @error('title') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="subtitle" class="block mb-1 font-medium">Subtitle</label>
                <input id="subtitle" type="text" name="subtitle" value="{{ $course->subtitle }}" class="w-full border rounded p-2" />
            </div>

            <div>
                <label for="teacher" class="block mb-1 font-medium">Teacher</label>
                <input id="teacher" type="text" name="teacher" value="{{ $course->teacher }}" class="w-full border rounded p-2" />
            </div>

            @if ($course->thumbnail)
                <div>
                    <p class="text-sm text-gray-600">Thumbnail saat ini:</p>
                    <img src="{{ asset('storage/' . $course->thumbnail) }}" class="w-32 h-32 object-cover rounded mt-2" />
                </div>
            @endif

            <div>
                <label for="thumbnail" class="block mb-1 font-medium">Thumbnail Baru</label>
                <input id="thumbnail" type="file" name="thumbnail" accept="image/*" class="w-full border rounded p-2" />
            </div>

            <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded">
                Update Course
            </button>
        </form>
    </div>
</x-admin_layout>

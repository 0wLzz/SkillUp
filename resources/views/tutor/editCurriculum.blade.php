<x-layout>
    <div class="bg-gray-900 min-h-screen p-8 text-white">
        <div class="max-w-6xl mx-auto">
            <h1 class="text-4xl font-bold mb-8">Manage Curriculum for: {{ $course->title }}</h1>

            {{-- Loop Sections (Bab) --}}
            @foreach ($course->curriculums as $curriculum)
                <div class="mb-6 bg-gray-800 p-6 rounded">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-2xl font-semibold">{{ $curriculum->title }}</h2>
                        <a href="{{ route('tutor.materials.create', $curriculum->id) }}"
                            class="bg-blue-600 px-4 py-2 rounded hover:bg-blue-700 text-white">+ Add Material</a>
                    </div>

                    @if ($curriculum->materials->count())
                        <ul class="list-disc pl-5 space-y-2">
                            @foreach ($section->materials as $material)
                                <li class="flex justify-between items-center">
                                    <div>
                                        <strong>{{ $material->title }}</strong>
                                        <span class="text-sm text-gray-400 ml-2">
                                            ({{ $material->type == 'video' ? 'Video' : 'Text' }})
                                        </span>
                                    </div>
                                    <div class="flex gap-2">
                                        <a href="{{ route('tutor.materials.edit', $material) }}"
                                            class="text-yellow-400 hover:underline">Edit</a>
                                        <form action="{{ route('tutor.materials.destroy', $material) }}" method="POST">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:underline">Delete</button>
                                        </form>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p class="text-gray-400">No materials added yet.</p>
                    @endif
                </div>
            @endforeach

            {{-- Add New Section --}}
            <div class="mt-10 bg-gray-800 p-6 rounded">
                <h3 class="text-xl font-semibold mb-4">Add New Section</h3>
                <form method="POST" action="{{ route('tutor.sections.store', $course->id) }}">
                    @csrf
                    <input name="title" placeholder="Section Title"
                        class="w-full p-3 rounded bg-gray-700 border border-gray-600 mb-4 text-white" required>
                    <button type="submit" class="bg-green-600 px-4 py-2 rounded hover:bg-green-700 text-white">
                        Add Section
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>

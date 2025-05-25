<x-layout>
    <div class="bg-gray-900 min-h-screen p-8 text-white">
        <div class="max-w-6xl mx-auto">
            <h1 class="text-4xl font-bold mb-8">Manage Curriculum</h1>

            <x-alert />

            <div x-data="{ open: false }">
                <div class="mb-10 bg-gray-800 p-6 rounded-lg shadow">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-2xl font-semibold">{{ $curriculum->title }}</h2>
                        <button @click="open = true" class="bg-green-600 px-4 py-2 rounded hover:bg-green-700 text-white">
                            + Add Material
                        </button>
                    </div>

                    {{-- Materials --}}
                    @if ($curriculum->getAllMaterials()->count())
                        <ul class="space-y-3">
                            @foreach ($curriculum->getAllMaterials() as $material)
                                <div x-data="{ open_update: false }">
                                    <li class="flex justify-between items-center bg-gray-700 p-3 rounded">
                                        <div>
                                            <div class="font-medium">{{ $material->title }}</div>
                                            <div class="text-sm text-gray-400">
                                                Type:
                                                {{ $material->getTable() === 'material_videos' ? 'Video' : 'Worksheet' }}

                                            </div>
                                        </div>
                                        <div class="flex gap-3">
                                            <button @click="open_update= true"
                                                class="px-4 py-2 bg-yellow-400 text-white rounded hover:bg-yellow-500">Edit</button>
                                            <form id="delete"
                                                action="{{ route('tutor.materials.delete', [
                                                    'type' => $material->getTable() === 'material_videos' ? 'video' : 'worksheet',
                                                    'id' => $material->id,
                                                ]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">Delete</button>
                                            </form>
                                        </div>
                                    </li>

                                    {{-- Modal Update --}}
                                    <div x-show="open_update" x-transition
                                        class="fixed inset-0 bg-black bg-opacity-60 z-40 flex items-center justify-center"
                                        x-cloak>
                                        <div @click.away="open = false"
                                            class="bg-gray-800 rounded-lg shadow-lg p-8 w-full max-w-xl z-50">
                                            <h2 class="text-2xl font-semibold mb-4">Update Material</h2>

                                            <form
                                                action="{{ route('tutor.materials.update', [
                                                    'type' => $material->getTable() === 'material_videos' ? 'video' : 'worksheet',
                                                    'id' => $material->id,
                                                ]) }}"
                                                method="POST" enctype="multipart/form-data" class="space-y-4">
                                                @csrf
                                                <div>
                                                    <label class="block mb-1 text-sm">Material Title</label>
                                                    <input value="{{ $material->title }}" name="title"
                                                        placeholder="e.g. Introduction Video"
                                                        class="w-full p-3 rounded bg-gray-700 border border-gray-600 text-white"
                                                        required>
                                                    @error('title')
                                                        <span class="text-red-500">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div>
                                                    <label class="block mb-2 text-sm font-medium">Description</label>
                                                    <textarea name="description" rows="4" class="w-full bg-gray-700 p-3 rounded border border-gray-600 text-white"
                                                        placeholder="e.g. Welcome to the first lesson...">{{ $material->description }}</textarea>
                                                    @error('description')
                                                        <span class="text-red-500">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div>
                                                    <label class="block mb-2 text-sm font-medium">Upload File</label>
                                                    <input type="file" name="files"
                                                        class="w-full p-3 rounded bg-gray-700 border border-gray-600 text-white">
                                                    <p class="mt-1 text-sm text-gray-400">PDF or MP4 (max 50MB)</p>
                                                    @error('files')
                                                        <span class="text-red-500">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="flex justify-end gap-3">
                                                    <button type="button" @click="open_update = false"
                                                        class="px-4 py-2 bg-gray-600 text-white rounded hover:bg-gray-700">Cancel</button>
                                                    <button type="submit"
                                                        class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                                                        Update Material
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </ul>
                    @else
                        <p class="text-gray-400">No materials added yet.</p>
                    @endif
                </div>

                {{-- Modal Create --}}
                <div x-show="open" x-transition
                    class="fixed inset-0 bg-black bg-opacity-60 z-40 flex items-center justify-center" x-cloak>
                    <div @click.away="open = false" class="bg-gray-800 rounded-lg shadow-lg p-8 w-full max-w-xl z-50">
                        <h2 class="text-2xl font-semibold mb-4">Add New Material</h2>

                        <form action="{{ route('tutor.materials.store') }}" method="POST"
                            enctype="multipart/form-data" class="space-y-4">
                            @csrf
                            <input type="hidden" name="curriculum_id" value="{{ $curriculum->id }}">

                            <div>
                                <label class="block mb-1 text-sm">Material Title</label>
                                <input name="title" placeholder="e.g. Introduction Video"
                                    class="w-full p-3 rounded bg-gray-700 border border-gray-600 text-white" required>
                                @error('title')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label class="block mb-2 text-sm font-medium">Description</label>
                                <textarea name="description" rows="4" class="w-full bg-gray-700 p-3 rounded border border-gray-600 text-white"
                                    placeholder="e.g. Welcome to the first lesson..."></textarea>
                                @error('description')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label class="block mb-2 text-sm font-medium">Upload File</label>
                                <input type="file" name="files"
                                    class="w-full p-3 rounded bg-gray-700 border border-gray-600 text-white">
                                <p class="mt-1 text-sm text-gray-400">PDF or MP4 (max 50MB)</p>
                                @error('files')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="flex justify-end gap-3">
                                <button type="button" @click="open = false"
                                    class="px-4 py-2 bg-gray-600 text-white rounded hover:bg-gray-700">Cancel</button>
                                <button type="submit"
                                    class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                                    Add Material
                                </button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>

        </div>
    </div>
</x-layout>

<script>
    document.querySelectorAll('#delete').forEach(form => {
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

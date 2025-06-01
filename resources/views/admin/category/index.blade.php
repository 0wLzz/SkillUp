<x-admin_layout>
    <div class="bg-gray-800">
        <div class="max-w-screen-xl flex justify-between p-4 mx-auto items-center">
            <h1 class="text-white text-xl font-bold">Manage Category</h1>
            <a href="{{ route('category.create') }}"
                class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg px-4 py-2">
                + Add Category
            </a>
        </div>
    </div>

    <x-alert />

    <div class="max-w-screen-xl mx-auto p-4 bg-white rounded-xl mt-4 space-y-4">
        @forelse ($categories as $category)
            <div class="flex items-center justify-center p-4 gap-4">
                <form class="flex gap-8" action="{{ route('category.update', $category) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input value="{{ $category->name }}" type="text" name="name"
                        class="border text-sm rounded-lg focus:ring-blue-500 block w-full p-2.5 border-gray-600 placeholder-gray-400 focus:border-blue-500"
                        required />
                    @error('name')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white text-sm px-4 rounded">
                        Update
                    </button>
                </form>

                <div class="flex gap-2">
                    <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-600 hover:bg-red-700 text-white text-sm px-4 py-2 rounded">
                            Delete
                        </button>
                    </form>
                </div>

            </div>
        @empty
            <p class="text-center text-gray-500">Belum ada category.</p>
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

<x-admin_layout>
    <div class="bg-gray-800 border-gray-200">
        <div class="max-w-screen-xl flex p-4 mx-auto">
            <h1 class="text-white text-xl font-bold">Manage Tutors</h1>
        </div>
    </div>

    <div class="divide-y max-w-screen-xl mx-auto p-4 bg-white rounded-xl mt-4">
        @forelse ($tutors as $tutor)
            <div class="grid grid-cols-3 items-center gap-4 p-4">
                {{-- Column 1: Profile --}}
                <div class="flex items-center gap-4">
                    <img src="{{ $tutor->image ? asset('storage/' . $tutor->image) : asset('assets/default-avatarjpg.jpg') }}"
                        class="w-16 h-16 rounded-full object-cover">
                    <div class="flex flex-col">
                        <span class="font-bold text-lg">{{ $tutor->name }}</span>
                        <span class="text-gray-400">{{ $tutor->occupation }}</span>
                    </div>
                </div>

                {{-- Column 2: Date --}}
                <div class="text-center">
                    <span class="text-gray-400 block">Date</span>
                    <span class="font-bold text-lg">{{ $tutor->created_at->format('d M Y') }}</span>
                </div>

                {{-- Column 3: Delete button --}}
                <div class="flex justify-center">
                    <form action="{{ route('delete_tutor', $tutor->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <p class="text-center text-gray-500 p-4">Belum ada tutor.</p>
        @endforelse
    </div>

</x-admin_layout>

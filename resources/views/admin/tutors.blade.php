<x-admin_layout>
    <div class="bg-gray-800 border-gray-200">
        <div class="max-w-screen-xl flex p-4 mx-auto">
            <h1 class="text-white text-xl font-bold">Manage Tutors</h1>
        </div>
    </div>

    <div class="max-w-screen-xl mx-auto p-4 bg-white rounded-xl mt-4">
        @forelse ($tutors as $tutor)
            <div class="grid grid-cols-3 p-4 items-center gap-4">
                <div class="flex items-center gap-4 justify-center">
                    <img src="{{ asset('assets/AboutUs.png') }}" class="w-25 h-25 rounded ratio-square object-cover">
                    <div class="flex flex-col">
                        <span class="font-bold text-lg">{{ $tutor->name }}</span>
                        <span class="text-gray-400">{{ $tutor->occupation }}</span>
                    </div>
                </div>

                <div class="flex flex-col text-center">
                    <span class="text-gray-400">Date</span>
                    <span class="font-bold text-lg">{{ $tutor->created_at->format('d M Y') }}</span>
                </div>

                <div class="flex justify-center items-center">
                    <form action="{{ route('delete_tutor', $tutor->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-4 py-2.5">Delete</button>
                    </form>
                </div>
            </div>
        @empty
            <p class="text-center text-gray-500">Belum ada tutor.</p>
        @endforelse

    </div>

</x-admin_layout>

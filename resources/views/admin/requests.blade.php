<x-admin_layout>
    <div class="bg-gray-800 border-gray-200">
        <div class="max-w-screen-xl flex p-4 mx-auto">
            <h1 class="text-white text-xl font-bold">Registration Tutors</h1>
        </div>
    </div>

    <div class="max-w-screen-xl mx-auto p-4 bg-white rounded-xl mt-6 space-y-4">
        @forelse ($requests as $request)
            <div class="grid grid-cols-6 rounded p-4 space-y-2 w-full text-wrap">
                <p>
                    <strong>Nama:</strong><br>
                    {{ $request->name }}
                </p>
                <p>
                    <strong>Email:</strong> <br>
                    {{ $request->email }}
                </p>
                <p>
                    <strong>Telepon:</strong> <br>
                    {{ $request->phone }}
                </p>
                <p>
                    <strong>Tanggal Daftar:</strong> <br>
                    {{ $request->created_at->format('d M Y') }}
                </p>
                <p>
                    <strong>Portofolio:</strong> <br>
                    @if ($request->portfolio_path)
                        <a href="{{ asset('storage/' . $request->portfolio_path) }}" target="_blank"
                            class="text-blue-500 underline"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                            </svg>
                        </a>
                    @else
                        <span class="text-gray-400 italic">Belum ada file</span>
                    @endif
                </p>

                <div class="flex gap-2 mt-2">
                    <form action="{{ route('tutor_requests.approve', $request->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <button type="submit" title="Terima pengajuan tutor ini"
                            class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">Acc</button>
                    </form>
                    <form action="{{ route('tutor_requests.reject', $request->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <button type="submit" title="Tolak pengajuan tutor ini"
                            class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded">Reject</button>
                    </form>
                </div>
            </div>
        @empty
            <p class="text-center text-gray-500">Belum ada permintaan.</p>
        @endforelse
    </div>
</x-admin_layout>

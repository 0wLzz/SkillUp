<x-admin_layout>
    <div class="max-w-6xl mx-auto p-4 bg-white rounded-xl mt-6 space-y-4">
        <h1 class="text-2xl font-bold mb-4">Permintaan Tutor</h1>

        @foreach ($requests as $request)
            <div class="border rounded p-4 shadow-sm space-y-2">
                <p><strong>Nama:</strong> {{ $request->name }}</p>
                <p><strong>Email:</strong> {{ $request->email }}</p>
                <p><strong>Telepon:</strong> {{ $request->phone }}</p>
                <p><strong>Tanggal Daftar:</strong> {{ $request->created_at->format('d M Y') }}</p>
                <p>
                    <strong>Portofolio:</strong>
                    <a href="{{ asset('storage/' . $request->portfolio_path) }}" target="_blank" class="text-blue-500 underline">Lihat File</a>
                </p>

                <div class="flex gap-2 mt-2">
                    <form action="{{ route('tutor_requests.approve', $request->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">Acc</button>
                    </form>
                    <form action="{{ route('tutor_requests.reject', $request->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded">Reject</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</x-admin_layout>

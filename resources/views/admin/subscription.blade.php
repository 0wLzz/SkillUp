<x-admin_layout>
    <div class="bg-gray-800 border-gray-200">
        <div class="max-w-screen-xl flex p-4 mx-auto justify-between items-center">
            <h1 class="text-white text-xl font-bold">Manage Subscription</h1>
            <a href="" type="button"
                class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">Add
                Course</a>
        </div>
    </div>

    {{-- <div class="max-w-screen-xl mx-auto p-4 bg-white rounded-xl mt-12">
        <div class="grid grid-cols-6 p-4 items-center">
            <img src="{{ asset('assets/AboutUs.png') }}" class="w-25 h-25 rounded ratio-square object-cover">

            <div class="flex flex-col">
                <span class="font-bold text-lg">Total Amount</span>
                <span class="text-gray-400">1 Million Dollars</span>
            </div>

            <div class="flex flex-col">
                <span class="text-gray-400">Date</span>
                <span class="font-bold text-lg">1 January 2000</span>
            </div>

            <div class="flex flex-col">
                <span class="text-gray-400">Status</span>
                <span class="text-green-400">ACTIVE</span>
            </div>

            <div class="flex flex-col">
                <span class="text-gray-400">Student</span>
                <span class="font-bold text-lg">4</span>
            </div>

            <div class="flex gap-4 ">
                <button type="button"
                    class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">View
                    Details</button>
            </div>
        </div>
    </div> --}}

    <div class="max-w-screen-xl mx-auto p-4 bg-white rounded-xl mt-12">
        @foreach($subscriptions as $sub)
            <div class="grid grid-cols-6 p-4 items-center border-b">
                {{-- Gambar (opsional) --}}
                <img src="{{ asset('assets/AboutUs.png') }}" class="w-25 h-25 rounded ratio-square object-cover">

                {{-- Total Amount (dari harga course) --}}
                <div class="flex flex-col">
                    <span class="font-bold text-lg">Total Amount</span>
                    <span class="text-gray-400">Rp {{ number_format($sub->course->price ?? 0) }}</span>
                </div>

                {{-- Tanggal dibuat --}}
                <div class="flex flex-col">
                    <span class="text-gray-400">Date</span>
                    <span class="font-bold text-lg">{{ $sub->created_at->format('d M Y') }}</span>
                </div>

                {{-- Status Verifikasi --}}
                <div class="flex flex-col">
                    <span class="text-gray-400">Status</span>
                    <span class="{{ $sub->is_verified ? 'text-green-400' : 'text-red-400' }}">
                        {{ $sub->is_verified ? 'ACTIVE' : 'PENDING' }}
                    </span>
                </div>

                {{-- Nama Student --}}
                <div class="flex flex-col">
                    <span class="text-gray-400">Student</span>
                    <span class="font-bold text-lg">{{ $sub->user->name ?? '-' }}</span>
                </div>

                {{-- Aksi --}}
                <div class="flex gap-4">
                    @if(!$sub->is_verified)
                        <form method="POST" action="{{ route('admin.subscriptions.verify', $sub->id) }}">
                            @csrf
                            <button type="submit"
                                class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">
                                Verifikasi
                            </button>
                        </form>
                    @else
                        <button type="button"
                            class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">
                            Lihat Detail
                        </button>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
    
</x-admin_layout>

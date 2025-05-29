<x-admin_layout>
    <div class="bg-gray-800 border-gray-200">
        <div class="max-w-screen-xl flex p-4 mx-auto justify-between items-center">
            <h1 class="text-white text-xl font-bold">View Subscription</h1>
        </div>
    </div>

    <div class="max-w-screen-xl mx-auto p-4 bg-white rounded-xl mt-12">
        @forelse ($subscriptions as $sub)
            <div class="grid grid-cols-5 p-4 items-center border-b">
                {{-- Total Amount (dari harga course) --}}
                <div class="flex flex-col">
                    <span class="text-gray-400">Course</span>
                    <span class="font-bold text-lg">{{ $sub->course->title }}</span>
                </div>

                {{-- Total Amount (dari harga course) --}}
                <div class="flex flex-col">
                    <span class="text-gray-400">Total Amount</span>
                    <span class="font-bold text-lg">Rp {{ number_format($sub->course->price ?? 0) }}</span>
                </div>

                {{-- Tanggal dibuat --}}
                <div class="flex flex-col">
                    <span class="text-gray-400">Date</span>
                    <span class="font-bold text-lg">{{ $sub->created_at->format('d M Y') }}</span>
                </div>

                {{-- Status Verifikasi --}}
                <div class="flex flex-col">
                    <span class="text-gray-400">Status</span>
                    <span class="{{ 'text-green-400' }}">
                        ACTIVE
                    </span>
                </div>

                {{-- Nama Student --}}
                <div class="flex flex-col">
                    <span class="text-gray-400">Student</span>
                    <span class="font-bold text-lg">{{ $sub->user->name ?? '-' }}</span>
                </div>
            </div>
        @empty
            <p class="text-center text-gray-500">Belum ada pembelian.</p>
        @endforelse
    </div>

</x-admin_layout>

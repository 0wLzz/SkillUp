<x-admin_layout>
    <div class="bg-gray-800 border-gray-200">
        <div class="max-w-screen-xl flex p-4 mx-auto">
            <h1 class="text-white text-xl font-bold">Owner Dashboard</h1>
        </div>
    </div>

    <div class="max-w-screen-xl mx-auto mt-12 px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-6">
            {{-- Card --}}
            <div class="bg-white shadow-md rounded-xl p-6 flex flex-col items-center text-center">
                <svg class="w-12 h-12 text-blue-500 mb-2" fill="none" stroke="currentColor" stroke-width="1.5"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                </svg>
                <span class="text-gray-500">Courses</span>
                <span class="text-xl font-bold">{{ $totalCourse }}</span>
            </div>

            <div class="bg-white shadow-md rounded-xl p-6 flex flex-col items-center text-center">
                <svg class="w-12 h-12 text-green-500 mb-2" fill="none" stroke="currentColor" stroke-width="1.5"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                </svg>
                <span class="text-gray-500">Earnings</span>
                <span class="text-xl font-bold">Rp {{ number_format($totalEarnings ?? 0, 0, ',', '.') }}</span>
            </div>

            <div class="bg-white shadow-md rounded-xl p-6 flex flex-col items-center text-center">
                <svg class="w-12 h-12 text-yellow-500 mb-2" fill="none" stroke="currentColor" stroke-width="1.5"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
                </svg>
                <span class="text-gray-500">Transactions</span>
                <span class="text-xl font-bold">{{ $totalTransaction }}</span>
            </div>

            <div class="bg-white shadow-md rounded-xl p-6 flex flex-col items-center text-center">
                <svg class="w-12 h-12 text-purple-500 mb-2" fill="none" stroke="currentColor" stroke-width="1.5"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                </svg>
                <span class="text-gray-500">Students</span>
                <span class="text-xl font-bold">{{ $totalStudents }}</span>
            </div>

            <div class="bg-white shadow-md rounded-xl p-6 flex flex-col items-center text-center">
                <svg class="w-12 h-12 text-indigo-500 mb-2" fill="none" stroke="currentColor" stroke-width="1.5"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>
                <span class="text-gray-500">Tutors</span>
                <span class="text-xl font-bold">{{ $totalTutor }}</span>
            </div>

            <div class="bg-white shadow-md rounded-xl p-6 flex flex-col items-center text-center">
                <svg class="w-12 h-12 text-pink-500 mb-2" fill="none" stroke="currentColor" stroke-width="1.5"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                </svg>
                <span class="text-gray-500">Categories</span>
                <span class="text-xl font-bold">{{ $totalCategories }}</span>
            </div>
        </div>
    </div>
</x-admin_layout>

<x-admin_layout>
    <div class="bg-gray-800 border-gray-200">
        <div class="max-w-screen-xl flex p-4 mx-auto justify-between items-center">
            <h1 class="text-white text-xl font-bold">Manage Tutors</h1>
            <button type="button"
                class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">Add
                New</button>
        </div>
    </div>

    <div class="max-w-screen-xl mx-auto p-4 bg-white rounded-xl mt-12">
        <div class="grid grid-cols-3 p-4 items-center gap-4">
            <div class="flex items-center gap-4">
                <img src="{{ asset('assets/AboutUs.png') }}" class="w-25 h-25 rounded ratio-square object-cover">
                <div class="flex flex-col">
                    <span class="font-bold text-lg">Name</span>
                    <span class="text-gray-400">Work</span>
                </div>
            </div>


            <div class="flex flex-col">
                <span class="text-gray-400">Date</span>
                <span class="font-bold text-lg">1 January 2000</span>
            </div>

            <div class="flex justify-center">
                <button type="button"
                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Delete</button>
            </div>
        </div>
    </div>

</x-admin_layout>

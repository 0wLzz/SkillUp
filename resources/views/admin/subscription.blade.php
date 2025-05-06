<x-admin_layout>
    <div class="bg-gray-800 border-gray-200">
        <div class="max-w-screen-xl flex p-4 mx-auto justify-between items-center">
            <h1 class="text-white text-xl font-bold">Manage Subscription</h1>
            <a href="" type="button"
                class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">Add
                Course</a>
        </div>
    </div>

    <div class="max-w-screen-xl mx-auto p-4 bg-white rounded-xl mt-12">
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
    </div>

</x-admin_layout>

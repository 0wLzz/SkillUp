divdiv<x-layout>
    <div class="bg-gray-800">
        <div class="p-6 bg-gray-900 w-full h-40">
            <header class="mx-auto ml-8 mb-8 grid grid-cols-4 gap-4 items-center">
                <button type="submit" class="flex justify-self-end">
                    <img src="{{ asset('assets/Carousel2.jpg') }}"
                        class="w-50 h-50 aspect-square rounded-full border-4 border-gray-600 object-cover">
                </button>
                <h1 class="text-5xl font-bold text-white justify-self-center">
                    {{ Auth::user()->name }}
                </h1>
            </header>
        </div>

        <div class="p-6 bg-gray-800">
            <div class="container mx-auto mt-20">
                <div class="bg-gray-900 p-4">
                    <h1 class="text-white font-bold text-3xl text-center">Informasi Pribadi</h1>
                </div>
                <form action="" method="POST">
                    @csrf
                    <div class="grid grid-cols-2 py-8 gap-8">
                        <div class="flex flex-col col-span-2">
                            <span class="text-2xl text-white font-bold mb-2">Nama</span>
                            <input type="text" class="border-3 border-gray-600 p-4 text-white"
                                value="{{ Auth::user()->name }}">
                        </div>
                        <div class="flex flex-col col-span-2">
                            <span class="text-2xl text-white font-bold mb-2">Email</span>
                            <input type="email" class="border-3 border-gray-600 p-4 text-white"
                                value="{{ Auth::user()->email }}">
                        </div>
                        <div class="flex flex-col col-span-2">
                            <span class="text-2xl text-white font-bold mb-2">No Handphone</span>
                            <input type="email" class="border-3 border-gray-600 p-4 text-white">
                        </div>
                        <div class="flex flex-col">
                            <span class="text-2xl text-white font-bold mb-2">Jenis Kelamin</span>
                            <select id="sex" class="border-gray-600 p-4 border-3 text-white bg-gray-800">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Attack Helicopter</option>
                            </select>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-2xl text-white font-bold mb-2">Tanggal Lahir</span>
                            <input type="text" class="border-3 border-gray-600 p-4 text-white">
                        </div>
                    </div>

                    <button>
                        Save & Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>

<x-layout>
    <form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data">
        <div class="bg-gray-800">
            <div class="p-6 bg-gray-900 w-full h-40">
                <header class="mx-auto ml-8 mb-8 grid grid-cols-4 gap-4 items-center">
                    <div class="flex justify-self-end">
                        <img id="profile-preview"
                            src="{{ Auth::user()->image ? asset('storage/' . Auth::user()->image) : asset('assets/default-avatarjpg.jpg') }}"
                            class="w-50 h-50 aspect-square rounded-full border-4 border-gray-600 object-cover">
                    </div>
                    <h1 class="text-5xl font-bold text-white justify-self-center">
                        {{ Auth::user()->name }}
                    </h1>
                </header>
            </div>

            <x-alert />

            <div class="p-6 bg-gray-800">
                <div class="container mx-auto mt-20">
                    <div class="bg-gray-900 p-4">
                        <h1 class="text-white font-bold text-3xl text-center">Informasi Pribadi</h1>
                    </div>
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-2 py-8 gap-8">
                        <div class="flex flex-col col-span-2">
                            <span class="text-2xl text-white font-bold mb-2">Profile Picture</span>
                            <input type="file" name="image" id="profile-pciture-input" accept="image/*"
                                class="border-3 border-gray-600 p-4 text-white">
                            @error('image')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col col-span-2">
                            <span class="text-2xl text-white font-bold mb-2">Nama</span>
                            <input type="text" name="name" placeholder="Name"
                                class="border-3 border-gray-600 p-4 text-white" value="{{ Auth::user()->name }}">
                            @error('name')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col col-span-2">
                            <span class="text-2xl text-white font-bold mb-2">Email</span>
                            <input type="email" name="email" placeholder="test@gmail.com"
                                class="border-3 border-gray-600 p-4 text-white" value="{{ Auth::user()->email }}">
                            @error('email')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col col-span-2">
                            <span class="text-2xl text-white font-bold mb-2">No Handphone</span>
                            <input type="text" name="handphone" placeholder="+85 1234 5678 901"
                                value="{{ $user->handphone }}" class="border-3 border-gray-600 p-4 text-white">
                            @error('handphone')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <span class="text-2xl text-white font-bold mb-2">Jenis Kelamin</span>
                            <select id="sex" name="gender"
                                class="border-gray-600 p-4 border-3 text-white bg-gray-800">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Attack Helicopter</option>
                            </select>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-2xl text-white font-bold mb-2">Tanggal Lahir</span>
                            <input id="dob" name="dob" class="border-3 border-gray-600 p-4 text-white">
                            @error('dob')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg text-xl">
                        Save & Submit
                    </button>
                </div>
            </div>
        </div>
    </form>
</x-layout>

<script>
    document.getElementById('profile-pciture-input').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const preview = document.getElementById('profile-preview');

        if (file) {
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
            }

            ;
            reader.readAsDataURL(file);
        }
    });
    flatpickr("#dob", {
        dateFormat: "Y-m-d",
        allowInput: true
    });
</script>

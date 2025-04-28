<x-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 md:h-screen mx-auto lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img src="{{ asset('assets/SkillUp.png') }}" alt="logo">
            </a>
            <div
                class="relative z-10 w-full bg-white rounded-lg shadow dark:border sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1
                        class="text-xl text-center font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Register as Tutor
                    </h1>

                    <div class="grid grid-cols-3 text-white text-lg underline text-center">
                        <a href="{{ route('register_student') }}">Student</a>
                        <span>|</span>
                        <a href="{{ route('register_tutor') }}" class="text-blue-400">Tutor</a>
                    </div>

                    @if ($errors->any())
                        <div class="text-red-600 mb-4">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>• {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="space-y-4 md:space-y-6" action="{{ route('register_tutor.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div>
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                            <input type="text" name="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:text-white"
                                placeholder="John Doe" required>
                        </div>

                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:text-white"
                                placeholder="you@example.com" required>
                        </div>

                        <div>
                            <label for="phone"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                                Telepon</label>
                            <input type="text" name="phone" id="phone"
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:text-white"
                                placeholder="081234567890" required>
                        </div>

                        <div>
                            <label for="portfolio"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Portofolio</label>
                            <input type="file" name="portfolio" id="portfolio"
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:text-white"
                                required>
                        </div>

                        <button type="submit"
                            class="w-full text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Sign up
                        </button>

                        <p class="text-sm font-light text-gray-500 dark:text-gray-400 text-center">
                            Sudah punya akun?
                            <a href="{{ route('login_page') }}"
                                class="font-medium text-blue-600 hover:underline dark:text-blue-500">Login di sini</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>

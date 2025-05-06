<x-layout>
    <div class="bg-gray-800 min-h-screen">
        <!-- Header -->
        <div class="p-6 bg-gray-900 w-full">
            <header class="flex justify-center items-center">
                <h1 class="text-5xl font-bold text-white">Edit Course</h1>
            </header>
        </div>

        <!-- Main Form -->
        <div class="p-6 bg-gray-800">
            <div class="container mx-auto mt-20">
                <!-- Title -->
                <div class="bg-gray-900 p-4 rounded">
                    <h2 class="text-white font-bold text-3xl text-center">Course Information</h2>
                </div>

                <form method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-2 gap-8 py-8">
                        <!-- Course Title -->
                        <div class="flex flex-col col-span-2">
                            <label class="text-2xl text-white font-bold mb-2">Course Title</label>
                            <input name="title" type="text" value="{{ $course->title ?? '' }}"
                                class="border-3 border-gray-600 p-4 text-white bg-gray-700 rounded">
                        </div>

                        <!-- Subtitle -->
                        <div class="flex flex-col col-span-2">
                            <label class="text-2xl text-white font-bold mb-2">Subtitle</label>
                            <input name="subtitle" type="text" value="{{ $course->subtitle ?? '' }}"
                                class="border-3 border-gray-600 p-4 text-white bg-gray-700 rounded">
                        </div>

                        <!-- Description -->
                        <div class="flex flex-col col-span-2">
                            <label class="text-2xl text-white font-bold mb-2">Description</label>
                            <textarea name="description" rows="6" class="border-3 border-gray-600 p-4 text-white bg-gray-700 rounded">{{ $course->description ?? '' }}</textarea>
                        </div>

                        <!-- Category -->
                        <div class="flex flex-col">
                            <label class="text-2xl text-white font-bold mb-2">Category</label>
                            <select name="category" class="border-gray-600 p-4 border-3 text-white bg-gray-700 rounded">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->name }}"
                                        {{ ($course->category->name ?? '') == $category->name ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Price -->
                        <div class="flex flex-col">
                            <label class="text-2xl text-white font-bold mb-2">Price (IDR)</label>
                            <input name="price" type="number" value="{{ $course->price ?? 0 }}"
                                class="border-3 border-gray-600 p-4 text-white bg-gray-700 rounded">
                        </div>

                        <!-- Thumbnail Image -->
                        <div class="flex flex-col col-span-2">
                            <label class="text-2xl text-white font-bold mb-2">Thumbnail Image</label>
                            <div class="flex items-center gap-4">
                                @if (isset($course->thumbnail))
                                    <img src="{{ asset('storage/' . $course->thumbnail) }}"
                                        class="w-20 h-20 object-cover rounded">
                                @endif
                                <input name="thumbnail" type="file"
                                    class="border-3 border-gray-600 p-4 text-white bg-gray-700 rounded">
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-span-2 flex justify-center mt-8">
                            <button type="submit"
                                class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg text-xl">
                                Save Changes
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>

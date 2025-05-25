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
            <div class="container mx-auto">

                <form method="POST" action="{{ route('courses.update', $course) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="col-span-2 flex justify-end my-4">
                        <button type="submit"
                            class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg text-xl">
                            Save Changes
                        </button>
                    </div>

                    <!-- Title -->
                    <div class="bg-gray-900 p-4 rounded">
                        <h2 class="text-white font-bold text-3xl text-center">Course Information</h2>
                        <!-- Submit Button -->
                    </div>


                    <div class="grid grid-cols-2 gap-8 py-8">
                        <!-- Thumbnail Image -->
                        <div>
                            <div class="mb-4">
                                <span class="text-white mb-2 block">Current Thumbnail:</span>
                                <img id="thumbnail-preview"
                                    src="{{ isset($course->thumbnail) ? asset('storage/' . $course->thumbnail) : asset('assets/AboutUs.png') }}"
                                    class="w-32 h-32 object-cover rounded border border-gray-500"
                                    alt="Course Thumbnail">
                            </div>

                            <label class="text-2xl text-white font-bold mb-2">Thumbnail Image</label>
                            <div class="flex items-center gap-4">
                                <input id="thumbnail-input" name="thumbnail" type="file" accept="image/*"
                                    class="border-3 border-gray-600 p-4 text-white bg-gray-700 rounded">
                                @error('thumbnail')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Course Title -->
                        <div class="flex flex-col col-span-2">
                            <label class="text-2xl text-white font-bold mb-2">Course Title</label>
                            <input name="title" type="text" value="{{ $course->title }}"
                                class="border-3 border-gray-600 p-4 text-white bg-gray-700 rounded">
                            @error('title')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Subtitle -->
                        <div class="flex flex-col col-span-2">
                            <label class="text-2xl text-white font-bold mb-2">Subtitle</label>
                            <input name="subtitle" type="text" value="{{ $course->subtitle ?? '' }}"
                                class="border-3 border-gray-600 p-4 text-white bg-gray-700 rounded">
                            @error('subtitle')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Description -->
                        <div class="flex flex-col col-span-2">
                            <label class="text-2xl text-white font-bold mb-2">Description</label>
                            <textarea name="description" rows="6" class="border-3 border-gray-600 p-4 text-white bg-gray-700 rounded">{{ $course->description ?? '' }}</textarea>
                            @error('description')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Category -->
                        <div class="flex flex-col">
                            <label class="text-2xl text-white font-bold mb-2">Category</label>
                            <select name="category" class="border-gray-600 p-4 border-3 text-white bg-gray-700 rounded">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ ($course->category()->name ?? '') == $category->name ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Price -->
                        <div class="flex flex-col">
                            <label class="text-2xl text-white font-bold mb-2">Price (IDR)</label>
                            <input name="price" value="{{ $course->price ?? 0 }}"
                                class="border-3 border-gray-600 p-4 text-white bg-gray-700 rounded">
                            @error('price')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Benefits --}}
                        <div class="col-span-2">
                            <label class="text-2xl text-white font-bold mb-2">Course Benefits</label>
                            <div id="benefit-fields" class="flex flex-col gap-3">
                                @if (isset($course->benefits) && count($course->benefits))
                                    @foreach ($course->benefits as $benefit)
                                        <div class="benefit-item flex gap-4 items-center">
                                            <input type="text" name="benefits[]" value="{{ $benefit->benefit }}"
                                                class="border-3 border-gray-600 p-4 text-white bg-gray-700 rounded w-full"
                                                required>
                                            <button type="button"
                                                class="remove-benefit px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">
                                                Remove
                                            </button>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="benefit-item flex gap-4 items-center">
                                        <input type="text" name="benefits[]" placeholder="Enter benefit..."
                                            class="border-3 border-gray-600 p-4 text-white bg-gray-700 rounded w-full"
                                            required>
                                        <button type="button"
                                            class="remove-benefit px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">
                                            Remove
                                        </button>
                                    </div>
                                @endif
                            </div>
                            @error('benefits[]')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror

                            <button type="button" id="add-benefit-field"
                                class="mt-3 px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
                                + Add Another Benefit
                            </button>
                        </div>
                    </div>
                </form>

                {{-- Curriculums --}}
                <div class="col-span-2 mb-10">
                    <label class="text-2xl text-white font-bold mb-2">Course Curriculums</label>
                    <div id="curriculum-fields" class="flex flex-col gap-3">
                        @if (isset($course->curriculums) && count($course->curriculums))
                            @foreach ($course->curriculums as $c)
                                <div class="benefit-item flex gap-4 items-center">
                                    <span type="text"
                                        class="border-3 border-gray-600 p-4 text-white bg-gray-700 rounded w-full">{{ $c->title }}
                                    </span>

                                    <form action="">
                                        <button type="sbumit"
                                            class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                                            Manage
                                        </button>
                                    </form>
                                    <form method="POST" action="{{ route('tutor.curriculum.delete', $c) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">
                                            Remove
                                        </button>
                                    </form>

                                </div>
                            @endforeach
                        @else
                            <div class="flex gap-4 items-center">
                                <form id="curriculumForm" action="{{ route('tutor.curriculum.store', $course) }}"
                                    method="POST" class="w-full flex gap-4 items-center">
                                    @csrf
                                    <input id="inputCurriculum" type="text" name="title"
                                        placeholder="Enter curriculum..."
                                        class="border-3 border-gray-600 p-4 text-white bg-gray-700 rounded w-full">
                                    <button type="submit"
                                        class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
                                        Add
                                    </button>
                                    <button type="button"
                                        class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">
                                        Remove
                                    </button>
                                </form>
                            </div>
                        @endif
                    </div>
                    <button type="button" id="add-curriculum-field"
                        class="mt-3 px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
                        + Add Another Curriculum
                    </button>
                </div>

            </div>
        </div>
    </div>
</x-layout>

<script>
    // Add Benefit Field
    document.getElementById('add-benefit-field').addEventListener('click', function() {
        const container = document.getElementById('benefit-fields');

        const benefitItem = document.createElement('div');
        benefitItem.className = 'benefit-item flex gap-4 items-center';

        const input = document.createElement('input');
        input.type = 'text';
        input.name = 'benefits[]';
        input.className = 'border-3 border-gray-600 p-4 text-white bg-gray-700 rounded w-full';
        input.placeholder = 'Enter benefit...';
        input.required = true;

        const removeBtn = document.createElement('button');
        removeBtn.type = 'button';
        removeBtn.className = 'px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700';
        removeBtn.innerText = 'Remove';

        removeBtn.addEventListener('click', function() {
            benefitItem.remove();
        });

        benefitItem.appendChild(input);
        benefitItem.appendChild(removeBtn);
        container.appendChild(benefitItem);
    });

    document.getElementById('add-curriculum-field').addEventListener('click', function() {
        const container = document.getElementById('curriculum-fields');

        const benefitItem = document.createElement('div');
        benefitItem.className = 'benefit-item flex gap-4 items-center';

        // Create form
        const form = document.createElement('form');
        form.action = "{{ route('tutor.curriculum.store', $course) }}"; // Blade route
        form.method = 'POST';
        form.className = 'w-full flex gap-4 items-center';

        // CSRF Token (required for Laravel)
        const csrfToken = "{{ csrf_token() }}";
        const csrfInput = document.createElement('input');
        csrfInput.type = 'hidden';
        csrfInput.name = '_token';
        csrfInput.value = csrfToken;

        // Input field
        const input = document.createElement('input');
        input.type = 'text';
        input.name = 'title';
        input.className = 'border-3 border-gray-600 p-4 text-white bg-gray-700 rounded w-full';
        input.placeholder = 'Enter curriculum...';
        input.required = true;

        // Add button (submit)
        const addBtn = document.createElement('button');
        addBtn.type = 'submit';
        addBtn.className = 'px-8 py-2 bg-green-600 text-white rounded hover:bg-green-700';
        addBtn.innerText = 'Add';

        // Remove button
        const removeBtn = document.createElement('button');
        removeBtn.type = 'button';
        removeBtn.className = 'px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700';
        removeBtn.innerText = 'Remove';

        removeBtn.addEventListener('click', () => {
            benefitItem.remove();
        });

        // Append to form
        form.appendChild(csrfInput);
        form.appendChild(input);
        form.appendChild(addBtn);
        form.appendChild(removeBtn);

        // Add form to the benefitItem container
        benefitItem.appendChild(form);
        container.appendChild(benefitItem);
    });


    // Attach delete logic to existing buttons on page load
    // document.querySelectorAll('.remove-benefit').forEach(function(btn) {
    //     btn.addEventListener('click', function() {
    //         btn.closest('.benefit-item').remove();
    //     });
    // });

    // Javascript Image Change
    document.getElementById('thumbnail-input').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const preview = document.getElementById('thumbnail-preview');

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });
</script>

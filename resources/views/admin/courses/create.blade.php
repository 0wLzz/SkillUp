<x-admin_layout>
    <div class="max-w-xl mx-auto p-6 bg-white rounded shadow">
        <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label>Title</label>
            <input type="text" name="title" class="w-full border p-2 mb-2">

            <label>Subtitle</label>
            <input type="text" name="subtitle" class="w-full border p-2 mb-2">

            <label>Teacher</label>
            <input type="text" name="teacher" class="w-full border p-2 mb-2">

            <label>Thumbnail</label>
            <input type="file" name="thumbnail" class="w-full border p-2 mb-4">

            <button class="bg-blue-600 text-white px-4 py-2 rounded">Save</button>
        </form>
    </div>
</x-admin_layout>

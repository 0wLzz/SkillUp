<x-admin_layout>
    <div class="max-w-xl mx-auto p-6 bg-white rounded shadow">
        <form action="{{ route('category.store') }}" method="POST">
            @csrf
            <label>Name</label>
            <input type="text" name="name" class="w-full border p-2 mb-2">

            <button class="bg-blue-600 text-white px-4 py-2 rounded">Save</button>
        </form>
    </div>
</x-admin_layout>

<x-layout>
    <div class="max-h-screen-xl">
        {{-- Hero Component --}}
        <x-home.hero />

        {{-- About Us Component --}}
        <x-home.aboutus />
    </div>

    <div class="bg-gradient-to-b from-gray-800 via-gray-900 to-gray-900">
        {{-- Courses Component --}}
        <x-home.courses :courses="$courses" />

        {{-- Expert Component --}}
        <x-home.experts :tutors="$tutors" />

        {{-- Testimonies Component --}}
        <x-home.testimonies />
    </div>
</x-layout>

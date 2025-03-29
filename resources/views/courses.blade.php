<x-layout>
    <section class="bg-white dark:bg-gray-900 h-min-screen items-center pb-8">
        <div class="max-w-screen-xl mx-auto">
            <div class="grid grid-cols-3 mb-8">
                <h1 class="col-span-3 text-center font-bold text-5xl text-white my-24">
                    <span class="underline underline-offset-12">Top</span> 
                    <span class="underline underline-offset-12 text-blue-600"> Courses </span>
                </h1>

                <x-card.course />
                <x-card.course />
                <x-card.course />
            </div>

            <div id="category-carousel" class="items-center relative w-full text-center bg-gray-800 rounded drop-shadow-xl text-gray-500 mb-6 sm:text-lg dark:text-gray-400">
                <!-- Category Display -->
                <div class="relative h-16 flex items-center justify-center text-2xl font-bold gap-24">
                    <span id="category-label-1" class="text-blue-400">Leadership</span>
                    <span id="category-label-2" class="">Communication</span>
                    <span id="category-label-3" class="">Problem Solving</span>
                    <span id="category-label-4" class="">Time Managment</span>
                </div>

                <!-- Slider controls -->
                <button id="prev-category" type="button" class="absolute left-0 top-1/2 transform -translate-y-1/2 px-4 py-2">
                    <svg class="w-4 h-4 text-white dark:text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                </button>
                
                <button id="next-category" type="button" class="absolute right-0 top-1/2 transform -translate-y-1/2 px-4 py-2">
                    <svg class="w-4 h-4 text-white dark:text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                </button>
            </div>


            <div class="grid grid-cols-4 gap-8 gap-y-10">
               <x-card.course />
               <x-card.course />
               <x-card.course />
               <x-card.course />

            </div>

        </div>

    </section>
</x-layout>
<style>
    .text-image {
        position: relative;
        background-image: url('https://thumbs.dreamstime.com/b/smiling-professional-business-leaders-employees-group-team-portrait-coaches-mentors-posing-together-diverse-office-141681202.jpg');
        background-size: cover;
        background-position: top;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        color: transparent;
    }
</style>

<!-- Experts -->
<section id="experts">
    <div class="max-w-screen-xl px-4 py-8 mx-auto">
        <div class="flex items-center justify-center mb-8">
            <div class="row-span-2 text-right">
                <h1 class="text-6xl font-extrabold tracking-tight text-white">MEET</h1>
                <h1 class="text-6xl font-extrabold tracking-tight text-white">THE</h1>
            </div>

            <h1 class=" text-[20vh] font-extrabold text-image">EXPERTS</h1>
        </div>

        <div class="grid grid-cols-4 gap-8 mb-8">
            @foreach ($tutors as $tutor)
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <a href="{{route('tutor_detail', $tutor)}}">
                        <img class="rounded-t-lg" src="{{ asset('assets/Carousel2.jpg') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="{{route('tutor_detail', $tutor)}}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $tutor->name }}
                            </h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-400">{{ $tutor->occupation }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</section>
<!-- End block -->

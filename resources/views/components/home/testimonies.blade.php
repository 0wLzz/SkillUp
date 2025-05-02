<style>
    #scroller {
        -webkit-mask: linear-gradient(90deg, transparent, white 5%, white 95%, transparent)
    }
</style>

<section id="testimonies" class="px-6 py-10 flex flex-col items-center overflow-hidden">
    <!-- Title -->
    <h1 class="font-bold text-5xl text-white mb-8 text-center">
        Apa yang
        <span class="text-blue-600 underline underline-offset-4">Client</span>
        Katakan!
    </h1>

    <!-- Scrolling Container -->
    <div class="relative w-full max-w-7xl overflow-hidden" id="scroller">
        <div class="flex gap-6 animate-scroll whitespace-nowrap ">
            @for ($i = 0; $i < 2; $i++)
                <div class="flex gap-6">
                    @for ($j = 0; $j < 3; $j++)
                        <div class="text-white bg-gray-800 rounded-xl p-8 min-w-[24rem] max-w-sm">
                            <div class="flex items-center gap-6">
                                <div class="flex flex-col items-center font-bold">
                                    <img src="{{ asset('assets/AboutUs.png') }}"
                                        class="w-32 aspect-square object-cover rounded-lg">
                                    <h3>Alex Johnson</h3>
                                    <h3>Mahasiswa IT</h3>
                                </div>
                                <p class="text-sm text-wrap">
                                    Hasil kerja mereka luar biasa! Sangat merekomendasikan kepada siapa pun yang butuh
                                    jasa profesional.
                                </p>
                            </div>
                        </div>
                    @endfor
                </div>
            @endfor
        </div>
    </div>
</section>

<style>
    @keyframes scroll {
        0% {
            transform: translateX(0%);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    .animate-scroll {
        animation: scroll 30s linear infinite;
    }
</style>

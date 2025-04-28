@extends('layout.base')
@section('title', __('Home'))

@section('content')
    <div class="">
        <div class="bg-white">
            <header 
                x-data="{ mobileMenuOpen: false }"
                class="absolute inset-x-0 top-0 z-50">
                <nav class="flex items-center justify-between p-6 lg:px-20" aria-label="Global">
                    <div class="flex lg:flex-1">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">Your Company</span>
                            <img class="h-8 w-auto"
                                src="{{ asset('assets/images/favicon.png') }}"
                                alt="">
                        </a>
                    </div>
                    <div class="flex lg:hidden">
                        <button type="button"
                            x-on:click="mobileMenuOpen = true"
                            class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                            <span class="sr-only">Open main menu</span>
                            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>
                    </div>
                    <div class="hidden lg:flex lg:gap-x-12">
                        <a href="#" class="text-sm/6 font-semibold text-gray-900">Home</a>
                        <a href="#" class="text-sm/6 font-semibold text-gray-900">Screen</a>
                        <a href="#" class="text-sm/6 font-semibold text-gray-900">About</a>
                        <a href="#" class="text-sm/6 font-semibold text-gray-900">Contact</a>
                    </div>
                    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                        <a href="#" class="text-sm/6 font-semibold text-gray-900">Log in <span
                                aria-hidden="true">&rarr;</span></a>
                    </div>
                </nav>
                <!-- Mobile menu, show/hide based on menu open state. -->
                <div
                    x-show="mobileMenuOpen" 
                    class="lg:hidden" 
                    role="dialog" 
                    aria-modal="true">
                    <!-- Background backdrop, show/hide based on slide-over state. -->
                    <div class="fixed inset-0 z-50"></div>
                    <div
                        class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                        <div class="flex items-center justify-between">
                            <a href="#" class="-m-1.5 p-1.5">
                                <span class="sr-only">Your Company</span>
                                <img class="h-8 w-auto"
                                    src="{{ asset('assets/images/favicon.png') }}"
                                    alt="">
                            </a>
                            <button 
                                x-on:click="mobileMenuOpen = false"
                                type="button" 
                                class="-m-2.5 rounded-md p-2.5 text-gray-700">
                                <span class="sr-only">Close menu</span>
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true" data-slot="icon">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <div class="mt-6 flow-root">
                            <div class="-my-6 divide-y divide-gray-500/10">
                                <div class="space-y-2 py-6">
                                    <a href="#"
                                        class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Home</a>
                                    <a href="#"
                                        class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Screen</a>
                                    <a href="#"
                                        class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">About</a>
                                    <a href="#"
                                        class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Contact</a>
                                </div>
                                <div class="py-6">
                                    <a href="#"
                                        class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Log
                                        in</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="relative isolate px-6 pt-14 lg:px-8">
                <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
                    aria-hidden="true">
                    <div class="relative left-[calc(50%-11rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-linear-to-tr from-[#A8C3A6] to-[#36A9E1] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                        style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                    </div>
                </div>
                <div class="mx-auto max-w-6xl py-32 sm:py-40 lg:py-50">
                    <div class="text-center">
                        <h1 class="text-4xl font-semibold font-arabic tracking-tight text-balance text-gray-900 sm:text-5xl"
                            id="ayat-arab">One Day One Ayah</h1>
                        <p class="mt-8 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8"
                            id="ayat-terjemahan">Meaning</p>
                        <p class="mt-3 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8"
                            id="nama-surah">Name Of Surah</p>
                        <div class="mt-10 flex items-center justify-center gap-x-6">
                            <a href="#"
                                class="rounded-md bg-sage-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-sage-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sage-600">Get
                                started</a>
                            <a href="#" class="text-sm/6 font-semibold text-gray-900">Learn more <span
                                    aria-hidden="true">→</span></a>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-40rem)]"
                    aria-hidden="true">
                    <div class="relative left-[calc(50%+3rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 bg-linear-to-tr from-[#A8C3A6] to-[#36A9E1] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                        style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        function tampilkanAyatRandom() {
            // var randomSurah = Math.floor(Math.random() * 114) + 1;
            // agar dari juz 28 - 30 aja
            var randomSurah = Math.floor(Math.random() * (114 - 58 + 1)) + 67;

            // Fetch Arabic
            $.ajax({
                url: 'https://api.alquran.cloud/v1/surah/' + randomSurah + '/ar.alafasy',
                method: 'GET',
                dataType: 'json',
                success: function(responseArab) {
                    let surahName = responseArab.data.englishName;
                    let ayahsArab = responseArab.data.ayahs;
                    let randomAyatIndex = Math.floor(Math.random() * ayahsArab.length);
                    let randomAyatArab = ayahsArab[randomAyatIndex];

                    // Fetch Indonesian translation
                    $.ajax({
                        url: 'https://api.alquran.cloud/v1/surah/' + randomSurah + '/id.indonesian',
                        method: 'GET',
                        dataType: 'json',
                        success: function(responseIndo) {
                            let ayahsIndo = responseIndo.data.ayahs;
                            let randomAyatIndo = ayahsIndo[randomAyatIndex];

                            // Tampilkan
                            $('#nama-surah').text('(' + surahName + ' :' + randomAyatArab
                                .numberInSurah + ')');
                            $('#ayat-arab').text(randomAyatArab.text);
                            $('#ayat-terjemahan').text(randomAyatIndo.text.charAt(0).toUpperCase() + randomAyatIndo.text.slice(1));
                            // $('#ayat-terjemahan').text(randomAyatIndo.text);
                        },
                        error: function(xhr, status, error) {
                            console.error('Gagal fetch terjemahan:', error);
                        }
                    });

                },
                error: function(xhr, status, error) {
                    console.error('Gagal fetch Arab:', error);
                }
            });
        }

        // Jalankan saat halaman dibuka
        $(document).ready(function() {
            tampilkanAyatRandom();
        });
    </script>
@endpush

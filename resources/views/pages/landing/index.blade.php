@extends('layout.base')
@section('title', __('Home'))

@section('content')
    <div class="">
        <div class="bg-white">
            @include('components.navbar')

            <main>
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
                            <p class="mt-8 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8" id="ayat-terjemahan">
                                Meaning</p>
                            <p class="mt-3 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8" id="nama-surah">Name
                                Of Surah</p>
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

                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:mb-10 ">
                    <h1
                        class="text-4xl font-semibold tracking-tight text-balance text-gray-900 sm:text-5xl text-center mb-20">
                        Jadwal Sholat
                    </h1>
                    <div class="flex flex-col sm:flex-row space-x-4">
                        <!-- Kolom Kiri -->
                        <div class="w-full sm:w-3/5 space-y-4">
                            <div
                                class="h-[calc(100%/7*5)] bg-[url(/public/assets/images/mosque.jpg)] bg-bottom bg-cover rounded-lg">
                                {{-- <img src="{{ asset('assets/images/mosque.jpg') }}"
                                    class="rounded-lg h-full w-full object-cover"    
                                    alt="mosque"> --}}
                            </div>
                            <div class="bg-sage-50 p-4 rounded-lg flex gap-4 items-center">
                                <img src="{{ asset('assets/icons/ic-maps.svg') }}" class="h-9" alt="ic-maps">
                                <div class="flex flex-col sm:flex-row w-full justify-between items-start">
                                    <p class="text-lg sm:text-xl/5 w-1/2" id="lokasi">Memuat...</p>
                                    <p class="text-lg sm:text-xl/5 w-1/2 text-end" id="waktu-menuju-salat"></p>
                                </div>
                            </div>
                            <div class="bg-sage-50 p-4 rounded-lg flex gap-4 items-center">
                                <img src="{{ asset('assets/icons/ic-calender.svg') }}" class="h-9" alt="ic-calender">
                                <div class="flex flex-col sm:flex-row w-full justify-between items-center">
                                    <p class="text-lg sm:text-xl/6 w-1/2" id="tanggal-masehi">Memuat...</p>
                                    <p class="text-lg sm:text-xl/6 w-1/2 text-end font-arabic" id="tanggal-hijriah"></p>
                                </div>
                            </div>
                        </div>

                        <!-- Kolom Kanan -->
                        <div class="w-full sm:w-2/5 space-y-4" id="waktu-sholat-list">
                            <div class="bg-sage-50 p-4 rounded-lg flex gap-4 items-center">
                                <img src="{{ asset('assets/icons/ic-imsak.svg') }}" class="h-10" alt="ic-imsak">
                                {{-- data dari jquery --}}
                            </div>
                            <div class="bg-sage-50 p-4 rounded-lg flex gap-6 items-center">
                                <img src="{{ asset('assets/icons/ic-subuh.svg') }}" class="h-10" alt="ic-subuh">
                                {{-- data dari jquery --}}
                            </div>
                            <div class="bg-sage-50 p-4 rounded-lg flex gap-6 items-center">
                                <img src="{{ asset('assets/icons/ic-tarbit.svg') }}" class="h-10" alt="ic-tarbit">
                                {{-- data dari jquery --}}
                            </div>
                            <div class="bg-sage-50 p-4 rounded-lg flex gap-6 items-center">
                                <img src="{{ asset('assets/icons/ic-dzuhur.svg') }}" class="h-10" alt="ic-dzuhur">
                                {{-- data dari jquery --}}
                            </div>
                            <div class="bg-sage-50 p-4 rounded-lg flex gap-6 items-center">
                                <img src="{{ asset('assets/icons/ic-ashar.svg') }}" class="h-10" alt="ic-ashar">
                                {{-- data dari jquery --}}
                            </div>
                            <div class="bg-sage-50 p-4 rounded-lg flex gap-6 items-center">
                                <img src="{{ asset('assets/icons/ic-maghrib.svg') }}" class="h-10" alt="ic-maghrib">
                                {{-- data dari jquery --}}
                            </div>
                            <div class="bg-sage-50 p-4 rounded-lg flex gap-6 items-center">
                                <img src="{{ asset('assets/icons/ic-isya.svg') }}" class="h-9" alt="ic-isya">
                                {{-- data dari jquery --}}
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            @include('components.footer')
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
                            $('#ayat-terjemahan').text(randomAyatIndo.text.charAt(0).toUpperCase() +
                                randomAyatIndo.text.slice(1));
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

        function convertHijriToArabicMonth(month) {
            const months = [
                'محرم', 'صفر', 'ربيع الأول', 'ربيع الثاني',
                'جمادى الأولى', 'جمادى الثانية', 'رجب',
                'شعبان', 'رمضان', 'شوال', 'ذوالقعدة', 'ذوالحجة'
            ];
            // console.log(`Month ${month} converted to Arabic: ${months[month - 1]}`);
            return months[month - 1]; // month is 1-based
        }

        function toArabicNumber(str) {
            const arabicDigits = ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'];
            return str.toString().split('').map(d => arabicDigits[d] || d).join('');
        }

        // console.log("iussddh");

        function tampilkanTanggal(lat, lon) {
            const masehi = moment().format('dddd, D MMMM YYYY');

            // Mengambil data Hijriah dari API
            fetch(
                    `https://api.aladhan.com/v1/timings?latitude=${lat}&longitude=${lon}&method=20`)
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'OK') {
                        const hijriDate = data.data.date.hijri.date.split('-');
                        const hijriDay = hijriDate[0]; // Hari
                        const hijriMonth = convertHijriToArabicMonth(parseInt(hijriDate[1])); // Bulan dalam bahasa Arab
                        const hijriYear = hijriDate[2]; // Tahun Hijriah
                        // console.log("auisyhd");

                        // Menampilkan tanggal Masehi dan Hijriah
                        document.getElementById('tanggal-masehi').innerText = `${masehi}`;
                        document.getElementById('tanggal-hijriah').innerText =
                            `${toArabicNumber(hijriDay)} ${hijriMonth} ${toArabicNumber(hijriYear)}`;
                    }
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                });
        }

        function tampilkanJadwalSalat(timings) {
            const namaSalatKeys = ['Imsak', 'Fajr', 'Sunrise', 'Dhuhr', 'Asr', 'Maghrib', 'Isha'];
            const namaSalatLabels = ['Imsak', 'Subuh', 'Terbit', 'Dzuhur', 'Ashar', 'Maghrib', 'Isya'];

            const list = document.getElementById('waktu-sholat-list');
            const items = list.querySelectorAll('div.bg-sage-50, div.bg-sage-300');

            // Ambil waktu saat ini (dalam menit)
            const now = new Date();
            const nowMinutes = now.getHours() * 60 + now.getMinutes();

            // Konversi semua waktu salat ke menit
            const waktuMenit = namaSalatKeys.map(k => {
                const [h, m] = timings[k].split(':').map(Number);
                return h * 60 + m;
            });

            // Tentukan indeks salat yang aktif saat ini
            let activeIndex = 0;
            for (let i = 0; i < waktuMenit.length; i++) {
                if (nowMinutes >= waktuMenit[i]) {
                    activeIndex = i;
                } else {
                    break;
                }
            }

            items.forEach((item, index) => {
                const key = namaSalatKeys[index];
                const labelText = namaSalatLabels[index];
                const waktuText = timings[key];

                if (!waktuText) return;

                // Atur background sesuai status aktif
                item.classList.remove('bg-sage-50', 'bg-sage-300');
                item.classList.add(index === activeIndex ? 'bg-sage-300' : 'bg-sage-50');

                // Tampilkan label dan jam
                let teksLabel = item.querySelector('.waktu-label');
                let teksJam = item.querySelector('.waktu-jam');

                if (!teksLabel || !teksJam) {
                    const wrapper = document.createElement('div');
                    wrapper.className = 'flex w-full justify-between items-center';

                    teksLabel = document.createElement('p');
                    teksLabel.className = 'text-lg sm:text-xl/6 waktu-label';

                    teksJam = document.createElement('p');
                    teksJam.className = 'text-lg sm:text-xl/6 waktu-jam';

                    wrapper.appendChild(teksLabel);
                    wrapper.appendChild(teksJam);
                    item.appendChild(wrapper);
                }

                teksLabel.textContent = labelText;
                teksJam.textContent = waktuText;
            });
        }


        function tampilkanMenujuWaktuBerikutnya(timings) {
            const now = moment();
            const urutanSalat = ['Imsak', 'Fajr', 'Sunrise', 'Dhuhr', 'Asr', 'Maghrib', 'Isha'];
            const namaSalat = {
                Imsak: 'Imsak',
                Fajr: 'Subuh',
                Sunrise: 'Terbit',
                Dhuhr: 'Dzuhur',
                Asr: 'Ashar',
                Maghrib: 'Maghrib',
                Isha: 'Isya'
            };

            for (let i = 0; i < urutanSalat.length; i++) {
                const waktuSalat = moment(timings[urutanSalat[i]], 'HH:mm');
                if (now.isBefore(waktuSalat)) {
                    const durasi = moment.duration(waktuSalat.diff(now));
                    const jam = Math.floor(durasi.asHours());
                    const menit = durasi.minutes();
                    const nama = namaSalat[urutanSalat[i]];

                    let teks = '';
                    if (jam === 0 && menit === 0) {
                        teks = `Waktu ${nama} tiba`;
                    } else if (jam === 0) {
                        teks = `Menuju Waktu ${nama} ± ${menit} menit`;
                    } else {
                        teks = `Menuju Waktu ${nama} ± ${jam} jam ${menit} menit`;
                    }

                    document.getElementById('waktu-menuju-salat').innerText = teks;
                    break;
                }
            }
        }

        function getLocationName(lat, lon) {
            fetch(
                    `https://api.bigdatacloud.net/data/reverse-geocode-client?latitude=${lat}&longitude=${lon}&localityLanguage=id`
                )
                .then(res => res.json())
                .then(data => {
                    const adminLevels = data.localityInfo.administrative;

                    let negara = '',
                        provinsi = '',
                        kabupaten = '',
                        kecamatan = '';

                    adminLevels.forEach(level => {
                        switch (level.adminLevel) {
                            case 2:
                                negara = level.name;
                                break;
                            case 4:
                                provinsi = level.name;
                                break;
                            case 5:
                                kabupaten = level.name;
                                break;
                            case 6:
                                kecamatan = level.name;
                                break;
                        }
                    });

                    const lokasi = `${kecamatan}, ${kabupaten}, <br>${provinsi}, ${negara}`;
                    document.getElementById('lokasi').innerHTML = `${lokasi}`;
                })
                .catch(() => {
                    document.getElementById('lokasi').innerText = 'Lokasi tidak ditemukan';
                });
        }


        function dapatkanJadwalSalat(lat, lon) {
            const url = `https://api.aladhan.com/v1/timings?latitude=${lat}&longitude=${lon}&method=20`;
            fetch(url)
                .then(res => res.json())
                .then(data => {
                    const timings = data.data.timings;
                    tampilkanTanggal(lat, lon);
                    tampilkanJadwalSalat(timings);
                    tampilkanMenujuWaktuBerikutnya(timings);
                });
        }

        function mulai() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(pos => {
                    const lat = pos.coords.latitude;
                    const lon = pos.coords.longitude;
                    // console.log("lat" + lat);
                    // console.log("lon" + lon);

                    getLocationName(lat, lon);
                    dapatkanJadwalSalat(lat, lon);
                }, () => {
                    document.getElementById('lokasi').innerText = 'Gagal mendapatkan lokasi.';
                });
            } else {
                document.getElementById('lokasi').innerText = 'Geolocation tidak didukung.';
            }
        }

        mulai();
    </script>
@endpush

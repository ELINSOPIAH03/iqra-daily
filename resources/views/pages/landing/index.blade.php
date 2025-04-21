@extends('layout.base')
@section('title', __('Home'))

@section('content')
    <div id="ayat-arab" style="font-size: 24px; margin-bottom: 10px;"></div>
    <div id="ayat-terjemahan" style="font-size: 18px; color: gray;"></div>
    <div id="nama-surah" style="font-size: 20px; font-weight: bold; margin-bottom: 5px;"></div>
@endsection

@push('script')
    <script>
        function tampilkanAyatRandom() {
            var randomSurah = Math.floor(Math.random() * 114) + 1;

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
                            $('#nama-surah').text('(' + surahName + ' :' + randomAyatArab.numberInSurah + ')');
                            $('#ayat-arab').text(randomAyatArab.text);
                            $('#ayat-terjemahan').text(randomAyatIndo.text);
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
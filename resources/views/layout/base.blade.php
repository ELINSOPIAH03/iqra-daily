<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title') - Iqra Daily</title>

        {{-- Favicons --}}
        <link href="{{ asset('assets/images/favicon.png') }}"
            rel="icon">
        <link rel="shortcut icon"
            href="{{ asset('assets/images/favicon.png') }}" />

        {{-- Bootstrap 5 CSS & Icons --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
            crossorigin="anonymous">

        {{-- Select2 Bootstrap --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />

        
        {{-- Swiper --}}
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
            />

        {{-- intlTelInput --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.0/build/css/intlTelInput.css">

        {{-- Main CSS File --}}
        @foreach (File::glob(public_path('build/assets/app*.css')) as $file)
            <link rel="stylesheet"
                href="{{ asset('build/assets/' . basename($file)) }}" />
        @endforeach
        {{-- @vite(['resources/sass/app.scss']) --}}

        @yield('style')
    </head>
    <body>
        @stack('modal')
        @yield('content')

        {{-- Modal Logout --}}
        <div class="modal fade" id="modalLogout" 
            tabindex="-1" 
            aria-labelledby="modalLogoutLabel" 
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal-ssm">
                    <div class="modal-header">
                        <img src="{{ asset('assets/icons/fr-logout.svg') }}" alt="">
                        <h1 class="modal-title wx-100 text-center" id="modalLogoutLabel">Logout Confirmation</h1>
                        <button type="button" 
                            class="btn-close" 
                            data-bs-dismiss="modal" 
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <svg width="137" height="137" viewBox="0 0 137 137" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="47.1746" cy="47.1746" r="47.1746" transform="matrix(-1 0 0 1 115.675 21.1199)" fill="#FF435C"/>
                            <path d="M72 51.3333H67.6667C62.3333 51.3333 59 54.6667 59 60V66.75H69.4167C70.1 66.75 70.6667 67.3167 70.6667 68C70.6667 68.6833 70.1 69.25 69.4167 69.25H59V76C59 81.3333 62.3333 84.6667 67.6667 84.6667H71.9833C77.3167 84.6667 80.65 81.3333 80.65 76V60C80.6667 54.6667 77.3333 51.3333 72 51.3333Z" fill="white"/>
                            <path d="M51.6 66.75L55.05 63.3C55.3 63.05 55.4167 62.7333 55.4167 62.4167C55.4167 62.1 55.3 61.7667 55.05 61.5333C54.5667 61.05 53.7667 61.05 53.2833 61.5333L47.7 67.1167C47.2167 67.6 47.2167 68.4 47.7 68.8833L53.2833 74.4667C53.7667 74.95 54.5667 74.95 55.05 74.4667C55.5333 73.9833 55.5333 73.1833 55.05 72.7L51.6 69.25H59V66.75H51.6Z" fill="white"/>
                            <ellipse cx="27.7024" cy="14.9072" rx="2.89921" ry="2.89921" fill="#FF435C"/>
                            <ellipse cx="21.904" cy="37.2727" rx="2.89921" ry="2.89921" fill="#FF435C"/>
                            <ellipse cx="10.7213" cy="66.679" rx="4.14173" ry="4.14173" fill="#FF435C"/>
                            <ellipse cx="12.7922" cy="103.54" rx="2.89921" ry="2.89921" fill="#FF435C"/>
                            <ellipse cx="25.6315" cy="122.178" rx="4.14173" ry="4.14173" fill="#FF435C"/>
                            <ellipse cx="52.1386" cy="124.663" rx="1.65669" ry="1.65669" fill="#FF435C"/>
                            <ellipse cx="74.0898" cy="129.219" rx="3.72755" ry="3.72756" fill="#FF435C"/>
                            <ellipse cx="92.7276" cy="123.835" rx="2.48504" ry="2.48504" fill="#FF435C"/>
                            <circle cx="115.507" cy="114.309" r="3.72755" fill="#FF435C"/>
                            <circle cx="121.306" cy="96.9135" r="2.07087" fill="#FF435C"/>
                            <ellipse cx="128.761" cy="81.1749" rx="2.07087" ry="2.07086" fill="#FF435C"/>
                            <ellipse cx="126.69" cy="50.112" rx="4.14173" ry="4.14173" fill="#FF435C"/>
                            <ellipse cx="72.8473" cy="7.03802" rx="2.48504" ry="2.48504" fill="#FF435C"/>
                            <ellipse cx="111.78" cy="16.9781" rx="4.14173" ry="4.14173" fill="#FF435C"/>
                        </svg>
                        <p class="text-status mb-0">Apakah Anda yakin ingin Keluar dari Akun ini ?</p>
                    </div>
                    <div class="modal-footer d-flex gap-12 flex-row">
                        <button type="button" 
                            class="btn-blue outline wx-50" 
                            data-bs-dismiss="modal">
                            Batal
                        </button>
                        <button type="button" 
                            class="btn-blue wx-50" 
                            data-bs-dismiss="modal">
                            Ya, Keluar
                        </button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Bootstrap 5 JS --}}
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" 
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" 
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" 
            integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" 
            crossorigin="anonymous"></script>

        {{-- Select2 Bootstrap 5 --}}
        <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>

        {{-- AOS --}}
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        {{-- Swiper --}}
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        
        {{-- intlTelInput --}}
        <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.0/build/js/intlTelInput.min.js"></script>

        {{-- DataTable --}}
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap.min.css"
            integrity="sha512-BMbq2It2D3J17/C7aRklzOODG1IQ3+MHw3ifzBHMBwGO/0yUqYmsStgBjI0z5EYlaDEFnvYV7gNYdD3vFLRKsA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css"
            integrity="sha512-PT0RvABaDhDQugEbpNMwgYBCnGCiTZMh9yOzUsJHDgl/dMhD9yjHAwoumnUk3JydV3QTcIkNDuN40CJxik5+WQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"
            integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap4.min.js"
            integrity="sha512-OQlawZneA7zzfI6B1n1tjUuo3C5mtYuAWpQdg+iI9mkDoo7iFzTqnQHf+K5ThOWNJ9AbXL4+ZDwH7ykySPQc+A=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        @stack('script')
    </body>
</html>
@extends('layout.base')
@section('title', __('Login'))

@section('content')
    {{-- <div class="p-login">
        <div class="wrapp-login">
            <img src="{{ asset('assets/images/logo-noname.png') }}" alt="" class="logo">

            <div class="wrapp-form">
                <div class="wrapp-input wx-100">
                    <label for="email" class="label">Email</label>
                    <div class="wrapp-ic-mail">
                        <input type="email" class="form-control wt-icon-right" placeholder="Masukan alamat Email">
                    </div>
                    <p class="message-error d-none">Masukkan email yang valid</p>
                </div>
                <div class="wrapp-input wx-100">
                    <label for="passwordsaatini" class="label">Kata Sandi</label>
                    <div class="position-relative">
                        <input type="password" class="form-control wt-icon-right" placeholder="Masukkan kata sandi">
                        <img src="{{ asset('assets/icons/ic-password-salsh.svg') }}" alt=""
                            class="icon-suffix password-toggle" type="button">
                    </div>
                    <p class="message-error d-none">Konfirmasi password tidak cocok</p>
                </div>
                @php
                    @endphp
                <div class="btn-blue d-flex gap-8 login"onclick="window.location.href='{{ route('landing.index') }}'" type="submit">
                    Masuk
                    <img src="{{ asset('assets/icons/ic-arrow-right.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div> --}}

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-15 w-auto"
                src="{{ asset('assets/images/logo-noname.png') }}" alt="Your Company">
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="#" method="POST">
                <div>
                    <label for="email" class="block text-sm/6 font-medium text-gray-900">Email</label>
                    <div class="mt-2">
                        <input type="email" 
                            name="email" id="email" 
                            autocomplete="email" required
                            placeholder="Masukan email"
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-sage-600 sm:text-sm/6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
                    </div>
                    <div class="mt-2">
                        <input type="password" 
                            name="password" id="password" 
                            autocomplete="current-password" required
                            placeholder="Masukan password"
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-sage-600 sm:text-sm/6">
                    </div>
                    <div class="text-sm mt-2">
                        <a href="#" class="font-semibold text-sage-600 hover:text-sage-500">Forgot
                            password?</a>
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-sage-600 px-3 py-2.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-sage-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sage-600">Sign
                        in</button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm/6 text-gray-500">
                Belum punya akun?
                <a href="#" class="font-semibold text-sage-600 hover:text-sage-500">Register</a>
            </p>
        </div>
    </div>
@endsection

@push('script')
    <script>
        // password toggle
        // $(document).on("click", ".password-toggle", function() {
        //     var input = $(this).parent().find('input');
        //     if (input.attr('type') == 'password') {
        //         input.attr('type', 'text');
        //         $(this).find('.enabled').hide();
        //         $(this).find('.disabled').show();

        //         $('.password-toggle').attr('src', '{{ asset('assets/icons/ic-password-no-slash.svg') }}');
        //     } else {
        //         input.attr('type', 'password');
        //         $(this).find('.disabled').hide();
        //         $(this).find('.enabled').show();

        //         $('.password-toggle').attr('src',
        //             '{{ asset('assets/icons/ic-password-salsh.svg') }}');
        //     }
        // })
    </script>
@endpush

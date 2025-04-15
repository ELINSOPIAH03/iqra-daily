@extends('layout.base')
@section('title', __('Login'))

@section('content')
    <div class="p-login">
        <div class="wrapp-login">
            <img src="{{ asset('assets/images/logo-noname.png') }}" 
                alt=""
                class="logo">
    
            <div class="wrapp-form">
                <div class="wrapp-input wx-100">
                    <label for="email" class="label">Email</label>
                    <div class="wrapp-ic-mail">
                        <input type="email" class="form-control wt-icon-right"
                            placeholder="Masukan alamat Email">
                    </div>
                    <p class="message-error d-none">Masukkan email yang valid</p>
                </div>
                <div class="wrapp-input wx-100">
                    <label for="passwordsaatini" class="label">Kata Sandi</label>
                    <div class="position-relative">
                        <input type="password" class="form-control wt-icon-right"
                            placeholder="Masukkan kata sandi">
                        <img src="{{ asset('assets/icons/ic-password-salsh.svg') }}" alt=""
                            class="icon-suffix password-toggle"
                            type="button">
                    </div>
                    <p class="message-error d-none">Konfirmasi password tidak cocok</p>
                </div>
                {{-- ini kalo udah di integrasi bisa di hapus aja bisa gunain role --}}
                    @php
                        // $isTutor = Str::startsWith(request()->path(), 'auth-tutor');
                    @endphp
                {{--------------------------------------------------------------------}}
                <div class="btn-blue d-flex gap-8 login" 
                    {{-- onclick="window.location.href='{{ $isTutor ? route('tutor.dashboard') : route('admin.dashboard') }}'" --}}
                    {{-- onclick="window.location.href='{{ route('admin.dashboard') }}'" --}}
                    type="submit">
                    Masuk
                    <img src="{{ asset('assets/icons/ic-arrow-right.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        // password toggle
        $(document).on("click", ".password-toggle", function() {
            var input = $(this).parent().find('input');
            if (input.attr('type') == 'password') {
                input.attr('type', 'text');
                $(this).find('.enabled').hide();
                $(this).find('.disabled').show();

                $('.password-toggle').attr('src', '{{ asset('assets/icons/ic-password-no-slash.svg') }}');
            } else {
                input.attr('type', 'password');
                $(this).find('.disabled').hide();
                $(this).find('.enabled').show();

                $('.password-toggle').attr('src',
                    '{{ asset('assets/icons/ic-password-salsh.svg') }}');
            }
        })
    </script>
@endpush
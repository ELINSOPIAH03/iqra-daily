@extends('layout.base')
@section('title', __('Login'))

@section('content')
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-15 w-auto" src="{{ asset('assets/images/logo-noname.png') }}" alt="Your Company">
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{ route('auth.login.post') }}" method="POST">
                @csrf
                <div>
                    <label for="email" class="block text-sm/6 font-medium text-gray-900">Email</label>
                    <div class="mt-2">
                        <input type="email" name="email" id="email" value="{{ old('email') }}" autocomplete="email"
                            required placeholder="Input email"
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-sage-600 sm:text-sm/6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
                    </div>
                    <div class="mt-2">
                        <input type="password" name="password" id="password" autocomplete="current-password" required
                            placeholder="Input password"
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-sage-600 sm:text-sm/6">
                    </div>
                    <div class="text-sm mt-2">
                        <a href="#" class="font-semibold text-sage-600 hover:text-sage-500">Forgot
                            password?</a>
                    </div>
                </div>

                @error('login')
                    <div class="text-red-600 text-sm font-medium mt-2">{{ $message }}</div>
                @enderror

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-sage-600 px-3 py-2.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-sage-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sage-600">Sign
                        in</button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm/6 text-gray-500">
                Don't have an account yet?
                <a href="{{ route('auth.registrasi') }}"
                    class="font-semibold text-sage-600 hover:text-sage-500">Register</a>
            </p>
        </div>
    </div>
@endsection

@push('script')
    <script></script>
@endpush

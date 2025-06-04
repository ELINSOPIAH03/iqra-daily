@extends('layout.base')
@section('title', __('Login'))

@section('content')
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-15 w-auto" src="{{ asset('assets/images/logo-noname.png') }}" alt="Your Company">
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{ route('auth.register.post') }}" method="POST">
                @csrf
                <div>
                    <label for="name" class="block text-sm/6 font-medium text-gray-900">Name</label>
                    <div class="mt-2">
                        <input type="name" name="name" id="name" autocomplete="name" required
                            placeholder="Input Name"
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-sage-600 sm:text-sm/6">
                    </div>
                </div>

                <div>
                    <label for="telphone" class="block text-sm/6 font-medium text-gray-900">Telphone</label>
                    <div class="mt-2">
                        <input type="number" telphone="telphone" id="telphone" autocomplete="telphone" required
                            placeholder="Input Telphone"
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-sage-600 sm:text-sm/6">
                    </div>
                    <p class="text-sage-300">ex: 08...</p>
                </div>

                <div>
                    <label for="email" class="block text-sm/6 font-medium text-gray-900">Email</label>
                    <div class="mt-2">
                        <input type="email" name="email" id="email" autocomplete="email" required
                            placeholder="Input Email"
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
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="confirm-password" class="block text-sm/6 font-medium text-gray-900">Confirm
                            Password</label>
                    </div>
                    <div class="mt-2">
                        <input type="password" name="password_confirmation" id="confirm-password"
                            autocomplete="current-confirm-password" required placeholder="Input confirm-password"
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-sage-600 sm:text-sm/6">
                    </div>
                    <p id="password-match-msg" class="text-red-600 text-sm mt-1 hidden">Passwords do not match</p>
                </div>

                <div>
                    <label for="hobby" class="block text-sm/6 font-medium text-gray-900">Hobby</label>
                    <div class="mt-2">
                        <input type="hobby" name="hobby" id="hobby" autocomplete="hobby" placeholder="Input Hobby"
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-sage-600 sm:text-sm/6">
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-sage-600 px-3 py-2.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-sage-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sage-600">Sign
                        Up</button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm/6 text-gray-500">
                Have an account yet?
                <a href="{{ route('auth.login') }}" class="font-semibold text-sage-600 hover:text-sage-500">Login</a>
            </p>
        </div>
    </div>
@endsection

@push('script')
    <script>
        const password = document.getElementById('password');
        const confirmPassword = document.getElementById('confirm-password');
        const message = document.getElementById('password-match-msg');

        function checkPasswordMatch() {
            if (confirmPassword.value === '') {
                message.classList.add('hidden');
            } else if (password.value !== confirmPassword.value) {
                message.classList.remove('hidden');
            } else {
                message.classList.add('hidden');
            }
        }

        password.addEventListener('input', checkPasswordMatch);
        confirmPassword.addEventListener('input', checkPasswordMatch);
    </script>
@endpush

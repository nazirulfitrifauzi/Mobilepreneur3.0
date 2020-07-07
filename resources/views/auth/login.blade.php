@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-white flex">
    <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
        <div class="mx-auto w-full max-w-sm">
            <div>
                <img class="h-24 w-auto" src="{{ asset('img') }}/logo_tekun.png" />
                <h2 class="mt-6 text-3xl leading-9 font-extrabold text-gray-900">
                    Log masuk akaun
                </h2>
                <p class="mt-2 text-sm leading-5 text-gray-600 max-w">
                    atau
                    <a href="{{ route('register') }}"
                        class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                        daftar akaun anda sekarang
                    </a>
                </p>
            </div>

            <div class="mt-8">
                <div class="mt-6">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf

                        <div>
                            <label for="email" class="block text-sm font-medium leading-5 text-gray-700">
                                Alamat emel
                            </label>
                            <div class="mt-1 rounded-md shadow-sm">
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-500 @enderror" />

                                @error('email')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-6">
                            <label for="password" class="block text-sm font-medium leading-5 text-gray-700">
                                Kata laluan
                            </label>
                            <div class="mt-1 rounded-md shadow-sm">
                                <input id="password" type="password" name="password" required
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-500 @enderror" />

                                @error('password')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-6 flex items-center justify-between">
                            <div class="flex items-center text-sm">
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}"
                                    class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                                    Lupa kata laluan?
                                </a>
                                @endif
                            </div>
                        </div>

                        <div class="mt-6">
                            <span class="block w-full rounded-md shadow-sm">
                                <button type="submit"
                                    class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                    Log Masuk
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>

            <div>
                <p class="mt-6 text-sm leading-5 text-gray-600 max-w text-center">
                    Applikasi ini sesuai dilayari menggunakan Firefox & Google Chrome.
                </p>
                <p class="mt-6 text-xs leading-5 text-gray-600 max-w text-center">
                    mobilepreneur@version 2.0.0
                </p>
            </div>

        </div>
    </div>
    <div class="hidden lg:block relative w-0 flex-1">
        <img class="absolute inset-0 h-full w-full object-fill" src="{{ asset('img') }}/cbrm/Poster_Mobilepreneur.png"
            alt="" />
    </div>
</div>
@endsection
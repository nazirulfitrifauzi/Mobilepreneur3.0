@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <img class="mx-auto h-24 w-auto" src="{{ asset('img') }}/logo_tekun.png" />
            <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900">
                Daftar Akaun
            </h2>
            <p class="mt-2 text-center text-sm leading-5 text-gray-600 max-w">
                atau
            <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                log masuk akaun anda
            </a>
            </p>
        </div>

        @if($errors->has('ic_no'))
        @else

        @error('age')
            <div class="fixed inset-0 flex items-end justify-center px-4 py-6 pointer-events-none sm:p-20 sm:items-start sm:justify-end opacity-0 notification">
                <div class="max-w-sm w-full bg-white shadow-lg rounded-lg pointer-events-auto">
                    <div class="rounded-lg shadow-xs overflow-hidden">
                        <div class="p-4">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <svg class="h-6 w-6 text-red-400" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        viewBox="0 0 24 24">
                                        <path d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="ml-3 w-0 flex-1 pt-0.5">
                                    <p class="text-sm leading-5 font-medium text-gray-900">
                                        Ralat!
                                    </p>
                                    <p class="mt-1 text-sm leading-5 text-gray-500">
                                        {{ $message }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @enderror
        @endif

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium leading-5 text-gray-700">
                        Nama
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <input id="name" type="text" name="name" value="{{ old('name') }}" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name')  border-red-500 @enderror" />

                        @error('name')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>

                <div class="mt-6">
                    <label for="ic_no" class="block text-sm font-medium leading-5 text-gray-700">
                        No Kad Pengenalan
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <input id="ic_no" type="text" name="ic_no" value="{{ old('ic_no') }}" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('ic_no')  border-red-500 @enderror" onkeyup="findAge()"/>
                        <input id="age" type="number" name="age" value="{{ old('age') }}" class="hidden">

                        @error('ic_no')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>

                <div class="mt-6">
                    <label for="email" class="block text-sm font-medium leading-5 text-gray-700">
                        Alamat emel
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-500 @enderror"/>

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
                        <input id="password" type="password" name="password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-500 @enderror" />

                        @error('password')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>

                <div class="mt-6">
                    <label for="password-confirm" class="block text-sm font-medium leading-5 text-gray-700">
                        Sahkan Kata laluan
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <input id="password-confirm" type="password" name="password_confirmation" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                </div>

                <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                        Daftar Akaun
                        </button>
                    </span>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection

@push('js')
<script>
    function findAge() {
        var ic = $('#ic_no').val();
        
        if(ic.match(/^(\d{2})(\d{2})(\d{2})-?\d{2}-?\d{4}$/)) {
            
            var year = RegExp.$1;
            if (year.substring(0,1) == 0) {
                var oyear = '20'+RegExp.$1;
            } else {
                var oyear = RegExp.$1;
            }
            
            var month = RegExp.$2;
            var day = RegExp.$3;
            var date = new Date(oyear,month,day);
            var yyyy = date.getFullYear();
            var age = {{ now()->year }} - yyyy;
            $('#age').val(age); // get age
        }
    }

    @error('age')
        $(document).ready(function () {

            setTimeout(function () {
                $(".notification").animate({
                    opacity: "1"
                });
            }, 500);

            setTimeout(function () {
                $('.notification').fadeOut('fast');
            }, 7000);
            
        });
    @enderror
</script>
@endpush

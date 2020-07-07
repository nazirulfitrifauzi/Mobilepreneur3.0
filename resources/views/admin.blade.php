@extends('layouts.app')

@push('js_head')
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>
@endpush

@section('content')
<div>
    <div class="bg-gray-800 pb-32">
        <nav class="bg-gray-800">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-20">
                <div class="border-b border-gray-700">
                    <div class="flex items-center justify-between h-16 px-4 sm:px-0">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img class="h-16 w-16" src="{{ asset('img') }}/logo_tekun.png" />
                            </div>
                            <div class="hidden md:block">
                                <div class="ml-10 flex items-baseline">
                                    <a href="#"
                                        class="px-3 py-2 rounded-md text-sm font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700">Semakan
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="ml-auto ">
                            <div class="items-baseline">
                                <a href="#"
                                    class="px-3 py-2 rounded-md text-sm font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700">
                                    ADMIN
                                </a>
                            </div>
                        </div>
                        <div class="block ml-2">
                            <span class="inline-flex rounded-md shadow-sm">
                                <a href="{{ route('logout') }}" type="button"
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red active:bg-red-700 transition ease-in-out duration-150"
                                    onclick="event.preventDefault();getElementById('logout-form').submit();">
                                    <svg class="-ml-0.5 mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M3 3a1 1 0 011 1v12a1 1 0 11-2 0V4a1 1 0 011-1zm7.707 3.293a1 1 0 010 1.414L9.414 9H17a1 1 0 110 2H9.414l1.293 1.293a1 1 0 01-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0z"
                                            clip-rule="evenodd">
                                    </svg>
                                    Log Keluar
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                    {{ csrf_field() }}
                                </form>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <header class="py-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-20">
                <h1 class="text-3xl leading-9 font-bold text-white">
                    Skim Pembiayaan Pemulihan Perniagaan Sektor Mikro (CBRM)
                </h1>
            </div>

            @if (Session::has('success'))
            <div
                class="fixed inset-0 flex items-end justify-center px-4 py-6 pointer-events-none sm:p-20 sm:items-start sm:justify-end opacity-0 notification">
                <div class="max-w-sm w-full bg-white shadow-lg rounded-lg pointer-events-auto">
                    <div class="rounded-lg shadow-xs overflow-hidden">
                        <div class="p-4">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <svg class="h-6 w-6 text-green-400" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div class="ml-3 w-0 flex-1 pt-0.5">
                                    <p class="text-sm leading-5 font-medium text-gray-900">
                                        Berjaya!
                                    </p>
                                    <p class="mt-1 text-sm leading-5 text-gray-500">
                                        Kemaskini telah berjaya disimpan.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            @if (Session::has('error'))
            <div
                class="fixed inset-0 flex items-end justify-center px-4 py-6 pointer-events-none sm:p-20 sm:items-start sm:justify-end opacity-0 notification">
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
                                        {{ Session::get('error') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </header>
    </div>

    <main class="-mt-32">
        <div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:px-20">
            <!-- Replace with your content -->
            <div class="bg-gray-100 rounded-lg shadow px-5 py-6 sm:px-6">
                <div>
                    <div>
                        <div class="my-8 px-4">
                            <div class="text-center">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Semakan No Kad Pengenalan &
                                    Emel Pemohon</h3>

                                <form method="post" action="{{ route('admin.semak') }}">
                                    @csrf

                                    <div class="my-8 px-64">
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <div class="relative flex-grow focus-within:z-10">
                                                <div
                                                    class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                    <svg class="h-5 w-5 text-gray-400" fill="currentColor"
                                                        viewBox="0 0 20 20">
                                                        <path
                                                            d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                                                    </svg>
                                                </div>
                                                <input id="input" name="input"
                                                    value="{{ (isset($input)) ? $input : '' }}"
                                                    class="form-input block w-full rounded-none rounded-l-md pl-10 transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                                                    placeholder="No Kad Pengenalan @ Emel" />
                                            </div>
                                            <button type="submit"
                                                class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-r-md text-gray-700 bg-gray-50 hover:text-gray-500 hover:bg-white focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                                                <svg fill="currentColor" viewBox="0 0 20 20"
                                                    class="h-5 w-5 text-green-400">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="ml-2">Semak</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>

                                <form method="post" action="{{ route('admin.update') }}">
                                    @csrf

                                    <div class="my-8 px-64 grid grid-cols-6 gap-6 mt-6">
                                        <div class="col-span-6 sm:col-span-6">
                                            <label for="name"
                                                class="block text-sm font-medium leading-5 text-gray-700">Nama
                                                Pemohon</label>
                                            <input id="name" name="name" value="{{ (isset($data)) ? $data->name : '' }}"
                                                class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                            <input id="id" name="id" class="hidden"
                                                value="{{ (isset($data)) ? $data->id : '' }}" />
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="ic_no"
                                                class="block text-sm font-medium leading-5 text-gray-700">No. KP
                                                (Baru)</label>
                                            <input id="ic_no" name="ic_no"
                                                value="{{ (isset($data)) ? $data->ic_no : '' }}"
                                                class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="email"
                                                class="block text-sm font-medium leading-5 text-gray-700">Emel</label>
                                            <input id="email" name="email"
                                                value="{{ (isset($data)) ? $data->email : '' }}"
                                                class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="birthdate"
                                                class="block text-sm font-medium leading-5 text-gray-700">Tarikh
                                                Lahir</label>
                                            <input id="birthdate" name="birthdate" type="date"
                                                value="{{ (isset($data2)) ? $data2->birthdate : '' }}"
                                                class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="age"
                                                class="block text-sm font-medium leading-5 text-gray-700">Umur</label>
                                            <input id="age" name="age" value="{{ (isset($data2)) ? $data2->age : '' }}"
                                                class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        </div>
                                    </div>

                                    <div class="mt-6 flex justify-center">
                                        <span class="inline-flex rounded-md shadow-sm" x-data="{ open: false }">
                                            <button type="submit"
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green active:bg-green-700 transition ease-in-out duration-150">
                                                {{--add this to disable button: opacity-50 cursor-not-allowed --}}
                                                <svg fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Kemaskini
                                            </button>
                                            @if (isset($data))
                                            <button
                                                class="ml-4 inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red active:bg-red-700 transition ease-in-out duration-150"
                                                @click.prevent="open = true">
                                                <svg fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5">
                                                    <path
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                        clip-rule="evenodd" fill-rule="evenodd"></path>
                                                </svg>
                                                Padam
                                            </button>
                                            @endif

                                            {{-- delete gambar modal --}}
                                            <div class="fixed bottom-0 inset-x-0 px-4 pb-4 sm:inset-0 sm:flex sm:items-center sm:justify-center"
                                                x-show="open" x-cloak>
                                                <div class="fixed inset-0 transition-opacity" x-show="open" x-cloak
                                                    x-transition:enter="ease-out duration-300""
                                                    x-transition:enter-start=" opacity-0"
                                                    x-transition:enter-end="opacity-100"
                                                    x-transition:leave="ease-in duration-200"
                                                    x-transition:leave-start="opacity-100"
                                                    x-transition:leave-end="opacity-0">
                                                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                                </div>

                                                <div class="bg-white rounded-lg px-4 pt-5 pb-4 overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full sm:p-6"
                                                    x-show="open" x-cloak x-transition:enter="ease-out duration-300""
                                                    x-transition:enter-start=" opacity-0 translate-y-4 sm:translate-y-0
                                                    sm:scale-95"
                                                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                                    x-transition:leave="ease-in duration-200"
                                                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                                                    <div class="sm:flex sm:items-start">
                                                        <div
                                                            class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                                            <svg class="h-6 w-6 text-red-600" stroke="currentColor"
                                                                fill="none" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                                            </svg>
                                                        </div>
                                                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                                                Padam Akaun!
                                                            </h3>
                                                            <div class="mt-2">
                                                                <p class="text-sm leading-5 text-gray-500">
                                                                    Adakah anda pasti untuk memadam akaun ini?
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                                                        <span
                                                            class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                                            <button
                                                                class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                                                                onclick="event.preventDefault();deleteAcc()">
                                                                Padam!
                                                            </button>
                                                        </span>
                                                        <span
                                                            class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                                                            <button
                                                                class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                                                                @click="open = false">
                                                                Batal
                                                            </button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end delete gambar modal --}}
                                        </span>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /End replace -->
        </div>
    </main>
</div>
@endsection

@push('js')
<script>
    function deleteAcc() {
        var id = $('#id').val();
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            type: 'POST',
            url: "{{ url('deleteAcc')}}" + '/' + id,
            data: {'_token' : CSRF_TOKEN, '_method' : 'DELETE'},
            success: function () {
                window.location = "{{ url('admin')}}";
            }
        });
    }

    $(document).ready(function () {
        @if (Session::has('success') || Session::has('error'))
            setTimeout(function () {
                $(".notification").animate({
                    opacity: "1"
                });
            }, 500);

            setTimeout(function () {
                $('.notification').fadeOut('fast');
            }, 3000);
        @endif
    });
</script>
@endpush
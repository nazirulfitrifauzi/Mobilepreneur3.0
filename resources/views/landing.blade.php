@extends('layouts.app')

@push('js_head')
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>
@endpush

@section('content')
<div>
    <div class="bg-gray-800 pb-32">
        <nav x-data="{ open: false }" @keydown.window.escape="open = false" class="bg-gray-800">
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
                                        class="px-3 py-2 rounded-md text-sm font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700">Laman
                                        Utama
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="ml-auto ">
                            <div class="items-baseline">
                                <a href="#"
                                    class="px-3 py-2 rounded-md text-sm font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700">
                                    {{ substr(auth()->user()->ic_no,0,6) }}-{{ substr(auth()->user()->ic_no,6,2) }}-{{ substr(auth()->user()->ic_no,8,4) }}
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
                    Skim Pembiayaan TEKUN Mobilepreneur V2.0
                </h1>
            </div>
        </header>
    </div>

    <main class="-mt-32">
        <div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:px-20">
            <!-- Replace with your content -->
            <div class="bg-gray-100 rounded-lg shadow px-5 py-6 sm:px-6">
                <div>
                    {{-- card content --}}
                    <div class="grid grid-cols-1">
                        <!-- card mobilepreneur -->
                        <div class="sm:ml-3 sm:mt-0 mt-8 bg-white shadow overflow-hidden  sm:rounded-lg">
                            <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
                                <div class="flex">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                                        Mobilepreneur V2.0
                                    </h3>
                                    <a href="{{ route('mobile') }}" type="button"
                                        class="ml-auto inline-flex items-center px-2 py-2 border border-transparent text-xs leading-4 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue active:bg-blue-700 transition ease-in-out duration-150 sm:text-base">
                                        <svg class="-ml-0.5 mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M2.94 6.412A2 2 0 002 8.108V16a2 2 0 002 2h12a2 2 0 002-2V8.108a2 2 0 00-.94-1.696l-6-3.75a2 2 0 00-2.12 0l-6 3.75zm2.615 2.423a1 1 0 10-1.11 1.664l5 3.333a1 1 0 001.11 0l5-3.333a1 1 0 00-1.11-1.664L10 11.798 5.555 8.835z"
                                                clip-rule="evenodd" fill-rule="evenodd"></path>
                                        </svg>
                                        Mohon Sekarang
                                    </a>
                                </div>
                                <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
                                    Skim Pembiayaan TEKUN Mobilepreneur.
                                </p>
                            </div>
                            <div class="px-4 py-5 sm:px-6">
                                <dl class="grid grid-cols-1 col-gap-4 row-gap-8 sm:grid-cols-2">
                                    <div class="sm:col-span-2">
                                        <dt class="mt-1 text-sm leading-5 text-gray-900">
                                            Pengenalan Pembiayaan
                                        </dt>
                                        <dd class="text-sm leading-5 font-medium text-gray-500">
                                            Skim Pembiayaan Pemulihan Mobilepreneur merupakan salah satu inisiatif
                                            Kerajaan yang dilaksanakan melalui TEKUN Nasional unutk memberi peluang
                                            menjana pendapatan kepada golongan yang hilang punca pendapatan serta
                                            terjejas akibat penularan COVID-19 serta arahan PKP yang bermula 18 Mac 2020
                                            yang lalu. Skim ini menyediakan kemudahan pembiayaan modal kepada usahawan
                                            yang menjalankan perkhidmatan penghantaran makanan atau barangan menggunakan
                                            motosikal.
                                        </dd>
                                        <dd class="mt-4 text-sm leading-5 font-medium text-gray-500">
                                            Permohonan pembiayaan skim ini dibuka sehingga Septembar 2020 atau sehingga
                                            peruntukan dana digunakan sepenuhnya.
                                        </dd>
                                    </div>
                                    <div class="sm:col-span-2">
                                        <dt class="mt-1 text-sm leading-5 text-gray-900">
                                            Nilai & Tempoh Pembiayaan
                                        </dt>
                                        <dd class="text-sm leading-5 font-medium text-gray-500">
                                            Nilai Pembiayaan yang akan disalurkan adalah dari RM1,000 sehingga RM10,000
                                            bagi setiap usahawan mengikut kelayakan serta tertakluk kepada terma dan
                                            syarat-syarat asas TEKUN Nasional.
                                        </dd>
                                    </div>
                                    <div class="sm:col-span-2">
                                        <dt class="mt-1 text-sm leading-5 text-gray-900">
                                            Syarat-syarat Asas Pembiayaan CBRM adalah sama seperti syarat pembiayaan
                                            yang sedia ada seperti berikut:
                                        </dt>
                                        <dd class="text-sm leading-5 font-medium text-gray-500">
                                            <table>
                                                <tr>
                                                    <td>1.</td>
                                                    <td>Warganegara Malaysia (Bumiputera / India).</td>
                                                </tr>
                                                <tr>
                                                    <td>2.</td>
                                                    <td>Berumur 18-60 tahun (Tempoh pembiayaan tamat sehingga 65 tahun).
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3.</td>
                                                    <td>Pemohon bukan seorang yang muflis.</td>
                                                </tr>
                                                <tr>
                                                    <td>4.</td>
                                                    <td>Mempunyai lesen memandu motosikal yang sah.</td>
                                                </tr>
                                                <tr>
                                                    <td>5.</td>
                                                    <td>Mempunyai pelantikan yang sah daripada syarikat e-hailing yang
                                                        berdaftar.</td>
                                                </tr>
                                                <tr>
                                                    <td>6.</td>
                                                    <td>Mempunyai motosikal sendiri yang berdaftar dan sah – bagi
                                                        permohonan baik pulih motosikal dan modal pusingan.</td>
                                                </tr>
                                                <tr>
                                                    <td>7.</td>
                                                    <td>Mengemukakan dokumen asal sebutharga pembelian motosikal
                                                        daripada pembekal yang sah - bagi permohonan membeli
                                                        motosikal.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>8.</td>
                                                    <td>Terlibat secara langsung atau separuh masa dalam aktiviti
                                                        perniagaan.</td>
                                                </tr>
                                                <tr>
                                                    <td>9.</td>
                                                    <td>Peserta perlu mematuhi garis panduan serta terma dan
                                                        syarat-syarat yang dikuatkuasakan oleh Kementerian Pengangkutan
                                                        Malaysia ( MOT )</td>
                                                </tr>
                                                <tr>
                                                    <td>10.</td>
                                                    <td>Pemohon yang mendapat surat sokongan dan disyorkan oleh
                                                        mana-mana syarikat e-hailing adalah diberikan keutamaan.</td>
                                                </tr>
                                            </table>
                                        </dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                    </div>
                    {{-- end content --}}
                </div>
            </div>
            <!-- /End replace -->
        </div>
    </main>
</div>
@endsection
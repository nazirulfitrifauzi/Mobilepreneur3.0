<div x-show="tab === 'tab1'">
    <form method="post" action="{{ route('mobile.storePeribadi') }}" enctype="multipart/form-data">
        @csrf

        <div class="my-8 px-4">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Maklumat Asas</h3>
                        {{-- <p class="mt-1 text-sm leading-5 text-gray-500">
        This information will be displayed publicly so be careful what you share.
        </p> --}}
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="tekun_state"
                                        class="block text-sm font-medium leading-5 text-gray-700">Negeri <span
                                            class="text-red-700">*</span></label>
                                    <select id="tekun_state" name="tekun_state"
                                        class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option value="">Sila Pilih Negeri</option>
                                        @foreach($negeri as $negeris)
                                        <option value="{{ $negeris->kodnegeri }}" @if(isset(auth()->
                                            user()->peribadi->tekun_state))
                                            @if(auth()->user()->peribadi->tekun_state == $negeris->kodnegeri)
                                            selected
                                            @else
                                            {{ old('tekun_state') == ($negeris->kodnegeri) ? 'selected':'' }}
                                            @endif
                                            @else
                                            {{ old('tekun_state') == ($negeris->kodnegeri) ? 'selected':'' }}
                                            @endif
                                            >{{ $negeris->namanegeri }}</option>
                                        @endforeach
                                    </select>
                                    @error('tekun_state')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="tekun_branch"
                                        class="block text-sm font-medium leading-5 text-gray-700">Cawangan Berhampiran
                                        dengan Lokasi Perniagaan <span class="text-red-700">*</span></label>
                                    <select id="tekun_branch" name="tekun_branch"
                                        class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option value="">Sila Pilih Cawangan</option>
                                        @foreach($cawangan as $cawangans)
                                            <option value="{{ trim($cawangans->kodcawangan,"") }}" 
                                                @if(isset(auth()->user()->peribadi->tekun_branch))
                                                    @if(auth()->user()->peribadi->tekun_branch == trim($cawangans->kodcawangan," "))
                                                    selected
                                                    @else
                                                    {{ old('tekun_branch') == (trim($cawangans->kodcawangan," ")) ? 'selected':'' }}
                                                    @endif
                                                @else
                                                    {{ old('tekun_branch') == (trim($cawangans->kodcawangan," ")) ? 'selected':'' }}
                                                @endif
                                            >{{ $cawangans->namacawangan }}</option>
                                        @endforeach
                                    </select>

                                    @error('tekun_branch')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-6 gap-6 mt-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="business_status"
                                        class="block text-sm font-medium leading-5 text-gray-700">Status Perniagaan
                                        <span class="text-red-700">*</span></label>
                                    <select id="business_status" name="business_status"
                                        class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option value="">Sila Pilih Status Perniagaan</option>
                                        <option value="Sedang Berniaga" 
                                            @if(isset(auth()->user()->peribadi->business_status))
                                                @if(auth()->user()->peribadi->business_status == 'Sedang Berniaga')
                                                    selected
                                                @else
                                                {{ old('business_status') == 'Sedang Berniaga' ? 'selected':'' }}
                                                @endif
                                            @else
                                                {{ old('business_status') == 'Sedang Berniaga' ? 'selected':'' }}
                                            @endif>Sedang Berniaga</option>
                                        <option value="Memulakan Perniagaan" 
                                            @if(isset(auth()->user()->peribadi->business_status))
                                                @if(auth()->user()->peribadi->business_status == 'Memulakan Perniagaan')
                                                selected
                                                @else
                                                {{ old('business_status') == 'Memulakan Perniagaan' ? 'selected':'' }}
                                                @endif
                                            @else
                                                {{ old('business_status') == 'Memulakan Perniagaan' ? 'selected':'' }}
                                            @endif> Memulakan Perniagaan </option>
                                    </select>
                                    @error('business_status')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <fieldset>
                                        <legend class="block text-sm font-medium leading-5 text-gray-700">Usahawan TEKUN
                                            <span class="text-red-700">*</span></legend>
                                        {{-- <p class="text-sm leading-5 text-gray-500">These are delivered via SMS to your mobile phone.</p> --}}
                                        <div class="mt-4">
                                            <div class="flex items-center">
                                                <input id="business_type_yes" name="business_type" value="1" type="radio" 
                                                    @if(isset(auth()->user()->peribadi->business_type))
                                                        @if(auth()->user()->peribadi->business_type == '1')
                                                        checked
                                                        @else
                                                        {{ old('business_type') == '1' ? 'checked':'' }}
                                                        @endif
                                                    @else
                                                        {{ old('business_type') == '1' ? 'checked':'' }}
                                                    @endif
                                                class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" />
                                                <label for="business_type_yes" class="ml-3">
                                                    <span
                                                        class="block text-sm leading-5 font-medium text-gray-700">Ya</span>
                                                </label>

                                                <input id="business_type_no" name="business_type" value="0" type="radio"
                                                    @if(isset(auth()->user()->peribadi->business_type))
                                                        @if(auth()->user()->peribadi->business_type == '0')
                                                        checked
                                                        @else
                                                        {{ old('business_type') == '0' ? 'checked':'' }}
                                                        @endif
                                                    @else
                                                        {{ old('business_type') == '0' ? 'checked':'' }}
                                                    @endif
                                                class="ml-8 form-radio h-4 w-4 text-indigo-600 transition duration-150
                                                ease-in-out" />
                                                <label for="business_type_no" class="ml-3">
                                                    <span
                                                        class="block text-sm leading-5 font-medium text-gray-700">Tidak</span>
                                                </label>
                                            </div>
                                            @error('business_type')
                                            <p class="text-red-500 text-xs italic mt-4">
                                                {{ $message }}
                                            </p>
                                            @enderror
                                        </div>
                                    </fieldset>
                                </div>
                            </div>

                            <div class="grid grid-cols-6 gap-6 mt-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="bank1" class="block text-sm font-medium leading-5 text-gray-700">Nama
                                        Bank <span class="text-red-700">*</span></label>
                                    <select id="bank1" name="bank1"
                                        class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option value="">Sila Pilih Nama Bank</option>
                                        @foreach($bank as $banks)
                                            <option value="{{ $banks->id }}" 
                                                @if(isset(auth()->user()->peribadi->bank1))
                                                    @if(auth()->user()->peribadi->bank1 == $banks->id)
                                                        selected
                                                    @else
                                                    {{ old('bank1') == ($banks->id) ? 'selected':'' }}
                                                    @endif
                                                @else
                                                    {{ old('bank1') == ($banks->id) ? 'selected':'' }}
                                                @endif
                                            >{{ $banks->nama_bank }}</option>
                                        @endforeach
                                    </select>
                                    @error('bank1')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="bank1_acct" class="block text-sm font-medium leading-5 text-gray-700">No
                                        Akaun Bank <span class="text-red-700">*</span></label>
                                    <input id="bank1_acct" name="bank1_acct"
                                        value="{{ isset(auth()->user()->peribadi->bank1_acct) ? auth()->user()->peribadi->bank1_acct : old('bank1_acct') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('bank1_acct')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hidden sm:block">
            <div class="py-5">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>

        <div class="mt-10 sm:mt-0 my-8 px-4">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Maklumat Peribadi Pemohon</h3>
                        {{-- <p class="mt-1 text-sm leading-5 text-gray-500">
        Use a permanent address where you can receive mail.
        </p> --}}
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="mt-1">
                                <label for="profile_pic"
                                    class="block text-sm leading-5 font-medium text-gray-700">Gambar Passport<span
                                        class="text-red-700">*</span></label>

                                @if(isset(auth()->user()->peribadi->gambar))
                                <div class="mt-2 px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md"
                                    x-data="{ open: false }">
                                    <div class="w-full">
                                        {{-- <img src="{{ asset('storage/' . auth()->user()->ic_no . '/'. auth()->user()->peribadi->gambar . '') }}" class="h-40"> --}}
                                        <img src="{{ asset('storage/' . auth()->user()->ic_no . '/' . auth()->user()->peribadi->gambar . '') }}" class="h-40">
                                    </div>
                                    <div class="w-full">
                                        <span class="mt-3 inline-flex rounded-md shadow-sm">
                                            <button
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red active:bg-red-700 transition ease-in-out duration-150 cursor-pointer"
                                                @click.prevent="open = true">
                                                <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                        clip-rule="evenodd">
                                                </svg>
                                                Padam Gambar
                                            </button>
                                        </span>
                                    </div>

                                    {{-- delete gambar modal --}}
                                    <div class="fixed bottom-0 inset-x-0 px-4 pb-4 sm:inset-0 sm:flex sm:items-center sm:justify-center"
                                        x-show="open" x-cloak>
                                        <div class="fixed inset-0 transition-opacity" x-show="open" x-cloak
                                            x-transition:enter="ease-out duration-300"
                                            x-transition:enter-start=" opacity-0" x-transition:enter-end="opacity-100"
                                            x-transition:leave="ease-in duration-200"
                                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                                            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                        </div>

                                        <div class="bg-white rounded-lg px-4 pt-5 pb-4 overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full sm:p-6"
                                            x-show="open" x-cloak x-transition:enter="ease-out duration-300"
                                            x-transition:enter-start=" opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                            x-transition:leave="ease-in duration-200"
                                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                                            <div class="sm:flex sm:items-start">
                                                <div
                                                    class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                                    <svg class="h-6 w-6 text-red-600" stroke="currentColor" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                                    </svg>
                                                </div>
                                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                                                        Padam Gambar!
                                                    </h3>
                                                    <div class="mt-2">
                                                        <p class="text-sm leading-5 text-gray-500">
                                                            Adakah anda pasti untuk memadam gambar ini?
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                                                <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                                    <button type="button"
                                                        class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                                                        onclick="event.preventDefault();deleteGambar({{auth()->user()->peribadi->id}})">
                                                        Padam!
                                                    </button>
                                                </span>
                                                <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                                                    <button type="button"
                                                        class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                                                        @click="open = false">
                                                        Batal
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- end delete gambar modal --}}
                                </div>
                                @else

                                <div id="gambar-div"
                                    class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 @error('gambar') border-red-500 @enderror border-dashed rounded-md cursor-pointer"
                                    style="display: block;">
                                    <div class="text-center">
                                        <input type="file" name="gambar" id="gambar" class="hidden" />
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                            viewBox="0 0 48 48">
                                            <path
                                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <p class="mt-1 text-sm text-gray-600">
                                            <a
                                                class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition duration-150 ease-in-out">
                                                Muat naik
                                            </a>
                                        </p>
                                        <p class="mt-1 text-xs text-gray-500">
                                            PNG & JPG sahaja.
                                        </p>
                                        @error('gambar')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            Ruangan Gambar diperlukan
                                        </p>
                                        @enderror
                                    </div>
                                </div>

                                <div id="uploaded-div"
                                    class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md cursor-pointer"
                                    style="display:none">
                                    <img id="uploaded" src="" class="h-40">
                                    <span class="mt-3 inline-flex rounded-md shadow-sm">
                                        <a id="buttonDel" type="button"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red active:bg-red-700 transition ease-in-out duration-150"
                                            onclick="delPicture()">
                                            <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd">
                                            </svg>
                                            Padam Gambar
                                        </a>
                                    </span>
                                </div>

                                @endif
                            </div>

                            <div class="grid grid-cols-6 gap-6 mt-6">
                                <div class="col-span-6 sm:col-span-6">
                                    <label for="name" class="block text-sm font-medium leading-5 text-gray-700">Nama
                                        Pemohon <span class="text-red-700">*</span></label>
                                    <input id="name" name="name" value="{{ strtoupper(auth()->user()->name) }}" readonly
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('name')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="ic_no" class="block text-sm font-medium leading-5 text-gray-700">No. KP
                                        (Baru) <span class="text-red-700">*</span></label>
                                    <input id="ic_no" name="ic_no" value="{{ auth()->user()->ic_no }}" readonly
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('ic_no')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="ic_old" class="block text-sm font-medium leading-5 text-gray-700">No. KP
                                        (Lama)</label>
                                    <input id="ic_old" name="ic_old"
                                        value="{{ isset(auth()->user()->peribadi->ic_old) ? auth()->user()->peribadi->ic_old : old('ic_old') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('ic_old')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-6 gap-6 mt-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <fieldset>
                                        <legend class="block text-sm font-medium leading-5 text-gray-700">Jantina <span
                                                class="text-red-700">*</span></legend>
                                        {{-- <p class="text-sm leading-5 text-gray-500">These are delivered via SMS to your mobile phone.</p> --}}
                                        <div class="mt-3">
                                            <div class="flex items-center">
                                                <input id="genderL" name="gender" value="Lelaki" type="radio" readonly
                                                    @if( substr((auth()->user()->ic_no),11)%2 == 1 )
                                                checked
                                                @endif
                                                class="form-radio h-4 w-4 text-indigo-600 transition duration-150
                                                ease-in-out" />
                                                <label for="genderL" class="ml-3">
                                                    <span
                                                        class="block text-sm leading-5 font-medium text-gray-700">Lelaki</span>
                                                </label>
                                                <input id="genderF" name="gender" value="Perempuan" type="radio"
                                                    readonly @if( substr((auth()->user()->ic_no),11)%2 == 0 )
                                                checked
                                                @endif
                                                class="ml-8 form-radio h-4 w-4 text-indigo-600 transition duration-150
                                                ease-in-out" />
                                                <label for="genderF" class="ml-3">
                                                    <span
                                                        class="block text-sm leading-5 font-medium text-gray-700">Perempuan</span>
                                                </label>
                                            </div>
                                            @error('gender')
                                            <p class="text-red-500 text-xs italic mt-4">
                                                {{ $message }}
                                            </p>
                                            @enderror
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="religion"
                                        class="block text-sm font-medium leading-5 text-gray-700">Agama <span
                                            class="text-red-700">*</span></label>
                                    <select id="religion" name="religion"
                                        class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option value="">Sila Pilih Agama</option>
                                        <option value="Islam" @if(isset(auth()->user()->peribadi->religion))
                                            @if(auth()->user()->peribadi->religion == 'Islam') selected @else
                                            {{ old('religion') == 'Islam' ? 'selected':'' }} @endif @else
                                            {{ old('religion') == 'Islam' ? 'selected':'' }}
                                            @endif>Islam
                                        </option>
                                        <option value="Hindu" @if(isset(auth()->user()->peribadi->religion))
                                            @if(auth()->user()->peribadi->religion == 'Hindu') selected @else
                                            {{ old('religion') == 'Hindu' ? 'selected':'' }} @endif @else
                                            {{ old('religion') == 'Hindu' ? 'selected':'' }}
                                            @endif>Hindu
                                        </option>
                                        <option value="Buddha" @if(isset(auth()->user()->peribadi->religion))
                                            @if(auth()->user()->peribadi->religion == 'Buddha') selected @else
                                            {{ old('religion') == 'Buddha' ? 'selected':'' }} @endif @else
                                            {{ old('religion') == 'Buddha' ? 'selected':'' }}
                                            @endif>Buddha
                                        </option>
                                        <option value="Kristian" @if(isset(auth()->user()->peribadi->religion))
                                            @if(auth()->user()->peribadi->religion == 'Kristian') selected @else
                                            {{ old('religion') == 'Kristian' ? 'selected':'' }} @endif @else
                                            {{ old('religion') == 'Kristian' ? 'selected':'' }}
                                            @endif>
                                            Kristian</option>
                                        <option value="Lain" @if(isset(auth()->user()->peribadi->religion))
                                            @if(auth()->user()->peribadi->religion == 'Lain') selected @else
                                            {{ old('religion') == 'Lain' ? 'selected':'' }} @endif @else
                                            {{ old('religion') == 'Lain' ? 'selected':'' }}
                                            @endif>Lain-lain</option>
                                    </select>
                                    @error('religion')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-6 gap-6 mt-6">
                                <div class="col-span-6 sm:col-span-2">
                                    <label for="birthdate"
                                        class="block text-sm font-medium leading-5 text-gray-700">Tarikh Lahir <span
                                            class="text-red-700">*</span></label>
                                    <input id="birthdate" name="birthdate"
                                        value="{{ isset(auth()->user()->peribadi->birthdate) ? Carbon\Carbon::parse(auth()->user()->peribadi->birthdate)->format("d/m/Y") : '' }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('birthdate')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <label for="race"
                                        class="block text-sm font-medium leading-5 text-gray-700">Bangsa/Kaum <span
                                            class="text-red-700">*</span></label>
                                    <select id="race" name="race"
                                        class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option value="">Sila Pilih Bangsa/Kaum</option>
                                        <option value="Melayu" @if(isset(auth()->user()->peribadi->race))
                                            @if(auth()->user()->peribadi->race == 'Melayu') selected @else
                                            {{ old('race') == 'Melayu' ? 'selected':'' }} @endif @else
                                            {{ old('race') == 'Melayu' ? 'selected':'' }}
                                            @endif>Melayu
                                        </option>
                                        <option value="Cina" @if(isset(auth()->user()->peribadi->race))
                                            @if(auth()->user()->peribadi->race == 'Cina') selected @else
                                            {{ old('race') == 'Cina' ? 'selected':'' }} @endif @else
                                            {{ old('race') == 'Cina' ? 'selected':'' }}
                                            @endif>Cina</option>
                                        <option value="India" @if(isset(auth()->user()->peribadi->race))
                                            @if(auth()->user()->peribadi->race == 'India') selected @else
                                            {{ old('race') == 'India' ? 'selected':'' }} @endif @else
                                            {{ old('race') == 'India' ? 'selected':'' }}
                                            @endif>India</option>
                                        <option value="Iban" @if(isset(auth()->user()->peribadi->race))
                                            @if(auth()->user()->peribadi->race == 'Iban') selected @else
                                            {{ old('race') == 'Iban' ? 'selected':'' }} @endif @else
                                            {{ old('race') == 'Iban' ? 'selected':'' }}
                                            @endif>Iban</option>
                                        <option value="Kadazan" @if(isset(auth()->user()->peribadi->race))
                                            @if(auth()->user()->peribadi->race == 'Kadazan') selected @else
                                            {{ old('race') == 'Kadazan' ? 'selected':'' }} @endif @else
                                            {{ old('race') == 'Kadazan' ? 'selected':'' }}
                                            @endif>Kadazan
                                        </option>
                                        <option value="Bumiputra" @if(isset(auth()->user()->peribadi->race))
                                            @if(auth()->user()->peribadi->race == 'Bumiputra') selected @else
                                            {{ old('race') == 'Bumiputra' ? 'selected':'' }} @endif @else
                                            {{ old('race') == 'Bumiputra' ? 'selected':'' }}
                                            @endif>
                                            Bumiputra</option>
                                        <option value="Siam" @if(isset(auth()->user()->peribadi->race))
                                            @if(auth()->user()->peribadi->race == 'Siam') selected @else
                                            {{ old('race') == 'Siam' ? 'selected':'' }} @endif @else
                                            {{ old('race') == 'Siam' ? 'selected':'' }}
                                            @endif>Siam</option>
                                    </select>
                                    @error('race')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <label for="age" class="block text-sm font-medium leading-5 text-gray-700">Umur
                                        <span class="text-red-700">*</span></label>
                                    <input id="age" name="age"
                                        value="{{ isset(auth()->user()->peribadi->age) ? auth()->user()->peribadi->age : old('age') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('age')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <label for="marital" class="block text-sm font-medium leading-5 text-gray-700">Taraf
                                        Perkahwinan <span class="text-red-700">*</span></label>
                                    <select id="marital" name="marital"
                                        class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option value="">Sila Pilih Taraf Perkahwinan</option>
                                        <option value="Bujang" @if(isset(auth()->user()->peribadi->marital))
                                            @if(auth()->user()->peribadi->marital == 'Bujang') selected @else
                                            {{ old('marital') == 'Bujang' ? 'selected':'' }} @endif @else
                                            {{ old('marital') == 'Bujang' ? 'selected':'' }}
                                            @endif>Bujang
                                        </option>
                                        <option value="Berkahwin" @if(isset(auth()->user()->peribadi->marital))
                                            @if(auth()->user()->peribadi->marital == 'Berkahwin') selected @else
                                            {{ old('marital') == 'Berkahwin' ? 'selected':'' }} @endif @else
                                            {{ old('marital') == 'Berkahwin' ? 'selected':'' }}
                                            @endif>
                                            Berkahwin</option>
                                        <option value="Duda" @if(isset(auth()->user()->peribadi->marital))
                                            @if(auth()->user()->peribadi->marital == 'Duda') selected @else
                                            {{ old('marital') == 'Duda' ? 'selected':'' }} @endif @else
                                            {{ old('marital') == 'Duda' ? 'selected':'' }}
                                            @endif>Duda
                                        </option>
                                        <option value="Janda" @if(isset(auth()->user()->peribadi->marital))
                                            @if(auth()->user()->peribadi->marital == 'Janda') selected @else
                                            {{ old('marital') == 'Janda' ? 'selected':'' }} @endif @else
                                            {{ old('marital') == 'Janda' ? 'selected':'' }}
                                            @endif>Janda
                                        </option>
                                        <option value="Ibu Tunggal" @if(isset(auth()->user()->peribadi->marital))
                                            @if(auth()->user()->peribadi->marital == 'Ibu Tunggal') selected @else
                                            {{ old('marital') == 'Ibu Tunggal' ? 'selected':'' }} @endif @else
                                            {{ old('marital') == 'Ibu Tunggal' ? 'selected':'' }}
                                            @endif>Ibu Tunggal
                                        </option>
                                    </select>
                                    @error('marital')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <label for="dependent"
                                        class="block text-sm font-medium leading-5 text-gray-700">Bilangan Tanggungan
                                        <span class="text-red-700">*</span></label>
                                    <input id="dependent" name="dependent" type="number" min="0"
                                        value="{{ isset(auth()->user()->peribadi->dependent) ? auth()->user()->peribadi->dependent : old('dependent') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('dependent')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <fieldset>
                                        <legend class="block text-sm font-medium leading-5 text-gray-700">Orang Kelainan
                                            Upaya <span class="text-red-700">*</span></legend>
                                        {{-- <p class="text-sm leading-5 text-gray-500">These are delivered via SMS to your mobile phone.</p> --}}
                                        <div class="mt-3">
                                            <div class="flex items-center">
                                                <input id="oku_yes" name="oku" value="Ya" type="radio"
                                                    @if(isset(auth()->user()->peribadi->oku))
                                                @if(auth()->user()->peribadi->oku == 'Ya')
                                                checked
                                                @else
                                                {{ old('oku') == 'Ya' ? 'checked':'' }}
                                                @endif
                                                @else
                                                {{ old('oku') == 'Ya' ? 'checked':'' }}
                                                @endif
                                                class="form-radio h-4 w-4 text-indigo-600 transition duration-150
                                                ease-in-out" />
                                                <label for="oku_yes" class="ml-3">
                                                    <span
                                                        class="block text-sm leading-5 font-medium text-gray-700">Ya</span>
                                                </label>
                                                <input id="oku_no" name="oku" value="Tidak" type="radio"
                                                    @if(isset(auth()->user()->peribadi->oku))
                                                @if(auth()->user()->peribadi->oku == 'Tidak')
                                                checked
                                                @else
                                                {{ old('oku') == 'Tidak' ? 'checked':'' }}
                                                @endif
                                                @else
                                                {{ old('oku') == 'Tidak' ? 'checked':'' }}
                                                @endif
                                                class="ml-8 form-radio h-4 w-4 text-indigo-600 transition duration-150
                                                ease-in-out" />
                                                <label for="oku_no" class="ml-3">
                                                    <span
                                                        class="block text-sm leading-5 font-medium text-gray-700">Tidak</span>
                                                </label>
                                            </div>
                                            @error('oku')
                                            <p class="text-red-500 text-xs italic mt-4">
                                                {{ $message }}
                                            </p>
                                            @enderror
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="col-span-6">
                                    <label for="address1"
                                        class="block text-sm font-medium leading-5 text-gray-700">Alamat Kediaman <span
                                            class="text-red-700">*</span></label>
                                    <input id="address1" name="address1"
                                        value="{{ isset(auth()->user()->peribadi->address1) ? auth()->user()->peribadi->address1 : old('address1') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('address1')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror

                                    <input id="address2" name="address2"
                                        value="{{ isset(auth()->user()->peribadi->address2) ? auth()->user()->peribadi->address2 : old('address2') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('address2')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="postcode"
                                        class="block text-sm font-medium leading-5 text-gray-700">Poskod <span
                                            class="text-red-700">*</span></label>
                                    <input id="postcode" name="postcode" minlength="5" maxlength="5"
                                        value="{{ isset(auth()->user()->peribadi->postcode) ? auth()->user()->peribadi->postcode : old('postcode') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('postcode')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="city" class="block text-sm font-medium leading-5 text-gray-700">Bandar
                                        <span class="text-red-700">*</span></label>
                                    <input id="city" name="city"
                                        value="{{ isset(auth()->user()->peribadi->city) ? auth()->user()->peribadi->city : old('city') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('city')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="state" class="block text-sm font-medium leading-5 text-gray-700">Negeri
                                        <span class="text-red-700">*</span></label>
                                    <select id="state" name="state"
                                        class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option value="">Sila Pilih</option>
                                        @foreach($negerix as $negerix1)
                                        <option value="{{ $negerix1->kodnegeri }}" @if(isset(auth()->
                                            user()->peribadi->state))
                                            @if(auth()->user()->peribadi->state == $negerix1->kodnegeri)
                                            selected
                                            @else
                                            {{ old('state') == ($negerix1->kodnegeri) ? 'selected':'' }}
                                            @endif
                                            @else
                                            {{ old('state') == ($negerix1->kodnegeri) ? 'selected':'' }}
                                            @endif
                                            >{{ $negerix1->namanegeri }}</option>
                                        @endforeach
                                    </select>
                                    @error('state')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="phone_home" class="block text-sm font-medium leading-5 text-gray-700">No
                                        Telefon (Rumah)</label>
                                    <input id="phone_home" name="phone_home"
                                        value="{{ isset(auth()->user()->peribadi->phone_home) ? auth()->user()->peribadi->phone_home : old('phone_home') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('phone_home')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="phone_hp" class="block text-sm font-medium leading-5 text-gray-700">No
                                        Telefon (HP) - cth (0123456789) <span class="text-red-700">*</span></label>
                                    <input id="phone_hp" name="phone_hp"
                                        value="{{ isset(auth()->user()->peribadi->phone_hp) ? auth()->user()->peribadi->phone_hp : old('phone_hp') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('phone_hp')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="education"
                                        class="block text-sm font-medium leading-5 text-gray-700">Taraf Pendidikan <span
                                            class="text-red-700">*</span></label>
                                    <select id="education" name="education"
                                        class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option value="">Sila Pilih Taraf Pendidikan</option>
                                        <option value="PMR/Setaraf" @if(isset(auth()->user()->peribadi->education))
                                            @if(auth()->user()->peribadi->education == 'PMR/Setaraf')
                                            selected
                                            @else
                                            {{ old('education') == "PMR/Setaraf" ? 'selected':'' }}
                                            @endif
                                            @else
                                            {{ old('education') == "PMR/Setaraf" ? 'selected':'' }}
                                            @endif
                                            >PMR/Setaraf</option>
                                        <option value="SPM/Setaraf" @if(isset(auth()->user()->peribadi->education))
                                            @if(auth()->user()->peribadi->education == 'SPM/Setaraf')
                                            selected
                                            @else
                                            {{ old('education') == "SPM/Setaraf" ? 'selected':'' }}
                                            @endif
                                            @else
                                            {{ old('education') == "SPM/Setaraf" ? 'selected':'' }}
                                            @endif
                                            >SPM/Setaraf</option>
                                        <option value="STPM/Setaraf" @if(isset(auth()->user()->peribadi->education))
                                            @if(auth()->user()->peribadi->education == 'STPM/Setaraf')
                                            selected
                                            @else
                                            {{ old('education') == "STPM/Setaraf" ? 'selected':'' }}
                                            @endif
                                            @else
                                            {{ old('education') == "STPM/Setaraf" ? 'selected':'' }}
                                            @endif
                                            >STPM/Setaraf</option>
                                        <option value="Sijil" @if(isset(auth()->user()->peribadi->education))
                                            @if(auth()->user()->peribadi->education == 'Sijil')
                                            selected
                                            @else
                                            {{ old('education') == "Sijil" ? 'selected':'' }}
                                            @endif
                                            @else
                                            {{ old('education') == "Sijil" ? 'selected':'' }}
                                            @endif
                                            >Sijil</option>
                                        <option value="Diploma" @if(isset(auth()->user()->peribadi->education))
                                            @if(auth()->user()->peribadi->education == 'Diploma')
                                            selected
                                            @else
                                            {{ old('education') == "Diploma" ? 'selected':'' }}
                                            @endif
                                            @else
                                            {{ old('education') == "Diploma" ? 'selected':'' }}
                                            @endif
                                            >Diploma</option>
                                        <option value="Ijazah" @if(isset(auth()->user()->peribadi->education))
                                            @if(auth()->user()->peribadi->education == 'Ijazah')
                                            selected
                                            @else
                                            {{ old('education') == "Ijazah" ? 'selected':'' }}
                                            @endif
                                            @else
                                            {{ old('education') == "Ijazah" ? 'selected':'' }}
                                            @endif
                                            >Ijazah</option>
                                    </select>
                                    @error('education')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-6 gap-6 mt-6">
                                <div class="col-span-6 sm:col-span-2">
                                    <label for="email" class="block text-sm font-medium leading-5 text-gray-700">Emel
                                        <span class="text-red-700">*</span></label>
                                    <input id="email" name="email" value="{{ auth()->user()->email }}" readonly
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('email')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <label for="facebook"
                                        class="block text-sm font-medium leading-5 text-gray-700">Facebook</label>
                                    <input id="facebook" name="facebook"
                                        value="{{ isset(auth()->user()->peribadi->facebook) ? auth()->user()->peribadi->facebook : old('facebook') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('facebook')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <label for="instagram"
                                        class="block text-sm font-medium leading-5 text-gray-700">Instagram</label>
                                    <input id="instagram" name="instagram"
                                        value="{{ isset(auth()->user()->peribadi->instagram) ? auth()->user()->peribadi->instagram : old('instagram') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('instagram')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <label for="profession"
                                        class="block text-sm font-medium leading-5 text-gray-700">Perkerjaan Sekarang
                                        <span class="text-red-700">*</span></label>
                                    <input id="profession" name="profession"
                                        value="{{ isset(auth()->user()->peribadi->profession) ? auth()->user()->peribadi->profession : old('profession') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('profession')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <label for="income"
                                        class="block text-sm font-medium leading-5 text-gray-700">Pendapatan Bulanan
                                        <span class="text-red-700">*</span></label>
                                    <div class="mt-1 relative rounded-md shadow-sm">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <span class="text-gray-500 sm:text-sm sm:leading-5">
                                                RM
                                            </span>
                                        </div>
                                        <input id="income" name="income" min="0"
                                            value="{{ isset(auth()->user()->peribadi->income) ? auth()->user()->peribadi->income : old('income') }}"
                                            type="number" step="0.01"
                                            class="mt-1 form-input block w-full pl-16 sm:pl-14 py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    </div>
                                    @error('income')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <label for="employer_phone"
                                        class="block text-sm font-medium leading-5 text-gray-700">No
                                        Telefon Majikan</label>
                                    <input id="employer_phone" name="employer_phone"
                                        value="{{ isset(auth()->user()->peribadi->employer_phone) ? auth()->user()->peribadi->employer_phone : old('employer_phone') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('employer_phone')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6">
                                    <label for="employer_name"
                                        class="block text-sm font-medium leading-5 text-gray-700">Nama Majikan</label>
                                    <input id="employer_name" name="employer_name"
                                        value="{{ isset(auth()->user()->peribadi->employer_name) ? auth()->user()->peribadi->employer_name : old('employer_name') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('employer_name')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6">
                                    <label for="employer_address1"
                                        class="block text-sm font-medium leading-5 text-gray-700">Alamat Majikan</label>
                                    <input id="employer_address1" name="employer_address1"
                                        value="{{ isset(auth()->user()->peribadi->employer_address1) ? auth()->user()->peribadi->employer_address1 : old('employer_address1') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('employer_address1')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror

                                    <input id="employer_address2" name="employer_address2"
                                        value="{{ isset(auth()->user()->peribadi->employer_address2) ? auth()->user()->peribadi->employer_address2 : old('employer_address2') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('employer_address2')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="employer_postcode"
                                        class="block text-sm font-medium leading-5 text-gray-700">Poskod</label>
                                    <input id="employer_postcode" name="employer_postcode" maxlength="5"
                                        value="{{ isset(auth()->user()->peribadi->employer_postcode) ? auth()->user()->peribadi->employer_postcode : old('employer_postcode') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('employer_postcode')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="employer_city"
                                        class="block text-sm font-medium leading-5 text-gray-700">Bandar</label>
                                    <input id="employer_city" name="employer_city"
                                        value="{{ isset(auth()->user()->peribadi->employer_city) ? auth()->user()->peribadi->employer_city : old('employer_city') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('employer_city')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="employer_state"
                                        class="block text-sm font-medium leading-5 text-gray-700">Negeri</label>
                                    <select id="employer_state" name="employer_state"
                                        class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option value="">Sila Pilih</option>
                                        @foreach($negerix as $negerix2)
                                        <option value="{{ $negerix2->kodnegeri }}" @if(isset(auth()->
                                            user()->peribadi->employer_state))
                                            @if(auth()->user()->peribadi->employer_state == $negerix2->kodnegeri)
                                            selected
                                            @else
                                            {{ old('employer_state') == ($negerix2->kodnegeri) ? 'selected':'' }}
                                            @endif
                                            @else
                                            {{ old('employer_state') == ($negerix2->kodnegeri) ? 'selected':'' }}
                                            @endif
                                            >{{ $negerix2->namanegeri }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hidden sm:block">
            <div class="py-5">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>

        <div class="mt-10 sm:mt-0 my-8 px-4">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Maklumat Pasangan Pemohon/Waris</h3>
                        {{-- <p class="mt-1 text-sm leading-5 text-gray-500">
        Decide which communications you'd like to receive and how.
        </p> --}}
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6 mt-1">

                                <div class="col-span-6 sm:col-span-6">
                                    <fieldset>
                                        <legend class="block text-sm font-medium leading-5 text-gray-700">Hubungan <span
                                                class="text-red-700">*</span></legend>
                                        {{-- <p class="text-sm leading-5 text-gray-500">These are delivered via SMS to your mobile phone.</p> --}}
                                        <div class="mt-4">
                                            <div class="flex items-center">
                                                <input id="spouse_type_husband" name="spouse_type" value="H"
                                                    type="radio" @if(isset(auth()->user()->peribadi->spouse_type))
                                                @if(auth()->user()->peribadi->spouse_type == 'H')
                                                checked
                                                @else
                                                {{ old('spouse_type') == 'H' ? 'checked':'' }}
                                                @endif
                                                @else
                                                {{ old('spouse_type') == 'H' ? 'checked':'' }}
                                                @endif
                                                class="form-radio h-4 w-4 text-indigo-600 transition duration-150
                                                ease-in-out" />
                                                <label for="spouse_type_husband" class="ml-3">
                                                    <span
                                                        class="block text-sm leading-5 font-medium text-gray-700">Suami</span>
                                                </label>

                                                <input id="spouse_type_wife" name="spouse_type" value="W" type="radio"
                                                    @if(isset(auth()->user()->peribadi->spouse_type))
                                                @if(auth()->user()->peribadi->spouse_type == 'W')
                                                checked
                                                @else
                                                {{ old('spouse_type') == 'W' ? 'checked':'' }}
                                                @endif
                                                @else
                                                {{ old('spouse_type') == 'W' ? 'checked':'' }}
                                                @endif
                                                class="ml-8 form-radio h-4 w-4 text-indigo-600 transition duration-150
                                                ease-in-out" />
                                                <label for="spouse_type_wife" class="ml-3">
                                                    <span
                                                        class="block text-sm leading-5 font-medium text-gray-700">Isteri</span>
                                                </label>

                                                <input id="spouse_type_beneficiary" name="spouse_type" value="B"
                                                    type="radio" @if(isset(auth()->user()->peribadi->spouse_type))
                                                @if(auth()->user()->peribadi->spouse_type == 'B')
                                                checked
                                                @else
                                                {{ old('spouse_type') == 'B' ? 'checked':'' }}
                                                @endif
                                                @else
                                                {{ old('spouse_type') == 'B' ? 'checked':'' }}
                                                @endif
                                                class="ml-8 form-radio h-4 w-4 text-indigo-600 transition duration-150
                                                ease-in-out" />
                                                <label for="spouse_type_beneficiary" class="ml-3">
                                                    <span
                                                        class="block text-sm leading-5 font-medium text-gray-700">Waris</span>
                                                </label>
                                            </div>
                                            @error('spouse_type')
                                            <p class="text-red-500 text-xs italic mt-4">
                                                {{ $message }}
                                            </p>
                                            @enderror
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="col-span-6 sm:col-span-6">
                                    <label for="spouse_name"
                                        class="block text-sm font-medium leading-5 text-gray-700">Nama
                                        Suami/Isteri/Waris <span class="text-red-700">*</span></label>
                                    <input id="spouse_name" name="spouse_name"
                                        value="{{ isset(auth()->user()->peribadi->spouse_name) ? auth()->user()->peribadi->spouse_name : old('spouse_name') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('spouse_name')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <fieldset>
                                        <legend class="block text-sm font-medium leading-5 text-gray-700">Warganegara
                                            Malaysia <span class="text-red-700">*</span></legend>
                                        {{-- <p class="text-sm leading-5 text-gray-500">These are delivered via SMS to your mobile phone.</p> --}}
                                        <div class="mt-4">
                                            <div class="flex items-center">
                                                <input id="nationality_yes" name="nationality" value="Ya" type="radio"
                                                    @if(isset(auth()->user()->peribadi->nationality))
                                                @if(auth()->user()->peribadi->nationality == 'Ya')
                                                checked
                                                @else
                                                {{ old('nationality') == 'Ya' ? 'checked':'' }}
                                                @endif
                                                @else
                                                {{ old('nationality') == 'Ya' ? 'checked':'' }}
                                                @endif
                                                class="form-radio h-4 w-4 text-indigo-600 transition duration-150
                                                ease-in-out" />
                                                <label for="nationality_yes" class="ml-3">
                                                    <span
                                                        class="block text-sm leading-5 font-medium text-gray-700">Ya</span>
                                                </label>

                                                <input id="nationality_no" name="nationality" value="Tidak" type="radio"
                                                    @if(isset(auth()->user()->peribadi->nationality))
                                                @if(auth()->user()->peribadi->nationality == 'Tidak')
                                                checked
                                                @else
                                                {{ old('nationality') == 'Tidak' ? 'checked':'' }}
                                                @endif
                                                @else
                                                {{ old('nationality') == 'Tidak' ? 'checked':'' }}
                                                @endif
                                                class="ml-8 form-radio h-4 w-4 text-indigo-600 transition duration-150
                                                ease-in-out" />
                                                <label for="nationality_no" class="ml-3">
                                                    <span
                                                        class="block text-sm leading-5 font-medium text-gray-700">Tidak</span>
                                                </label>
                                            </div>
                                            @error('nationality')
                                            <p class="text-red-500 text-xs italic mt-4">
                                                {{ $message }}
                                            </p>
                                            @enderror
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="col-span-6 sm:col-span-3 
                                    @if(is_null(auth()->user()->peribadi)) 
                                        hidden
                                    @else
                                        @if(auth()->user()->peribadi->nationality == 'Ya')
                                            hidden
                                        @else
                                            block
                                        @endif
                                    @endif" id="passport_div">
                                    <label for="passport_no"
                                        class="block text-sm font-medium leading-5 text-gray-700">No. Passport <span
                                            class="text-red-700">*</span></label>
                                    <input id="passport_no" name="passport_no"
                                        value="{{ isset(auth()->user()->peribadi->passport_no) ? auth()->user()->peribadi->passport_no : old('passport_no') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('passport_no')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3
                                    @if(is_null(auth()->user()->peribadi)) 
                                        hidden
                                    @else
                                        @if(auth()->user()->peribadi->nationality == 'Ya')
                                            block
                                        @else
                                            hidden
                                        @endif
                                    @endif" id="spuose_ic_div">
                                    <label for="spouse_ic_no"
                                        class="block text-sm font-medium leading-5 text-gray-700">No. KP (Baru) - cth
                                        (900000010000) <span class="text-red-700">*</span></label>
                                    <input id="spouse_ic_no" name="spouse_ic_no"
                                        value="{{ isset(auth()->user()->peribadi->spouse_ic_no) ? auth()->user()->peribadi->spouse_ic_no : old('spouse_ic_no') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('spouse_ic_no')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="spouse_phone"
                                        class="block text-sm font-medium leading-5 text-gray-700">No Telefon (HP) - cth
                                        (0123456789) <span class="text-red-700">*</span></label>
                                    <input id="spouse_phone" name="spouse_phone"
                                        value="{{ isset(auth()->user()->peribadi->spouse_phone) ? auth()->user()->peribadi->spouse_phone : old('spouse_phone') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('spouse_phone')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-6">
                                    <label for="spouse_profession"
                                        class="block text-sm font-medium leading-5 text-gray-700">Perkerjaan Sekarang
                                        <span class="text-red-700">*</span></label>
                                    <input id="spouse_profession" name="spouse_profession"
                                        value="{{ isset(auth()->user()->peribadi->spouse_profession) ? auth()->user()->peribadi->spouse_profession : old('spouse_profession') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('spouse_profession')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6">
                                    <label for="spouse_employer_address1"
                                        class="block text-sm font-medium leading-5 text-gray-700">Alamat Majikan</label>
                                    <input id="spouse_employer_address1" name="spouse_employer_address1"
                                        value="{{ isset(auth()->user()->peribadi->spouse_employer_address1) ? auth()->user()->peribadi->spouse_employer_address1 : old('spouse_employer_address1') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('spouse_employer_address1')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror

                                    <input id="spouse_employer_address2" name="spouse_employer_address2"
                                        value="{{ isset(auth()->user()->peribadi->spouse_employer_address2) ? auth()->user()->peribadi->spouse_employer_address2 : old('spouse_employer_address2') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('spouse_employer_address2')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="spouse_employer_postcode"
                                        class="block text-sm font-medium leading-5 text-gray-700">Poskod</label>
                                    <input id="spouse_employer_postcode" name="spouse_employer_postcode" maxlength="5"
                                        value="{{ isset(auth()->user()->peribadi->spouse_employer_postcode) ? auth()->user()->peribadi->spouse_employer_postcode : old('spouse_employer_postcode') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('spouse_employer_postcode')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="spouse_employer_city"
                                        class="block text-sm font-medium leading-5 text-gray-700">Bandar</label>
                                    <input id="spouse_employer_city" name="spouse_employer_city"
                                        value="{{ isset(auth()->user()->peribadi->spouse_employer_city) ? auth()->user()->peribadi->spouse_employer_city : old('spouse_employer_city') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('spouse_employer_city')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="spouse_employer_state"
                                        class="block text-sm font-medium leading-5 text-gray-700">Negeri</label>
                                    <select id="spouse_employer_state" name="spouse_employer_state"
                                        class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option value="">Sila Pilih</option>
                                        @foreach($negerix as $negerix3)
                                        <option value="{{ $negerix3->kodnegeri }}" @if(isset(auth()->
                                            user()->peribadi->spouse_employer_state))
                                            @if(auth()->user()->peribadi->spouse_employer_state == $negerix3->kodnegeri)
                                            selected
                                            @else
                                            {{ old('spouse_employer_state') == ($negerix3->kodnegeri) ? 'selected':'' }}
                                            @endif
                                            @else
                                            {{ old('spouse_employer_state') == ($negerix3->kodnegeri) ? 'selected':'' }}
                                            @endif
                                            >{{ $negerix3->namanegeri }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex justify-center">
            <span class="inline-flex rounded-md shadow-sm">
                <button type="submit"
                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green active:bg-green-700 transition ease-in-out duration-150">
                    {{--add this to disable button: opacity-50 cursor-not-allowed --}}
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Simpan
                </button>
            </span>
        </div>
    </form>
</div>

@push('js')
<script>
    $(document).ready(function () {
        $('select[name=tekun_state]').on('change', function () {
            var selected = $(this).find(":selected").attr('value');
            $.ajax({
                url: "{{ route('mobile.getCawangan') }}?negeri=" + selected,
                method: 'GET',
                success: function (data) {
                    $('#tekun_branch').html(data.html);
                }
            });
        });

        $("input[name$='nationality']").click(function () {
            var value = $(this).val();
            var passport = document.getElementById("passport_div");
            var spouse_ic = document.getElementById("spuose_ic_div");

            if (value == 'Tidak') {
                passport.classList.add('block');
                passport.classList.remove('hidden');

                spouse_ic.classList.add('hidden');
                spouse_ic.classList.remove('block');
            } else {
                passport.classList.add('hidden');
                passport.classList.remove('block');

                spouse_ic.classList.add('block');
                spouse_ic.classList.remove('hidden');
            }
        });
    });

</script>
<script>
    $("#gambar-div").click(function (event) {
        if (!$(event.target).is('#gambar')) {
            $(this).find("#gambar").trigger('click');
        }
    });

    $("input[id='gambar']").on('change', function () {
        readURL(this);
        checkFiles();
    });

    var checkFiles = function () {
        if (document.getElementById("gambar").files.length > 0) {
            $('#uploaded-div').css('display', 'block');
            $('#gambar-div').css('display', 'none');
        } else {
            $('#uploaded-div').css('display', 'none');
            $('#gambar-div').css('display', 'block');
        }
    }

    var readURL = function (input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#uploaded').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    function delPicture() {
        $("#gambar").val('');
        $('#uploaded-div').css('display', 'none');
        $('#gambar-div').css('display', 'block');
    }

    function deleteGambar(id) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type: 'POST',
            url: "{{ url('mobile-deleteGambar')}}" + '/' + id,
            data: {
                '_token': CSRF_TOKEN,
                '_method': 'DELETE'
            },
            success: function () {
                window.location = "{{ url('mobile')}}";
            }
        });
    }

</script>
<script>
    function findBirthday() {
        var ic = String($('#ic_no').val());

        if (ic.match(/^(\d{2})(\d{2})(\d{2})-?\d{2}-?\d{4}$/)) {
            var year = RegExp.$1;
            var month = RegExp.$2;
            var day = RegExp.$3;

            if (year.substring(0, 1) == '0') {
                var oyear = '20' + year;
            } else {
                var oyear = '19' + year;
            }

            fDate = '' + oyear + '-' + month + '-' + day + ' 00:00:00';
            var date = new Date(fDate);
            var dd = date.getDate();
            var mm = date.getMonth() + 1;
            var yyyy = date.getFullYear();

            if (dd < 10) {
                dd = '0' + dd;
            }

            if (mm < 10) {
                mm = '0' + mm;
            }

            var age = {{ now()->year }} - yyyy;

            if (!$('#birthdate').val()) {
                $('#birthdate').val(dd + '/' + mm + '/' + yyyy); // get birth date
            }
            $('#age').val(age); // get age
        }
    }

</script>
<script>
    $(document).ready(function () {
        findBirthday();

        @error('tekun_state')
        $("#tekun_state").addClass("border-red-500");
        @enderror

        @error('tekun_branch')
        $("#tekun_branch").addClass("border-red-500");
        @enderror

        @error('business_status')
        $("#business_status").addClass("border-red-500");
        @enderror

        @error('bank1')
        $("#bank1").addClass("border-red-500");
        @enderror

        @error('bank1_acct')
        $("#bank1_acct").addClass("border-red-500");
        @enderror

        @error('name')
        $("#name").addClass("border-red-500");
        @enderror

        @error('ic_no')
        $("#ic_no").addClass("border-red-500");
        @enderror

        @error('ic_old')
        $("#ic_old").addClass("border-red-500");
        @enderror

        @error('religion')
        $("#religion").addClass("border-red-500");
        @enderror

        @error('race')
        $("#race").addClass("border-red-500");
        @enderror

        @error('age')
        $("#age").addClass("border-red-500");
        @enderror

        @error('marital')
        $("#marital").addClass("border-red-500");
        @enderror

        @error('birthdate')
        $("#birthdate").addClass("border-red-500");
        @enderror

        @error('dependent')
        $("#dependent").addClass("border-red-500");
        @enderror

        @error('address1')
        $("#address1").addClass("border-red-500");
        @enderror

        @error('address2')
        $("#address2").addClass("border-red-500");
        @enderror

        @error('postcode')
        $("#postcode").addClass("border-red-500");
        @enderror

        @error('city')
        $("#city").addClass("border-red-500");
        @enderror

        @error('state')
        $("#state").addClass("border-red-500");
        @enderror

        @error('phone_home')
        $("#phone_home").addClass("border-red-500");
        @enderror

        @error('phone_hp')
        $("#phone_hp").addClass("border-red-500");
        @enderror

        @error('education')
        $("#education").addClass("border-red-500");
        @enderror

        @error('email')
        $("#email").addClass("border-red-500");
        @enderror

        @error('facebook')
        $("#facebook").addClass("border-red-500");
        @enderror

        @error('instagram')
        $("#instagram").addClass("border-red-500");
        @enderror

        @error('profession')
        $("#profession").addClass("border-red-500");
        @enderror

        @error('income')
        $("#income").addClass("border-red-500");
        @enderror

        @error('employer_phone')
        $("#employer_phone").addClass("border-red-500");
        @enderror

        @error('employer_name')
        $("#employer_name").addClass("border-red-500");
        @enderror

        @error('employer_address1')
        $("#employer_address1").addClass("border-red-500");
        @enderror

        @error('employer_address2')
        $("#employer_address2").addClass("border-red-500");
        @enderror

        @error('employer_postcode')
        $("#employer_postcode").addClass("border-red-500");
        @enderror

        @error('employer_city')
        $("#employer_city").addClass("border-red-500");
        @enderror

        @error('employer_state')
        $("#employer_state").addClass("border-red-500");
        @enderror

        @error('spouse_name')
        $("#spouse_name").addClass("border-red-500");
        @enderror

        @error('spouse_ic_no')
        $("#spouse_ic_no").addClass("border-red-500");
        @enderror

        @error('spouse_phone')
        $("#spouse_phone").addClass("border-red-500");
        @enderror

        @error('spouse_profession')
        $("#spouse_profession").addClass("border-red-500");
        @enderror

        @error('spouse_employer_address1')
        $("#spouse_employer_address1").addClass("border-red-500");
        @enderror

        @error('spouse_employer_address2')
        $("#spouse_employer_address2").addClass("border-red-500");
        @enderror

        @error('spouse_employer_postcode')
        $("#spouse_employer_postcode").addClass("border-red-500");
        @enderror

        @error('spouse_employer_city')
        $("#spouse_employer_city").addClass("border-red-500");
        @enderror

        @error('spouse_employer_state')
        $("#spouse_employer_state").addClass("border-red-500");
        @enderror
    });

</script>
@endpush
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cek Penyakit Anjingmu') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <form method="POST" action="{{ route('diagnosis.identity.store') }}">
                @csrf
                <div class="shadow-sm sm:rounded-lg w-full flex">
                    <ul class="px-16 h-96">
                        <li class="flex-1">
                            <div class="p-4 border-l-4 {{ $id >= 1 ? 'border-blue-500' : 'border-indigo-200' }}">
                                <span class="font-semibold text-xl {{ $id >= 1 ? 'text-gray-800 dark:text-blue-500' : 'text-indigo-200'}}">Pengenalan</span>
                            </div>
                        </li>
                        <li class="flex-1">
                            <div class="p-4 border-l-4 {{ $id >= 2 ? 'border-blue-500' : 'border-indigo-200' }}">
                                <span class="font-semibold text-xl {{ $id >= 2 ? 'text-gray-800 dark:text-blue-500' : 'text-indigo-200'}}">Identitas</span>
                            </div>
                        </li>
                        <li class="flex-1">
                            <div class="p-4 border-l-4 {{ $id >= 3 ? 'border-blue-500' : 'border-indigo-200' }}">
                                <span class="font-semibold text-xl {{ $id >= 3 ? 'text-gray-800 dark:text-blue-500' : 'text-indigo-200'}}">Pengecekan</span>
                            </div>
                        </li>
                        <li class="flex-1">
                            <div class="p-4 border-l-4 {{ $id >= 4 ? 'border-blue-500' : 'border-indigo-200' }}">
                                <span class="font-semibold text-xl {{ $id >= 4 ? 'text-gray-800 dark:text-blue-500' : 'text-indigo-200'}}">Hasil</span>
                            </div>
                        </li>
                    </ul>
                    <div class="h-[34rem] bg-white dark:bg-gray-800 overflow-hidden shadow-sm w-full">
                        <div class="w-1/2 my-5 px-11">
                            <x-input-label for="name" :value="__('Nama Anjing')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <!-- gambar anjing -->
                        <div class="flex justify-center">
                            <img src="/img/anjing.png" alt="" height="216" width="216">
                        </div>
                    </div>
                    <div class="relative ...">
                        <div class="absolute bottom-4 right-4 ...">
                            <button type="submit" class="bg-blue-500 text-xl text-white px-4 py-2 rounded-full hover:bg-blue-600 transition duration-300">
                                Lanjut
                            </button>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="absolute bottom-4 right-[55rem]">
                            <div class="bg-red-600 text-xl text-white px-4 py-2 rounded-full hover:bg-red-900 transition duration-300">
                                <a href="{{ route('diagnosis', ['id' => 1]) }}">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</x-app-layout>
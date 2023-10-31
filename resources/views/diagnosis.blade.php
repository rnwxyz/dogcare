<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cek Penyakit Anjingmu') }}
        </h2>
    </x-slot>
    @php
        $gejala = ['hidung berair', 'nafas bau', 'bulu rontok', 'takut air'];
    @endphp
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-2 text-gray-900 dark:text-gray-100">
                    <div class="w-1/2 my-5 px-11">
                        <x-input-label for="name" :value="__('Nama Anjing')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    @foreach($gejala as $gejalaItem)
                    <div class="mx-10 my-10 px-11 py-6 bg-sky-900 text-gray-900 dark:text-gray-100 rounded-full">
                        <h1 class="text-xl leading-tight">
                            {{ __('Apakah anjing Anda mengalami gejala ' . $gejalaItem . ' ?') }}
                        </h1>
                        <div class="mt-4">
                            <button class="bg-transparent border border-blue-700 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mr-2">Tidak Tahu</button>
                            <button class="bg-transparent border border-blue-700 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mr-2">Tidak Yakin</button>
                            <button class="bg-transparent border border-blue-700 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mr-2">Mungkin</button>
                            <button class="bg-transparent border border-blue-700 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mr-2">Kemungkinan Besar</button>
                            <button class="bg-transparent border border-blue-700 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mr-2">Hampir Pasti</button>
                            <button class="bg-transparent border border-blue-700 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mr-2">Pasti</button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

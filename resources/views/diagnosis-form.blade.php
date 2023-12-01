<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cek Penyakit Anjingmu') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <form method="POST" action="{{ route('diagnosis.store') }}">
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
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm w-full pb-20">
                        <div class="h-[29rem] overflow-y-auto">
                            <input type="hidden" name="nama_anjing" value={{$nama_anjing}}>
                            @php
                            $num_gejala = 1;
                            @endphp
                            @foreach($gejala as $gejalaItem)
                            <div class="mx-5 my-5 px-10 py-5 bg-transparent border border-blue-500 text-gray-900 dark:text-gray-100 rounded-lg grid grid-cols-6 gap-4">
                                <label for='{{($gejalaItem->id)}}' class="text-xl leading-tight col-span-5">
                                    {{ __($num_gejala.'. Apakah anjing Anda mengalami gejala ' . $gejalaItem->deskripsi . '?') }}
                                </label>
                                <select name='{{($gejalaItem->id)}}' id='{{($gejalaItem->id)}}' class="text-l dark:text-l text-black bg-white-50 border border-white-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-white-600 dark:placeholder-white-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    @foreach($kondisi as $kondisiItem)
                                    <option value='{{($kondisiItem->nilai)}}' class="text-black">{{$kondisiItem->kondisi}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @php
                            $num_gejala++;
                            @endphp
                            @endforeach
                        </div>
                    </div>
                    <div class="relative">
                        <div class="absolute bottom-4 right-4">
                            <button type="submit" class="bg-blue-600 text-xl text-white px-4 py-2 rounded-full hover:bg-blue-900 transition duration-300">
                                Lanjut
                            </button>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="absolute bottom-4 right-[55rem]">
                            <div class="bg-red-600 text-xl text-white px-4 py-2 rounded-full hover:bg-red-900 transition duration-300">
                                <a href="{{ route('diagnosis', ['id' => 2]) }}">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
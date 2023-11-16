<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cek Penyakit Anjingmu') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto">
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
                <div class="bg-white dark:bg-gray-800 shadow-sm w-full">
                    <div class="h-[34rem] overflow-y-auto">
                        <div class="flex items-center">
                            <div class="p-6 text-gray-900 dark:text-gray-100">
                                <h1 class="text-3xl font-bold leading-tight">
                                    Nama anjing : {{$nama_anjing}}
                                </h1>
                                <p class="mt-2 text-s text-gray-600 dark:text-gray-400">
                                    Berikut adalah hasil diagnosa penyakit yang dialami anjing anda berdasarkan jawaban yang dinnput pada peroses sebelumnya.
                                </p>
                                <div class="flex justify-between">
                                    <div class="w-1/3 p-4">
                                        <div class="h-[20rem] bg-red-700 text-white p-4 rounded-lg">
                                            <h2 class="text-xl font-semibold">Hasil Diagnosa</h2><br>
                                            <p>Sistem mendiagnosa <b>{{$nama_anjing}}</b> terkena penyakit <b><i>{{$hasil['nama']}}</i></b> dengan persentase <b class="text-xxl">{{$hasil['nilai']}}%</b>. Nilai ini merupakan nilai tertinggi dibandingkan dengan persentase penyakit lainnya.</p>
                                        </div>
                                    </div>
                                    <div class="w-1/3 p-4">
                                        <div class="h-[20rem] bg-sky-800 text-white p-4 rounded-lg">
                                            <h2 class="text-xl font-semibold">Penjelasan Penyakit</h2><br>
                                            <p>{{$hasil['penjelasan']}}</p>
                                        </div>
                                    </div>
                                    <div class="w-1/3 p-4">
                                        <div class="h-[20rem] bg-green-700 text-white p-4 rounded-lg">
                                            <h2 class="text-xl font-semibold">Pencegahan Dini</h2><br>
                                            <p>{{$hasil['pencegahan']}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute bottom-4 right-[55rem]">
                        <div class="bg-red-600 text-xl text-white px-4 py-2 rounded-full hover:bg-red-900 transition duration-300">
                            <a href="{{ route('diagnosis', ['id' => 3]) }}">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
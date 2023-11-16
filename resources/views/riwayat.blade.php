<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Riwayat Diagnosis') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex items-center">
                    <div class="flex-none p-6">
                        <img src="/img/logo.png" alt="" width="500px">
                    </div>
                    <div class="relative overflow-y-auto shadow-md sm:rounded-lg m-6 h-[30rem]">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nama Anjing
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Penyakit
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Persentase
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Tanggal
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Jam
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($riwayat as $riwayatItem)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$riwayatItem->nama_anjing}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{$riwayatItem->nama_penyakit}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$riwayatItem->persentase}}%
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$riwayatItem->tanggal}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$riwayatItem->jam}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
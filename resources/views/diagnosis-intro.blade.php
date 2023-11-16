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
                <div class="h-[29rem] bg-white dark:bg-gray-800 overflow-hidden shadow-sm w-full">
                    <div class="flex justify-between">
                        <div class="w-1/3 p-4">
                            <div class="bg-blue-500 text-white p-4 rounded-lg">
                                <h2 class="text-xl font-semibold">1. Input Data</h2>
                                <p>Sistem akan meminta anda untuk menginput data berupa informasi mengenai kondisi anjing. Akan diberikan pertanyaan berupa gejala penyakit dan terdapat pilihan jawaban berupa kondisi yang memiliki nilai yang berbeda-beda</p>
                            </div>
                        </div>
                        <div class="w-1/3 p-4">
                            <div class="bg-green-500 text-white p-4 rounded-lg">
                                <h2 class="text-xl font-semibold">2. Data Processing</h2>
                                <p>Data yang sudah diinput selanjutnya akan diproses oleh sistem pakar untuk menentukan diagnosa penyakit yang dialami anjing anda berdasarkan jawaban yang dinnput pada peroses sebelumnya.</p>
                            </div>
                        </div>
                        <div class="w-1/3 p-4">
                            <div class="bg-orange-500 text-white p-4 rounded-lg">
                                <h2 class="text-xl font-semibold">3. Get Results</h2>
                                <p>Setelah data diproses oleh sistem, anda akan mendapatkan hasil diagnosa. Berdasarkan hasil diagnosa dengan persentase tertinggi akan diberikan beberapa solusi sebagai bentuk penanganan awal penyakit.</p>
                            </div>
                        </div>
                    </div>
                    <!-- gambar anjing -->
                    <div class="flex justify-center">
                        <img src="/img/cartoon.png" alt="" height="455" width="455">
                    </div>
                </div>

                <div class="relative ...">
                    <div class="absolute bottom-4 right-4 ...">
                        <a href="{{ route('diagnosis', ['id' => 2]) }}" class="bg-blue-500 text-xl text-white px-4 py-2 rounded-full hover:bg-blue-600 transition duration-300">
                            Lanjut
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
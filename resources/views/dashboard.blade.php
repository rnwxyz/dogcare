<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Hai ! Pencinta Anjing') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex items-center">
                    <div class="flex-none p-6">
                        <img src="/img/logo.png" alt="" width="500px">
                    </div>
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h1 class="text-3xl font-bold leading-tight">
                            {{ __('Apa itu DogCare ?') }}
                        </h1>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                            {{ __('DogCare adalah sebuah aplikasi web yang bertujuan untuk membantu pemilik anjing dalam mendeteksi penyakit pada hewan peliharaan mereka. Aplikasi ini berfungsi sebagai sistem pakar yang dapat memberikan rekomendasi dan informasi mengenai kemungkinan penyakit yang mungkin dialami oleh anjing berdasarkan gejala yang diberikan oleh pemilik.') }}
                        </p>
                        <h1 class="mt-3 text-3xl font-bold leading-tight">
                            {{ __('Fitur utama dari DogCare meliputi:') }}
                        </h1>
                        <table class="min-w-full">
                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                <tr>
                                    <td class="px-1">
                                        1.
                                    </td>
                                    <td class="px-6 text-sm py-4 text-gray-600 dark:text-gray-400">
                                        Konsultasi Gejala, Pemilik anjing dapat memasukkan gejala yang diamati pada hewan peliharaan mereka melalui antarmuka yang mudah digunakan. Aplikasi akan menganalisis gejala tersebut untuk memberikan prediksi penyakit yang mungkin.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-1">
                                        2.
                                    </td>
                                    <td class="px-6 text-sm py-4 text-gray-600 dark:text-gray-400">
                                        Informasi Penyakit, Aplikasi menyediakan informasi lengkap tentang berbagai penyakit yang sering muncul pada anjing, termasuk gejala, penyebab, pengobatan, dan pencegahan. Ini membantu pemilik dalam memahami lebih lanjut kondisi hewan peliharaan mereka.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-1">
                                        3.
                                    </td>
                                    <td class="px-6 text-sm py-4 text-gray-600 dark:text-gray-400">
                                        Rekomendasi Pertolongan Pertama, DogCare memberikan panduan mengenai tindakan pertolongan pertama yang harus diambil jika penyakit tertentu dicurigai. Hal ini membantu pemilik untuk merespon dengan cepat dan tepat.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

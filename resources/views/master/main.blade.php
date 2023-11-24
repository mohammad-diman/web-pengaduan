@extends('master.auth-main')
@section('content')
    {{-- <section class="lg:pt-[29vh] pt-[23vh] h-screen bg-yellow-500">
    <div class="w-full flex">
        .
        <h1>adawd</h1>
        <h1>awdwadwadaw</h1>
    </div>
</section> --}}


    <section class="bg-white relative">
        <div class="py-8 pl-4 pr-2 mx-auto max-w-screen-xl lg:py-16">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div class="p-8 md:p-12">
                    <p
                        class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 mb-2">
                        <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 18 18">
                            <path
                                d="M17 11h-2.722L8 17.278a5.512 5.512 0 0 1-.9.722H17a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM6 0H1a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V1a1 1 0 0 0-1-1ZM3.5 15.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM16.132 4.9 12.6 1.368a1 1 0 0 0-1.414 0L9 3.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z" />
                        </svg>
                        Pungutan Liar
                    </p>
                    <p
                        class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 mb-2">
                        <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 18 18">
                            <path
                                d="M17 11h-2.722L8 17.278a5.512 5.512 0 0 1-.9.722H17a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM6 0H1a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V1a1 1 0 0 0-1-1ZM3.5 15.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM16.132 4.9 12.6 1.368a1 1 0 0 0-1.414 0L9 3.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z" />
                        </svg>
                        Gratifikasi
                    </p>
                    <h2 class="text-gray-900 dark:text-white text-4xl font-extrabold mb-2">Selamat Datang ...
                    </h2>
                    <p class="text-xl font-normal text-gray-500 dark:text-gray-400 mb-4">Website ini diciptakan sebagai
                        platform untuk melaporkan praktik <span class="text-red-500">Pungutan Liar</span> dan <span
                            class="text-red-500">Gratifikasi,</span> memberikan masyarakat ruang untuk berbicara dan
                        berperan aktif.</p>
                    <a href="#laporkan"
                        class="text-blue-600 dark:text-yellow-500 hover:underline font-medium text-lg inline-flex items-center">Laporkan
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
                <div class="p-8 md:p-12 flex justify-center">
                    <img class="h-80 max-w-full" src="/image/megaphone.png" alt="image description">
                </div>
            </div>
        </div>

        <div class="flex justify-center">
            <div class="flex space-x-5 -bottom-6 absolute">
                <img class="w-12 h-12" src="/image/no-corruption.png" alt="image description">
                <img class="w-12 h-12" src="/image/stop-corruption.png" alt="image description">
                <img class="w-12 h-12" src="/image/anti-corruption.png" alt="image description">
            </div>
        </div>
    </section>



    <section id="laporkan" class="bg-gray-100">
        <div class="max-w-screen-xl px-6 py-8 mx-auto lg:py-24 lg:px-6">
            <div class="md:grid grid-cols-7">
                <div class="w-full col-span-4 h-auto p-4 bg-gray-50 border border-gray-200 rounded-lg sm:p-8">
                    <div class="w-full bg-yellow-500 rounded-md text-white p-4 mb-5">
                        <h1 class="text-xl font-semibold">Sampaikan Laporan Anda</h1>
                    </div>
                    <form method="POST" action="/dashboard" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label for="nama"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                            <input type="text" id="nama" name="nama"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                placeholder="" required value="{{ old('nama') }}">
                        </div>

                        <div class="mb-6">
                            <label for="kategori"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                            <select id="kategori" name="kategori"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected disabled>Pilih Kategori Laporan</option>
                                <option value="Pungutan Liar">Pungutan Liar</option>
                                <option value="Gratifikasi">Gratifikasi</option>
                            </select>
                        </div>

                        <div class="mb-6">
                            <label for="judul"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                            <input type="text" id="judul" name="judul"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                placeholder="" required value="{{ old('judul') }}">
                        </div>

                        <label for="pesan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Isi
                            Laporan</label>
                        <textarea id="pesan" name="pesan" rows="4"
                            class="mb-5 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-yellow-500 focus:border-yellow-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                            placeholder="" required value="{{ old('isi') }}"></textarea>

                        <div class="mb-6">
                            <label for="tanggal"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukkan
                                Tanggal
                                Kejadian</label>
                            <input type="date" name="tanggal" id="tanggal"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                                required value="{{ old('tanggal') }}">
                        </div>

                        <div class="mb-6">
                            <label for="lokasi"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lokasi
                                Kejadian</label>
                            <input type="text" name="lokasi" id="lokasi"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-blue-500"
                                placeholder="" required value="{{ old('lokasi') }}">
                        </div>

                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="file_input">Upload
                                Lampiran</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 mb-"
                                aria-describedby="file_input_help" id="file_input" name="file_input" type="file">
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or
                                GIF
                                (MAX. 800x400px).</p>
                            @error('file_input')
                                {{ $message }}
                            @enderror
                        </div>

                        <div class="flex flex-row justify-end mt-5">


                            <button type="submit"
                                class="inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-lg bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:ring-yellow-300 dark:focus:ring-yellow-900">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-span-3">
                    <div class="md:px-4 md:pt-0 pt-5 mx-auto max-w-screen-xl">
                        <div
                            class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12 mb-5">
                            <p
                                class="bg-red-200 text-red-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-yellow-400 mb-2">
                                Gratifikasi
                            </p>
                            <h1 class="text-gray-900 dark:text-white text-xl md:text-3xl font-extrabold mb-2">Apa itu
                                Gratifikasi?</h1>
                            <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">Gratifikasi adalah
                                pemberian hadiah atau uang dengan tujuan mempengaruhi tindakan atau keputusan seseorang,
                                seringkali dianggap ilegal atau tidak etis.</p>
                            <a href="#"
                                class="inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-lg bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:ring-yellow-300 dark:focus:ring-yellow-900">
                                Cukup Jelas Kan..
                            </a>
                        </div>
                    </div>
                    <div class="md:px-4 md:pt-0 mx-auto max-w-screen-xl">
                        <div
                            class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12 mb-8">
                            <a href="#"
                                class="bg-yellow-100 text-yellow-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-yellow-400 mb-2">Pungutan
                                Liar
                            </a>
                            <h1 class="text-gray-900 dark:text-white text-xl md:text-3xl font-extrabold mb-2">Apa itu
                                Pungutan Liar?</h1>
                            <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">Pungutan liar adalah
                                praktik ilegal atau tidak resmi yang melibatkan pengambilan uang secara tidak sah oleh pihak
                                berwenang atau individu.</p>
                            <a href="#"
                                class="inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-lg bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:ring-yellow-300 dark:focus:ring-yellow-900">
                                Yuk Lapor!
                                {{-- <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg> --}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
@endsection

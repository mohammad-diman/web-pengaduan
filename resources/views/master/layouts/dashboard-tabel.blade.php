@extends('master.auth-main')

@section('content')
    <div class="w-full my-4 px-5 flex space-x-4">
        <div class="bg-slate-800 max-w-sm text-gray-100 rounded-lg p-3">
            <h1 class="font-bold text-center">132 Laporan Pungutan Liar</h1>
        </div>
        <div class="bg-slate-800 max-w-sm text-gray-100 rounded-lg p-3">
            <h1 class="font-bold text-center">132 Laporan Gratifikasi</h1>
        </div>
    </div>
    <div class="relative overflow-x-auto rounded-lg px-5">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-white uppercase bg-gray-800">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Judul laporan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Isi laporan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal kejadian
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Lokasi kejadian
                    </th>
                    <th scope="col" class="px-6 py-3">
                        lampiran
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pengaduan as $p)
                    <tr class="bg-gray-50 border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $p->nama }}
                        </th>
                        <td class="px-6 py-4 text-white">
                            @if ($p->status == 'Baru')
                                <span
                                    class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                                    <span class="w-2 h-2 mr-1 bg-green-500 rounded-2xl"></span>
                                    {{ $p->status }}
                                </span>
                            @else
                                <span
                                    class="inline-flex items-center bg-red-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                                    <span class="w-2 h-2 mr-1 bg-red-500 rounded-2xl"></span>
                                    {{ $p->status }}
                                </span>
                            @endif

                        </td>
                        <td class="px-6 py-4">
                            {{ $p->judul }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $p->pesan }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $p->tanggal }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $p->lokasi }}
                        </td>
                        <td class="px-6 py-4">
                            <a class="text-blue-500 font-semibold" href="{{ asset('storage/' . $p->file_input) }}"
                                target="_blank">Lihat</a>
                        </td>
                        <td class="px-6 py-4">
                            <form action="/dashboard/{{ $p->id }}" method="POST">
                                @csrf
                                @method('put')
                                <button class=" text-blue-500 font-semibold">Confirm</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                       <td colspan="8" class="text-center font-semibold uppercase py-5 border-b-2">Belum Ada Laporan!</td> 
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{ $pengaduan->links() }}
    </div>
@endsection

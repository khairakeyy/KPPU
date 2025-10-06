@extends('layouts.app')

@section('content')
        <div
            class="bg-blue-800 text-white rounded-t-lg p-4 flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-6">
            <h3 class="font-bold text-lg whitespace-nowrap">Akses Cepat</h3>
            <div class="w-full border-t border-blue-600 md:border-t-0 md:border-l md:border-blue-500 h-full md:pl-6">
                <ul class="flex flex-wrap items-center gap-x-6 gap-y-2 text-sm">
                    <li><a href="#" class="hover:underline">Lapor Pelanggaran</a></li>
                    <li><a href="#" class="hover:underline">Putusan</a></li>
                    <li><a href="#" class="hover:underline">Jadwal Sidang</a></li>
                    <li><a href="#" class="hover:underline">Siaran Pers</a></li>
                    <li><a href="#" class="hover:underline">Materi Edukasi</a></li>
                    <li><a href="#" class="hover:underline">Notifikasi Merger</a></li>
                </ul>
            </div>
        </div>

        <div class="bg-red-600 p-3 font-semibold overflow-hidden whitespace-nowrap">
            <p class="animate-marquee text-white">
                [RUNNING TEXT] Segera Laporkan Transaksi Penggabungan, Peleburan, dan Pengambilalihan Saham Melalui
                https://notifikasi.kppu.go.id !
            </p>
        </div>

        <div class="bg-white p-6 md:p-8 rounded-b-lg shadow-lg">
            <div class="flex justify-between items-center border-b pb-4 mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Berita Terbaru</h2>
                <a href="#" class="text-blue-600 hover:underline font-semibold">Lihat Semua &rarr;</a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                {{-- Contoh Kartu Berita 1 --}}
                <div class="border rounded-lg overflow-hidden shadow-sm hover:shadow-xl transition-shadow duration-300">
                    <img src="{{ asset('images/berita1.jpg') }}" alt="Berita 1" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <div class="flex items-center mb-3">
                            <img src="{{ asset('images/avatar1.png') }}" alt="Author" class="w-8 h-8 rounded-full mr-2">
                            <span class="text-sm text-gray-600">Lorenzo Putra</span>
                        </div>
                        <h3 class="font-bold text-gray-800 mb-4 h-24">KPPU Kembali Gelar Sidang Perkara Tender Mesin Induk
                            MTU di Dirjen Bea Cukai</h3>
                        <a href="#"
                            class="bg-blue-700 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-blue-800">Baca
                            Selengkapnya</a>
                    </div>
                </div>

                {{-- Contoh Kartu Berita 2 --}}
                <div class="border rounded-lg overflow-hidden shadow-sm hover:shadow-xl transition-shadow duration-300">
                    <img src="{{ asset('images/berita2.jpg') }}" alt="Berita 2" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <div class="flex items-center mb-3">
                            <img src="{{ asset('images/avatar2.png') }}" alt="Author" class="w-8 h-8 rounded-full mr-2">
                            <span class="text-sm text-gray-600">Sarah Larasati</span>
                        </div>
                        <h3 class="font-bold text-gray-800 mb-4 h-24">Audiensi dan Diskusi Kantor Wilayah VI KPPU Makassar
                            dan Badan Pusat Statistik (BPS)</h3>
                        <a href="#"
                            class="bg-blue-700 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-blue-800">Baca
                            Selengkapnya</a>
                    </div>
                </div>

                {{-- Contoh Kartu Berita 3 (Duplikat untuk contoh) --}}
                <div class="border rounded-lg overflow-hidden shadow-sm hover:shadow-xl transition-shadow duration-300">
                    <img src="{{ asset('images/berita3.jpg') }}" alt="Berita 3" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <div class="flex items-center mb-3">
                            <img src="{{ asset('images/avatar1.png') }}" alt="Author" class="w-8 h-8 rounded-full mr-2">
                            <span class="text-sm text-gray-600">Lorenzo Putra</span>
                        </div>
                        <h3 class="font-bold text-gray-800 mb-4 h-24">KPPU Kembali Gelar Sidang Perkara Tender Mesin Induk
                            MTU di Dirjen Bea Cukai</h3>
                        <a href="#"
                            class="bg-blue-700 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-blue-800">Baca
                            Selengkapnya</a>
                    </div>
                </div>

                {{-- Contoh Kartu Berita 4 (Duplikat untuk contoh) --}}
                <div class="border rounded-lg overflow-hidden shadow-sm hover:shadow-xl transition-shadow duration-300">
                    <img src="{{ asset('images/berita2.jpg') }}" alt="Berita 4" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <div class="flex items-center mb-3">
                            <img src="{{ asset('images/avatar2.png') }}" alt="Author" class="w-8 h-8 rounded-full mr-2">
                            <span class="text-sm text-gray-600">Sarah Larasati</span>
                        </div>
                        <h3 class="font-bold text-gray-800 mb-4 h-24">Audiensi dan Diskusi Kantor Wilayah VI KPPU Makassar
                            dan Badan Pusat Statistik (BPS)</h3>
                        <a href="#"
                            class="bg-blue-700 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-blue-800">Baca
                            Selengkapnya</a>
                    </div>
                </div>

            </div>
        </div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4 md:p-8">

    <div class="mb-6">
        <a href="/berita" class="text-blue-600 hover:underline font-semibold">&larr; Back to home</a>
    </div>

    <div class="flex flex-col lg:flex-row gap-8">

        <div class="w-full lg:w-2/3">
            <div class="bg-white p-6 md:p-8 rounded-lg shadow-lg">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4 leading-tight">
                    KPPU Kembali Gelar Sidang Perkara Tender Mesin Induk MTU di Dirjen Bea Cukai
                </h1>

                <div class="flex items-center text-gray-500 text-sm mb-6">
                    <span>Oleh: <strong>Lorenzo Putro</strong></span>
                    <span class="mx-2">|</span>
                    <span>20 Agustus 2025</span>
                </div>

                <img src="{{ asset('images/berita4.jpg') }}" alt="Sidang KPPU" class="w-full rounded-lg mb-6">

                <div class="prose max-w-none">
                    <p>Perkara Tender ini melibatkan 2 (dua) Terlapor, yakni PT Dieselindo Utama Nusa sebagai Terlapor I, dan PT Rolls Royce Solution Indonesia sebagai Terlapor II. Kedua tender tersebut dimenangkan oleh Terlapor I yang mendapat dukungan dari Terlapor II. Perkara diawali dengan adanya tender pemeliharaan mesin induk MTU Pangkalan Sarana Operasi Bea Cukai Tipe A Tanjung Balai Karimun dan pemeliharaan mesin induk MTU Pangkalan Sarana Operasi Bea Cukai Tipe B Batam. Kuasa Hukum Terlapor I dan II hadir mewakili Terlapor di ruang sidang KPPU pada sidang perdana tersebut.
                    </p>
                </div>
            </div>
        </div>

        <div class="w-full lg:w-1/3">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-bold text-gray-800 border-b pb-3 mb-4">Berita Lainnya</h3>

                <ul class="space-y-5">
                    <li class="border-b pb-4">
                        <h4 class="font-bold text-gray-800 mb-1">
                            <img src="{{ asset('images/berita1.jpg') }}" alt="Berita 1" class="w-full h-40 object-cover">
                            <a href="/detail-berita" class="hover:text-blue-600">KPPU Mulai Sidangkan Perkara Tender Pemeliharaan Mesin Induk MTU di Bea Cukai</a>
                        </h4>
                        <div class="flex items-center mb-3">
                            <img src="{{ asset('images/avatar1.png') }}" alt="Author" class="w-8 h-8 rounded-full mr-2">
                            <span class="text-sm text-gray-600">Lorenzo Putra</span>
                        </div>
                        <a href="detail-berita"
                            class="bg-blue-700 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-blue-800">Baca
                            Selengkapnya</a>
                    </li>

                    <li class="border-b pb-4">
                        <h4 class="font-bold text-gray-800 mb-1">
                            <img src="{{ asset('images/berita2.jpg') }}" alt="Berita 1" class="w-full h-40 object-cover">
                            <a href="/detail-berita" class="hover:text-blue-600">KPPU Mulai Sidangkan Perkara Tender Pemeliharaan Mesin Induk MTU di Bea Cukai</a>
                        </h4>
                        <div class="flex items-center mb-3">
                            <img src="{{ asset('images/avatar1.png') }}" alt="Author" class="w-8 h-8 rounded-full mr-2">
                            <span class="text-sm text-gray-600">Lorenzo Putra</span>
                        </div>
                        <a href="detail-berita"
                            class="bg-blue-700 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-blue-800">Baca
                            Selengkapnya</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

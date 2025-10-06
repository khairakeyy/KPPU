{{-- Memberitahu Blade untuk menggunakan file layout 'app.blade.php' --}}
@extends('layouts.app')

{{-- Mendefinisikan konten untuk bagian 'content' yang ada di layout --}}
@section('content')
    {{--
  Hero Section Utama
  - relative: Diperlukan agar elemen 'absolute' di dalamnya bisa diposisikan.
  - h-screen: Membuat tinggi elemen ini 100% dari tinggi layar.
  - bg-cover: Memastikan gambar latar menutupi seluruh area.
  - bg-center: Memposisikan gambar di tengah.
--}}
    <div class="relative h-screen bg-cover bg-center" style="background-image: url('{{ asset('images/bg.png') }}');">

        <div class="absolute inset-0 bg-black opacity-50"></div>

        <div class="relative z-10 flex h-full flex-col text-white">

            <header class="p-4 bg-white shadow-md">
                <nav class="container mx-auto flex items-center justify-between">
                    <a href="#">
                        <img src="{{ asset('images/logokppu.png') }}" alt="Logo KPPU" class="h-10 w-auto">
                    </a>

                    <ul class="hidden items-center space-x-8 text-gray-700 md:flex">
                        <li><a href="#" class=" tracking-wider hover:text-blue-600">Tentang Kami</a></li>
                        <li><a href="#" class=" tracking-wider hover:text-blue-600">Penegakan Hukum</a></li>
                        <li><a href="#" class=" tracking-wider hover:text-blue-600">Pencegahan</a></li>
                        <li><a href="#" class=" tracking-wider hover:text-blue-600">Media & Publikasi</a>
                        </li>
                        <li><a href="#" class=" tracking-wider hover:text-blue-600">Layanan Publik</a></li>
                        <li><a href="#" class=" tracking-wider hover:text-blue-600">Kanwil</a></li>
                        <li><a href="#" class=" tracking-wider hover:text-blue-600">Kontak</a></li>
                    </ul>

                    <div>
                        <a href="#"
                            class="flex items-center space-x-2 border border-gray-500 px-3 py-1 text-sm font-semibold uppercase text-gray-700 transition-colors duration-300 hover:bg-gray-700 hover:text-white">

                            <svg class="h-4 w-5 rounded-sm" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 900 600">
                                <rect fill="#fff" width="900" height="600" />
                                <rect fill="#e70011" width="900" height="300" />
                            </svg>

                            <span>IND</span>
                        </a>
                    </div>
                </nav>
            </header>

            <div class="flex flex-grow items-center justify-center">
                <div class="w-full max-w-4xl px-4 text-center">
                    <h1 class="text-4xl font-bold leading-tight md:text-6xl">
                        KPPU Kini Lebih Cepat Tanggapi Laporan Anda
                    </h1>
                    <a href="#"
                        class="mt-8 inline-block border border-white py-3 px-10 text-lg uppercase tracking-wider transition-colors duration-300 hover:bg-white hover:text-black">
                        Pelajari Transformasi Kami
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

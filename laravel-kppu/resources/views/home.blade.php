@extends('layouts.app')

@section('content')

    <div class="relative h-screen bg-cover bg-center" style="background-image: url('{{ asset('images/bg.png') }}');">

        <div class="absolute inset-0 bg-black opacity-50"></div>

        <div class="relative z-10 flex h-full flex-col text-white">
            <div class="flex flex-grow items-center justify-center">
                <div class="w-full max-w-4xl px-4 text-center">
                    <h1 class="text-4xl font-bold leading-tight md:text-6xl">
                        KPPU Kini Lebih Cepat Tanggapi Laporan Anda
                    </h1>
                    <a href="/berita"
                        class="mt-8 inline-block border border-white py-3 px-10 text-lg uppercase tracking-wider transition-colors duration-300 hover:bg-white hover:text-black">
                        Pelajari Transformasi Kami
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

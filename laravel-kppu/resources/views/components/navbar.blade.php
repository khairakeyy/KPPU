<header x-data="{ mobileMenuOpen: false }" class="bg-white shadow-sm relative">
    <div class="container mx-auto p-4 flex items-center justify-between">
        <a href="/home">
            <img src="{{ asset('images/logokppu.png') }}" alt="Logo KPPU" class="h-12 w-auto">
        </a>

        <ul class="hidden items-center space-x-6 text-gray-600 md:flex">
            <li x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative">

                {{-- Tombol Utama Dropdown --}}
                <button class="uppercase tracking-wider text-sm font-semibold hover:text-blue-600 flex items-center">
                    Profil
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                {{-- Konten Dropdown --}}
                <div x-show="open" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform -translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-2"
                    class="absolute z-20 mt-2 w-64 bg-blue-900 text-white rounded-md shadow-lg" style="display: none;">

                    <a href="#"
                        class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">Visi
                        dan Misi</a>
                    <a href="#"
                        class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">Anggota</a>
                    <a href="#"
                        class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">Tugas &
                        Wewenang</a>
                    <a href="#"
                        class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">Organisasi</a>
                    <a href="#"
                        class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">Pejabat
                        Sekretariat</a>
                    <a href="#"
                        class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">Kinerja
                        Keuangan</a>
                    <a href="#"
                        class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">Mitra
                        Kerja</a>
                    <a href="#"
                        class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">PPID</a>
                    <a href="#" class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800">Logo dan
                        Maskot</a>
                </div>
            </li>

            <li x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative">

                {{-- Tombol Utama Dropdown --}}
                <button class="uppercase tracking-wider text-sm font-semibold hover:text-blue-600 flex items-center">
                    Penegakan Hukum
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                {{-- Konten Dropdown --}}
                <div x-show="open" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform -translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-2"
                    class="absolute z-20 mt-2 w-64 bg-blue-900 text-white rounded-md shadow-lg" style="display: none;">

                    <a href="#"
                        class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">Peraturan Perundang-undangan</a>
                    <a href="#"
                        class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">Peraturan Komisi</a>
                    <a href="#"
                        class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">Peraturan Ketua KPPU</a>
                    <a href="#"
                        class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">Pedoman</a>
                </div>
            </li>

            <li x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative">

                {{-- Tombol Utama Dropdown --}}
                <button class="uppercase tracking-wider text-sm font-semibold hover:text-blue-600 flex items-center">
                    Pencegahan
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                {{-- Konten Dropdown --}}
                <div x-show="open" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform -translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-2"
                    class="absolute z-20 mt-2 w-64 bg-blue-900 text-white rounded-md shadow-lg" style="display: none;">

                    <a href="#"class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">Kajian Kebijakan</a>
                    <a href="#"class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">Advokasi</a>
                    <a href="#"class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">Penelitian</a>
                    <a href="#"class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">Indeks Persaingan Usaha</a>
                    <a href="#"class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">KPPU Mendengar</a>
                </div>
            </li>

            <li x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative">

                {{-- Tombol Utama Dropdown --}}
                <button class="uppercase tracking-wider text-sm font-semibold hover:text-blue-600 flex items-center">
                    Media & Publikasi
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                {{-- Konten Dropdown --}}
                <div x-show="open" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform -translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-2"
                    class="absolute z-20 mt-2 w-64 bg-blue-900 text-white rounded-md shadow-lg" style="display: none;">

                    <a href="#"
                        class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">KPPU 25</a>
                    <a href="#"
                        class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">Jurnal</a>
                    <a href="#"
                        class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">Magang Merdeka</a>
                    <a href="#"
                        class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">Kumpulan Artikel</a>
                    <a href="#"
                        class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">Galeri</a>
                    <a href="#"
                        class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">Kompetisi</a>
                    <a href="#"
                        class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">Laporan Tahunan</a>
                    <a href="#"
                        class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">Referensi</a>
                    <a href="#"
                        class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">Siaran Pers</a>
                </div>
            </li>

            <li x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative">

                {{-- Tombol Utama Dropdown --}}
                <button class="uppercase tracking-wider text-sm font-semibold hover:text-blue-600 flex items-center">
                    Layanan Publik
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                {{-- Konten Dropdown --}}
                <div x-show="open" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform -translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-2"
                    class="absolute z-20 mt-2 w-64 bg-blue-900 text-white rounded-md shadow-lg" style="display: none;">

                    <a href="#"
                        class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">Peraturan Perundang-undangan</a>
                    <a href="#"
                        class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">Peraturan Komisi</a>
                    <a href="#"
                        class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">Peraturan Ketua KPPU</a>
                    <a href="#"
                        class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">Pedoman</a>
                </div>
            </li>

            <li x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative">

                {{-- Tombol Utama Dropdown --}}
                <button class="uppercase tracking-wider text-sm font-semibold hover:text-blue-600 flex items-center">
                    Kanwil
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                {{-- Konten Dropdown --}}
                <div x-show="open" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform -translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-2"
                    class="absolute z-20 mt-2 w-64 bg-blue-900 text-white rounded-md shadow-lg" style="display: none;">

                    <a href="#"
                        class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">Peraturan Perundang-undangan</a>
                    <a href="#"
                        class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">Peraturan Komisi</a>
                    <a href="#"
                        class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">Peraturan Ketua KPPU</a>
                    <a href="#"
                        class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">Pedoman</a>
                </div>
            </li>

            <li x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative">

                {{-- Tombol Utama Dropdown --}}
                <button class="uppercase tracking-wider text-sm font-semibold hover:text-blue-600 flex items-center">
                    Kontak
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                {{-- Konten Dropdown --}}
                <div x-show="open" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform -translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-2"
                    class="absolute z-20 mt-2 w-64 bg-blue-900 text-white rounded-md shadow-lg" style="display: none;">

                    <a href="#"
                        class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">Peraturan Perundang-undangan</a>
                    <a href="#"
                        class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">Peraturan Komisi</a>
                    <a href="#"
                        class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">Peraturan Ketua KPPU</a>
                    <a href="#"
                        class="block px-4 py-3 text-sm font-semibold hover:bg-blue-800 border-b border-blue-800">Pedoman</a>
                </div>
            </li>

        <div>
            <a href="#"
                class="flex items-center space-x-2 border border-gray-400 rounded-md px-3 py-1.5 text-sm font-semibold uppercase text-gray-600 transition-colors duration-300 hover:bg-gray-100">
                <svg class="h-4 w-5 rounded-sm" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 900 600">
                    <rect fill="#fff" width="900" height="600" />
                    <rect fill="#e70011" width="900" height="300" />
                </svg>
                <span>IND</span>
            </a>
        </div>
    </div>
</header>

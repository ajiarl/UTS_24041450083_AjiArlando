<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Resmi Kecamatan Alang-Alang Lebar | Kota Palembang</title>
    <meta name="description" content="Portal Informasi Resmi dan Pelayanan Publik Kecamatan Alang-Alang Lebar, Kota Palembang, Provinsi Sumatera Selatan. Maju, Melayani, Akuntabel, dan Sejahtera.">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        palembang: {
                            gold: '#d97706',
                            red: '#991b1b',
                            redlight: '#b91c1c'
                        },
                        pemda: {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            500: '#16a34a',
                            600: '#15803d',
                            700: '#166534',
                            800: '#14532d',
                            900: '#052e16'
                        }
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                        heading: ['Cabinet Grotesk', 'Plus Jakarta Sans', 'sans-serif']
                    }
                }
            }
        }
    </script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        .songket-pattern {
            background-color: #052e16;
            background-image: radial-gradient(rgba(217, 119, 6, 0.25) 1px, transparent 1px);
            background-size: 20px 20px;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-pemda-600 selection:text-white">

    <!-- Top Header Informasi Pemda -->
    <div class="bg-gradient-to-r from-pemda-900 via-pemda-800 to-pemda-900 text-white text-xs py-2.5 px-4 border-b border-pemda-700">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-2">
            <div class="flex items-center space-x-4">
                <span class="flex items-center"><i class="fa-solid fa-building-columns text-amber-400 mr-1.5"></i> Pemerintah Kota Palembang</span>
                <span class="hidden sm:inline text-pemda-400">|</span>
                <span class="hidden sm:inline"><i class="fa-solid fa-clock text-amber-400 mr-1.5"></i> Jam Layanan: Senin - Jumat (08.00 - 15.30 WIB)</span>
            </div>
            <div class="flex items-center space-x-4">
                <span class="text-amber-300 font-semibold"><i class="fa-solid fa-phone text-xs mr-1"></i> Call Center: (0711) 742-xxxx</span>
                <div class="flex items-center space-x-2 pl-3 border-l border-pemda-600">
                    <a href="#" class="hover:text-amber-400 transition" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="hover:text-amber-400 transition" title="Facebook"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="hover:text-amber-400 transition" title="YouTube"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation Bar -->
    <header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md shadow-sm border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo & Brand -->
                <a href="#beranda" class="flex items-center space-x-3.5">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-pemda-600 to-amber-600 flex items-center justify-center text-white shadow-md shadow-pemda-600/30">
                        <i class="fa-solid fa-shield-halved text-2xl"></i>
                    </div>
                    <div>
                        <div class="flex items-center space-x-2">
                            <span class="text-xs font-extrabold uppercase tracking-widest text-pemda-700">KECAMATAN</span>
                            <span class="px-2 py-0.5 rounded text-[10px] font-bold bg-amber-100 text-amber-800">PALEMBANG</span>
                        </div>
                        <h1 class="text-lg sm:text-xl font-bold tracking-tight text-slate-900 leading-none mt-0.5">
                            ALANG-ALANG LEBAR
                        </h1>
                    </div>
                </a>

                <!-- Desktop Navigation Menu -->
                <nav class="hidden lg:flex items-center space-x-8 text-sm font-semibold text-slate-700">
                    <a href="#beranda" class="hover:text-pemda-600 transition">Beranda</a>
                    <a href="#profil" class="hover:text-pemda-600 transition">Profil Wilayah</a>
                    <a href="#kelurahan" class="hover:text-pemda-600 transition">Kelurahan</a>
                    <a href="#layanan" class="hover:text-pemda-600 transition">Layanan Publik</a>
                    <a href="#berita" class="hover:text-pemda-600 transition">Berita & Kegiatan</a>
                    <a href="#aspirasi" class="hover:text-pemda-600 transition">Pengaduan Warga</a>
                </nav>

                <!-- Action Button -->
                <div class="hidden sm:flex items-center space-x-3">
                    @auth
                        <div class="flex items-center space-x-2 bg-slate-100 rounded-xl px-3 py-1.5 border border-slate-200">
                            <span class="w-7 h-7 rounded-lg bg-pemda-600 text-white flex items-center justify-center text-xs font-bold">
                                <i class="fa-solid fa-user"></i>
                            </span>
                            <div class="text-left">
                                <p class="text-xs font-bold text-slate-800 leading-none">{{ Auth::user()->name }}</p>
                                <span class="text-[10px] text-pemda-700 font-semibold uppercase">{{ Auth::user()->role ?? 'Masyarakat' }}</span>
                            </div>
                        </div>
                        @if(Auth::user()->role === 'admin')
                            <a href="{{ route('admin.dashboard') }}" class="px-3.5 py-2 rounded-xl text-xs font-semibold text-white bg-slate-800 hover:bg-slate-700 transition flex items-center space-x-1.5 shadow-sm">
                                <i class="fa-solid fa-gauge text-xs text-amber-400"></i>
                                <span>Dashboard Admin</span>
                            </a>
                        @endif
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="p-2 rounded-xl text-xs font-semibold text-rose-600 hover:bg-rose-50 border border-rose-200 transition" title="Keluar">
                                <i class="fa-solid fa-right-from-bracket"></i>
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="px-3.5 py-2 rounded-xl text-xs font-semibold text-slate-700 hover:text-pemda-700 hover:bg-slate-100 transition flex items-center space-x-1.5 border border-slate-200">
                            <i class="fa-solid fa-right-to-bracket text-xs text-pemda-600"></i>
                            <span>Masuk Warga</span>
                        </a>
                        <a href="{{ route('register') }}" class="px-3.5 py-2 rounded-xl text-xs font-semibold text-white bg-amber-600 hover:bg-amber-700 transition flex items-center space-x-1.5 shadow-sm">
                            <i class="fa-solid fa-user-plus text-xs"></i>
                            <span>Daftar Akun</span>
                        </a>
                    @endauth
                    <a href="#aspirasi" class="px-4 py-2.5 rounded-xl text-xs font-bold uppercase tracking-wider text-white bg-pemda-600 hover:bg-pemda-700 shadow-md shadow-pemda-600/20 transition-all flex items-center space-x-2">
                        <i class="fa-solid fa-bullhorn text-amber-300"></i>
                        <span>Lapor / Aspirasi</span>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="lg:hidden flex items-center">
                    <button id="mobile-btn" class="p-2 rounded-lg text-slate-700 hover:bg-slate-100 focus:outline-none" aria-label="Toggle menu">
                        <i class="fa-solid fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Drawer Menu -->
        <div id="mobile-menu" class="hidden lg:hidden bg-white border-t border-slate-200 px-6 py-4 space-y-3 shadow-lg">
            @auth
                <div class="p-3 bg-slate-50 rounded-xl border border-slate-200 flex items-center justify-between">
                    <div>
                        <p class="text-xs font-bold text-slate-800">{{ Auth::user()->name }}</p>
                        <span class="text-[10px] text-pemda-700 font-semibold uppercase">{{ Auth::user()->role ?? 'Masyarakat' }}</span>
                    </div>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="text-xs text-rose-600 font-semibold hover:underline">Keluar</button>
                    </form>
                </div>
                @if(Auth::user()->role === 'admin')
                    <a href="{{ route('admin.dashboard') }}" class="block font-medium text-amber-600 hover:text-amber-700 py-1">Dashboard Admin</a>
                @endif
            @else
                <div class="grid grid-cols-2 gap-2 pt-1 pb-2">
                    <a href="{{ route('login') }}" class="text-center py-2 rounded-xl text-xs font-semibold text-slate-700 border border-slate-300">Masuk</a>
                    <a href="{{ route('register') }}" class="text-center py-2 rounded-xl text-xs font-semibold text-white bg-amber-600">Daftar Warga</a>
                </div>
            @endauth
            <a href="#beranda" class="block font-medium text-slate-700 hover:text-pemda-600 py-1 mobile-link">Beranda</a>
            <a href="#profil" class="block font-medium text-slate-700 hover:text-pemda-600 py-1 mobile-link">Profil Wilayah</a>
            <a href="#kelurahan" class="block font-medium text-slate-700 hover:text-pemda-600 py-1 mobile-link">Kelurahan</a>
            <a href="#layanan" class="block font-medium text-slate-700 hover:text-pemda-600 py-1 mobile-link">Layanan Publik</a>
            <a href="#berita" class="block font-medium text-slate-700 hover:text-pemda-600 py-1 mobile-link">Berita & Kegiatan</a>
            <a href="#aspirasi" class="block font-medium text-slate-700 hover:text-pemda-600 py-1 mobile-link">Pengaduan Warga</a>
            <a href="#aspirasi" class="block w-full text-center py-2.5 rounded-xl font-bold text-xs uppercase text-white bg-pemda-600 mobile-link">Lapor Warga Online</a>
        </div>
    </header>

    <!-- Success Flash Notification -->
    @if(session('success_auth'))
    <div id="flash-auth" class="max-w-4xl mx-auto px-4 mt-6">
        <div class="p-4 rounded-2xl bg-emerald-700 text-white shadow-lg flex items-start justify-between">
            <div class="flex items-center space-x-3">
                <i class="fa-solid fa-circle-check text-2xl text-emerald-300"></i>
                <p class="text-sm font-medium">{{ session('success_auth') }}</p>
            </div>
            <button onclick="document.getElementById('flash-auth').remove()" class="text-emerald-200 hover:text-white"><i class="fa-solid fa-xmark"></i></button>
        </div>
    </div>
    @endif

    @if(session('info_auth'))
    <div id="flash-info" class="max-w-4xl mx-auto px-4 mt-6">
        <div class="p-4 rounded-2xl bg-slate-700 text-white shadow-lg flex items-start justify-between">
            <div class="flex items-center space-x-3">
                <i class="fa-solid fa-circle-info text-2xl text-slate-300"></i>
                <p class="text-sm font-medium">{{ session('info_auth') }}</p>
            </div>
            <button onclick="document.getElementById('flash-info').remove()" class="text-slate-200 hover:text-white"><i class="fa-solid fa-xmark"></i></button>
        </div>
    </div>
    @endif

    @if(session('success_aspirasi'))
    <div id="flash-notif" class="max-w-4xl mx-auto px-4 mt-6">
        <div class="p-4 rounded-2xl bg-emerald-700 text-white shadow-lg flex items-start justify-between">
            <div class="flex items-center space-x-3">
                <i class="fa-solid fa-circle-check text-2xl text-emerald-300"></i>
                <p class="text-sm font-medium">{{ session('success_aspirasi') }}</p>
            </div>
            <button onclick="document.getElementById('flash-notif').remove()" class="text-emerald-200 hover:text-white"><i class="fa-solid fa-xmark"></i></button>
        </div>
    </div>
    @endif

    <!-- Hero Section -->
    <section id="beranda" class="relative songket-pattern text-white py-20 lg:py-28 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <!-- Hero Left Info -->
                <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                    <div class="inline-flex items-center space-x-2 px-3.5 py-1.5 rounded-full bg-pemda-700/60 border border-amber-400/30 text-amber-300 text-xs font-semibold tracking-wide uppercase">
                        <i class="fa-solid fa-circle-info text-amber-400"></i>
                        <span>Pusat Informasi & Pelayanan Terpadu Warga</span>
                    </div>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold leading-tight tracking-tight">
                        Selamat Datang di Portal Resmi <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-300 via-amber-200 to-yellow-400">Kecamatan Alang-Alang Lebar</span>
                    </h2>

                    <p class="text-slate-200 text-sm sm:text-base leading-relaxed max-w-2xl font-light">
                        Mewujudkan tata kelola pemerintahan yang profesional, transparan, humanis, dan responsif dalam memberikan pelayanan publik terbaik bagi seluruh masyarakat Alang-Alang Lebar, Kota Palembang.
                    </p>

                    <div class="flex flex-wrap gap-4 justify-center lg:justify-start pt-2">
                        <a href="#layanan" class="px-6 py-3.5 rounded-xl font-bold text-xs uppercase tracking-wider text-pemda-900 bg-amber-400 hover:bg-amber-300 shadow-lg shadow-amber-500/20 transition transform hover:-translate-y-0.5">
                            <i class="fa-solid fa-clipboard-list mr-2"></i> Akses Layanan Kependudukan
                        </a>
                        <a href="#aspirasi" class="px-6 py-3.5 rounded-xl font-bold text-xs uppercase tracking-wider text-white border border-slate-300/30 hover:bg-white/10 backdrop-blur-sm transition">
                            <i class="fa-solid fa-comment-dots mr-2 text-amber-300"></i> Sampaikan Aspirasi
                        </a>
                    </div>

                    <!-- Statistik Cepat -->
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 pt-8 border-t border-pemda-700/60">
                        <div class="bg-pemda-800/60 backdrop-blur-sm p-3.5 rounded-xl border border-pemda-600/30">
                            <span class="block text-2xl font-extrabold text-amber-300">{{ $statistik['penduduk'] }}</span>
                            <span class="text-[11px] text-slate-300 font-medium">Jumlah Penduduk</span>
                        </div>
                        <div class="bg-pemda-800/60 backdrop-blur-sm p-3.5 rounded-xl border border-pemda-600/30">
                            <span class="block text-2xl font-extrabold text-amber-300">{{ $statistik['kelurahan'] }}</span>
                            <span class="text-[11px] text-slate-300 font-medium">Wilayah Kerja</span>
                        </div>
                        <div class="bg-pemda-800/60 backdrop-blur-sm p-3.5 rounded-xl border border-pemda-600/30">
                            <span class="block text-2xl font-extrabold text-amber-300">{{ $statistik['rt_rw'] }}</span>
                            <span class="text-[11px] text-slate-300 font-medium">Lembaga Masyarakat</span>
                        </div>
                        <div class="bg-pemda-800/60 backdrop-blur-sm p-3.5 rounded-xl border border-pemda-600/30">
                            <span class="block text-2xl font-extrabold text-amber-300">{{ $statistik['luas_wilayah'] }}</span>
                            <span class="text-[11px] text-slate-300 font-medium">Luas Wilayah</span>
                        </div>
                    </div>
                </div>

                <!-- Hero Right Card: Sambutan Camat -->
                <div class="lg:col-span-5">
                    <div class="bg-white text-slate-900 rounded-3xl p-6 sm:p-8 shadow-2xl border border-slate-200 relative overflow-hidden">
                        <div class="flex items-center space-x-4 mb-6 pb-6 border-b border-slate-100">
                            <div class="w-16 h-16 rounded-2xl bg-pemda-100 flex items-center justify-center text-pemda-700 text-3xl shrink-0 shadow-inner">
                                <i class="fa-solid fa-user-tie"></i>
                            </div>
                            <div>
                                <span class="text-[11px] font-bold uppercase tracking-wider text-amber-600">Pimpinan Wilayah</span>
                                <h3 class="text-lg font-bold text-slate-900">Kantor Camat Alang-Alang Lebar</h3>
                                <p class="text-xs text-slate-500">Pemerintah Kota Palembang</p>
                            </div>
                        </div>

                        <div class="space-y-4 text-xs sm:text-sm text-slate-600 leading-relaxed italic">
                            <p>
                                "Assalamu’alaikum Warahmatullahi Wabarakatuh. Selamat datang di gerbang informasi publik Kecamatan Alang-Alang Lebar. Website ini hadir sebagai wujud komitmen kami dalam mewujudkan pelayanan kependudukan yang cepat, transparan, dan bebas dari pungutan liar."
                            </p>
                            <p>
                                "Mari kita bersama-sama mewujudkan Kecamatan Alang-Alang Lebar yang bersih, tertib, aman, serta mendukung kemajuan Kota Palembang yang Berdaya dan Sejahtera."
                            </p>
                        </div>

                        <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between text-xs">
                            <span class="font-semibold text-slate-800"><i class="fa-solid fa-certificate text-pemda-600 mr-1"></i> Moto: PRIMA</span>
                            <span class="text-slate-500">Profesional • Ramah • Ikhlas • Melayani</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Profil Wilayah Section -->
    <section id="profil" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <div class="inline-flex items-center space-x-2 text-pemda-600 text-xs font-bold tracking-widest uppercase">
                        <i class="fa-solid fa-map-location-dot"></i>
                        <span>Geografis & Potensi Wilayah</span>
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 leading-tight">
                        Kawasan Gerbang Masuk Strategis di Sisi Barat Kota Palembang
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        Kecamatan Alang-Alang Lebar merupakan salah satu kecamatan berkembang pesat di Kota Palembang. Sebagai simpul transportasi antar-provinsi melalui kehadiran Terminal Tipe A Alang-Alang Lebar dan akses Jalur Lingkar Barat, wilayah ini memegang peranan krusial bagi denyut ekonomi, perdagangan, dan mobilitas masyarakat Sumatera Selatan.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                        <div class="p-4 rounded-xl bg-slate-50 border border-slate-200">
                            <i class="fa-solid fa-bus-simple text-amber-600 text-xl mb-2"></i>
                            <h4 class="font-bold text-sm text-slate-900">Hub Transportasi</h4>
                            <p class="text-xs text-slate-500 mt-1">Sentra Terminal Penumpang Terpadu Tipe A Alang-Alang Lebar.</p>
                        </div>
                        <div class="p-4 rounded-xl bg-slate-50 border border-slate-200">
                            <i class="fa-solid fa-boxes-packing text-amber-600 text-xl mb-2"></i>
                            <h4 class="font-bold text-sm text-slate-900">Kawasan Pergudangan</h4>
                            <p class="text-xs text-slate-500 mt-1">Pusat logistik dan distribusi utama lintas kota dan provinsi.</p>
                        </div>
                        <div class="p-4 rounded-xl bg-slate-50 border border-slate-200">
                            <i class="fa-solid fa-hospital text-amber-600 text-xl mb-2"></i>
                            <h4 class="font-bold text-sm text-slate-900">Fasilitas Kesehatan</h4>
                            <p class="text-xs text-slate-500 mt-1">Didukung RS Pratama, Puskesmas Alang-Alang Lebar, & klinik mitra.</p>
                        </div>
                        <div class="p-4 rounded-xl bg-slate-50 border border-slate-200">
                            <i class="fa-solid fa-graduation-cap text-amber-600 text-xl mb-2"></i>
                            <h4 class="font-bold text-sm text-slate-900">Pusat Pendidikan</h4>
                            <p class="text-xs text-slate-500 mt-1">Lembaga pendidikan formal dari tingkat dasar hingga perguruan tinggi.</p>
                        </div>
                    </div>
                </div>

                <!-- Ilustrasi Geografis / Peta Visual -->
                <div class="bg-gradient-to-br from-pemda-900 to-slate-900 rounded-3xl p-8 text-white relative shadow-2xl">
                    <div class="flex items-center justify-between pb-6 border-b border-pemda-700">
                        <div>
                            <span class="text-xs text-amber-300 uppercase font-semibold">Batas Administrasi Wilayah</span>
                            <h3 class="text-xl font-bold mt-1">Letak Geografis</h3>
                        </div>
                        <div class="w-10 h-10 rounded-full bg-pemda-800 flex items-center justify-center text-amber-400">
                            <i class="fa-solid fa-compass text-lg"></i>
                        </div>
                    </div>

                    <div class="space-y-4 mt-6 text-xs sm:text-sm">
                        <div class="flex items-start justify-between p-3 rounded-lg bg-pemda-800/40 border border-pemda-700/50">
                            <span class="text-slate-300 font-medium"><i class="fa-solid fa-arrow-up text-amber-400 mr-2"></i> Sebelah Utara:</span>
                            <span class="font-semibold text-white">Kabupaten Banyuasin</span>
                        </div>
                        <div class="flex items-start justify-between p-3 rounded-lg bg-pemda-800/40 border border-pemda-700/50">
                            <span class="text-slate-300 font-medium"><i class="fa-solid fa-arrow-down text-amber-400 mr-2"></i> Sebelah Selatan:</span>
                            <span class="font-semibold text-white">Kecamatan Sukarami</span>
                        </div>
                        <div class="flex items-start justify-between p-3 rounded-lg bg-pemda-800/40 border border-pemda-700/50">
                            <span class="text-slate-300 font-medium"><i class="fa-solid fa-arrow-right text-amber-400 mr-2"></i> Sebelah Timur:</span>
                            <span class="font-semibold text-white">Kecamatan Sukarami</span>
                        </div>
                        <div class="flex items-start justify-between p-3 rounded-lg bg-pemda-800/40 border border-pemda-700/50">
                            <span class="text-slate-300 font-medium"><i class="fa-solid fa-arrow-left text-amber-400 mr-2"></i> Sebelah Barat:</span>
                            <span class="font-semibold text-white">Kecamatan Gandus</span>
                        </div>
                    </div>

                    <div class="mt-8 p-4 rounded-xl bg-amber-500/10 border border-amber-400/20 text-xs text-amber-200">
                        <p><i class="fa-solid fa-map-pin mr-1.5 text-amber-400"></i> Kantor Camat Alang-Alang Lebar beralamat di Jl. Kolonel H. Burlian KM. 10, Kota Palembang, Sumatera Selatan 30154.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kelurahan Section -->
    <section id="kelurahan" class="py-20 bg-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                <span class="text-xs font-bold text-pemda-600 uppercase tracking-widest">Wilayah Kerja Administratif</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900">4 Kelurahan di Alang-Alang Lebar</h2>
                <p class="text-slate-600 text-sm sm:text-base">
                    Pemerintah Kecamatan Alang-Alang Lebar menaungi 4 kelurahan yang siap melayani kebutuhan administrasi warga di tingkat basis.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($kelurahan as $k)
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 hover:shadow-xl hover:border-pemda-500 transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-pemda-50 text-pemda-700 group-hover:bg-pemda-600 group-hover:text-white flex items-center justify-center text-xl transition-all duration-300 mb-4 shadow-sm">
                            <i class="fa-solid {{ $k['icon'] }}"></i>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 group-hover:text-pemda-600 transition">Kelurahan {{ $k['nama'] }}</h3>
                        <p class="text-xs text-slate-500 mt-2 leading-relaxed">{{ $k['deskripsi'] }}</p>
                    </div>

                    <div class="mt-6 pt-4 border-t border-slate-100 grid grid-cols-2 gap-2 text-xs">
                        <div>
                            <span class="text-slate-400 block text-[10px] uppercase">Luas Area</span>
                            <span class="font-bold text-slate-800">{{ $k['luas'] }}</span>
                        </div>
                        <div>
                            <span class="text-slate-400 block text-[10px] uppercase">Estimasi Warga</span>
                            <span class="font-bold text-slate-800">{{ $k['penduduk'] }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Layanan Publik Section -->
    <section id="layanan" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                <span class="text-xs font-bold text-pemda-600 uppercase tracking-widest">Pusat Layanan Kependudukan</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900">Standar Pelayanan Publik</h2>
                <p class="text-slate-600 text-sm sm:text-base">
                    Pelayanan prima, transparan, cepat, dan mudah diakses oleh seluruh warga masyarakat.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach($layanan as $lay)
                <div class="p-6 sm:p-8 rounded-3xl bg-slate-50 border border-slate-200 hover:border-pemda-400 hover:shadow-lg transition-all flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-3 py-1 rounded-full text-[10px] font-extrabold uppercase bg-amber-100 text-amber-800 tracking-wider">
                                {{ $lay['kode'] }}
                            </span>
                            <span class="text-xs font-semibold text-pemda-700 flex items-center">
                                <i class="fa-regular fa-clock mr-1"></i> {{ $lay['waktu'] }}
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">{{ $lay['judul'] }}</h3>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">{{ $lay['deskripsi'] }}</p>

                        <div class="mt-4 pt-4 border-t border-slate-200/60">
                            <span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider block mb-2">Persyaratan Utama:</span>
                            <ul class="space-y-1 text-xs text-slate-600">
                                @foreach($lay['syarat'] as $s)
                                <li class="flex items-center"><i class="fa-solid fa-check text-pemda-600 text-xs mr-2"></i> {{ $s }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="mt-6 pt-4 border-t border-slate-200/60 flex items-center justify-between">
                        <span class="text-xs font-semibold text-emerald-600"><i class="fa-solid fa-shield-heart mr-1"></i> Tanpa Biaya (Gratis Rp 0,-)</span>
                        <a href="#aspirasi" class="text-xs font-bold text-pemda-700 hover:text-pemda-900 flex items-center space-x-1">
                            <span>Konsultasi</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Berita & Pengumuman -->
    <section id="berita" class="py-20 bg-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                <span class="text-xs font-bold text-pemda-600 uppercase tracking-widest">Kabar Terkini</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900">Berita & Kegiatan Kecamatan</h2>
                <p class="text-slate-600 text-sm sm:text-base">
                    Ikuti perkembangan kegiatan pemerintahan, pembangunan, dan kemasyarakatan di wilayah Alang-Alang Lebar.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($berita as $item)
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-200 hover:shadow-xl transition-all flex flex-col justify-between">
                    <div>
                        <div class="h-48 overflow-hidden relative">
                            <img src="{{ $item['gambar'] }}" alt="{{ $item['judul'] }}" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                            <span class="absolute top-3 left-3 px-2.5 py-1 rounded-md text-[10px] font-bold bg-pemda-800 text-white">
                                {{ $item['kategori'] }}
                            </span>
                        </div>
                        <div class="p-6">
                            <span class="text-[11px] text-slate-400 block mb-2"><i class="fa-regular fa-calendar mr-1"></i> {{ $item['tanggal'] }}</span>
                            <h3 class="text-base font-bold text-slate-900 hover:text-pemda-600 transition leading-snug mb-3">
                                {{ $item['judul'] }}
                            </h3>
                            <p class="text-xs text-slate-600 leading-relaxed">
                                {{ $item['ringkasan'] }}
                            </p>
                        </div>
                    </div>
                    <div class="px-6 pb-6 pt-2">
                        <a href="#" class="text-xs font-bold text-pemda-700 hover:text-amber-600 flex items-center space-x-1">
                            <span>Baca Selengkapnya</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Formulir Pengaduan / Aspirasi Online Warga -->
    <section id="aspirasi" class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-br from-pemda-900 to-slate-900 rounded-3xl p-8 sm:p-12 text-white shadow-2xl">
                <div class="text-center space-y-3 mb-8">
                    <span class="px-3 py-1 rounded-full text-xs font-bold uppercase bg-amber-400/20 text-amber-300 border border-amber-400/30">
                        Layanan Pengaduan & Aspirasi Warga
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-extrabold">Suara Warga Alang-Alang Lebar</h2>
                    <p class="text-xs sm:text-sm text-slate-300 max-w-xl mx-auto">
                        Sampaikan kritik, saran, laporan infrastruktur, atau kendala pelayanan administrasi. Identitas pelapor dijaga kerahasiaannya.
                    </p>
                </div>

                <form action="{{ route('kecamatan.aspirasi') }}" method="POST" class="space-y-4">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-300 mb-1">NAMA LENGKAP PELAPOR *</label>
                            <input type="text" name="nama" required value="{{ Auth::check() ? Auth::user()->name : old('nama') }}" placeholder="Contoh: Muhammad Yusuf" class="w-full px-4 py-3 text-xs rounded-xl bg-slate-800 border border-slate-700 text-white placeholder-slate-400 focus:outline-none focus:border-amber-400 focus:ring-1 focus:ring-amber-400">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-300 mb-1">NO. TELEPON / WHATSAPP *</label>
                            <input type="tel" name="telepon" required value="{{ Auth::check() ? Auth::user()->telepon : old('telepon') }}" placeholder="Contoh: 081234567890" class="w-full px-4 py-3 text-xs rounded-xl bg-slate-800 border border-slate-700 text-white placeholder-slate-400 focus:outline-none focus:border-amber-400 focus:ring-1 focus:ring-amber-400">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-300 mb-1">WILAYAH KELURAHAN *</label>
                            <select name="kelurahan" required class="w-full px-4 py-3 text-xs rounded-xl bg-slate-800 border border-slate-700 text-white focus:outline-none focus:border-amber-400 focus:ring-1 focus:ring-amber-400">
                                @php
                                    $userKelurahan = Auth::check() ? Auth::user()->kelurahan : old('kelurahan');
                                @endphp
                                <option value="Alang-Alang Lebar" {{ $userKelurahan == 'Alang-Alang Lebar' ? 'selected' : '' }}>Kelurahan Alang-Alang Lebar</option>
                                <option value="Karya Baru" {{ $userKelurahan == 'Karya Baru' ? 'selected' : '' }}>Kelurahan Karya Baru</option>
                                <option value="Talang Kelapa" {{ $userKelurahan == 'Talang Kelapa' ? 'selected' : '' }}>Kelurahan Talang Kelapa</option>
                                <option value="Srijaya" {{ $userKelurahan == 'Srijaya' ? 'selected' : '' }}>Kelurahan Srijaya</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-300 mb-1">KATEGORI LAPORAN *</label>
                            <select name="kategori" required class="w-full px-4 py-3 text-xs rounded-xl bg-slate-800 border border-slate-700 text-white focus:outline-none focus:border-amber-400 focus:ring-1 focus:ring-amber-400">
                                <option value="Pelayanan Administrasi KTP/KK">Pelayanan Administrasi KTP/KK</option>
                                <option value="Infrastruktur & Jalan Rusak">Infrastruktur & Jalan Rusak</option>
                                <option value="Drainase & Kebersihan Sampah">Drainase & Kebersihan Sampah</option>
                                <option value="Ketertiban & Keamanan">Ketertiban & Keamanan Lingkungan</option>
                                <option value="Lainnya">Saran / Aspirasi Lainnya</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-300 mb-1">ISI PESAN / LAPORAN *</label>
                        <textarea name="pesan" rows="4" required placeholder="Tuliskan detail lokasi dan uraian laporan secara jelas..." class="w-full px-4 py-3 text-xs rounded-xl bg-slate-800 border border-slate-700 text-white placeholder-slate-400 focus:outline-none focus:border-amber-400 focus:ring-1 focus:ring-amber-400"></textarea>
                    </div>

                    <button type="submit" class="w-full py-4 rounded-xl font-bold text-xs uppercase tracking-wider text-pemda-950 bg-amber-400 hover:bg-amber-300 transition shadow-lg shadow-amber-500/20 flex items-center justify-center space-x-2">
                        <i class="fa-solid fa-paper-plane"></i>
                        <span>Kirim Laporan / Aspirasi</span>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-400 pt-16 pb-10 border-t border-slate-800 text-xs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 pb-12 border-b border-slate-800">
                <!-- Identitas -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-lg bg-amber-500 flex items-center justify-center text-slate-950 font-bold">
                            <i class="fa-solid fa-shield-halved text-lg"></i>
                        </div>
                        <div>
                            <span class="block text-sm font-bold text-white leading-tight">KECAMATAN ALANG-ALANG LEBAR</span>
                            <span class="block text-[10px] text-amber-400 font-semibold tracking-wider">KOTA PALEMBANG</span>
                        </div>
                    </div>
                    <p class="text-slate-400 leading-relaxed">
                        Pemerintah Kecamatan Alang-Alang Lebar senantiasa berorientasi pada pelayanan masyarakat yang prima, berintegritas, dan inovatif.
                    </p>
                </div>

                <!-- Tautan Cepat -->
                <div>
                    <h4 class="text-white font-bold uppercase tracking-wider mb-4">Navigasi Utama</h4>
                    <ul class="space-y-2">
                        <li><a href="#beranda" class="hover:text-amber-400 transition">Beranda</a></li>
                        <li><a href="#profil" class="hover:text-amber-400 transition">Profil & Geografis</a></li>
                        <li><a href="#kelurahan" class="hover:text-amber-400 transition">Daftar Kelurahan</a></li>
                        <li><a href="#layanan" class="hover:text-amber-400 transition">Layanan Administrasi KTP/KK</a></li>
                        <li><a href="#aspirasi" class="hover:text-amber-400 transition">Kanal Pengaduan Warga</a></li>
                    </ul>
                </div>

                <!-- Kelurahan Terhubung -->
                <div>
                    <h4 class="text-white font-bold uppercase tracking-wider mb-4">Wilayah Kelurahan</h4>
                    <ul class="space-y-2">
                        <li><a href="#kelurahan" class="hover:text-amber-400 transition">Kelurahan Alang-Alang Lebar</a></li>
                        <li><a href="#kelurahan" class="hover:text-amber-400 transition">Kelurahan Karya Baru</a></li>
                        <li><a href="#kelurahan" class="hover:text-amber-400 transition">Kelurahan Talang Kelapa</a></li>
                        <li><a href="#kelurahan" class="hover:text-amber-400 transition">Kelurahan Srijaya</a></li>
                    </ul>
                </div>

                <!-- Kontak Kantor Camat -->
                <div class="space-y-2.5">
                    <h4 class="text-white font-bold uppercase tracking-wider mb-4">Alamat & Kontak</h4>
                    <p><i class="fa-solid fa-location-dot text-amber-400 mr-2"></i> Jl. Kolonel H. Burlian KM. 10, Alang-Alang Lebar, Palembang, Sumatera Selatan</p>
                    <p><i class="fa-solid fa-phone text-amber-400 mr-2"></i> (0711) 742-xxxx</p>
                    <p><i class="fa-solid fa-envelope text-amber-400 mr-2"></i> camat.aal@palembang.go.id</p>
                    <p><i class="fa-solid fa-globe text-amber-400 mr-2"></i> palembang.go.id</p>
                </div>
            </div>

            <div class="pt-8 flex flex-col md:flex-row justify-between items-center text-slate-500">
                <p>&copy; {{ date('Y') }} Kantor Camat Alang-Alang Lebar Kota Palembang. Hak Cipta Dilindungi.</p>
                <p class="mt-2 md:mt-0">Sistem Informasi Pemerintahan Daerah Berbasis Laravel 12.</p>
            </div>
        </div>
    </footer>

    <!-- Script Drawer Menu -->
    <script>
        const mobileBtn = document.getElementById('mobile-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileLinks = document.querySelectorAll('.mobile-link');

        mobileBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });
    </script>
</body>
</html>

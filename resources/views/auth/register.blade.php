<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Akun Warga | Kecamatan Alang-Alang Lebar Palembang</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        pemda: {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            500: '#16a34a',
                            600: '#15803d',
                            700: '#166534',
                            800: '#14532d',
                            900: '#052e16'
                        }
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-slate-900 min-h-screen flex items-center justify-center p-4 py-12 relative overflow-x-hidden">
    <!-- Background Glow Decoration -->
    <div class="absolute -top-32 -left-32 w-96 h-96 bg-pemda-600/20 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-amber-500/15 rounded-full blur-3xl pointer-events-none"></div>

    <div class="w-full max-w-2xl relative z-10">
        <!-- Logo & Header -->
        <div class="text-center mb-8">
            <a href="{{ route('kecamatan.home') }}" class="inline-flex items-center space-x-3 group">
                <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-pemda-600 to-amber-500 flex items-center justify-center text-white text-2xl shadow-xl shadow-pemda-600/30 group-hover:scale-105 transition-transform">
                    <i class="fa-solid fa-id-card"></i>
                </div>
            </a>
            <h1 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight mt-4">Registrasi Akun Masyarakat</h1>
            <p class="text-xs sm:text-sm text-slate-400 mt-1">Layanan Mandiri Warga Kecamatan Alang-Alang Lebar, Palembang</p>
        </div>

        <!-- Card Container -->
        <div class="bg-slate-800/90 backdrop-blur-xl border border-slate-700/80 rounded-3xl p-6 sm:p-10 shadow-2xl">
            <!-- Errors Alert -->
            @if ($errors->any())
                <div class="mb-6 p-4 rounded-2xl bg-red-500/10 border border-red-500/30 text-red-300 text-xs sm:text-sm">
                    <div class="flex items-center space-x-2 font-semibold mb-2">
                        <i class="fa-solid fa-triangle-exclamation text-red-400"></i>
                        <span>Mohon periksa kembali formulir pendaftaran:</span>
                    </div>
                    <ul class="list-disc list-inside space-y-1 text-slate-300">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('register.submit') }}" method="POST" class="space-y-5">
                @csrf

                <!-- NIK & Nama Lengkap -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="nik" class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">
                            NIK (16 Digit) <span class="text-amber-400">*</span>
                        </label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400">
                                <i class="fa-solid fa-address-card text-sm"></i>
                            </span>
                            <input type="text" id="nik" name="nik" value="{{ old('nik') }}" maxlength="16" required
                                placeholder="16 digit NIK KTP"
                                class="w-full pl-10 pr-4 py-3 bg-slate-900/80 border {{ $errors->has('nik') ? 'border-red-500' : 'border-slate-700' }} rounded-xl text-white text-sm placeholder-slate-500 focus:outline-none focus:border-pemda-500 focus:ring-2 focus:ring-pemda-500/20 transition">
                        </div>
                    </div>

                    <div>
                        <label for="name" class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">
                            Nama Lengkap <span class="text-amber-400">*</span>
                        </label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400">
                                <i class="fa-solid fa-user text-sm"></i>
                            </span>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                placeholder="Sesuai KTP"
                                class="w-full pl-10 pr-4 py-3 bg-slate-900/80 border {{ $errors->has('name') ? 'border-red-500' : 'border-slate-700' }} rounded-xl text-white text-sm placeholder-slate-500 focus:outline-none focus:border-pemda-500 focus:ring-2 focus:ring-pemda-500/20 transition">
                        </div>
                    </div>
                </div>

                <!-- Email & No Telepon/WA -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="email" class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">
                            Alamat Email <span class="text-amber-400">*</span>
                        </label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400">
                                <i class="fa-solid fa-envelope text-sm"></i>
                            </span>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                placeholder="nama@email.com"
                                class="w-full pl-10 pr-4 py-3 bg-slate-900/80 border {{ $errors->has('email') ? 'border-red-500' : 'border-slate-700' }} rounded-xl text-white text-sm placeholder-slate-500 focus:outline-none focus:border-pemda-500 focus:ring-2 focus:ring-pemda-500/20 transition">
                        </div>
                    </div>

                    <div>
                        <label for="telepon" class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">
                            No. WhatsApp / HP <span class="text-amber-400">*</span>
                        </label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400">
                                <i class="fa-solid fa-phone text-sm"></i>
                            </span>
                            <input type="tel" id="telepon" name="telepon" value="{{ old('telepon') }}" required
                                placeholder="08xxxxxxxxxx"
                                class="w-full pl-10 pr-4 py-3 bg-slate-900/80 border {{ $errors->has('telepon') ? 'border-red-500' : 'border-slate-700' }} rounded-xl text-white text-sm placeholder-slate-500 focus:outline-none focus:border-pemda-500 focus:ring-2 focus:ring-pemda-500/20 transition">
                        </div>
                    </div>
                </div>

                <!-- Kelurahan Domisili -->
                <div>
                    <label for="kelurahan" class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">
                        Kelurahan Domisili (Kec. Alang-Alang Lebar) <span class="text-amber-400">*</span>
                    </label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400">
                            <i class="fa-solid fa-map-location-dot text-sm"></i>
                        </span>
                        <select id="kelurahan" name="kelurahan" required
                            class="w-full pl-10 pr-4 py-3 bg-slate-900/80 border {{ $errors->has('kelurahan') ? 'border-red-500' : 'border-slate-700' }} rounded-xl text-white text-sm focus:outline-none focus:border-pemda-500 focus:ring-2 focus:ring-pemda-500/20 transition">
                            <option value="" disabled {{ old('kelurahan') ? '' : 'selected' }}>-- Pilih Kelurahan --</option>
                            <option value="Alang-Alang Lebar" {{ old('kelurahan') == 'Alang-Alang Lebar' ? 'selected' : '' }}>Kelurahan Alang-Alang Lebar</option>
                            <option value="Karya Baru" {{ old('kelurahan') == 'Karya Baru' ? 'selected' : '' }}>Kelurahan Karya Baru</option>
                            <option value="Talang Kelapa" {{ old('kelurahan') == 'Talang Kelapa' ? 'selected' : '' }}>Kelurahan Talang Kelapa</option>
                            <option value="Srijaya" {{ old('kelurahan') == 'Srijaya' ? 'selected' : '' }}>Kelurahan Srijaya</option>
                        </select>
                    </div>
                </div>

                <!-- Alamat Lengkap -->
                <div>
                    <label for="alamat" class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">
                        Alamat Lengkap (RT/RW/Jalan) <span class="text-amber-400">*</span>
                    </label>
                    <div class="relative">
                        <textarea id="alamat" name="alamat" rows="2" required
                            placeholder="Jl. Kol. H. Burlian No. ..., RT ... / RW ..."
                            class="w-full p-3 bg-slate-900/80 border {{ $errors->has('alamat') ? 'border-red-500' : 'border-slate-700' }} rounded-xl text-white text-sm placeholder-slate-500 focus:outline-none focus:border-pemda-500 focus:ring-2 focus:ring-pemda-500/20 transition">{{ old('alamat') }}</textarea>
                    </div>
                </div>

                <!-- Password & Konfirmasi Password -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="password" class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">
                            Kata Sandi <span class="text-amber-400">*</span>
                        </label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400">
                                <i class="fa-solid fa-lock text-sm"></i>
                            </span>
                            <input type="password" id="password" name="password" required
                                placeholder="Minimal 6 karakter"
                                class="w-full pl-10 pr-4 py-3 bg-slate-900/80 border {{ $errors->has('password') ? 'border-red-500' : 'border-slate-700' }} rounded-xl text-white text-sm placeholder-slate-500 focus:outline-none focus:border-pemda-500 focus:ring-2 focus:ring-pemda-500/20 transition">
                        </div>
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">
                            Ulangi Kata Sandi <span class="text-amber-400">*</span>
                        </label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400">
                                <i class="fa-solid fa-shield-halved text-sm"></i>
                            </span>
                            <input type="password" id="password_confirmation" name="password_confirmation" required
                                placeholder="Ulangi kata sandi"
                                class="w-full pl-10 pr-4 py-3 bg-slate-900/80 border border-slate-700 rounded-xl text-white text-sm placeholder-slate-500 focus:outline-none focus:border-pemda-500 focus:ring-2 focus:ring-pemda-500/20 transition">
                        </div>
                    </div>
                </div>

                <!-- Persetujuan -->
                <div class="flex items-start space-x-3 pt-2">
                    <input type="checkbox" id="persetujuan" required
                        class="mt-1 w-4 h-4 rounded text-pemda-600 bg-slate-900 border-slate-700 focus:ring-pemda-500">
                    <label for="persetujuan" class="text-xs text-slate-400 leading-relaxed">
                        Saya menyatakan data yang saya masukkan adalah data asli/benar untuk keperluan layanan administrasi dan aduan di Kecamatan Alang-Alang Lebar.
                    </label>
                </div>

                <!-- Tombol Submit -->
                <div class="pt-2">
                    <button type="submit"
                        class="w-full py-3.5 px-4 bg-gradient-to-r from-pemda-600 to-pemda-700 hover:from-pemda-500 hover:to-pemda-600 text-white font-bold text-sm rounded-xl shadow-lg shadow-pemda-600/30 hover:shadow-pemda-600/50 transition-all duration-200 flex items-center justify-center space-x-2">
                        <i class="fa-solid fa-user-plus text-amber-300"></i>
                        <span>Daftar Sekarang</span>
                    </button>
                </div>
            </form>

            <!-- Footer Login Link -->
            <div class="mt-8 pt-6 border-t border-slate-700/60 text-center">
                <p class="text-xs text-slate-400">
                    Sudah punya akun warga?
                    <a href="{{ route('login') }}" class="font-bold text-amber-400 hover:text-amber-300 hover:underline ml-1">
                        Masuk ke Akun
                    </a>
                </p>
                <div class="mt-4">
                    <a href="{{ route('kecamatan.home') }}" class="text-xs text-slate-400 hover:text-white transition inline-flex items-center space-x-1.5">
                        <i class="fa-solid fa-arrow-left"></i>
                        <span>Kembali ke Beranda Utama</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
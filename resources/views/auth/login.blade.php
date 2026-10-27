<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk Warga | Kecamatan Alang-Alang Lebar Palembang</title>

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
<body class="bg-slate-900 min-h-screen flex items-center justify-center p-4 relative overflow-hidden">
    <!-- Background glow decoration -->
    <div class="absolute -top-32 -left-32 w-96 h-96 bg-pemda-600/20 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-amber-500/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="w-full max-w-md relative z-10">
        <!-- Logo Brand -->
        <div class="text-center mb-8">
            <a href="{{ route('kecamatan.home') }}" class="inline-flex items-center space-x-3 group">
                <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-pemda-600 to-amber-500 flex items-center justify-center text-white text-2xl shadow-xl shadow-pemda-600/30 group-hover:scale-105 transition-transform">
                    <i class="fa-solid fa-users"></i>
                </div>
            </a>
            <h1 class="text-2xl font-extrabold text-white tracking-tight mt-3">Portal Warga / Masyarakat</h1>
            <p class="text-xs text-slate-400 mt-1">Kecamatan Alang-Alang Lebar • Kota Palembang</p>
        </div>

        <!-- Card Login -->
        <div class="bg-slate-800/90 backdrop-blur-xl border border-slate-700/80 rounded-3xl p-8 shadow-2xl">
            <!-- Session Status & Flash Notifications -->
            @if(session('status'))
                <div class="mb-6 p-4 rounded-xl bg-amber-500/10 border border-amber-500/20 text-amber-300 text-xs flex items-center space-x-2">
                    <i class="fa-solid fa-circle-info text-amber-400 text-sm"></i>
                    <span>{{ session('status') }}</span>
                </div>
            @endif

            @if(session('info_auth'))
                <div class="mb-6 p-4 rounded-xl bg-blue-500/10 border border-blue-500/20 text-blue-300 text-xs flex items-center space-x-2">
                    <i class="fa-solid fa-circle-info text-blue-400 text-sm"></i>
                    <span>{{ session('info_auth') }}</span>
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-6 p-4 rounded-xl bg-red-500/10 border border-red-500/20 text-red-300 text-xs flex items-center space-x-2">
                    <i class="fa-solid fa-circle-exclamation text-red-400 text-sm"></i>
                    <span>{{ $errors->first() }}</span>
                </div>
            @endif

            <form action="{{ route('login.submit') }}" method="POST" class="space-y-5">
                @csrf

                <!-- Login Input (NIK / Email) -->
                <div>
                    <label for="login" class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">
                        NIK (16 Digit) atau Email
                    </label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400">
                            <i class="fa-solid fa-id-card text-sm"></i>
                        </span>
                        <input type="text" id="login" name="login" value="{{ old('login') }}" required autofocus
                            placeholder="Masukkan NIK KTP atau Email Anda"
                            class="w-full pl-10 pr-4 py-3 bg-slate-900/80 border {{ $errors->has('login') ? 'border-red-500' : 'border-slate-700' }} rounded-xl text-white text-sm placeholder-slate-500 focus:outline-none focus:border-pemda-500 focus:ring-2 focus:ring-pemda-500/20 transition">
                    </div>
                </div>

                <!-- Password Input -->
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <label for="password" class="block text-xs font-semibold text-slate-300 uppercase tracking-wider">
                            Kata Sandi
                        </label>
                    </div>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400">
                            <i class="fa-solid fa-lock text-sm"></i>
                        </span>
                        <input type="password" id="password" name="password" required
                            placeholder="••••••••"
                            class="w-full pl-10 pr-4 py-3 bg-slate-900/80 border {{ $errors->has('password') ? 'border-red-500' : 'border-slate-700' }} rounded-xl text-white text-sm placeholder-slate-500 focus:outline-none focus:border-pemda-500 focus:ring-2 focus:ring-pemda-500/20 transition">
                    </div>
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between text-xs">
                    <label class="flex items-center space-x-2 text-slate-400 cursor-pointer">
                        <input type="checkbox" name="remember" class="w-4 h-4 rounded text-pemda-600 bg-slate-900 border-slate-700 focus:ring-pemda-500">
                        <span>Ingat Saya</span>
                    </label>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full py-3.5 px-4 bg-gradient-to-r from-pemda-600 to-pemda-700 hover:from-pemda-500 hover:to-pemda-600 text-white font-bold text-sm rounded-xl shadow-lg shadow-pemda-600/30 hover:shadow-pemda-600/50 transition-all duration-200 flex items-center justify-center space-x-2">
                    <i class="fa-solid fa-right-to-bracket text-amber-300"></i>
                    <span>Masuk ke Akun</span>
                </button>
            </form>

            <!-- Registrasi Link -->
            <div class="mt-8 pt-6 border-t border-slate-700/60 text-center">
                <p class="text-xs text-slate-400">
                    Belum memiliki akun warga?
                    <a href="{{ route('register') }}" class="font-bold text-amber-400 hover:text-amber-300 hover:underline ml-1">
                        Daftar Registrasi
                    </a>
                </p>
                <div class="mt-4 flex items-center justify-center space-x-4">
                    <a href="{{ route('kecamatan.home') }}" class="text-xs text-slate-400 hover:text-white transition inline-flex items-center space-x-1.5">
                        <i class="fa-solid fa-arrow-left"></i>
                        <span>Beranda</span>
                    </a>
                    <span class="text-slate-600">|</span>
                    <a href="{{ route('admin.login') }}" class="text-xs text-slate-400 hover:text-amber-400 transition inline-flex items-center space-x-1.5">
                        <i class="fa-solid fa-shield-halved text-xs text-amber-400"></i>
                        <span>Login Administrator</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

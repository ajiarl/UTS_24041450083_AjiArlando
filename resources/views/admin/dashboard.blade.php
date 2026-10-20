<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin | Kecamatan Alang-Alang Lebar Palembang</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        pemda: {
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
<body class="bg-slate-100 text-slate-800 antialiased min-h-screen flex flex-col">

    <!-- Top Admin Navbar -->
    <header class="bg-white border-b border-slate-200 sticky top-0 z-40 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Brand -->
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 rounded-xl bg-pemda-600 flex items-center justify-center text-white shadow-md">
                        <i class="fa-solid fa-shield-halved text-xl"></i>
                    </div>
                    <div>
                        <span class="block text-sm font-extrabold text-slate-900 leading-none">PANEL ADMINISTRATOR</span>
                        <span class="block text-[11px] font-semibold text-amber-600 mt-0.5">Kecamatan Alang-Alang Lebar</span>
                    </div>
                </div>

                <!-- Right profile & logout -->
                <div class="flex items-center space-x-4">
                    <div class="hidden sm:flex items-center space-x-2 text-xs text-slate-600">
                        <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
                        <span class="font-medium">{{ Auth::user()->name ?? 'Administrator' }}</span>
                        <span class="text-slate-400">({{ Auth::user()->email ?? 'admin@palembang.go.id' }})</span>
                    </div>

                    <a href="{{ route('kecamatan.home') }}" target="_blank" class="px-3 py-1.5 rounded-lg border border-slate-300 text-slate-600 hover:bg-slate-50 text-xs font-semibold flex items-center space-x-1.5 transition">
                        <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                        <span>Lihat Web Publik</span>
                    </a>

                    <form action="{{ route('admin.logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="px-3.5 py-1.5 rounded-lg bg-rose-600 hover:bg-rose-700 text-white text-xs font-bold transition shadow-sm flex items-center space-x-1.5">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <span>Keluar</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-1 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8">
        
        <!-- Flash Alert -->
        @if(session('success'))
        <div id="alert-box" class="mb-6 p-4 rounded-2xl bg-emerald-700 text-white shadow-md flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <i class="fa-solid fa-circle-check text-xl text-emerald-300"></i>
                <span class="text-xs sm:text-sm font-medium">{{ session('success') }}</span>
            </div>
            <button onclick="document.getElementById('alert-box').remove()" class="text-emerald-200 hover:text-white"><i class="fa-solid fa-xmark"></i></button>
        </div>
        @endif

        @if(session('status'))
        <div class="mb-6 p-4 rounded-2xl bg-blue-700 text-white shadow-md flex items-center space-x-3">
            <i class="fa-solid fa-info-circle text-xl text-blue-300"></i>
            <span class="text-xs sm:text-sm font-medium">{{ session('status') }}</span>
        </div>
        @endif

        <!-- Stat Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-8">
            <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm flex items-center justify-between">
                <div>
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block">Total Pengaduan</span>
                    <span class="text-2xl font-extrabold text-slate-900 mt-1 block">{{ $totalAspirasi }}</span>
                </div>
                <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center text-xl">
                    <i class="fa-solid fa-inbox"></i>
                </div>
            </div>

            <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm flex items-center justify-between">
                <div>
                    <span class="text-xs font-bold text-amber-500 uppercase tracking-wider block">Status: Menunggu</span>
                    <span class="text-2xl font-extrabold text-amber-600 mt-1 block">{{ $menunggu }}</span>
                </div>
                <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center text-xl">
                    <i class="fa-solid fa-clock"></i>
                </div>
            </div>

            <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm flex items-center justify-between">
                <div>
                    <span class="text-xs font-bold text-indigo-500 uppercase tracking-wider block">Status: Diproses</span>
                    <span class="text-2xl font-extrabold text-indigo-600 mt-1 block">{{ $diproses }}</span>
                </div>
                <div class="w-12 h-12 rounded-xl bg-indigo-50 text-indigo-600 flex items-center justify-center text-xl">
                    <i class="fa-solid fa-spinner"></i>
                </div>
            </div>

            <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm flex items-center justify-between">
                <div>
                    <span class="text-xs font-bold text-emerald-500 uppercase tracking-wider block">Status: Selesai</span>
                    <span class="text-2xl font-extrabold text-emerald-600 mt-1 block">{{ $selesai }}</span>
                </div>
                <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-xl">
                    <i class="fa-solid fa-circle-check"></i>
                </div>
            </div>
        </div>

        <!-- Table Management Aspirasi Warga -->
        <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden">
            <div class="p-6 border-b border-slate-200 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div>
                    <h2 class="text-lg font-extrabold text-slate-900">Daftar Pengaduan & Aspirasi Warga</h2>
                    <p class="text-xs text-slate-500 mt-0.5">Kelola dan ubah status laporan yang dikirimkan warga secara real-time</p>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs">
                    <thead class="bg-slate-50 text-slate-500 font-bold uppercase tracking-wider border-b border-slate-200">
                        <tr>
                            <th class="py-3.5 px-4">Waktu</th>
                            <th class="py-3.5 px-4">Pelapor</th>
                            <th class="py-3.5 px-4">Kelurahan</th>
                            <th class="py-3.5 px-4">Kategori & Pesan</th>
                            <th class="py-3.5 px-4">Status Laporan</th>
                            <th class="py-3.5 px-4 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200 text-slate-700">
                        @forelse($aspirasis as $item)
                        <tr class="hover:bg-slate-50 transition">
                            <td class="py-4 px-4 text-slate-500 whitespace-nowrap">
                                {{ $item->created_at->format('d M Y, H:i') }}
                            </td>
                            <td class="py-4 px-4 whitespace-nowrap">
                                <span class="font-bold text-slate-900 block">{{ $item->nama }}</span>
                                <span class="text-[11px] text-slate-500 flex items-center mt-0.5">
                                    <i class="fa-brands fa-whatsapp text-emerald-500 mr-1"></i> {{ $item->telepon }}
                                </span>
                            </td>
                            <td class="py-4 px-4 whitespace-nowrap">
                                <span class="px-2.5 py-1 rounded-md text-[10px] font-bold bg-slate-100 text-slate-800 border border-slate-200">
                                    {{ $item->kelurahan }}
                                </span>
                            </td>
                            <td class="py-4 px-4 max-w-xs">
                                <span class="font-semibold text-amber-700 block mb-1 text-[11px]">
                                    <i class="fa-solid fa-tag text-[9px] mr-1"></i>{{ $item->kategori }}
                                </span>
                                <p class="text-slate-600 leading-relaxed">{{ $item->pesan }}</p>
                            </td>
                            <td class="py-4 px-4 whitespace-nowrap">
                                <form action="{{ route('admin.aspirasi.status', $item->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('PATCH')
                                    <select name="status" onchange="this.form.submit()" class="px-2.5 py-1.5 rounded-lg text-xs font-bold border focus:outline-none cursor-pointer 
                                        @if($item->status == 'Menunggu') bg-amber-50 text-amber-700 border-amber-300
                                        @elseif($item->status == 'Diproses') bg-indigo-50 text-indigo-700 border-indigo-300
                                        @else bg-emerald-50 text-emerald-700 border-emerald-300 @endif">
                                        <option value="Menunggu" {{ $item->status == 'Menunggu' ? 'selected' : '' }}>⏳ Menunggu</option>
                                        <option value="Diproses" {{ $item->status == 'Diproses' ? 'selected' : '' }}>⚙️ Diproses</option>
                                        <option value="Selesai" {{ $item->status == 'Selesai' ? 'selected' : '' }}>✅ Selesai</option>
                                    </select>
                                </form>
                            </td>
                            <td class="py-4 px-4 text-center whitespace-nowrap">
                                <form action="{{ route('admin.aspirasi.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data pengaduan ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 rounded-lg text-rose-500 hover:bg-rose-50 transition" title="Hapus Pengaduan">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="py-12 text-center text-slate-400">
                                <i class="fa-solid fa-folder-open text-3xl mb-2 block"></i>
                                Belum ada laporan aspirasi dari warga yang masuk.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            @if($aspirasis->hasPages())
            <div class="p-4 border-t border-slate-200">
                {{ $aspirasis->links() }}
            </div>
            @endif
        </div>
    </main>

    <!-- Footer Admin -->
    <footer class="bg-white border-t border-slate-200 py-4 text-center text-xs text-slate-500">
        &copy; {{ date('Y') }} Kantor Camat Alang-Alang Lebar Palembang • Administrator Dashboard
    </footer>

</body>
</html>


<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    public function index()
    {
        $statistik = [
            'penduduk' => '108.450+',
            'kelurahan' => '4 Kelurahan',
            'rt_rw' => '240+ RT/RW',
            'luas_wilayah' => '34,58 km²',
        ];

        $kelurahan = [
            [
                'nama' => 'Alang-Alang Lebar',
                'deskripsi' => 'Pusat pemerintahan kecamatan dan sentra transportasi antar-kota terminal tipe A.',
                'luas' => '9,20 km²',
                'penduduk' => '28.120 Jiwa',
                'icon' => 'fa-landmark-flag',
            ],
            [
                'nama' => 'Karya Baru',
                'deskripsi' => 'Kawasan pemukiman padat dan terpadu dengan pusat kegiatan ekonomi masyarakat.',
                'luas' => '8,45 km²',
                'penduduk' => '29.840 Jiwa',
                'icon' => 'fa-city',
            ],
            [
                'nama' => 'Talang Kelapa',
                'deskripsi' => 'Kawasan perumahan berkembang pesat yang berbatasan langsung dengan Banyuasin.',
                'luas' => '10,12 km²',
                'penduduk' => '31.450 Jiwa',
                'icon' => 'fa-tree-city',
            ],
            [
                'nama' => 'Srijaya',
                'deskripsi' => 'Pusat perkantoran, pergudangan modern, sarana olahraga, dan fasilitas publik.',
                'luas' => '6,81 km²',
                'penduduk' => '19.040 Jiwa',
                'icon' => 'fa-building-shield',
            ],
        ];

        $layanan = [
            [
                'kode' => 'LAY-01',
                'judul' => 'Pengantar KTP & Kartu Identitas Anak (KIA)',
                'deskripsi' => 'Penerbitan surat rekomendasi / pengantar perekaman e-KTP baru, penggantian rusak, dan pembuatan KIA.',
                'waktu' => '15 Menit',
                'syarat' => [
                    'Fotokopi Kartu Keluarga (KK) terbaru',
                    'Akta Kelahiran untuk pemohon KIA',
                    'KTP lama (jika rusak / perpanjangan)',
                ],
            ],
            [
                'kode' => 'LAY-02',
                'judul' => 'Pengantar Perubahan / Pembuatan Kartu Keluarga (KK)',
                'deskripsi' => 'Layanan verifikasi berkas pengantar penambahan anggota keluarga, pemecahan KK, atau mutasi datang.',
                'waktu' => '20 Menit',
                'syarat' => [
                    'Surat Pengantar RT / RW setempat',
                    'Kartu Keluarga asli sebelumnya',
                    'Surat Nikah / Akta Cerai (jika ada perubahan)',
                ],
            ],
            [
                'kode' => 'LAY-03',
                'judul' => 'Surat Keterangan Pindah Domisili (SKPWNI)',
                'deskripsi' => 'Verifikasi dan penerbitan rekomendasi surat keterangan pindah datang maupun pindah keluar kecamatan.',
                'waktu' => '30 Menit',
                'syarat' => [
                    'KK dan KTP asli pemohon',
                    'Formulir permohonan pindah dari Kelurahan',
                    'Alamat tujuan pindah yang jelas',
                ],
            ],
            [
                'kode' => 'LAY-04',
                'judul' => 'Surat Keterangan Tidak Mampu (SKTM)',
                'deskripsi' => 'Layanan legalisasi SKTM untuk keperluan beasiswa pendidikan, keringanan biaya kesehatan / BPJS PBI.',
                'waktu' => '15 Menit',
                'syarat' => [
                    'Surat pengantar SKTM dari Kelurahan asal',
                    'Fotokopi KTP dan KK pemohon',
                    'Surat pernyataan tidak mampu bermaterai',
                ],
            ],
        ];

        $berita = [
            [
                'judul' => 'Camat Alang-Alang Lebar Pimpin Gotong Royong Kebersihan Saluran Air Lingkungan',
                'kategori' => 'Kegiatan Wilayah',
                'tanggal' => '18 Okt 2026',
                'ringkasan' => 'Guna mengantisipasi genangan air di musim penghujan, jajaran kecamatan bersama warga membersihkan sedimentasi drainase utama.',
                'gambar' => 'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?w=600&auto=format&fit=crop&q=80',
            ],
            [
                'judul' => 'Pelayanan Perekaman e-KTP Keliling Hadir Langsung di Kelurahan Talang Kelapa',
                'kategori' => 'Layanan Publik',
                'tanggal' => '15 Okt 2026',
                'ringkasan' => 'Masyarakat antusias memanfaatkan layanan jemput bola dokumen kependudukan yang diadakan serentak tanpa pungutan biaya.',
                'gambar' => 'https://images.unsplash.com/photo-1450133064473-71024230f91b?w=600&auto=format&fit=crop&q=80',
            ],
            [
                'judul' => 'Sosialisasi Tertib Administrasi Kependudukan dan Pembinaan RT/RW Se-Kecamatan',
                'kategori' => 'Pemerintahan',
                'tanggal' => '10 Okt 2026',
                'ringkasan' => 'Penguatan sinergi antara aparat kecamatan, lurah, dan ketua RT/RW guna meningkatkan kualitas pelayanan berbasis digital kepada warga.',
                'gambar' => 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?w=600&auto=format&fit=crop&q=80',
            ],
        ];

        return view('kecamatan.landing', compact('statistik', 'kelurahan', 'layanan', 'berita'));
    }

    public function aspirasi(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'telepon' => 'required|string|max:50',
            'kelurahan' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'pesan' => 'required|string',
        ]);

        $validated['status'] = 'Menunggu';

        Aspirasi::create($validated);

        return redirect()->back()->with('success_aspirasi', 'Terima kasih! Aspirasi dan laporan Anda telah berhasil dikirimkan ke pihak Kecamatan Alang-Alang Lebar.');
    }
}

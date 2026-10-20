<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $totalAspirasi = Aspirasi::count();
        $menunggu = Aspirasi::where('status', 'Menunggu')->count();
        $diproses = Aspirasi::where('status', 'Diproses')->count();
        $selesai = Aspirasi::where('status', 'Selesai')->count();

        $aspirasis = Aspirasi::latest()->paginate(10);

        return view('admin.dashboard', compact('totalAspirasi', 'menunggu', 'diproses', 'selesai', 'aspirasis'));
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:Menunggu,Diproses,Selesai',
        ]);

        $aspirasi = Aspirasi::findOrFail($id);
        $aspirasi->update([
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Status pengaduan warga berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $aspirasi = Aspirasi::findOrFail($id);
        $aspirasi->delete();

        return redirect()->back()->with('success', 'Data pengaduan berhasil dihapus.');
    }
}

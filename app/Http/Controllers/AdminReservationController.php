<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class AdminReservationController extends Controller
{
    // 🗂️ Tampilkan semua data reservasi
    public function index()
    {
        $reservations = Reservation::latest()->get();
        return view('admin.reservasi.index', compact('reservations'));
    }

    // 🗑️ Hapus reservasi
    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return redirect()
            ->route('admin.reservasi.index')
            ->with('success', '✅ Data reservasi berhasil dihapus!');
    }

    // 🔄 Update status reservasi
    public function updateStatus(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->status = $request->status;
        $reservation->save();

        return redirect()
            ->route('admin.reservasi.index')
            ->with('success', 'Status reservasi diperbarui!');
    }

    
}

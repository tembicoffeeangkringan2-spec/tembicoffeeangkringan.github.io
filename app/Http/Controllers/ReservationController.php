<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::latest()->get();
        return view('reservasi.index', compact('reservations'));
    }

    public function create()
    {
        return view('reservasi.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'telepon' => 'required|string|max:20',
            'tanggal' => 'required|date',
            'jumlah' => 'required|integer|min:1',
            'catatan' => 'nullable|string',
        ]);

        // Simpan ke database
        $reservation = Reservation::create($validated);

        // Format pesan WhatsApp
        $message = "📅 *Reservasi Baru Masuk!*\n\n"
            . "👤 Nama: {$validated['nama']}\n"
            . "📞 Telepon: {$validated['telepon']}\n"
            . "📆 Tanggal: {$validated['tanggal']}\n"
            . "👥 Jumlah Orang: {$validated['jumlah']}\n"
            . "📝 Catatan: " . ($validated['catatan'] ?? '-') . "\n\n"
            . "Mohon segera dikonfirmasi ya ☕";

        // Nomor admin WhatsApp (ganti sesuai nomor kamu)
        $adminNumber = '6289528226627'; // tanpa tanda +, pakai kode negara 62 untuk Indonesia

        // Buat link WhatsApp
        $waLink = "https://wa.me/{$adminNumber}?text=" . urlencode($message);

        // Redirect balik dengan notifikasi dan auto-buka WA
        return redirect()->back()
            ->with('success', 'Reservasi berhasil dikirim! Akan diarahkan ke WhatsApp untuk konfirmasi.')
            ->with('wa_link', $waLink);


        $message = "Halo {$r->nama},%0ASaya admin dari *Tembi Coffee & Angkringan*. "
               . "Reservasi Anda pada tanggal {$r->tanggal} untuk {$r->jumlah} orang telah kami terima. "
               . "Mohon konfirmasi ya ☕";
        $waLink = "https://wa.me/" . preg_replace('/[^0-9]/', '', $r->telepon) . "?text=" . $message;

    }
}

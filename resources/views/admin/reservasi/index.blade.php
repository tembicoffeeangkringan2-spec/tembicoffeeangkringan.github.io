@extends('layout')

@section('content')
<div class="max-w-6xl mx-auto py-16 px-6">
  <h1 class="text-3xl font-bold text-amber-700 mb-8 text-center">
    📋 Daftar Reservasi Pendopo
  </h1>

  {{-- Notifikasi sukses --}}
  @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6 text-center">
      {{ session('success') }}
    </div>
  @endif

  @if($reservations->isEmpty())
    <div class="text-center text-gray-600">
      <p>Belum ada data reservasi.</p>
    </div>
  @else
    <div class="overflow-x-auto">
      <table class="w-full border-collapse bg-white shadow-lg rounded-lg overflow-hidden">
        <thead class="bg-amber-600 text-white">
          <tr>
            <th class="p-3 text-left">#</th>
            <th class="p-3 text-left">Nama</th>
            <th class="p-3 text-left">Telepon</th>
            <th class="p-3 text-left">Tanggal</th>
            <th class="p-3 text-left">Jumlah</th>
            <th class="p-3 text-left">Catatan</th>
            <th class="p-3 text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($reservations as $r)
            <tr class="border-b hover:bg-amber-50 transition">
              <td class="p-3">{{ $loop->iteration }}</td>
              <td class="p-3 font-semibold">{{ $r->nama }}</td>
              <td class="p-3">{{ $r->telepon }}</td>
              <td class="p-3">{{ \Carbon\Carbon::parse($r->tanggal)->format('d M Y') }}</td>
              <td class="p-3">{{ $r->jumlah }}</td>
              <td class="p-3">{{ $r->catatan ?? '-' }}</td>
              <td class="p-3 flex justify-center gap-2">

                {{-- Tombol WhatsApp --}}
                @php
                  $message = "Halo {$r->nama},%0ASaya admin dari *Tembi Coffee & Angkringan*. "
                           . "Reservasi Anda pada tanggal {$r->tanggal} untuk {$r->jumlah} orang telah kami terima. "
                           . "Mohon konfirmasi ya ☕";
                  $waLink = "https://wa.me/" . preg_replace('/[^0-9]/', '', $r->telepon) . "?text=" . $message;
                @endphp

                <a href="{{ $waLink }}" target="_blank"
                   class="bg-green-500 hover:bg-green-600 text-white px-3 py-1.5 rounded-lg text-sm flex items-center gap-1 transition">
                   💬 WhatsApp
                </a>

               <form action="{{ route('admin.reservasi.destroy', $r->id) }}" method="POST" onsubmit="return confirmDelete(event)">
  @csrf
  @method('DELETE')
  <button type="submit"
    class="bg-red-500 hover:bg-red-600 text-white px-3 py-1.5 rounded-lg text-sm flex items-center gap-1 transition">
    🗑️ Hapus
  </button>
</form>


              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  @endif
</div>

{{-- Script konfirmasi hapus --}}
<script>
  function confirmDelete(event) {
    event.preventDefault();
    if (confirm('Yakin ingin menghapus reservasi ini?')) {
      event.target.submit();
    }
  }
</script>
@endsection

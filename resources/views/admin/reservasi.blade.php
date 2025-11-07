@extends('layout')

@section('content')
<div class="max-w-6xl mx-auto py-16 px-6">
  <h1 class="text-3xl font-bold text-amber-700 mb-8 text-center">📋 Daftar Reservasi</h1>

  {{-- Pesan sukses (untuk fallback non-JS) --}}
  @if(session('success'))
    <div class="hidden bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
      {{ session('success') }}
    </div>
  @endif
  

  @if($reservations->isEmpty())
    <div class="text-center text-gray-600">
      <p>Belum ada data reservasi.</p>
    </div>
  @else
    <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
      <table class="min-w-full border border-gray-200">
        <thead class="bg-amber-600 text-white">
          <tr>
            <th class="py-3 px-4">#</th>
            <th class="py-3 px-4 text-left">Nama</th>
            <th class="py-3 px-4 text-left">Telepon</th>
            <th class="py-3 px-4 text-left">Tanggal</th>
            <th class="py-3 px-4 text-left">Jumlah</th>
            <th class="py-3 px-4 text-left">Catatan</th>
            <th class="py-3 px-4 text-left">Status</th>
            <th class="py-3 px-4 text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($reservations as $index => $r)
            <tr class="border-t hover:bg-amber-50">
              <td class="py-2 px-4">{{ $index + 1 }}</td>
              <td class="py-2 px-4 font-semibold">{{ $r->nama }}</td>
              <td class="py-2 px-4">{{ $r->telepon }}</td>
              <td class="py-2 px-4">{{ \Carbon\Carbon::parse($r->tanggal)->format('d M Y') }}</td>
              <td class="py-2 px-4">{{ $r->jumlah }}</td>
              <td class="py-2 px-4">{{ $r->catatan ?? '-' }}</td>

              {{-- Status dropdown --}}
              <td class="py-2 px-4">
                <form action="{{ route('admin.reservasi.status', $r->id) }}" method="POST" class="inline">
                  @csrf
                  <select name="status" onchange="this.form.submit()" class="border rounded-lg p-1 text-sm">
                    <option value="Menunggu" {{ $r->status == 'Menunggu' ? 'selected' : '' }}>Menunggu</option>
                    <option value="Diterima" {{ $r->status == 'Diterima' ? 'selected' : '' }}>Diterima</option>
                    <option value="Selesai" {{ $r->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                  </select>
                </form>
              </td>

              {{-- Tombol hapus --}}
              <td class="py-2 px-4 text-center">
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
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  // 🔥 Konfirmasi hapus
  function confirmDelete(e) {
    e.preventDefault();
    const form = e.target;

    Swal.fire({
      title: 'Yakin ingin menghapus?',
      text: "Data reservasi akan dihapus permanen!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Ya, hapus',
      cancelButtonText: 'Batal'
    }).then((result) => {
      if (result.isConfirmed) {
        form.submit();
      }
    });
  }

  // ✅ Tampilkan popup sukses setelah aksi (hapus / update)
  @if(session('success'))
  Swal.fire({
    icon: 'success',
    title: 'Berhasil!',
    text: '{{ session('success') }}',
    showConfirmButton: false,
    timer: 2000,
    toast: true,
    position: 'top-end',
  });
  @endif
</script>
@endsection

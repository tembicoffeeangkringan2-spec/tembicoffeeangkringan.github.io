@extends('layout')

@section('title', 'Daftar Produk')

@section('content')

<!-- 🌟 Daftar Menu Coffee -->
<div class="bg-gradient-to-b from-amber-900 via-amber-800 to-amber-700 py-20 px-6 text-white">
  <div class="max-w-6xl mx-auto text-center mb-12">
    <h1 class="text-4xl font-extrabold text-amber-300 mb-4">☕ Menu Coffee Tembi</h1>
    <p class="text-amber-100 max-w-2xl mx-auto">
      Nikmati berbagai varian kopi pilihan, diracik dengan penuh cinta dan cita rasa khas angkringan Tembi.
    </p>
  </div>

  <!-- Grid Produk -->
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
    @foreach ($products as $product)
      <div class="bg-white/10 backdrop-blur-md border border-amber-400/30 rounded-2xl shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2 overflow-hidden">
        <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-56 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-amber-300 mb-2">{{ $product->name }}</h3>
          <p class="text-amber-100 mb-3">
            Harga:
            <span class="font-bold text-amber-400">
              Rp {{ number_format($product->price, 0, ',', '.') }}
            </span>
          </p>
          <p class="text-amber-100 text-sm leading-relaxed">{{ $product->description }}</p>
        </div>
      </div>
    @endforeach
  </div>

  <!-- Tombol Navigasi -->
  <div class="mt-14 text-center">
    <a href="/about" class="bg-amber-500 text-white px-6 py-3 rounded-lg text-lg font-semibold hover:bg-amber-600 transition shadow-lg">
      🍢 Lihat Semua Menu Angkringan
    </a>
  </div>
</div>

@endsection

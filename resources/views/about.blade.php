@extends('layout')

@section('title', 'Tentang Kami - Tembi Coffee & Angkringan')

@section('content')

<!-- 🌟 Menu Angkringan -->
<div class="bg-gradient-to-b from-amber-900 via-amber-800 to-amber-700 py-20 px-6 text-white">
  <div class="max-w-6xl mx-auto text-center mb-12">
    <h2 class="text-4xl font-bold text-amber-300 mb-4">Menu Angkringan Favorit</h2>
    <p class="text-amber-100 max-w-3xl mx-auto">
      Nikmati suasana hangat dan keramahan khas angkringan dengan berbagai menu lezat pilihan kami.
    </p>
  </div>

  <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8 max-w-6xl mx-auto">

    <!-- 🍢 Menu 1 -->
    <div class="bg-white/10 backdrop-blur-md rounded-2xl shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2 border border-amber-400/30 overflow-hidden">
      <img src="/images/as.jpg" alt="Sate Usus" class="w-full h-48 object-cover">
      <div class="p-6">
        <h3 class="font-semibold text-lg text-amber-300 mb-2">Sate Usus & Ati</h3>
        <p class="text-amber-100 mb-2">Lezat, gurih, dan cocok untuk cemilan malam hari.</p>
        <span class="text-amber-400 font-bold">Rp3.000 / tusuk</span>
      </div>
    </div>

    <!-- 🍚 Menu 2 -->
    <div class="bg-white/10 backdrop-blur-md rounded-2xl shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2 border border-amber-400/30 overflow-hidden">
      <img src="/images/nasi.jpg" alt="Nasi Kucing" class="w-full h-48 object-cover">
      <div class="p-6">
        <h3 class="font-semibold text-lg text-amber-300 mb-2">Nasi Kucing</h3>
        <p class="text-amber-100 mb-2">Porsi kecil dengan sambal khas dan lauk pilihan.</p>
        <span class="text-amber-400 font-bold">Rp3.000 / porsi</span>
      </div>
    </div>

    <!-- 🍜 Menu 3 -->
    <div class="bg-white/10 backdrop-blur-md rounded-2xl shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2 border border-amber-400/30 overflow-hidden">
      <img src="/images/indo.jpg" alt="Indomie" class="w-full h-48 object-cover">
      <div class="p-6">
        <h3 class="font-semibold text-lg text-amber-300 mb-2">Indomie Rebus & Goreng</h3>
        <p class="text-amber-100 mb-2">Favorit semua kalangan, cocok untuk mengganjal perut.</p>
        <span class="text-amber-400 font-bold">Rp10.000 / piring</span>
      </div>
    </div>

    <!-- 🍢 Menu 4 -->
    <div class="bg-white/10 backdrop-blur-md rounded-2xl shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2 border border-amber-400/30 overflow-hidden">
      <img src="/images/goreng.jpg" alt="Gorengan" class="w-full h-48 object-cover">
      <div class="p-6">
        <h3 class="font-semibold text-lg text-amber-300 mb-2">Aneka Gorengan</h3>
        <p class="text-amber-100 mb-2">Tempe, tahu, bakwan — renyah tiap gigitan.</p>
        <span class="text-amber-400 font-bold">Rp1.000 / pcs</span>
      </div>
    </div>

    <!-- ☕ Menu 5 -->
    <div class="bg-white/10 backdrop-blur-md rounded-2xl shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2 border border-amber-400/30 overflow-hidden">
      <img src="/images/sjh.jpg" alt="Susu Jahe" class="w-full h-48 object-cover">
      <div class="p-6">
        <h3 class="font-semibold text-lg text-amber-300 mb-2">Susu Jahe</h3>
        <p class="text-amber-100 mb-2">Hangat, nikmat, dan menyehatkan tubuh.</p>
        <span class="text-amber-400 font-bold">Rp6.000 / gelas</span>
      </div>
    </div>

    <!-- 🌿 Menu 6 -->
    <div class="bg-white/10 backdrop-blur-md rounded-2xl shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2 border border-amber-400/30 overflow-hidden">
      <img src="/images/uwuh.jpg" alt="Wedang Uwuh" class="w-full h-48 object-cover">
      <div class="p-6">
        <h3 class="font-semibold text-lg text-amber-300 mb-2">Wedang Uwuh</h3>
        <p class="text-amber-100 mb-2">Minuman rempah hangat khas Jogja yang menenangkan.</p>
        <span class="text-amber-400 font-bold">Rp6.000 / gelas</span>
      </div>
    </div>

    <!-- ☕ Menu 7 -->
    <div class="bg-white/10 backdrop-blur-md rounded-2xl shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2 border border-amber-400/30 overflow-hidden">
      <img src="/images/saset.jpeg" alt="Minuman Saset" class="w-full h-48 object-cover">
      <div class="p-6">
        <h3 class="font-semibold text-lg text-amber-300 mb-2">Minuman Sachet</h3>
        <p class="text-amber-100 mb-2">Milo, Kopi Sachet, Good Day, Nutrisari, dan lainnya.</p>
        <span class="text-amber-400 font-bold">Mulai Rp4.000 / gelas</span>
      </div>
    </div>

    <!-- 🍟 Menu 8 -->
    <div class="bg-white/10 backdrop-blur-md rounded-2xl shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2 border border-amber-400/30 overflow-hidden">
      <img src="/images/kentang.jpeg" alt="Kentang Goreng" class="w-full h-48 object-cover">
      <div class="p-6">
        <h3 class="font-semibold text-lg text-amber-300 mb-2">Kentang Goreng</h3>
        <p class="text-amber-100 mb-2">Renyah dan gurih, cocok untuk teman ngopi malam.</p>
        <span class="text-amber-400 font-bold">Rp7.000 / porsi</span>
      </div>
    </div>

    <!-- 🌶️ Menu 9 -->
    <div class="bg-white/10 backdrop-blur-md rounded-2xl shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2 border border-amber-400/30 overflow-hidden">
      <img src="/images/jahe.jpg" alt="Wedang Jahe" class="w-full h-48 object-cover">
      <div class="p-6">
        <h3 class="font-semibold text-lg text-amber-300 mb-2">Wedang Jahe</h3>
        <p class="text-amber-100 mb-2">Wedang jahe hangat untuk menemani malam Anda.</p>
        <span class="text-amber-400 font-bold">Rp4.000 / gelas</span>
      </div>
    </div>

  </div>

  <div class="mt-12 text-center">
    <a href="/products" class="bg-amber-500 text-white px-6 py-3 rounded-lg text-lg font-semibold hover:bg-amber-600 transition shadow-lg">
      ☕ Lihat Semua Menu Coffee
    </a>
  </div>
</div>

<!-- CTA -->
<div class="bg-amber-950 text-white text-center py-16 px-4">
  <h2 class="text-3xl font-bold mb-4 text-amber-300">Kunjungi Kami di Tembi Sekarang!</h2>
  <p class="text-amber-100 mb-8 max-w-2xl mx-auto">
    Rasakan sensasi kopi terbaik dan suasana angkringan yang tidak terlupakan.  
    Kami buka setiap hari mulai pukul <strong>17.30 - 23.00 WIB</strong>.
  </p>
  <a href="/contact" class="bg-amber-500 text-white px-6 py-3 rounded-lg text-lg font-semibold hover:bg-amber-600 transition shadow-lg">Hubungi Kami</a>
</div>

@endsection

@extends('layout')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-amber-100 via-white to-amber-50">
  <div class="bg-white/90 backdrop-blur-sm shadow-2xl rounded-2xl p-8 w-full max-w-md border border-amber-100">
    <!-- Logo -->
    <div class="flex justify-center mb-6">
      <div class="bg-amber-600 text-white rounded-full p-3 shadow-md">
        ☕
      </div>
    </div>

    <h2 class="text-3xl font-bold text-center text-amber-700 mb-2">Login Admin</h2>
    <p class="text-center text-gray-500 text-sm mb-6">Masuk ke panel reservasi Tembi Coffee</p>

    {{-- Error Message --}}
    @if ($errors->any())
      <div class="bg-red-100 border border-red-300 text-red-700 px-4 py-3 rounded-lg mb-4 text-sm">
        {{ $errors->first() }}
      </div>
    @endif

    {{-- Success Message --}}
    @if (session('success'))
      <div class="bg-green-100 border border-green-300 text-green-700 px-4 py-3 rounded-lg mb-4 text-sm">
        {{ session('success') }}
      </div>
    @endif

    <form method="POST" action="{{ route('admin.login') }}" class="space-y-5">
      @csrf

      <div>
        <label class="block text-sm font-semibold text-gray-700 mb-1">Email</label>
        <input 
          type="email" 
          name="email" 
          placeholder="admin@tembi.com"
          required 
          class="w-full border border-gray-300 rounded-lg px-3 py-2.5 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-150"
        >
      </div>

      <div>
        <label class="block text-sm font-semibold text-gray-700 mb-1">Password</label>
        <input 
          type="password" 
          name="password" 
          placeholder="********"
          required 
          class="w-full border border-gray-300 rounded-lg px-3 py-2.5 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-150"
        >
      </div>

      <button 
        type="submit" 
        class="w-full bg-amber-600 hover:bg-amber-700 text-white font-semibold py-2.5 rounded-lg shadow-md transition transform hover:scale-[1.02] active:scale-[0.98]"
      >
        Masuk
      </button>
    </form>

    <p class="text-center text-gray-500 text-xs mt-6">
      © {{ date('Y') }} Tembi Coffee & Angkringan. Semua hak dilindungi.
    </p>
  </div>
</div>
@endsection

@extends('layouts.main')

@section('tittle', 'Welcome to baherindo')

@section('content')

<div class="bg-gray-50 flex-grow flex items-center justify-center mt-15">
  <form action="{{ route('motor.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-10 rounded-3xl shadow-md w-full max-w-md">
    @csrf
    <h2 class="text-3xl text-stone-800 font-bold mb-10 text-center">Kirim Pesan</h2>

      <div>
        <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
        <input type="text" class="mt-1 mb-4 block w-full p-2 border border-gray-300 rounded-3xl" required>
      </div>

      <div>
        <label for="harga" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="text" class="mt-1 mb-4 block w-full p-2 border border-gray-300 rounded-3xl" required>
      </div>

      <div>
        <label for="tahun" class="block text-sm font-medium text-gray-700">Pesan</label>
        <input type="text" class="mt-1 mb-4 block w-full p-2 border border-gray-300 rounded-3xl" required>
      </div>

    <button type="submit" class="w-full bg-lime-300 text-stone-800 font-bold py-2 rounded-3xl hover:bg-lime-200 transition mt-3">Submit</button>
  </form>
</div>

@endsection
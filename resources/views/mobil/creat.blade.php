@extends('layouts.main')

@section('tittle', 'Welcome to baherindo')

@section('content')

<div class="bg-gray-50 flex-grow flex items-center justify-center mt-15">
  <form action="{{ route('mobil.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-10 rounded-3xl shadow-md w-full max-w-md">
    @csrf
    <h2 class="text-3xl text-stone-800 font-bold mb-10 text-center">Tambah Data Mobil</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
      <div>
        <label for="nama" class="block text-sm font-medium text-gray-700">Nama Mobil</label>
        <input type="text" id="nama_mobil" name="nama_mobil" class="mt-1 block w-full p-2 border border-gray-300 rounded-3xl" required>
      </div>

      <div>
        <label for="harga" class="block text-sm font-medium text-gray-700">Harga Mobil</label>
        <input type="text" id="harga_mobil" name="harga_mobil" class="mt-1 block w-full p-2 border border-gray-300 rounded-3xl" required>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
      <div>
        <label for="tahun" class="block text-sm font-medium text-gray-700">Tahun Mobil</label>
        <input type="text" id="tahun_mobil" name="tahun_mobil" class="mt-1 block w-full p-2 border border-gray-300 rounded-3xl" required>
      </div>

      <div>
        <label for="km" class="block text-sm font-medium text-gray-700">Kilometer</label>
        <input type="text" id="km_mobil" name="km_mobil" class="mt-1 block w-full p-2 border border-gray-300 rounded-3xl" required>
      </div>
    </div>

    <div class="mb-4">
      <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
      <input type="file" id="gambar_mobil" name="gambar_mobil" accept=".jpg,.jpeg,.png" class="rounded-3xl mt-1 block w-full p-2 border border-gray-300" required>
    </div>

    <button type="submit" class="w-full bg-lime-300 text-stone-800 font-bold py-2 rounded-3xl hover:bg-lime-200 transition mt-3">Simpan</button>
  </form>
</div>


@endsection
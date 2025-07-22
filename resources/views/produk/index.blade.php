@extends('layouts.app')

@section('content')


<style>
  body {
    background-color: #e3f2fd; /* warna background halaman */
  }

  .sidebar {
    background-color: #0d6efd; /* sidebar biru Bootstrap */
    color: white;
    height: 100vh;
    padding: 30px 20px;
  }

  .sidebar a {
    color: white;
    text-decoration: none;
  }

  .sidebar a:hover {
    text-decoration: underline;
    color: #ffc107; /* warna saat hover */
  }

  .main-content {
    background-color: white; /* warna isi konten */
    padding: 40px;
  }
</style>



<div class="max-w-4xl mx-auto mt-10">
    {{-- Pesan sukses --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</div> 


    <div class="container my-5">
        <h2 class="text-center mb-4">🛍️ Daftar Produk UMKM Desa Pucangsari</h2>

        <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="{{ route('produk.create') }}" class="btn btn-success">➕ Tambah Produk</a>
            <form action="{{ route('produk.index') }}" method="GET" class="d-flex">
                <input type="text" name="search" class="form-control me-2" placeholder="Cari produk..." value="{{ request('search') }}">
                <button type="submit" class="btn btn-primary">🔍 Telusuri</button>
            </form>
        </div>

       <div class="grid-produk">
    @foreach ($produk as $item)
        <div class="card shadow-sm">
            <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top">
            <div class="card-body text-center">
                <h6 class="card-title">{{ $item->nama }}</h6>
                <p class="card-text text-muted" style="font-size: 14px;">
                    {{ Str::limit($item->keterangan, 50) }}
                </p>
                <p class="fw-bold text-primary">Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
            </div>
            <div class="card-footer text-center bg-white border-0">
                <a href="{{ route('produk.show', $item->id) }}" class="btn btn-outline-primary btn-sm">🔍 Detail</a>
                <a href="{{ route('produk.edit', $item->id) }}" class="btn btn-warning btn-sm">✏️ Edit</a>
                <form action="{{ route('produk.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">🗑 Hapus</button>
                </form>
            </div>
        </div>
    @endforeach
</div>

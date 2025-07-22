<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - UMKM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


     
    
    <style>
        body {
            background-color: #5EABD6
            
        }

        .sidebar {
            height: 100vh;
            background-color:  #f8f9fa;
            padding: 30px 20px;
        }

        .sidebar a {
            display: flex;
            align-items: center;
            margin: 20px 0;
            font-weight: bold;
            color: #000;
            text-decoration: none;
        }

        .sidebar a i {
            margin-right: 10px;
        }

        .sidebar a:hover {
            text-decoration: underline;
        }

        .content {
            padding: 60px;
        }

        .content h2 {
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 sidebar">
            <a href="{{ route('dashboard') }}" class="text-decoration-none d-flex align-items-center mb-4">
    <img src="{{ asset('storage/images/logo-umkm.png') }}" alt="logo umkm" style="height: 50px; margin-right: 20px;">

    <span class="fs-5 text-primary fw-bold">UMKM Pucangsari</span>
</a>


            {{-- ✅ Notifikasi sukses --}}
  @if (session('success'))
   <div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

  @endif

            <a href="{{ route('dashboard') }}"><i class="bi bi-house-door-fill"></i> Beranda</a>
            <a href="{{ route('produk') }}"><i class="bi bi-box-seam"></i> Produk</a>
            <a href="{{ route('kontak') }}"><i class="bi bi-telephone-fill"></i> Kontak Kami</a>
           <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="bi bi-box-arrow-right"></i> Keluar
                </a>


            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>

        <!-- Main Content -->
<div class="col-md-9 d-flex align-items-center justify-content-center" style="height: 100vh; background-color: #5dade2;">
  <div class="row w-100 d-flex align-items-center justify-content-center">

    <!-- Kiri: Animasi -->
    <div class="col-md-6 text-center">
      
      {{-- Atau Lottie Player --}}
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
      <lottie-player 
        src="https://assets6.lottiefiles.com/packages/lf20_qp1q7mct.json"
        background="transparent"
        speed="1"
        style="width: 500px; height: 500px;"
        loop
        autoplay>
      </lottie-player>
    </div>

    <!-- Kanan: Tulisan -->
    <div class="col-md-6 text-white">
      <h2 class="fw-bold">Bangun UMKM Desa Pucangsari Dengan Digitalisasi Pemasaran</h2>
      <p class="lead">
        Meningkatkan jangkauan pasar dan penjualan produk UMKM dengan aplikasi berbasis web yang mudah digunakan.
      </p>
    </div>

  </div>
</div>

    </div>
</div>

</body>
</html>

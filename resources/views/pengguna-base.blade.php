<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aplikasi Pembelajaran Sirkulasi Darah">
    <title>Online Learning</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('img/logo-32.png') }}" type="image/png">
    {{-- Css --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles-1.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Script --}}
    <script src="https://use.fontawesome.com/b070c8f1df.js"></script>
</head>
<body>
  <a href="#maincontent" class="skip-link">Skip To Content</a>
  <header class="app-bar">
    <div class="container">
      <div class="brand">
        <img src="{{ asset('img/logo-32.png') }}" alt="logo finding food" crossorigin="anonymous">
        <h1>LKPD <span>Sirkulasi Darah</span></h1>
      </div>
      <ul class="nav-list">
        <li class="nav-item"><a href="{{ url('admin') }}">Home</a></li>
        <li class="nav-item"><a href="{{ url('admin') }}">Sekolah</a></li>
        <li class="nav-item"><a href="{{ url('admin') }}">Kelas</a></li>
        <li class="nav-item"><a href="{{ url('admin') }}">Guru & Murid</a></li>
        <li class="nav-item"><a href="{{ url('admin') }}">Bahan Ajar</a></li>
        <li class="nav-item"><a href="{{ url('logout') }}"><i class="fa fa-sign-out"></i> Keluar</a></li>
      </ul>
      <a href="{{ url('logout') }}" class="header-menu"><i class="fa fa-sign-out"></i></a>
    </div>
  </header>

  <nav class="nav" id="drawer">
    <ul class="nav-list">
      <li class="nav-item"><a href="#">Home</a></li>
      <li class="nav-item"><a href="#">Favorite</a></li>
      <li class="nav-item"><a href="#">About Us</a></li>
    </ul>
  </nav>

  <div class="loader active" id="loader">
    
  </div>

  @yield('content')
  

  <footer class="web">
    <p>Copyright &copy; 2021 - <b>LKPD - Sirkulasi Darah 🩸</b> <br/>Made with ❤️ By Naufal Abdi</p>
  </footer>  

  <footer class="mobile">
    <div class="item">
      <a href="">
        <i class="fas fa-home"></i>
        <span>Beranda</span>
      </a>
    </div>
    <div class="item">
      <a href="">
        <i class="fas fa-pencil-alt"></i>
        <span>Belajar</span>
      </a>
    </div>
    <div class="item">
      <a href="">
        <i class="fas fa-clipboard-list"></i>
        <span>Tugas</span>
      </a>
    </div>
    <div class="item">
      <a href="">
        <i class="fas fa-user"></i>
        <span>Saya</span>
      </a>
    </div>
  </footer>

  {{-- Script --}}
  <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
  @stack('ckeditor')
</body>
</html>
@extends('base')

@section('content')
<main id="maincontent">
  <div class="menu">
    <div class="menu-img">
      <img src="{{ asset('img/home-img-500.png') }}" alt="Gambar Hero Menu">      
    </div>
    <div class="menu-text">
      <h1 class="menu-title">Aplikasi Pembelajaran Sirkulasi Darah</h1>      
      <hr>
      <p class="hero-tagline">Pilih menu yang anda sukai pada restoran - restoran terbaik kami</p>
    </div>
    <div class="menu-thumbs">
      <div class="menu-thumb">
        <a href="">
          <img class="thumb-img" src="{{ asset('img/homework-thumb.png') }}" alt="">
          <h3 class="thumb-title">Kelas</h3>      
        </a>
      </div>     
      <div class="menu-thumb">
        <a href="">
          <img class="thumb-img" src="{{ asset('img/homework-thumb.png') }}" alt="">
          <h3 class="thumb-title">Kelas</h3>      
        </a>
      </div>     
      <div class="menu-thumb">
        <a href="">
          <img class="thumb-img" src="{{ asset('img/homework-thumb.png') }}" alt="">
          <h3 class="thumb-title">Kelas</h3>      
        </a>
      </div>     
      
    </div>
  </div>
</main>
@endsection
@extends('pengguna-base')

@section('content')
  <main id="adminMain">
    <h1 class="dashboard-title">Selamat Datang di Halaman Admin</h1>

    <div class="dashboard">
      <div class="container">
        <div class="dashboard-item">
          <img src="{{ asset('img/homework-thumb.png') }}" alt="Gambar Menu" crossorigin="anonymous">
          <a href="">Sekolah</a>
        </div>
        <div class="dashboard-item">
          <img src="{{ asset('img/homework-thumb.png') }}" alt="Gambar Menu" crossorigin="anonymous">
          <a href="">Kelas</a>
        </div>
        <div class="dashboard-item">
          <img src="{{ asset('img/homework-thumb.png') }}" alt="Gambar Menu" crossorigin="anonymous">
          <a href="">Guru & Murid</a>
        </div>
        <div class="dashboard-item">
          <img src="{{ asset('img/homework-thumb.png') }}" alt="Gambar Menu" crossorigin="anonymous">
          <a href="">Bahan Ajar</a>
        </div>
      </div>
    </div>
  </main>
@endsection
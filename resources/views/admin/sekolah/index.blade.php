@extends('pengguna-base')

@section('content')
  <main id="adminMain">
    <h1 class="dashboard-title">Data Sekolah</h1>

    <div class="data-list">
      <ul class="list">
        <li class="list-item">          
          <div class="list-item-title">
            <img class="list-item-image" src="{{ asset('img/user.png') }}" alt="Gambar User">
            <p>SMP N 1 Padang</p>
            <a href="" class="list-item-collapse"><i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </li>
        <li class="list-item">          
          <div class="list-item-title">
            <img class="list-item-image" src="{{ asset('img/user.png') }}" alt="Gambar User">
            <p>SMA 10 Payakumbuh, Kab. Lima Puluh Kota, Sumatera Barat Indonesia</p>
            <a href="" class="list-item-collapse"><i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </li>
        <li class="list-item">          
          <div class="list-item-title">
            <p>SMA Taman Siswa Padang</p>
            <a href="" class="list-item-collapse"><i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </li>
      </ul>
    </div>
  </main>
@endsection
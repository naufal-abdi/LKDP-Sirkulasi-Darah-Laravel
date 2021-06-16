@extends('pengguna-base')

@section('content')
  <main id="adminMain">
    <h1 class="dashboard-title">Data Bahan Ajar</h1>

    <div class="data-list">
      <ul class="list">
        <li class="list-item">          
          <div class="list-item-title">
            <img class="list-item-image" src="{{ asset('img/user.png') }}" alt="Gambar User">
            <p>Sirkulasi Darah 1</p>
            <a href="" class="list-item-collapse"><i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </li>
        <li class="list-item">          
          <div class="list-item-title">
            <img class="list-item-image" src="{{ asset('img/user.png') }}" alt="Gambar User">
            <p>Sirkulasi Darah 2</p>
            <a href="" class="list-item-collapse"><i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </li>
        <li class="list-item">          
          <div class="list-item-title">
            <p>Sirkulasi Darah 3</p>
            <a href="" class="list-item-collapse"><i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </li>
      </ul>
    </div>
  </main>
@endsection
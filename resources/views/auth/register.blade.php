@extends('base')

@section('content')
<main id="maincontent">
  <div class="login-card">
    <div class="login-form">
      <h2 class="login-form-title">Buat Akun</h2>
      <form action="" method="POST" action="">
        <div class="form-group">
          <label for="" class="form-input-label">Nama</label>
          <input class="form-input-text" type="text" name="nama" placeholder="Masukkan Nama Anda"/>
        </div>
        <div class="form-group">
          <label for="" class="form-input-label">Email</label>
          <input class="form-input-text" type="email" name="email" placeholder="Masukkan Email Anda"/>
        </div>
        <div class="form-group">
          <label for="" class="form-input-label">Password</label>
          <input class="form-input-text" type="password" name="password" placeholder="Masukkan Password Anda"/>
        </div>
        <div class="form-button">
          <button type="submit"><i class="fa fa-sign-in"></i> Masuk</button>
        </div>
      </form>
    </div>
  </div>
</main>
@endsection
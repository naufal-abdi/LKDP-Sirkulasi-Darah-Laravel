@extends('base')

@section('content')
<main id="maincontent">
  <div class="login-card">
    <div class="login-form">
      <h2 class="login-form-title">Masuk Akun</h2>
      <form method="POST" action="{{ url('login') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="" class="form-input-label">Email</label>
          <input class="form-input-text" type="email" name="email" placeholder="Masukkan Email Anda" required/>
        </div>
        <div class="form-group">
          <label for="" class="form-input-label">Password</label>
          <input class="form-input-text" type="password" name="password" placeholder="Masukkan Password Anda" minlength="5" maxlength="20" required/>
        </div>
        <div class="form-button">
          <button type="submit"><i class="fa fa-sign-in"></i> Masuk</button>
        </div>
      </form>
    </div>
  </div>
</main>
@endsection
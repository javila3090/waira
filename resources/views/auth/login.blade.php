@extends('layouts.app')

@section('content')

<div class="login-box">

  <div class="login-logo">
      <span class="brand-text font-weight-bold">WEB ADMIN</span>
  </div>
  @if (count($errors) > 0)
    @include('admin.partials.errors')
  @endif
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg" style="text-transform: uppercase;"><b>Iniciar sesión</b></p>

      <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
        {{ csrf_field() }}
        <div class="form-group has-feedback">
          <input type="email" class="form-control" name="email" placeholder="Correo electrónico" required>
          <br>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
          <br>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
@endsection

@extends('layouts.app')

@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Agregar un usuario</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('users.store') }}">
          @csrf
          <div class="form-group">
            <label for="nombre">Nombre del usuario:</label>
            <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>
          </div>

          <div class="form-group">
            <label for="email">Email del usuario:</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
          </div>
          
          <div class="form-group">
            <label for="password">Contraseña del usuario:</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
          </div>

          <div class="form-group">
            <label for="password-confirm">Confirmar contraseña del usuario:</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
          </div>  

          <button type="submit" class="btn btn-primary-outline">Guardar</button>
      </form>
  </div>
</div>
</div>
@endsection

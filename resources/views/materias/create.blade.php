@extends('layouts.app')

@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Agregar una materia</h1>
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
      <form method="post" action="{{ route('materias.store') }}">
          @csrf
          <div class="form-group">
              <label for="nombre">Nombre de la materia:</label>
              <input type="text" class="form-control" name="nombre"/>
          </div>

          <div class="form-group">
              <label for="codigo">Código de Materia:</label>
              <input type="text" class="form-control" name="codigo"/>
          </div>

          <button type="submit" class="btn btn-primary-outline">Guardar</button>
      </form>
  </div>
</div>
</div>
@endsection

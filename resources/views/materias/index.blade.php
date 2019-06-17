@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Materias</h1>
    <div>
        <a style="margin: 19px;" href="{{ route('materias.create')}}" class="btn btn-primary">Nueva</a>
    </div>

  <table class="table table-striped">
    <thead>
        <tr>
          <td>Nombre</td>
          <td>Código</td>
          <td>Acciones</td>
        </tr>
    </thead>
    <tbody>
        @foreach($materias as $materia)
        <tr>
            <td>{{$materia->id}}</td>
            <td>{{$materia->nombre}}</td>
            <td>{{$materia->nombre}}</td>
            <td>
                <form action="{{ route('materias.destroy', $materia->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <a href="{{ route('materias.edit',$materia->id)}}" class="btn btn-primary">Editar</a>
                  <button class="btn btn-danger" type="submit">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection

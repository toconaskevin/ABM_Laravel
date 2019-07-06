@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Notas</h1>

  <table class="table">
    <thead class="thead-dark">
        <tr>
          <th scope="col">Materia</th>
          <th scope="col">1er Parcial</th>
          <th scope="col">2do Parcial</th>
          <th scope="col">Examen Final</th>
        </tr>
    </thead>
    <tbody>
      
      @foreach($materias as $materia)
        @foreach($notas as $nota)
          <tr>
            <td>{{$materia->nombre}}</td>
            <td>{{$nota->nota1}}</td>
            <td>{{$nota->nota2}}</td>
            <td>{{$nota->final}}</td>
          </tr>
        @endforeach
      @endforeach

    </tbody>
  </table>
<div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Notas</h1>

  <table class="table table-striped">
    <thead>
        <tr>
          <td>Materia</td>
          <td>1er Parcial</td>
          <td>2do Parcial</td>
          <td>Examen Final</td>
        </tr>
    </thead>
    <tbody>
      
      @foreach($materias as $materia)
        @foreach($notas as $nota)
          <tr>
           <td>{{$materia->materia}}</td>
            <td>{{$nota->nota1}}</td>
            <td>{{$nota->nota2}}</td>
            <td>{{$nota->final}}</td>
            <td>
          </tr>
        @endforeach
      @endforeach

      </tbody>
  </table>
<div>
</div>
@endsection

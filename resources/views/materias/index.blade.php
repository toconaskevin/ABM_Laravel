@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Materias</h1>
    @if(Auth::user()->hasRole('admin'))
    <div>
        <a style="margin: 19px;" href="{{ route('materias.create')}}" class="btn btn-primary">Nueva Materia</a>
    </div>
    @endif
  <table class="table">
    <thead class="thead-dark">
        <tr>
          <th scope="col">Código</th>
          <th scope="col">Nombre</th>
          <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($materias as $materia)
        <tr>
            <th scope="row">{{$materia->codigo}}</th>
            <td>{{$materia->nombre}}</td>
            <td>
                  @if (Auth::user()->hasRole('admin')) 
                  <a href="{{ route('materias.edit',$materia->id)}}" class="btn btn-primary">Editar</a>
                  @endif

                  <button href="#danger" class="btn btn-danger" data-toggle="modal">Dar de baja</button>
                            
                    <!-- Ventana -->
                      <div class="modal fade" id="danger">
                        <div class="modal-dialog">
                          <div class="modal-content">

                            <!-- Header -->
                            <div class="modal-header">
                              <h4 class="align-center">Dar de baja</h4>
                            </div>

                            <!-- Body -->
                              <div class="modal-body">
                                <p>Est&aacute; seguro/a que desea dar de baja la materia?</p>
                              </div>

                            <!-- Footer --> 
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>

                              <form action="{{ route('materias.destroy', $materia->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-primary">Dar de baja</button>
                            </div> 

                          </div>
                        </div>
                      </div>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection

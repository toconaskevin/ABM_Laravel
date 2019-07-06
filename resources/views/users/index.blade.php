@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Gestor de Usuarios</h1>
    <div>
        <a style="margin: 19px;" href="{{ route('users.create')}}" class="btn btn-primary">Nuevo Usuario</a>
    </div>
  
  <table class="table">
    <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Email</th>
          <th scope="col">Permisos</th>
          <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{'N/A'}}</td>
        <td>
          <div>
              <a href="{{ route('users.edit', $user->id)}}" class="btn btn-primary">Editar</a>
          </div>  
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Gestor de Usuarios</h1>
    <div>
        <a style="margin: 19px;" href="{{ route('cargarNotas.create')}}" class="btn btn-primary">Nuevo Usuario</a>
    </div>

  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nombre</td>
          <td>Email</td>
          <td>Permisos</td>
          <td>Acciones</td>
        </tr>
    </thead>
    <tbody>

      @foreach($users as $user)
      @foreach($users->roles as $role)
      @if($user->id == $role->pivot->user_id && $role->pivot->role_id == 3)
      <!--- if($user->id == $role_user->user_id && $role_user->role_id == 3) --->
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{'N/A'}}</td>
        <td>
          <div>
              <a href="{{ route('users.edit', $user->id)}}" class="btn btn-primary">Editar</a>
          </div>  
        </td>
        <td>
      </tr>
      @endif
    @endforeach
    @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection

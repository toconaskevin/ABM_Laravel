@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Actualizar materia</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <form method="post" action="{{ route('materias.update', $materia->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">

                <label for="first_name">Nombre de Materia:</label>
                <input type="text" class="form-control" name="nombre" value="{{ $materia->nombre }}" />
            </div>

            <div class="form-group">
                <label for="last_name">Código de Materia:</label>
                <input type="text" class="form-control" name="codigo" value="{{ $materia->codigo }}" />
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
@endsection

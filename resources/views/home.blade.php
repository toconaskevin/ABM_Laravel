@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido, {{Auth::user()->name}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    Iniciaste sesion satisfactoriamente:
                    
                    @if(Auth::user()->hasRole('admin'))
                        <div><br>Accediste como administrador.</div>
                    @endif

                    @if(Auth::user()->hasRole('docente'))
                        <div><br>Accediste como docente.</div>
                    @endif
                    
                    @if(Auth::user()->hasRole('alumno'))
                        <div><br>Accediste como alumno.</div>
                    @endif  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

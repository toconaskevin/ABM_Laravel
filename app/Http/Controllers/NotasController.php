<?php

namespace App\Http\Controllers;

use App\Notas;
//use App\MateriasDisponibles;
use App\Materia;
use Illuminate\Http\Request;

class NotasController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notas = Notas::all();

        $materias = Materia::all();

        return view('notas.index', compact('notas','materias'));
    }

    public function show()
    {
        abort(404, 'Error');
    }
}

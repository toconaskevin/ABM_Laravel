<?php

namespace App\Http\Controllers;

use App\Notas;
use App\MateriasDisponibles;
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

        $materias = MateriasDisponibles::all();

        return view('notas.index', compact('notas','materias'));
    }

}

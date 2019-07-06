<?php

use Illuminate\Database\Seeder;
use App\Materia;

class MateriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materia = new Materia();
        $materia->nombre = 'Programacion I';
        $materia->codigo = '29';
        $materia->save();

        $materia = new Materia();
        $materia->nombre = 'Ingles';
        $materia->codigo = '31';
        $materia->save();

        $materia = new Materia();
        $materia->nombre = 'Laboratorio I';
        $materia->codigo = '32';
        $materia->save();

        $materia = new Materia();
        $materia->nombre = 'Matematica';
        $materia->codigo = '33';
        $materia->save();

        $materia = new Materia();
        $materia->nombre = 'Procesamiento de datos';
        $materia->codigo = '28';
        $materia->save();

    }
}

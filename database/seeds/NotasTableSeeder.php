<?php

use Illuminate\Database\Seeder;
use App\Notas;

class NotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $notas = new Notas();
        $notas->nota1 = 8.66;
        $notas->nota2 = 7.33;
        $notas->final = 5.00;
        $notas->save();

        $notas = new Notas();
        $notas->nota1 = 7.33;
        $notas->nota2 = 8.66;
        $notas->final = 8.33;
        $notas->save();

        $notas = new Notas();
        $notas->nota1 = 5.33;
        $notas->nota2 = 10.00;
        $notas->final = 6.33;
        $notas->save();

        $notas = new Notas();
        $notas->nota1 = 9.33;
        $notas->nota2 = 2.00;
        $notas->final = 8.50;
        $notas->save();

        $notas = new Notas();
        $notas->nota1 = 5.50;
        $notas->nota2 = 8.00;
        $notas->final = 8.00;
        $notas->save();
    }
}

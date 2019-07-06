<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Materia;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_alumno = Role::where('name', 'alumno')->first();
        $role_docente = Role::where('name', 'docente')->first();
        $role_admin = Role::where('name', 'admin')->first();

        $user = new User();
        $user->name = 'Alumno 1';
        $user->email = 'alumno@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_alumno);

        $user = new User();
        $user->name = 'Alumno 2';
        $user->email = 'alumno2@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_alumno);

        $user = new User();
        $user->name = 'Docente';
        $user->email = 'docente@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_docente);

        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_admin);
    }
}

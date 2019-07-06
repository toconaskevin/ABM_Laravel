<?php

use App\Notas;
use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(MateriaTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(NotasTableSeeder::class);
    }
}

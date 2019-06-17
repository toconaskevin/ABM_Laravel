<?php

use App\Notas;
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
        factory(Notas::class)->create();
        // $this->call(UsersTableSeeder::class);
    }
}

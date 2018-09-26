<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(AutorSeeder::class);
        $this->call(IngredienteReceitaSeeder::class);
        $this->call(IngredienteSeeder::class);
        $this->call(ReceitaSeeder::class);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->insert([
        	'nome' => 'Lucas Scarpa',
        	'email' => 'lscarpa@autodoc.com.br',
        	'endereco' => 'Rua Major Sertorio 734',
        	'senha' => Hash::make('autodoc'),
        	'created_at' => Carbon::now(),
        ]);
    }
}

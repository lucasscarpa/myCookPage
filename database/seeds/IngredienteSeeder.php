<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class IngredienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingrediente')->insert([
        	'nome' 			=> 'Arroz',
        	'created_at' 	=> Carbon::now(),
     	]);
    }
}

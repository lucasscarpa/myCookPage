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
        	'nome' 			    => 'Leite',
        	'unidade_medida' 	=> 'L',
        	'preco'          	=> 3.69,
        	'created_at' 	    => Carbon::now(),
        ]);
         
        DB::table('ingrediente')->insert([
        	'nome' 			    => 'Açucar',
        	'unidade_medida' 	=> 'Kg',
        	'preco'          	=> 2.89,
        	'created_at' 	    => Carbon::now(),
     	]);
         
        DB::table('ingrediente')->insert([
        	'nome' 			    => 'Ovo',
        	'unidade_medida' 	=> 'Un',
        	'preco'          	=> 1.25,
        	'created_at' 	    => Carbon::now(),
     	]);
         
        DB::table('ingrediente')->insert([
        	'nome' 			    => 'Canela',
        	'unidade_medida' 	=> 'Un',
        	'preco'          	=> 0.25,
        	'created_at' 	    => Carbon::now(),
     	]);
         
        DB::table('ingrediente')->insert([
        	'nome' 			    => 'Cravo',
        	'unidade_medida' 	=> 'Un',
        	'preco'          	=> 0.05,
        	'created_at' 	    => Carbon::now(),
     	]);
         
        DB::table('ingrediente')->insert([
        	'nome' 			    => 'Suco de limão',
        	'unidade_medida' 	=> 'Un',
        	'preco'          	=> 0.50,
        	'created_at' 	    => Carbon::now(),
     	]);
    }
}

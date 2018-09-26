<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class IngredienteReceitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('receita_ingrediente')->insert([
        	'receita_id' 	    => 1,
        	'ingrediente_id' 	=> 1,
        	'quantidade' 	    => 1,
         ]);
         
        DB::table('receita_ingrediente')->insert([
        	'receita_id' 	    => 1,
        	'ingrediente_id' 	=> 2,
        	'quantidade' 	    => 0.4,
     	]);
         
        DB::table('receita_ingrediente')->insert([
        	'receita_id' 	    => 1,
        	'ingrediente_id' 	=> 3,
        	'quantidade' 	    => 6,
     	]);
         
        DB::table('receita_ingrediente')->insert([
        	'receita_id' 	    => 1,
        	'ingrediente_id' 	=> 4,
        	'quantidade' 	    => 1,
     	]);
         
        DB::table('receita_ingrediente')->insert([
        	'receita_id' 	    => 1,
        	'ingrediente_id' 	=> 5,
        	'quantidade' 	    => 4,
     	]);
         
        DB::table('receita_ingrediente')->insert([
        	'receita_id' 	    => 1,
        	'ingrediente_id' 	=> 6,
        	'quantidade' 	    => 1,
     	]);
    }
}

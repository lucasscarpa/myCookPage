<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('autor')->insert([
        	'nome' 			=> 'Neno',
        	'created_at' 	=> Carbon::now(),
     	]);
    }
}

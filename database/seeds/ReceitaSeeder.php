<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReceitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('receita')->insert([
        	'nome' 			=> 'Ambrosia',
            'descricao'		=> 'Coloque em uma panela média 1/2 xícara de açúcar, a canela e os cravos da índia
            Deixe ferver até dourar o açúcar (cor de caramelo)
            Mexa de vez em quando, com cuidado
            Depois deixe ferver até ficar quase seca',
        	'categoria_id' 	=> 1,
        	'autor_id' 	    => 1,
        	'created_at' 	=> Carbon::now(),
     	]);
    }
}

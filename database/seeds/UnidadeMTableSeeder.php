<?php

use Illuminate\Database\Seeder;

class UnidadeMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('delete from unidade_medidas');
        factory(App\UnidadeMedida::class, 4)->create();
    }
}

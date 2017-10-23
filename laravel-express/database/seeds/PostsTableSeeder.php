<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();                      //apaga todos os registros da tabela do banco de dados

        factory('App\Post', 15)->create();    // cria varios de uma só vez
    }
}

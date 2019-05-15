<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create(
            [
                'title' => 'Заголовок первой статьи',
                'text' => 'Какой-то длинный текст ываы ваыв ваы аываыв',
                'user_id' => 0
            ]
        );
        Post::create(
            [
                'title' => 'Заголовок второй статьи',
                'text' => 'Еще один длинный текст ываы ваыв ваы аываыв',
                'user_id' => 0
            ]
        );
    }
}

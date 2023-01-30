<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => "hafiz_rrhp",
        //     'email' => 'hafiz@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        User::create([
            'name' => "Joji",
            'username' => "joji",
            'email' => 'Joji@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming', 'slug' => 'Web-programming'
        ]);
        Category::create([
            'name' => 'Personal', 'slug' => 'Personal'
        ]);
        Category::create([
            'name' => 'Webdesign', 'slug' => 'Web-Design'
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'lorem',
        //     'body' => 'loremroeirowoeirn woeirnwoeirnwoiern woeirnwoeirn',
        //     'category_id' =>1,
        //     'user_id'=>1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-Kedua',
        //     'excerpt' => 'lorem',
        //     'body' => 'loremroeirowoeirn woeirnwoeirnwoiern woeirnwoeirn',
        //     'category_id' =>1,
        //     'user_id'=>1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-Ketiga',
        //     'excerpt' => 'lorem',
        //     'body' => 'loremroeirowoeirn woeirnwoeirnwoiern woeirnwoeirn',
        //     'category_id' =>1,
        //     'user_id'=>2
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-Keempat',
        //     'excerpt' => 'lorem',
        //     'body' => 'loremroeirowoeirn woeirnwoeirnwoiern woeirnwoeirn',
        //     'category_id' =>1,
        //     'user_id'=>2
        // ]);
    }
}

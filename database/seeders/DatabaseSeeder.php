<?php

namespace Database\Seeders;

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
        

        // User::create([
        //     'name'=>'Hardian Suryadijaya',
        //     'email'=>'hardian@gmail.com',
        //     'password'=>bcrypt('12345'),
        // ]);

        // User::create([
        //     'name'=>'Udin',
        //     'email'=>'udin@gmail.com',
        //     'password'=>bcrypt('67890'),
        // ]);
        User::factory(3)->create();

        Category::create([
            'name'=>'Web Programming',
            'slug'=>'web-programming',
        ]);

        Category::create([
            'name'=>'Web Desing',
            'slug'=>'web-desing',
        ]);

        Category::create([
            'name'=>'Personal',
            'slug'=>'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title'=> 'Judul Pertama', 
        //     'slug' => 'judul-pertama', 
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, blanditiis reprehenderit. Enim, tenetur, corporis asperiores consequatur alias distinctio sunt, non ea magni vel voluptatum debitis nulla! Esse ex error incidunt aperiam deleniti consectetur facere soluta.',
        //     'body'=> '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, blanditiis reprehenderit. Enim, tenetur, corporis asperiores consequatur alias distinctio sunt, non ea magni vel voluptatum debitis nulla! Esse ex error incidunt aperiam deleniti consectetur facere soluta. Accusantium quos facere temporibus itaque aliquam dolor commodi quaerat suscipit distinctio. Velit, officia illo doloremque aspernatur modi esse, dolores quas porro, quasi voluptas delectus veritatis.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci quo perspiciatis, accusamus eos illo, iure nulla dignissimos rem consequatur incidunt fuga molestiae, veniam et ut natus voluptatem laborum dolorum debitis. Saepe molestiae vel possimus necessitatibus assumenda natus commodi, veritatis sint fugit quod voluptate adipisci, laudantium atque dolores reprehenderit! Quibusdam ipsum delectus facilis illum tempore animi totam asperiores nam, necessitatibus repellat.</p>',
        //     'category_id' => 1 , 
        //     'user_id' => 1
        // ]); 

        // Post::create([
        //     'title'=> 'Judul Ke Dua', 
        //     'slug' => 'judul-ke-dua', 
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, blanditiis reprehenderit. Enim, tenetur, corporis asperiores consequatur alias distinctio sunt, non ea magni vel voluptatum debitis nulla! Esse ex error incidunt aperiam deleniti consectetur facere soluta.',
        //     'body'=> '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, blanditiis reprehenderit. Enim, tenetur, corporis asperiores consequatur alias distinctio sunt, non ea magni vel voluptatum debitis nulla! Esse ex error incidunt aperiam deleniti consectetur facere soluta. Accusantium quos facere temporibus itaque aliquam dolor commodi quaerat suscipit distinctio. Velit, officia illo doloremque aspernatur modi esse, dolores quas porro, quasi voluptas delectus veritatis.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci quo perspiciatis, accusamus eos illo, iure nulla dignissimos rem consequatur incidunt fuga molestiae, veniam et ut natus voluptatem laborum dolorum debitis. Saepe molestiae vel possimus necessitatibus assumenda natus commodi, veritatis sint fugit quod voluptate adipisci, laudantium atque dolores reprehenderit! Quibusdam ipsum delectus facilis illum tempore animi totam asperiores nam, necessitatibus repellat.</p>',
        //     'category_id' => 1 , 
        //     'user_id' => 1
        // ]); 

        // Post::create([
        //     'title'=> 'Judul Ke Tiga', 
        //     'slug' => 'judul-ke-tiga', 
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, blanditiis reprehenderit. Enim, tenetur, corporis asperiores consequatur alias distinctio sunt, non ea magni vel voluptatum debitis nulla! Esse ex error incidunt aperiam deleniti consectetur facere soluta.',
        //     'body'=> '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, blanditiis reprehenderit. Enim, tenetur, corporis asperiores consequatur alias distinctio sunt, non ea magni vel voluptatum debitis nulla! Esse ex error incidunt aperiam deleniti consectetur facere soluta. Accusantium quos facere temporibus itaque aliquam dolor commodi quaerat suscipit distinctio. Velit, officia illo doloremque aspernatur modi esse, dolores quas porro, quasi voluptas delectus veritatis.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci quo perspiciatis, accusamus eos illo, iure nulla dignissimos rem consequatur incidunt fuga molestiae, veniam et ut natus voluptatem laborum dolorum debitis. Saepe molestiae vel possimus necessitatibus assumenda natus commodi, veritatis sint fugit quod voluptate adipisci, laudantium atque dolores reprehenderit! Quibusdam ipsum delectus facilis illum tempore animi totam asperiores nam, necessitatibus repellat.</p>',
        //     'category_id' => 2 , 
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title'=> 'Judul Ke Empat', 
        //     'slug' => 'judul-ke-empat', 
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, blanditiis reprehenderit. Enim, tenetur, corporis asperiores consequatur alias distinctio sunt, non ea magni vel voluptatum debitis nulla! Esse ex error incidunt aperiam deleniti consectetur facere soluta.',
        //     'body'=> '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, blanditiis reprehenderit. Enim, tenetur, corporis asperiores consequatur alias distinctio sunt, non ea magni vel voluptatum debitis nulla! Esse ex error incidunt aperiam deleniti consectetur facere soluta. Accusantium quos facere temporibus itaque aliquam dolor commodi quaerat suscipit distinctio. Velit, officia illo doloremque aspernatur modi esse, dolores quas porro, quasi voluptas delectus veritatis.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci quo perspiciatis, accusamus eos illo, iure nulla dignissimos rem consequatur incidunt fuga molestiae, veniam et ut natus voluptatem laborum dolorum debitis. Saepe molestiae vel possimus necessitatibus assumenda natus commodi, veritatis sint fugit quod voluptate adipisci, laudantium atque dolores reprehenderit! Quibusdam ipsum delectus facilis illum tempore animi totam asperiores nam, necessitatibus repellat.</p>',
        //     'category_id' => 2 , 
        //     'user_id' => 2
        // ]); 
    }
}

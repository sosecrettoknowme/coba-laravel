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
     */
    public function run(): void
    {
 

        User::create([
            'name' => 'Muhammad Afdal',
            'username' => 'muhammadafdal',
            'email' => 'afdal@gmail.com',
            'password' => bcrypt('password')
        ]);

        
        // User::create([
        //     'name' => 'Dody',
        //     'email' => 'dody@gmail.com',
        //     'password' => bcrypt('123')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem aspernatur corporis natus doloremque nemo repellendus dolore vel deserunt, est magni sunt pariatur commodi obcaecati minus, facilis incidunt provident deleniti quas aliquam a itaque distinctio quaerat vero! Minus, ut. Non animi ullam officiis. Odit, est dignissimos? Laboriosam ipsam perspiciatis inventore magnam blanditiis autem, laudantium deserunt aspernatur molestias, doloremque sunt? Vel nisi eveniet, reprehenderit ullam similique incidunt alias eaque vero id expedita doloremque debitis dignissimos et. Officia iste minus possimus ab quia voluptatum nulla, consequuntur molestiae est ullam laboriosam optio, libero amet modi deserunt inventore quo nobis impedit eum facilis praesentium quam.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem aspernatur corporis natus doloremque nemo repellendus dolore vel deserunt, est magni sunt pariatur commodi obcaecati minus, facilis incidunt provident deleniti quas aliquam a itaque distinctio quaerat vero! Minus, ut. Non animi ullam officiis. Odit, est dignissimos? Laboriosam ipsam perspiciatis inventore magnam blanditiis autem, laudantium deserunt aspernatur molestias, doloremque sunt? Vel nisi eveniet, reprehenderit ullam similique incidunt alias eaque vero id expedita doloremque debitis dignissimos et. Officia iste minus possimus ab quia voluptatum nulla, consequuntur molestiae est ullam laboriosam optio, libero amet modi deserunt inventore quo nobis impedit eum facilis praesentium quam.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem aspernatur corporis natus doloremque nemo repellendus dolore vel deserunt, est magni sunt pariatur commodi obcaecati minus, facilis incidunt provident deleniti quas aliquam a itaque distinctio quaerat vero! Minus, ut. Non animi ullam officiis. Odit, est dignissimos? Laboriosam ipsam perspiciatis inventore magnam blanditiis autem, laudantium deserunt aspernatur molestias, doloremque sunt? Vel nisi eveniet, reprehenderit ullam similique incidunt alias eaque vero id expedita doloremque debitis dignissimos et. Officia iste minus possimus ab quia voluptatum nulla, consequuntur molestiae est ullam laboriosam optio, libero amet modi deserunt inventore quo nobis impedit eum facilis praesentium quam.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem aspernatur corporis natus doloremque nemo repellendus dolore vel deserunt, est magni sunt pariatur commodi obcaecati minus, facilis incidunt provident deleniti quas aliquam a itaque distinctio quaerat vero! Minus, ut. Non animi ullam officiis. Odit, est dignissimos? Laboriosam ipsam perspiciatis inventore magnam blanditiis autem, laudantium deserunt aspernatur molestias, doloremque sunt? Vel nisi eveniet, reprehenderit ullam similique incidunt alias eaque vero id expedita doloremque debitis dignissimos et. Officia iste minus possimus ab quia voluptatum nulla, consequuntur molestiae est ullam laboriosam optio, libero amet modi deserunt inventore quo nobis impedit eum facilis praesentium quam.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

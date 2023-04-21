<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Zaenal Abidin syah',
            'username' => 'zaenalabidin',
            'email' => 'aszaenal618@gmail.com',
            'password' => bcrypt('password')
        ]);
        // User::create([
        //     'name'=>'Rizki Alamsyah',
        //     'email'=>'rizkialamsyah@gmail.com',
        //     'password'=>bcrypt('54321')
        // ]);
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Post::factory(20)->create();

        // Post::create([
        //     'title'=>'Judul  Pertama',
        //     'slug'=>'judul-pertama',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, ab explicabo? Ut non quaerat voluptatem doloribus modi atque, dolor molestiae!',
        //     'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, ab explicabo? Ut non quaerat voluptatem doloribus modi atque, dolor molestiae!</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet vero vitae et officiis odio error similique saepe expedita nobis. Minima, officiis soluta repudiandae quas dicta iusto sapiente corrupti, suscipit architecto aliquid itaque tempora tempore et.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat laboriosam, quos numquam eos, eligendi consequatur, illum sit saepe iusto illo aut incidunt. Laborum fuga doloremque distinctio labore fugit? Vitae veritatis consequuntur, molestias, doloremque natus, error sunt aspernatur quibusdam voluptas ab similique?</p>',
        //     'category_id'=>1,
        //     'user_id'=>1
        // ]);
        // Post::create([
        //     'title'=>'Judul  Kedua',
        //     'slug'=>'judul-kedua',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, ab explicabo? Ut non quaerat voluptatem doloribus modi atque, dolor molestiae!',
        //     'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, ab explicabo? Ut non quaerat voluptatem doloribus modi atque, dolor molestiae!</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet vero vitae et officiis odio error similique saepe expedita nobis. Minima, officiis soluta repudiandae quas dicta iusto sapiente corrupti, suscipit architecto aliquid itaque tempora tempore et.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat laboriosam, quos numquam eos, eligendi consequatur, illum sit saepe iusto illo aut incidunt. Laborum fuga doloremque distinctio labore fugit? Vitae veritatis consequuntur, molestias, doloremque natus, error sunt aspernatur quibusdam voluptas ab similique?</p>',
        //     'category_id'=>1,
        //     'user_id'=>1
        // ]);
        // Post::create([
        //     'title'=>'Judul  Ketiga',
        //     'slug'=>'judul-ketiga',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, ab explicabo? Ut non quaerat voluptatem doloribus modi atque, dolor molestiae!',
        //     'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, ab explicabo? Ut non quaerat voluptatem doloribus modi atque, dolor molestiae!</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet vero vitae et officiis odio error similique saepe expedita nobis. Minima, officiis soluta repudiandae quas dicta iusto sapiente corrupti, suscipit architecto aliquid itaque tempora tempore et.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat laboriosam, quos numquam eos, eligendi consequatur, illum sit saepe iusto illo aut incidunt. Laborum fuga doloremque distinctio labore fugit? Vitae veritatis consequuntur, molestias, doloremque natus, error sunt aspernatur quibusdam voluptas ab similique?</p>',
        //     'category_id'=>2,
        //     'user_id'=>2
        // ]);
        // Post::create([
        //     'title'=>'Judul  Keempat',
        //     'slug'=>'judul-keempat',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, ab explicabo? Ut non quaerat voluptatem doloribus modi atque, dolor molestiae!',
        //     'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, ab explicabo? Ut non quaerat voluptatem doloribus modi atque, dolor molestiae!</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet vero vitae et officiis odio error similique saepe expedita nobis. Minima, officiis soluta repudiandae quas dicta iusto sapiente corrupti, suscipit architecto aliquid itaque tempora tempore et.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat laboriosam, quos numquam eos, eligendi consequatur, illum sit saepe iusto illo aut incidunt. Laborum fuga doloremque distinctio labore fugit? Vitae veritatis consequuntur, molestias, doloremque natus, error sunt aspernatur quibusdam voluptas ab similique?</p>',
        //     'category_id'=>2,
        //     'user_id'=>2
        // ]);
    }
}

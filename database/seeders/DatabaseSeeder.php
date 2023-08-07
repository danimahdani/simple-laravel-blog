<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        Category::factory(5)->create();

        Post::factory(20)->create();


        // User::create([
            //     'name' => 'danimahdani',
            //     'email' => 'danimahdani@gmail.com',
            //     'password' => bcrypt('123456'),
            // ]);

        // User::create([
        //     'name' => 'Ujang',
        //     'email' => 'uajng@gmail.com',
        //     'password' => bcrypt('123456'),
        // ]);


        // Category::create([
        //     'name' => 'Tips and Trick',
        //     'slug' => 'tips-and-trick',
        // ]);

        // Category::create([
        //     'name' => 'Programming',
        //     'slug' => 'programming',
        // ]);

        // Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal',
        // ]);

        // Post::create([
        //     'title' => 'Postingan Pertama',
        //     'slug' => 'postingan-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim esse incidunt delectus nulla et cum beatae rerum vitae tempora quis exercitationem, nisi expedita? Enim deserunt corrupti quibusdam aliquid',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim esse incidunt delectus nulla et cum beatae rerum vitae tempora quis exercitationem, nisi expedita? Enim deserunt corrupti quibusdam aliquid est cum quasi beatae? Repellendus odit</p> ipsa porro nobis accusantium incidunt provident. Ex, recusandae dolores inventore autem maxime impedit accusantium nesciunt a sit dolorum nam temporibus earum, voluptas vel aut veniam. Consequuntur, nesciunt quaerat quae fuga sint quos esse deserunt eveniet sapiente! At, <p>harum, sequi consequatur porro adipisci fuga, quo provident laborum veniam iure nemo nobis exercitationem cum cupiditate! Voluptatem expedita provident, dolore voluptas minus dicta similique beatae fuga deserunt quod excepturi?</p>',
        //     'user_id' => 1,
        //     'category_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Postingan Kedua',
        //     'slug' => 'postingan-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim esse incidunt delectus nulla et cum beatae rerum vitae tempora quis exercitationem, nisi expedita? Enim deserunt corrupti quibusdam aliquid',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim esse incidunt delectus nulla et cum beatae rerum vitae tempora quis exercitationem, nisi expedita? Enim deserunt corrupti quibusdam aliquid est cum quasi beatae? Repellendus odit</p> ipsa porro nobis accusantium incidunt provident. Ex, recusandae dolores inventore autem maxime impedit accusantium nesciunt a sit dolorum nam temporibus earum, voluptas vel aut veniam. Consequuntur, nesciunt quaerat quae fuga sint quos esse deserunt eveniet sapiente! At, <p>harum, sequi consequatur porro adipisci fuga, quo provident laborum veniam iure nemo nobis exercitationem cum cupiditate! Voluptatem expedita provident, dolore voluptas minus dicta similique beatae fuga deserunt quod excepturi?</p>',
        //     'user_id' => 1,
        //     'category_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Postingan Ketiga',
        //     'slug' => 'postingan-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim esse incidunt delectus nulla et cum beatae rerum vitae tempora quis exercitationem, nisi expedita? Enim deserunt corrupti quibusdam aliquid',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim esse incidunt delectus nulla et cum beatae rerum vitae tempora quis exercitationem, nisi expedita? Enim deserunt corrupti quibusdam aliquid est cum quasi beatae? Repellendus odit</p> ipsa porro nobis accusantium incidunt provident. Ex, recusandae dolores inventore autem maxime impedit accusantium nesciunt a sit dolorum nam temporibus earum, voluptas vel aut veniam. Consequuntur, nesciunt quaerat quae fuga sint quos esse deserunt eveniet sapiente! At, <p>harum, sequi consequatur porro adipisci fuga, quo provident laborum veniam iure nemo nobis exercitationem cum cupiditate! Voluptatem expedita provident, dolore voluptas minus dicta similique beatae fuga deserunt quod excepturi?</p>',
        //     'user_id' => 2,
        //     'category_id' => 2,
        // ]);

        // Post::create([
        //     'title' => 'Postingan Keempat',
        //     'slug' => 'postingan-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim esse incidunt delectus nulla et cum beatae rerum vitae tempora quis exercitationem, nisi expedita? Enim deserunt corrupti quibusdam aliquid',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim esse incidunt delectus nulla et cum beatae rerum vitae tempora quis exercitationem, nisi expedita? Enim deserunt corrupti quibusdam aliquid est cum quasi beatae? Repellendus odit</p> ipsa porro nobis accusantium incidunt provident. Ex, recusandae dolores inventore autem maxime impedit accusantium nesciunt a sit dolorum nam temporibus earum, voluptas vel aut veniam. Consequuntur, nesciunt quaerat quae fuga sint quos esse deserunt eveniet sapiente! At, <p>harum, sequi consequatur porro adipisci fuga, quo provident laborum veniam iure nemo nobis exercitationem cum cupiditate! Voluptatem expedita provident, dolore voluptas minus dicta similique beatae fuga deserunt quod excepturi?</p>',
        //     'user_id' => 2,
        //     'category_id' => 3,
        // ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
       /* User::truncate();
        Category::truncate();
        Post::truncate();*/


        $user= User::factory()->create([
            'name' =>'Fahim Siam'
        ]);
        Post::factory(10)->create([
            'user_id'=>$user->id
        ]);

        /*$personal=Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        $work=Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);
        $hobby= Category::create([
            'name' => 'Hobbies',
            'slug' => 'hobbies'
        ]);

        Post::create([
            'title' => 'My Hobby Post',
            'user_id' => $user->id,
            'category_id' =>$hobby->id,
            'excerpt' => '<p>Excerpt of my hobby post</p>',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem ullam iste quas itaque cumque nihil tempora nisi exercitationem aliquid possimus impedit numquam, mollitia quam obcaecati adipisci necessitatibus repellat unde. Ex.</p>',
            'slug' => 'my-hobby-post',
            'category_id' => 3
        ]);
        Post::create([
            'title' => 'My Work Post',
            'user_id' => $user->id,
            'category_id' =>$work->id,
            'excerpt' => '<p>Excerpt of my work post</p>',
            'body' => '</p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem ullam iste quas itaque cumque nihil tempora nisi exercitationem aliquid possimus impedit numquam, mollitia quam obcaecati adipisci necessitatibus repellat unde. Ex.</p>',
            'slug' => 'my-work-post',
            'category_id' => 3
        ]);
        Post::create([
            'title' => 'My Personal Post',
            'user_id' => $user->id,
            'category_id' =>$personal->id,
            'excerpt' => '<p>Excerpt of my Personal post</p>',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem ullam iste quas itaque cumque nihil tempora nisi exercitationem aliquid possimus impedit numquam, mollitia quam obcaecati adipisci necessitatibus repellat unde. Ex.</p>',
            'slug' => 'my-personal-post',
            'category_id' => 3
        ]);*/
    }
}

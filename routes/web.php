<?php

use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/users', function () {
    $users = User::paginate(20);

    return view('users')->with('users', $users);
    /* return view(
         'users',
         ['users' => User::all()]
     );*/
});

Route::get('/users/{user}', function (User $user) {
    //$post=Post::findOrFail($post);
    return view(
        'user',
        ['user' => $user]
    );
});

Route::get('/', function () {
    /* \Illuminate\Support\Facades\DB::listen(function ($query){
         logger($query->sql, $query->bindings);
     });*/  //put queries in logs/laravel.log can be done with composer clockwork
    return view(
        'posts',
        [
            'posts' => Post::latest()->get(), //n plus one trap fixed in models
            'categories' => Category::all(),
            //'posts' => Post::latest()->with('category', 'author')->get() //latest sorts it //with stops the n plus one trap
            //'posts' => Post::all()  //this has n plus one trap more queries
        ]
    );
    //$posts=[];

    /* $posts= array_map(function ($file){
        $document=YamlFrontMatter::parseFile($file);
        return new Post(
            $document->title,
            $document->excerpt,
            $document->date,
            $document->body(),
            $document->slug
        );
    }, $files);*/

    /*foreach ($files as $file){
        $document=YamlFrontMatter::parseFile($file);
        $posts[]=new Post(
            $document->title,
            $document->excerpt,
            $document->date,
            $document->body(),
            $document->slug
        );
    }*/


    // ddd($posts[0]->body);

    // $document = YamlFrontMatter::parseFile(resource_path('posts/my-first-post.html'));
    /*  $posts = Post::all();
    return view(
        'posts',
        [
            'posts' => $posts
        ]
    ); */
    //return Post::find('my-first-post');
    // return view('posts');
})->name('home');

Route::get('/posts/{post:slug}', function (Post $post) {
    //$post=Post::findOrFail($post);
    return view(
        'post',
        ['post' => $post]
    );
});/*->where('post', '[A-Za-z_\-]+');*/

Route::get('categories/{category:slug}', function (Category $category) {
    return view(
        'posts',
        [
            'posts' => $category->posts, //n plus one trap fixed in models
            'currentCategory' => $category,
            'categories' => Category::all(),
            //'posts' => $category->posts->load(['category', 'author'])
        ]
    );
})->name('category');

Route::get('authors/{author:username}', function (User $author) {
    return view(
        'posts',
        [
            'posts' => $author->posts, //n plus one trap fixed in models
            'categories' => Category::all(),
            // 'posts' => $author->posts->load(['category', 'author'])
        ]
    );
});

<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
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

Route::get('/', function () {

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
    return view(
        'posts',
        ['posts' => Post::all()]
    );
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
});

Route::get('/posts/{post}', function ($slug) {
    $post=Post::findOrFail($slug);
    return view(
        'post',
        ['post' => $post]
    );
});/*->where('post', '[A-Za-z_\-]+');*/

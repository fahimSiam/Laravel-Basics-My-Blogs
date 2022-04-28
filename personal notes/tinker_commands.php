use App\Models\Post;
$user = new App\Models\User;
$user->email='fahim Siam';
$user->save();
User::all()
$post = new App\Models\Post;
use App\Models\Post
Post::count();
Post::all();
Post::first();
$post->body
$post->body = '<p>' . $post->body . '</p>';
$post->save();

use App\Models\Post
Post::create(['title' => 'My Third Post' , 'excerpt' => 'This is my third p
ost. Lorem ipsum' , 'body' => 'This is my third post. Lorem ipsum dolor sit ame
t consectetur adipisicing elit. Dolorem ullam iste quas itaque cumque nihil tem
pora nisi exercitationem aliquid possimus impedit numquam, mollitia quam obcaec
ati adipisci necessitatibus repellat unde. Ex.']);

$post->update(['excerpt' => 'the is my new third post'])

php artisan make:model Category -m //make migration and Models

Post::create([
'title' => 'My Hobby Post',
'excerpt' => 'Excerpt of my hobby post',
'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem ullam iste quas itaque cumque nihil tempora nisi exercitationem aliquid possimus impedit numquam, mollitia quam obcaecati adipisci necessitatibus repellat unde. Ex.',
'slug' => 'my-hobby-post',
'category_id' => 3
]);

php artisan tinker
Blog::factory()->count(1000)->create() //create 1000 posts with faker

App\Models\Category::find(3)->posts; //get all posts of category 3 elequent relation
App\Models\Post::with('user')->first(); //get first post with user relation

php artisan migrate:fresh --seed //get fresh database

App\Models\Post::take(2)->get()  //get 2 results
App\Models\Post::without('author')->first(); //get first post without author relation

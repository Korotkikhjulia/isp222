<?php

namespace App\Http\Controllers;

use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\City;
use App\Models\Country;
use App\Models\Rubric;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use App\Http\Controllers\Carbon;
use Carbon\Carbon as CarbonCarbon;
use DateTime;
use Illuminate\Support\Carbon as SupportCarbon;

class HomeController extends Controller

{
    public function index(Request $request)
    {
        // $query = DB::insert("INSERT INTO posts (title, content, created_at, updated_at)
        // VALUES (?,?,?,?)", ['Пост 4', 'Lorem', NOW(), NOW()]);

        // $query = DB::insert("INSERT INTO posts (title, content)
        // VALUES (?,?)", ['Пост 5', 'Lorem']);

        // DB::update("UPDATE posts SET created_at = ?, updated_at = ? WHERE created_at IS NULL OR updated_at IS NULL", [NOW(), NOW()]);

        // DB::delete("DELETE FROM posts WHERE id = ?", [5]);
        // $posts = DB::select("SELECT * FROM posts");
        // return $posts;
        // $res = 2 + 3;
        // $name = 'Name'; 
        // return view('home', compact('res', 'name'));
        //  $data = db::table('country')->get();
        // $data = db::table('country')->limite(5)->get();
        // $data = db::table('country')->select('Code','Name')->limite(5)->get();
        // $data = db::table('country')->select('Code','Name')->first();
        // $data = DB::table('country')->select('Code','Name')->orderBy('Code', 'desc')->first();
        // $data = DB::table('city')->select('ID','Name')->find(2);where([['id', '<', 5],['id', '>', 2]] > get();
        // $data = DB::table('city')->select('ID','Name')->);
        // $data = db::table('country')->Limit(10)->pluck('Name');
        // $data = DB::table('city')->select('CountryCode')->distinct()->get();

        // $data = DB::table('city')->select('city.ID', 'city.Name', 'country.Code','Country.Name as countryname')->limit(10)
        // -> join('country', 'city.CountryCode', '=', 'country.Code') -> get();

        // $data1 = '';
        // $data = DB::table('employees')->get("*");
        // $data = DB::table('employees')->get("name", "salary");

        // $data = DB::table('employees')->where([['salary', '=', 500]]) -> get();
        // $data = DB::table('employees')->where([['salary', '>', 450]]) -> get();
        // $data = DB::table('employees')->where([['salary', '!=', 500]]) -> get();
        // $data = DB::table('employees')->where([['salary', '=', 400]])->orwhere([['id', '>', '4']]) -> get();
        // $data = DB::table('employees')->where([['id', '=', 3]]) -> get();
        // $data = DB::table('employees')->where([['id', '=', 5]]) -> get();
        // $data1 = DB::table('employees')->get("name");
        //  $data = DB::table('employees')->select('*')->where([['salary', '>', 450],['salary', '<', 1100]]) -> get();
        //  $data = DB::table('employees')->select('*')->where([['salary', '<', 300]]) ->orwhere([['salary', '>', 600]])-> get();
        //  $data = DB::table('employees')->select('*')->where([['id', '!=', 4],])->where([['id', '!=', 6]]) -> get();
        // $data = DB::table('employees')->select('*')->where([['id', '!=', 1],])->where([['id', '!=', 2]])->where([['id', '!=', 3]]) -> get();
        //   $data = DB::table('employees')->select('*')->where([['id', '>', 1],['id', '<', 3]]) ->orwhere([['salary', '>', 400],['salary', '<', 800]])-> get();
        //   $data = DB::table('employees')->select('*')->where([['salary', '=', 500]]) ->orwhere([['position', '=', 'программист']])-> get();
        //   $data = DB::table('employees')->select('*')->where([['salary', '=', 500]]) ->where([['position', '=', 'программист']])-> get();
        // $data = DB::table('employees')->orderBy('salary')->get();
        // $data = DB::table('employees')->orderBy('birthday', 'desc')->get();
        // $data1 = DB::table('employees')->max('salary');
        // $data1 = DB::table('employees')->sum('salary');
        // $data1 = DB::table('employees')->groupBy('position')->selectRaw('min(salary) as min, position')->get();
        // $data1 = DB::table('employees')->groupBy('position')->selectRaw('sum(salary) as sum, position')->get();
        // $data = DB::table('employees')->where([['birthday', '=', '1988-03-25']]) -> get();
        // $data = DB::table('employees')->where([['birthday', 'LIKE', '%25']]) -> get();
        // $data = DB::table('employees')->where([['birthday', 'LIKE', '%3%']]) -> get();
        // $data = DB::table('employees')->where([['birthday', 'LIKE', '1990%']]) -> get();

        // if ($data1=='') {
        // echo "<table>
        // <tr></th><th>Айди</th><th>Имя</th><th>День рождения</th><th>Профиссия</th><th>Зарплата</th>";
        // foreach ($data as $user) {
        // echo "<tr>";
        // echo "<td >" . $user->id . "</td>";
        // echo "<td >" . $user->name . "</td>";
        // echo "<td >" . $user->birthday . "</td>";
        // echo "<td >" . $user->position . "</td>";
        // echo "<td>" . $user->salary . "</td>";
        // echo "</tr>" ;
        // }
        // echo "</table>";} else {
        // dd($data1);}


        // $post = new Post();
        // $post->title = 'Статья 1';
        // $post->content = 'Контент 1';
        // $post->save();
        //$data = Post::all();
        //$data = Post::limit(2)->get();

        // $data = Post::where('id', '<', 3)->select('title')->get();
        // dd($data);

        // $data = City::all();
        // $data = City::limit(5)->get();
        //  $data = City::find(2);
        // $data = Country::find('AGO');

        // dd($data);

        // Post::create(['title' => 'Пост 5', 'content' => 'Content 5']);
        // Post::destroy(5);

        // $post = Post::find(2);
        // dump($post->title, $post->rubric->title);

        // $rubric = Rubric::find(2);
        // dump($rubric->title, $rubric->post->title);

        // $rubric = Rubric::find(2);
        // dump($rubric->posts);

        // $rubrics = Rubric::find(2);
        // dump($rubrics->title);
        // foreach ($rubrics->posts as $post) 
        // {
        //     dump($post->title);
        // }

        // $posts = Post::all();
        // foreach ($posts as $post) 
        // {
        //     dump($post->title, $post->rubric->title);
        // }
        // 

        // $post = Post::find(1);
        // dump($post->title);
        // foreach($post->tags as $tag) {
        //     dump($tag->title);
        // }

        // $tag = Tag::find(1);
        // dump ($tag->title);
        // foreach($tag->posts as $post) {
        //     dump($post->title);
        // }

        //     $countrys = Country::all();
        // foreach ($countrys as $country) 
        // {
        //     dump($country->Name, $country->citys);
        // }

        //     $cat = Category::find(1);
        // // dump ($cat);
        // foreach($cat->products as $pr) {
        //     dump($pr->title);
        // }

        // Cookie::queue('test', 'Value', 60);
        // dump(Cookie::get('test'));
        // dump(Cookie::forget('test'));

        // Cache::put('key', 'value', 60);
        // dump(Cache::get('key'));

        // if (Cache::has('posts')) {
        //     $posts = Cache::get('posts');
        // } else {
        //     $posts = Post::orderBy('id', 'desc')->get();
        //     Cache::put('posts', $posts);
        // }

        // dump($request->session()->all());
        // dump(session()->all());
        // session(['cart'=> [
        // ['id'=>1, 'title'=>'product 1'],
        // ['id'=>2, 'title'=>'product 2'],
        // ]]);

        // $request->session()->push('cart', ['id' => 3, 'title' => 'product 3']);

        $request->session()->forget('cart');
        // dump(session('cart')[1]['title']);
        dump(session()->all());


        $title = 'Home page';
        $posts = Post::orderBy('id', 'desc')->get();
        return view('home', compact('title', 'posts'));
    }
    public function show()
    {
        $title = 'About Page';
        return view('about', compact('title'));
    }
    public function create()
    {
        $title = 'Create Page';
        $rubrics = Rubric::pluck('title', 'id')->all();

        return view('create', compact('title', 'rubrics'));
    }

    public function store(Request $request)
    {
        // dump($request->input('title'));
        // dump($request->input('content'));
        // dump($request->input('rubric_id'));
        // dd($request->all());

        $this->validate(
            $request,
            [
                'title' => 'required|min:5|max:100',
                'content' => 'required',
                'rubric_id' => 'required|integer',
            ],
            [
            'title.required'=> 'Заполните все поля',
            'title.min'=> 'Минимум 5 символов',
            'title.max'=> 'Максимум 100 символов',
            'content.required'=>'Заполните поле контент',
            'rubric_id.required'=>'Заполните поле рубрика',
            'rubric_id.integer'=>'Поле является числом'
            ]
        );

        Post::create($request->all());
        return redirect()->route('home');
    }

    public function shab(Request $request)
    {
        $title = 'Home page';
        
        $mytime =  time();
        Cookie::queue('time', $mytime, 600);

        return view('shab', compact('title'));

    }

    public function shab2(Request $request)
    {
        dump($request->input('ere'));
        $r = $request->input('ere');
        $tttt = Cookie::get('time');
        $ttt = time();
        $yyy = date('Y-m-d');

        if(isset($_COOKIE['time'])){
           
            dump('Времени прошло:');
            dump (intval($ttt) - intval($tttt));
            }
          
            
        return view('shab', compact('r'));



    }
}

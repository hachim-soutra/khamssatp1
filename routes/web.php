<?php

use App\post;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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
    $day = Carbon::today()->subDays(1);
    $week = Carbon::today()->subDays(7);
    $month = Carbon::today()->subDays(30);

    $user = User::where('ip',request()->ip())->first();
    $posts = post::where('view','<',100)->orderBy("view")->paginate(15);
    foreach($posts as $pro){
        $pos = post::find($pro->id);
        $pos->view = $pro->view + 1;
        $pos->save();
    };
    $login = null;
    if($user){
        $login = $user;
    }
    $postDay = post::where('created_at', '>=', $day)->count();
    $postMonth = post::where('created_at', '>=', $month)->count();
    $postWeek = post::where('created_at', '>=', $week)->count();
//,compact('postDay','postMonth','postWeek')
    return view('welcome',compact('login','posts'));
});

Route::resource('user', 'UserController');
Route::resource('post', 'PostController');
Route::get('/my-post', 'PostController@showpost')->name('mypost');
Route::post('/my-post-publish/{post}', 'PostController@publish')->name('post.publish');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

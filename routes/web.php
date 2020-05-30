<?php

use App\post;
use App\User;
use Carbon\Carbon;
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
    $login = null;
    if($user){
        $login = $user->name;
    }
    $postDay = post::where('created_at', '>=', $day)->count();
    $postMonth = post::where('created_at', '>=', $month)->count();
    $postWeek = post::where('created_at', '>=', $week)->count();
//,compact('postDay','postMonth','postWeek')
    return view('welcome',compact('login'));
});

Route::resource('user', 'UserController');

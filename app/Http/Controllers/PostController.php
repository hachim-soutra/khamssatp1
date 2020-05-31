<?php

namespace App\Http\Controllers;

use App\post;
use App\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        //Data::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
    }
    public function destroy(post $post)
    {
        $post->delete();
        return redirect()->to('/');
    }
    public function show(post $post)
    {
        $post->view = $post->view + 1;
        if($post->view ==99){
            $post->is_publish = 0;
        }
        $post->save();
        return view('post.show',compact('post','login'));
    }
    public function showpost()
    {
        $login = User::where('ip',request()->ip())->first();
        if(!$login)
        return redirect()->back()->with('error','قم باضافة منشور لتستطيع  الدخول');
        $posts = post::where('user_id',$login->id)->get();
        return view('post.show',compact('posts','login'));
    }
    public function publish(post $post)
    {
        $post->view =0;
        $post->created_at = now();
        $post->save();
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use App\post;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = User::where('ip',request()->ip())->first();
        if(!$users){
            $users = new User();
            $users->ip = request()->ip();
            $users->name = $request->username;
            $users->save();
        }

        $user = $users;
        $x = post::where('user_id',$user->id)->orderBy('created_at', 'desc')->where('created_at','<',Carbon::now()->addHours(24))->first();
        if($x){
           return redirect()->back()->with('error',' لا تستطيع اضافة المنشور الان!');
        }
        if($request->type == "post"){
            request()->validate([
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imageName = time().'.'.request()->photo->getClientOriginalExtension();
            request()->photo->move(public_path('images'), $imageName);
            $link = $request->link;
        }else{
            preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $request->link, $matches);

            $link = $matches[1];
        }


        $post = new post();
        $post->user_id      = $user->id;
        $post->view         = 0;
        $post->is_publish   = 1;
        $post->content      = $request->desc;
        $post->description  = $request->desc;
        $post->img          = $request->type == "post" ?$imageName : 'Nan';
        $post->type         = $request->type;
        $post->lien         = $link;
        $post->save();
        return redirect()->to('/')->with('success','لقد تمت اصافة المنشور بنجاح!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->to('/');
    }
}

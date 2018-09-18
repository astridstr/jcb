<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Comment;
use Image;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        // $this->data['post'] = Post::get();
        // //dd($post);
        // if(Auth::check())
        // {
        //     $this->data['member'] = User::where('id','<>',Auth::user()->id)->get();
        // }
        // // dd($member);
        // return view('home', $this->data);
        $post = Post::orderBy('id','desc')->get();
        //dd($post);
        if(Auth::check())
        {
             $member= User::where('id','<>',Auth::user()->id)->orderBy('id','desc')->get();
        }
        //dd($member);
        return view('home', ['post'=>$post, 'member'=>$member]);
    }

    // public function search(Request $request)
    // {
    //     $post = Post::orderBy('id','desc')->get();
    //     //dd($post);
    //     $search=$request->input('Search');
    //     //dd($search);
    //     $getUser = User::where('name', 'like', '%' . $search . '%')->select('name')->get();
    //     //dd($getUser);
    //     return view('home', ['post'=>$post, 'search'=>$search, 'getUser'=>$getUser]);
    // }

    public function postSetting(Request $request)
    {
        //dd($request->input('des_post'));
        $post = New Post();
        $post->des_post = $request->input('des_post');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $foto_name = time() . '.' .$image->getClientOriginalExtension();
            Image::make($image)->resize(600, 300)->save(public_path('/fotoupload/' . $foto_name ));
            $post->image = $foto_name;
        }
        $post->users_id = Auth::user()->id;
        $post->save();

        $user = User::where('id',Auth::user()->id)->first();
        $countpost = Post::where('users_id',$user->id)->count();
        $countpost = $countpost;
        $user->post_sum = $countpost;
        $user->save();

        return redirect()->back();
    }

    public function Comment(Request $request)
    {
        //dd($request->input('des_comment'));
        $post = New Comment();
        $post->post_id = $request->input('idPost');
        $post->des_comment = $request->input('des_comment');
        $post->users_id = Auth::user()->id;
        $post->save();

        return redirect()->back();
    }
}

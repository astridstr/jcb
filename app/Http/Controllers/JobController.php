<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Job;
use App\User;
use App\Comment;
use Image;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class JobController extends Controller
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
    public function index()
    {
        $post = Job::orderBy('id','desc')->get();
        //dd($post);

        return view('job', ['post'=>$post]);
    }

    public function Comment(Request $request)
    {
        $post = New Comment();
        $post->post_id = $request->input('idPost');
        $post->des_comment = $request->input('des_comment');
        $post->users_id = Auth::user()->id;
        $post->save();

        return redirect()->back();
    }
}

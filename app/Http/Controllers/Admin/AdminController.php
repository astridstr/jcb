<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Admin;
use App\Job;
use Auth;

class AdminController extends Controller
{
	public function _construct(){
		$this->middleware('admin');
	}
	public function index(){
        $post = Job::orderBy('id','desc')->get();
        
		return view('admin.home', ['post'=>$post]);
	}
    public function jobpost(Request $request)
    {
        // dd($request->input('des_job'));
        $post = New Job();
        $post->nama_perusahaan = $request->input('nama_perusahaan');
        $post->title_job = $request->input('title_job');
        $post->des_job = $request->input('des_job');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $foto_name = time() . '.' .$image->getClientOriginalExtension();
            Image::make($image)->resize(600, 300)->save(public_path('/jobimage/' . $foto_name ));
            $post->image = $foto_name;
        }
        $post->users_id = Auth::guard('admin')->user()->id;
        
        $post->save();

        return redirect()->back();
    }
}

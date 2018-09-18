<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use App\User;
use App\Post;
use App\Comment;
use App\UsersEducation;
use App\UsersExperience;
use App\UsersExpertise;
use App\UsersSocialActivity;
use App\UsersOrganization;
use App\UsersAchievement;
use App\UsersProject;
use App\UsersLanguageSkill;
use App\Followers;
use App\Following;
use Auth;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function posts()
    {
       $post = Post::where('users_id',Auth::user()->id)->get();
       return view('post', ['post'=>$post]);
   }

   public function profilelain($name)
   {
    $user = DB::select("select * from users where name = '$name'");
    $auth = User::where('id',Auth::user()->id)->first();

    $id = DB::select("select id from users where name = '$name'");
        // dd($id);
    $edu = DB::select("select des_education from userseducation a, users b where a.users_id = b.id and b.name = '$name'");      
        // dd($edu);
    $expe = DB::select("select des_experience from usersexperience a, users b where a.users_id = b.id and b.name = '$name'");      
        // dd($expe);

    $tise = DB::select("select des_expertise, score_e from usersexpertise a, users b where a.users_id = b.id and b.name = '$name'");      
        // dd($tise);

    $socac = DB::select("select des_socialactivity from userssocialactivity a, users b where a.users_id = b.id and b.name = '$name'");      
        // dd($socac);

    $orga = DB::select("select des_organization from usersorganization a, users b where a.users_id = b.id and b.name = '$name'");      
        // dd($orga);

    $achi = DB::select("select des_achievement from usersachievement a, users b where a.users_id = b.id and b.name = '$name'");      
        // dd($socac);

    $proj = DB::select("select des_project from usersproject a, users b where a.users_id = b.id and b.name = '$name'");      
        // dd($orga);

    $lang = DB::select("select des_languageskill, score_l from userslanguageskill a, users b where a.users_id = b.id and b.name = '$name'");      

    return view('profilelain', ['user'=>$user,'id'=>$id, 'edu'=>$edu, 'socac'=>$socac, 'expe'=>$expe, 'tise'=>$tise, 'orga'=>$orga, 'achi'=>$achi, 'proj'=>$proj, 'lang'=>$lang]);
} 

public function friend(Request $request)
{
    $name = $request->Search;
    $listname = DB::select("select name from users where name = '$name'");
    //dd($name);
    if($name=$listname) 
    {
        $name = $request->Search;
        //dd($name);
        $user = DB::select("select * from users where name = '$name'");
        //dd($user);
        $id = DB::select("select id from users where name = '$name'");
        //dd($id);
        $edu = DB::select("select des_education from userseducation a, users b where a.users_id = b.id and b.name = '$name'");      
        // dd($edu);
        $expe = DB::select("select des_experience from usersexperience a, users b where a.users_id = b.id and b.name = '$name'");      
        // dd($expe);

        $tise = DB::select("select des_expertise, score_e from usersexpertise a, users b where a.users_id = b.id and b.name = '$name'");      
        // dd($tise);

        $socac = DB::select("select des_socialactivity from userssocialactivity a, users b where a.users_id = b.id and b.name = '$name'");      
        // dd($socac);

        $orga = DB::select("select des_organization from usersorganization a, users b where a.users_id = b.id and b.name = '$name'");      
        // dd($orga);

        $achi = DB::select("select des_achievement from usersachievement a, users b where a.users_id = b.id and b.name = '$name'");      
        // dd($socac);

        $proj = DB::select("select des_project from usersproject a, users b where a.users_id = b.id and b.name = '$name'");      
        // dd($orga);

        $lang = DB::select("select des_languageskill, score_l from userslanguageskill a, users b where a.users_id = b.id and b.name = '$name'");      

        return view('profilelain', ['user'=>$user,'id'=>$id, 'edu'=>$edu, 'socac'=>$socac, 'expe'=>$expe, 'tise'=>$tise, 'orga'=>$orga, 'achi'=>$achi, 'proj'=>$proj, 'lang'=>$lang]);
    }
    else
    {
        //dd('usernotfound');
        return view('usernotfound');
    }
} 

public function profile()
{
    $edu = UsersEducation::where('users_id',Auth::user()->id)->get();
    $expe = UsersExperience::where('users_id',Auth::user()->id)->get();
    $tise = UsersExpertise::where('users_id',Auth::user()->id)->get();
    $socac = UsersSocialActivity::where('users_id',Auth::user()->id)->get();
    $orga = UsersOrganization::where('users_id',Auth::user()->id)->get();
    $achi = UsersAchievement::where('users_id',Auth::user()->id)->get();
    $proj = UsersProject::where('users_id',Auth::user()->id)->get();
    $lang = UsersLanguageSkill::where('users_id',Auth::user()->id)->get();
        //dd($socac);

    return view('profile', ['edu'=>$edu, 'socac'=>$socac, 'expe'=>$expe, 'tise'=>$tise, 'orga'=>$orga, 'achi'=>$achi, 'proj'=>$proj, 'lang'=>$lang]);
}
public function followers()
{
    $followers = Followers::where('users_id',Auth::user()->id)->get();
    return view('followers', ['followers'=>$followers]);
}

public function following()
{
    $following = Following::where('users_id',Auth::user()->id)->get();
    return view('following', ['following'=>$following]);
}

public function postlain($name)
{
    $useres = User::where('name',$name)->first();
    $post = Post::where('users_id',$useres->id)->get();
    $user= User::where('name',$name)->get();

    return view('postlain', ['post'=>$post, 'user'=>$user]); 
}
public function winglain($name)
{
    $useres = User::where('name',$name)->first();
    $following = Following::where('users_id',$useres->id)->get();
    $user= User::where('name',$name)->get();


    return view('followingln', ['following'=>$following, 'user'=>$user]);
}
public function werslain($name)
{
    $useres = User::where('name',$name)->first();
    $followers = Followers::where('users_id',$useres->id)->get();
    $user= User::where('name',$name)->get();

    return view('followersln', ['followers'=>$followers, 'user'=>$user]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

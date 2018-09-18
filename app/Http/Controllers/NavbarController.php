<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\UsersEducation;
use App\UsersExperience;
use App\UsersExpertise;
use App\UsersSocialActivity;
use App\UsersOrganization;
use App\UsersAchievement;
use App\UsersProject;
use App\UsersLanguageSkill;
use Auth;


class NavbarController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function setting()
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

        return view('setting', ['edu'=>$edu, 'socac'=>$socac, 'expe'=>$expe, 'tise'=>$tise, 'orga'=>$orga, 'achi'=>$achi, 'proj'=>$proj, 'lang'=>$lang]);
    }
 
}

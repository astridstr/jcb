<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use App\Http\Requests;
use Auth;
use App\User;
use App\UsersEducation;
use App\UsersExperience;
use App\UsersExpertise;
use App\UsersSocialActivity;
use App\UsersAchievement;
use App\UsersOrganization;
use App\UsersProject;
use App\UsersLanguageSkill;
use App\Followers;
use App\Following;
use Image;

class ProfileController extends Controller
{
	public function show($username){
		$user = User::where('name',$username)->first();
		dd($user->name);
//		return view('profile', ['username' => $username]);
	}

	public function formSetting(Request $request)
	{
		$user = User::where('id',Auth::user()->id)->first();
		$user->name = $request->input('name');
		$user->job = $request->input('job');
		$user->status = $request->input('status');
		$user->gender = $request->input('gender');
		$user->address = $request->input('address');
		$user->birthday = $request->input('birthday');

		$user->save();
		if ($request->hasFile('profpic')) {
			$profpic = $request->file('profpic');
			$foto_name = time() . '.' .$profpic->getClientOriginalExtension();
			Image::make($profpic)->resize(300, 300)->save( public_path('/fotoupload/' . $foto_name ) );
			$user = Auth::user();
			$user->profpic = $foto_name;
			$user->save();
		}

		$edu1 = UsersEducation::where('users_id',Auth::user()->id)->delete();
		$edu2 = Input::get('education');
		// dd($edu2);
		if (isset($edu2)){
			foreach($edu2 as $edu2){
			// dd($edu);
				$usersedu = New UsersEducation();
				$usersedu->des_education = $edu2;
				$usersedu->users_id = Auth::user()->id;
				$usersedu->save();
			}	
		}
		
//dd($request->input('experience'));
		$expe1 = UsersExperience::where('users_id',Auth::user()->id)->delete();
		$expe2 = Input::get('experience');
		if(isset($expe2)){
			foreach($expe2 as $expe2){
			//dd($expe);
				$usersexp = New UsersExperience();
				$usersexp->des_experience = $expe2;
				$usersexp->users_id = Auth::user()->id;
				$usersexp->save();
			}
		}		
//dd($request->input('socialactivity'));
		$socac1 = UsersSocialActivity::where('users_id',Auth::user()->id)->delete();
		$socac2 = Input::get('socialactivity');
		if (isset($socac2)){
			foreach($socac2 as $socac2){
				$userssocac = New UsersSocialActivity();
				$userssocac->des_socialactivity = $socac2;
				$userssocac->users_id = Auth::user()->id;
				$userssocac->save();
			}
		}

		$orga1 = UsersOrganization::where('users_id',Auth::user()->id)->delete();
		$orga2 = Input::get('organization');
		if(isset($orga2)){
			foreach($orga2 as $orga2){
				$usersorga = New UsersOrganization();
				$usersorga->des_organization = $orga2;
				$usersorga->users_id = Auth::user()->id;
				$usersorga->save();
			}
		}

		$achi1 = UsersAchievement::where('users_id',Auth::user()->id)->delete();
		$achi2 = Input::get('achievement');
		if(isset($achi2)){
			foreach($achi2 as $achi2){
				$usersachi = New UsersAchievement();
				$usersachi->des_achievement = $achi2;
				$usersachi->users_id = Auth::user()->id;
				$usersachi->save();
			}
		}

		$proj1 = UsersProject::where('users_id',Auth::user()->id)->delete();
		$proj2 = Input::get('project');
		if(isset($proj2))
		{
			foreach($proj2 as $proj2){
				$usersproj = New UsersProject();
				$usersproj->des_project = $proj2;
				$usersproj->users_id = Auth::user()->id;
				$usersproj->save();
			}
		}

		$j=0;
		$lang_score=Input::get('score_l');

//dd($request->input('score_l'));

		$lang1 = UsersLanguageSkill::where('users_id',Auth::user()->id)->delete();
		$lang2 = Input::get('language');
		if(isset($lang2)){
			foreach($lang2 as $lang2){
				$userslang = New UsersLanguageSkill();
				$userslang->des_languageskill = $lang2;
				$userslang->users_id = Auth::user()->id;
				$userslang->score_l = $lang_score[$j];
				$userslang->save();
				$j++;
			}
		}
		
		$i=0;
		$tises_score=Input::get('score_e');
// dd($request->input('score_e'));
		$tise1 = UsersExpertise::where('users_id',Auth::user()->id)->delete();
		$tise2 = Input::get('expertise');
		if(isset($tise2))
		{
			foreach($tise2 as $tise2){
				$userstise = New UsersExpertise();
				$userstise->des_expertise = $tise2;
				$userstise->users_id = Auth::user()->id;
				$userstise->score_e = $tises_score[$i];
				$userstise->save();
				$i++;
			}
		}
		return redirect('setting');
	}

	public function getSetting(){
		//create
		//$user = New User();
		//$user->name = $request->input('name');
		//$user->save();

//dd($request->input('education'));

		//update
		$user = User::where('id',Auth::user()->id)->first();
		$edu = UsersEducation::where('users_id',Auth::user()->id)->get();
		// dd($edu);
		$expe = UsersExperience::where('users_id',Auth::user()->id)->get();
		$socac = UsersSocialActivity::where('users_id',Auth::user()->id)->get();
		$orga = UsersOrganization::where('users_id',Auth::user()->id)->get();
		$achi = UsersAchievement::where('users_id',Auth::user()->id)->get();
		$proj = UsersProject::where('users_id',Auth::user()->id)->get();
		$tise = UsersExpertise::where('users_id',Auth::user()->id)->get();
		$lang = UsersLanguageSkill::where('users_id',Auth::user()->id)->get();
		return view('setting', ['user'=>$user, 'edu'=>$edu, 'expe'=>$expe, 'socac'=>$socac, 'orga'=>$orga, 'achi'=>$achi, 'proj'=>$proj, 'tise'=>$tise, 'lang'=>$lang]);
	}

	public function foll(Request $request)
	{
		
		$following = New Following();
		$following->users_id = Auth::user()->id;
		$following->following_id = $request->input('foll_id');
		$following->save();

		$followers = New Followers();
		$followers->users_id=$request->input('foll_id');
		$followers->followers_id = Auth::user()->id;
		$followers->save();

		$user = User::where('id',Auth::user()->id)->first();
		$countwing = Following::where('users_id',$user->id)->count();
		$countwing = $countwing;
		//dd($countwing);
		$user->following_sum = $countwing;
		$user->save();

		$user = User::where('id',$request->input('foll_id'))->first();
		$countwers = Followers::where('users_id',$user->id)->count();
		//dd($countwers);
		$countwers = $countwers;
		$user->follower_sum = $countwers;
		$user->save();

		return redirect()->back();
	}
}

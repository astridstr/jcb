<?php

namespace App\Http\Controllers\Adminauth;
use Auth;
use App\Admin;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $redirectTo = '/admin';
    protected $guard='admin';
    public function showLoginForm(){
    	if(Auth::guard('admin')->check()){
    		return redirect('admin');
    	}
    	return view('admin.login');
    }

    public function logout(){
    	Auth::guard('admin')->logout();
    	return redirect('admin/login');
    }
}

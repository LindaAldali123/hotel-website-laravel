<?php

namespace App\Http\Controllers\AuthAdmin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminLogController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesAdmins;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::dashboard3;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
    public function showLoginForm(){
        return view('auth.Adminlog');
    }
    public function loginadmin(Request $request){
        $this->validate($request,[
         'email'=>'required|email',
         'password'=>'required|min:6'
        ]);
        $credential=[
            'email'=>$request->email,
            'password'=>$request->password
        ];
        if(Auth::guard('admin')->attempt($request->member)){
            return redirect()->intended(route('view.dashboard3'));
        }
        //return redirect()->back()withInput($request->only('email','remember'));
    }
}

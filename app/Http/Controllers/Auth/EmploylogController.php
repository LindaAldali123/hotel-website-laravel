<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class EmploylogController extends Controller
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

    use AuthenticatesEmployees;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::dashboard2;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:employee')->except('logout');
    }
    public function showLoginForm(){
        return view('auth.Employlog');
    
}
public function loginemployee(Request $request){
    $this->validate($request,[
     'email'=>'required|email',
     'password'=>'required|min:6'
    ]);
    $credential=[
        'email'=>$request->email,
        'password'=>$request->password
    ];
    if(Auth::guard('employee')->attempt($request->member)){
        return redirect()->intended(route('view.dashboard2'));
    }
    //return redirect()->back()withInput($request->only('email','remember'));
}
}

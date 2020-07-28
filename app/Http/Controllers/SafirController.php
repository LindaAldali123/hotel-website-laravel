<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employees;
use App\User;
use App\reservations;
use DB;
use Illuminate\Database\QueryException;
class SafirController extends Controller
{

    public function main_page()
    {
    return view('welcome');
    }


public function contact()
{
return view('contact');
}


public function login()
{
return view('imag');
}

public function Employlog()
{
    return view('Employlog');
}
public function addemp()
{
    return view('ADDEMP');
}

public function blogs()
{
    return view('login');
}


public function register()
{

return view('register_page');
}


public function AdminLog()
{
    return view('AdminLog');
}


public function Reser()
{
    return view('reservation');
}
public function dash1()
{
    return view('dashboard1');
}
public function dash2()
{
    return view('dashboard2');
}
public function dash3()
{
return view('dashboard3');
}
public function pay()
{
return view('payment');
}
public function bill()
{
return view('bill');
}
public function show()
{
  $results=employees::all();
//$results = DB::select('select * from employees');
return view('dashboard3',compact('results'));
}
public function show2()
{
  $res=User::all();
  $reserv = DB::select('select * from reservations');
//$result = DB::select('select * from employees');
return view('dashboard2',compact('res','reserv'));
}
public function coun()
{
  $count=reservations::count();
return view('reservation',compact('count'));
}
public function show3()
{
  //$res=User::all();
$serv = DB::select('select * from services');
return view('dashboard1',compact('serv'));
}
public function showbill()
{
  //$res=User::all();
$bil = DB::select('select * from bills');
return view('bill',compact('bil'));
}

public function delet2($id)
{
    //User::all()->where('id','=',$id)->delete();
  //  $users=DB::table('users')->get();
 DB::table('users')->where('id','=',$id)->delete();
 return redirect('dashboard2');

}

public function delet4($id)
{
    //User::all()->where('id','=',$id)->delete();
  //  $users=DB::table('users')->get();
 DB::table('reservations')->where('id','=',$id)->delete();
 return redirect('dashboard2');

}
public function delet3($id)
{
  DB::table('employees')->where('id','=',$id)->delete();
  return redirect('dashboard3');

}
public function store(Request $request)
{
    
 $request->validate([
   'cid'=>'required',
     'member' =>'required',
     'name' =>'required',
     'period' =>'required',
 ]);
 //DB::insert('insert into reservations(member,period) values($request->member,$request->period)');
 //$reservation=new reservations();
 $count=reservations::count();
 $cid= $request->input('cid');
 $name= $request->input('name');
 $member= $request->input('member');
 $room= $request->input('room');
 $period= $request->input('period');
 //$reservation->save();
 $data=array('cid'=>$cid,'room_id'=>$room,'member'=>$member,'period'=>$period,'name'=>$name);
 if($count<'50'){
 DB::table('reservations')->insert($data);
 return redirect('reservation')->with('status','! created');}else{
  echo'<script language="javascript">'; 
   echo'alert("Sory complete reservation in Hotel and we not have empty rooms") ';
  echo '</script>';
  //sleep(8);
  //return redirect('reservation');
 }
}
public function store2(Request $request)
{
    
 $request->validate([
   'num'=>'required',
     'fname' =>'required',
     'mname' =>'required',
     'lname' =>'required',
     'email' =>'required',
     'city' =>'required',
     'street' =>'required',
     'salary' =>'required',
     'name' =>'required',
     'pass' =>'required',
 ]);
 //DB::insert('insert into reservations(member,period) values($request->member,$request->period)');
 //$reservation=new reservations();
 $num= $request->input('num');
 $fname= $request->input('fname');
 $mname= $request->input('mname');
 $lname= $request->input('lname');
 $email= $request->input('email');
 $city= $request->input('city');
 $street= $request->input('street');
 $salary= $request->input('salary');
 $name= $request->input('name');
 $pass= $request->input('pass');
 //$reservation->save();
 $data=array('eid'=>$num,'emp_fn'=>$fname,'emp_mid'=>$mname,'emp_ln'=>$lname,'emp_email'=>$email,'city'=>$city,'street'=>$street,'salary'=>$salary,'user_name'=>$name,'password'=>$pass);
 DB::table('employees')->insert($data);
 return redirect('ADDEMP')->with('status','! created');
}


public function update(Request $request)
{
    
 $request->validate([
   'name'=>'required',
     'email' =>'required',
     'salary' =>'required',
 ]);
 //DB::insert('insert into reservations(member,period) values($request->member,$request->period)');
 //$reservation=new reservations();
 $name= $request->input('name');
 $email= $request->input('email');
 $salary= $request->input('salary');
 //$reservation->save();
 //$data=array('salary'=>$salary);
 //$emp = employees::where(['user_name'=>$name ,'emp_email'=>$email]);
 //if($emp){
 DB::table('employees')->where(['user_name'=>$name ,'emp_email'=>$email])->update(['salary'=>$salary]);
 //DB::update('update employees set salary=$salary where user_name=$name and emp_email=$email  ');
 return redirect('dashboard3')->with('status','! created');
}
//}
/*
public function update2(Request $request)
{
    
 $request->validate([
     'new' =>'required',
 ]);
 $new= $request->input('new');
 $sal=DB::select('select salary from employees');
 DB::table('employees')->update(['salary'=>[$sal*$new]]);
// DB::update('update employees set salary={{$sal}}*$new ');
 return redirect('dashboard3')->with('status','! created');
}*/
public function update3(Request $request)
{
    
 $request->validate([
   'na'=>'required',
     'idd' =>'required',
     'per' =>'required',
 ]);
 //DB::insert('insert into reservations(member,period) values($request->member,$request->period)');
 //$reservation=new reservations();
 $na= $request->input('na');
 $idd= $request->input('idd');
 $per= $request->input('per');
 //$reservation->save();
 //$data=array('salary'=>$salary);
 //$emp = employees::where(['user_name'=>$name ,'emp_email'=>$email]);
 //if($emp){
 DB::table('reservations')->where(['name'=>$na ,'id'=>$idd])->update(['period'=>$per]);
 //DB::update('update employees set salary=$salary where user_name=$name and emp_email=$email  ');
 return redirect('dashboard2')->with('status','! created');
}
//}

public function log(Request $request)
{
    
 $request->validate([
     'email' =>'required',
     'password' =>'required',
 ]);
 $email= $request->input('email');
 $password= $request->input('password');
 //$ad=DB::select('select * from admins');
 //if(DB::table('admins')->where(['email'=>$email ,'password'=>$password])=='true'){
   if($email=='admin@gmail.com'&&$password=='123456789'){
 //DB::update('update employees set salary=$salary where user_name=$name and emp_email=$email  ');
 return redirect('dashboard3')->with('status','! created');
}else{return redirect('AdminLog')->with('status','! created');}}
public function log2(Request $request)
{
    
 $request->validate([
     'email' =>'required',
     'password' =>'required',
 ]);
 $email= $request->input('email');
 $password= $request->input('password');
 if($email=='Employee@gmail.com'&&$password=='987654321'){
 //$ad=DB::select('select * from employees');
 //if(DB::table('employees')->where(['emp_email'=>$email ,'password'=>$password])==true){
  // if($email=='$ad->emp_email'&&$password=='$ad->password'){
 return redirect('dashboard2')->with('status','! created');
}
else{return redirect('Employlog')->with('status','! created');}}






public function storepay(Request $request)
{
    
 $request->validate([
   'cc-payment'=>'required',
     'cc-name' =>'required',
     'cc-number' =>'required',
     'cc-exp' =>'required',
     'x_card_code'=>'required',
     'x_zip'=>'required',
 ]);
 //DB::insert('insert into reservations(member,period) values($request->member,$request->period)');
 //$reservation=new reservations();
 $pay= $request->input('cc-payment');
 $name= $request->input('cc-name');
 $number= $request->input('cc-number');
 $exp= $request->input('cc-exp');
 $code= $request->input('x_card_code');
 $zip= $request->input('x_zip');
 //$reservation->save();
 $data=array('card-number'=>$number,'card_name'=>$name,'payment'=>$pay,'Expiration'=>$exp,'security-code'=>$code,'postal-code'=>$zip);
 DB::table('bills')->insert($data);
 return redirect('payment')->with('status','! created');
}








}

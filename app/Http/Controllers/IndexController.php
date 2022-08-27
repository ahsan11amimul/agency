<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Job;
use App\Models\User;
use App\Models\Invoice;
use App\Models\JobApply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function signup(Request $request)
    {
        //dd($request->all());
     $validateData=$request->validate([
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    $validateData['password']=bcrypt($validateData['password']);
    $user=User::create($validateData);
    Auth::login($user);
    return redirect('/dashboard');
    }
    public function signin(Request $request)
    {
        //dd($request->all());
        $validateData=$request->validate([
            'username' => 'required|string',
            'password' => 'required|string|min:6',
        ]);
        if(Auth::attempt($validateData))
        {
            return redirect('/dashboard');
        }
        else
        {
            return redirect('/')->with('error','Invalid username or password');
        }
    }
    public function forget_password()
    {
        return view('forget_password');
    }
    public function verify_email(Request $request)
    {   //dd($request->all());
        $validateData=$request->validate([
            'email' => 'required|string|email|max:255',
        ]);
        $user=User::where('email',$validateData['email'])->first();
        if(!$user)
        {
           return redirect('/forget_password')->with('error','Invalid email');
        }
        else
        { 
          $email=$request->email;
          return redirect('/reset_password')->with(['success'=>'Email is Valid','email'=>$email]);  
        }
    }
    public function reset_password()
    {
        return view('reset_password');
    }
    public function reset_password_post(Request $request)
    {
        $validateData=$request->validate([
            'password' => 'required|string|min:6|confirmed',
        ]);
        $user=User::where('email',$request->email)->first();
        $user->password=bcrypt($validateData['password']);
        $user->save();
        return redirect('/')->with('success','Password is changed');
    }
    public function dashboard()
    {   $user=Auth::user();
        if($user->is_admin)
        {
            $invoices=Invoice::all();
            return view('admin.index',compact('invoices'));
        }
        else

       {   
            $my_invoices=Invoice::where('user_id',$user->id)->get();
            //dd($my_invoices);
            $my_jobs=JobApply::with('job')->where('user_id',$user->id)->get();
            $pending_jobs=JobApply::with('job')->where('user_id',$user->id)->where('status','pending')->get();
            $todays_jobs=Job::whereDate('created_at', Carbon::today())->get();
            $yestarDays_jobs=Job::whereDate('created_at', Carbon::yesterday())->get();
            return view('user.index',compact('my_invoices','my_jobs','pending_jobs','todays_jobs','yestarDays_jobs'));
        }
    
    }
    // logout
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
 }

<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Invoice;
use App\Models\JobApply;
use App\Models\JobDecline;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobPortalController extends Controller
{
    //
    public function index()
    {   
        $jobs = Job::all();
        $latest=Job::orderBy('created_at','desc')->take(3)->get();
        $my_jobs=JobApply::with('job')->where('user_id',auth()->user()->id)->get();
    
        return view('job_portal.index',compact('jobs','latest','my_jobs'));
    }
    public function job_application($id)
    {
        $job=Job::find($id);
        return view('job_portal.job_application',compact('job'));
    }
    
    public function job_apply(Request $request)
    {
        //dd($request->all());
      $job_id=$request->job_id;
      $invoice_name=$request->name;
      $invoice_total=$request->total;
      $user_id=auth()->user()->id;
      $check_user=JobApply::where('job_id',$job_id)->where('user_id',$user_id)->first();
      if(!$check_user){
        $job_apply=JobApply::create([
            'job_id'=>$job_id,
            'user_id'=>$user_id,
            'status'=>'pending',
            'nte'=>$request->nte,
            'resulation'=>$request->resulation,
            'agree'=>$request->agree,
            'requirements'=>$request->requirements,
            'covid'=>$request->covid,
            'food'=>$request->food,
        ]);
        //generate Invoice
        $invoice=new Invoice();
        $invoice->job_id=$job_id;
        $invoice->user_id=$user_id;
        $invoice->status='In Review';
        $invoice->name=$invoice_name;
        $invoice->amount=$invoice_total;
        $invoice->save();
        //dd($invoice);
        $notification=array(
            'message'=>'Job Applied Successfully',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
       }else
       {
        $notification=array(
            'message'=>'You have already applied for this job',
            'alert-type'=>'error'
        );
        return redirect()->back()->with($notification);
       }
    }
    public function job_decline(Request $request)
    {
        $service_decline=new JobDecline();
        $service_decline->service_id=$request->service_id;
        $service_decline->user_id=auth()->user()->id;
        $service_decline->save();
        $notification = array(
            'message' => 'Job Declined Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}

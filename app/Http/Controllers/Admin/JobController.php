<?php

namespace App\Http\Controllers\Admin;

use App\Models\Job;
use App\Models\User;
use App\Models\Service;
use App\Models\JobApply;
use App\Mail\JobApproved;
use App\Mail\JobDeclined;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs=JobApply::with('job','user')->get();
        $services=Service::all();
        //dd($jobs);
        return view('admin_jobs.index',compact('jobs','services'));
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
        $validateData=$request->validate([
            'service_id'=>'required',
            'title'=>'required',
            'job_type'=>'required',
            'job_location'=>'required',
            'description'=>'required',
            
        ]);
        $job=Job::create($validateData);
        $notification=array(
            'message'=>'Job Created Successfully',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
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
        $job=Job::find($id);
        return $job;
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
        $job=Job::findOrFail($id);
        $validateData=$request->validate([
            'service_id'=>'required',
            'title'=>'required',
            'job_type'=>'required',
            'job_location'=>'required',
            'description'=>'required',
            
        ]);
        $job->update($validateData);
        $notification=array(
            'message'=>'Job Application Updated Successfully',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job=Job::find($id);
        $job->delete();
        $notification = array(
            'message' => 'Job Application Declined successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    //for applied jobs
    public function approve($id)
    {
        $job=JobApply::findOrFail($id);
        $user_id=$job->user_id;
        $user_email=User::find($user_id)->email;
        $job_id=$job->job_id;
        $job_application=Job::findOrFail($job_id);
        $job->status="Approved";
        $job->save();
        Mail::to($user_email)->send(new JobApproved($job_application));
        echo "Approved";
    }
    public function decline($id)
    {
        $job=JobApply::findOrFail($id);
        $user_id=$job->user_id;
        $user_email=User::find($user_id)->email;
        $job_id=$job->job_id;
        $job_application=Job::findOrFail($job_id);
        $job->status="Declined";
        $job->save();
        
        Mail::to($user_email)->send(new JobDeclined($job_application));
        $notification = array(
            'message' => 'Job Application Declined successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    // job application
    public function application()
    {
        $jobs=Job::all();
        $services=Service::all();
        //dd($jobs);
        return view('job_application.index',compact('jobs','services'));
    }
}

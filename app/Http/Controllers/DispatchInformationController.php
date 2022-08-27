<?php

namespace App\Http\Controllers;

use App\Models\UserService;
use Illuminate\Http\Request;
use App\Models\DispatchInformation;
use App\Http\Controllers\Controller;

class DispatchInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //dd($request->all());
        
        $validateData=$request->validate([
            'company_name'=>'required',
            'company_contact'=>'required',
            'address_line_1'=>'required',
            'city'=>'required',
            'address_line_2'=>'required',
            'address_line_3'=>'required',
            'state'=>'required',
            'zip_code'=>'required',
            'country'=>'required',
            'primary_email'=>'required',
            'primary_contact'=>'required',
            'other_phone'=>'required',
            'fax'=>'required',
            'receivable_name'=>'required',
            'receivable_email'=>'required',
            'receivable_phone'=>'required',
            'payable_name'=>'required',
            'payable_email'=>'required',
            'payable_phone'=>'required',
            'contact_name'=>'required',
            'contact_email'=>'required',
            'contact_phone'=>'required',

        ]);
        //check user service is exist or not
        $user=DispatchInformation::where('user_id',auth()->user()->id)->first();
        if($user){
          $notification=array(
            'message'=>'You already have a dispatch information',
            'alert-type'=>'error'
          );
            return redirect()->back()->with($notification);
        }else{
        $validateData['user_id']=auth()->user()->id;
       // dd($request->services);
        $dispatch_information=DispatchInformation::create($validateData);
        //dd($dispatch_information);
        foreach ($request->services as $key => $value) {
            $userService=new UserService();
            $userService->user_id=auth()->user()->id;
            $userService->service_id=$key;
            $userService->save();
          }
        }
        $notification=array(
            'message'=>'Dispatch Information Created Successfully',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DispatchInformation  $dispatchInformation
     * @return \Illuminate\Http\Response
     */
    public function show(DispatchInformation $dispatchInformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DispatchInformation  $dispatchInformation
     * @return \Illuminate\Http\Response
     */
    public function edit(DispatchInformation $dispatchInformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DispatchInformation  $dispatchInformation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DispatchInformation $dispatchInformation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DispatchInformation  $dispatchInformation
     * @return \Illuminate\Http\Response
     */
    public function destroy(DispatchInformation $dispatchInformation)
    {
        //
    }
}

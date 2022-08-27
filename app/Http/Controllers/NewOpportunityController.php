<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceArea;
use Illuminate\Http\Request;
use App\Models\ServiceDecline;
use App\Http\Controllers\Controller;

class NewOpportunityController extends Controller
{
    //
    public function index()
    {   $services=Service::all();
        $service_areas=ServiceArea::all();
        $service_declined=ServiceDecline::where('user_id',auth()->user()->id)->get();
        //dd($services);
        return view('new_opportunity.index',compact('services','service_areas'));
    }
    public function service_decline(Request $request)
    {
        $service_decline=new ServiceDecline();
        $service_decline->service_id=$request->service_id;
        $service_decline->user_id=auth()->user()->id;
        $service_decline->save();
        $notification = array(
            'message' => 'Service Declined Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}

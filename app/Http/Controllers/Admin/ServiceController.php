<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use App\Models\ServiceArea;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=Service::all();
        $service_areas=ServiceArea::all();
        return view('service_admin.index',compact('services','service_areas'));
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
            'name' => 'required|string|max:255',
            'rate' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'service_area_id' => 'required|integer',
        ]);
        if($request->file('image'))
        {
            $image=$request->file('image');
            $image_name=time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'),$image_name);
            $validateData['image']=$image_name;
        }
        $service=Service::create($validateData);
        $notification = array(
            'message' => 'Service Created Successfully',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {  //dd($id); 
        $service=Service::findOrFail($id);
       // dd($service);
        return view('new_opportunity.detail',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service=Service::find($id);
        return $service;
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
        $service=Service::findOrFail($id);
        $validateData=$request->validate([
            'name' => 'required|string|max:255',
            'rate' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'service_area_id' => 'required|integer',
        ]);
        // if(request()->hasFile('image') && request('image') != '') {
        // $imagePath = public_path('images/'.$service->image);
        // if(File::exists($imagePath)){
        //     unlink($imagePath);
        // }
        // $image=$request->file('image');
        // $image_name=time().'.'.$image->getClientOriginalExtension();
        // $image->move(public_path('images'),$image_name);
        // $validateData['image']=$image_name;
        // dd($validateData);
        // }
        $service->update($validateData);
        $notification = array(
            'message' => 'Service Updated Successfully',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service=Service::findOrFail($id);
        $service->delete();
        $notification = array(
            'message' => 'Service Deleted Successfully',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }
}

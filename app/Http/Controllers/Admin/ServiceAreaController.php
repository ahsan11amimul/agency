<?php

namespace App\Http\Controllers\Admin;

use App\Models\ServiceArea;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $service_areas = ServiceArea::all();
        //dd($service_areas);
        return view('service_area.index',compact('service_areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('service_area.create');
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
            'address' => 'required|string|max:255',
            'distance' => 'required|string|max:255',
        ]);
        $service_area = ServiceArea::create($validateData);
        $notification = array(
            'message' => 'Service Area Created Successfully',
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
        $service_area = ServiceArea::findOrFail($id);
        return $service_area;
        //dd($service_areas);
        //return view('service_area.index',compact('service_area'));
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
        $validateData=$request->validate([
            'address' => 'required|string|max:255',
            'distance' => 'required|string|max:255',
        ]);
        $service_area = ServiceArea::findOrFail($id);
        $service_area->update($validateData);
        $notification = array(
            'message' => 'Service Area Updated Successfully',
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
        $service_area=ServiceArea::find($id);
        $service_area->delete();
        $notification = array(
            'message' => 'Service Area deleted successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}

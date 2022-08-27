<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceAvailableController extends Controller
{
    //
    public function index()
    {   
        $services = \App\Models\Service::all();
        return view('service_available.index',compact('services'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccountInformation;
use App\Http\Controllers\Controller;

class CompanyProfileController extends Controller
{
    //
    public function index()
    {  
       $account=AccountInformation::where('user_id',auth()->user()->id)->first();
       //dd($account);
       return view('company.index',compact('account'));
    }
}

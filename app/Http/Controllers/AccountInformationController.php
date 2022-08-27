<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccountInformation;
use App\Http\Controllers\Controller;
use Smalot\PdfParser\Parser;

class AccountInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
       $validateData= $request->validate([
            'payment_preference' => 'required',
             
            'account_type' => 'required',
            'bank_name' => 'required',
            'bank_routing_number' => 'required',
            'bank_account_number' => 'required',
            'address_nickname' => 'required',
            'name' => 'required',
            'address_line_1' => 'required',
            'address_line_2' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'contact_email' => 'required',
            'po_email' => 'required',
            'pay_term' => 'required',
            'account_nickname' => 'required',
            'bank_location' => 'required',
            'preferred_currency' => 'required',
            'payment_method' => 'required',
            'remittance_email' => 'required',
        ]);
       // dd($validateData);
        $validateData['user_id'] = auth()->user()->id;
        $validateData['complete_address']=$validateData['city'].' '.$validateData['state'].' '.$validateData['zip_code'].' '.$validateData['country'];
       
        $account_information = AccountInformation::create($validateData);
        $notification = array(
            'message' => 'Account Information Created Successfully',
            'alert-type' => 'success'
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AccountInformation $account_information)
    {
        
        $account_information->update($request->all());
        $notification = array(
            'message' => 'Account Information Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AccountInformation $account_information)
    {
       // dd($account_information);
        $account_information->delete();
        $notification = array(
            'message' => 'Account Information Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function certificate(Request $request)
    {
        $validateData=$request->validate([
            'certificate' => 'required|mimes:pdf,doc,docx,jpg,jpeg,png',
        ]);
        $user_id=auth()->user()->id;
        $account=AccountInformation::where('user_id',$user_id)->first();
        if($account)
        {
        $image=$request->file('certificate');
        //read file and parse it to get the text
        $pdfParser = new Parser();
        $pdf = $pdfParser->parseFile($image->path());
        $content = $pdf->getText();
        $content=strtolower($content);
        $content=str_replace(' ','',$content);
        $content=str_replace('-','',$content);
        $content=str_replace(':','',$content);
        $content=preg_replace("/\s+/", " ", $content);
        $content=str_replace('.','',$content);
        $expire_pos=strpos($content,'expire');
        $expire_date=substr($content,$expire_pos+7,10);
        $certificate_pos=strpos($content,'certificate');
        $certificate_number=substr($content,$certificate_pos+11,9);



        $image_name=time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('pdf'),$image_name);
        $validateData['certificate']=$image_name;
        $validateData['expire_date']=date('Y-m-d');
        $validateData['certificate_number']='2345-4567';
       
        $account->update($validateData);
        $notification = array(
            'message' => 'Certificate Uploaded Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
        }else
        {
            $notification = array(
                'message' => 'Please Create Account Information First',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
        
        
    }
    public function download(Request $request)
    {
        $user_id=auth()->user()->id;
        $account=AccountInformation::where('user_id',$user_id)->first();
        if($account)
        {
            $file_path=public_path('pdf/'.$account->certificate);
            return response()->download($file_path);
        }else
        {
            $notification = array(
                'message' => 'Please Create Account Information First',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
    public function viewPdf(Request $request)
    {
        $user_id=auth()->user()->id;
        $account=AccountInformation::where('user_id',$user_id)->first();
        if($account)
        {
            $file_path=public_path('pdf/'.$account->certificate);
            return response()->file($file_path);
        }else
        {
            $notification = array(
                'message' => 'Please Create Account Information First',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
    
}

<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Validator;
use Str;
use Redirect;

class CisFormController extends Controller
{
     public function index()
    {
        return view('frontend.cis-form');
    }

    /* for CIS form submission */

    public function CisInsert(Request $request){

        $data = request()->all();


        $validator = Validator::make($data, [  
        'name' => ['required'],
        'phone' => ['required'],
         'email' => ['required','email'],
        'residential' => ['required'],
         'occupation' => ['nullable'],
        'date_of_birth' => ['required'],
        'plot_number' => ['required'],
         'lifted' => ['required'],
         'layout' => ['required'],
        'agent_name' => ['required'],
        'agent_phone' => ['required'],
         'agent_address' => ['required'],
        'agent_occupation' => ['required'],
         'agent_office' => ['required'],
        
         
        ]);


 if ($validator->fails()) {
         return back()
         ->withInput()
         ->withErrors($validator);
        }
        else{
        $fullname = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $residential_address = $request->input('residential');
        $occupation =$request->input('occupation');
        $date_of_birth = $request->input('date_of_birth');
        $plot_number = $request->input('plot_number');
        $lifted=$request->input('lifted');
        $amount=$request->input('amount');
        $layout = $request->input('layout');
        $agent_name = $request->input('agent_name');
        $agent_phone = $request->input('agent_phone');
        $agent_address= $request->input('agent_address');
        $agent_occupation = $request->input('agent_occupation');
        $agent_office = $request->input('agent_office');

        $calculated_amount=$plot_number * 24000;
       

        $data=array(
            'fullname'=>$fullname,
            'phone' =>$phone,
            'email' =>$email,
            'residential_address' =>$residential_address,
            'occupation' =>$occupation,
            'DOB' =>$date_of_birth,
            'plot_number' =>$plot_number,
            'lifted' =>$lifted,
            'layout' =>$layout,
            'amount' =>$calculated_amount,
            'agent_name' =>$agent_name,
            'agent_phone' => $agent_phone,
            'agent_address'=> $agent_address,
            'agent_occupation' => $agent_occupation,
            'agent-office_address'=> $agent_office,  
        );
            $submitted= DB::table('cis')->insert($data);
        if ($submitted) {
            return redirect()->back()->with('success', 'Sumission successful');

    }

       else{
        return redirect()->back()->with('error', 'Submission Failed. please try Again.');
       }
    }
  }
}


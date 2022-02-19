<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Contactus;
class Contactcont extends Controller
{
    public function insert1(Request $request)
    {
        $name=$request->post('name');
        $phonenumber=$request->post('phonenumber');
        $email=$request->post('Email');
        $message=$request->post('Message');
        $Contactus=new Contactus;
        $Contactus->name=$name;
        $Contactus->phonenumber=$phonenumber;
        $Contactus->email=$email;
        $Contactus->message=$message;
        $insertdata=$Contactus->save();
        if($insertdata)
        
        {
            return redirect()->route('index');
        }

    }
}

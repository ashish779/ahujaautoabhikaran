<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Bookservices;
class BookserviceController extends Controller
{
    public function insert2(Request $request)
    {
        $name=$request->post('Name');
        $contactno=$request->post('ContactNo');
        $addvehical=$request->post('vehicalnumber');
        $email=$request->post('Email');
        $car=$request->post('car');
        $varient=$request->post('Variants');
        $Bookservice=new Bookservices;
        $Bookservice->name=$name;
        $Bookservice->contactno=$contactno;
        $Bookservice->vehicalnumber=$addvehical;
        $Bookservice->email=$email;
        $Bookservice->car=$car;
        $Bookservice->varient=$varient;
        $inserted=$Bookservice->save();
        if($inserted)
        {
            return back()->with('success',"Order has been successfuly  submitted");
        }
      
     
    }
}

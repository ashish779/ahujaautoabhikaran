<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceModel;
use App\Models\enquiryModel;
use App\Models\insuranceModel;

class PagesController extends Controller
{
    public function submitServiceAppointment(Request $request){     
    // dd('over');       
        $location_arr = array('Indore');
        $car = array("Mahindra-TUV-300-Plus", "Mahindra-Nuvo-Sport", "Mahindra-Bolero", "Mahindra-Bolero-Power-+", "Mahindra-Thar", "Mahindra-TUV-300", "Mahindra-Verito-Vibe", "The-Plush-New-XUV-500", "Mahindra-Xylo", "Mahindra-Verito", "Mahindra-Scorpio", "Mahindra-KUV-100-NXT");

        $name = $request->post('name');
        $email = $request->post('email');
        $contact = $request->post('contact');
        $location = $request->post('location');
        $vehicle_number = $request->post('vehicle_number');
        $carModel = $request->post('carModel');
        $variant = $request->post('variant');

        if($name==null || $name=='' || strlen($name)<2){
            exit(json_encode(array('status'=>'failed', 'message'=>'Name should be atleast 3 characters')));
        }
        if($email==null || $email=='' || $this->emailStatus($email)==false){
            exit(json_encode(array('status'=>'failed', 'message'=>'Invalid email')));
        }
        if($contact==null || $contact=='' || $this->contactNumber($contact)==false){
            exit(json_encode(array('status'=>'failed', 'message'=>'Invalid contact number')));
        }
        if($location==null || $location=='' || !in_array($location, $location_arr)){
            exit(json_encode(array('status'=>'failed', 'message'=>'Invalid location')));
        }
        if($vehicle_number==null || $vehicle_number==''){
            exit(json_encode(array('status'=>'failed', 'message'=>'Invalid Vehicle Number')));
        }
        if($carModel==null || $carModel=='' || !in_array($carModel, $car)){
            exit(json_encode(array('status'=>'failed', 'message'=>'Invalid car')));
        }
        if($variant==null || $variant==''){
            exit(json_encode(array('status'=>'failed', 'message'=>'Invalid Variant')));
        }

        $serviceAppointment = new ServiceModel;
        $serviceAppointment->name = $request->post('name');
        $serviceAppointment->email = $request->post('email');
        $serviceAppointment->phone_no = $request->post('contact');
        $serviceAppointment->location = $request->post('location');
        $serviceAppointment->vehicle_number = $request->post('vehicle_number');
        $serviceAppointment->car_model = $request->post('carModel');
        $serviceAppointment->variant = $request->post('variant');
        
        $serviceAppointmentSave = $serviceAppointment->save();

        if(!$serviceAppointmentSave){
            exit(json_encode(array('status'=>'failed', 'message'=>'Something went wrong, please try again after sometime')));
        }

        // $msgBody = "Hi," . "<br><br>";
        // $msgBody .= "Thank you for Service Appointment enquiry, " . " our representative will contact you soon." . "<br><br><br>";
        // $msgBody .= "Team Aherauto prime," . "<br>" . "<b>Website</b>: aherautoprime.com";
        // $this->sendEmail($customerEmail, "Received Test Drive enquiry - aherautoprime.com", $msgBody);

        echo json_encode(array('status'=>'success', 'message'=>'Record created successfully'));
        
    }
    public function submitEnquiry(Request $request){            
        // $location_arr = array('Indore');
        // $car = array("Mahindra-TUV-300-Plus", "Mahindra-Nuvo-Sport", "Mahindra-Bolero", "Mahindra-Bolero-Power-+", "Mahindra-Thar", "Mahindra-TUV-300", "Mahindra-Verito-Vibe", "The-Plush-New-XUV-500", "Mahindra-Xylo", "Mahindra-Verito", "Mahindra-Scorpio", "Mahindra-KUV-100-NXT");

        $name = $request->post('name');
        $email = $request->post('email');
        $contact = $request->post('contact');
        $message = $request->post('message');

        if($name==null || $name=='' || strlen($name)<2){
            exit(json_encode(array('status'=>'failed', 'message'=>'Name should be atleast 3 characters')));
        }
        if($email==null || $email=='' || $this->emailStatus($email)==false){
            exit(json_encode(array('status'=>'failed', 'message'=>'Invalid email')));
        }
        if($contact==null || $contact=='' || $this->contactNumber($contact)==false){
            exit(json_encode(array('status'=>'failed', 'message'=>'Invalid contact number')));
        }
        if($message==null || $message==''){
            exit(json_encode(array('status'=>'failed', 'message'=>'Invalid location')));
        }

        $enquiry = new enquiryModel;
        $enquiry->name = $request->post('name');
        $enquiry->email = $request->post('email');
        $enquiry->phone_no = $request->post('contact');
        $enquiry->message = $request->post('message');
        
        $enquirySave = $enquiry->save();

        if(!$enquirySave){
            exit(json_encode(array('status'=>'failed', 'message'=>'Something went wrong, please try again after sometime')));
        }

        // $msgBody = "Hi," . "<br><br>";
        // $msgBody .= "Thank you for Service Appointment enquiry, " . " our representative will contact you soon." . "<br><br><br>";
        // $msgBody .= "Team Aherauto prime," . "<br>" . "<b>Website</b>: aherautoprime.com";
        // $this->sendEmail($customerEmail, "Received Test Drive enquiry - aherautoprime.com", $msgBody);

        echo json_encode(array('status'=>'success', 'message'=>'Record created successfully'));
        
    }
    public function submitInsurance(Request $request){            
        $location_arr = array('Indore');
        $car = array("Mahindra-TUV-300-Plus", "Mahindra-Nuvo-Sport", "Mahindra-Bolero", "Mahindra-Bolero-Power-+", "Mahindra-Thar", "Mahindra-TUV-300", "Mahindra-Verito-Vibe", "The-Plush-New-XUV-500", "Mahindra-Xylo", "Mahindra-Verito", "Mahindra-Scorpio", "Mahindra-KUV-100-NXT");

        $insuranceType = $request->post('insuranceType');
        $carModel = $request->post('carModel');
        $variant = $request->post('variant');
        $name = $request->post('name');
        $email = $request->post('email');
        $location = $request->post('location');
        $contactNo = $request->post('contact');
        $year = $request->post('year');
        if($insuranceType==null || $insuranceType=='' ){
            exit(json_encode(array('status'=>'failed', 'message'=>'Invalid Insurance Type')));
        }
        if($carModel==null || $carModel=='' || !in_array($carModel, $car)){
            exit(json_encode(array('status'=>'failed', 'message'=>'Invalid car')));
        }
        if($variant==null || $variant==''){
            exit(json_encode(array('status'=>'failed', 'message'=>'Invalid location')));
        }
        if($name==null || $name=='' || strlen($name)<2){
            exit(json_encode(array('status'=>'failed', 'message'=>'Name should be atleast 3 characters')));
        }
        if($email==null || $email=='' || $this->emailStatus($email)==false){
            exit(json_encode(array('status'=>'failed', 'message'=>'Invalid email')));
        }
        if($contactNo==null || $contactNo=='' || $this->contactNumber($contactNo)==false){
            exit(json_encode(array('status'=>'failed', 'message'=>'Invalid contact number')));
        }
        if($location==null || $location=='' || !in_array($location, $location_arr)){
            exit(json_encode(array('status'=>'failed', 'message'=>'Invalid location')));
        }
        if($year==null || $year==''){
            exit(json_encode(array('status'=>'failed', 'message'=>'Invalid Year')));
        }

        $insurance = new insuranceModel;
        $insurance->insurance_type = $request->post('insuranceType');
        $insurance->car_model = $request->post('carModel');
        $insurance->variant = $request->post('variant');
        $insurance->name = $request->post('name');
        $insurance->email = $request->post('email');
        $insurance->phone_no = $request->post('contact');
        $insurance->location = $request->post('location');
        $insurance->year = $request->post('year');
        
        $insuranceSave = $insurance->save();

        if(!$insuranceSave){
            exit(json_encode(array('status'=>'failed', 'message'=>'Something went wrong, please try again after sometime')));
        }

        // $msgBody = "Hi," . "<br><br>";
        // $msgBody .= "Thank you for Service Appointment enquiry, " . " our representative will contact you soon." . "<br><br><br>";
        // $msgBody .= "Team Aherauto prime," . "<br>" . "<b>Website</b>: aherautoprime.com";
        // $this->sendEmail($customerEmail, "Received Test Drive enquiry - aherautoprime.com", $msgBody);

        echo json_encode(array('status'=>'success', 'message'=>'Record created successfully'));
        
    }

    public function contactNumber($number){
        if((strlen($number)<10) || (strlen($number)>13) || (substr_count($number,0)==13) || !is_numeric($number)){
            return false;
        }
        return true;
    }

    public function emailStatus($user_email){
        $email = filter_var($user_email, FILTER_SANITIZE_EMAIL);
        if(filter_var($email, FILTER_VALIDATE_EMAIL)===false){
            return false;
        }
        return true;
    }
}

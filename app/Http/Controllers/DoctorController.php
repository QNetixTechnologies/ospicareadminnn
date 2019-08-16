<?php
/**
 * Created by PhpStorm.
 * User: Tivas-Technologies
 * Date: 2/26/19
 * Time: 3:32 PM
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use Softon\SweetAlert\Facades\SWAL;

class DoctorController extends APIBaseController
{

    public function saveDoctorFirebaseIDAndroid(Request $request){

        $userid = $request->doctorid;
        $deviceid = $request->deviceid;

        $user = \App\DoctorEntity::where("id", $userid)->first();
        $user->firebase_android = $deviceid;
        $isSaved = $user->save();

        if ($isSaved){
            return $this->sendResponse($user, 'Saved');
        }else{
            return $this->sendResponse("failed", 'Please try again');
        }

    }

    public function doctorAPILogin(Request $request){

        $email = Input::get('email');
        $password = Input::get('password');

        $count = \App\DoctorEntity::where("email", $email)->where("password",$password)->count();

        if($count == 1){

            $user = \App\DoctorEntity::where("email", $email)->first();
            $status = $user->status;
            $fullNames = $user->names;

            $response = [
                'success' => true,
                'data' => $user,
                'message' => "User Login successfully."
            ];
            return Response::json($response, 200 );

        }else{

            $response = [
                'success' => false,
                'data' => null,
                'message' => "Invalid Email or Password...Please try again!!!"
            ];
            return Response::json($response, 200 );

        }


    }

    public function registerDoctorAPI(Request $request){

        $names = $request->names;
        $email = $request->email;
        $specialty = $request->specialty;
        $phonenumber = $request->phonenumber;
        $password = $request->password;
        $hospitalid = $request->hospitalid;

        $user = new \App\DoctorEntity();
        $user->names = $names;
        $user->email = $email;
        $user->specialty = $specialty;
        $user->phone_number = $phonenumber;
        $user->password = $password;
        $user->status = 'disable';
        $user->code = mt_rand(100000, 999999);
        $user->hospital_id = $hospitalid;
        $user->availability = 'available';

        $isSaved = $user->save();

        if ($isSaved){
            return $this->sendResponse($user, 'Doctor created successfully.');
        }else{
            return $this->sendResponse("failed", 'Please try again');
        }

    }

    public function registerUpdateDoctorAPI(Request $request){

        $doctorid = $request->doctorid;
        $registeringbody = $request->registeringbody;
        $registrationnumber = $request->registrationnumber;
        $profile = $request->profile;

        $doctor = \App\DoctorEntity::find($doctorid);
        $doctor->profile = $profile;
        $doctor->registering_body = $registeringbody;
        $doctor->registration_number = $registrationnumber;

        $isSaved = $doctor->save();

        if ($isSaved){
            return $this->sendResponse($doctor, 'Doctor Profile Updated');
        }else{
            return $this->sendResponse("failed", 'Please try again');
        }


    }

    public function getDoctorsByHospital(Request $request){

        $hospital_id = $request->hospital_id;

        $patient = \App\DoctorEntity::where("hospital_id", $hospital_id)->get();

        return $this->sendResponse($patient, 'Doctors Retrieved');

    }

    public function getAvailableDoctors(Request $request){

        $doctors = \App\DoctorEntity::where("availability", "available")->get();

        return $this->sendResponse($doctors, 'Doctors Retrieved');

    }

}
<?php
/**
 * Created by PhpStorm.
 * User: Tivas-Technologies
 * Date: 8/5/2018
 * Time: 11:49 AM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;

class UserApiController extends APIBaseController
{

    public function saveUserFirebaseIDAndroid(Request $request){

        $userid = $request->userid;
        $deviceid = $request->deviceid;


        $user = \App\UserEntity::where("id", $userid)->first();
        $user->firebase_android = $deviceid;
        $isSaved = $user->save();

        if ($isSaved){
            return $this->sendResponse($user, 'Saved');
        }else{
            return $this->sendResponse("failed", 'Please try again');
        }

    }

    public function registerUserAPI(Request $request){

        $names = $request->names;
        $email = $request->email;
        $phonenumber = $request->phonenumber;
        $password = $request->password;
        $hospitalid = $request->hospitalid;

        $user = new \App\UserEntity();
        $user->names = $names;
        $user->email = $email;
        $user->phone_number = $phonenumber;
        $user->password = $password;
        $user->status = 'disable';
        $user->code = mt_rand(100000, 999999);
        $user->hospital_id = $hospitalid;

        $isSaved = $user->save();

        if ($isSaved){
            return $this->sendResponse($user, 'User created successfully.');
        }else{
            return $this->sendResponse("failed", 'Please try again');
        }

    }




    public function saveaddress(Request $request){

        $id = $request->userid;
        $address = $request->address;
        $city = $request->city;
        $state = $request->state;

        $user = \App\UserEntity::where("id", $id)->first();

        $user->address = $address;
        $user->city = $city;
        $user->state = $state;
        $isSaved = $user->save();

        if ($isSaved){
            return $this->sendResponse("successful", 'successful');
        }else{
            return $this->sendResponse("failed", 'Referrer Not Added!!!...Please try again');
        }

    }

    public function saveregisteringbody(Request $request){
        $id = $request->userid;
        $registeringbody = $request->registeringbody;
        $registrationnumber = $request->registrationnumber;

        $user = \App\UserEntity::where("id", $id)->first();

        $user->registering_body = $registeringbody;
        $user->registration_number = $registrationnumber;
        $isSaved = $user->save();

        if ($isSaved){
            return $this->sendResponse("successful", 'successful');
        }else{
            return $this->sendResponse("failed", ' Not Saved!!!...Please try again');
        }
    }



}
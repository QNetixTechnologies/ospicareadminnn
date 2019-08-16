<?php
/**
 * Created by PhpStorm.
 * User: Tivas-Technologies
 * Date: 2/26/19
 * Time: 3:35 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Softon\SweetAlert\Facades\SWAL;

class HospitalController extends APIBaseController
{

    public function hospitalAdminAPILogin(Request $request){

        $email = Input::get('email');
        $password = Input::get('password');



        $count = \App\UserEntity::where("email", $email)->where("password",$password)->count();



        if($count == 1){

            $user = DB::table('hospital_table')
                ->join('user_table', 'hospital_id', '=', 'hospital_table.id')
                ->select('hospital_table.*','user_table.id as userid', 'user_table.names', 'user_table.email', 'user_table.phone_number', 'user_table.hospital_id')
                ->where('user_table.email', '=', $email)
                ->where('user_table.password', '=', $password)
                ->get();



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

    public function registerHospitalAPI(Request $request){

        $healthCareName = $request->healthcarename;
        $address = $request->address;
        $city = $request->city;
        $state = $request->state;

        $hospital = new \App\HospitalEntity();
        $hospital->health_centre_name = $healthCareName;
        $hospital->address = $address;
        $hospital->city = $city;
        $hospital->state = $state;
        $isSaved = $hospital->save();

        if ($isSaved){
            return $this->sendResponse($hospital, 'successful');
        }else{
            return $this->sendResponse("failed", ' Not Saved!!!...Please try again');
        }


    }

}
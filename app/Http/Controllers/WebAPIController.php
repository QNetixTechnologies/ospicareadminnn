<?php
/**
 * Created by PhpStorm.
 * User: Tivas-Technologies
 * Date: 2/1/2019
 * Time: 8:38 AM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;


class WebAPIController extends APIBaseController
{

    public function getDoctors(Request $request){

        $userid = $request->userid;

        $doctors = \App\UserEntity::where("is_doctor", "yes")->orderBy('created_at', 'DESC')->get();

        return $this->sendResponse($doctors, 'Doctors Retrieved successfully.');

    }

}
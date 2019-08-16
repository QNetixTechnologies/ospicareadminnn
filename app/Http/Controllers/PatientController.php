<?php
/**
 * Created by PhpStorm.
 * User: Tivas-Technologies
 * Date: 3/7/2019
 * Time: 8:34 AM
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use Softon\SweetAlert\Facades\SWAL;

class PatientController extends APIBaseController
{

    public function getPatientCountByCategory(Request $request){
        $userid = $request->userid;

        $generalHealthCount = \App\PatientEntity::where("patient_type_id", "1")->count();

        $laborHealthCount = \App\PatientEntity::where("patient_type_id", "2")->count();

        $response = [
            'success' => true,
            'generalhealthcount' => $generalHealthCount,
            'laborcount' => $laborHealthCount
        ];
        return Response::json($response, 200 );

    }

    public function getLaborPatientCount(Request $request){
        $userid = $request->userid;

        $count = \App\PatientEntity::where("patient_type_id", "2")->count();

        return $this->sendResponse($count, 'Successful');
    }

    public function addGeneralWardPatientAPI(Request $request){

        $hospital_id = $request->hospital_id;
        $doctor_id = $request->doctor_id;
        $patient_id = $request->patient_id;
        $patient_hospital_id = $request->patient_hospital_id;
        $user_id = $request->user_id;
        $age = $request->age;
        $sex = $request->sex;
        $address = $request->address;
        $names = $request->names;

        $patient = new \App\PatientEntity();
        $patient->hospital_id = $hospital_id;
        $patient->doctor_id = $doctor_id;
        $patient->patient_id = $patient_id;
        $patient->patient_hospital_id = $patient_hospital_id;
        $patient->user_id = $user_id;
        $patient->patient_type_id = 1;
        $patient->age = $age;
        $patient->sex = $sex;
        $patient->names = $names;
        $patient->address = $address;
        $patient->status = 'enable';

        $isSaved = $patient->save();

        if ($isSaved){
            return $this->sendResponse($patient, 'Patient created successfully');
        }else{
            return $this->sendResponse("failed", 'Please try again');
        }

    }

    public function addLaborWardPatientAPI(Request $request){

        $hospital_id = $request->hospital_id;
        $doctor_id = $request->doctor_id;
        $patient_id = $request->patient_id;
        $user_id = $request->user_id;
        $phone_number = $request->phone_number;
        $address = $request->address;
        $names = $request->names;

        $patient = new \App\PatientEntity();
        $patient->hospital_id = $hospital_id;
        $patient->doctor_id = $doctor_id;
        $patient->patient_id = $patient_id;
        $patient->user_id = $user_id;
        $patient->patient_type_id = 2;
        $patient->phone_number = $phone_number;
        $patient->names = $names;
        $patient->address = $address;
        $patient->status = 'enable';

        $isSaved = $patient->save();

        if ($isSaved){
            return $this->sendResponse($patient, 'Patient created successfully');
        }else{
            return $this->sendResponse("failed", 'Please try again');
        }

    }


    public function getGeneralWardPatient(Request $request){

        $hospital_id = $request->hospital_id;

        $patient = \App\PatientEntity::where("hospital_id", $hospital_id)->where("patient_type_id", 1)->orderBy("created_at", "desc")->get();

        return $this->sendResponse($patient, 'Patient Retrieved');

    }

    public function getLaborWardPatient(Request $request){

        $hospital_id = $request->hospital_id;

        $patient = \App\PatientEntity::where("hospital_id", $hospital_id)->where("patient_type_id", 2)->orderBy("created_at", "desc")->get();

        return $this->sendResponse($patient, 'Patient Retrieved');

    }

    public function getAntenatalPatient(Request $request){

        $hospital_id = $request->hospital_id;

        $patient = \App\PatientEntity::where("hospital_id", $hospital_id)->where("patient_type_id", 3)->orderBy("created_at", "desc")->get();

        return $this->sendResponse($patient, 'Patient Retrieved');

    }

    public function addPatientInfo(Request $request){



        $temperature_value = $request->temperature_value;
        $temperature_value_score = $request->temperature_value_score;

        $diastolic_pressure_score = $request->diastolic_pressure_score;
        $diastolic_pressure_value = $request->diastolic_pressure_value;

        $systolic_pressure_score = $request->systolic_pressure_score;
        $systolic_pressure_value = $request->systolic_pressure_value;

        $respiratory_rate_value = $request->respiratory_rate_value;
        $respiratory_rate_value_score = $request->respiratory_rate_value_score;

        //"oxygen_saturation_scale1_value","oxygen_saturation_scale1_value_score", "oxygen_saturation_scale2_value", "oxygen_saturation_scale2_value_score"

        $oxygen_saturation_value = $request->oxygen_saturation_value;
        $oxygen_saturation_value_score = $request->oxygen_saturation_value_score;

        $oxygen_saturation_scale1_value = $request->oxygen_saturation_scale1_value;
        $oxygen_saturation_scale1_value_score = $request->oxygen_saturation_scale1_value_score;

        $oxygen_saturation_scale2_value = $request->oxygen_saturation_scale2_value;
        $oxygen_saturation_scale2_value_score = $request->oxygen_saturation_scale2_value_score;

        $alertness_value = $request->alertness_value;
        $alertness_value_score = $request->alertness_value_score;

        $heart_rate_value = $request->heart_rate_value;
        $heart_rate_value_score = $request->heart_rate_value_score;

        $is_action_taken = $request->is_action_taken;
        $action_taken = $request->action_taken;

        $request_review = $request->request_review;
        $total_score = $request->total_score;


        $hospital_id = $request->hospital_id;
        $user_id = $request->user_id;
        $patient_id = $request->patient_id;

        $patient = \App\PatientEntity::find($patient_id)->first();
        $patientIdentififcation = $patient->patient_id;
        $assigned_doctor = $patient->assigned_doctor;




        /*$doctor = \App\DoctorEntity::where("id", $assigned_doctor)->first();
        $firebase_android = $doctor->firebase_android;
        $firebase_ios = $doctor->firebase_ios;*/



        $patientInfo = new \App\PatientInfoEntity();
        $patientInfo->respiratory_rate_value = $respiratory_rate_value;
        $patientInfo->respiratory_rate_value_score = $respiratory_rate_value_score;
        $patientInfo->oxygen_saturation_value = $oxygen_saturation_value;
        $patientInfo->oxygen_saturation_value_score = $oxygen_saturation_value_score;
        $patientInfo->oxygen_saturation_scale1_value = $oxygen_saturation_scale1_value;
        $patientInfo->oxygen_saturation_scale1_value_score = $oxygen_saturation_scale1_value_score;
        $patientInfo->oxygen_saturation_scale2_value = $oxygen_saturation_scale2_value;
        $patientInfo->oxygen_saturation_scale2_value_score = $oxygen_saturation_scale2_value_score;
        $patientInfo->alertness_value = $alertness_value;
        $patientInfo->alertness_value_score = $alertness_value_score;
        $patientInfo->temperature_value = $temperature_value;
        $patientInfo->temperature_value_score = $temperature_value_score;
        $patientInfo->heart_rate_value = $heart_rate_value;
        $patientInfo->heart_rate_value_score = $heart_rate_value_score;
        $patientInfo->systolic_pressure_score = $systolic_pressure_score;
        $patientInfo->systolic_pressure_value = $systolic_pressure_value;
        $patientInfo->diastolic_pressure_score = $diastolic_pressure_score;
        $patientInfo->diastolic_pressure_value = $diastolic_pressure_value;
        $patientInfo->is_action_taken = $is_action_taken;
        $patientInfo->action_taken = $action_taken;
        $patientInfo->request_review = $request_review;
        $patientInfo->total_score = $total_score;
        $patientInfo->hospital_id = $hospital_id;
        $patientInfo->user_id = $user_id;
        $patientInfo->patient_id = $patient_id;

        $isSaved = $patientInfo->save();

        if ($isSaved){

            $title = "Patient: " . $patientIdentififcation . " Update";
            $message = $patientIdentififcation . " - " . $action_taken;



            //$this->sendPushToDevice($title, $message, $firebase_android);

            return $this->sendResponse($patientInfo, 'Info Addedd!!');
        }else{
            return $this->sendResponse("failed", 'Please try again');
        }

    }


    public function getLatestPatientInfo(Request $request){

        $patient_id = $request->patient_id;

        $patientInfo = \App\PatientInfoEntity::where("patient_id", $patient_id)->orderBy("created_at", "desc")->first();

        return $this->sendResponse($patientInfo, 'Info Retrieved!!');

    }

    public function getPatientInfo(Request $request){

        $patient_id = $request->patient_id;

        $patientInfo = \App\PatientInfoEntity::where("patient_id", $patient_id)->get();

        return $this->sendResponse($patientInfo, 'Info Retrieved!!');

    }


    public function assignPatientToDoctor(Request $request){
        $patientID = $request->patientid;
        $doctorID = $request->doctorid;



        $patient = \App\PatientEntity::where("id", $patientID)->first();
        $patient->assigned_doctor = $doctorID;
        $isSaved = $patient->save();

        if ($isSaved){
            return $this->sendResponse($patient, 'Doctor Assigned');
        }else{
            return $this->sendResponse("failed", 'Please try again');
        }

    }

    public function sendPushToDevice($title, $message, $deviceID){

        $push = new \App\Push($title,$message,null);
        $mPushNotification = $push->getPush();
        $firebase = new \App\Firebase();
        $output = $firebase->send($deviceID, $mPushNotification, $title, $message);

        //dd ($output);
    }


    public function getGeneralWardLatestPatientHistory(Request $request){

        $patientID = $request->patient_id;

        $latest = \App\PatientInfoEntity::where("patient_id", $patientID)->orderBy("created_at", "desc")->first();


        $createdAt = $latest->created_at;

        //dd($createdAt);

        //$latest = \App\PatientInfoEntity::where("patient_id", $patientID)->orderBy("created_at", "desc")->first();

        $date = date('Y-m-d', strtotime($createdAt));

        $data = \App\PatientInfoEntity::where("patient_id", $patientID)->where("created_at", "like", $date . "%")->orderBy("created_at", "desc")->get();

        return $this->sendResponse($data, 'Retrieved');

    }

    public function getGeneralWardPatientHistoryByDate(Request $request){

        $patientID = $request->patient_id;
        $date = $request->date;

        $data = \App\PatientInfoEntity::where("patient_id", $patientID)->where("created_at", "like", $date . "%")->orderBy("created_at", "desc")->get();

        return $this->sendResponse($data, 'Retrieved');

    }

    public function requestReviewInHouse(Request $request){

        $doctorID = $request->doctorid;
        $patientID = $request->patientid;
        $requestID =$request->requestid;


        $requestReview = new \App\RequestReviewModel();
        $requestReview->doctor_id = $doctorID;
        $requestReview->patient_id = $patientID;
        $requestReview->patient_info_id = $requestID;
        $isSaved = $requestReview->save();

        if ($isSaved){

            $count = \App\DoctorEntity::where("id", $doctorID)->count();

            if ($count > 0){

                $doctor = \App\DoctorEntity::where("id", $doctorID)->first();
                $firebase_android = $doctor->firebase_android;
                $firebase_ios = $doctor->firebase_ios;

                $title = "Patient Requires Review";
                $message = "Patient Requires Review";

                //$this->sendPushToDevice($title, $message, $firebase_android);

            }



            $response = [
                'success' => true,
                'message' => 'success',
            ];
            return Response::json($response, 200 );

        }else{

            $response = [
                'success' => false,
                'message' => 'failed',
            ];
            return Response::json($response, 200 );

        }



    }

    public function addGeneralHealthProforma(Request $request){

        $complaint = $request->complaint;
        $post_medical_history = $request->post_medical_history;
        $medical_history = $request->medical_history;
        $drug_allergy = $request->drug_allergy;
        $is_smoking = $request->is_smoking;
        $smoking_unit = $request->smoking_unit;
        $alcohol = $request->alcohol;
        $alcohol_unit = $request->alcohol_unit;
        $recreational_drugs = $request->recreational_drugs;
        $recreational_drugs_type = $request->recreational_drugs_type;
        $occupation = $request->occupation;
        $mobility_status = $request->mobility_status;
        $review_of_system = $request->review_of_system;
        $established_signs = $request->established_signs;
        $febrile = $request->febrile;
        $febrile_value = $request->febrile_value;
        $jaundice = $request->jaundice;
        $jaundice_value = $request->jaundice_value;
        $cyanosis = $request->cyanosis;
        $cynosis_value = $request->cynosis_value;
        $dehydrated = $request->dehydrated;
        $dehydrated_value = $request->dehydrated_value;
        $finger_clubbing = $request->finger_clubbing;
        $pedal_edema = $request->pedal_edema;
        $pedal_edema_value = $request->pedal_edema_value;
        $hospital_id = $request->hospital_id;
        $doctor_id = $request->doctor_id;
        $patient_id = $request->patient_id;
        $user_id = $request->user_id;

        $proforma = new \App\GeneralHealthProformaModel();
        $proforma->complaint = $complaint;
        $proforma->post_medical_history = $post_medical_history;
        $proforma->medical_history = $medical_history;
        $proforma->drug_allergy = $drug_allergy;
        $proforma->is_smoking = $is_smoking;
        $proforma->smoking_unit = $smoking_unit;
        $proforma->alcohol = $alcohol;
        $proforma->alcohol_unit = $alcohol_unit;
        $proforma->recreational_drugs = $recreational_drugs;
        $proforma->recreational_drugs_type = $recreational_drugs_type;
        $proforma->occupation = $occupation;
        $proforma->mobility_status = $mobility_status;
        $proforma->review_of_system = $review_of_system;
        $proforma->established_signs = $established_signs;
        $proforma->febrile = $febrile;
        $proforma->febrile_value = $febrile_value;
        $proforma->jaundice = $jaundice;
        $proforma->jaundice_value = $jaundice_value;
        $proforma->cyanosis = $cyanosis;
        $proforma->cynosis_value = $cynosis_value;
        $proforma->dehydrated = $dehydrated;
        $proforma->dehydrated_value = $dehydrated_value;
        $proforma->finger_clubbing = $finger_clubbing;
        $proforma->pedal_edema = $pedal_edema;
        $proforma->pedal_edema_value = $pedal_edema_value;
        $proforma->hospital_id = $hospital_id;
        $proforma->doctor_id = $doctor_id;
        $proforma->patient_id = $patient_id;
        $proforma->user_id = $user_id;
        $isSaved = $proforma->save();

        if ($isSaved){
            return $this->sendResponse($proforma, 'success');
        }else{
            return $this->sendResponse('failed', 'failed');
        }

    }



}
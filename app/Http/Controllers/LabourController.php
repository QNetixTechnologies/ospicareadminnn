<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Softon\SweetAlert\Facades\SWAL;


class LabourController extends APIBaseController
{

    public function addLabourPatientAPI(Request $request){

        $hospital_id = $request->hospital_id;
        $doctor_id = $request->doctor_id;
        $patient_id = $request->patient_id;
        $user_id = $request->user_id;
        $phone_number = $request->phone_number;
        $address = $request->address;
        $names = $request->names;
        $age = $request->age;
        $dob = $request->dob;

        $patient = new \App\PatientEntity();
        $patient->hospital_id = $hospital_id;
        $patient->doctor_id = $doctor_id;
        $patient->patient_id = $patient_id;
        $patient->user_id = $user_id;
        $patient->patient_type_id = 2;
        $patient->phone_number = $phone_number;
        $patient->sex = 'female';
        $patient->names = $names;
        $patient->address = $address;
        $patient->age = $age;
        $patient->dob = $dob;
        $patient->status = 'enable';

        $isSaved = $patient->save();

        if ($isSaved){
            return $this->sendResponse($patient, 'Patient created successfully');
        }else{
            return $this->sendResponse("failed", 'Please try again');
        }


    }

    public function LabourController(Request $request){


        $remark = $request->remark;
        $pelvic_assess_req = $request->pelvic_assess_req;
        $cervical_dilation = $request->cervical_dilation;
        $impression = $request->impression;
        $plan = $request->plan;

        $patient_id = $request->patient_id;
        $user_id = $request->user_id;
        $hospital_id = $request->hospital_id;
        $doctor_id = $request->doctor_id;
        $patient_type_id = $request->patient_type_id;

        $exam = new \App\VaginalExaminationModel();
        $exam->remark = $remark;
        $exam->pelvic_assess_req = $pelvic_assess_req;
        $exam->cervical_dilation = $cervical_dilation;
        $exam->impression = $impression;
        $exam->plan = $plan;

        $exam->patient_id = $patient_id;
        $exam->user_id = $user_id;
        $exam->hospital_id = $hospital_id;
        $exam->doctor_id = $doctor_id;
        $exam->patient_type_id = $patient_type_id;

        $isSaved = $exam->save();
        if ($isSaved){
            $response = [
                'success' => true,
                'message' => 'success'
            ];
        }else{
            $response = [
                'success' => false,
                'message' => 'failed'
            ];

        }

        return Response::json($response, 200 );

    }

    public function getAntenatalGestationalAge(Request $request){

        $patient_id = $request->patientid;


        $count = \App\AntenatalLaborInfo::where("patient_id", $patient_id)->first();

        if ($count > 0){
            $info = \App\AntenatalLaborInfo::where("patient_id", $patient_id)->first();
            $gestational_age = $info->gestational_age;
        }else{
            $gestational_age = "Not Defined";
        }


        $response = [
            'success' => true,
            'ag' => $gestational_age
        ];

        return Response::json($response, 200 );

    }


    public function getModeOfDelivery(Request $request){

        $patient_id = $request->patientid;

        $count = \App\VaginalExaminationModel::where("patient_id", $patient_id)->count();

        if ($count > 0){
            $info = \App\VaginalExaminationModel::where("patient_id", $patient_id)->first();
            $mode = $info->plan;
        }else{
            $mode = "Not Defined";
        }


        $response = [
            'success' => true,
            'mode' => $mode
        ];

        return Response::json($response, 200 );


    }

    public function getExamination(Request $request){

        $patient_id = $request->patientid;

        $count = \App\VaginalExaminationModel::where("patient_id", $patient_id)->count();

        if ($count > 0){
            $data = \App\VaginalExaminationModel::where("patient_id", $patient_id)->orderBy('created_at', 'desc')->get();
            $success = true;
        }else{
            $success = false;
            $data = null;
        }
        
        $response = [
            'success' => $success,
            'data' => $data
        ];

        return Response::json($response, 200 );

    }

    public function addExamination(Request $request){

        $remark = $request->remark;
        $pelvic_assess_req = $request->pelvic_assess_req;
        $cervical_dilation = $request->cervical_dilation;
        $impression = $request->impression;
        $plan = $request->plan;
        $complaint = $request->complaint;
        $patient_id = $request->patient_id;
        $user_id = $request->user_id;
        $hospital_id = $request->hospital_id;
        $doctor_id = $request->doctor_id;
        $patient_type_id = $request->patient_type_id;

        $examination = new \App\VaginalExaminationModel();
        $examination->remark = $remark;
        $examination->pelvic_assess_req = $pelvic_assess_req;
        $examination->cervical_dilation = $cervical_dilation;
        $examination->impression = $impression;
        $examination->plan = $plan;
        $examination->complaint = $complaint;
        $examination->patient_id = $patient_id;
        $examination->user_id = $user_id;
        $examination->hospital_id = $hospital_id;
        $examination->doctor_id = $doctor_id;
        $examination->patient_type_id = $patient_type_id;
        $isSaved = $examination->save();

        if ($isSaved){

            $response = [
                'status' => 'success'
            ];

        }else{

            $response = [
                'status' => 'failed'
            ];

        }

        return Response::json($response, 200 );

    }

    public function getLabourComplaint(Request $request){

        $patient_id = $request->patientid;

        $count = \App\VaginalExaminationModel::where("patient_id", $patient_id)->count();

        if ($count > 0){
            $data = \App\VaginalExaminationModel::where("patient_id", $patient_id)->orderBy('created_at', 'desc')->get();
            $success = true;
        }else{
            $success = false;
            $data = null;
        }

        $response = [
            'success' => $success,
            'data' => $data
        ];

        return Response::json($response, 200 );

    }

    public function getLabourPartographData(Request $request){

        $patient_id = $request->patientid;

        $assessment = \App\BaselineAssessmentModel::where("patient_id", $patient_id)->get();

        $examination = \App\VaginalExaminationModel::where("patient_id", $patient_id)->get();

        $response = [
            'success' => "success",
            'assessment' => $assessment,
            'examination' => $examination
        ];

        return Response::json($response, 200 );

    }

}
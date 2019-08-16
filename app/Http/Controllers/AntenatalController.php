<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Softon\SweetAlert\Facades\SWAL;


class AntenatalController extends APIBaseController
{

    public function addAntenatalPatientAPI(Request $request){

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
        $patient->patient_type_id = 3;
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

    public function addAntenatalLaborInfoAPI(Request $request){


        $last_menstrual_period = $request->last_menstrual_period;
        $gestational_age = $request->gestational_age;
        $gravidity = $request->gravidity;
        $parity = $request->parity;
        $alive = $request->alive;
        $patient_id = $request->patient_id;
        $hospital_id = $request->hospital_id;
        $doctor_id = $request->doctor_id;
        $user_id = $request->user_id;
        $patient_type_id = $request->patient_type_id;

        $antenatalLaborInfo = new \App\AntenatalLaborInfo();
        $antenatalLaborInfo->last_menstrual_period = $last_menstrual_period;
        $antenatalLaborInfo->gestational_age = $gestational_age;
        $antenatalLaborInfo->gravidity = $gravidity;
        $antenatalLaborInfo->parity = $parity;
        $antenatalLaborInfo->alive = $alive;
        $antenatalLaborInfo->patient_id = $patient_id;
        $antenatalLaborInfo->hospital_id = $hospital_id;
        $antenatalLaborInfo->doctor_id = $doctor_id;
        $antenatalLaborInfo->user_id = $user_id;
        $antenatalLaborInfo->patient_type_id = $patient_type_id;
        $isSaved = $antenatalLaborInfo->save();

        if ($isSaved){

            return $this->sendResponse($antenatalLaborInfo, 'success');
        }else{
            return $this->sendResponse("failed", 'Please try again');
        }



    }

    
    public function addMedicalHistory(Request $request){


        $hypertension = $request->hypertension;
        $previous_hyper_in_preg = $request->previous_hyper_in_preg;
        $diabetes_mellitus = $request->diabetes_mellitus;
        $previous_dm_in_preg = $request->previous_dm_in_preg;
        $heart_disease = $request->heart_disease;
        $still_birth = $request->still_birth;
        $post_partum_haemorrhage = $request->post_partum_haemorrhage;
        $ante_partum_haemorrhage = $request->ante_partum_haemorrhage;
        $two_more_miscarriages = $request->two_more_miscarriages;
        $h_macrosomia_45kg = $request->h_macrosomia_45kg;
        $h_low_birth_weight = $request->h_low_birth_weight;
        $h_birth_defects = $request->h_birth_defects;
        $history_of_clot = $request->history_of_clot;
        $myomectomy = $request->myomectomy;
        $previous_c_s = $request->previous_c_s;
        $number_of_c_s = $request->number_of_c_s;
        $epileptic = $request->epileptic;
        $asthmatic = $request->asthmatic;
        $patient_id = $request->patient_id;
        $user_id = $request->user_id;
        $hospital_id = $request->hospital_id;
        $doctor_id = $request->doctor_id;
        $patient_type_id = $request->patient_type_id;

        $medicalHistory = new \App\MedicalHistoryModel();
        $medicalHistory->hypertension = $hypertension;
        $medicalHistory->previous_hyper_in_preg = $previous_hyper_in_preg;
        $medicalHistory->diabetes_mellitus = $diabetes_mellitus;
        $medicalHistory->previous_dm_in_preg = $previous_dm_in_preg;
        $medicalHistory->heart_disease = $heart_disease;
        $medicalHistory->still_birth = $still_birth;
        $medicalHistory->post_partum_haemorrhage = $post_partum_haemorrhage;
        $medicalHistory->ante_partum_haemorrhage = $ante_partum_haemorrhage;
        $medicalHistory->two_more_miscarriages = $two_more_miscarriages;
        $medicalHistory->h_macrosomia_45kg = $h_macrosomia_45kg;
        $medicalHistory->h_low_birth_weight = $h_low_birth_weight;
        $medicalHistory->h_birth_defects = $h_birth_defects;
        $medicalHistory->history_of_clot = $history_of_clot;
        $medicalHistory->myomectomy = $myomectomy;
        $medicalHistory->previous_c_s = $previous_c_s;
        $medicalHistory->number_of_c_s = $number_of_c_s;
        $medicalHistory->epileptic = $epileptic;
        $medicalHistory->asthmatic = $asthmatic;
        $medicalHistory->patient_type_id = $patient_type_id;

        $medicalHistory->patient_id = $patient_id;
        $medicalHistory->user_id = $user_id;
        $medicalHistory->doctor_id = $doctor_id;
        $medicalHistory->patient_type_id = 3;
        $medicalHistory->hospital_id = $hospital_id;
        $isSaved = $medicalHistory->save();

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

    public function addSocialHistory(Request $request){

        $marital_status = $request->marital_status;
        $responsible_partner = $request->responsible_partner;
        $employment_status = $request->employment_status;
        $substance_abuse = $request->substance_abuse;
        $substance_abuse_type = $request->substance_abuse_type;
        $smoker = $request->smoker;
        $hiv_status = $request->hiv_status;
        $patient_id = $request->patient_id;
        $user_id = $request->user_id;
        $hospital_id = $request->hospital_id;
        $doctor_id = $request->doctor_id;
        $patient_type_id = $request->patient_type_id;

        $socialHistory = new \App\SocialHistoryModel();
        $socialHistory->marital_status = $marital_status;
        $socialHistory->responsible_partner = $responsible_partner;
        $socialHistory->employment_status = $employment_status;
        $socialHistory->substance_abuse = $substance_abuse;
        $socialHistory->substance_abuse_type = $substance_abuse_type;
        $socialHistory->smoker = $smoker;
        $socialHistory->hiv_status = $hiv_status;
        $socialHistory->patient_id = $patient_id;
        $socialHistory->user_id = $user_id;
        $socialHistory->hospital_id = $hospital_id;
        $socialHistory->doctor_id = $doctor_id;
        $socialHistory->patient_type_id = $patient_type_id;
        $isSaved = $socialHistory->save();

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

    public function addBaselineAssessment(Request $request){


        $blood_pressure = $request->blood_pressure;
        $heart_rate = $request->heart_rate;
        $temperature = $request->temperature;
        $symphysis_fundal_height = $request->symphysis_fundal_height;
        $fetal_heart_tone = $request->fetal_heart_tone;
        $fetal_heart_rate = $request->fetal_heart_rate;
        $lie = $request->lie;
        $presentation = $request->presentation;
        $position = $request->position;
        $descent = $request->descent;



        $patient_id = $request->patient_id;
        $user_id = $request->user_id;
        $hospital_id = $request->hospital_id;
        $doctor_id = $request->doctor_id;
        $patient_type_id = $request->patient_type_id;


        $baselineAssessment = new \App\BaselineAssessmentModel();
        $baselineAssessment->blood_pressure = $blood_pressure;
        $baselineAssessment->heart_rate = $heart_rate;
        $baselineAssessment->temperature = $temperature;
        $baselineAssessment->symphysis_fundal_height = $symphysis_fundal_height;
        $baselineAssessment->fetal_heart_tone = $fetal_heart_tone;
        $baselineAssessment->fetal_heart_rate = $fetal_heart_rate;
        $baselineAssessment->lie = $lie;
        $baselineAssessment->presentation = $presentation;
        $baselineAssessment->position = $position;
        $baselineAssessment->descent = $descent;
        $baselineAssessment->patient_id = $patient_id;
        $baselineAssessment->user_id = $user_id;
        $baselineAssessment->hospital_id = $hospital_id;
        $baselineAssessment->doctor_id = $doctor_id;
        $baselineAssessment->patient_type_id = $patient_type_id;
        $isSaved = $baselineAssessment->save();
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


    public function addBaselineInvestigation(Request $request){


        $hiv = $request->hiv;
        $HBrAg = $request->HBrAg;
        $HCV = $request->HCV;
        $blood_group = $request->blood_group;
        $hemoglobin = $request->hemoglobin;
        $urinalysis = $request->urinalysis;


        $patient_id = $request->patient_id;
        $user_id = $request->user_id;
        $hospital_id = $request->hospital_id;
        $doctor_id = $request->doctor_id;
        $patient_type_id = $request->patient_type_id;

        $baselineInvestigation = new \App\BaselineInvestigationModel();
        $baselineInvestigation->hiv = $hiv;
        $baselineInvestigation->HBrAg = $HBrAg;
        $baselineInvestigation->HCV = $HCV;
        $baselineInvestigation->blood_group = $blood_group;
        $baselineInvestigation->hemoglobin = $hemoglobin;
        $baselineInvestigation->urinalysis = $urinalysis;
        $baselineInvestigation->patient_id = $patient_id;
        $baselineInvestigation->user_id = $user_id;
        $baselineInvestigation->hospital_id = $hospital_id;
        $baselineInvestigation->doctor_id = $doctor_id;
        $baselineInvestigation->patient_type_id = $patient_type_id;

        $isSaved = $baselineInvestigation->save();
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

    public function addLaborCategory(Request $request){


        $risk_status = $request->risk_status;
        $mode_of_delivery = $request->mode_of_delivery;

        $patient_id = $request->patient_id;
        $user_id = $request->user_id;
        $hospital_id = $request->hospital_id;
        $doctor_id = $request->doctor_id;
        $patient_type_id = $request->patient_type_id;

        $category = new \App\AntenatalCategoryModel();
        $category->risk_status = $risk_status;
        $category->mode_of_delivery = $mode_of_delivery;
        $category->patient_id = $patient_id;
        $category->user_id = $user_id;
        $category->hospital_id = $hospital_id;
        $category->doctor_id = $doctor_id;
        $category->patient_type_id = $patient_type_id;

        $isSaved = $category->save();
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

    public function addLaborComplaint(Request $request){

        // "patient_id","user_id", "hospital_id", "doctor_id", "patient_type_id", "created_at"];

        $complaint = $request->complaint;
        $impression = $request->impression;
        $action_taken = $request->action_taken;
        $request_review = $request->request_review;
        $doctor_to_review = $request->doctor_to_review;
        $urgency_status = $request->urgency_status;
        $review_status = $request->review_status;

        $patient_id = $request->patient_id;
        $user_id = $request->user_id;
        $hospital_id = $request->hospital_id;
        $doctor_id = $request->doctor_id;
        $patient_type_id = $request->patient_type_id;

        $complaintImpression = new \App\ComplaintImpressionModel();
        $complaintImpression->complaint = $complaint;
        $complaintImpression->impression = $impression;
        $complaintImpression->action_taken = $action_taken;
        $complaintImpression->request_review = $request_review;
        $complaintImpression->doctor_to_review = $doctor_to_review;
        $complaintImpression->urgency_status = $urgency_status;
        $complaintImpression->review_status = $review_status;
        $complaintImpression->patient_id = $patient_id;
        $complaintImpression->user_id = $user_id;
        $complaintImpression->hospital_id = $hospital_id;
        $complaintImpression->doctor_id = $doctor_id;
        $complaintImpression->patient_type_id = $patient_type_id;

        $isSaved = $complaintImpression->save();
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

    public function  getMedicalSocialHistory(Request $request){

        $patient_id = $request->patientid;

        $social = \App\SocialHistoryModel::where ("patient_id", $patient_id)->orderBy("created_at", "desc")->get();

        $medical = \App\MedicalHistoryModel::where("patient_id", $patient_id)->orderBy("created_at", "desc")->get();

        $response = [
            'message' => 'success',
            "social" => $social,
            "medical" => $medical
        ];

        return Response::json($response, 200 );


    }

    public function getAntenatalAssessment(Request $request){

        $patient_id = $request->patientid;

        $assessment = \App\BaselineAssessmentModel::where("patient_id", $patient_id)->orderBy("created_at", "desc")->get();

        $response = [
            'message' => 'success',
            "assessment" => $assessment
        ];

        return Response::json($response, 200 );
        
    }

}
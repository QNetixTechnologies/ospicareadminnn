<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('doctorAPILogin', "DoctorController@doctorAPILogin");

Route::post('hospitalAdminAPILogin', "HospitalController@hospitalAdminAPILogin");

Route::post('registerHospitalAPI', "HospitalController@registerHospitalAPI");

Route::post('registerUserAPI', "UserApiController@registerUserAPI");

Route::post('registerDoctorAPI', "DoctorController@registerDoctorAPI");

Route::post('saveUserFirebaseIDAndroid', "UserApiController@saveUserFirebaseIDAndroid");

Route::post('saveDoctorFirebaseIDAndroid', "DoctorController@saveDoctorFirebaseIDAndroid");

Route::post('registerUpdateDoctorAPI', "DoctorController@registerUpdateDoctorAPI");


Route::post('getPatientCountByCategory', "PatientController@getPatientCountByCategory");


Route::post('addGeneralWardPatientAPI', "PatientController@addGeneralWardPatientAPI");

//Route::post('addLaborWardPatientAPI', "PatientController@addLaborWardPatientAPI");

Route::post('getGeneralWardPatient', "PatientController@getGeneralWardPatient");

Route::post('getLaborWardPatient', "PatientController@getLaborWardPatient");

Route::post('getDoctorsByHospital', "DoctorController@getDoctorsByHospital");

Route::post('addPatientInfo', "PatientController@addPatientInfo");

Route::post('getLatestPatientInfo', "PatientController@getLatestPatientInfo");

Route::post('getPatientInfo', "PatientController@getPatientInfo");

Route::post('getAvailableDoctors', "DoctorController@getAvailableDoctors");

Route::post('assignPatientToDoctor', "PatientController@assignPatientToDoctor");

Route::post('getGeneralWardLatestPatientHistory', "PatientController@getGeneralWardLatestPatientHistory");

Route::post('getGeneralWardPatientHistoryByDate', "PatientController@getGeneralWardPatientHistoryByDate");

Route::post('requestReviewInHouse', "PatientController@requestReviewInHouse");

Route::post('addGeneralHealthProforma', "PatientController@addGeneralHealthProforma");


///
///
Route::post('register', "UserApiController@register");

Route::post('login', "UserApiController@userLogin");

Route::post('saveaddress', "UserApiController@saveaddress");

Route::post('saveregisteringbody', "UserApiController@saveregisteringbody");

Route::post('getDoctors', "WebAPIController@getDoctors");

//antenatal and labor

Route::post('addAntenatalPatientAPI', "AntenatalController@addAntenatalPatientAPI");

Route::post('addAntenatalLaborInfoAPI', "AntenatalController@addAntenatalLaborInfoAPI");

Route::post('addMedicalHistory', "AntenatalController@addMedicalHistory");

Route::post('addSocialHistory', "AntenatalController@addSocialHistory");

Route::post('addBaselineAssessment', "AntenatalController@addBaselineAssessment");

Route::post('addBaselineInvestigation', "AntenatalController@addBaselineInvestigation");

Route::post('addLaborCategory', "AntenatalController@addLaborCategory");

Route::post('addLaborComplaint', "AntenatalController@addLaborComplaint");

Route::post('addVaginalExamination', "LabourController@addVaginalExamination");

Route::post('getAntenatalPatient', "PatientController@getAntenatalPatient");

Route::post('getMedicalSocialHistory', "AntenatalController@getMedicalSocialHistory");

Route::post('getAntenatalAssessment', "AntenatalController@getAntenatalAssessment");

//labor
Route::post('getAntenatalGestationalAge','LabourController@getAntenatalGestationalAge');

Route::post('getModeOfDelivery','LabourController@getModeOfDelivery');

Route::post('getExamination','LabourController@getExamination');

Route::post('addExamination','LabourController@addExamination');

Route::post('getLabourComplaint','LabourController@getLabourComplaint');

Route::post('addLabourPatientAPI', "LabourController@addLabourPatientAPI");

Route::post('getLabourPartographData', "LabourController@getLabourPartographData");


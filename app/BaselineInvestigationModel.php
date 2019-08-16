<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class BaselineInvestigationModel extends Model
{

    protected $primaryKey = "id";

    protected $table = "baseline_investigation_table";

    protected $fillable = ["hiv", "HBrAg","HCV","blood_group", "hemoglobin", "urinalysis",  "patient_id","user_id", "hospital_id", "doctor_id", "patient_type_id", "created_at"];

}
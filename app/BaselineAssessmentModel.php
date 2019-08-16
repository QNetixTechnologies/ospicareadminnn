<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class BaselineAssessmentModel extends Model
{
    protected $primaryKey = "id";

    protected $table = "baseline_assessment_table";

    protected $fillable = ["blood_pressure", "heart_rate","temperature","symphysis_fundal_height", "fetal_heart_tone", "fetal_heart_rate", "lie", "presentation", "position", "descent",  "patient_id","user_id", "hospital_id", "doctor_id", "patient_type_id", "created_at"];

}
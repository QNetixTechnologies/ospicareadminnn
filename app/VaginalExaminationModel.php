<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class VaginalExaminationModel extends Model
{
    protected $primaryKey = "id";

    protected $table = "vaginal_examination_table";

    protected $fillable = ["remark", "pelvic_assess_req","cervical_dilation","impression", "plan", "complaint", "patient_id","user_id", "hospital_id", "doctor_id", "patient_type_id", "created_at"];

}
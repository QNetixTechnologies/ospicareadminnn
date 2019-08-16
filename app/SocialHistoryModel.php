<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class SocialHistoryModel extends Model
{
    protected $primaryKey = "id";

    protected $table = "social_history_table";

    protected $fillable = ["marital_status", "responsible_partner","employment_status","substance_abuse", "substance_abuse_type", "smoker", "hiv_status",  "patient_id","user_id", "hospital_id", "doctor_id", "patient_type_id", "created_at"];

}
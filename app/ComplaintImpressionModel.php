<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class ComplaintImpressionModel extends Model
{
    protected $primaryKey = "id";

    protected $table = "complaint_impression_table";

    protected $fillable = ["complaint", "impression","action_taken","request_review", "doctor_to_review", "urgency_status", "review_status", "patient_id","user_id", "hospital_id", "doctor_id", "patient_type_id", "created_at"];

}
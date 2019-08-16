<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class AntenatalCategoryModel extends Model
{
    protected $primaryKey = "id";

    protected $table = "labor_category_table";

    protected $fillable = ["risk_status", "mode_of_delivery", "patient_id","user_id", "hospital_id", "doctor_id", "patient_type_id", "created_at"];

}
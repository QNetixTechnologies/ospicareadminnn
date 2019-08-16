<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class AntenatalLaborInfo extends Model
{
    protected $primaryKey = "id";

    protected $table = "labor_antenatal_info_table";

    protected $fillable = ["last_menstrual_period", "gestational_age","gravidity","parity", "alive", "patient_id","user_id", "hospital_id", "doctor_id", "patient_type_id", "created_at"];

}
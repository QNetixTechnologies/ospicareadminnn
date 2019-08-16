<?php
/**
 * Created by PhpStorm.
 * User: Tivas-Technologies
 * Date: 3/10/2019
 * Time: 8:45 AM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientInfoEntity extends Model
{


    protected $primaryKey = "id";

    protected $table = "patient_info_table";

    protected $fillable = ["total_score","request_review","respiratory_rate_value", "respiratory_rate_value_score","oxygen_saturation_value", "oxygen_saturation_value_score","oxygen_saturation_scale1_value","oxygen_saturation_scale1_value_score", "oxygen_saturation_scale2_value", "oxygen_saturation_scale2_value_score","alertness_value","alertness_value_score","temperature_value","temperature_value_score","heart_rate_value","heart_rate_value_score", "systolic_pressure_score", "systolic_pressure_value", "diastolic_pressure_score", "diastolic_pressure_value", "is_action_taken", "action_taken", "hospital_id", "user_id", "patient_id", "created_at"];


}
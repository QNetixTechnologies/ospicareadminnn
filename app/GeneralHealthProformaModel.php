<?php
/**
 * Created by PhpStorm.
 * User: Tivas-Technologies
 * Date: 7/18/2019
 * Time: 12:57 AM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeneralHealthProformaModel extends Model
{
    protected $primaryKey = "id";

    protected $table = "general_health_profoma_table";

    protected $fillable = ["complaint","post_medical_history","medical_history","drug_allergy","is_smoking","smoking_unit","alcohol","alcohol_unit","recreational_drugs","recreational_drugs_type","occupation","mobility_status","review_of_system","established_signs","febrile","febrile_value","jaundice","jaundice_value","cyanosis","cynosis_value","dehydrated","dehydrated_value","finger_clubbing","pedal_edema","pedal_edema_value", "hospital_id", "doctor_id", "patient_id", "user_id", "created_at"];

}
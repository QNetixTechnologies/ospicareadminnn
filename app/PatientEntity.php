<?php
/**
 * Created by PhpStorm.
 * User: Tivas-Technologies
 * Date: 3/7/2019
 * Time: 8:32 AM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientEntity extends Model
{
    protected $primaryKey = "id";

    protected $table = "patient_table";

    protected $fillable = ["patient_hospital_id","dob", "age", "sex","patient_type_id","user_id", "hospital_id", "doctor_id", "patient_id", "names", "phone_number", "address", "status","image_path","created_at"];

}
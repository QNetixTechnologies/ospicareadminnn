<?php
/**
 * Created by PhpStorm.
 * User: Tivas-Technologies
 * Date: 2/26/19
 * Time: 3:26 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorEntity extends Model
{
    protected $primaryKey = "id";

    protected $table = "doctor_table";


    protected $fillable = ["online_consultation_fee", "onsite_consultation_fee","hospital_id", "address_street", "address_lga", "address_state", "availability", "specialty", "profile", "names", "email","phone_number", "sex", "level","password", "status", "token", "image_path", "code",  "is_independent","firebase_android", "firebase_ios", "registering_body", "registration_number", "created_at"];

}
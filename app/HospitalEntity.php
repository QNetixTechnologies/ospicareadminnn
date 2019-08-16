<?php
/**
 * Created by PhpStorm.
 * User: Tivas-Technologies
 * Date: 2/26/19
 * Time: 3:22 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class HospitalEntity extends Model
{
    protected $primaryKey = "id";

    protected $table = "hospital_table";

    protected $fillable = ["health_centre_name", "address", "city", "state", "code", "status", "created_at"];

}
<?php
/**
 * Created by PhpStorm.
 * User: Tivas-Technologies
 * Date: 7/16/2019
 * Time: 3:05 AM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestReviewModel extends Model
{
    protected $primaryKey = "id";

    protected $table = "patient_request_review_table";

    protected $fillable = ["doctor_id", "patient_id", "patient_info_id", "created_at"];

}
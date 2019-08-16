<?php
/**
 * Created by PhpStorm.
 * User: Tivas-Technologies
 * Date: 7/16/2019
 * Time: 3:20 AM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class GHRecommendationModel extends Model
{
    protected $primaryKey = "id";

    protected $table = "doctor_gh_recommendation_table";

    protected $fillable = ["recommendation", "doctor_id", "patient_id", "created_at"];

}
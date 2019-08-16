<?php
/**
 * Created by PhpStorm.
 * User: Tivas-Technologies
 * Date: 7/18/2019
 * Time: 1:05 AM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeneralHealthProformaImageModel extends Model
{
    protected $primaryKey = "id";

    protected $table = "profoma_images_table";

    protected $fillable = ["image_path", "general_health_profoma_id", "created_at"];

}
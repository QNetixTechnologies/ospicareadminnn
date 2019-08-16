<?php
/**
 * Created by PhpStorm.
 * User: Tivas-Technologies
 * Date: 2/1/2019
 * Time: 3:20 AM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserEntity extends Model
{
    protected $primaryKey = "id";

    protected $table = "user_table";

    protected $fillable = ["hospital_id", "names", "email","phone_number", "password", "status", "token", "image_path", "code", "firebase_android", "firebase_ios", "created_at"];

}
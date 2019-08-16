<?php
/**
 * Created by PhpStorm.
 * User: Tivas-Technologies
 * Date: 5/22/2018
 * Time: 2:35 PM
 */

namespace App;




class AdminEntity extends Model
{
    protected $primaryKey = "id";

    protected $table = "admin_table";

    protected $fillable = ["full_names", "email", "password", "status", "token", "role", "created_at"];

}
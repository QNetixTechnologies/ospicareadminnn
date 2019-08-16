<?php
/**
 * Created by PhpStorm.
 * User: Tivas-Technologies
 * Date: 5/22/2018
 * Time: 4:20 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\AdminEntity;
use App\Http\Controllers\Controller;

use Softon\SweetAlert\Facades\SWAL;


class AdminController extends controller
{




    public function allAdmin(){

        $admin = \App\AdminEntity::all();

        return view("adminlist", compact('admin'));
    }


    public function add(Request $request){

        $fullnames = $request->fullnames;
        $email = $request->email;
        $password = $request->password;
        $password = md5($password);
        $status = $request->status;
        $role = $request->role;
        $token = md5($email);


        $cat = \App\AdminEntity::where('email', '=', $email)->first();

        if ($cat === null) {

            $admin = new \APP\AdminEntity();
            $admin->full_names = $fullnames;
            $admin->email = $email;
            $admin->password = $password;
            $admin->status = $status;
            $admin->role = $role;
            $admin->token = $token;
            $isSaved = $admin->save();

            if($isSaved){

                SWAL::message('Successful','Admin Created added!', 'success',['timer'=>2000]);

            }else{
                SWAL::message('Warning','Admin not added!','error',['timer'=>2000]);
            }

        }else{
            SWAL::message('Warning','Email Already Exists!','info',['timer'=>2000]);
        }


        $admin = \App\AdminEntity::all();

        return view("adminlist", compact('admin'));

    }

    public function edit(Request $request){


        $id = $request->editid;
        $editfullnames = $request->editfullnames;
        $editemail = $request->editemail;
        $editstatus = $request->editstatus;
        $editrole = $request->editrole;


        $admin = \App\AdminEntity::find($id);

        $admin->full_names = $editfullnames;
        $admin->email = $editemail;
        $admin->status = $editstatus;
        $admin->role = $editrole;
        $isSaved = $admin->save();


        if ($isSaved){

            SWAL::message('Successful','Operation successfully!', 'success',['timer'=>2000]);

        }else{
            SWAL::message('Warning','Record not updated!','error',['timer'=>2000]);
        }


        $admin = \App\AdminEntity::all();

        return view("adminlist", compact('admin'));

    }


    public function delete(Request $request){

        $id = $request->deleteid;
        $res = \App\AdminEntity::where('id',$id)->delete();

        SWAL::message('Successful','Operation successfully!', 'success',['timer'=>2000]);

        $admin = \App\AdminEntity::all();

        return view("adminlist", compact('admin'));

    }



    public function adminProfile(){

        $adminID = Session::get('ospicareAdminID');

        $admin = AdminEntity::where('id', $adminID)->first();

        return view("adminprofile", compact('admin'));


    }

    public function updateProfile(Request $request){

        $adminid = $request->adminid;
        $fullnames = $request->fullnames;
        $email = $request->email;

        $admin = AdminEntity::where('id', $adminid)->first();

        $admin->full_names = $fullnames;
        $admin->email = $email;

        $isSaved = $admin->save();


        if ($isSaved){

            SWAL::message('Successful','Profile Updated!!!', 'success',['timer'=>2000]);


            $fullnames = $admin->full_names;
            $role = $admin->role;


            $request->session()->put("ospicareFullNames", $fullnames);
            $request->session()->put("ospicareEmail", $email);
            $request->session()->put("ospicareRole", $role);

            return view("adminprofile", compact('admin'));

        }else{
            SWAL::message('Warning','Not updated!','error',['timer'=>2000]);
        }



        return view("adminprofile", compact('admin'));



    }

    public function updatePassword(Request $request){

        $adminID = $request->adminid;
        $oldpassword = $request->oldpassword;
        $oldpassword = md5($oldpassword);

        $newpassword = $request->newpassword;
        $newpassword = md5($newpassword);

        $confirmnewpassword = $request->confirmnewpassword;
        $confirmnewpassword = md5($confirmnewpassword);


        if ($newpassword == $confirmnewpassword){

            $count = \App\AdminEntity::where("id", $adminID)->where("password",$oldpassword)->count();


            if($count == 1){

                $admin = \App\AdminEntity::where("id", $adminID)->first();

                $admin->password = $newpassword;
                $isSaved = $admin->save();
                if ($isSaved){

                    SWAL::message('Successful','Password Updated!!!', 'success',['timer'=>2000]);

                }else{
                    SWAL::message('Warning','Not updated!','error',['timer'=>2000]);
                }

            }else{
                SWAL::message('Warning','Invalid Old Password..Please try again!','error',['timer'=>2000]);
            }


        }else{
            SWAL::message('Warning','Password Mismatch!','error',['timer'=>2000]);
        }

        return view('changepassword', compact('adminID'));
    }

    public function changePassword(){

        $adminID = Session::get('ospicareAdminID');

        return view('changepassword', compact('adminID'));
    }


    public function settings(){

        $sequence = \App\SequenceEntity::where("id", "=", 1)->first();

        $bank = \App\BankInfoEntity::where ("id", "=", 1)->first();


        return view("settings", compact('sequence', 'bank'));
    }

    public function updateSequence(Request $request){

        $sequencenumber = $request->sequence;


        $sequence = \App\SequenceEntity::find(1);

        $sequence->sequence_number = $sequencenumber;
        $isSaved = $sequence->save();


        if ($isSaved){

            SWAL::message('Successful','Operation successfully!', 'success',['timer'=>2000]);

        }else{
            SWAL::message('Warning','Record not updated!','error',['timer'=>2000]);
        }


        $sequence = \App\SequenceEntity::where("id", "=", 1)->first();

        $bank = \App\BankInfoEntity::where ("id", "=", 1)->first();


        return view("settings", compact('sequence', 'bank'));
    }

    public function updateBankInfo(Request $request){

        $info = $request->info;


        $bank = \App\BankInfoEntity::find(1);

        $bank->info = $info;
        $isSaved = $bank->save();


        if ($isSaved){

            SWAL::message('Successful','Operation successfully!', 'success',['timer'=>2000]);

        }else{
            SWAL::message('Warning','Record not updated!','error',['timer'=>2000]);
        }


        $sequence = \App\SequenceEntity::where("id", "=", 1)->first();

        $bank = \App\BankInfoEntity::where ("id", "=", 1)->first();


        return view("settings", compact('sequence', 'bank'));
    }


}
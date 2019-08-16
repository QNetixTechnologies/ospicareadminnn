<?php

namespace App\Http\Controllers;

use App\AdminEntity;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

use Softon\SweetAlert\Facades\SWAL;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function login(){
        return view("login");
    }

    public function loginAction(Request $request){
        $email = $request->email;
        $password = $request->password;
        $password = md5($password);

        $count = \App\AdminEntity::where("email", $email)->where("password",$password)->where('status', 'enable')->count();

        if($count == 1){

            $admin = AdminEntity::where('email', $email)->where('password', $password)->first();

            $fullnames = $admin->full_names;
            $role = $admin->role;
            $id = $admin->id;


            $request->session()->put("ospicareAdminID", $id);
            $request->session()->put("ospicareFullNames", $fullnames);
            $request->session()->put("ospicareEmail", $email);
            $request->session()->put("ospicareRole", $role);

            return redirect("/index");

        }else{
            SWAL::message('Authentication Failed','Invalid Email or Password..Please try again!','error',['timer'=>2000]);
        }

        return view("login");
    }

    public function index(){

        /*$userCount = \App\UserEntity::where('user_type_id', '=', 1)->count();

        $retailerCount = \App\UserEntity::where('user_type_id', '=', 2)->count();

        $totalSaleViaWallet = \App\WalletTransaction::sum('amount');

        $today = date('Y-m-d');
        $todayAirtimeSale = \App\WalletTransaction::where('created_at', 'like', $today . '%')->sum('amount');


        $label = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");


        $sumBills = array(0,0,0,0,0,0,0,0,0,0,0,0);

        $walletReturnValue = $this->totalWalletTransactionnSumByMonth();

        foreach($walletReturnValue as $item){

            $sumBills[$item->month - 1] = $item->amount;

        }

        $chartjs = app()->chartjs
            ->name('BillSummaryBar')
            ->type('bar')
            ->size(['width' => 400, 'height' => 100])
            ->labels($label)
            ->datasets([

                [
                    "label" => "This Month Sales ",
                    'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                    'borderColor' => "rgba(38, 185, 154, 0.7)",
                    "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                    "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                    "pointHoverBackgroundColor" => "#fff",
                    "pointHoverBorderColor" => "rgba(220,220,220,1)",
                    'data' => $sumBills
                ]
            ])
            ->options([]);


        $userReturnValue = $this->totalUserTransactionnSumByMonth();

        $userValue = array(0,0,0,0,0,0,0,0,0,0,0,0);

        foreach($userReturnValue as $item){

            $userValue[$item->month - 1] = $item->amount;

        }


        $userchartjs = app()->chartjs
            ->name('UserSummaryBar')
            ->type('bar')
            ->size(['width' => 400, 'height' => 100])
            ->labels($label)
            ->datasets([

                [
                    "label" => "This Month Total User Purchase ",
                    'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                    'borderColor' => "rgba(38, 185, 154, 0.7)",
                    "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                    "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                    "pointHoverBackgroundColor" => "#fff",
                    "pointHoverBorderColor" => "rgba(220,220,220,1)",
                    'data' => $userValue
                ]
            ])
            ->options([]);


        return view("index", compact('userCount', 'retailerCount', 'chartjs', 'userchartjs', 'totalSaleViaWallet', 'todayAirtimeSale'));
        */

        return view("index");


    }

    public function userList(){
        $users = \App\UserEntity::all();

        return view("users", compact('users'));
    }

    public function doctorList(){
        $users = \App\UserEntity::where("is_doctor", "yes")->get();

        return view("doctors", compact('users'));
    }

}

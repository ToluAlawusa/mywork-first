<?php

namespace App;
use Auth;
use Illuminate\Database\Eloquent\Model;

class attendance_setting extends Model
{
    //

    public static function getAttendanceSettingsById(){

    	$cid = "";

    	//dd(Auth::id());

        $checkEmp = Employee::select('company_id', 'branch_id')->where('user_id', Auth::id())->first();

         // $cid1 = $checkEmp->company_id;
         // $cid2 = $checkEmp->branch_id;

         // dd($cid1.'-'.$cid2);

        if($checkEmp->company_id != Null){
        	$cid = $checkEmp->company_id;
        	$client_list = attendance_setting::where("company_id", $cid)->first();
        	return $client_list;
        } elseif($checkEmp->branch_id != Null) {
        	$cid = $checkEmp->branch_id;
        	$client_list = attendance_setting::where("branch_id", $cid)->first();
        	return $client_list;
        }

    }




}

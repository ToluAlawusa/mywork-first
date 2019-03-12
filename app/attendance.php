<?php

namespace App;

use App\attendance;
use Auth;
use App\Employee;
use App\User;
use Illuminate\Database\Eloquent\Model;

class attendance extends Model
{
    //

    public static function getAttendanceList() {
        
        $cid = "";

        $checkEmp = Employee::select('company_id', 'branch_id')->where('user_id', Auth::id())->first();

        // $days_date = date("F Y");
         //dd($days_date);

         // yet to get the attendance list by month, be sure to do it

        if($checkEmp->company_id != Null){
        	$cid = $checkEmp->company_id;
        	$att_list = attendance::where("company_id", $cid)->with("Employee")->get();
        	return $att_list;
        } elseif($checkEmp->branch_id != Null) {
        	$cid = $checkEmp->branch_id;
        	$att_list = attendance::where("branch_id", $cid)->with("Employee")->get();
        	return $att_list;
        }
    }

    public function Employee(){
        return $this->belongsTo('App\Employee');
    }
}

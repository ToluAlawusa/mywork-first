<?php

namespace App;

use App\Employee;
use App\compliance_policy;
use App\compliance_file;
use Auth;
use Illuminate\Database\Eloquent\Model;

class compliance_policy extends Model
{
    //

    public static function getAllCompliancePolicy() {

        $cid = "";

        $checkEmp = Employee::select('company_id', 'branch_id')->where('user_id', Auth::id())->first();

         //dd($checkEmp);

        if($checkEmp->company_id != Null){
        	$cid = $checkEmp->company_id;
        	$comp_list = compliance_policy::where("company_id", $cid)
        									->get();
        									
        	return $comp_list;
        } elseif($checkEmp->branch_id != Null) {
        	$cid = $checkEmp->branch_id;
        	$comp_list = compliance_policy::where("branch_id", $cid)
        									->get();
        									
        	return $comp_list;
        }
    }

    public function compliance_file(){
        return $this->belongsTo('App\compliance_file');
    }
}

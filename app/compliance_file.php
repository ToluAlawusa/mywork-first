<?php

namespace App;

use App\compliance_file;
use Auth;
use App\compliance_policy;
use Illuminate\Database\Eloquent\Model;

class compliance_file extends Model
{
    //

    public static function getAllComplienceFiles($id) {

        $cid = "";

        $checkEmp = Employee::select('company_id', 'branch_id')->where('user_id', Auth::id())->first();

         //dd($checkEmp);

        if($checkEmp->company_id != Null){
        	$cid = $checkEmp->company_id;
        	$comp_file_list = compliance_file::where("company_id", $cid)
        									->where('compliance_policy_id', $id)
        									->get();
        									
        	return $comp_file_list;
        } elseif($checkEmp->branch_id != Null) {
        	$cid = $checkEmp->branch_id;
        	$comp_file_list = compliance_file::where("branch_id", $cid)
        									->where('compliance_policy_id', $id)
        									->get();
        									
        	return $comp_file_list;
        }
    }

    public function compliance_policy(){
        return $this->hasMany('App\compliance_policy');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\campaign_status;
use App\Employee;
use Auth;

class campaign_status extends Model
{
    //
    public static function getAllCampaignStatus() {

        $cid = "";

        $checkEmp = Employee::select('company_id', 'branch_id')->where('user_id', Auth::id())->first();

         //dd($checkEmp);

        if($checkEmp->company_id != Null){
        	$cid = $checkEmp->company_id;
        	$campst_list = campaign_status::where("company_id", $cid)
        									->get();
        	return $campst_list;
        } elseif($checkEmp->branch_id != Null) {
        	$cid = $checkEmp->branch_id;
        	$campst_list = campaign_status::where("branch_id", $cid)
        									->get();
        	return $campst_list;
        }
    }
}

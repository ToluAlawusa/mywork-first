<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\campaign_type;
use App\Employee;
use Auth;

class campaign_type extends Model
{
    //

    public static function getAllCampaignTypes() {

        $cid = "";

        $checkEmp = Employee::select('company_id', 'branch_id')->where('user_id', Auth::id())->first();

         //dd($checkEmp);

        if($checkEmp->company_id != Null){
        	$cid = $checkEmp->company_id;
        	$camptype_list = campaign_type::where("company_id", $cid)
        									->get();
        	return $camptype_list;
        } elseif($checkEmp->branch_id != Null) {
        	$cid = $checkEmp->branch_id;
        	$camptype_list = campaign_type::where("branch_id", $cid)
        									->get();
        	return $camptype_list;
        }
    }

}

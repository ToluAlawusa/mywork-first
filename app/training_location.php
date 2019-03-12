<?php

namespace App;

use App\Employee;
use App\training_location;
use App\training_type;
use Auth;

use Illuminate\Database\Eloquent\Model;

class training_location extends Model
{
    //

    public static function getAllTrainingLocation() {

        $cid = "";

        $checkEmp = Employee::select('company_id', 'branch_id')->where('user_id', Auth::id())->first();

         //dd($checkEmp);

        if($checkEmp->company_id != Null){
        	$cid = $checkEmp->company_id;
        	$trainingL_list = training_location::where("company_id", $cid)
        									->get();
        	return $trainingL_list;
        } elseif($checkEmp->branch_id != Null) {
        	$cid = $checkEmp->branch_id;
        	$trainingL_list = training_location::where("branch_id", $cid)
        									->get();
        	return $trainingL_list;
        }
    }

     public static function getTrainingLocByID($id) {
        $train_LocId = training_location::where('id', '=', $id)
                                ->first();
        return $train_LocId;
    }

    public function training_type(){
    	return $this->hasMany('App\training_type');
    }
}

<?php

namespace App;

use App\Employee;
use App\training_register;
use App\training_type;
use Auth;
use Illuminate\Database\Eloquent\Model;

class training_register extends Model
{
    //

    public static function getAllTrainingRegister() {

        $cid = "";

        $checkEmp = Employee::select('company_id', 'branch_id')->where('user_id', Auth::id())->first();

         //dd($checkEmp);

        if($checkEmp->company_id != Null){
        	$cid = $checkEmp->company_id;
        	$trainingR_list = training_register::where("company_id", $cid)
        									->with('Employee')->with("training_type")->get();
        									
        	return $trainingR_list;
        } elseif($checkEmp->branch_id != Null) {
        	$cid = $checkEmp->branch_id;
        	$trainingR_list = training_register::where("branch_id", $cid)
        									->with('Employee')->with("training_type")->get();
        									
        	return $trainingR_list;
        }
    }

    public static function getTrainingRegByID($id) {
        $train_regId = training_register::where('id', '=', $id)
                                ->with('Employee')->with("training_type")->first();
        return $train_regId;
    }

    public static function getCompletedTrainingRegister() {

        $cid = "";

        $checkEmp = Employee::select('company_id', 'branch_id')->where('user_id', Auth::id())->first();

         //dd($checkEmp);

        if($checkEmp->company_id != Null){
        	$cid = $checkEmp->company_id;
        	$trainingR_comp = training_register::where("company_id", $cid)
        									->where('completed', 'Yes')
        									->with('Employee')->with("training_type")->get();
        									
        	return $trainingR_comp;
        } elseif($checkEmp->branch_id != Null) {
        	$cid = $checkEmp->branch_id;
        	$trainingR_comp = training_register::where("branch_id", $cid)
        									->where('completed', 'Yes')
        									->with('Employee')->with("training_type")->get();
        									
        	return $trainingR_comp;
        }
    }

    public static function getUncompletedTrainingRegister() {

        $cid = "";

        $checkEmp = Employee::select('company_id', 'branch_id')->where('user_id', Auth::id())->first();

         //dd($checkEmp);

        if($checkEmp->company_id != Null){
        	$cid = $checkEmp->company_id;
        	$trainingR_unc = training_register::where("company_id", $cid)
        									->where('completed', 'No')
        									->with('Employee')->with("training_type")->get();
        									
        	return $trainingR_unc;
        } elseif($checkEmp->branch_id != Null) {
        	$cid = $checkEmp->branch_id;
        	$trainingR_unc = training_register::where("branch_id", $cid)
        									->where('completed', 'No')
        									->with('Employee')->with("training_type")->get();
        									
        	return $trainingR_unc;
        }
    }

    public static function getApprovedTrainingRegister() {

        $cid = "";

        $checkEmp = Employee::select('company_id', 'branch_id')->where('user_id', Auth::id())->first();

         //dd($checkEmp);

        if($checkEmp->company_id != Null){
        	$cid = $checkEmp->company_id;
        	$trainingR_appr = training_register::where("company_id", $cid)
        									->where('approval_status', 'Approved')
        									->with('Employee')->with("training_type")->get();
        									
        	return $trainingR_appr;
        } elseif($checkEmp->branch_id != Null) {
        	$cid = $checkEmp->branch_id;
        	$trainingR_appr = training_register::where("branch_id", $cid)
        									->where('approval_status', 'Approved')
        									->with('Employee')->with("training_type")->get();
        									
        	return $trainingR_appr;
        }
    }

    public static function getPendingTrainingRegister() {

        $cid = "";

        $checkEmp = Employee::select('company_id', 'branch_id')->where('user_id', Auth::id())->first();

         //dd($checkEmp);

        if($checkEmp->company_id != Null){
        	$cid = $checkEmp->company_id;
        	$trainingR_pend = training_register::where("company_id", $cid)
        									->where('approval_status', 'Pending')
        									->with('Employee')->with("training_type")->get();
        									
        	return $trainingR_pend;
        } elseif($checkEmp->branch_id != Null) {
        	$cid = $checkEmp->branch_id;
        	$trainingR_pend = training_register::where("branch_id", $cid)
        									->where('approval_status', 'Pending')
        									->with('Employee')->with("training_type")->get();
        									
        	return $trainingR_pend;
        }
    }

    public function Employee(){
    	return $this->belongsTo('App\Employee');
    }

    public function training_type(){
    	return $this->belongsTo('App\training_type');
    }
}

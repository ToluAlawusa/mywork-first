<?php

namespace App;

use Auth;
use App\Employee;
use App\training_type;
use App\training_register;
use App\training_location;
use Illuminate\Database\Eloquent\Model;

class training_type extends Model
{
    //

    public static function getAllTrainingTypes() {

        $cid = "";

        $checkEmp = Employee::select('company_id', 'branch_id')->where('user_id', Auth::id())->first();

         //dd($checkEmp);

        if($checkEmp->company_id != Null){
        	$cid = $checkEmp->company_id;
        	$training_list = training_type::where("company_id", $cid)
                                            ->with('training_location')
        									->get();
        	return $training_list;
        } elseif($checkEmp->branch_id != Null) {
        	$cid = $checkEmp->branch_id;
        	$training_list = training_type::where("branch_id", $cid)
                                            ->with('training_location')
        									->get();
        	return $training_list;
        }
    }

    public static function getTrainingTypeByID($id) {

        $cid = "";

        $checkEmp = Employee::select('company_id', 'branch_id')->where('user_id', Auth::id())->first();

        if($checkEmp->company_id != Null){
            $cid = $checkEmp->company_id;
            $train_typeId = training_type::where("company_id", $cid)
                                    ->where('id', '=', $id)
                                    ->with('training_location')->first();
            return $train_typeId;

        } elseif($checkEmp->branch_id != Null){
            $cid = $checkEmp->branch_id;
            $train_typeId = training_type::where("branch_id", $cid)
                                    ->where('id', '=', $id)
                                    ->with('training_location')->first();

            return $train_typeId;
        }
        
    }



    public function training_location(){
    	return $this->belongsTo('App\training_location');
    }

    public function training_register(){
        return $this->hasMany('App\training_register');
    }

    public function training_recommendation(){
        return $this->hasMany('App\training_recommendation');
    }

    
}

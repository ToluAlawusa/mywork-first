<?php

namespace App;

use App\Employee;
use App\training_recommendation;
use Auth;
use Illuminate\Database\Eloquent\Model;

class training_recommendation extends Model
{
    //

    public static function getOutboundTrainingRecomm(){

        $cid = "";

        $checkEmp = Employee::select('company_id', 'branch_id', 'id')->where('user_id', Auth::id())->first();

         //dd($checkEmp->id);

        if($checkEmp->company_id != Null){
        	$cid = $checkEmp->company_id;
            $training_reco = training_recommendation::where("company_id", $cid)
                                                    ->where('recommended_by', $checkEmp->id)
        									        ->with('Employee')->with("training_type")->get();
        									
        	return $training_reco;
        } elseif($checkEmp->branch_id != Null) {
        	$cid = $checkEmp->branch_id;
            $training_reco = training_recommendation::where("branch_id", $cid)
                                                ->where('recommended_by', $checkEmp->id)
        									    ->with('Employee')->with("training_type")->get();
        									
        	return $training_reco;
        }
    }

    public static function getInboundTrainingRecomm(){

        $cid = "";

        $checkEmp = Employee::select('company_id', 'branch_id', 'id')->where('user_id', Auth::id())->first();

         //dd($checkEmp);

        if($checkEmp->company_id != Null){
        	$cid = $checkEmp->company_id;
            $training_reco = training_recommendation::where("company_id", $cid)
                                                    ->where('awaiting_approval_from', $checkEmp->id)
        									        ->with('Employee')->with("training_type")->get();
        									
        	return $training_reco;
        } elseif($checkEmp->branch_id != Null) {
        	$cid = $checkEmp->branch_id;
            $training_reco = training_recommendation::where("branch_id", $cid)
                                                ->where('awaiting_approval_from', $checkEmp->id)
        									    ->with('Employee')->with("training_type")->get();
        									
        	return $training_reco;
        }
    }

    public static function getTrainingRecommendationByID($id) {

        $cid = "";

        $checkEmp = Employee::select('company_id', 'branch_id')->where('user_id', Auth::id())->first();

        if($checkEmp->company_id != Null){
            $cid = $checkEmp->company_id;
            $train_recommId = training_recommendation::where("company_id", $cid)
                                    ->where('id', '=', $id)
                                    ->with('training_type')->first();
            return $train_recommId;

        } elseif($checkEmp->branch_id != Null){
            $cid = $checkEmp->branch_id;
            $train_recommId = training_recommendation::where("branch_id", $cid)
                                    ->where('id', '=', $id)
                                    ->with('training_type')->first();

            return $train_recommId;
        }
        
    }

    public function Employee(){
    	return $this->belongsTo('App\Employee');
    }

    public function training_type(){
    	return $this->belongsTo('App\training_type');
    }
}

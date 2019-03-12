<?php

namespace App;

use App\Employee;
use App\support_ticket;
use App\support_message;
use App\company;
use Auth;
use Illuminate\Database\Eloquent\Model;

class support_ticket extends Model
{
    //

    public static function getAllTicketsOfCompBranch() {
        
        $cid = "";

        $checkEmp = Employee::select('company_id', 'branch_id')->where('user_id', Auth::id())->first();

        // $days_date = date("F Y");
         //dd($days_date);

         // yet to get the attendance list by month, be sure to do it

        if($checkEmp->company_id != Null){
        	$cid = $checkEmp->company_id;
        	$tick_list = support_ticket::where("company_id", $cid)->with('support_message')->get();
        														
        	return $tick_list;
        } elseif($checkEmp->branch_id != Null) {
        	$cid = $checkEmp->branch_id;
        	$tick_list = support_ticket::where("branch_id", $cid)->with('support_message')->get();
        															
        	return $tick_list;
        }
    }

    public static function getOpenTicketsOfCompBranch() {
        
        $cid = "";

        $checkEmp = Employee::select('company_id', 'branch_id')->where('user_id', Auth::id())->first();

        // $days_date = date("F Y");
         //dd($days_date);

         // yet to get the attendance list by month, be sure to do it

        if($checkEmp->company_id != Null){
            $cid = $checkEmp->company_id;
            $tick_list = support_ticket::where("company_id", $cid)
                                        ->where("status", "Open")
                                            ->with('support_message')->get();
                                                                
            return $tick_list;
        } elseif($checkEmp->branch_id != Null) {
            $cid = $checkEmp->branch_id;
            $tick_list = support_ticket::where("branch_id", $cid)
                                        ->where("status", "Open")
                                        ->with('support_message')->get();
                                                                    
            return $tick_list;
        }
    }

    public static function getAnsweredTicketsOfCompBranch() {
        
        $cid = "";

        $checkEmp = Employee::select('company_id', 'branch_id')->where('user_id', Auth::id())->first();

        // $days_date = date("F Y");
         //dd($days_date);

         // yet to get the attendance list by month, be sure to do it

        if($checkEmp->company_id != Null){
            $cid = $checkEmp->company_id;
            $tick_list = support_ticket::where("company_id", $cid)
                                        ->where("status", "Answered")
                                        ->with('support_message')->get();
                                                                
            return $tick_list;
        } elseif($checkEmp->branch_id != Null) {
            $cid = $checkEmp->branch_id;
            $tick_list = support_ticket::where("branch_id", $cid)
                                        ->where("status", "Answered")
                                        ->with('support_message')->get();
                                                                                                
            return $tick_list;
        }
    }

    

    public function support_message(){
        return $this->hasMany('App\support_message');
    }

    public function company(){
        return $this->belongsTo('App\company');
    }
}

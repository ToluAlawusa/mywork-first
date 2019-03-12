<?php

namespace App;

use App\payslip;
use Auth;
use Illuminate\Database\Eloquent\Model;

class payslip extends Model
{
    //

    protected $table = 'payslips';

    public static function getAllPayslips() {

        $cid = "";

        $checkEmp = Employee::select('company_id', 'branch_id')->where('user_id', Auth::id())->first();

         //dd($checkEmp);

        if($checkEmp->company_id != Null){
        	$cid = $checkEmp->company_id;
        	$payroll_list = payslip::where("company_id", $cid)->with("Employee")->get();
        	return $payroll_list;
        } elseif($checkEmp->branch_id != Null) {
        	$cid = $checkEmp->branch_id;
        	$payroll_list = payslip::where("branch_id", $cid)->with("Employee")->get();
        	return $payroll_list;
        }
    }

    public static function getPayslipById($id) {

        $payslipId = payslip::where('id', '=', $id)->first();

        return $payslipId;
    }

    public function Employee(){
    	return $this->belongsTo('App\Employee');
    }
}

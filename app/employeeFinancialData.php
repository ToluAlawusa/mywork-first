<?php

namespace App;

use App\employeeFinancialData;
use App\Employee;
use Auth;
use Illuminate\Database\Eloquent\Model;

class employeeFinancialData extends Model
{
    //

    protected $table = 'employee_financial_datas';

    public static function getAllEmployeePayrollData() {
        
        $cid = "";

        $checkEmp = Employee::select('company_id', 'branch_id')->where('user_id', Auth::id())->first();

         //dd($checkEmp);

        if($checkEmp->company_id != Null){
        	$cid = $checkEmp->company_id;
        	$payroll_list = employeeFinancialData::where("company_id", $cid)->with("Employee")->get();
        	return $payroll_list;
        } elseif($checkEmp->branch_id != Null) {
        	$cid = $checkEmp->branch_id;
        	$payroll_list = employeeFinancialData::where("branch_id", $cid)->with("Employee")->get();
        	return $payroll_list;
        }
    }

    public static function getPayrollDataById($id) {
        
        $payrollId = employeeFinancialData::where('employee_id', '=', $id)->with("Employee")->first();
        
        return $payrollId;
    }

    public function Employee(){
        return $this->belongsTo('App\Employee');
    }
}

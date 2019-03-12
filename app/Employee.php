<?php

namespace App;

use App\User;
use App\attendance;
use App\company;
use App\Employee;
use App\employeeFinancialData;
use App\training_register;
use Auth;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    public static function getAllEmployees(){

        $cid = "";

        $checkEmp = Employee::select('company_id', 'branch_id')->where('user_id', Auth::id())->first();

         //dd($checkEmp);

        if($checkEmp->company_id != Null){
            $cid = $checkEmp->company_id;
            $employee_list = Employee::where("company_id", $cid)->get();
            return $employee_list;
        } elseif($checkEmp->branch_id != Null) {
            $cid = $checkEmp->branch_id;
            $employee_list = Employee::where("branch_id", $cid)->get();
            return $employee_list;
        }
    }

	public static function getEmployeeByID($id) {
        $employeeId = Employee::where('id', '=', $id)
                                ->with("company")
                                ->first();
        return $employeeId;
    }

    public function User(){
        return $this->belongsTo('App\User');
    }

    public function company()
    {
        return $this->belongsTo('App\company');
    }

    public function designation()
    {
        return $this->belongsTo('App\designation');
    }

    public function employeeFinancialData(){
        return $this->hasOne('App\employeeFinancialData');
    }

    public function training_register(){
        return $this->hasMany('App\training_register');
    }

    public function training_recommendation(){
        return $this->hasMany('App\training_recommendation');
    }

    // public function attendance(){
    //     return $this->hasMany('App\attendance');
    // }
}

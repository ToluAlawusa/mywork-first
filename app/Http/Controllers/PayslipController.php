<?php

namespace App\Http\Controllers;

use App\Employee;
use App\payslip;
use Auth;
use Illuminate\Http\Request;

class PayslipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //

        $current_user = Auth::id();
        $check_employee = Employee::getEmployeeByID($current_user);
        //dd($check_employee);
        $employee_company_name = substr($check_employee->company->name, 0, 4);
        $rnd = mt_rand();
        $rand_strip = substr($rnd, 0, 4);
        $check_employee_generated = Employee::getEmployeeByID($id);

        //dd($check_employee_generated);

        $check_for_employee_id = payslip::select('id')->where('employee_id', $check_employee_generated->id)
                                                      ->where('month_year', $request['month_year'])
                                                      ->count('id');

        if($check_for_employee_id == 0) {

            $newpayslip = new payslip();
            $newpayslip->employee_id = $check_employee_generated->id;
            $newpayslip->payslip_unique_id = $employee_company_name.'#'.$rand_strip;
            $newpayslip->company_id = $check_employee->company_id;
            $newpayslip->paye_tax = $request['paye_tax'];
            $newpayslip->absent_days = $request['absent_d'];
            $newpayslip->total_earnings = $request['total_earning'];
            $newpayslip->total_deductions = $request['tot_ded'];
            $newpayslip->net_salary = $request['tot_net'];
            $newpayslip->month_year = $request['month_year'];


                //dd($newpayslip);
            $newpayslip->save();
                alert()->success('Payslip successfully generated for employee')->autoclose(4000);
                return redirect()->route('payslips');
            } else {

                alert()->error('Employer Payslip already generated for the month')->autoclose(4000);
                return redirect()->back();
            }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

            $deletePayslip = payslip::getPayslipById($id);
            $deletePayslip->delete();

             alert()->success('Employee Payslip removed')->autoclose(4000);
            return redirect()->back();
    }
}

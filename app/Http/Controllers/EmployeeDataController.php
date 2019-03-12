<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employeeFinancialData;
use App\Employee;
use App\payslip;
use Auth;

class EmployeeDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        if(!Auth::id()){
            return redirect()->route('home');
        } else {
           return view('employee_fin_data', ['allpayrolldata' => employeeFinancialData::getAllEmployeePayrollData(), 'employee_list' => Employee::getAllEmployees()]);
        }



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $payslipload = payslip::getAllPayslips();
        // foreach ($payslipload as $key => $paysliploads) {
        //     # code...
        //     dd($paysliploads->Employee->employeeFinancialData->housing);
        // }

        return view('payslips', ['payslipload' => $payslipload]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $current_user = Auth::id();
        $check_employee = Employee::getEmployeeByID($request['emp_name']);
        $ebina = $request['emp_name'];
        //dd($ebina);



        $check_for_employee_id = employeeFinancialData::select('id')->where('employee_id', $check_employee->id)->count('id');

        if($check_for_employee_id == 0) {

            $newpayrolldata = new employeeFinancialData();
            $newpayrolldata->employee_id = $request['emp_name'];

            if($check_employee->branch_id == null){
                   $newpayrolldata->company_id = $check_employee->company_id;
               } elseif($check_user->company_id == null){
                    $newpayrolldata->branch_id = $check_user->branch_id;
               }

            $newpayrolldata->basic_salary = $request['basic_salary'];
            $newpayrolldata->housing = $request['housing'];
            $newpayrolldata->transport = $request['transport'];
            $newpayrolldata->utility = $request['utility'];
            $newpayrolldata->entertainment = $request['entertainment'];
            $newpayrolldata->meal = $request['meal'];
            $newpayrolldata->gross_salary_monthly = $request['gross_salary'];
            $newpayrolldata->gross_salary_yearly = $request['gross_salary'] * 12;
            $newpayrolldata->pension = $request['pension'];
            $newpayrolldata->nhf = $request['nhf'];
            $newpayrolldata->nhis = $request['nhis'];
            $newpayrolldata->leave_allowance = $request['leave_allowance'];
            $newpayrolldata->thirteenth_month = $request['thirteenth_month'];

                //dd($newpayrolldata);
            $newpayrolldata->save();
                alert()->success('Payroll data successfully added for employee')->autoclose(4000);
                return redirect()->back();
            } else {

                alert()->error('employee Payroll data already exists')->autoclose(4000);
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
        $payrollid_data = employeeFinancialData::getPayrollDataById($id);
        //dd($payrollid_data);

        $workdays = array();
        $type = CAL_GREGORIAN;
        $month = date('n'); // Month ID, 1 through to 12.
        $month2 = date('F');
        $year = date('Y'); // Year in 4 digit 2009 format.
        $day_count = cal_days_in_month($type, $month, $year); // Get the amount of days


        //loop through all days
        for ($i = 1; $i <= $day_count; $i++) {

                $date = $year.'/'.$month.'/'.$i; //format date
                $get_name = date('l', strtotime($date)); //get week day
                $day_name = substr($get_name, 0, 3); // Trim day name to 3 chars

                //if not a weekend add day to array
                if($day_name != 'Sun' && $day_name != 'Sat'){
                    $workdays[] = $i;
                }

        }

// look at items in the array uncomment the next line
   $count_working_days = count($workdays);

        return view('generate_payslip', ['payrollid_datas' => $payrollid_data, 'count_working_days' => $count_working_days, 'month' => $month2, 'year' => $year, 'id' => $id]);
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

        // $current_user = Auth::id();
        // $check_employee = Employee::getEmployeeByID($request['emp_name']);
        // $ebina = $request['emp_name'];
        //dd($ebina);





            $editpayrolldata = employeeFinancialData::getPayrollDataById($request['payrollid']);
            $editpayrolldata->basic_salary = $request['basic_salary'];
            $editpayrolldata->housing = $request['housing'];
            $editpayrolldata->transport = $request['transport'];
            $editpayrolldata->utility = $request['utility'];
            $editpayrolldata->entertainment = $request['entertainment'];
            $editpayrolldata->meal = $request['meal'];
            $editpayrolldata->gross_salary_monthly = $request['gross_salary'];
            $editpayrolldata->gross_salary_yearly = $request['gross_salary'] * 12;
            $editpayrolldata->pension = $request['pension'];
            $editpayrolldata->nhf = $request['nhf'];
            $editpayrolldata->nhis = $request['nhis'];
            $editpayrolldata->leave_allowance = $request['leave_allowance'];
            $editpayrolldata->thirteenth_month = $request['thirteenth_month'];

                //dd($editpayrolldata);
            $editpayrolldata->save();
                alert()->success('Payroll data successfully updated')->autoclose(4000);
                return redirect()->back();

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

            $deletepayrolldata = employeeFinancialData::getPayrollDataById($id);
            //dd($deletepayrolldata);
            $deletepayrolldata->delete();

             alert()->success('Payroll data successfully removed')->autoclose(4000);
            return redirect()->back();
    }
}

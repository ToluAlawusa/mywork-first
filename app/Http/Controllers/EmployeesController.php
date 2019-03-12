<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Employee;
use App\company;
use Auth;



class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id=null)

    {
       if ($id==null) {
             //company
             $cid = Employee::select('company_id')->where('user_id',Auth::user()->id)->first();
             if($cid->company_id !=0){

               $employees = Employee::where('company_id',$cid->company_id)->get();

                return view('employee.view_employee',['employees'=> $employees]);
             }else{

             }

            // echo $check->user_id;
           // return view('employee.create_employee');
       }else{
           //Branch
       }



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

            'first_name'=>'required|max:255',
            'last_name'=>'required|max:255',
            'birth_date'=>'required|max:100',
            'gendar'=>'required|max:100',
            'image'=>'required|image',
            'address'=>'required',
            'state'=>'required',
            'country'=>'required',
            'pin_code'=>'required|max:50',
            'phone_number'=>'required|max:50',
            'email_address'=>'required',
            'institution'=>'required',
            'course'=>'required',
            'starting_date'=>'required|max:255',
            'complete_date'=>'required|max:255',
            'degree'=>'required|max:255',
            'grade'=>'required|max:255',
            'company_name'=>'required',
            'location'=>'required',
            'job_position'=>'required|max:255',
            'period_from'=>'required|max:255',
            'period_to'=>'required|max:255',

            ]);

            $employee = new Employee();

            $employee->company_id = $request->company_id;
            $employee->branch_id = $request->branch_id;
            $employee->first_name = $request->first_name;
            $employee->last_name = $request->last_name;
            $employee->birth_date = $request->birth_date;
            $employee->gendar = $request->gendar;
            $employee->image = $request->image;
            $employee->address = $request->address;

            $employee->state = $request->state;
            $employee->country = $request->country;
            $employee->pin_code = $request->pin_code;
            $employee->phone_number = $request->phone_number;
            $employee->email_address = $request->email_address;
            $employee->institution = $request->institution;
            $employee->course = $request->course;
            $employee->starting_date = $request->starting_date;

            $employee->complete_date = $request->complete_date;
            $employee->degree = $request->degree;
            $employee->grade = $request->grade;
            $employee->company_name = $request->company_name;
            $employee->location = $request->location;
            $employee->job_position = $request->job_position;
            $employee->period_from = $request->period_from;
            $employee->period_to = $request->period_to;

            $employee->save();

            Session::flash('success', 'Your employee was created');

            return redirect()->back();

        //dd($request->all());
    }

    public function hhh(){
        echo "ijiijijijijiiji";
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
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Employee;
use App\company;
use App\attendance_setting;
use App\attendance;
use Session;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$chk_pre_month = attendance::getAttendanceList();


        return view('attendance_register', ['all_att_list' => attendance::getAttendanceList()]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showSettings()
    {
        //

        $attendance_info = attendance_setting::getAttendanceSettingsById();

        //dd($attendance_info);



        if($attendance_info == null){

            return view('attendance_settings', ['attendance_info' => $attendance_info]);
        } else {

            $att_sett_id = $attendance_info->id;
            $resumptime = $attendance_info->resumption_time;
            $resumpgrace = $attendance_info->resumption_grace_period;

            return view('attendance_settings', ['resumptime' => $resumptime, 'resumpgrace' => $resumpgrace, 'att_sett_id' => $att_sett_id, 'attendance_info' => $attendance_info]);
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeSettings(Request $request)
    {
        //

        $current_user = Auth::id();
        $check_user = Employee::getEmployeeByID($current_user);
        //$check_comp_bran_id = Employee::select('company_id', 'branch_id')->where('user_id', Auth::id())->first();

        if($request['resumption_time'] == "00:00" || $request['grace_period'] == "00:00"){

            return redirect()->back()->with(['fail' => 'Please pick the resumption time and grace period']);
        } else {

            $newattendancesetting = new attendance_setting();
            if($check_user->branch_id == null){
                    $newattendancesetting->company_id = $check_user->company_id;
                } elseif ($check_user->company_id == null){
                    $newattendancesetting->branch_id = $check_user->branch_id;
                }
            $newattendancesetting->resumption_time = $request['resumption_time'];
            $newattendancesetting->resumption_grace_period = $request['grace_period'];

            //dd($newattendancesetting);
            $newattendancesetting->save();

                alert()->success('Resumption time & Grace period successfully set')->autoclose(4000);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateSettings(Request $request, $id)
    {
        //
        $edit_time = attendance_setting::getAttendanceSettingsById();
        $edit_time->resumption_time = $request['resumption_time'];
        $edit_time->resumption_grace_period = $request['grace_period'];

        //dd($edit_time);

        $edit_time->save();

            alert()->success('Resumption time and grace period successfully updated')->autoclose(4000);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function doLatenessReason(Request $request)
    {
        //
        $current_user = Auth::id();
        $check_user = Employee::getEmployeeByID($current_user);

        $days_date = date("l jS F Y");
        // dd($late_reason);

        $checknewatt = attendance::where('employee_id', Auth::id())
                                        ->where('clocked_in_date', $days_date)->first();
        //dd($checknewatt);

        if($checknewatt->late_reason == null){
            $checknewatt->lateness_reason = $request['late_reason'];
            $checknewatt->present = 0;

            //dd($newattendance);
            $checknewatt->save();
           alert()->success('Reason accepted')->autoclose(4000);
                return redirect()->back();

        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function doLocationDiffReason(Request $request)
    {
        //
        $current_user = Auth::id();
        $check_user = Employee::getEmployeeByID($current_user);

        $days_date = date("l jS F Y");
        // dd($late_reason);

        $checknewatt = attendance::where('employee_id', Auth::id())
                                        ->where('clocked_in_date', $days_date)->first();
        //dd($checknewatt);

        if($checknewatt->location_reason == null){
            $checknewatt->location_reason = $request['location_reason'];
            $checknewatt->location_reason_address = $request['loca_address'];
            $checknewatt->present = 0;

            //dd($newattendance);
            $checknewatt->save();
           alert()->success('Reason accepted')->autoclose(4000);
                return redirect()->back();

        }
        
    }
}

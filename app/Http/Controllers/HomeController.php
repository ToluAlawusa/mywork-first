<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\User;
use App\company;
use App\attendance_setting;
use App\compliance_policy;
use Session;
use Auth;
use App\attendance;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $location = "7 bankole oki street";
        // $chk_timezone = date_default_timezone_get();
        // //dd($chk_timezone);
          $check = Employee::select('status')->where('user_id',Auth::user()->id)->first();
         // $real_time = Carbon::now('GMT+1');
         // $real_timer = explode(' ', $real_time);
         //dd($real_timer[1]);

         // if($real_timer[1] >= '8:00' && $real_timer[1] <= '8:20'){
         //    dd('yeah it is');
         // } else{
         //    dd('no its not');
         // }
         //$user_company_time = attendance_setting::getAttendanceSettingsById(Auth::id());
           if ($check['status']==0) {
            //$user_company_time = attendance_setting::getAttendanceSettingsById(Auth::id());
         //dd($user_company_time->resumption_grace_period);
                $coord =  HomeController::get_lat_long($location);
                Session::put('latitude', $coord[0]);
                Session::put('longitude', $coord[1]);
                HomeController::timeClockIn();
                // Session::put('resumption_time', $user_company_time->resumption_time);
                // Session::put('grace_period', $user_company_time->resumption_grace_period);
                // Session::put('employee_curr_time', $real_timer[1]);
                $current_user = Auth::id();
                $check_user = Employee::getEmployeeByID($current_user);

                if($check_user->branch_id == null){
                    $cbid = $check_user->company_id;
                } elseif($check_user->company_id == null){
                    $cbid = $check_user->branch_id;
                }   

                Session::put('comp_or_bra_id', $cbid);

                $compli = compliance_policy::getAllCompliancePolicy();

                foreach ($compli as $key => $all_compli) {
                    # code...
                    $select_compli1 = $all_compli->id;

                    //dd($select_compli1);
                    Session::put('polID', $select_compli1);
                }

              return view('home',['status'=>0]);

           }else{

         //dd($user_company_time);
                $coord =  HomeController::get_lat_long($location);
                Session::put('latitude', $coord[0]);
                Session::put('longitude', $coord[1]);
                HomeController::timeClockIn();
                // Session::put('resumption_time', $user_company_time->resumption_time);
                // Session::put('grace_period', $user_company_time->resumption_grace_period);
                // Session::put('employee_curr_time', $real_timer[1]);
                $current_user = Auth::id();
                $check_user = Employee::getEmployeeByID($current_user);

                if($check_user->branch_id == null){
                    $cbid = $check_user->company_id;
                } elseif($check_user->company_id == null){
                    $cbid = $check_user->branch_id;
                }   

                Session::put('comp_or_bra_id', $cbid);

                $compli = compliance_policy::getAllCompliancePolicy();

                foreach ($compli as $key => $all_compli) {
                    # code...
                    $select_compli1 = $all_compli->id;

                    //dd($select_compli1);
                    Session::put('polID', $select_compli1);
                }

              return view('home', ['status' => 1]);
           }

    }

    public static function get_lat_long($address){

            $address = str_replace(" ", "+", $address);
            $key = "AIzaSyDZDwLJKZftRz9ZaS0pToW6HtHX9NumrWA";

            $url = "https://maps.google.com/maps/api/geocode/json?address=$address&key=$key";

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 3);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
            $html = curl_exec($ch);
            curl_close($ch);

            $json = json_decode($html);

            $lat = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
            $long = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};

            return array($lat,$long);
    }

    public static function clockIn(){

        // $ipcheck = HomeController::getRealIpAddr();
        // dd($ipcheck);

        $cid = "";

        $checkEmp = Employee::select('company_id', 'branch_id')->where('user_id', Auth::id())->first();

         $cid1 = $checkEmp->company_id;
         $cid2 = $checkEmp->branch_id;

         //dd($cid1.'-'.$cid2);

        if($checkEmp->company_id != Null){
            $cid = $checkEmp->company_id;
            $client_list = company::where('id', $cid)->first();
            //dd('for company '.'-'.$client_list);
            //return $client_list;
        } elseif($checkEmp->branch_id != Null) {
            $cid = $checkEmp->branch_id;
            $client_list = company::where("id", $cid)->first();
            //dd('for branch '.'-'.$client_list);
            //return $client_list;
        }

        //dd($client_list->address);

         // Get lat long from google
        $location = "7 bankole oki street";
        HomeController::get_lat_long($location); // create a function with the name "get_lat_long" given as below
        // $map        =   explode(',' ,$latlong);
        // $mapLat         =   $map[0];
        // $mapLong    =   $map[1];







    }

    // function to get  the address

        public static function getRealIpAddr()
        {
            if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
            {
              $ip=$_SERVER['HTTP_CLIENT_IP'];
            }
            elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
            {
              $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
            }
            else
            {
              $ip=$_SERVER['REMOTE_ADDR'];
            }

            //return $ip;

            // $LocationArray = json_decode( file_get_contents('https://ip2location-api.com/api/json/'.$ip), true);



            //dd($ip);

            $locationArray = geoip("105.235.194.74");
             dd($locationArray);
        }


        // function to get the initial clock-in time

        public static function timeClockIn()
        {
            $current_user = Auth::id();
             $check = Employee::select('status')->where('user_id',Auth::user()->id)->first();
             //dd($check);
             $real_time = Carbon::now('GMT+1');
             $real_timer = explode(' ', $real_time);
             $user_company_time = attendance_setting::getAttendanceSettingsById(Auth::id());

            Session::put('resumption_time', $user_company_time->resumption_time);
            Session::put('grace_period', $user_company_time->resumption_grace_period);
            Session::put('employee_curr_time', $real_timer[1]);

            $check_user = Employee::where('user_id',Auth::user()->id)->first();

            $days_date = date("l jS F Y");
             // dd($days_date);

            $checknewatt = attendance::where('employee_id', Auth::id())
                                        ->where('clocked_in_date', $days_date)->first();


            if(!$checknewatt){
                $newattendance = new attendance();
                $newattendance->employee_id = $current_user;
                if($check_user->branch_id == null){
                            $newattendance->company_id = $check_user->company_id;
                        } elseif ($check_user->company_id == null){
                            $newattendance->branch_id = $check_user->branch_id;
                        }
                $newattendance->present = 1;
                $newattendance->clocked_in_time = Session::get('employee_curr_time');
                $newattendance->clocked_in_date = $days_date;


                //dd($newattendance);
                $newattendance->save();

                $checknewatt = attendance::where('employee_id', Auth::id())
                                        ->where('clocked_in_date', $days_date)->first();

                Session::put('chk_attendance_list', $checknewatt->lateness_reason);
                Session::put('chk_attendance_location', $checknewatt->location_reason);
                Session::put('all_att_check', $checknewatt);


               alert()->success('Welcome, You are clocked in today')->autoclose(4000);

            }
            
            //dd($checknewatt);
            Session::put('all_att_check', $checknewatt);
            Session::put('chk_attendance_list', $checknewatt->lateness_reason);
            Session::put('chk_attendance_location', $checknewatt->location_reason);
        }


}

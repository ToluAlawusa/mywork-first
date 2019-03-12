<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Invites;
use App\Employee;
use Alert;


class UserInviteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Auth.user_invite');
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
    public function store(Request $request, $email,$token)
    {
         $email.'<br>'.$token;
        // $error =  alert()message(‘Message’, ‘Optional Title’);
        // return redirect()->back();

        $first_name = strip_tags($request->get('first_name'));
        $last_name = strip_tags($request->get('last_name'));
        $password = $request->get('password');
        $password_confirmation = $request->get('password_confirmation');
          //first chack if the Emai;l and token exist
        $check = Invites::where([
            ['email', '=', $email],
            ['token', '=', $token],
        ])->first();

        // if (empty($first_name) || strlen($first_name) < 2) {
        //      echo '1qqqqqwww';
        //     //return redirect()->back();
        // }
        if ($password != $password_confirmation) {

            alert()->error('password don\'t match', '');
        }
        elseif ($check) {
            //first check if the email already exist
            $checkEmail = User::where('email',$email)->count('id');
            if($checkEmail == 1){

                alert()->warning('This User Already Exits', 'Contact Your Admin For More Details');
                return redirect()->back();
            }else{
                $add = new User();
                $check->email;
                $check->token;
                $check->designation_id;
                $username = $first_name . ' ' . $last_name;
                $add->name = $username;
                $add->email = $email;
                $password = Hash::make($request->get('password'));
                $add->password = $password;

                if ($add->save()) {
                //create employee details
                 $emp = new Employee();
                 $emp->user_id = $add->id;
                 $emp->designation_id = $check['designation_id'];
                 $emp->first_name = $first_name;
                 $emp->last_name = $last_name;
                 if($emp->save()){
                        alert()->success('Invitation Successfully Saved, Kindly Login With Your Email & Password.' )->autoclose(4500);
                        return redirect()->route('login');
                 }else{
                        alert()->error('Opps, something went wrong', 'Try again');
                 }
                }
            }
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
    }
}

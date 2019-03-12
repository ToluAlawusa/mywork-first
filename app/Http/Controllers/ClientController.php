<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;
use App\company;
use App\Employee;
use App\client;
use App\clientEmail;
use Illuminate\Support\Facades\Validator;
use Storage;
use Alert;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Debug\Exception\FlattenException;
use Symfony\Component\Debug\ExceptionHandler as SymfonyExceptionHandler;
use App\Mail\ExceptionOccured;

use App\Mail\SendMailable;

class ClientController extends Controller
{

    protected $validationRules = [
             'name' => 'required',
             'email' => 'required|email',
             'address' => 'required',
             'phone' => 'required',
             'source' => 'required'
            ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('client', ['allclients' => client::getAllClients()]);
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
        $current_user = Auth::id();
        $check_user = Employee::getEmployeeByID($current_user);

        $clientPhone = $request['phone'];
        $clientEmail = $request['email'];

        $company_name = $check_user->company->name;
        $validation = Validator::make($request->all(), $this->validationRules);
        $file_client = $request->file('client_image');

        $extension = strtolower($file_client->getClientOriginalExtension());
        if($extension == 'png' || $extension == 'jpg' || $extension == 'jpeg'){
            $client_image = $clientPhone."_".$company_name.".".$file_client->getClientOriginalExtension();
        } else {

            alert()->error('Invalid Image Format')->autoclose(4000);
            return redirect()->back();
        }

        //check if the client email exists

        $check_email = client::select('id')->where('email', $clientEmail)->count('id');

        if($check_email == 0) {

            $newclient = new client();
            $newclient->name = $request['name'];
            $newclient->added_by = $current_user;

            if($check_user->branch_id == null){
                $newclient->company_id = $check_user->company_id;
            } elseif ($check_user->company_id == null){
                $newclient->branch_id = $check_user->branch_id;
            }

            $newclient->email = $request['email'];
            $newclient->address = $request['address'];
            $newclient->phone = $clientPhone;
            $newclient->source = $request['source'];
            $newclient->image = $client_image;


            //dd($newclient);


            if ($validation->fails()) {
                // alert()->error('stuck here')->autoclose(4000);
            return redirect()->back()->withErrors($validation);

            } else {
                $newclient->save();
                $destinationPath = Storage::putFileAs('public/images/ClientImages', $file_client,$client_image);
                 alert()->success('Client successfully added')->autoclose(4000);
                return redirect()->back();
            }
        } else {
               alert()->error('Client already exists')->autoclose(4000);
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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //
        $current_user = Auth::id();
        $check_user = Employee::getEmployeeByID($current_user);

        $clientPhone = $request['phone'];
        $company_name = $check_user->company->name;

        $validation = Validator::make($request->all(), $this->validationRules);

        $editclient = client::getClientById($id);

        if(!$request->file('client_image')){

            $editclient->name = $request['name'];
            $editclient->email = $request['email'];
            $editclient->address = $request['address'];
            $editclient->phone = $request['phone'];
            $editclient->source = $request['source'];
            $editclient->image = $editclient->image;


        } else {

            $file_client = $request->file('client_image');

            $extension = strtolower($file_client->getClientOriginalExtension());
            if($extension == 'png' || $extension == 'jpg' || $extension == 'jpeg'){
                $client_image = $clientPhone."_".$company_name.".".$file_client->getClientOriginalExtension();
            } else {
                alert()->error('Invalid Image Format')->autoclose(4000);
                return redirect()->back();
            }

            $editclient->name = $request['name'];
            $editclient->email = $request['email'];
            $editclient->address = $request['address'];
            $editclient->phone = $request['phone'];
            $editclient->source = $request['source'];
            $editclient->image = $client_image;

            $destinationPath = Storage::putFileAs('public/images/ClientImages', $file_client,$client_image);

        }


        if ($validation->fails()) {

        return redirect()->back()->withErrors($validation);

        } else {

            $editclient->save();

                 alert()->success('Client successfully updated')->autoclose(4000);
                return redirect()->back();
        }
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

            $deleteClient = client::getClientById($id);
            $deleteClient->delete();

             alert()->success('Client successfully removed')->autoclose(4000);
            return redirect()->back();
    }

    /**
     * For handling client send email function.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sendClientEmail(Request $request, $id)
    {
        //

        $current_user = Auth::id();
        $check_user = Employee::getEmployeeByID($current_user);
        $check_comp_bran_id = Employee::select('company_id', 'branch_id')->where('user_id', Auth::id())->first();

        if($check_comp_bran_id->branch_id == null){
            //get company
            $comp_deets = company::where('user_id', $check_user->user_id)->first();

        } else {
            //get branch from company
            $comp_deets = company::where('user_id', $check_comp_bran_id->branch_id)->first();

        };

        $rnd = uniqid(rand(0, 9), true);
        $file_client = $request->file('message_file');
        $file_name = $file_client->getClientOriginalName();
        $extension = strtolower($file_client->getClientOriginalExtension());
        if($extension == 'png' || $extension == 'jpg' || $extension == 'jpeg' || $extension == 'csv' || $extension == 'xlsx' || $extension == 'doc' || $extension == 'docx' || $extension == 'pdf' || $extension == 'txt' || $extension == 'zip' || $extension == 'rar' || $extension == 'ppt' ){
            $client_image = $rnd."_".$file_name;
        } else {

            alert()->error('Invalid Image Format')->autoclose(4000);
            return redirect()->back();
        }


        $clientEmailDetails = new clientEmail();
        $clientEmailDetails->sender_email = $request['sender_email'];
        $clientEmailDetails->client_id = $request['takeid'];
        $clientEmailDetails->subject = $request['message_subject'];
        $clientEmailDetails->message_body = $request['message_body'];
        $clientEmailDetails->attachments = $client_image;

        //dd($clientEmailDetails);
        $clientEmailDetails->save();

        $destinationPath = Storage::putFileAs('public/images/ClientEmailAttachments', $file_client,$client_image);

        try {

            $emailDetails = new \stdClass();
            $emailDetails->sender_email = $request['sender_email'];
            $emailDetails->sender_name = $check_user->first_name.' '.$check_user->last_name;
            $emailDetails->receiver_email = $request['takeemail'];
            $emailDetails->receiver_name = $request['takename'];
            $emailDetails->subject = $request['message_subject'];
            $emailDetails->body = $request['message_body'];
            $emailDetails->attachment = $destinationPath;

            $chkurl =  'http://'.$_SERVER['SERVER_NAME'];

            //dd($comp_deets);

            Mail::send('mails.client_email_view', ['emailDetail' => $emailDetails, 'comp_deets' => $comp_deets], function ($emailDetail) use($emailDetails, $file_client, $client_image, $chkurl)
             {
                $emailDetail->from($emailDetails->sender_email, $emailDetails->sender_name);
                $emailDetail->to($emailDetails->receiver_email);
                $emailDetail->subject($emailDetails->subject);
                $emailDetail->attach($chkurl.'/storage/images/ClientEmailAttachments/' . $client_image, array(
                    'as' => $file_client->getClientOriginalName(), // If you want you can chnage original name to custom name
                    'mime' => $file_client->getMimeType()));
            });


            alert()->success('Email Sent')->autoclose(4000);
            return redirect()->back();
        } catch (\Exception $ex) {

            dd($ex);
            alert()->error('Email not Sent')->autoclose(4000);
            return redirect()->back();
        }

    }

    public function testEmailView()
    {
        //
        return view('email_view_test');
    }
}

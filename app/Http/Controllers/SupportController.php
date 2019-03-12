<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\support_ticket;
use App\support_message;
use App\Employee;
use Auth;
use Carbon\Carbon;
use Storage;
class SupportController extends Controller
{   


    protected $validationRules = [
             'dept_name' => 'required',
             'priority_type' => 'required',
             'subject' => 'required',
             'sent_message' => 'required'
            ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        

        // $tickets_list = support_ticket::getAllTicketsOfCompBranch();
        // dd($tickets_list);
        return view('support_maintenance', ['tickets_list' => support_ticket::getAllTicketsOfCompBranch(), 'open_tickets_list' => support_ticket::getOpenTicketsOfCompBranch(), 'answered_tickets_list' => support_ticket::getAnsweredTicketsOfCompBranch()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showViewSupport(Request $request, $id)
    {
        //

        //user company message view

        $chk_mess = support_message::getMessagesByTicketID($id);
        // dd($chk_mess);

        foreach ($chk_mess as $key => $chk_messages) {
            # code...
            //dd($chk_messages->support_ticket->status);
        }
        
        //dd($chk_messages->support_ticket->status);
        return view('view_support_ticket', ['tick_messages' => support_message::getMessagesByTicketID($id), 'id' => $id, 'chk_messages' => $chk_messages]);
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
        
        $rnd = mt_rand();
        $chk_time = Carbon::now('GMT+1');
        
        $rand_strip = substr($rnd, 0, 4);
        $real_timer = explode(' ', $chk_time);
        //dd($real_timer[1]);

        $file_client = $request->file('sent_file');
        $company_name = $check_user->company->name;

        if($file_client){
            $extension = strtolower($file_client->getClientOriginalExtension());
            if($extension == 'png' || $extension == 'jpg' || $extension == 'jpeg' || $extension == 'pdf' || $extension == 'docx'){
                $support_file = 'MYWSUPP'."_".$company_name.time().'.'.$file_client->getClientOriginalExtension();
            } else {
                return redirect()->back()->with(['fail' => 'invalid image format']);
            }
        }
        

        $newsuppticket = new support_ticket();
        $newsuppticket->ticket_id = 'MYWSUPP'.$rand_strip;
        if($check_user->branch_id == null){
                $newsuppticket->company_id = $check_user->company_id;
            } elseif ($check_user->company_id == null){
                $newsuppticket->branch_id = $check_user->branch_id;
            }
        $newsuppticket->subject = $request['subject'];
        $newsuppticket->status = 'Open';
        $newsuppticket->department = $request['dept_name'];
        $newsuppticket->priority = $request['priority_type'];
        $newsuppticket->date = $chk_time;
        
        

        $newsuppticket->save();
        //dd($newsuppticket->id);
        

        $newsuppmessage = new support_message();
        $newsuppmessage->ticket_id = 'MYWSUPP'.$rand_strip;
        $newsuppmessage->support_ticket_id = $newsuppticket->id;
        $newsuppmessage->sent_message = $request['sent_message'];
        $newsuppmessage->sent_message_date = $real_timer[0].' '.$real_timer[1];
        if($request->file('sent_file')){
            $newsuppmessage->files = $support_file;
            $destinationPath = Storage::putFileAs('public/images/SupportFiles', $file_client,$support_file);
        }

        $newsuppmessage->save();

        alert()->success('Support Ticket Opened')->autoclose(4000);
                return redirect()->back();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sendOtherMessagesToTicket(Request $request, $id)
    {
        //

        $current_user = Auth::id();
        $check_user = Employee::getEmployeeByID($current_user);
        
        $rnd = mt_rand();
        $chk_time = Carbon::now('GMT+1');
        
        $rand_strip = substr($rnd, 0, 4);
        $real_timer = explode(' ', $chk_time);
        //dd($real_timer[1]);

        $file_client = $request->file('sub_file');
        $company_name = $check_user->company->name;

        if($file_client){
            $extension = strtolower($file_client->getClientOriginalExtension());
            if($extension == 'png' || $extension == 'jpg' || $extension == 'jpeg' || $extension == 'pdf' || $extension == 'docx'){
                $support_file = 'MYWSUPP'."_".$company_name.time().'.'.$file_client->getClientOriginalExtension();
            } else {
                return redirect()->back()->with(['fail' => 'invalid image format']);
            }
        }

        $tick_id_got = $request['tick_id_get'];
        $sb_message = $request['sub_message'];

        //dd($tick_id_got.'-'.$sb_message);


        $newsuppmessage2 = new support_message();
        $newsuppmessage2->ticket_id = $id;
        $newsuppmessage2->support_ticket_id = $tick_id_got;
        $newsuppmessage2->sent_message = $sb_message;
        $newsuppmessage2->sent_message_date = $chk_time;
        if($request->file('sent_file')){
            $newsuppmessage2->files = $support_file;
            $destinationPath = Storage::putFileAs('public/images/SupportFiles', $file_client,$support_file);
        }

       // dd($newsuppmessage);

        
        
        $newsuppmessage2->save();
        

        alert()->success('Message submitted')->autoclose(4000);
                return redirect()->back();

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

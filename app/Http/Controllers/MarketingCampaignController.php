<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\campaign_type;
use App\campaign_status;
use App\Employee;
use Auth;

class MarketingCampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $camp_status = campaign_status::getAllCampaignStatus();
        $camp_type = campaign_type::getAllCampaignTypes();

        return view('marketing_campaign', ['camp_status' => $camp_status, 'camp_type' => $camp_type]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAllCampaigns()
    {
        //

        // $camp_status = campaign_status::getAllCampaignStatus();
        // $camp_type = campaign_type::getAllCampaignTypes();

        return view('campaigns');
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
    public function storeCampaignType(Request $request)
    {
        //

        $current_user = Auth::id();
        $check_user = Employee::getEmployeeByID($current_user);

        
        
            $newcampaigntype = new campaign_type();
            if($check_user->branch_id == null){
                $newcampaigntype->company_id = $check_user->company_id;
            } elseif ($check_user->company_id == null){
                $newcampaigntype->branch_id = $check_user->branch_id;
            }
            $newcampaigntype->type_name = $request['c_title'];

                //dd($newcampaigntype);
            $newcampaigntype->save();
                alert()->success('Campaign Type Successfully Added')->autoclose(4000);
                return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeCampaignStatus(Request $request)
    {
        //

        $current_user = Auth::id();
        $check_user = Employee::getEmployeeByID($current_user);

        
        
            $newcampaignstatus = new campaign_status();
            if($check_user->branch_id == null){
                $newcampaignstatus->company_id = $check_user->company_id;
            } elseif ($check_user->company_id == null){
                $newcampaignstatus->branch_id = $check_user->branch_id;
            }
            $newcampaignstatus->status_name = $request['c_status'];

                //dd($newcampaignstatus);
            $newcampaignstatus->save();
                alert()->success('Campaign Status Successfully Added')->autoclose(4000);
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\company;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\User;
use Illuminate\Support\Facades\File;

class CompanyController extends Controller
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
        return view('settings.company_setting');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $name = strip_tags($r->get('name'));
        $country = strip_tags($r->get('country'));
        $state = strip_tags($r->get('state'));
        $rc_code = strip_tags($r->get('rcnumber'));
        $phone = strip_tags($r->get('phone'));
        $email = strip_tags($r->get('email'));
        $website = strip_tags($r->get('website'));
        $currency = strip_tags($r->get('currency'));
        $address = strip_tags($r->get('address'));

        if(empty($name) || strlen($name) < 2){
            return $error = 'Please enter a valid name';
        }

        if(empty($country) || strlen($country) < 2){
            return $error = 'Please enter a valid country';
        }

        if(empty($state) || strlen($state) < 2){
            return $error = 'Please enter a valid state';
        }

        if(empty($rc_code) || strlen($rc_code) < 2){
            return $error = 'Please enter a valid Company Registration code';
        }

        if(empty($phone) || strlen($phone) < 2){
            return $error = 'Please enter a valid Phone number';
        }

        if(empty($website) || strlen($website) < 2){
            return $error = 'Please enter a valid website';
        }

        if(empty($email) || strlen($email) < 2){
            return $error = 'Please enter a valid email';
        }

        if(empty($address) || strlen($address) < 8){
            return $error = 'Please enter a valid Address';
        }




        $file = $r->file('file');

        if(empty($file)){
            return $error = 'Please upload company logo';
        }

        $extension = strtolower($file->getClientOriginalExtension());
        if($extension == 'png' || $extension == 'jpg' || $extension == 'jpeg'){
            $logo = $rc_code."_".$name.".".$file->getClientOriginalExtension();
        }else{
            return $error = 'invalid logo format';
        }

        //first chack if the rcCode already exist
        $check = company::select('id')->where('rcCode',$rc_code)->count('id');
        if($check == 0){
            $add = new company();
            $add->user_id = Auth::user()->id;
            $add->name = $name;
            $add->email = $email;
            $add->address = $address;
            $add->logo = $logo;
            $add->phone = $phone;
            $add->website = $website;
            $add->country = $country;
            $add->state = $state;
            $add->currency = $currency;
            $add->rcCode = $rc_code;
            if($add->save()){
                $destinationPath = Storage::putFileAs('public/images/companyLogo',$file,$logo);
                return 1;
            }else{
                return $error = 'Opps, something went wrong. Recheck your details and try again';
            }
        }else{
            return $error = 'Company registration code already exist for a company';
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

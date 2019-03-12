<?php

namespace App;

use App\Employee;
use Auth;
use App\client;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    //

    protected $table = 'clients';

    public static function getAllClients() {
        
        $cid = "";

        $checkEmp = Employee::select('company_id', 'branch_id')->where('user_id', Auth::id())->first();

         //dd($checkEmp);

        if($checkEmp->company_id != Null){
        	$cid = $checkEmp->company_id;
        	$client_list = client::where("company_id", $cid)->get();
        	return $client_list;
        } elseif($checkEmp->branch_id != Null) {
        	$cid = $checkEmp->branch_id;
        	$client_list = client::where("branch_id", $cid)->get();
        	return $client_list;
        }
    }

    public static function getClientById($id) {
        
        $clientId = client::where('id', '=', $id)->first();
        
        return $clientId;
    }
}
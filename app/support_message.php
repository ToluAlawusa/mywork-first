<?php

namespace App;

use App\support_ticket;
use App\support_message;
use Illuminate\Database\Eloquent\Model;

class support_message extends Model
{
    //

    public static function getMessagesByTicketID($id){

    	$ticketId = support_message::where('ticket_id', '=', $id)->with('support_ticket')->get();
        
        return $ticketId;
    }


    public function support_ticket(){
        return $this->belongsTo('App\support_ticket');
    }
}

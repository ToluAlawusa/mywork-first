<div class="card col-md-12">
  <div class="card-body" style="padding:12px">
  	   <h5>Hello <i>{{ $emailDetail->receiver_name }},</i></h5>
       <p style="padding-left: 30px">{{ $emailDetail->body }}</p>
  </div> 
  <div class="card-footer">
     <div class="col-md-12"><a href="{{$comp_deets->website}}">{{$comp_deets->website}}</a> | {{$comp_deets->email}} | {{$comp_deets->phone}} | {{$comp_deets->address}}</div>
     <small>Powered by Mywork</small>
  </div>
</div>
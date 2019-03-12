@extends('layouts.app')
@section('content')

	<div class="site-content">
        <!-- Content -->
        <div class="content-area py-1">
            <div class="container-fluid">
            	<!-- <h4>STicket Number</h4>
                <ol class="breadcrumb no-bg mb-1">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Payroll</a></li>
                    <li class="breadcrumb-item active">Support</li>
                </ol> -->


		        <div class="box box-block bg-white">
		        			<p>
                              <a href="{{route('support_maintenance')}}"><button class="btn btn-rounded btn-primary pull-right" data-toggle="modal" data-target="#openSupportTicket"><b><i class="fa fa-backward"></i></b> All Tickets</button></a>
                            </p>
							<b><h5>Ticket </h5></b>
							
							<p class="font-90 text-muted mb-1">{{$chk_messages->support_ticket->ticket_id}}</p>

            		<div class="row mb-1">
							<div class="col-md-8">
								<div class="card">
									<div class="card-header text-uppercase" style="background:#27569a; color:#fff"><b>Message(s)</b></div>
									<div class="card-block">
										<b><h4 style="margin-bottom: 20px">{{$chk_messages->support_ticket->subject}}</h4></b>
										<hr style="border-top: 1px dotted">
										<div class="comments">
											
											<div class="c-item" style="border: 2px; margin: 20px; padding: 10px">
												<div class="media">
													<div class="media-left">
														<div class="avatar box-48">
															<img class="b-a-radius-circle" src="{{ asset('back/img/avatars/2.jpg')}}" alt="">
														</div>
													</div>

														
													<form method="POST" action="/add_new_ticket_mess/{{$chk_messages->support_ticket->ticket_id}}" enctype="multipart/form-data">
														 @csrf
													<input type="hidden" name="tick_id_get" value="{{$chk_messages->support_ticket->id}}">
														
													<div class="media-body">
														<div class="c-compose">
															
																<textarea placeholder="Add a comment..." name="sub_message"></textarea>
															
														</div>
													</div>
													<div class="form-group">
									                    <label>Add Files (optional)</label>
									                    <input type="file" name="sub_file" id="input-file-now" class="dropify"/>
									                    <p>(Allowed File Extension: .jpg, .gif, .docx, .pdf, .png)</p>
									                </div>
									                <button type="submit" class="btn btn-success btn-rounded pull-right">Submit</button>
									                </form>
												</div>
											</div>
											<div class="c-item">
												@foreach($tick_messages as $list_comp_messages)
												 @if($list_comp_messages->replied_message_date != null)
												<div class="media">
													<div class="media-left">
														<div class="avatar box-48">
															<img class="b-a-radius-circle" src="{{ asset('back/img/avatars/1.jpg')}}" alt="">
														</div>
													</div>
													<div class="media-body" style="border: 1px solid #81dce9; padding: 10px; background: #81dce9">
														<div class="mb-0-5">
															<a class="c-user text-black" href="#"><span class="underline">MyWork Support</span></a>
															<span class="font-90 pull-right" style="color: #fff">3 hours ago ({{$list_comp_messages->replied_message_date}})</span>
														</div>
														<div class="c-text">{{$list_comp_messages->replied_message}}</div>
														
													</div>
													<div class="media-right">
														<div class="c-rating">
															<!-- <a class="text-grey" href="#"><i class="ti-arrow-up"></i></a>
															<span class="text-success mx-0-5">+7</span>
															<a class="text-grey" href="#"><i class="ti-arrow-down"></i></a> -->
														</div>
													</div>
												</div>
												@endif
												@endforeach
												@foreach($tick_messages as $list_comp_messages)
												<div class="c-item">
													<div class="media">
														<div class="media-left">
															<div class="avatar box-48">
																
															</div>
														</div>
														
														<div class="media-body" style="border: 1px solid #f5f5f5; padding: 10px; background: #f5f5f5">
															<div class="mb-0-5" style="text-align: right">
																<a class="c-user text-black" href="#"><span class="underline">{{$list_comp_messages->support_ticket->company->name}}</span></a>
																<span class="font-90 text-muted pull-left">{{$list_comp_messages->created_at->diffForHumans()}} ({{$list_comp_messages->sent_message_date}})</span>
															</div>
															<div class="c-text">{{$list_comp_messages->sent_message}}</div>
															<!-- <a class="text-grey" href="#"><i class="fa fa-reply"></i> Reply</a> -->
														</div>
														<div class="media-right">
															<div class="avatar box-48">
																<img class="b-a-radius-circle" src="{{ asset('back/img/avatars/2.jpg')}}" alt="">
															</div>
														</div>
														
													</div>
												</div>
												@endforeach
											</div>
											
										</div>
									</div>
									
								</div>
							</div>
							<div class="col-xs-4">
								<div class="card">
									<div class="card-header text-uppercase" style="background:#73A534; color:#fff"><b>Details</b></div>
									<div class="card-block">
										<div class="items-list">
											
										<div class="il-item">
											
												<div class="media">
													<div class="media-left">
														<div class="box-48">
															<!-- <img class="img-fluid" src="img/photos-2/1.jpg" alt=""> -->
															<i class="fa fa-tag fa-2x"></i>
														</div>
													</div>
													<div class="media-body">
														<h6 class="media-heading">Status</h6>
														<span class="text-muted">{{$chk_messages->support_ticket->status}}</span>
													</div>
												</div>
												
										</div>
										<div class="il-item">
											
												<div class="media">
													<div class="media-left">
														<div class="box-48">
															<i class="fa fa-folder-open fa-2x"></i>
														</div>
													</div>
													<div class="media-body">
														<h6 class="media-heading">Department</h6>
														<span class="text-muted">{{$chk_messages->support_ticket->department}}</span>
													</div>
												</div>
												
										</div>
										<div class="il-item">
											
												<div class="media">
													<div class="media-left">
														<div class="box-48">
															<i class="fa fa-balance-scale fa-2x"></i>
														</div>
													</div>
													<div class="media-body">
														<h6 class="media-heading">Priority</h6>
														<span class="text-muted">{{$chk_messages->support_ticket->priority}}</span>
													</div>
												</div>
												
										</div>
										<div class="il-item">
											
												<div class="media">
													<div class="media-left">
														<div class="box-48">
															<i class="fa fa-clock-o fa-2x"></i>
														</div>
													</div>
													<div class="media-body">
														<h6 class="media-heading">Added</h6>
														<span class="text-muted">{{$chk_messages->support_ticket->created_at}}</span>
													</div>
												</div>
												
											
										</div>
										<!-- <div class="il-item">
											
												<div class="media">
													<div class="media-left">
														
													</div>
													@if($chk_messages->support_ticket->status == "Open")
													<div class="media-body" style="border-bottom: none">
														
														<span class="text-muted">Your issue is already resolved? Click button below to close this ticket</span>
														
														<button class="btn btn-rounded btn-primary pull-right" style="margin-top: 20px"><b><i class="fa fa-check-square-o"></i></b> Close Issue</button>
													</div>
													@else
													<div class="media-body" style="border-bottom: none">
														
														<span class="text-muted">Your issue is not yet resolved? Use button below to re-open this ticket</span>
														
														<button class="btn btn-rounded btn-primary pull-right" style="margin-top: 20px"><b><i class="fa fa-check-square-o"></i></b> Re-Open Issue</button>
													</div>
													@endif
												</div>
												
										</div> -->
										
									</div>
									</div>
								</div>
							</div>
						</div>
				</div>
            </div>
        </div>
    </div>

    <!-- Vendor JS -->
		<script type="text/javascript" src="{{ asset('back/vendor/jquery/jquery-1.12.3.min.js')}}"></script>
		<script type="text/javascript" src="{{ asset('back/vendor/tether/js/tether.min.js')}}"></script>
		<script type="text/javascript" src="{{ asset('back/vendor/bootstrap4/js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{ asset('back/vendor/detectmobilebrowser/detectmobilebrowser.js')}}"></script>
		<script type="text/javascript" src="{{ asset('back/vendor/jscrollpane/jquery.mousewheel.js')}}"></script>
		<script type="text/javascript" src="{{ asset('back/vendor/jscrollpane/mwheelIntent.js')}}"></script>
		<script type="text/javascript" src="{{ asset('back/vendor/jscrollpane/jquery.jscrollpane.min.js')}}"></script>
		<script type="text/javascript" src="{{ asset('back/vendor/jquery-fullscreen-plugin/jquery.fullscreen-min.js')}}"></script>
		<script type="text/javascript" src="{{ asset('back/vendor/waves/waves.min.js')}}"></script>
		<script type="text/javascript" src="{{ asset('back/vendor/switchery/dist/switchery.min.js')}}"></script>
		<script type="text/javascript" src="{{ asset('back/vendor/dropify/dist/js/dropify.min.js')}}"></script>

		<!-- Neptune JS -->
		<script type="text/javascript" src="{{ asset('back/js/app.js')}}"></script>
		<script type="text/javascript" src="{{ asset('back/js/demo.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/js/forms-upload.js')}}"></script>

@endsection
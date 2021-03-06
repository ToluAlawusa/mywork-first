@extends('layouts.app')
@section('content')

	<div class="site-content">
				<!-- Content -->
				<div class="content-area py-1">
					<div class="container-fluid">
						<h4>Staff Training Register</h4>
						<ol class="breadcrumb no-bg mb-1">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item"><a href="#">Trainings & Career Development</a></li>
							<li class="breadcrumb-item active">Trainings Register</li>
						</ol>
						<div class="box box-block bg-white">
							<!-- <h5 class="mb-1"> Scheduled Trainings Register</h5> -->
							<button style="margin-bottom: 10px" class="btn btn-rounded btn-primary pull-right" data-toggle="modal" data-target="#addStaffTraining"><b>+</b>Add Staff Register</button>
							<br/>
							<table class="table table-striped table-bordered dataTable" id="table-1">
								<thead>
									<tr>
										<th>S/N</th>
										<th>Training Types</th>
										<th>Designation</th>
										<th>Employee</th>
										<th>Why The Training Matters</th>
										<th>Recommended Courses</th>
										<th>Location</th>
										<th>Approval Status</th>
										<th>Completed</th>	
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($trainR as $indexKey => $trainReg)
									<tr>
										<td>{{$indexKey+1}}</td>
										<td>{{$trainReg->training_type->name}}</td>
										<td>{{$trainReg->Employee->designation->name}}</td>
										<td>{{$trainReg->Employee->user->name}}</td>
										<td>{{$trainReg->why_training_matters}}</td>
										<td>{{$trainReg->recommended_courses}}</td>
										<td>{{$trainReg->training_type->training_location->name}}</td>
										<form method="POST" action="{{'/update_staff_training/'.$trainReg->id}}">
											@csrf
											@if($trainReg->approval_status=="Approved")
											<td>YES</td>
											@else
											<td>
												<select id="" name="approval">
								                    <option value="Pending" <?php if($trainReg->approval_status=="Pending") echo 'selected="selected"'; ?>>Pending</option>
								                    <option value="Approved" <?php if($trainReg->approval_status=="Approved") echo 'selected="selected"'; ?>>Approved</option>   
								                </select>
											</td>
											@endif
											@if($trainReg->approval_status=="Approved" && $trainReg->completed=="No")
											<td>
												<select id="" name="completed" required>
								                    <option value="No" <?php if($trainReg->completed=="No") echo 'selected="selected"'; ?>>No</option>
								                    <option value="Yes" <?php if($trainReg->completed=="Yes") echo 'selected="selected"'; ?>>Yes</option>   
								                </select>
											</td>
											@elseif($trainReg->approval_status=="Approved" && $trainReg->completed=="Yes")
											<td>YES</td>
											@else
											<td></td>
											@endif
											@if($trainReg->approval_status=="Approved" && $trainReg->completed=="Yes")
											<td>
												<button class="btn btn-success btn-rounded" disabled="disabled" type="submit">
		                                        Update
		                                    	</button>
	                                		</td>
	                                		@else
	                                		<td>
												<button class="btn btn-success btn-rounded" type="submit">
		                                        Update
		                                    	</button>
	                                		</td>
	                                		@endif
                                		</form>
									</tr>
									@endforeach
								</tbody>
								
							</table>
						</div>
					</div>	
				</div>
				<!-- Footer -->
				<footer class="footer">
					<div class="container-fluid">
						<div class="row text-xs-center">
							<div class="col-sm-4 text-sm-left mb-0-5 mb-sm-0">
								2016 © Neptune
							</div>
							<div class="col-sm-8 text-sm-right">
								<ul class="nav nav-inline l-h-2">
									<li class="nav-item"><a class="nav-link text-black" href="#">Privacy</a></li>
									<li class="nav-item"><a class="nav-link text-black" href="#">Terms</a></li>
									<li class="nav-item"><a class="nav-link text-black" href="#">Help</a></li>
								</ul>
							</div>
						</div>
					</div>
				</footer>	
			</div>

			<!-- Modals -->
			@include('modals.add_staffs_training')

			<!-- Modals -->	


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
        <script type="text/javascript" src="{{ asset('back/vendor/DataTables/js/jquery.dataTables.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/vendor/DataTables/js/dataTables.bootstrap4.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/vendor/DataTables/Responsive/js/dataTables.responsive.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/vendor/DataTables/Responsive/js/responsive.bootstrap4.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/vendor/DataTables/Buttons/js/dataTables.buttons.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/vendor/DataTables/Buttons/js/buttons.bootstrap4.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/vendor/DataTables/JSZip/jszip.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/vendor/DataTables/pdfmake/build/pdfmake.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/vendor/DataTables/pdfmake/build/vfs_fonts.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/vendor/DataTables/Buttons/js/buttons.html5.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/vendor/DataTables/Buttons/js/buttons.print.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/vendor/DataTables/Buttons/js/buttons.colVis.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/vendor/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
		<script type="text/javascript" src="{{ asset('back/vendor/clockpicker/dist/jquery-clockpicker.min.js')}}"></script>
		<script type="text/javascript" src="{{ asset('back/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
		<script type="text/javascript" src="{{ asset('back/vendor/moment/moment.js')}}"></script>
		<script type="text/javascript" src="{{ asset('back/vendor/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

        <!-- Neptune JS -->
        <script type="text/javascript" src="{{ asset('back/js/app.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/js/demo.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/js/tables-datatable.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/js/forms-pickers.js')}}"></script>

@endsection
@extends('layouts.app')
@section('content')



	<div class="site-content">
                <!-- Content -->
                <div class="content-area py-1">
                    <div class="container-fluid">
                        <h4>Training Types</h4>
                        <ol class="breadcrumb no-bg mb-1">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Training & Career Development</a></li>
                            <li class="breadcrumb-item active">Training Types</li>
                        </ol>
                        <div class="box box-block bg-white col-md-7" style="margin-right: 5px; margin-left: 20px">
                            <!-- <h5 class="mb-1">Employee Payroll Data</h5> -->
                             <button style="margin-left: 10px; float: right;" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#addTrainingTypes"><b>+</b>Add Training Type</button>
                            <table class="table table-striped table-bordered dataTable" id="table-2">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Training Code</th>
                                        <th>Title</th>
                                        <th>Duration</th>
                                        <th>Certification</th>
                                        <th>Location</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr>
                                    	@foreach($trainT as $indexKey => $trainTypes)
                                        <td>{{$indexKey+1}}</td>
                                        <td>{{$trainTypes->training_code}}</td>
                                        <td>{{$trainTypes->name}}</td>
                                        <td>{{$trainTypes->duration}}</td>
                                        <td>{{$trainTypes->certification}}</td>
                                        <td>{{$trainTypes->training_location->name}}</td>
                                        <td><div class="clearfix">
                                            <div class="dropdown dropup float-xs-left mr-0-25">
                                    <button class="btn btn-primary dropdown-toggle btn-rounded" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu animated flipInY" aria-labelledby="dropdownMenuButton">
                                        <button class="dropdown-item" data-toggle="modal" data-target="#editTrainingTypes" data-identity="{{$trainTypes->id}}"
                                    data-name="{{$trainTypes->name}}" data-duration="{{$trainTypes->duration}}" data-cert="{{$trainTypes->certification}}" data-loca="{{$trainTypes->training_location->id}}">Edit</button>
                                        <button class="dropdown-item" data-toggle="modal" data-target="#deleteTrainingTypeData" data-identity="{{$trainTypes->id}}" data-name="{{$trainTypes->name}}">Delete</button>
                                    </div>
                                </div></div></td>
                                		
                                    </tr>
                                    
                                    	@endforeach
                                </tbody>
                                <!-- <tfoot>
                                    <tr>
                                        <th>Rendering engine</th>
                                        <th>Browser</th>
                                        <th>Platform(s)</th>
                                        <th>Engine version</th>
                                        <th>CSS grade</th>
                                    </tr>
                                </tfoot> -->
                            </table>
                        </div>
                        <div class="box box-block bg-white col-md-4" style="margin-left: 5px">
                            <!-- <h5 class="mb-1">Employee Payroll Data</h5> -->
                             <button style="margin-left: 10px; float: right; margin-bottom: 5px" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#addTrainingLoc"><b>+</b>Add Training Location</button>
                            <table class="table table-striped table-bordered dataTable" id="table-2">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Location</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($trainL as $indexKey => $trainLocation)
                                    <tr>
                                        <td>{{$indexKey+1}}</td>
                                        <td>{{$trainLocation->name}}</td>
                                        <td><div class="clearfix">
                                            <div class="dropdown dropup float-xs-left mr-0-25">
                                    <button class="btn btn-primary dropdown-toggle btn-rounded" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu animated flipInY" aria-labelledby="dropdownMenuButton">
                                        <button class="dropdown-item" data-toggle="modal" data-target="#editTrainingLoc" data-identity="{{$trainLocation->id}}"
                                    data-name="{{$trainLocation->name}}">Edit</button>
                                        <button class="dropdown-item" data-toggle="modal" data-target="#deleteTrainingLoc" data-identity="{{$trainLocation->id}}"
                                    data-name="{{$trainLocation->name}}">Delete</button>
                                    </div>
                                </div></div></td>

                                    </tr>
                                    @endforeach

                                </tbody>
                                <!-- <tfoot>
                                    <tr>
                                        <th>Rendering engine</th>
                                        <th>Browser</th>
                                        <th>Platform(s)</th>
                                        <th>Engine version</th>
                                        <th>CSS grade</th>
                                    </tr>
                                </tfoot> -->
                            </table>
                        </div>


                    </div>
                </div>

            </div>

            <!-- Modal -->
        	@include('modals.add_training_types')
        	@include('modals.add_training_location')
            @include('modals.edit_training_types')
            @include('modals.delete_training_types')
            @include('modals.edit_training_location')
            @include('modals.delete_training_location')


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

        <!-- Neptune JS -->
        <script type="text/javascript" src="{{ asset('back/js/app.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/js/demo.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/js/tables-datatable.js')}}"></script>

        @include('logic.trainingjs')
        

@endsection
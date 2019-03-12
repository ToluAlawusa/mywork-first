@extends('layouts.app')
@section('content')

    <div class="site-content">
                <!-- Content -->
                <div class="content-area py-1">
                    <div class="container-fluid">
                        <h4>Attendance Register</h4>
                        <ol class="breadcrumb no-bg mb-1">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Attendance</a></li>
                            <li class="breadcrumb-item active">Attendance Register</li>
                        </ol>
                        <div class="box box-block bg-white">
                            <!-- <h5 class="mb-1">Employee Payroll Data</h5> -->
                             <!-- <button style="margin-left: 10px; float: right;" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#addPayrollData"><b>+</b>Add Payroll Data</button> -->
                            <table class="table table-striped table-bordered dataTable" id="table-2">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Employee</th>
                                        <th>Reason For Lateness</th>
                                        <th>Reason For Location Difference</th>
                                        <th>Outside office Location</th>
                                        <th>Present</th>
                                        <!-- <th>Change Status</th> -->

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($all_att_list as $indexKey => $att_lists)
                                    <tr>
                                        <td>{{$indexKey+1}}</td>
                                        <td>{{$att_lists->clocked_in_date}}</td>
                                        <td>{{$att_lists->clocked_in_time}}</td>
                                        <td>{{$att_lists->Employee->User->name}}</td>
                                        <td>{{$att_lists->lateness_reason}}</td>
                                        <td>{{$att_lists->location_reason}}</td>
                                        <td>{{$att_lists->location_reason_address}}</td>
                                        @if($att_lists->present == 0)
                                            <td><i class="fa fa-close" style="font-size:24px"></i></td>
                                        @else
                                            <td><i class="fa fa-check" style="font-size:24px"></i></td>
                                        @endif
                                        <!-- <td><div class="clearfix">
                                            <div class="dropdown dropup float-xs-left mr-0-25">
                                    <button class="btn btn-primary dropdown-toggle btn-rounded" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu animated flipInY" aria-labelledby="dropdownMenuButton">
                                        <button class="dropdown-item">Change</button>
                                        
                                    </div>
                                </div></div></td> -->
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Modal -->


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




@endsection

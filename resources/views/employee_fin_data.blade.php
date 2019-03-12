@extends('layouts.app')
@section('content')

    <div class="site-content">
                <!-- Content -->
                <div class="content-area py-1">
                    <div class="container-fluid">
                        <h4>Employee Payroll Data</h4>
                        <ol class="breadcrumb no-bg mb-1">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Payroll</a></li>
                            <li class="breadcrumb-item active">Employee Payroll Data</li>
                        </ol>
                        <div class="box box-block bg-white">
                            <!-- <h5 class="mb-1">Employee Payroll Data</h5> -->
                             <button style="margin-left: 10px; float: right;" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#addPayrollData"><b>+</b>Add Payroll Data</button>
                            <table class="table table-striped table-bordered dataTable" id="table-2">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Employee Name</th>
                                        <th>Designation</th>
                                        <th>Gross Salary</th>
                                        <th>Basic Salary</th>
                                        <th>Housing</th>
                                        <th>Pension</th>
                                        <th>Slips</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($allpayrolldata as $indexKey => $payrolldatas)
                                    <tr>
                                        <td>{{ $indexKey+1 }}</td>
                                        <td>{{ $payrolldatas->Employee->user->name }}</td>
                                        <td>{{ $payrolldatas->Employee->designation->name }}</td>
                                        <td>{{ number_format($payrolldatas->gross_salary_monthly) }}</td>
                                        <td>{{ number_format($payrolldatas->basic_salary) }}</td>
                                        <td>{{ number_format($payrolldatas->housing) }}</td>
                                        <td>{{ number_format($payrolldatas->pension) }}</td>
                                        <td><a href="{{'/generate_payslip/'.$payrolldatas->Employee->id }}"><button class="btn btn-success btn-rounded" type="button">
                                        Generate Payslip
                                    </button></a></td>
                                        <td><div class="clearfix">
                                            <div class="dropdown dropup float-xs-left mr-0-25">
                                    <button class="btn btn-primary dropdown-toggle btn-rounded" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu animated flipInY" aria-labelledby="dropdownMenuButton">
                                        <button class="dropdown-item" data-toggle="modal" data-target="#viewPayrollData" data-identity="{{ $payrolldatas->id }}"
                                    data-gross_salary="{{ $payrolldatas->gross_salary_monthly }}">View</button>
                                        <button class="dropdown-item" data-toggle="modal" data-target="#editPayrollData" data-identity="{{ $payrolldatas->id }}"
                                    data-gross_salary="{{ $payrolldatas->gross_salary_monthly }}">Edit</button>
                                        <button class="dropdown-item" data-toggle="modal" data-target="#deletePayrollData" data-identity="{{ $payrolldatas->employee_id }}"
                                    data-name="{{ $payrolldatas->Employee->user->name }}">Delete</button>
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
        @include('modals.add_payroll_data')
        @include('modals.edit_payroll_data')
        @include('modals.delete_payroll_data')
        @include('modals.view_payroll_data')


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
        @include('logic.clientjs')
        @include('logic.payrolljs')



@endsection

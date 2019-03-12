@extends('layouts.app')
@section('content')

        <div class="site-content" id="take_away">
                <!-- Content -->
                <div class="content-area py-1">
                    <div class="container-fluid">
                        <button>Try It</button>

                        <p id="demo"></p>
                        <h4>Payslips</h4>
                        <ol class="breadcrumb no-bg mb-1">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Payroll</a></li>
                            <li class="breadcrumb-item active">Payslips</li>
                        </ol>
                        <div class="box box-block bg-white">
                            <!-- <h5 class="mb-1">Employee Payroll Data</h5> -->
                             <!-- <button style="margin-left: 10px; float: right;" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#addPayrollData"><b>+</b>Add Payroll Data</button> -->
                            <table class="table table-striped table-bordered dataTable" id="table-2">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Payslid ID</th>
                                        <th>Employee Name</th>
                                        <th>Designation</th>
                                        <th>Total Earnings</th>
                                        <th>Total Deductions</th>
                                        <th>Net Salary</th>
                                        <th>Month - Year</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($payslipload as $indexKey => $paysliploads)
                                    <tr>
                                        <td>{{$indexKey+1}}</td>
                                        <td>{{ $paysliploads->payslip_unique_id }}</td>
                                        <td>{{ $paysliploads->Employee->user->name }}</td>
                                        <td>{{ $paysliploads->Employee->designation->name }}</td>
                                        <td>&#8358;{{ number_format($paysliploads->total_earnings) }}</td>
                                        <td>&#8358;{{ number_format($paysliploads->total_deductions) }}</td>
                                        <td>&#8358;{{ number_format($paysliploads->net_salary) }}</td>
                                        <td>{{ $paysliploads->month_year }}</td>
                                        <td>
                                    <div class="clearfix">
                                            <div class="dropdown dropup float-xs-left mr-0-25">
                                    <button class="btn btn-primary dropdown-toggle btn-rounded" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu animated flipInY" aria-labelledby="dropdownMenuButton">
                                        <button class="dropdown-item" data-toggle="modal" data-target="#generatePayslipModal" data-identity="{{$paysliploads->id}}"
                                    data-basic_salary="{{$paysliploads->Employee->employeeFinancialData->basic_salary}}"
                                    data-housing="{{$paysliploads->Employee->employeeFinancialData->housing}}"
                                    data-transport="{{$paysliploads->Employee->employeeFinancialData->transport}}"
                                    data-utility="{{$paysliploads->Employee->employeeFinancialData->utility}}" data-entert="{{$paysliploads->Employee->employeeFinancialData->entertainment}}"
                                    data-meal="{{$paysliploads->Employee->employeeFinancialData->meal}}"
                                    data-total_earnings="{{$paysliploads->total_earnings}}"
                                    data-pension="{{$paysliploads->Employee->employeeFinancialData->pension}}"
                                    data-nhf="{{$paysliploads->Employee->employeeFinancialData->nhf}}"
                                    data-nhis="{{$paysliploads->Employee->employeeFinancialData->nhis}}"
                                    data-paye="{{$paysliploads->paye_tax}}"
                                    data-absent_days="{{$paysliploads->absent_days}}"
                                    data-total_deduc="{{$paysliploads->total_deductions}}"
                                    data-net_salary="{{$paysliploads->net_salary}}"
                                    data-month="{{$paysliploads->month_year}}"
                                    data-payslipid="{{$paysliploads->payslip_unique_id}}"
                                    data-employee_name="{{$paysliploads->Employee->user->name}}"
                                    data-designation="{{$paysliploads->Employee->designation->name}}">View</button>
                                        <button class="dropdown-item" data-toggle="modal" data-target="#deleteEmpPayslip" data-identity="{{$paysliploads->id}}"
                                    data-employee_name="{{$paysliploads->Employee->user->name}}">Delete</button>
                                    </div>
                                </div></div>

                                </td>

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
            @include('modals.generate_payslip')
            @include('modals.delete_payslip')


            <!-- Vendor JS -->
        <script type="text/javascript" src="{{ asset('back/vendor/jquery/jquery-1.12.3.min.js')}}"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script> -->
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
        <script type="text/javascript" src="{{ asset('back/vendor/jspdf/jspdf.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/vendor/jspdf/jspdf.plugin.standard_fonts_metrics.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/vendor/jspdf/jspdf.plugin.split_text_to_size.js')}}"></script>
        <script type="text/javascript" src="{{ asset('back/vendor/jspdf/jspdf.plugin.from_html.js')}}"></script>

        @include('logic.payrolljs')



@endsection

@extends('layouts.app')
@section('content')

	<div class="site-content" id="content">
    <!-- Content -->
        <div class="content-area py-1">
            <div class="container-fluid">
            	<div class="col-lg-12 col-md-12">
                    <div class="card invoice1">
                        <div class="body" style="margin-top: 20px">
                            <button id="itry">Try It</button>
                          <div class="col-md-6" style="">
                                <div style="" class="">
                                    <img style="width: 70px; height: 70px; margin-left: 25px" src="{{ asset('back/img/avatar.jpg')}}" alt="user" class="rounded-circle">
                                </div>
                                <div style="" class="">
                                    <h6 style="padding-left: 40px">{{$payrollid_datas->Employee->user->name}}</h6>
                                    <p>{{$payrollid_datas->Employee->designation->name}}<br>Employee ID: LA-0258</p>
                                </div>
                          </div>
                          <form method="POST" action="/generate_payslip/{{$id}}">
                          	@csrf
                          <div class="col-md-6" >
                                <div style="float: right;" class="title">
                                    <!-- <h4>Invoice #1069</h4> -->
                                    <p>Salary Month: {{$month.', '.$year}}</p>
                                </div>
                          </div>
                            <div class="invoice-top clearfix">


                            </div>


                            <hr>
                        <div class="col-lg-12 col-md-12">
                            <div class="invoice-mid clearfix">

                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead style="color:#fff; background-color: #22af46; border-color: #22af46;" class="table-success">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Earnings</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Basic Salary</td>
                                                    <td>&#8358;{{ number_format($payrollid_datas->basic_salary)}}</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Housing</td>
                                                    <td id="basic_housingr">&#8358;{{ number_format($payrollid_datas->housing)}}</td>
                                                </tr></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Transport</td>
                                                    <td id="basic_transr">&#8358;{{ number_format($payrollid_datas->transport)}}</td>
                                                </tr></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Utility</td>
                                                    <td id="basic_utilityr">&#8358;{{ number_format($payrollid_datas->utility)}}</td>
                                                </tr></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Entertainment</td>
                                                    <td id="basic_entr">&#8358;{{ number_format($payrollid_datas->entertainment)}}</td>
                                                </tr></td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Meal</td>
                                                    <td id="basic_mealr">&#8358;{{ number_format($payrollid_datas->meal)}}</td>
                                                </tr></td>
                                                </tr>
                                                <!-- <tr>
                                                    <td>7</td>
                                                    <td>Other Allowances</td>
                                                    <input type="text" name="email">
                                                </tr> -->
                                                <tr>
                                                    <td></td>
                                                    <td><strong>Total Earnings</strong></td>
                                                    <input type="hidden" name="total_earning" id="total_earning" value="{{ $payrollid_datas->gross_salary_monthly}}">
                                                    <td><strong>&#8358;{{ number_format($payrollid_datas->gross_salary_monthly)}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead style="color: #fff;background-color:#de4848;border-color: #de4848;" class="table-danger">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Deductions</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Pension</td>
                                                    <input type="hidden" name="" id="deduct_pension" value="{{ $payrollid_datas->pension}}">
                                                    <td>&#8358;{{ number_format($payrollid_datas->pension)}}</td>
                                                </tr></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>National Housing Fund</td>
                                                    <input type="hidden" name="" id="deduct_nhf" value="{{ $payrollid_datas->nhf}}">
                                                    <td>&#8358;{{ number_format($payrollid_datas->nhf)}}</td>
                                                </tr></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>National Health Insurance Scheme</td>
                                                    <input type="hidden" name="" id="deduct_nhis" value="{{ $payrollid_datas->nhis}}">
                                                    <td>&#8358;{{ number_format($payrollid_datas->nhis)}}</td>
                                                </tr></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>PAYE (Tax. in % of monthly gross)</td>
                                                    <input type="hidden" name="paye_tax" id="paye_tax">
                                                    <td><input type="text" name="" size="3" id="pick_tax" required> of &#8358;  ({{number_format($payrollid_datas->gross_salary_monthly)}})</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Absent Days (insert no of absent days)</td>
                                                    <input type="hidden" name="absent_d" id="absent_d">
                                                    <td><select id="abs_days">
                                                    	
                                                    	<option value="{{0}}">{{0}}</option>
                                                    	@for ($i = 1; $i <= $count_working_days; $i++)
                                                    	<option value="{{$i}}">{{$i}}</option>
                                                    	@endfor
           
                                                    </select> of {{$count_working_days}} working days</td>
                                                    <input type="hidden" name="" value="{{$count_working_days}}" id="working_days">
                                                </tr>

                                                <tr>
                                                    <td></td>
                                                    <td><strong>Total Deductions</strong></td>
                                                    <td id="total_deduct"><strong>&#8358;<span></span></strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <!-- <h5>Note</h5>
                                    <p>Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.</p> -->
                                </div>
                                <div class="col-md-6 text-right" style="padding-left: 230px">

                                    <p class="m-b-0"><b>Total Earnings:</b> &#8358;{{ number_format($payrollid_datas->gross_salary_monthly)}}</p>
                                    <input type="hidden" name="tot_earn" id="tot_earn">
                                    <p class="m-b-0" id="second_deduct"><b>Total Deductions:</b> &#8358;<span></span></p>
                                    <input type="hidden" name="tot_ded" id="tot_ded">
                                    <h5 class="m-b-0 m-t-10" id="net_sal">Net Salary: &#8358;<span></span></h5>
                                    <input type="hidden" name="tot_net" id="tot_net">
                                    <input type="hidden" name="month_year" value="{{$month.' - '.$year}}">
                                </div>
                                <div class="hidden-print col-md-12 text-right">
                                    <hr>
                                    <!-- <button class="btn btn-outline-secondary"><i class="icon-printer"></i></button> -->
                                    <button type="submit" class="btn btn-primary btn-rounded pull-right" style="margin: 10px">Generate</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
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
        @include('logic.payrolljs')     	


@endsection
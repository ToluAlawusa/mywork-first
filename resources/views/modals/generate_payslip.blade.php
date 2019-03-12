
<div class="modal fade" id="generatePayslipModal" tabindex="-1" role="dialog" >
    <div class="modal-dialog modal-lg" role="document">


                <div class="col-lg-12 col-md-12" id="content">
                    <div class="card invoice1">
                        <div class="body" style="margin-top: 20px">

                          <div class="col-md-6" style="">
                                <div style="" class="">
                                    <img style="width: 70px; height: 70px; margin-left: 25px" src="{{ asset('back/img/avatar.jpg')}}" alt="user" class="rounded-circle">
                                </div>
                                <div style="" class="">
                                    <h6 style="padding-left: 40px" id="emp_name_slip"><span></span></h6>
                                    <p id="desig_slip"><span></span></p>
                                    <p>Employee ID: <span></span></p>
                                </div>
                          </div>

                          <div class="col-md-6" >
                                <div style="float: right;" class="title">
                                    <h4 id="payslipid_slip">Payslip ID: <span></span> </h4>
                                    <p id="month_slip">Salary Month: <span></span></p>
                                </div>
                          </div>
                          <div id="editor"></div>
                            <div class="row">
                                <div class="col-md-6" style="margin-top: 10px; padding-right: 25px;" id="button_away">
                                    <button id="cmd" onclick="demoFromHTML()" class="btn btn-primary btn-rounded buttons-pdf buttons-html5 pull-right" style="">Download PDF</button>
                                    <button id="cmd_print" style="margin-right: 5px" class="btn btn-success btn-rounded pull-right"><span class=" fa fa-print fa-sm"></span> Print</button>
                                    <button id="share_email" style="margin-right: 5px" class="btn btn-warning btn-rounded pull-right"><span class=" fa fa-envelope fa-sm"></span> Share</button>


                                </div>

                                <div class="col-md-6" style="">

                                </div>


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
                                                    <td id="basic_salary_slip">&#8358; <span></span></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Housing</td>
                                                    <td id="housing_slip">&#8358; <span></span></td>
                                                </tr></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Transport</td>
                                                    <td id="trans_slip">&#8358; <span></span></td>
                                                </tr></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Utility</td>
                                                    <td id="util_slip">&#8358; <span></span></td>
                                                </tr></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Entertainment</td>
                                                    <td id="entert_slip">&#8358; <span></span></td>
                                                </tr></td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Meal</td>
                                                    <td id="meal_slip">&#8358; <span></span></td>
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
                                                    <td id="tot_earn_slip"><strong>&#8358; <span></span></strong></td>
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

                                                    <td id="pension_slip">&#8358; <span></span></td>
                                                </tr></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>National Housing Fund</td>

                                                    <td id="nhf_slip">&#8358; <span></span></td>
                                                </tr></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>National Health Insurance Scheme</td>

                                                    <td id="nhis_slip">&#8358; <span></span></td>
                                                </tr></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>PAYE (fee charged)</td>
                                                    <td id="paye_slip">&#8358; <span></span></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Absent Days (fee charged)</td>
                                                    <td id="absent_slip">&#8358; <span></span></td>
                                                </tr>

                                                <tr>
                                                    <td></td>
                                                    <td><strong>Total Deductions</strong></td>
                                                    <td id="tot_ded_slip"><strong>&#8358; <span></span></strong></td>
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

                                    <p class="m-b-0" id="tot_earn_slip"><b>Total Earnings:</b> &#8358 <span></span></p>
                                    <p class="m-b-0" id="tot_ded_slip"><b>Total Deductions:</b> &#8358<span></span></p>
                                    <h5 class="m-b-0 m-t-10" id="net_slip">Net Salary: &#8358 <span></span></h5>
                                </div>
                                <div class="hidden-print col-md-12 text-right">
                                    <hr>
                                    <!-- <button class="btn btn-outline-secondary"><i class="icon-printer"></i></button> -->
                                    <!-- <button id="cmd" class="btn btn-primary btn-rounded buttons-pdf buttons-html5 pull-right" style="margin: 10px">Download PDF</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
        </div>

            </div>
        </div>


        <!-- Modal -->
        @include('modals.share_payslip_email')
        @include('modals.prep_doc_spinner')
        @include('logic.payrolljs')








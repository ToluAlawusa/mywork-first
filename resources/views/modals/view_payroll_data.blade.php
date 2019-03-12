<div class="modal fade" id="viewPayrollData" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">View Employee Payroll Data</h4>
        </div>
        <!-- <form method="POST" onsubmit="doPayrollDataEdit()" id="getpayrolledit" class="form-material" enctype="multipart/form-data"> -->
            @csrf
            <div class="modal-body">
                <!-- <input type='hidden' name='payrollid' id="payrollid"> -->
                <div class="form-group">
                    <label>Gross Monthly Salary</label>
                    <input type="text" class="form-control" name="gross_salary" id="get_grossedv" readonly="">
                </div>
                <div class="form-group col-md-6">
                    <label>Basic Salary</label>
                    <input type="text" class="form-control" name="basic_salary" id="basic_salarypv" readonly="">
                </div>
                <div class="form-group col-md-6">
                    <label>Housing</label>
                    <input type="text" class="form-control" name="housing" id="housingpv" placeholder="" readonly="">
                </div>
                <div class="form-group col-md-4">
                    <label>Transport</label>
                    <input type="text" class="form-control" name="transport" id="transportpv" placeholder="" readonly="">
                </div>
                <div class="form-group col-md-4">
                    <label>Utility</label>
                    <input type="text" class="form-control" name="utility" id="utilitypv" placeholder="" readonly="">
                </div>
                <div class="form-group col-md-4">
                    <label>Entertainment</label>
                    <input type="text" class="form-control" name="entertainment" id="entertainmentpv" placeholder="" readonly="">
                </div>
                <div class="form-group col-md-6">
                    <label>Meal</label>
                    <input type="text" class="form-control" name="meal" id="mealpv" placeholder="" readonly="">
                </div>
                <div class="form-group col-md-6">
                    <label>Pension</label>
                    <input type="text" class="form-control" name="pension" id="pensionpv" placeholder="" readonly="">
                </div>
                <div class="form-group col-md-6">
                    <label>NHF</label>
                    <input type="text" class="form-control" name="nhf" id="nhfpv" placeholder="" readonly="">
                </div>
                <div class="form-group col-md-6">
                    <label>NHIS</label>
                    <input type="text" class="form-control" name="nhis" id="nhispv" placeholder="" readonly="">
                </div>
                <div class="form-group col-md-6">
                    <label>Leave Allowance</label>
                    <input type="text" class="form-control" name="leave_allowance" id="leave_allowancepv" placeholder="" readonly="">
                </div>
                <div class="form-group col-md-6">
                    <label>13th Month</label>
                    <input type="text" class="form-control" name="thirteenth_month" id="thirteenth_monthpv" placeholder="" readonly="">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-rounded" data-dismiss="modal">Close</button>
                <!-- <button type="submit" class="btn btn-success btn-rounded" id="submit">Edit</button> -->
            </div>
       <!--  </form> -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<div class="modal fade" id="editPayrollData" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Edit Employee Payroll Data</h4>
        </div>
        <form method="POST" onsubmit="doPayrollDataEdit()" id="getpayrolledit" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <input type='hidden' name='payrollid' id="payrollid">
                <div class="form-group">
                    <label>Gross Monthly Salary</label>
                    <input type="text" class="form-control" name="gross_salary" id="get_grossed" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Basic Salary</label>
                    <input type="text" class="form-control" name="basic_salary" id="basic_salaryp" readonly="">
                </div>
                <div class="form-group col-md-6">
                    <label>Housing</label>
                    <input type="text" class="form-control" name="housing" id="housingp" placeholder="" readonly="">
                </div>
                <div class="form-group col-md-4">
                    <label>Transport</label>
                    <input type="text" class="form-control" name="transport" id="transportp" placeholder="" readonly="">
                </div>
                <div class="form-group col-md-4">
                    <label>Utility</label>
                    <input type="text" class="form-control" name="utility" id="utilityp" placeholder="" readonly="">
                </div>
                <div class="form-group col-md-4">
                    <label>Entertainment</label>
                    <input type="text" class="form-control" name="entertainment" id="entertainmentp" placeholder="" readonly="">
                </div>
                <div class="form-group col-md-6">
                    <label>Meal</label>
                    <input type="text" class="form-control" name="meal" id="mealp" placeholder="" readonly="">
                </div>
                <div class="form-group col-md-6">
                    <label>Pension</label>
                    <input type="text" class="form-control" name="pension" id="pensionp" placeholder="" readonly="">
                </div>
                <div class="form-group col-md-6">
                    <label>NHF</label>
                    <input type="text" class="form-control" name="nhf" id="nhfp" placeholder="" readonly="">
                </div>
                <div class="form-group col-md-6">
                    <label>NHIS</label>
                    <input type="text" class="form-control" name="nhis" id="nhisp" placeholder="" readonly="">
                </div>
                <div class="form-group col-md-6">
                    <label>Leave Allowance</label>
                    <input type="text" class="form-control" name="leave_allowance" id="leave_allowancep" placeholder="" readonly="">
                </div>
                <div class="form-group col-md-6">
                    <label>13th Month</label>
                    <input type="text" class="form-control" name="thirteenth_month" id="thirteenth_monthp" placeholder="" readonly="">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-rounded" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success btn-rounded" id="submit">Update</button>
            </div>
        </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
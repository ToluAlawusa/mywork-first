<div class="modal fade" id="addPayrollData" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Add Employee Payroll Data</h4>
        </div>
        <form method="POST" action="{{ route('employee_fin_data')}}" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <input type='hidden' name='id' value="">
                <div class="form-group col-md-6">
                    <label>Employee Name</label>
                    <br/>
                    <select id="single1" name="emp_name">
                        <option value="" disabled="" selected="selected">Select Employee</option>
                        @foreach($employee_list as $employeelist)
                        <option value="{{ $employeelist->id }}">{{ $employeelist->user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Gross Monthly Salary</label>
                    <input type="text" class="form-control" name="gross_salary" id="get_gross" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Basic Salary</label>
                    <input type="text" class="form-control" name="basic_salary" id="basic_salary" readonly="">
                </div>
                <div class="form-group col-md-6">
                    <label>Housing</label>
                    <input type="text" class="form-control" name="housing" id="housing" placeholder="" readonly="">
                </div>
                <div class="form-group col-md-4">
                    <label>Transport</label>
                    <input type="text" class="form-control" name="transport" id="transport" placeholder="" readonly="">
                </div>
                <div class="form-group col-md-4">
                    <label>Utility</label>
                    <input type="text" class="form-control" name="utility" id="utility" placeholder="" readonly="">
                </div>
                <div class="form-group col-md-4">
                    <label>Entertainment</label>
                    <input type="text" class="form-control" name="entertainment" id="entertainment" placeholder="" readonly="">
                </div>
                <div class="form-group col-md-6">
                    <label>Meal</label>
                    <input type="text" class="form-control" name="meal" id="meal" placeholder="" readonly="">
                </div>
                <div class="form-group col-md-6">
                    <label>Pension</label>
                    <input type="text" class="form-control" name="pension" id="pension" placeholder="" readonly="">
                </div>
                <div class="form-group col-md-6">
                    <label>NHF</label>
                    <input type="text" class="form-control" name="nhf" id="nhf" placeholder="" readonly="">
                </div>
                <div class="form-group col-md-6">
                    <label>NHIS</label>
                    <input type="text" class="form-control" name="nhis" id="nhis" placeholder="" readonly="">
                </div>
                <div class="form-group col-md-6">
                    <label>Leave Allowance</label>
                    <input type="text" class="form-control" name="leave_allowance" id="leave_allowance" placeholder="" readonly="">
                </div>
                <div class="form-group col-md-6">
                    <label>13th Month</label>
                    <input type="text" class="form-control" name="thirteenth_month" id="thirteenth_month" placeholder="" readonly="">
                </div>
                <!-- <div class="form-group">
                    <label>Gross Salary Per Annum:<span>(Monthly equivalent will be automatically handled for you)</span></label>
                    <br/>
                    <p class="col-md-12">
                    <select class="col-md-3">
                        <option>Per Annum</option>
                        <option>Per Month</option>
                    </select>
                    <label class="col-md-1">:</label>
                    <input type="text" class="col-md-4" name="gross_salary_annum" placeholder="Email" required>
                    </p>
                </div>
                <div class="form-group">
                    <label>Net Salary:<span>(Monthly equivalent will be automatically handled for you)</span></label>
                    <br/>
                    <p class="col-md-12">
                    <select class="col-md-3">
                        <option>Per Annum</option>
                        <option>Per Month</option>
                    </select>
                    <label class="col-md-1">:</label>
                    <input type="text" class="col-md-4" name="net_salary_annum" placeholder="Email" required>
                    </p>
                </div> -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-rounded" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success btn-rounded" id="submit">Add</button>
            </div>
        </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
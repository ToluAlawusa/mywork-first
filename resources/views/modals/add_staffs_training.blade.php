<div class="modal fade" id="addStaffTraining" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Add Staff Training</h4>
        </div>
        <form method="POST" action="{{route('add_staff_training')}}">
            @csrf
            <div class="modal-body">
                <input type='hidden' name='id' value="">
                <div class="form-group">
                    <label>Training Type</label>
                    <br/>
                    <select id="single1" name="tr_type" class="form-control" required>
                        <option value="" disabled="" selected="selected">Select Training</option>
                        @foreach($trainT as $trainType)
                        <option value="{{ $trainType->id }}">{{ $trainType->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Employee Name</label>
                    <br/>
                    <select id="single1" name="emp_name" class="form-control" required>
                        <option value="" disabled="" selected="selected">Select Employee</option>
                        @foreach($empL as $empList)
                        <option value="{{ $empList->id }}">{{ $empList->user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label>Why the Training matters</label>
                    <textarea class="form-control" rows="4" name="tra_matters" placeholder="" required></textarea>
                </div>
                <div class="form-group">
                    <label>Recommended Courses</label>
                    <textarea class="form-control" rows="5" name="rec_courses" placeholder="" required></textarea>
                </div>
                <div class="form-group">
                    <label>Start Date</label> 
                    <div class="input-group" data-placement="left" data-align="top" data-autoclose="true">
                        <input type="text" class="form-control" name="start_date" id="datepicker-autoclose" placeholder="mm/dd/yyyy" required>
                        <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
                    </div>
                </div>    
                <div class="form-group">
                    <label>End Date</label>
                    <div class="input-group" data-placement="left" data-align="top" data-autoclose="true">
                        <input type="text" class="form-control mydatepicker" name="end_date" placeholder="mm/dd/yyyy" required>
                        <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-rounded" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success btn-rounded">Add</button>
            </div>
        </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
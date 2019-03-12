<div class="modal fade" id="createRecomm" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Make Recommendation</h4>
        </div>
        <form method="POST" action="{{ route('training_recommendations')}}">
            @csrf
            <div class="modal-body">
                <input type='hidden' name='id' value="">
                <div class="form-group">
                    <label>Employee Recommended</label>
                    <br/>
                    <select name="emp_recomm" class="form-control" required>
                        <option value="" disabled="" selected="selected">Select Employee</option>
                        @foreach($empL as $empList)
                        <option value="{{ $empList->id }}">{{ $empList->user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Training Course</label>
                    <br/>
                    <select name="tr_course" class="form-control" required>
                        <option value="" disabled="" selected="selected">Select Training</option>
                        @foreach($trainT as $trainType)
                        <option value="{{ $trainType->id }}">{{ $trainType->name }}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label>Recommendation Note</label>
                    <textarea class="form-control" rows="4" name="recomm_note" placeholder="" required></textarea>
                </div>
                <div class="form-group">
                    <label>Awaiting Approval From</label>
                    <br/>
                    <select id="single1" name="emp_to_appr" class="form-control" required>
                        <option value="" disabled="" selected="selected">Select Employee</option>
                        @foreach($empL as $empList)
                        <option value="{{ $empList->id }}">{{ $empList->user->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-rounded" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success btn-rounded">Send</button>
            </div>
        </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
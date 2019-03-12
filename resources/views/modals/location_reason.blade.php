<div class="modal fade" id="locationReason" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
            <h4 class="modal-title">You're logged in from outside the office, please tell why, and also report your present location</h4>
        </div>
        <form method="POST" action="{{ route('location_reason')}}">
            @csrf
            <div class="modal-body">
                <input type='hidden' name='id' value="">
                <div class="form-group">
                    <label>Give Reason</label>
                    <textarea class="form-control" rows="3" name="location_reason" placeholder="I am clocking in from outside the office because...." required></textarea>
                </div>
                <div class="form-group">
                    <label>Present Address</label>
                    <textarea class="form-control" rows="3" name="loca_address" placeholder="Address" required></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-default btn-rounded" data-dismiss="modal">Close</button> -->
                <button type="submit" class="btn btn-success btn-rounded">Submit</button>
            </div>
        </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
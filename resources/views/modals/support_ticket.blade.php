<div class="modal fade" id="openSupportTicket" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Open new Support Ticket</h4>
        </div>
        <form method="POST" action="{{route('open_new_ticket')}}" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <hr style="border-top: 1px dashed green;">
                <p>Provide ticket details below. When reporting a problem make sure to provide as much relevant information as possible</p>
                <hr style="border-top: 1px dashed green;">
                <input type='hidden' name='id' value="">
                <div class="form-group">
                    <div class="form-group form-material col-md-6">
                    <label>Department</label>
                    <br/>
                    <select id="single1" name="dept_name" required>
                        <option value="Sales Department" selected="selected">Sales Department</option>
                        <option value="Billing Department">Billing Department</option>
                        <option value="Technical Support">Technical Support</option>
                        <option value="Abuse Department">Abuse Department</option>
                    </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group form-material col-md-6">
                    <label>Priority</label>
                    <br/>
                    <select id="single1" name="priority_type" required>
                        <option value="" disabled="" selected="selected">Select</option>
                        <option value="Low">Low</option>
                        <option value="High">Medium</option>
                        <option value="Medium">High</option>
                    </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Subject</label>
                    <input type="text" class="form-control" name="subject" placeholder="" required>
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" rows="5" name="sent_message" placeholder="" required></textarea>
                </div>
                <div class="form-group">
                    <label>Add Files (optional)</label>
                    <input type="file" name="sent_file" id="input-file-now" class="dropify"/>
                    <p>(Allowed File Extension: .jpg, .JPEG, .docx, .pdf, .png, .)</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-rounded" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success btn-rounded">Submit</button>
            </div>
        </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
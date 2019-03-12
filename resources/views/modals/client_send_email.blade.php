<div class="modal fade" id="clientMailModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Send Email</h4>
        </div>
        <form onsubmit="doClientSendEmail()" method="POST" id="clientsendemail" enctype="multipart/form-data" class="form-material">
            @csrf
            <div class="modal-body">
                <input type='hidden' name='takeid' id='takeid'>
                <input type='hidden' name='takename' id='takename'>
                <input type='hidden' name='takeemail' id='takeemail'>
                <div class="form-group">
                    <label>From</label>
                    <input type="text" class="form-control" name="sender_email" placeholder="" id="nameedit" required>
                </div>
                <div class="form-group">
                    <label>Subject</label>
                    <input type="text" class="form-control" name="message_subject" placeholder="" id="nameedit" required>
                </div>
                <div class="form-group">
                    <label>Message Body</label>
                    <textarea class="form-control" rows="5" name="message_body" placeholder="" id="addressedit" ></textarea>
                </div>
                <div class="form-group">
                    <label>Attachments</label>
                    <input type="file" name="message_file" class="dropify"/>
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
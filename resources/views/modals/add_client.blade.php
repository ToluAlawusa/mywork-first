<div class="modal fade" id="addClientModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Add Client</h4>
        </div>
        <form method="POST" action="{{ route('client') }}" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <input type='hidden' name='id' value="">
                <div class="form-group">
                    <label>Client Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Client Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Client Source</label>
                    <input type="text" class="form-control" name="source" placeholder="e.g Twitter, Facebook e.t.c." required>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" rows="3" name="address" placeholder="Address" required></textarea>
                </div>
                <div class="form-group">
                    <label>Client Image</label>
                    <input type="file" name="client_image" id="input-file-now" class="dropify"/>
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
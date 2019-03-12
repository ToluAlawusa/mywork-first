<div class="modal fade" id="editTrainingLoc" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Training Location</h4>
            </div>
            <form onsubmit="doTrainingLocEdit()" method="POST" id="gettrainlocedit">
                @csrf
                <div class="modal-body">
                    <input type='hidden' name='id' value="">
                    <div class="form-group">
                        <label>Location</label>
                        <input type="text" class="form-control" name="name" placeholder="Name" id="locnameedit">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-rounded" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success btn-rounded">Update</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<div class="modal fade" id="editTrainingTypes" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Training Course</h4>
            </div>
            <form onsubmit="doTrainingTypeEdit()" method="POST" id="gettraintypeedit">
                @csrf
                <div class="modal-body">
                    <input type='hidden' name='id' value="">
                    <div class="form-group">
                        <label>Training Title</label>
                        <input type="text" class="form-control" name="name" placeholder="Name" id="nameedit">
                    </div>
                    <div class="form-group">
                        <label>Duration</label>
                        <input type="text" class="form-control" name="dura" placeholder="Email" id="durationedit">
                    </div>
                    
                        <label>Certification</label>
                        <select class="form-control" id="certiedit" name="cert">
                            <option value="" disabled="disabled">Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>   
                        </select>
                        <br>
                        <label>Location</label>
                        <select class="form-control" id="locaedit" name="loca">
                            <option value="" disabled="disabled">Select Location</option>
                            @foreach($trainL as $trainLi)
                            <option value="{{$trainLi->id}}">{{$trainLi->name}}</option>
                            @endforeach   
                        </select>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-rounded" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success btn-rounded">Update</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
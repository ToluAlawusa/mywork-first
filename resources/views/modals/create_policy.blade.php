<div class="modal fade" id="createPolicyText" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Create Policy</h4>
        </div>
        <form method="POST" action="{{route('create_compliance_text')}}">
            <input type="hidden" name="text_text" id="text_carry">
            @csrf
            <div class="modal-body">
                <input type='hidden' name='id' value="">
                <div class="form-group">
                    <label>Policy Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name">
                </div>
                <div class="box box-block bg-white">
                    <div id="summernote">
                        
                        <h2>Try me!</h2>
                        <p>super simple WYSIWYG editor on Bootstrap</p>
                        <p><b>Features:</b></p>
                        <ol>
                            <li>Automatic Seamless Two-Way-Binding</li>
                            <li style="color: blue">Super Easy <b>Theming</b> Options</li>
                            <li>Simple Editor Instance Creation</li>
                            <li>Safely Parses Html for Custom Toolbar Icons</li>
                            <li>Doesn't Use an iFrame</li>
                            <li>Works with Firefox, Chrome, and IE8+</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-rounded" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success btn-rounded" id="create_doc">Create</button>
            </div>
        </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal fade" id="createPolicyUpload" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Create Policy</h4>
        </div>
        <form method="POST" action="{{route('create_compliance_upload')}}" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <input type='hidden' name='id' value="">
                <div class="form-group">
                    <label>Policy Name</label>
                    <input type="text" class="form-control" name="p_name" placeholder="Name" required>
                </div>
                <br><br>
                <div class="form-group">
                    <label>Upload Policy Document</label>
                    <input type="file" name="p_file" id="input-file-now" class="dropify" required/>
                    <p>(Allowed File Extension: .pdf, .docx, .)</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-rounded" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success btn-rounded">Create</button>
            </div>
        </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal fade" id="addPolicyUpload" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Add Files</h4>
        </div>
        <form method="POST" action="{{ ('/add_compliance_upload/'.Session::get('comp_or_bra_id').'/'.Session::get('try_comp_id')) }}" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <input type='hidden' name='id' value="">
                <br><br>
                <div class="form-group">
                    <label>Upload Policy Document</label>
                    <input type="file" name="padd_file" id="input-file-now" class="dropify" required/>
                    <p>(Allowed File Extension: .pdf, .docx, .)</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-rounded" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success btn-rounded">Create</button>
            </div>
        </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
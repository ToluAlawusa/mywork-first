<div class="modal fade small-modal" tabindex="-1" id="addCampaignStatus" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="mySmallModalLabel">Add Campaign Status</h4>
            </div>
            <form method="POST" action="{{ route('add_campaign_status')}}">
                @csrf
                <div class="modal-body">
                    
                    <div class="form-group">
                        <label>Campaign Status</label>
                        <input type="text" class="form-control" name="c_status" id="" required>
                    </div>
                </div>
            
            
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-rounded" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-rounded" id="submit">Add</button>
            </div>
            </form>
        </div>
    </div>
</div>
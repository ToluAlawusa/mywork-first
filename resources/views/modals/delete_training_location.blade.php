<!-- Remove modal -->
			<!-- Modal -->
  <div class="modal fade" id="deleteTrainingLoc" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><i class="fa fa-trash-o"></i> Delete Training Location?</h4>
        </div>
        <form onsubmit="doTrainingLocDelete()" method="POST" id="gettrainlocdelete">
        	{{csrf_field()}}
	        <div class="modal-body">
	          <p id="locanameedit">Are you sure you want to remove Training Location <span style="color: red"></span>?</p>
	          	<!-- <button type="button" class="btn btn-default">No</button>
	          	<br>
	          	<button type="submit" class="btn btn-primary">Yes</button> -->
		    </div>
	        <div class="modal-footer">
	          <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
	          <button type="submit" class="btn btn-danger">Yes</button>
	        </div>
        </form> 
      </div>
      
    </div>
  </div>
	<!-- end of remove modal -->
		<div class="modal fade small-modal" tabindex="-1" id="addTrainingLoc" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
						<h4 class="modal-title" id="mySmallModalLabel">Add Training Location</h4>
					</div>
					<form method="POST" action="{{route('add_training_location')}}">
						@csrf
						<div class="modal-body">
							
			                <div class="form-group">
			                    <label>Training Location</label>
			                    <input type="text" class="form-control" name="t_title" id="" required>
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
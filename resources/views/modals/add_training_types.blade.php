		<div class="modal fade small-modal" tabindex="-1" id="addTrainingTypes" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
						<h4 class="modal-title" id="mySmallModalLabel">Add Training types</h4>
					</div>
					<form method="POST" action="{{route('add_training_types')}}">
						@csrf
						<div class="modal-body">
							
			                <div class="form-group">
			                    <label>Training Title</label>
			                    <input type="text" class="form-control" name="t_title" id="" required>
			                </div>
			                <div class="form-group">
			                    <label>Duration</label>
			                    <input type="text" class="form-control" name="t_duration" id="" placeholder="e.g. 2 weeks">
			                </div>
			                
			                    <label>Certification</label>
			                    <br/>
			                    <select class="form-control" id="" name="t_cert" required>
			                        <option value="" disabled="" selected="selected">Select</option>
			                        <option value="Yes">YES</option>
			                        <option value="No">NO</option>
			                    </select>
			                
			                	<br>
			                    <label>Location</label>
			                    <br/>
			                    <select class="form-control" id="" name="t_loca" required>
			                        <option value="" disabled="" selected="selected">Select</option>
			                        @foreach($trainL as $indexKey => $trainLocation)
			                        <option value="{{$trainLocation->id}}">{{$trainLocation->name}}</option>
			                        @endforeach
			                    </select>
			               
						</div>
					
					
					<div class="modal-footer">
						<button type="button" class="btn btn-danger btn-rounded" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary btn-rounded" id="submit">Add</button>
						
					</div>
					</form>
				</div>
			</div>
		</div>
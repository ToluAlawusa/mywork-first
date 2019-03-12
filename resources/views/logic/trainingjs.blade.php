<script type="text/javascript">

		var identity = {};

	$('#editTrainingTypes').on('show.bs.modal', function (event) {

	  var button = $(event.relatedTarget) // Button that triggered the modal
	  identity.id = button.data('identity')
	  var name = button.data('name')
	  var duration = button.data('duration')
	  var cert = button.data('cert')
	  var loca = button.data('loca')

	  //alert(identity.id+duration+cert+loca);
	  
	  
	  var modal = $(this)
	  modal.find('.modal-body #nameedit').val(name)
	  modal.find('.modal-body #durationedit').val(duration)
	  modal.find('.modal-body #certiedit').val(cert)
	  modal.find('.modal-body #locaedit').val(loca)	
	  
	});


	function doTrainingTypeEdit(){
		var action_src = identity.id;
		var my_delete_form = document.getElementById('gettraintypeedit');

		var urlLink = "/update_training_types/";
	    urlLink = urlLink + action_src;

	    my_delete_form.action = urlLink;

	}


	$('#deleteTrainingTypeData').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget) // Button that triggered the modal
	    identity.id = button.data('identity')
	    var name = button.data('name')

	   // alert(name)

	     $("#nameedit span").text(name);


	})

	function doTrainingTypeDelete(){
		var action_src = identity.id;
		var my_delete_form = document.getElementById('gettraintypedelete');

		var urlLink = "/delete_training_types/";
	    urlLink = urlLink + action_src;

	    my_delete_form.action = urlLink;

	}


	$('#editTrainingLoc').on('show.bs.modal', function (event) {

	  var button = $(event.relatedTarget) // Button that triggered the modal
	  identity.id = button.data('identity')
	  var name = button.data('name')
	  
	  var modal = $(this)
	  modal.find('.modal-body #locnameedit').val(name)	
	  
	});


	function doTrainingLocEdit(){
		var action_src = identity.id;
		var my_delete_form = document.getElementById('gettrainlocedit');

		var urlLink = "/update_training_loc/";
	    urlLink = urlLink + action_src;

	    my_delete_form.action = urlLink;

	}

	$('#deleteTrainingLoc').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget) // Button that triggered the modal
	    identity.id = button.data('identity')
	    var name = button.data('name')

	   // alert(name)

	     $("#locanameedit span").text(name);


	})

	function doTrainingLocDelete(){
		var action_src = identity.id;
		var my_delete_form = document.getElementById('gettrainlocdelete');

		var urlLink = "/delete_training_location/";
	    urlLink = urlLink + action_src;

	    my_delete_form.action = urlLink;

	}

	$('#editTrainingRecomm').on('show.bs.modal', function (event) {

	var button = $(event.relatedTarget) // Button that triggered the modal
	identity.id = button.data('identity')
	var empcourse = button.data('empcourse')
	var recnote = button.data('recnote')
	var awapproval = button.data('awapproval')

	var modal = $(this)
	modal.find('.modal-body #trac_ed').val(empcourse)	
	modal.find('.modal-body #recnote_ed').val(recnote)
	modal.find('.modal-body #awappr_ed').val(awapproval)	


	});


	function doTrainingRecommendationEdit(){
	var action_src = identity.id;
	var my_delete_form = document.getElementById('getrecommedit');

	var urlLink = "/update_training_recomm/";
		urlLink = urlLink + action_src;

		my_delete_form.action = urlLink;

	}

	$('#deleteTrainingRecomm').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget) // Button that triggered the modal
	    identity.id = button.data('identity')
	    


	})

	function doTrainingRecommDelete(){
		var action_src = identity.id;
		var my_delete_form = document.getElementById('gettrainrecodelete');

		var urlLink = "/delete_training_recomm/";
	    urlLink = urlLink + action_src;

	    my_delete_form.action = urlLink;

	}

</script>

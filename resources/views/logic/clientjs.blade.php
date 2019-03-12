<script>

   		var identity = {};

	$('#editClientModal').on('show.bs.modal', function (event) {

	  var button = $(event.relatedTarget) // Button that triggered the modal
	  identity.id = button.data('identity')
	  var name = button.data('name')
	  var email = button.data('email')
	  var address = button.data('address')
	  var phone = button.data('phone')
	  var source = button.data('source')
	  var image = button.data('image')

	  var rooter = window.location.origin;
	  //alert(rooter);
	  var newRooter = 'storage/images/ClientImages/'+image;
	  
	  var randimage = sessionStorage.setItem('client_edit_image', newRooter);
	  var randimage2 = sessionStorage.getItem('client_edit_image');
	  //alert(randimage2);

	 //   $.post("/client", {myKey: value}, function(data)
		// {
		//   alert("Do something with example.php response");
		// }).fail(function()
		// {
		//   alert("Damn, something broke");
		// });
		// //alert(jpost)
	  
	  var modal = $(this)
	  modal.find('.modal-body #nameedit').val(name)
	  modal.find('.modal-body #emailedit').val(email)
	  modal.find('.modal-body #addressedit').val(address)
	  modal.find('.modal-body #phoneedit').val(phone)
	  modal.find('.modal-body #sourceedit').val(source)
	  // modal.find('.modal-body #imageeedit').val(image)	
	  
	});

	// $('#editClientModal').on('click', function (event) {
	// 	$.post("/client", {var_value: "40"}, function(data){
	// 	    alert("data sent and received: "+data);
	// 	});
	// })


	function doClientEdit(){
		var action_src = identity.id;
		var my_delete_form = document.getElementById('getclientedit');

		var urlLink = "/edit_client/";
	    urlLink = urlLink + action_src;

	    my_delete_form.action = urlLink;

	}

	
	$('#deleteClientModal').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget) // Button that triggered the modal
	    identity.id = button.data('identity')
	    var name = button.data('name')

	    $("#nameedit span").text(name);

	    
	})

	function doClientDelete(){
		var action_src = identity.id;
		var my_delete_form = document.getElementById('getclientdelete');

		var urlLink = "/delete_client/";
	    urlLink = urlLink + action_src;

	    my_delete_form.action = urlLink;

	}

	$('#clientMailModal').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget) // Button that triggered the modal
	    identity.id = button.data('identity')
	    var name = button.data('name')
	    var email = button.data('email')

	    var modal = $(this)
	  	modal.find('.modal-body #takeid').val(identity.id)
	  	modal.find('.modal-body #takename').val(name)
	  	modal.find('.modal-body #takeemail').val(email)   
	})

	function doClientSendEmail(){
		var action_src = identity.id;
		var my_delete_form = document.getElementById('clientsendemail');

		var urlLink = "/client_send_email/";
	    urlLink = urlLink + action_src;

	    my_delete_form.action = urlLink;

	}

	var selectEmployee = new SlimSelect({
						  select: '#single'
						});

	


	
   </script>
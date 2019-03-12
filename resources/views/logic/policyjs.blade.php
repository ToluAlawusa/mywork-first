<script type="text/javascript">

	var polic_id = $('#polic_id').val();

	$('#create_doc').on('click', function() {
		// body...
		var html_content = $('#summernote').summernote('code');

		// var plain_text = html_content.text();
		$('#text_carry').val(html_content);

		var check_text = $('#text_carry').val()
		 //alert(check_text);
	})


	// var id = 12; // A random variable for this example

	// $.ajax({
	//     method: 'GET', // Type of response and matches what we said in the route
	//     url: '/compliance_policy/'+polic_id, // This is the url we gave in the route
	//     data: {'id' : id}, // a JSON object to send back
	//     success: function(response){ // What to do if we succeed
	//         console.log(response); 
	//     },
	//     error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
	//         console.log(JSON.stringify(jqXHR));
	//         console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
	//     }
	// });

		

</script>

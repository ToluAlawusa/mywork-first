<script type="text/javascript">

 var resump = $('#chk_att_resump').val();
 var resumpg = $('#chk_att_grace').val();
 var resumpid = $('#chk_att_id').val();

 var addr_lat = $('#addr_lat').val();
 var addr_long = $('#addr_long').val();
 var resumptime = $('#resumptime').val();
 var resumpgrace = $('#resumpgrace').val();
 var emp_curr_time = $('#emp_curr_time').val();
 var chk_att_list = $('#chk_att_list').val();
 var chk_att_location = $('#chk_att_location').val();
 var all_att_check = $('#all_att_check').val();

 //alert(chk_att_location)

 console.log(addr_lat)
 console.log(addr_long)
 console.log(resumptime)
 console.log(resumpgrace)
 console.log(emp_curr_time)
 console.log(chk_att_list)
 console.log(chk_att_location)
 console.log(all_att_check)

 var rand_lat = 6.5538437
 var rand_long = 3.5256665
    
     if(emp_curr_time >= resumptime && emp_curr_time <= resumpgrace){
        // alert('welcome, it\'s good to come early');
     } else if(!chk_att_list){
        setTimeout(function(){ 

            $('#latenessReason').modal('show')
         }, 7000);
     } else if(chk_att_list && chk_att_location){
        // do nothing
     } else if((chk_att_list) && (addr_lat != rand_lat && addr_long != rand_long)){
         setTimeout(function(){ 

         $('#locationReason').modal('show')
         }, 20000);
     } 




 if(resumpid){
    $('#insert_time').hide()
    $('#initiate_insert_time').hide()
 } else {
    $('#insert_time').hide()
    $('#edit_time').hide()
    $('#initiate_insert_time').show()
    $('#submit1').on('click', function(){
        $('#initiate_insert_time').fadeOut(500)
        //setTimeout(40000)
        $('#insert_time').fadeIn(700)
    })

 }

 


    // navigator.geolocation.getCurrentPosition(success => {
    //   /* Do some magic. */
    //   alert('wasere')
    // }, failure => {
    //   if (failure.message.startsWith("Only secure origins are allowed")) {
    //     // Secure Origin issue.
    //     alert(failure.message)
    //   }
    // });


    // navigator.geolocation.getCurrentPosition(function(position) {

    //   // Get the coordinates of the current possition.
    //   var lat = position.coords.latitude;
    //   var lng = position.coords.longitude;

    //   console.log(lat)
    //   console.log(lng)

    //   // $('.latitude').text(lat.toFixed(3));
    //   // $('.longitude').text(lng.toFixed(3));
    //   // $('.coordinates').addClass('visible');


    //   // Create a new map and place a marker at the device location.
    //   })

    


   // if(navigator.geolocation){
   //  alert('gbedu entered body')
   // } else {
   //  alert('gbedu dinor enter body')
   // }

 






</script>

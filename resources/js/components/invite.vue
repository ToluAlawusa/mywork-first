<template>
    <div>
        <button type="button" class="btn btn-success btn-rounded" data-toggle="modal" data-target="#inviteUser">Invite User</button>
         <!-- The Modal -->
        <div class="modal fade" id="inviteUser" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Invite New User</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-group">
                        <input type="email" placeholder="Email" class="form-control" v-model="email" required>
                    </div>
                    <div class="form-group">
                        <label>Designation</label>
                        <select class="form-control" v-model="desig" required>
                            <option value="1">Software Developer</option>
                            <option value="2">Sales</option>
                        </select>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-rounded" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success btn-rounded" @click="sendInvite()">Send Invite</button>
                </div>

                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data(){
       return{
           email:'',
           desig:'',
       }
    },
    mounted() {
            console.log('invite mounted.')
    },
    methods:{
         sendInvite(){
            if(!this.email){
                swal({
                    position: 'center',
                    type: 'warning',
                    title: 'Email required',
                    showConfirmButton: false,
                    timer: 3500
                })
            }


            else if(!this.desig){
                swal({
                    position: 'center',
                    type: 'warning',
                    title: 'Designation Required',
                    showConfirmButton: false,
                    timer: 3500
                })
            }else{
                axios.get('/sendInvite/'+this.email+'/'+this.desig).then((resp)=>{
                      console.log(resp.data)
                      if(resp.data == 0){
                          console.log('something went wrong')
                      }
                      if(resp.data == 1){
                          console.log('success');
                          swal({
                                position: 'center',
                                type: 'success',
                                title: 'Invite has been successfully sent ',
                                showConfirmButton: false,
                                timer: 3500
                            })
                      }
                      if(resp.data == 2){
                           console.log('email already exist')
                           swal({
                                position: 'center',
                                type: 'warning',
                                title: 'Email already exist',
                                showConfirmButton: false,
                                timer: 3500
                            })
                      }
                });
            }
         },
    },
}
</script>


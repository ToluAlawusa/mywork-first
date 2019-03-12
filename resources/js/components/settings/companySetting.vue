<template>
    <div class="container-fluid">
        <h4>Company setting</h4>
        <div class="box bg-white">
            
            <div class="row no-gutter">
                <div class="alert alert-danger alert-dismissible fade in" role="alert" v-if="error.length != 0" >
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					</button>
                    <ul v-for="i in error">
                        <li><strong>{{i}}</strong></li>
                    </ul>
                </div>
                <div class="row filter-row" style="padding: 10px;">
                    <div class="col-md-3 col-sm-6 col-xs-12">  
                        <div class="form-group form-focus">
                            <label class="control-label">Company Name</label>
                            <input type="text" v-model="name" class="form-control floating" />
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">  
                        <div class="form-group form-focus">
                            <label class="control-label">Email</label>
                            <input type="email" v-model="email" class="form-control floating" />
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">  
                        <div class="form-group form-focus">
                            <label class="control-label">Website</label>
                            <input type="url" v-model="website" class="form-control floating" />
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">  
                        <div class="form-group form-focus">
                            <label class="control-label">Phone Number</label>
                            <input type="text" v-model="phone" class="form-control floating" />
                        </div>
                    </div>
                </div>

                <div class="row filter-row" style="padding: 10px;">
                    <div class="col-md-3 col-sm-6 col-xs-12">  
                        <div class="form-group form-focus">
                            <label class="control-label">Country</label>
                            <input type="text" v-model="country" class="form-control floating" />
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">  
                        <div class="form-group form-focus">
                            <label class="control-label">State</label>
                            <input type="text" v-model="state" class="form-control floating" />
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12"> 
                        <div class="form-group">
                            <label for="exampleSelect1">Currency</label>
                            <select class="form-control" v-model="currency" id="exampleSelect1">
                                <option value="">Select Currency</option>
                                <option value="Euro"><b>&#8364  Euro</b></option>
                                <option value="Naira"><b>&#8358  Naira</b></option>
                                <option value="Cedi"><b>&#8373  Cedi</b></option>
                                <option value="Inian Rupee"><b>&#8377  Inian Rupee</b></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">  
                        <div class="form-group form-focus">
                            <label class="control-label">RC code (company resgistration number)</label>
                            <input type="text" v-model="rcnumber" class="form-control floating" />
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row filter-row" style="padding: 10px;">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <h6>Upload company logo</h6>
                            <input type="file" ref="file" @change="handleFileUpload()" id="input-file-now" class="dropify" />
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label">Address</label>
                               <textarea class="form-control" v-model="address" id="textareaMessage" placeholder="Address" rows="5"></textarea>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-danger btn-rounded">Cancel</button>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-success btn-rounded" @click="saveDetails()">Save</button>
                            </div>
                        </div>
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
              name: '',
              email: '',
              website: '',
              phone:'',
              country:'',
              state:'',
              currency:'',
              rcnumber:'',
              file:'',
              address:'',
              error:[],
          }
        },
        mounted() {
            console.log('company setting Component mounted.')
        },
        methods:{
            handleFileUpload(){
               this.file = this.$refs.file.files[0];
            },
            checkData(){
                this.error = [];
               if(!this.name){
                   this.error.push('Company name required');
               }

               if(!this.currency){
                   this.error.push('Currency is required');
               }
            },
            saveDetails(){
                this.checkData();
                if(this.error.length == 0){
                    let formData = new FormData();
                    formData.append('name', this.name);
                    formData.append('email', this.email);
                    formData.append('website', this.website);
                    formData.append('phone', this.phone);
                    formData.append('country', this.country);
                    formData.append('state', this.state);
                    formData.append('currency', this.currency);
                    formData.append('rcnumber', this.rcnumber);
                    formData.append('file', this.file);
                    formData.append('address', this.address);
                    axios.post('/createCompany',formData,{
                        headers:{
                            'Content-type': 'multipart/form-data'
                        }
                    }).then((response)=>{
                        if(response.data == 1){
                           console.log('file successfully saved');
                           toastr.success('Company details successfully saved');
                           this.emptyform();
                        }else{
                        console.log(response.data);
                        this.error.push(response.data);
                        }

                    }).catch(function(){
                        console.log('Error');
                    })
                }
            },
            getDetails(){
                
            },
            emptyform(){
                this.name="";
                this.email="";
                this.website="";
                this.phone="";
                this.country="";
                this.state="";
                this.currency="";
                this.rcnumber="";
                this.file="";
                this.address="";
                this.file=" ";
            }
        }
    }
</script>

<template>
    <div class="container-fluid">
        <h4>Projects</h4>
        <div class="box bg-white">
            <div class="row no-gutter">
                <div class="row filter-row" style="padding: 10px;">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-focus">
                            <label class="control-label">Project Name</label>
                            <input type="text" class="form-control floating" />
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-focus">
                            <label class="control-label">Employee Name</label>
                            <input type="text" class="form-control floating" />
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="exampleSelect1">Designation</label>
                            <select class="form-control" id="exampleSelect1">
                                <option value="">Select Roll</option>
                                <option value="">Web Developer</option>
                                <option value="1">Web Designer</option>
                                <option value="1">Android Developer</option>
                                <option value="1">Ios Developer</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12" style="padding-top: 27px">
                        <a href="#" class="btn btn-success btn-rounded" @click="searchProject()"> Search </a>
                    </div>
                </div>
                <div class="col-md-12">

                    <div class="box-block b-b">
                        <h5 class="mb-1">Send Message</h5>
                        <form>
                            <div class="form-group">
                                <input type="name" class="form-control" id="inputSubject" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="textareaMessage" placeholder="Message" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-danger btn-rounded">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="box-block">
                        <address class="text-muted">
                            1355 Market Street, Suite 900<br>
                            San Francisco, CA 94103<br>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address>
                    </div>
                </div>
                <div class="col-md-8">
                    <div id="map" style="height: 540px;"></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            searchProject(){
                alert('searching');
            },
            getDesignation(){

            }
        }
    }
</script>

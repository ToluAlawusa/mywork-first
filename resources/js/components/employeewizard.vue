<template>
    <div>


      <!---- Modal --->
	<!-- line modal -->
	<div class="modal hide fade in" id="requestform" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
	  <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
				<h5 class="modal-title" id="lineModalLabel">Welcome {{name}} , please complete your details. This will enabled the system to set you up</h5>
			</div>
			<div class="modal-body">
			    <!-- Steps starts here -->
                <div class="requestwizard">
                    <div class="requestwizard-row setup-panel">
                        <div class="requestwizard-step">
                            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                            <p>Personal Details</p>
                        </div>
                        <div class="requestwizard-step">
                            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                            <p>Bank Account Details</p>
                        </div>
                    </div>
                </div>

                <div role="form">
                    <div class="row setup-content" id="step-1">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <div class="col-md-6 form-group">
                                        <label class="control-label">Date of Birth</label>
                                        <input type="date" required="required" v-model="DOB" class="form-control" placeholder="Enter Date of Birth" />
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label class="control-label">Gender</label>
                                        <select required="required" v-model="gender" class="form-control">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="col-md-6 form-group">
                                        <label class="control-label">Phone Number</label>
                                        <input maxlength="100" type="text" v-model="phone" required="required" class="form-control" placeholder="Enter Phone Number" />
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label class="control-label">Picture</label>
                                        <input type="file" required="required" id="picture" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-12 form-group">
                                    <label class="control-label">Email Address</label>
                                    <input maxlength="100" type="text" v-model="email" required="required" class="form-control" placeholder="Enter Email Address" />
                                </div>

                                <div class="col-md-12  form-group">
                                    <label class="control-label">Permanent Address</label>
                                    <textarea rows="3" type="text" v-model="address" required="required" class="form-control" placeholder="Enter Permanent Address" ></textarea>
                                </div>

                                <button class="btn btn-primary nextBtn btn-lg pull-right btn-rounded" type="button" >Next</button>
                            </div>
                    </div>
                    <div class="row setup-content" id="step-2">
                        <div class="col-xs-12">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Account Holder Name</label>
                                    <input maxlength="700" type="text" required="required" class="form-control" placeholder="Enter Account Holder Name" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Account Number</label>
                                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Account Number" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Bank Name</label>
                                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Bank Name"  />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">IFSC Code(Optional)</label>
                                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter IFSC Code(Optional)"  />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">PAN Number(Optional)</label>
                                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter PAN Number(Optional)"  />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Branch</label>
                                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Branch"  />
                                </div>
                                <button class="btn btn-primary nextBtn btn-lg pull-right btn-rounded" type="button" >Next</button>
                            </div>
                        </div>
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
        mounted() {
            $('#requestform').modal('show');
            console.log('Wizard mounted.')
        },
        props:['name'],
        data(){
            return{
                DOB:'',
                gender:'',
                phone:'',
                picture:'',
                email:'',
                address:'',
            }
        },
    }


    $(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
});
</script>

<style>
.requestwizard-modal{
	background: rgba(255, 255, 255, 0.8);
	box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}
.requestwizard-step p {
    margin-top: 10px;
}

.requestwizard-row {
    display: table-row;
}

.requestwizard {
    display: table;
    width: 100%;
    position: relative;
}

.requestwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}

.requestwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;

}

.requestwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}

.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}
</style>

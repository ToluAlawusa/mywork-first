<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script> -->
<script>

   		var identity = {};

//identity.id = $('#get_gross').val('327,000');

$('#get_gross').on('input', function() {
	// body...
	var pickgross = $('#get_gross').val();
  	var dobasic = pickgross * 0.35
  	$('#basic_salary').val(dobasic)
  	$('#basic_salary').text(dobasic)
  	var dohousing = pickgross * 0.15
  	$('#housing').val(dohousing)
  	$('#housing').text(dohousing)
  	var dotransport = pickgross * 0.15
  	$('#transport').val(dotransport)
  	$('#transport').text(dotransport)
  	var doutility = pickgross * 0.10
  	$('#utility').val(doutility)
  	$('#utility').text(doutility)
  	var doentertainment = pickgross * 0.10
  	$('#entertainment').val(doentertainment)
  	$('#entertainment').text(doentertainment)
  	var domeal = pickgross * 0.15
  	$('#meal').val(domeal)
  	$('#meal').text(domeal)
  	var dopension = parseInt(dobasic+dohousing+transport) * 0.08
  	$('#pension').val(dopension)
  	$('#pension').text(dopension)
  	var donhf = parseInt(dobasic+dohousing+transport) * 0.025
  	$('#nhf').val(donhf)
  	$('#nhf').text(donhf)
  	var donhis = parseInt(dobasic+dohousing+transport) * 0.05
  	$('#nhis').val(donhis)
  	$('#nhis').text(donhis)
  	var doleaveallowance = (parseInt(dobasic) * 12) * 0.1
  	$('#leave_allowance').val(doleaveallowance)
  	$('#leave_allowance').text(doleaveallowance)
  	var dothirteenth = dobasic
  	$('#thirteenth_month').val(dothirteenth)
  	$('#thirteenth_month').text(dothirteenth)

})

$('#editPayrollData').on('show.bs.modal', function (event) {

	  var button = $(event.relatedTarget) // Button that triggered the modal
	  identity.id = button.data('identity')
	  var grossSalary = button.data('gross_salary')
	  //alert(grossSalary)

	  $('#get_grossed').val(grossSalary)
	  $('#get_grossed').text(grossSalary)

	var pickgross = $('#get_grossed').val();
  	var dobasic = pickgross * 0.35
  	$('#basic_salaryp').val(dobasic)
  	$('#basic_salaryp').text(dobasic)
  	var dohousing = pickgross * 0.15
  	$('#housingp').val(dohousing)
  	$('#housingp').text(dohousing)
  	var dotransport = pickgross * 0.15
  	$('#transportp').val(dotransport)
  	$('#transportp').text(dotransport)
  	var doutility = pickgross * 0.10
  	$('#utilityp').val(doutility)
  	$('#utilityp').text(doutility)
  	var doentertainment = pickgross * 0.10
  	$('#entertainmentp').val(doentertainment)
  	$('#entertainmentp').text(doentertainment)
  	var domeal = pickgross * 0.15
  	$('#mealp').val(domeal)
  	$('#mealp').text(domeal)
  	var dopension = parseInt(dobasic+dohousing+transport) * 0.08
  	$('#pensionp').val(dopension)
  	$('#pensionp').text(dopension)
  	var donhf = parseInt(dobasic+dohousing+transport) * 0.025
  	$('#nhfp').val(donhf)
  	$('#nhfp').text(donhf)
  	var donhis = parseInt(dobasic+dohousing+transport) * 0.05
  	$('#nhisp').val(donhis)
  	$('#nhisp').text(donhis)
  	var doleaveallowance = (parseInt(dobasic) * 12) * 0.1
  	$('#leave_allowancep').val(doleaveallowance)
  	$('#leave_allowancep').text(doleaveallowance)
  	var dothirteenth = dobasic
  	$('#thirteenth_monthp').val(dothirteenth)
  	$('#thirteenth_monthp').text(dothirteenth)
  	$('#payrollid').val(identity.id)


	 	$('#get_grossed').on('input', function() {
		// body...
			var pickgross = $('#get_grossed').val();
		  	var dobasic = pickgross * 0.35
		  	$('#basic_salaryp').val(dobasic)
		  	$('#basic_salaryp').text(dobasic)
		  	var dohousing = pickgross * 0.15
		  	$('#housingp').val(dohousing)
		  	$('#housingp').text(dohousing)
		  	var dotransport = pickgross * 0.15
		  	$('#transportp').val(dotransport)
		  	$('#transportp').text(dotransport)
		  	var doutility = pickgross * 0.10
		  	$('#utilityp').val(doutility)
		  	$('#utilityp').text(doutility)
		  	var doentertainment = pickgross * 0.10
		  	$('#entertainmentp').val(doentertainment)
		  	$('#entertainmentp').text(doentertainment)
		  	var domeal = pickgross * 0.15
		  	$('#mealp').val(domeal)
		  	$('#mealp').text(domeal)
		  	var dopension = parseInt(dobasic+dohousing+transport) * 0.08
		  	$('#pensionp').val(dopension)
		  	$('#pensionp').text(dopension)
		  	var donhf = parseInt(dobasic+dohousing+transport) * 0.025
		  	$('#nhfp').val(donhf)
		  	$('#nhfp').text(donhf)
		  	var donhis = parseInt(dobasic+dohousing+transport) * 0.05
		  	$('#nhisp').val(donhis)
		  	$('#nhisp').text(donhis)
		  	var doleaveallowance = (parseInt(dobasic) * 12) * 0.1
		  	$('#leave_allowancep').val(doleaveallowance)
		  	$('#leave_allowancep').text(doleaveallowance)
		  	var dothirteenth = dobasic
		  	$('#thirteenth_monthp').val(dothirteenth)
		  	$('#thirteenth_monthp').text(dothirteenth)
		  	$('#payrollid').val(identity.id)

		})

});

$('#viewPayrollData').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget) // Button that triggered the modal
    identity.id = button.data('identity')
    var grossSalary = button.data('gross_salary')
    //alert(grossSalary)

    $('#get_grossedv').val(grossSalary)
    $('#get_grossedv').text(grossSalary)

  var pickgross = $('#get_grossedv').val();
    var dobasic = pickgross * 0.35
    $('#basic_salarypv').val(dobasic)
    $('#basic_salarypv').text(dobasic)
    var dohousing = pickgross * 0.15
    $('#housingpv').val(dohousing)
    $('#housingpv').text(dohousing)
    var dotransport = pickgross * 0.15
    $('#transportpv').val(dotransport)
    $('#transportpv').text(dotransport)
    var doutility = pickgross * 0.10
    $('#utilitypv').val(doutility)
    $('#utilitypv').text(doutility)
    var doentertainment = pickgross * 0.10
    $('#entertainmentpv').val(doentertainment)
    $('#entertainmentpv').text(doentertainment)
    var domeal = pickgross * 0.15
    $('#mealpv').val(domeal)
    $('#mealpv').text(domeal)
    var dopension = parseInt(dobasic+dohousing+transport) * 0.08
    $('#pensionpv').val(dopension)
    $('#pensionpv').text(dopension)
    var donhf = parseInt(dobasic+dohousing+transport) * 0.025
    $('#nhfpv').val(donhf)
    $('#nhfpv').text(donhf)
    var donhis = parseInt(dobasic+dohousing+transport) * 0.05
    $('#nhispv').val(donhis)
    $('#nhispv').text(donhis)
    var doleaveallowance = (parseInt(dobasic) * 12) * 0.1
    $('#leave_allowancepv').val(doleaveallowance)
    $('#leave_allowancepv').text(doleaveallowance)
    var dothirteenth = dobasic
    $('#thirteenth_monthpv').val(dothirteenth)
    $('#thirteenth_monthpv').text(dothirteenth)
    //$('#payrollid').val(identity.id)



});

function doPayrollDataEdit(){
		var action_src = identity.id;
		var my_delete_form = document.getElementById('getpayrolledit');

		var urlLink = "/edit_payroll_data/";
	    urlLink = urlLink + action_src;

	    my_delete_form.action = urlLink;

	}

$('#deletePayrollData').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget) // Button that triggered the modal
	    identity.id = button.data('identity')
	    var name = button.data('name')

	     $("#nameedit span").text(name);


	})

	function doPayrollDataDelete(){
		var action_src = identity.id;
		var my_delete_form = document.getElementById('getpayrolldelete');

		var urlLink = "/delete_payroll_data/";
	    urlLink = urlLink + action_src;

	    my_delete_form.action = urlLink;

	}


  $('#generatePayslipModal').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget) // Button that triggered the modal
    identity.id = button.data('identity')
    var basic_salary = button.data('basic_salary')
    var housing = button.data('housing')
    var transport = button.data('transport')
    var utility = button.data('utility')
    var entert = button.data('entert')
    var meal = button.data('meal')
    var pension = button.data('pension')
    var nhf = button.data('nhf')
    var nhis = button.data('nhis')
    var paye = button.data('paye')
    var absent_d = button.data('absent_days')
    var tot_earnings = button.data('total_earnings')
    var tot_deduc = button.data('total_deduc')
    var net_salary = button.data('net_salary')
    var month_year = button.data('month')
    var payslip_uni_id = button.data('payslipid')
    var employee_name = button.data('employee_name')
    var designation = button.data('designation')

    // alert(identity.id+'-'+basic_salary+'-'+housing+'-'+transport+'-'+utility+'-'+entert+'-'+meal+'-'+pension+'-'+nhf+'-'+nhis+'-'+paye+'-'+absent_d+'-'+tot_earnings+'-'+tot_deduc+'-'+net_salary+'-'+payslip_uni_id+'-'+month_year+'-'+employee_name+'-'+designation)

    $('#emp_name_slip span').text(employee_name)
    $('#desig_slip span').text(designation)
    $('#payslipid_slip span').text(payslip_uni_id)
    $('#month_slip span').text(month_year)
    $('#basic_salary_slip span').text(basic_salary.toLocaleString('en'))
    $('#housing_slip span').text(housing.toLocaleString('en'))
    $('#trans_slip span').text(transport.toLocaleString('en'))
    $('#util_slip span').text(utility.toLocaleString('en'))
    $('#entert_slip span').text(entert.toLocaleString('en'))
    $('#meal_slip span').text(meal.toLocaleString('en'))
    $('#pension_slip span').text(pension.toLocaleString('en'))
    $('#nhf_slip span').text(nhf.toLocaleString('en'))
    $('#nhis_slip span').text(nhis.toLocaleString('en'))
    $('#paye_slip span').text(paye.toLocaleString('en'))
    $('#absent_slip span').text(absent_d.toLocaleString('en'))
    $('#tot_earn_slip span').text(tot_earnings.toLocaleString('en'))
    $('#tot_ded_slip span').text(tot_deduc.toLocaleString('en'))
    $('#net_slip span').text(net_salary.toLocaleString('en'))





});

  var deduct_p = parseInt($('#deduct_pension').val());
  var deduct_nhf = parseInt($('#deduct_nhf').val());
  var deduct_nhis = parseInt($('#deduct_nhis').val());
  var calc_val = +deduct_p + +deduct_nhf + +deduct_nhis

  $('#total_deduct span').text(calc_val.toLocaleString('en'))
  $('#second_deduct span').text(calc_val.toLocaleString('en'))
  var total_earning = $('#total_earning').val();
  var net_salary =  total_earning - calc_val
  $('#net_sal span').text(net_salary.toLocaleString('en'))




  var with_absent = {}
  var absdays = {}
  var deducted_tax = {}

  $('#pick_tax').on('input', function() {

    var picktax = $('#pick_tax').val();
    var total_earning = $('#total_earning').val();
    var int_total_earning = parseInt(total_earning)

    var deduct_p = parseInt($('#deduct_pension').val());
    var deduct_nhf = parseInt($('#deduct_nhf').val());
    var deduct_nhis = parseInt($('#deduct_nhis').val());
    deducted_tax.id = parseInt((picktax * total_earning) / 100)
    $('#paye_tax').val(deducted_tax.id)

    var calc_val = +deduct_p + +deduct_nhf + +deduct_nhis + +deducted_tax.id

    $('#tot_ded').val(calc_val)

    // starts
    $('#total_deduct span').text(calc_val.toLocaleString('en'))
    $('#second_deduct span').text(calc_val.toLocaleString('en'))
    var total_earning = $('#total_earning').val();
    var net_salary =  total_earning - calc_val
    $('#net_sal span').text(net_salary.toLocaleString('en'))
    //ends
    $('#tot_net').val(net_salary)
    with_absent.num = int_total_earning - calc_val
      //alert(with_absent);
  })

  $('#abs_days').on('change', function() {

    absdays.num = $('#abs_days').val()
    var workDays = $('#working_days').val()
    //alert(workDays)


    var new_value = with_absent.num / workDays
    var abs_vale = new_value * absdays.num

    $('#absent_d').val(abs_vale)
    //alert(abs_vale)

    var deduct_p = parseInt($('#deduct_pension').val());
    var deduct_nhf = parseInt($('#deduct_nhf').val());
    var deduct_nhis = parseInt($('#deduct_nhis').val());
    //var deducted_tax = parseInt((picktax * total_earning) / 100)

    var calc_val = +deduct_p + +deduct_nhf + +deduct_nhis + +deducted_tax.id + +abs_vale

    $('#tot_ded').val(calc_val)
    //alert(calc_val)

    // starts
    $('#total_deduct span').text(calc_val.toLocaleString('en'))
    $('#second_deduct span').text(calc_val.toLocaleString('en'))
    var total_earning = $('#total_earning').val();
    var net_salary =  total_earning - calc_val
    $('#net_sal span').text(net_salary.toLocaleString('en'))
    //ends
    $('#tot_net').val(net_salary)
    // var final_earn = with_absent.num - abs_vale
    // alert(final_earn)
  })

  $('#deleteEmpPayslip').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        identity.id = button.data('identity')
        var name = button.data('employee_name')

        //alert(identity.id+'-'+name)

         $("#name_slip span").text(name);




    })

    function doPayslipDelete(){
        var action_src = identity.id;
        var my_delete_form = document.getElementById('getpayslipdelete');

        var urlLink = "/delete_payslip/";
        urlLink = urlLink + action_src;

        my_delete_form.action = urlLink;

    }



    function demoFromHTML() {
        var pdf = new jsPDF('p', 'pt', 'letter');
        // source can be HTML-formatted string, or a reference
        // to an actual DOM element from which the text will be scraped.
        source = $('#content')[0];

        // we support special element handlers. Register them with jQuery-style
        // ID selector for either ID or node name. ("#iAmID", "div", "span" etc.)
        // There is no support for any other type of selectors
        // (class, of compound) at this time.
        specialElementHandlers = {
            // element with id of "bypass" - jQuery style selector
            '#bypassme': function (element, renderer) {
                // true = "handled elsewhere, bypass text extraction"
                return true
            }
        };
        margins = {
            top: 80,
            bottom: 60,
            left: 40,
            width: 522
        };
        // all coords and widths are in jsPDF instance's declared units
        // 'inches' in this case
        pdf.fromHTML(
            source, // HTML string or DOM elem ref.
            margins.left, // x coord
            margins.top, { // y coord
                'width': margins.width, // max width of content on PDF
                'elementHandlers': specialElementHandlers
            },

            function (dispose) {
                // dispose: object with X, Y of the last line add to the PDF
                //          this allow the insertion of new lines after html
                pdf.save('payslip.pdf');
                //alert(pdf.output())
            }, margins
        );
    }




  // var doc = new jsPDF();
  // var specialElementHandlers = {
  //     '#editor': function (element, renderer) {
  //         return true;
  //     }
  // };

  $('#cmd_print').on('click', function () {
        $('#take_away').hide()
        $('#button_away').hide()
        window.print()
        $('#take_away').show()
        $('#button_away').show()

    });
  //     doc.save('payslip.pdf');
  // });

  // $('#itry').on('click', function(){
  //   window.print();
  // })




   

     $('#share_email').on('click', function(){

        $('#prepDoc').modal('show')
        // $('#sendEmailFile').modal('show')


    })









</script>

const validateIntroStep1 = (obj) => {
    let radio_group = $('input[name=loved_yourself]:checked').val();
    if(radio_group == '' || (typeof radio_group === 'undefined')){
        showAlert("intro_step_1_err","This is required to continue");
    }else{
        $('#intro_step_1_err').addClass('d-none');
        nextStep($(obj));
    }
}

const validateIntroStep2 = (obj) => {
    let month = $("#Month option:selected").val();
    let day = $("#Day option:selected").val();
    let year = $("#Year option:selected").val();
    console.log(month+"  "+day+"  "+year);
    if((day == '' || day == 'Date') || (month == '' || month == 'Month') || (year == '' || year == 'Year')){
        showAlert("dob_err","All fields are required");
    }else{
        $('#dob_err').addClass('d-none');
        let dob = day+"/"+month+"/"+year;
        $("#dob").val(dob);
        nextTab($(obj));
    }
}

$('#Year').on('change', function (e) {
    $("#Day").empty();
    let html = '';
    let year = $("option:selected", this);
    let month = $("#Month option:selected").val();
    let totalDays = setDays(month,year);
    for(i=1; i<=totalDays; i++){
        html = '<option value="'+i+'">'+i+'</option>';
        $("#Day").append(html);
    }
});

$('#Month').on('change', function (e) {
    $("#Day").empty();
    let html = '';
    let month = $("option:selected", this).val();
    let year = $("#Year option:selected").val();
    let totalDays = setDays(month,year);
    for(i=1; i<=totalDays; i++){
        html = '<option value="'+i+'">'+i+'</option>';
        $("#Day").append(html);
    }
});


const validateEligiblityStep1 = (obj) => {
    let radio_group = $('input[name=original_medicare]:checked').val();
    if(radio_group == '' || (typeof radio_group === 'undefined')){
         showAlert("eligibility_step_1_err","This is required to continue");
    }else{
        $('#eligibility_step_1_err').addClass('d-none');
        nextStep($(obj));
    }
}

const validateEligiblityStep2 = (obj) => {
    let radio_group = $('input[name=medicare_benefits]:checked').val();
    console.log('test==='+radio_group);
    if(radio_group == '' || (typeof radio_group === 'undefined')){
        // $('#eligibility_step_2_err').removeClass('d-none').show().css('color','red');
        showAlert("eligibility_step_2_err","This is required to continue");
    }else{
        $('#eligibility_step_2_err').addClass('d-none');
        nextTab($(obj));
    }
}

const validateCoverageStep1 = (obj) => {
    let radio_group = $('input[name=tricare_covered]:checked').val();
    if(radio_group == '' || (typeof radio_group === 'undefined')){
        // $('#coverage_step_1_err').removeClass('d-none').show().css('color','red');
         showAlert("coverage_step_1_err","This is required to continue");
    }else{
        $('#coverage_step_1_err').addClass('d-none');
        nextStep($(obj));
    }
}


const validateCoverageStep2 = (obj) => {
    let radio_group = $('input[name=coverage_insurance]:checked').val();
    if(radio_group == '' || (typeof radio_group === 'undefined')){
        // $('#coverage_step_2_err').removeClass('d-none').show().css('color','red');
        showAlert("coverage_step_2_err","This is required to continue");
    }else{
        $('#coverage_step_2_err').addClass('d-none');
        nextStep($(obj));
    }
}

const validateCoverageStep3 = (obj) => {
    let radio_group = $('input[name=coverage_employer_union]:checked').val();
    if(radio_group == '' || (typeof radio_group === 'undefined')){
        // $('#coverage_step_3_err').removeClass('d-none').show().html('Please Select Option').css('color','red');
        showAlert("coverage_step_3_err","This is required to continue");
        console.log('err');
    }else{
        console.log('no err');
        $('#coverage_step_3_err').addClass('d-none');
        nextTab($(obj));
    }
}

const validateContactStep1 = (obj) => {
    let firstname = $('#firstname').val();
    let lastname = $('#lastname').val();
    if(firstname == ''){
        $("#firstname").css('border','1px solid red');
        $('.firstname-lastname').removeClass('d-none').show().children('span').html("Firstname can not be empty").css('color','red');
    }else if(lastname == ''){
        $("#lastname").css('border','1px solid red');
        $('.firstname-lastname').removeClass('d-none').show().children('span').html("Lastname can not be empty").css('color','red');
         $("#firstname").css('border','');
    }else{
        $("#firstname-lastname").addClass('d-none')
        $("#lastname").css('border','');
        nextStep($(obj));
    }
}

const validateContactStep2 = (obj) => {
    let email = $("#email").val();
    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if(email === ''){
        // $("#contact_step_2_err").removeClass('d-none').css('color','red').html('Email cannot be email');
         $("#email").css('border','1px solid red');
          showAlert("contact_step_2_err","Email can not be empty");
    }else if (!emailRegex.test(email)) {
        // $("#contact_step_2_err").removeClass('d-none').css('color','red').html('Invalide Email address');
         $("#email").css('border','1px solid red');
         showAlert("contact_step_2_err","Email format is invalid");
    }else{
        // $('#contact_step_2_err').hide();
        $("#email").css('border','');
         $("#contact_step_2_err").addClass('d-none');
        nextStep($(obj));
    }
}

const validateContactStep3 = (obj) => {
     if($('#zip_code').val() == '' || $('#zip_code').val().length !== 5) {
        // $("#contact_step_3_err").removeClass('d-none').css('color','red').html('Please enter zip code with 5 numbers');
        $("#zip_code").css('border','1px solid red');
        showAlert("contact_step_3_err","Zip code is required with 5 length");
    } else {
   	let zipCode = $("#zip_code").val();
   	  $("#zip-revise").val(zipCode);
        $('#contact_step_3_err').addClass('d-none');
        $("#zip_code").css('border','');
        nextStep($(obj));
    } 
}

const validateContactStep4 = (obj) => {
     if($('#home_address').val() == '') {
         $("#home_address").css('border','1px solid red');
         showAlert("contact_step_4_err","Address is required");
    //    $("#contact_step_4_err").removeClass('d-none').css('color','red').html('address cannot be empty');
    } else {
        $('#contact_step_4_err').addClass('d-none');
        $("#home_address").css('border','');
        nextStep($(obj));
    } 
}

// next step
function nextStep($param){
    let checkClass = $param.closest('div').parent().hide().next();
    if(checkClass.hasClass('d-none')){
        checkClass.removeClass('d-none');
    }else{
        checkClass.show();
    }
}

function nextTab($param){
    var currentFieldset = $($param).closest(".wizard-fieldset");
        currentFieldset.removeClass("show");
        currentFieldset.next(".wizard-fieldset").addClass("show");
        Next();
}

// setDays
const setDays = (num_of_month,num_of_year) => {
     const date = new Date();
     var currentYear = date.getFullYear();
     if(num_of_year == ''){
         currentYear = num_of_year;
     }
     const totalDays = new Date(currentYear, num_of_month, 0).getDate();
     return totalDays;
}


// submit form
$("#submitForm").on('submit',function(e){
      e.preventDefault();
     if($('#phone_number').val() == '') {
    //  $("#contact_step_5_err").removeClass('d-none').css('color','red').html('phone number cannot be empty');

      $("#phone_number").css('border','1px solid red');
       $('.contact_last_step').removeClass('d-none').show().children('span').html('Phone Number is required').css('color','red');
    }else if($('#notaminor:checkbox:checked').length == 0)
    {
        $('#notaminor').css('outline', '2px solid red')
         $("#phone_number").css('border','');
         $('.contact_last_step').removeClass('d-none').show().children('span').html('Please Accept all terms and conditions').css('color','red');
    } 
    else if($('#seeplans:checkbox:checked').length == 0){
            $('#seeplans').css('outline', '2px solid red')
            $('#notaminor').css('outline', 'none')
         $('.contact_last_step').removeClass('d-none').show().children('span').html('Please Accept all terms and conditions').css('color','red');
    }
    else {
        $('#seeplans').css('outline', 'none')
        $(".contact_last_step").addClass('d-none')
        $.ajax({
                type: 'post',
                url: 'submitForm.php',
                data: $('form').serialize(),
                success: function () {
                    document.location = 'thankyou.php';
                },
        });
    } 
})

function Next() {
    $(".wizard-fieldset.show").each(function () {
      var stepClass = $(this)
        .attr("class")
        .match(/step(\d+)/)[0]; // Get the step class from fieldset
      var stepNumber = stepClass.match(/\d+/)[0];
      var prevStep = stepNumber - 1;
      $(".step_box").removeClass("step_active"); // Remove step_active class from all step boxes
      $(".step_box.step" + prevStep).addClass("step_check");
      $(".step_box." + stepClass).addClass("step_active"); // Add step_active class to the corresponding step box
    });
}


function showAlert(idName,message){
    $('#'+idName).removeClass('d-none').show().children('span').html(message).css('color','red');
}
$('.skip_dob_step').on('click',function(){
    nextTab($(this));
})

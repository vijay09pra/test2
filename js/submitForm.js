var intro = month = day = year = eligibility = coverage = '';
const validateIntro = (obj) => {
     intro = $('input[name=radio-group]:checked', '#intro').val();
    if(intro != ''){
        $("#intro-err").css('display','none'); 
    }else{
        $('#intro-err').css('display', 'block');
    }
}
const checkDob = () => {
    let month_check = $("#Month option:selected").val();
    let day_check = $("#Day option:selected").text();
    let year_check = $("#Year option:selected").text();
    console.log('day_check=>'+day_check);
    if(month_check != 'Month' && year_check != 'Year'){
        let num_of_month = $("#Month option:selected").val();
        let totalDays = setDays(num_of_month,year_check);
        if(totalDays != '' || totalDays != 0){
            $("#Day").html('<option selected value='+day_check+'>'+day_check+'</option>');
            // $(".default-day").css('display','none');
            for(i=1; i<=totalDays; i++){
                html = '<option value="'+i+'">'+i+'</option>';
                $("#Day").append(html);
            }
            totalDays = 0;
        }
    }

    if(month_check == 'Month' || day_check == 'Day' || year_check == 'Year'){
        // console.log(month_check,day_check,year_check);
    }else{
        month = month_check;
        day =day_check;
        year = year_check;
        $('#intro_next_step').prop('disabled', false).css({"opacity": "1", "cursor": "pointer"});
        console.log(month,day,year);
    }
}

// Eligibility
const validateEligibility = (obj) => {
     eligibility = $('input[name=radio-group]:checked').val();
    console.log(eligibility);
    if(eligibility != ''){
        $('#eligibility_next').prop('disabled', false).css({"opacity": "1", "cursor": "pointer"});;
    }else{
        $("#eligibility-err").css({"display": "block", "color": "red"});
    }
}

// coverage section
const validateCoverage = (obj) => {
     coverage = $('input[name=radio-group]:checked').val();
    console.log(coverage);
    if(coverage != ''){
        $('#coverage_next').prop('disabled', false).css({"opacity": "1", "cursor": "pointer"});;
    }else{
        $("#coverage-err").css({"display": "block", "color": "red"});
    }
}


// get days
const setDays = (num_of_month,num_of_year) => {
    const date = new Date();
    var currentYear = date.getFullYear();
    if(num_of_year == ''){
        currentYear = num_of_year;
    }
    const totalDays = new Date(currentYear, num_of_month, 0).getDate();
    return totalDays;
}

// Form Submit 

$('#submitForm').on('submit', function (e) {
    e.preventDefault();
    let dob = month+'/'+day+'/'+year;
    let formData = {
        Dob : dob,
        eligibility : eligibility,
        coverage : coverage
    }
    $.ajax({
        type: 'post',
        url: 'submitForm.php',
        data: formData,
        success: function (response) {
            // console.log(response);
            document.location = 'thankyou.php';
        },
    });
});
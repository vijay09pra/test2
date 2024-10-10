$(document).ready(function () {
  // next button
  // $(".form-wizard-next-btn").click(function () {
  //   var currentFieldset = $(this).closest(".wizard-fieldset");
  //   currentFieldset.removeClass("show");
  //   currentFieldset.next(".wizard-fieldset").addClass("show");
  //   Next();
  // });

  // previous button
  $(".form-wizard-previous-btn").click(function () {
    var currentFieldset = $(this).closest(".wizard-fieldset");
    currentFieldset.removeClass("show");
    currentFieldset.prev(".wizard-fieldset").addClass("show");
    back();
  });

    // $(".blue_next_btn").click(function () {
    //   $(".step_one_next").removeClass("d-none");
    //   $(".step_one").addClass("d-none");
    // });
    // $(".blue_back_btn").click(function () {
    //   $(".step_one").removeClass("d-none");
    //   $(".step_one_next").addClass("d-none");
    // });


  // function Next() {
  //   $(".wizard-fieldset.show").each(function () {
  //     var stepClass = $(this)
  //       .attr("class")
  //       .match(/step(\d+)/)[0]; // Get the step class from fieldset
  //     var stepNumber = stepClass.match(/\d+/)[0];
  //     var prevStep = stepNumber - 1;
  //     $(".step_box").removeClass("step_active"); // Remove step_active class from all step boxes
  //     $(".step_box.step" + prevStep).addClass("step_check");
  //     $(".step_box." + stepClass).addClass("step_active"); // Add step_active class to the corresponding step box
  //   });
  // }
  function back() {
    $(".wizard-fieldset.show").each(function () {
      var stepClass = $(this)
        .attr("class")
        .match(/step(\d+)/)[0]; // Get the step class from fieldset
      var stepNumber = stepClass.match(/\d+/)[0];
      var prevStep = stepNumber - 1;
      var nextStep = stepNumber + 1;

      $(".step_box").removeClass("step_active"); // Remove step_active class from all step boxes
      $(".step_box." + stepClass).removeClass("step_check");
      $(".step_box.step" + nextStep).removeClass("step_check");
      $(".step_box." + stepClass).addClass("step_active"); // Add step_active class to the corresponding step box
    });
  }
});

$('.next_step_btn').on('click',function(){
  let checkClass = $(this).closest('div').parent().hide().next();
  if(checkClass.hasClass('d-none')){
    checkClass.removeClass('d-none');
  }else{
    checkClass.show();
  }
})
$('.back_step_btn').on('click',function(){
  $(this).closest('div').parent().hide().prev().show();
});


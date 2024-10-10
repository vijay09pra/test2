<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
<span id="siteseal"><script async type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=LxE79WWk3HPdj5Iz4ijXQDIq3DFQRZVeRmx1dJXUZjyl3takoBfSxly0bOWf"></script>
  <section class="header">
  <span id="siteseal"><script async type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=LxE79WWk3HPdj5Iz4ijXQDIq3DFQRZVeRmx1dJXUZjyl3takoBfSxly0bOWf"></script></span>
    <div class="container">
      <!-- <div class="row">
        <div class="d-flex justify-content-end">
          <div class="text-right">
            <h4 class="">Speak with a licensed Insurance Agent</h4>
            <h1><strong>(888) 304-3413</strong> (TTY:711)</h1>
            <h4 class="ms-3"><span class="round"></span> Available Mon - Sun: 8am - 11pm EST</h4>
          </div>
          <div class="header_img ms-3">
            <img src="Images/calling_girl.png">
          </div>
        </div>
      </div> -->
      <div class="row">
        <div class="d-flex justify-content-between">
          <div class="d-flex justify-content-start">
              <div class="header_img ms-3">
                  <img src="Images/policy_fetch_logo.png">
                </div>
          </div>
              <div class="d-flex justify-content-end">
                <div class="text-right">
                  <h4 class="">Speak with a licensed Insurance Agent</h4>
                  <h1><strong>(888) 304-3413</strong> (TTY:711)</h1>
                  <h4 class="ms-3"><span class="round"></span> Available Mon - Sun: 8am - 11pm EST</h4>
                </div>
                <div class="header_img ms-3">
                  <img src="Images/calling_girl.png">
                </div>
              </div>
          </div>
      </div>
    </div>
  </section>

  <!--  -->
  <section class="wizard-section container">
    <div class="row no-gutters main_home_page my-5">
      <div class="col-lg-4 col-md-12 col-sm-12 ps-0">
        <h1 class="text-capitalize font-weight-bold">Simplifying Medicare For You</h1>
        <h3 class="">We’re your online shopping partner for comparing Medicare plans. We’ll match you to plans that cover your needs and fit your budget</h3>
        <img src="Images/MicrosoftTeams-image (53).png">
      </div>
      <div class="col-lg-8 col-md-12 col-sm-12">
        <div class="form-wizard">
          <form action="" method="post" role="form" id="submitForm">
            <div class="step_data my-5">
              <div class="step">
                <span class="step_box step1 step_active"><span class="step_num">1</span></span><span
                  class="step_text">Introduction</span>
              </div>
              <div class="step">
                <span class="step_box step2"><span class="step_num">2</span></span><span
                  class="step_text">Eligibility</span>
              </div>
              <div class="step ">
                <span class="step_box step3"><span class="step_num">3</span></span><span
                  class="step_text">Coverage</span>
              </div>
              <div class="step ">
                <span class="step_box step4"><span class="step_num">4</span></span><span
                  class="step_text">Contact</span>
              </div>
            </div>

            <!-- Introduction -->
            <fieldset class="wizard-fieldset step1 show">
              <div class="step_one">
                <div class="card-body">
                  <h2 class="mb-4 step-name">Introduction</h2>
                  <h3>Are you looking for yourself or a loved one?</h3>
                  <div class="values mt-4 mb-4" id="intro">
                    <!-- <div class="alert" id="intro-err">Please select one option</div> -->
                    <div class="form-check">
                      <input type="radio" id="test1" value="Yourself" class="intro_step_1" name="loved_yourself">
                      <label for="test1">Myself</label>
                    </div>
                    <div class="form-check">
                      <input type="radio" id="test2" value="Loved one" class="intro_step_1" name="loved_yourself">
                      <label for="test2">Loved one</label>
                    </div>
                  </div>
                  <div class="w-75 d-none" id="intro_step_1_err">
                    <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                    <span></span>
                  </div>
                </div>
                <div class="form-group mt-5 clearfix border-top btn_set">
                  <button type="button" onclick="validateIntroStep1(this)"
                    class="blue_next_btn continue_btn float-right border-0">
                    Next Step
                  </button>
                </div>
              </div>
              <div class="step_one_next d-none">
                <div class="card-body">
                  <h2 class="mb-4 step-name">Introduction</h2>
                  <h3>What is your date of birth?</h3>
                  <div class="values mt-4 mb-4">
                    <select class="form-select" id="Month">
                      <option>Month</option>
                      <?php
                      $monthsName = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                      $count = 0;
                      foreach ($monthsName as $name) {
                        $count++;
                        ?>
                        <option value="<?php echo $count; ?>"><?php echo $name; ?></option>
                        <?php
                      }
                      ?>
                    </select>
                    <select class="form-select" id="Day">
                      <option>Date</option>
                      <!-- <option class="default-day">Select Month and Year First</option> -->
                    </select>
                    <select class="form-select" id="Year">
                      <option>Year</option>
                      <?php
                      foreach (range(1900, 2023) as $key => $year) {
                        ?>
                        <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                        <?php
                      }
                      ?>
                    </select>
                    <input type="hidden" name="date_of_birth" id="dob">
                  </div>
                  <div class="w-75 d-none" id="dob_err">
                    <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                    <span></span>
                  </div>
                </div>
                <section class="skip">
                  <div class="container text-center">
                    <a href="javascript:void(0)" class="mb-4 d-block skip_dob_step"> Skip </a>
                    <p class="mb-0">OR CALL <strong class="phone_number"> (844) 488-0183 TTF: 711 </strong> To speak
                      with a licensed
                      insurance agent </p>
                  </div>
                </section>
                <div class="form-group mt-4 clearfix border-top btn_set">
                  <button type="button" class="back_step_btn back_btn blue_back_btn float-right border-0">
                    Back
                  </button>
                  <button type="button" onclick="validateIntroStep2(this)" class="continue_btn float-right border-0">
                    Next Step
                  </button>
                </div>
              </div>
            </fieldset>

            <!-- Eligibility -->
            <fieldset class="wizard-fieldset step2">

              <div class="card-body step_two">
                <h2 class="mb-4 step-name">Eligibility</h2>
                <h3>Are you already enrolled in Original Medicare (Parts A&B)?</h3>
                <div class="values mt-4 mb-4">
                  <div class="form-check">
                    <input type="radio" id="test3" value="Yes" name="original_medicare">
                    <label for="test3">Yes</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" id="test4" value="No" name="original_medicare">
                    <label for="test4">No</label>
                  </div>
                </div>
                <div class="w-75 d-none" id="eligibility_step_1_err">
                  <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                  <span></span>
                </div>

                <div class="form-group mt-5 clearfix border-top btn_set">
                  <button type="button" class="back_btn form-wizard-previous-btn float-right border-0">
                    Back
                  </button>
                  <button type="button" onclick="validateEligiblityStep1(this)"
                    class="continue_btn float-right border-0">
                    Next Step
                  </button>
                </div>
              </div>

              <!-- Medicare benifit -->
              <div class="card-body step_two_next d-none">
                <h2 class="mb-4 step-name">Eligibility</h2>
                <h3>Are you eligible for Medicare benefits?</h3>
                <div class="values mt-4 mb-4 d-block">
                  <div class="form-check">
                    <input type="radio" id="test5" value="Yes" name="medicare_benefits">
                    <label for="test5">Yes</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" id="test6" value="No" name="medicare_benefits">
                    <label for="test6">No</label>
                  </div>
                </div>
                <div class="w-75 d-none" id="eligibility_step_2_err">
                  <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                  <span></span>
                </div>
                <!-- <span id="eligibility_step_2_err" class="d-none">Please select one</span> -->

                <div class="form-group mt-5 clearfix border-top btn_set">
                  <button type="button" class="back_step_btn back_btn float-right border-0">
                    Back
                  </button>
                  <button type="button" onclick="validateEligiblityStep2(this)"
                    class="form-wizard-next-btn continue_btn float-right border-0">
                    Next Step
                  </button>
                </div>
              </div>

            </fieldset>

            <!-- Coverage -->
            <fieldset class="wizard-fieldset step3">
              <div class="card-body step_three">
                <h2 class="mb-4 step-name">Coverage</h2>
                <h3>Are you currently covered under Tricare?</h3>
                <p>Tricare provides civilian health benefits for U.S. Armed Forces military personnel, military
                  retirees, and their dependents.</p>
                <div class="values mt-4 mb-4">
                  <div class="form-check">
                    <input type="radio" value="Yes" id="test7" name="tricare_covered">
                    <label for="test7">Yes</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" value="No" id="test8" name="tricare_covered">
                    <label for="test8">No</label>
                  </div>
                </div>
                <div class="w-75 d-none" id="coverage_step_1_err">
                  <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                  <span></span>
                </div>
                <div class="form-group mt-5 clearfix border-top btn_set">
                  <button type="button" class="back_btn form-wizard-previous-btn float-right border-0">
                    Back
                  </button>
                  <button type="button" onclick="validateCoverageStep1(this)" class="continue_btn float-right border-0">
                    Next Step
                  </button>
                </div>
              </div>

              <!-- Step-3 Next2 -->
              <div class="card-body step_three_next_2 d-none">
                <h2 class="mb-4 step-name">Coverage</h2>
                <h3>Do you currently have any additional insurance coverage, other than your Medicare red, white, and
                  blue card?</h3>
                <div class="values mt-4 mb-4 d-block">
                  <div class="form-check">
                    <input type="radio" value="Yes" id="test9" name="coverage_insurance">
                    <label for="test9">Yes</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" value="No" id="test10" name="coverage_insurance">
                    <label for="test10">No</label>
                  </div>
                </div>
                <div class="w-75 d-none" id="coverage_step_2_err">
                  <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                  <span></span>
                </div>
                <div class="form-group mt-5 clearfix border-top btn_set">
                  <button type="button" class="back_btn back_step_btn float-right border-0">
                    Back
                  </button>
                  <button type="button" onclick="validateCoverageStep2(this)" class="continue_btn float-right border-0">
                    Next Step
                  </button>
                </div>
              </div>

              <!-- Step-3 Next3 -->
              <div class="card-body step_three_next_3 d-none">
                <h2 class="mb-4 step-name">Coverage</h2>
                <h3>Did you enroll in this coverage through a past employer, union, Tricare, or Medicaid?</h3>
                <div class="values mt-4 mb-4 d-block" id="step_three_next_3">
                  <div class="form-check">
                    <input type="radio" value="Yes" id="test11" name="coverage_employer_union">
                    <label for="test11">Yes</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" value="No" id="test12" name="coverage_employer_union">
                    <label for="test12">No</label>
                  </div>
                </div>
                <div class="w-75 d-none" id="coverage_step_3_err">
                  <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                  <span></span>
                </div>
                <div class="form-group mt-5 clearfix border-top btn_set">
                  <button type="button" class="back_btn back_step_btn float-right border-0">
                    Back
                  </button>
                  <button type="button" onclick="validateCoverageStep3(this)"
                    class="form-wizard-next-btn continue_btn float-right border-0">
                    Next Step
                  </button>
                </div>
              </div>
            </fieldset>

            <!-- Contact -->
            <fieldset class="wizard-fieldset step4">
              <div class="card-body step_four">
                <h2 class="mb-4 step-name">Contact</h2>
                <h4>What is your name?</h4>
                <div class="values mt-4 mb-4 d-block" id="formValues">
                  <div class="step_four_field">
                    <div class="form-group">
                      <input type="text" id="firstname" class="form-control w-50" name="firstname"
                        placeholder="Enter First name">
                    </div>
                    <div class="form-group">
                      <input type="text" id="lastname" class="form-control w-50" name="lastname"
                        placeholder="Enter Last name">
                    </div>
                  </div>
                </div>
                <div class="w-75 d-none firstname-lastname" id="firstname-lastname">
                  <i class=" fa fa-exclamation-circle" aria-hidden="true"></i>
                  <span></span>
                </div>
                <div class="form-group mt-5 clearfix border-top btn_set">
                  <button type="button" class="back_btn form-wizard-previous-btn float-right border-0">
                    Back
                  </button>
                  <button type="button" onclick="validateContactStep1(this)" class="continue_btn float-right border-0">
                    Next
                  </button>
                </div>
              </div>

              <div class="card-body step_four_email d-none">
                <h2 class="mb-4 step-name">Contact</h2>
                <h4>What is your current email address?</h4>
                <div class="values mt-4 d-block" id="formValues">
                  <div class="form-group">
                    <input type="email" id="email" class="form-control w-50" name="email" placeholder="Enter email">
                  </div>
                </div>
                <div class="w-75 d-none" id="contact_step_2_err">
                  <i class=" fa fa-exclamation-circle" aria-hidden="true"></i>
                  <span></span>
                </div>
                <div class="form-group mt-5 clearfix border-top btn_set">
                  <button type="button" class="back_step_btn back_btn float-right border-0">
                    Back
                  </button>
                  <button type="button" onclick="validateContactStep2(this)" class="continue_btn float-right border-0">
                    Next
                  </button>
                </div>
              </div>


              <div class="card-body step_four_zip d-none">
                <h2 class="mb-4 step-name">Contact</h2>
                <h4>What is your zip code?</h4>
                <div class="values mt-4 d-block" id="formValues">
                  <div class="form-group">
                    <input type="text" id="zip_code" class="form-control w-50" placeholder="Enter zip">
                  </div>
                </div>
                <div class="w-75 d-none" id="contact_step_3_err">
                  <i class=" fa fa-exclamation-circle" aria-hidden="true"></i>
                  <span></span>
                </div>
                <div class="form-group mt-5 clearfix border-top btn_set">
                  <button type="button" class="back_btn back_step_btn float-right border-0">
                    Back
                  </button>
                  <button type="button" onclick="validateContactStep3(this)" class="continue_btn float-right border-0">
                    Next
                  </button>
                </div>
              </div>

              <div class="card-body step_four_home_address d-none">
                <h2 class="mb-4 step-name">Contact</h2>
                <h4>What is your current home address?</h4>
                <div class="values mt-4 d-block" id="formValues">
                  <div class="form-group">
                    <!-- street address -->
                    <input type="text" id="home_address" class="medium-input border-radius-4 form-control w-50"
                      name="address" placeholder="Type Street Address">

                    <!-- <input type="text" name="address" id="address" data-email="required" placeholder="Street Address"
                      class="medium-input border-radius-4"> -->
                  </div>

                  <div class="form-group">
                    <input type="text" name="zip_code" id="zip-revise" data-email="required" placeholder="Zip Code"
                      class="medium-input border-radius-4 form-control w-50">
                  </div>

                  <div class="form-group">
                    <input type="text" name="city" id="city" data-email="required" placeholder="City"
                      class="medium-input border-radius-4 form-control w-50">
                  </div>

                  <div class="form-group">
                    <input type="text" name="state" id="state" data-email="required" placeholder="state"
                      class="medium-input border-radius-4 form-control w-50">
                  </div>
                </div>
                <div class="w-75 d-none" id="contact_step_4_err">
                  <i class=" fa fa-exclamation-circle" aria-hidden="true"></i>
                  <span></span>
                </div>
                <div class="form-group mt-5 clearfix border-top btn_set">
                  <button type="button" class="back_btn back_step_btn float-right border-0">
                    Back
                  </button>
                  <button type="button" onclick="validateContactStep4(this)" class="continue_btn float-right border-0">
                    Next
                  </button>
                </div>
              </div>


              <div class="card-body step_four_phone_number d-none">
                <h2 class="mb-4 step-name">Contact</h2>
                <h4>What is your phone number?</h4>
                <div class="values mt-4 d-block" id="formValues">
                  <div class="form-group">
                    <input type="number" id="phone_number" class="form-control w-50" name="phone_number"
                      placeholder="Enter phone number">
                    <label for="notaminor" class="agreelabel mt-4"><input type="checkbox" id="notaminor" name=""
                        class="agreecheckbox" />
                      <p>By checking this box and clicking 'Agree and Continue' button below, I represent that I: 1) am
                        18+ years of age; 2) have read and agreed to the PolicyFETCH Terms and Conditions and Privacy
                        Policy;1 and 3) agree to receive email marketing from PolicyFETCH and its Marketing Partners
                      </p>
                    </label>
                    <label for="seeplans" class="agreelabel"><input type="checkbox" id="seeplans" name=""
                        class="agreecheckbox" />
                      <p>By checking thisbox and clicking 'Agree and Continue' button below, I provide my express
                        consent authriing PlicyFETCH and its Marketing Partners to contact me to telephone, which may
                        include artificialor pre-recorded calls and/or text messages, delivered via automated
                        technology, to the phone number that I have provided above regarding health insurance products
                        and services. I understand that my consent is not required as a condition to receive a qoute. To
                        obtain a health insurance qoute without providing consent Call us at 800-602-1457
                      </p>
                    </label>
                  </div>
                </div>
                <div class="w-75 d-none contact_last_step">
                  <i class=" fa fa-exclamation-circle" aria-hidden="true"></i>
                  <span></span>
                </div>
                <div class="form-group mt-5 clearfix border-top btn_set">
                  <button type="button" class="back_step_btn back_btn float-right border-0">
                    Back
                  </button>
                  <button type="submit" class="text-uppercase continue_btn float-right border-0">
                    Agree and Continue
                  </button>
                </div>
              </div>

            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer section -->
  <footer>
    <div class="footer_bg">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="speak_text">
              <h5>Speak to a licensed Insurance Agent</h5>
              <h3><i class="fa fa-phone" aria-hidden="true"></i> (888)304-3413 TTY:711</h3>
              <h5>Mon - Sun 8am - 11pm EST</h5>
            </div>
          </div>
          <div class="col-md-6">
            <div class="footer_logo">
              <img src="Images/bbb-accreditation-logo.png">
            </div>
          </div>
        </div>

        <div class="row align-items-baseline">
          <div class="col-md-6">
            <div class="copyright">
              <p> &copy; Copyright policyfetch.com 2023. All Rights Reserved.</p>
            </div>
          </div>
          <div class="col-md-6">
            <ul class="footer_list">
              <li> <a href="https://policyfetch.com/privacy-policy/">PRIVACY POLICY</a> </li>
              <li> <a href="">DO NOT SELL NOR SHARE MY</a> </li>
              <li> <a href="https://policyfetch.com/terms-and-conditions/">TERMS OF SERVICE </a> </li>
              <li> <a href="">COMMUNICATION OPT OUT</a> </li>
            </ul>
          </div>
        </div>

        <div class="row">
          <div class="footer_content">
            <p>This website is owned and operated by Quantum Health, LLC, a Quantum Digital media Inc licensed insurance agency. it is NOT a gevernment agency, it is also not an insurer, or medical provider.Invitations for
              applications for insurance on policyfetch.com are made through Quantum health, LLC, only where licensed and
              appointed. </a> Quantum Health, LLC is a
              wholly owned subsidiary of Quantum Digital Media, Inc.</p>

            <p>We do Not offer every plan available in your area. For a complete list of available plans please contact
              1-800-MEDICARE (TTY users should call <a href="tel:1-877-486-2048"> 1-877-486-2048)</a>, 24 hours a day/7
              days a week or consult <a href="https://www.medicare.gov/"> www.medicare.gov</a>. This site is not
              connected with or endorsed by the U.S. Government or the federal Medicare program.</p>
                          <p>Plans are insured or covered by a Medicare Advantage organization with a Medicare contract and/or a Medicare-approved Part D sponsor. Enrollment in the plan depends on the plan’s contract renewal with Medicare.</p>

            <p> We do not offer every plan available in your area. Any information we provide is limited to those plans
              we do offer in your area. Please contact <a href="https://www.medicare.gov/"> Medicare.gov</a> or 1-800-
              MEDICARE to get information on all of your options.</p>

            <p>To send a complaint to Medicare, call 1-800-MEDICARE (TTY users should call <a
                href="tel:1-877-486-2048">1-877-486-2048)</a>, 24 hours a day/7 days a week). If your complaint involves
              a broker or agent, be sure to include the name of the person when filing your grievance.</p>

            <p>Not all plans offer all of these benefits. Benefits may vary by carrier and location. Limitations and
              exclusions may apply.</p>

            <p>The purpose of this site is the solicitation of insurance. Medicare supplement insurance is available to
              those age 65 and older enrolled in Medicare Parts A and B and in some states to those under age 65
              eligible for Medicare due to disability or End Stage Renal disease. Medicare supplement insurance plans
              are not connected with or endorsed by the U.S. government or the federal Medicare program.</p>


            <p>This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.</p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"
    integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAy63yPpkw8E0sZhNfCl9sRj2MZu-7Jyx8&callback=initAutocomplete&libraries=places&v=weekly"
    defer></script>
  <script src="js/getAddress.js"></script>
  <script src="js/custom.js"></script>
  <script src="js/validation.js"></script>
</body>

</html>
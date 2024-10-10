<?php
include 'include/session.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    submitForm(); /* Submit the form */
}

function submitForm()
{
    foreach ($_POST as $key => $value) {
        $data[$key] = $value;
    }
    $data['lp_offer_id'] = 176;
    $data['lp_campaign_id'] = '64a9553c49376';
    $data['lp_redirect_url'] = 'https://life.policyfetch.com/v1/thankyou.php';
    $data['lp_redirect_fail_url'] = 'https://life.policyfetch.com/v1/thankyou.php';
    // $data['&trusted_form_cert_id'] = isset($_POST['xxTrustedFormToken']) ? $_POST['xxTrustedFormToken'] : '';
    $data['ip_address'] = $_SERVER['REMOTE_ADDR'];
    $data['lp1'] = $_SESSION['lp1'];
    $data['lp2'] = $_SESSION['lp2'];
    $data['lp3'] = $_SESSION['lp3'];
    $data['dob'] = $_POST['month'] . "/" . $_POST['day'] . "/" . $_POST['year'];
    // $data['trusted_form_cert_id'] = isset($_POST['xxTrustedFormCertUrl']) ? $_POST['xxTrustedFormCertUrl'] : '';
    // $data['&jornaya_lead_id'] = isset($_POST['universal_leadid']) ? $_POST['universal_leadid'] : '';

    echo $_SESSION['lp1'];

    unset($data['month']);
    unset($data['day']);
    unset($data['year']);
    unset($data['universal_leadid']);
    unset($data['xxTrustedFormToken']);

    $url = "https://quantum.leadspediatrack.com/post.do";

    // curlUsingPost($url, $data);

    return true;
}

?>
<?php
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/thankyou.css" />
</head>
<body>
<section class="thank_you text-center">
    <div class="thank_img">
        <img src="Images/banner.jpeg" alt="">
    </div>
    <div class="thank_description mt-5">
        <h3>Thank you</h3>
        <p>An advisor will be in touch shortly</p>
    </div>
    <div class="map">
        <img src="Images/left_bg.png" alt="">
        <p class="mb-0 pb-3">We found 8 possible plans for you!</p>
    </div>
    <div class="thank_button mt-4">
        <h5>Want to take action right away?</h5>
        <a href="tel:18449753275" class="btn_blue btn_design mt-3 text-white"><i class="fa fa-phone me-1" aria-hidden="true"></i> Call us now</a>
        <a href="javascript:void(0);" class="btn_light btn_design mt-3">Browse plan online <i class="fa fa-arrow-right ms-1" aria-hidden="true"></i></a>
    </div>
</section>
<iframe src="https://www.cjhthtrk.com/?nid=1761&oid=577&transaction_id=<?php echo isset($_SESSION['lp2']) ? $_SESSION['lp2'] : '' ?>" scrolling="no" frameborder="0" width="1" height="1"></iframe>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
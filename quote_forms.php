<?php 
require 'stripe-php-master/init.php';
// Set your secret key. Remember to switch to your live secret key in production.
// See your keys here: https://dashboard.stripe.com/apikeys
\Stripe\Stripe::setApiKey('sk_test_51IxDgKERcNEtc8ziWOiT7dQKdluZQeneFTKpDeaQKYZt2SKSutk543DRbft098XY0xZsqsmUxJawf8oR2es1q6YY00IHNRn6uf');

$intent = \Stripe\PaymentIntent::create([
  'amount' => 5000,
  'currency' => 'usd',
  // Verify your integration in this guide by including this parameter
  'metadata' => ['integration_check' => 'accept_a_payment'],
]);


?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>The Dumpster Crew</title>
<!-- MDB icon -->
<link rel="icon" href="img/navbar_edit.png" type="image/x-icon">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<!-- Google Fonts Roboto -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Material Design Bootstrap -->
<link rel="stylesheet" href="css/mdb.min.css">
<!-- Your custom styles (optional) -->
<link rel="stylesheet" href="css/style.css">
<!-- Custom Font -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600&family=Orelega+One&family=Zen+Dots&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha256-L/W5Wfqfa0sdBNIKN9cG6QA5F2qx4qICmU2VgLruv9Y=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha256-WqU1JavFxSAMcLP2WIOI+GB2zWmShMI82mTpLDcqFUg=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins" />
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!-- Favicon -->
       <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
  <title>Stripe Custom Payment flow integration using PHP/JavaScript</title>
  <script src="https://js.stripe.com/v3/"></script>
<style>
html, body, header, .view {
    height: 500px;
}

@media (max-width: 740px) {
html, body, header, .view {
    height: 600px;
}
}

@media (min-width: 800px) and (max-width: 1030px) {
html, body, header, .view {
    height: 375px;
}
}
	.top-nav-collapse {
      background-color: #7283A7 !important;
    }
.intro {
    background-image: url("img/background_dumpster1_crop.jpg");
    background-size: cover;
    background-repeat: no-repeat;
}
.rgba-gradient {
    background: -moz-linear-gradient(45deg, rgba(42, 27, 161, 0.6), rgba(50, 189, 229, 0.6) 100%);
    background: -webkit-linear-gradient(45deg, rgba(42, 27, 161, 0.6), rgba(50, 189, 229, 0.6) 100%);
    background: -webkit-gradient(linear, 45deg, from(rgba(42, 27, 161, 0.6)), to(rgba(50, 189, 229, 0.6)));
    background: -o-linear-gradient(45deg, rgba(42, 27, 161, 0.6), rgba(50, 189, 229, 0.6) 100%);
    background: linear-gradient(to 45deg, rgba(42, 27, 161, 0.6), rgba(50, 189, 229, 0.6) 100%);
}
.text-responsive-h {
  font-size: calc(100% + 1vw + 1vh);
}
.text-responsive {
  font-size: calc(100% + .35vw + .35vh);
}
.text-responsive-nav {
	font-size: calc(100% + .5vw + .5vh);
}
.text-responsive-nav-small {
	font-size: calc(100% + .5vw + .5vh); }
.row {
	margin: auto;	
}
</style>
</head>
<body>
<!--Change Start-->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "thedumpstercrew";
$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['save']))
{	 
	 $quantity1 = $_POST['productquantity'];
	 $quantity2 = $_POST['productquantity1'];
	 $lengthofrentalperiod = $_POST['lengthofrentalperiod'];
	 $customername = $_POST['customername'];
   $dateofservice = $_POST['dateofservice'];
   $timeofservice = $_POST['timeofservice'];
   $pickupdate = $_POST['pickupdate'];
   $streetaddress = $_POST['streetaddress'];
   $zipcode = $_POST['zipcode'];
   $phonenumber = $_POST['phonenumber'];
   $emailaddress = $_POST['emailaddress'];
   $timepickupdate = $_POST['timepickupdate'];
	 $sql = "INSERT INTO orderdelivery (productquantity ,lengthofrentalperiod ,customername ,dateofservice ,timeofservice ,pickupdate ,streetaddress ,zipcode ,phonenumber, emailaddress, productquantity1,timepickupdate)
	 VALUES ('$quantity1','$lengthofrentalperiod','$customername','$dateofservice','$timeofservice','$pickupdate','$streetaddress','$zipcode','$phonenumber','$emailaddress','$quantity2','$timepickupdate')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
<!--Change End-->

<!-- Start your project here-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
   <a class="navbar-brand" href="index.html"> <img src="img/navbar_edit.png" height="50px" alt=""/> </a><h2 class="text-responsive-nav" style="color: white;  font-family: 'Orelega One', cursive;"><b>The Dumpster Crew</b></h2>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
          aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"> <a class="nav-link text-responsive-nav-small" href="index.html" style="color: white;  font-family: 'Orelega One', cursive;">Home <span class="sr-only">(current)</span> </a> </li>
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle text-responsive-nav-small"
            href="#"
            id="navbarDropdown"
            data-toggle="dropdown"
            aria-expanded="false"
			style="color: white;  font-family: 'Orelega One', cursive;"
          >
            Dumpsters
          </a>
          <!-- Dropdown menu -->
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item text-responsive-nav-small" href="dumpster_20.html" style="color: black;  font-family: 'Orelega One', cursive;">12 Yard</a></li>
            <li><a class="dropdown-item text-responsive-nav-small" href="dumpster_40.html" style="color: black;  font-family: 'Orelega One', cursive;">16 Yard</a></li>
            <li><hr class="dropdown-divider" /></li>
            <li>
              <a class="dropdown-item text-responsive-nav-small" href="dumpsters.html" style="color: black;  font-family: 'Orelega One', cursive;">Compare Sizes</a>
            </li>
          </ul>
        </li>
        <li class="nav-item active"> <a class="nav-link text-responsive-nav-small" href="quote_form.html" style="color: white;  font-family: 'Orelega One', cursive;">Rent Online</a> </li>
		<li class="nav-item"> <a class="nav-link text-responsive-nav-small" style="color:#3F51B5; font-family: 'Orelega One', cursive;">+1-614-450-2432</a></li>
		<li class="nav-item"> <i class="fas fa-phone fa-2x mt-3" style="color:#3F51B5"></i></li>
      </ul>
    </div>
</nav>
<section class="view intro">
  <div class="mask" style="background: linear-gradient(
						   45deg,
						   rgba(0,0,0,0.7),
						   rgba(251,251,251,0.7) 100%);">
	  <div class="container h-100 d-flex justify-content-center align-items-center">
          <div class="row pt-5 mt-6">
            <div class="col-md-12 mb-3">
              <div class="intro-info-content text-center">
                <h1 class="display-3 mb-5 wow fadeInDown" data-wow-delay="0.3s">ONLINE
                  <a class="indigo-text font-weight-bold">ORDER</a>
				</h1>
              </div>
            </div>
          </div>
        </div>
	
</div>
</section>
<section class="content">
  <div class="media mt-5 mr-auto">
    <div class="col-md-7 offset-2 offset-xl-1">
      <h2 class="text-responsive-h indigo-text" style="font-family: 'Montserrat', sans-serif; font-weight: 600;">Online Rental Order Form</h2>
	  <h3 class="test-responsive-h black-text" style="font-family: 'Montserrat', sans-serif; font-weight: 300;">Fill out our simple to Rental Form and get ready for your project in seconds! </h3>
      <hr>
	  <h3 class="test-responsive-nav black-text" style="font-family: 'Montserrat', sans-serif; font-weight: 200;">Please note that prices do not cover pickups past the first pickup. Subsequent pickups will cost $20 per trip to the landfill</h3>
      <!-- Container for demo purpose -->
<div class="container my-5 py-5">

<form id="payment-form" data-secret="<?= $intent->client_secret ?>" active="quote_forms.php" method="POST">
  <!--Section: Design Block-->
  <section>
    <div class="row">
      <div class="col-md-8 mb-4">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Catalog</h5>
          </div>
          <div class="card-body">
            <!-- Single item -->
            <div class="row">
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                    class="w-100" alt="12yardstore" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
                <!-- Image -->
              </div>

              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data -->
                <p><strong>12 Yard Dumpster</strong></p>
                <!-- Data -->
              </div>

              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <!-- Quantity -->
                <div class="d-flex mb-4" style="max-width: 300px">
                  <button type="button" class="btn btn-primary px-3 me-2 submit-btn1" name="button1" id="button1"
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                    <i class="fas fa-minus"></i>
                  </button>

                  <div class="form-outline">
                    <input id="productquantity1" min="0" name="productquantity1" value="0" type="number" class="form-control" />
                    <label class="form-label" for="form1">Quantity</label>
                  </div>

                  <button type="button" class="btn btn-primary px-3 ms-2" name="button2" id="button2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- Quantity -->

                <!-- Price -->
                <p class="text-start text-md-center" id ="productprice" name="productprice">
                  <strong>$180</strong>
                </p>
                <!-- Price -->
              </div>
            </div>
            <!-- Single item -->

            <hr class="my-4" />

            <!-- Single item -->
            <div class="row">
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg"
                    class="w-100" alt="16yardstore" name="productimage" id="productimage"/>
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
                <!-- Image -->
              </div>

              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data -->
				  <p id="productname" name="productname"><strong>16 Yard Dumpster</strong></p>
                <!-- Data -->
              </div>

              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <!-- Quantity -->
                <div class="d-flex mb-4" style="max-width: 300px">
                  <button type="button" class="btn btn-primary px-3 me-2 submit-btn1" name="button1" id="button1"
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                    <i class="fas fa-minus"></i>
                  </button>

                  <div class="form-outline">
                    <input id="productquantity1" min="0" name="productquantity1" value="0" type="number" class="form-control" />
                    <label class="form-label" for="form1">Quantity</label>
                  </div>

                  <button type="button" class="btn btn-primary px-3 ms-2" name="button2" id="button2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- Quantity -->

                <!-- Price -->
                <p class="text-start text-md-center" id ="product2">
                  <strong>$210</strong>
                </p>
                <!-- Price -->
              </div>
            </div>
            <!-- Single item -->
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-body">
            <p><strong>Length of Rental</strong></p>
  				<label for="serviceDate">Select your rental period:</label><br>
  			    <input class="radio-button" type="radio" id="lengthofrentalperiod" name="lengthofrentalperiod" value="80">	1-3 days: +$80<br>
			    <input class="radio-button" type="radio" id="lengthofrentalperiod" name="lengthofrentalperiod" value="120">	3-7 days: +$120<br>
			    <input class="radio-button" type="radio" id="lengthofrentalperiod" name="lengthofrentalperiod" value="320">	1-2 weeks: +$320<br>
			    <input class="radio-button" type="radio" id="lengthofrentalperiod" name="lengthofrentalperiod" value="360">	2-3 weeks: +$360<br>
                <input class="radio-button" type="radio" id="lengthofrentalperiod" name="lengthofrentalperiod" value="420">	3-4 weeks: +$420
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-body">
            <p><strong>Name of Customer</strong></p>
  				<label for="serviceDate">Customer Name:</label>
  				<input type="text" id="customername" name="customername">
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-body">
            <p><strong>Date of Service</strong></p>
  				<label for="serviceDate">Please select a date for delivery:</label>
  				<input type="date" id="dateofservice" name="dateofservice">
          </div>
          <div class="card-body">
            <p><strong>Time of Service:</strong></p>
  				<label for="serviceDate">Please select a time for delivery:</label>
  				<input type="time" id="timeofservice" name="timeofservice">
          </div>
          <div class="card-body">
            <p><strong>Pickup Date:</strong></p>
  				<label for="serviceDate">Please select a pickup date for delivery:</label>
  				<input type="date" id="pickupdate" name="pickupdate">
          </div>
          <div class="card-body">
            <p><strong>Pickup Time:</strong></p>
  				<label for="serviceDate">Please select a pickup time for delivery:</label>
  				<input type="time" id="timepickupdate" name="timepickupdate">
          </div>
        </div>
		  <div class="card mb-4">
          <div class="card-body">
            <p><strong>Address</strong></p>
  				<label for="StreetAddress">Street Address:</label>
  				<input type="text" id="streetaddress" name="streetaddress"><br>
			  	<label for="ZIP">ZIP Code:</label>
			  	<input type="text" id="zipcode" name="zipcode">
          </div>
        </div>
		  <div class="card mb-4">
          <div class="card-body">
            <p><strong>Contact Info</strong></p>
  				<label for="phone">Phone Number:</label>
  				<input type="text" id="phonenumber" name="phonenumber"><br>
			  	<label for="email">Email address: </label>
			  	<input type="email" id="emailaddress" name="emailaddress">
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-body">
            <p><strong>We accept</strong></p>
            <img class="me-2" width="45px"
              src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
              alt="Visa" />
            <img class="me-2" width="45px"
              src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
              alt="American Express" />
            <img class="me-2" width="45px"
              src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
              alt="Mastercard" />
            <img class="me-2" width="45px"
              src="https://mdbootstrap.com/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.png"
              alt="PayPal acceptance mark" />
              <div id="card-element">
                <!-- Elements will create input elements here -->
              </div>

              <!-- We'll put the error messages in this element -->
              <div id="card-errors" role="alert"></div>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Order Summary</h5>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                Products
                <span id="total" name="total">$0</span>
              </li>
              <!--<li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                Shipping
                <span>Gratis</span>
              </li>-->
              <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                Delivery Fee
                <span>$30.00</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                  <strong>Total amount</strong>
                  <!--<strong>
                    <p class="mb-0">(including VAT)</p>
                  </strong>-->
                </div>
                <span id="pricetotal" class="main-amount pricetotal"><strong>$</strong><strong>0</strong></span>
              </li>
            </ul>

            <button type="submit" class="btn btn-primary btn-lg btn-block" id="card-button" name="save">
              Go to checkout
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
</form>
  <!--Section: Design Block-->

</div>
<!-- Container for demo purpose -->
    </div>
  </div>
  <hr>
</section>
<footer>
 <div class="container-fluid pb-0 mb-0 mt-3 justify-content-center text-light" style="overflow: hidden;background:#7283A7;">
     <footer>
         <div class="row my-5 justify-content-center py-5">
             <div class="col-11">
                 <div class="row ">
                     <div class="col-xl-8 col-md-4 col-sm-4 col-12 my-auto mx-auto a">
                         <h3 class="text-muted mb-md-0 mb-5 bold-text white-text">THE DUMPSTER CREW</h3>
                     </div>
                     <div class="col-xl-2 col-md-4 col-sm-4 col-12">
                         <h6 class="mb-3 mb-lg-4 bold-text "><b>MENU</b></h6>
                         <ul class="list-unstyled">
                             <li>Home</li>
                             <li>About</li>
                         </ul>
                     </div>
                     <div class="col-xl-2 col-md-4 col-sm-4 col-12">
                         <h6 class="mb-3 mb-lg-4 bold-text mt-sm-0 mt-5"><b>ADDRESS</b></h6>
                         <p class="mb-1">8884 Commerce Loop Dr</p>
                         <p>COLUMBUS, OHIO 43240</p>
                     </div>
                 </div>
                 <div class="row ">
                     <div class="col-xl-2 col-md-4 col-sm-4 col-auto order-2 align-self-end mt-3 ">
                         <h6 class="mt-55 mt-2 bold-text"><b>BUSINESS MANAGER - BARRY SIDDLE</b></h6><small><span><i class="fa fa-envelope" aria-hidden="true"></i></span>barry@cbusdumpsters.com</small>
                     </div>
                 </div>
             </div>
         </div>
     </footer>
 </div>
</footer>
<!-- End your project here--> 

<!-- jQuery --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<!-- Bootstrap tooltips --> 
<script type="text/javascript" src="js/popper.min.js"></script> 
<!-- Bootstrap core JavaScript --> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<!-- MDB core JavaScript --> 
<script type="text/javascript" src="js/mdb.min.js"></script> 
<!-- Your custom scripts (optional) -->
<script>
  // Set your publishable key: remember to change this to your live publishable key in production
// See your keys here: https://dashboard.stripe.com/apikeys
var stripe = Stripe('pk_test_51IxDgKERcNEtc8ziU5GragBfh4MvMoGGQNOqoSLqCR0deSXHAu5tfVMA0Uy2II1WelzRHMSxHBFNVPZV1UYklVQS00xozcS95k');
var elements = stripe.elements();

// Set up Stripe.js and Elements to use in checkout form
var style = {
  base: {
    color: "green",
  }
};

var card = elements.create("card", { style: style });
card.mount("#card-element");

card.on('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

var form = document.getElementById('payment-form');
var fullname = document.getElementById('customername');
var email = document.getElementById('emailaddress');
form.addEventListener('submit', function(ev) {
  ev.preventDefault();
  // If the client secret was rendered server-side as a data-secret attribute
  // on the <form> element, you can retrieve it here by calling `form.dataset.secret`
  stripe.confirmCardPayment(form.dataset.secret, {
    payment_method: {
      card: card,
      billing_details: {
        name: fullname,
        email: email
      }
    }
  }).then(function(result) {
    if (result.error) {
      // Show error to your customer (e.g., insufficient funds)
      alert(result.error.message);
    } else {
      // The payment has been processed!
      if (result.paymentIntent.status === 'succeeded') {
        // Show a success message to your customer
        // There's a risk of the customer closing the window before callback
        // execution. Set up a webhook or plugin to listen for the
        // payment_intent.succeeded event that handles any business critical
        // post-payment actions.
        alert('The payment has been proccessed');
        window.location.replace("http://localhost/Cbusdumpstercrew-main/landingpage.php");

      }
    }
  });
});


</script>
<script type="text/javascript"></script>
<script>
$(":radio").on("change", function(){
  var total = 0;
  $(":radio:checked").each(function(){
      total += Number(this.value);
  });
  var delivery = 30;
  var str2 = (180 + total) * $("#productquantity").val();
  var str3 = (210 + total) * $("#form2").val();
  var str =  (180 + total) * $("#productquantity").val();
  var str1 = (210 + total) * $("#form2").val();

  $("#total").text(str2+str3);
  $("#pricetotal").text(str+str1+delivery);
});
</script>
</body>
</html>
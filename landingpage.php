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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
                <h1 class="display-3 mb-5 wow fadeInDown" data-wow-delay="0.3s">Display
                  <a class="indigo-text font-weight-bold">Information</a>
				</h1>
              </div>
            </div>
          </div>
        </div>
	
</div>
</section>
<section>
<h1>Thanks for your order!</h1>
<p>
We appreciate your time!<br/>
If you have any questions, please email
<a href="mailto: gjhwatters@gmail.com">gjhwatters@gmail.com</a><br>
<a href="index.html">HOME</a>.
</p>
</section>
<section>
<?php
$link = mysqli_connect("localhost", "root", "", "thedumpstercrew");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "SELECT * FROM orderdelivery";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
    echo "<div style='padding-left: 50px;padding-right: 50px;padding-top: 50px;padding-bottom: 50px;' class='table-responsive'>";
        echo "<table class='table table-bordered'>";
            echo "<thead>";
                echo "<tr>";
                    echo "<th style='font-weight:bolder;'>Order ID</th>";
                    echo "<th style='font-weight:bolder;'>Date of Service</th>";
                    echo "<th style='font-weight:bolder;'>Time of Service</th>";
                    echo "<th style='font-weight:bolder;'>Pickup Date</th>";
                    echo "<th style='font-weight:bolder;'>Pickup Time</th>";
                    echo "<th style='font-weight:bolder;'>Total Cast</th>";
                echo "</tr>";
            echo "<thead>";
        while($row = mysqli_fetch_array($result)){
            echo "<tbody>";
                echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['dateofservice'] . "</td>";
                    echo "<td>" . $row['timeofservice'] . "</td>";
                    echo "<td>" . $row['pickupdate'] . "</td>";
                    echo "<td>" . $row['timepickupdate'] . "</td>";
                    echo "<td>" . $row['productquantity1'] . "</td>";
                echo "</tr>";
            echo "</tbody>";
        }
        echo "</table>";
    echo "</div>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>

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
<script type="text/javascript">
      Email.send({
        Host: "smtp.gmail.com",
        Username: "shariqmehdi12@gmail.com",
        Password: "",
        To: 'shariqmehdi12@gmail.com',
        From: "shariqmehdi12@gmail.com",
        Subject: "Sending Email using javascript",
        Body: "Well that was easy!!",
      })
        .then(function (message) {
          alert("mail sent successfully")
        });
</script>
<!-- jQuery --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<!-- Bootstrap tooltips --> 
<script type="text/javascript" src="js/popper.min.js"></script> 
<!-- Bootstrap core JavaScript --> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<!-- MDB core JavaScript --> 
<script type="text/javascript" src="js/mdb.min.js"></script> 
<!-- Your custom scripts (optional) --> 
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
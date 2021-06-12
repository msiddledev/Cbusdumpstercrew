<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>The Dumpster Crew</title>
<!-- MDB icon -->
<link rel="icon" href="<?php echo base_url('assets/front/')?>img/navbar_edit.png" type="image/x-icon">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<!-- Google Fonts Roboto -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="<?php echo base_url('assets/front/')?>css/bootstrap.min.css">
<!-- Material Design Bootstrap -->
<link rel="stylesheet" href="<?php echo base_url('assets/front/')?>css/mdb.min.css">
<!-- Your custom styles (optional) -->
<link rel="stylesheet" href="<?php echo base_url('assets/front/')?>css/style.css">
<!-- Custom Font -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600&family=Orelega+One&family=Zen+Dots&display=swap" rel="stylesheet">
<style>
html, body, header, .view {
    height: 1000px;
}

@media (max-width: 740px) {
html, body, header, .view {
    height: 1200px;
}
}

@media (min-width: 800px) and (max-width: 1030px) {
html, body, header, .view {
    height: 750px;
}
}
	.top-nav-collapse {
      background-color: #7283A7 !important;
    }
.intro {
    background-image: url("assets/front/img/background3.jpg");
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
	font-size: calc(100% + .75vw + .75vh);
}
.text-responsive-nav-small {
	font-size: calc(100% + .5vw + .5vh);
}
</style>
</head>
<body>

<!-- Start your project here-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
   <a class="navbar-brand" href="<?php echo base_url('')?>"> <img src="<?php echo base_url('assets/front/')?>img/navbar_edit.png" height="50px" alt=""/> </a><h2 class="text-responsive-nav" style="color: white;  font-family: 'Orelega One', cursive;"><b>The Dumpster Crew</b></h2>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
          aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"> <a class="nav-link text-responsive-nav-small" href="<?php echo base_url('')?>" style="color: white;  font-family: 'Orelega One', cursive;">Home <span class="sr-only">(current)</span> </a> </li>
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
            <li><a class="dropdown-item text-responsive-nav-small" href="<?php echo base_url('dumpster_20')?>" style="color: black;  font-family: 'Orelega One', cursive;">12 Yard</a></li>
            <li><a class="dropdown-item text-responsive-nav-small" href="<?php echo base_url('dumpster_40')?>" style="color: black;  font-family: 'Orelega One', cursive;">16 Yard</a></li>
            <li><hr class="dropdown-divider" /></li>
            <li>
              <a class="dropdown-item text-responsive-nav-small" href="dumpsters.html" style="color: black;  font-family: 'Orelega One', cursive;">Compare Sizes</a>
            </li>
          </ul>
        </li>
        <li class="nav-item"> <a class="nav-link text-responsive-nav-small" href="<?php echo base_url('order-form')?>" style="color: white;  font-family: 'Orelega One', cursive;">Rent Online</a> </li>
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
          <div class="row pt-5 mt-3">
            <div class="col-md-12 mb-3">
              <div class="intro-info-content text-center">
				<div class="image mx-auto" style="height: 25%; width: 60%; margin: 5px;">
				  <img src="<?php echo base_url('assets/front/')?>img/homepage_head_crop.png" alt="head_image" class="img-fluid">
				</div>
				<hr>
                <h1 class="display-3 mb-5 wow fadeInDown" data-wow-delay="0.3s">GET WORKING
                  <a class="indigo-text font-weight-bold">TODAY</a>
                </h1>
                <h5 class="text-uppercase mb-5 mt-1 font-weight-bold wow fadeInDown" data-wow-delay="0.3s" style="color:black; font-family: 'Orelega One', cursive;">Get prepared for your project today!</h5>
				  <h2 style="color:#3F51B5; font-family: 'Orelega One', cursive;"> Call us today at</h2><h2 class="d-inline-block" style="color:white"> +1-614-450-2432</h2><i class="fas fa-phone fa-2x" style="color:#3F51B5"></i><br><h2 style="color: white">OR</h2>
                <a class="btn btn-indigo btn-lg wow fadeInDown" data-wow-delay="0.3s" href="<?php echo base_url('order-form')?>"><h2 class="d-inline-block" style="color:white"> Schedule a Rental Online</h2></a>
              </div>
            </div>
          </div>
        </div>
	
</div>
</section>
<section class="content">
<div class="media mt-5 mr-auto">
		<div class="col-md-6">
			<div class="image mx-auto">
            <img src="<?php echo base_url('assets/front/')?>img/logodump2.jpg" class="img-fluid" alt="" style="height: 40vh; width: 90vw; margin: 5px;">
          </div>

        </div>
        <div class="col-md-6 mt-auto mx-auto">

          <h2 class="text-responsive-h" style="font-family: 'Montserrat', sans-serif; font-weight: 600;">Dumpsters for the Hustlers</h2>
          <hr>
          <p class="text-responsive" style="font-family: 'Montserrat', sans-serif; font-weight: 300;">For the people working on their first house, to the construction lot - The Dumpster Crew is here to meet your needs for stylish commericial sized dumpsters.
			<br> Our dumpsters are stylish and functional, without breaking the bank. We service the greater Columbus area with our fleet of storage solutions, and are ready to help keep your construction site clean. </p>
          <a href="<?php echo base_url('order-form')?>" class="btn btn-indigo btn-lg wow fadeInDown" data-wow-delay="0.3s">Get a Quote Today!</a>

        </div>
	</div>
<div class="media mt-5 mx-auto">
	<div class="col-lg-10 offset-lg-1">
		<img src="<?php echo base_url('assets/front/')?>img/hp_graphic_1_effect.png" class="figure-img" alt="graphic1" width="100%">
	</div>
</div>
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
<script type="text/javascript" src="<?php echo base_url('assets/front/')?>js/jquery.min.js"></script> 
<!-- Bootstrap tooltips --> 
<script type="text/javascript" src="<?php echo base_url('assets/front/')?>js/popper.min.js"></script> 
<!-- Bootstrap core JavaScript --> 
<script type="text/javascript" src="<?php echo base_url('assets/front/')?>js/bootstrap.min.js"></script> 
<!-- MDB core JavaScript --> 
<script type="text/javascript" src="<?php echo base_url('assets/front/')?>js/mdb.min.js"></script> 
<!-- Your custom scripts (optional) --> 
<script type="text/javascript"></script>
</body>
</html>

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
    background-image: url("assets/front/img/background_dumpster1_crop.jpg");
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
	font-size: calc(100% + .5vw + .5vh);
}
	.row {
	margin: auto;	
}
</style>
</head>
<body>

<!-- Start your project here-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
   <a class="navbar-brand" href="<?php echo base_url();?>"> <img src="<?php echo base_url('assets/front/')?>img/navbar_edit.png" height="50px" alt=""/> </a><h2 class="text-responsive-nav" style="color: white;  font-family: 'Orelega One', cursive;"><b>The Dumpster Crew</b></h2>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
          aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"> <a class="nav-link text-responsive-nav-small" href="<?php echo base_url();?>" style="color: white;  font-family: 'Orelega One', cursive;">Home <span class="sr-only">(current)</span> </a> </li>
        <li class="nav-item active dropdown">
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
            <li><a class="dropdown-item text-responsive-nav-small" href="<?php echo base_url('')?>dumpster_20" style="color: black;  font-family: 'Orelega One', cursive;">12 Yard</a></li>
            <li><a class="dropdown-item text-responsive-nav-small" href="<?php echo base_url('')?>dumpster_40" style="color: black;  font-family: 'Orelega One', cursive;">16 Yard</a></li>
            <li><hr class="dropdown-divider" /></li>
            <li>
              <a class="dropdown-item text-responsive-nav-small" href="<?php echo base_url('')?>dumpsters" style="color: black;  font-family: 'Orelega One', cursive;">Compare Sizes</a>
            </li>
          </ul>
        </li>
        <li class="nav-item"> <a class="nav-link text-responsive-nav-small" href="<?php echo base_url('')?>under_construction" style="color: white;  font-family: 'Orelega One', cursive;">Rent Online</a> </li>
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
                <h1 class="display-3 mb-5 wow fadeInDown" data-wow-delay="0.3s">DUMPSTER
                  <a class="indigo-text font-weight-bold">SIZING</a>
				</h1>
              </div>
            </div>
          </div>
        </div>
	
</div>
</section>
<section class="content">
<div class="media mt-5 mr-auto">
		<div class="col-md-5 offset-2 offset-xl-1">
			<h2 class="text-responsive-h indigo-text" style="font-family: 'Montserrat', sans-serif; font-weight: 600;">Roll Off Dumpster Sizing</h2>
          <hr>
			<p class="text-responsive" style="font-family: 'Montserrat', sans-serif; font-weight: 300;"> Selecting a dumpster size appropriate for your project or worksite depends on the amount of debris expected, in both cubic feet as well as weight in tons. Our dumpster catalog
			provides roll off dumpsters of two sizes. Our smaller size is perfect for attic or garage cleanouts, light demolition, and a smaller amount of concrete and heavy debris. Our larger selection is perfect for multi-room
			clean out, home renovation, and for general construction applications. For more information on our services or our dumpsters, continue reading below. </p>
          </div>
        <div class="col-md-3 mt-auto">
			<img class="img-fluid rounded" alt="dumpster-portrait" src="<?php echo base_url('assets/front/')?>img/dumpster_portrait.jpg">
		</div>
	</div>
	<hr>
<div class="media mt-5 ml-3">
	<h1 class="text-responsive-h indigo-text col-md-5 offset-xl-1" style="font-family: 'Montserrat', sans-serif; font-weight: 600;"> Avaliable Sizes:</h1><hr>
</div>
<div class="row">
	<div class="col-md-5 offset-md-1">
		<img class="img-fluid rounded" alt="small_dim PLACEHOLDER" src="<?php echo base_url('assets/front/')?>img/small_dumpster_dim_resized.jpg" style="width:100%; height:auto;">
		<h2 style="color: #3F51B5; font-family: 'Montserrat', sans-serif; font-weight: 400;"><b>12 Yard Dumpsters</b></h2>
		<div class="row justify-content-center offset-lg-1 text-responsive" style="font-family: 'Montserrat', sans-serif; font-weight: 600;">Measurements:<br></div>
		<p class="text-responsive text-center" style="font-family: 'Montserrat', sans-serif; font-weight: 300;"> 148'' X 90'' X 46''</p>
		<p class="text-responsive" style="font-family: 'Montserrat', sans-serif; font-weight: 300;">Our small size of Rolloff dumpster - perfect for room renovation, bathroom tile replacement, garage cleanout and more. Our 12 yard dumpster has the capacity you need to meet your waste removal needs. Call us today using the number below, or get a quote online so you can start that project.  </p>
		
		<button type="button" class="btn btn-outline-indigo btn-lg wow fadeInDown" data-wow-delay="0.3s"><h2 class="d-inline-block" style="color:indigo"> +1-614-540-2432</h2><i class="fas fa-phone fa-2x" style="color:#3F51B5"></i></button>
		<a class="btn btn-indigo btn-lg wow fadeInDown" data-wow-delay="0.3s" href="<?php echo base_url('')?>under_construction"><h2 class="d-inline-block" style="color:white"> Rent Online</h2></a>
	</div>
	<div class="col-md-5 ">
		<img class="img-fluid rounded" alt="large_dim PLACEHOLDER" src="<?php echo base_url('assets/front/')?>img/large_dumpster_dim_resized.jpg" style="width: 100%; height: auto;">
		<h2 style="color: #3F51B5; font-family: 'Montserrat', sans-serif; font-weight: 400;"><b>16 Yard Dumpsters</b></h2>
		<div class="row justify-content-center offset-lg-1 text-responsive" style="font-family: 'Montserrat', sans-serif; font-weight: 600;">Measurements:<br></div>
		<p class="text-responsive text-center" style="font-family: 'Montserrat', sans-serif; font-weight: 300;"> 148'' X 94'' X 68''</p>
		<p class="text-responsive" style="font-family: 'Montserrat', sans-serif; font-weight: 300;">Our large sized dumpster - fit for anything from concrete removal, roofing replacement, or just general construction. If you're working on a project with serious waste removal needs, this size is perfect for you. Call us today using the number below, or get a quote online so you can start that project. </p>
		<button type="button" class="btn btn-outline-indigo btn-lg wow fadeInDown" data-wow-delay="0.3s"><h2 class="d-inline-block" style="color:indigo"> +1-614-540-2432</h2><i class="fas fa-phone fa-2x" style="color:#3F51B5"></i></button>
		<a class="btn btn-indigo btn-lg wow fadeInDown" data-wow-delay="0.3s" href="<?php echo base_url('')?>under_construction"><h2 class="d-inline-block" style="color:white"> Rent Online</h2></a>
	</div>
</div>
<h1 class="text-responsive-h mt-5  indigo-text text-center" style="font-family: 'Montserrat', sans-serif; font-weight: 600;"> Weight Limits:</h1><hr>
<div class="row justify-content-center offset-lg-1 text-responsive" style="font-family: 'Montserrat', sans-serif; font-weight: 600;">
	<p> Our dumpsters' weight limits vary with size.<br></p>
	</div>
<div class="row justify-content-center offset-lg-1 text-responsive" style="font-family: 'Montserrat', sans-serif; font-weight: 300;">
	<p> The 12 Yard sized dumpster holds <strong>2-3 tons (4000-6000 lbs)</strong><br></p>
	</div>
<div class="row justify-content-center offset-lg-1 text-responsive" style="font-family: 'Montserrat', sans-serif; font-weight: 300;">
	<p> The 16 Yard sized dumpster holds <strong>6-8 tons (6000-8000 lbs)</strong><br></p>
	</div>	
<div class="row justify-content-center offset-lg-1 text-responsive text-center" style="font-family: 'Montserrat', sans-serif; font-weight: 300;">
	<p> Our disposal fee, included in our flat rate fee for the dumpster, covers weight <strong>up unto the weight limit.</strong> Be careful with the amount of material and debris discarded, as the <strong>disposal of materials over the weight limit of the dumpster may incur additional charges.</strong> Make sure to have an approximation of weight for each item discarded, as often times weight limits are overlooked by residential renovators.<br></p>
	</div>
</section>
<footer>
 <div class="container-fluid pb-0 mb-0 mt-3 justify-content-center text-light" style="overflow: hidden;background:#7283A7;">
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
 </div>
</footer>
<!-- End your project here--> 

<!-- jQuery --> 
<script type="text/javascript" src="<?php echo base_url('assets/front/')?>js/jquery.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/front/')?>js/popper.min.js"></script> 
<!-- Bootstrap core JavaScript --> 
<script type="text/javascript" src="<?php echo base_url('assets/front/')?>js/bootstrap.min.js"></script> 
<!-- MDB core JavaScript --> 
<script type="text/javascript" src="<?php echo base_url('assets/front/')?>js/mdb.min.js"></script> 
<!-- Your custom scripts (optional) --> 
<script type="text/javascript"></script>
</body>
</html>

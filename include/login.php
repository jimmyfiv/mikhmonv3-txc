<?php
/*
 *  Copyright (C) 2018 Laksamadi Guko.
 *
 *  This program is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
session_start();


?>

<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Thunder X Cloud </title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css1/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css1/style.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="css1/colors.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css1/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css1/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css1/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js1/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version"> 

	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Customer Login</h4>
			</div>
			<div class="modal-body customer-box row">
				<div class="col-md-12">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs">
						<li class="active"><a href="#Login" data-toggle="tab">Please Login</a></li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="Login">
							<form autocomplete="off" action="" method="post" role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" name="user" id="_username" placeholder="Username" type="text" required="1">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" name="pass" placeholder="Password" type="password" required="1">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-10">
									<input type="submit" name="login" value="Login" class="btn btn-light btn-radius btn-brd grd1">
								</div>
							</div>
							<td class="align-middle text-center">
            					<?= $error; ?>
          						</td>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>

    <!-- LOADER -->
	<div id="preloader">
		<div class="loading">
			<div class="finger finger-1">
				<div class="finger-item">
				<span></span><i></i>
				</div>
			</div>
  			<div class="finger finger-2">
				<div class="finger-item">
				<span></span><i></i>
				</div>
			</div>
  			<div class="finger finger-3">
				<div class="finger-item">
				  <span></span><i></i>
				</div>
			</div>
  			<div class="finger finger-4">
				<div class="finger-item">
				<span></span><i></i>
				</div>
			</div>
  			<div class="last-finger">
				<div class="last-finger-item"><i></i></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->

    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="login.php"><img src="../images/logos/tc-logo.png" alt="image"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a class="active" href="include/login.php">Home</a></li>
                        <li><a href="http://lg.thunderxcloud.net">Looking Glass</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="btn-light btn-radius btn-brd log" href="#" data-toggle="modal" data-target="#login"><i class="flaticon-padlock"></i> Customer Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
	
		<div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="false" >
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
			<li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
			<li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div id="home" class="first-section" style="background-image:url('uploads/slider-01.jpg');">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 text-center">
								<div class="big-tagline">
									<img src="../images/logos/tc-logo.png" alt="image">
									<h2 data-animation="animated zoomInRight">Best <strong>Shared Hosting</strong> Company</h2>
									<p class="lead" data-animation="animated fadeInLeft">With Thunder X Cloud, you can promote your all hosting, domain and email services. </p>
									 <a data-scroll href="#pricing" class="btn btn-light btn-radius btn-brd effect-1 slide-btn" data-animation="animated fadeInLeft">View Plans</a>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a data-scroll href="#overviews" class="btn btn-light btn-radius btn-brd effect-1 slide-btn" data-animation="animated fadeInRight">All Features</a>
								</div>
							</div>
						</div><!-- end row -->            
					</div><!-- end container -->
				</div><!-- end section -->
			</div>
			<div class="item">
				<div id="home" class="first-section" style="background-image:url('uploads/slider-02.jpg');">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 text-center">
								<div class="big-tagline">
									<img src="../images/logos/tc-logo.png" alt="image">
									<h2 data-animation="animated zoomInRight">Find the right <strong>Hosting</strong></h2>
									<p class="lead" data-animation="animated fadeInLeft">With Thunder X Cloud, you can promote your all hosting, domain and email services. </p>
									 <a data-scroll href="#pricing" class="btn btn-light btn-radius btn-brd effect-1 slide-btn" data-animation="animated fadeInLeft">View Plans</a>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a data-scroll href="#overviews" class="btn btn-light btn-radius btn-brd effect-1 slide-btn" data-animation="animated fadeInRight">All Features</a>
								</div>
							</div>
						</div><!-- end row -->            
					</div><!-- end container -->
				</div><!-- end section -->
			</div>
			<div class="item">
				<div id="home" class="first-section" style="background-image:url('uploads/slider-03.jpg');">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 text-center">
								<div class="big-tagline">
									<img src="../images/logos/tc-logo.png" alt="image">
									<h2 data-animation="animated zoomInRight">Best <strong>VPS Servers</strong> Company</h2>
									<p class="lead" data-animation="animated fadeInLeft">1 IP included with each server (more on request to justification)
										Your Choice of any OS (CentOS, Windows, Debian, Fedora)
										FREE Reboots</p>
									 <a data-scroll href="#pricing" class="btn btn-light btn-radius btn-brd effect-1 slide-btn" data-animation="animated fadeInLeft">View Plans</a>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a data-scroll href="#overviews" class="btn btn-light btn-radius btn-brd effect-1 slide-btn" data-animation="animated fadeInRight">All Features</a>
								</div>
							</div>
						</div><!-- end row -->            
					</div><!-- end container -->
				</div><!-- end section -->
			</div>
			<!-- Left Control -->
			<a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
				<span class="fa fa-angle-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<!-- Right Control -->
			<a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
				<span class="fa fa-angle-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	
	<div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-12">
                    <p class="lead">You know you are in safe hands when it comes to turning your website idea into reality.</p>
                </div>
				<div class="col-md-12">
					<div class="list-domain">
						<ul>
							<li><a class="btn btn-light grd1 effect-1 btn-radius btn-brd" href="#">.com</a><li>
							<li><a class="btn btn-light grd1 effect-1 btn-radius btn-brd" href="#">.net</a><li>
							<li><a class="btn btn-light grd1 effect-1 btn-radius btn-brd" href="#">.org</a><li>
							<li><a class="btn btn-light grd1 effect-1 btn-radius btn-brd" href="#">.in</a><li>
							<li><a class="btn btn-light grd1 effect-1 btn-radius btn-brd" href="#">.biz</a><li>
							<li><a class="btn btn-light grd1 effect-1 btn-radius btn-brd" href="#">.info</a><li>
							<li><a class="btn btn-light grd1 effect-1 btn-radius btn-brd" href="#">.co.id</a><li>
							<li><a class="btn btn-light grd1 effect-1 btn-radius btn-brd" href="#">.sch.id</a><li>
							<li><a class="btn btn-light grd1 effect-1 btn-radius btn-brd" href="#">.website</a><li>
						</ul>
					</div>
				</div>
            </div><!-- end title -->
        </div><!-- end container -->
    </div><!-- end section -->
	
	<div id="pricing" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Ready to get started?</h3>
                <p class="lead">Our Internet service offers clients the benefit of unlimited Internet service with dedicated, robust, and secured access through a single network. Consequently, network issues are minimize, suspension time is reduce and clients' business performance is optimized.</p>
            </div><!-- end title -->
	
	        <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="message-box">
                        <ul class="nav nav-pills nav-stacked" id="myTabs">
                            <li class="active"><a href="#tab1" data-toggle="pill">Vpn </a></li>
                            <li><a href="#tab2" data-toggle="pill">Upgrade Bandwidth</a></li>
                        </ul>
                    </div>
                </div><!-- end col -->
            </div>

            <hr class="invis">

            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane active fade in" id="tab1">
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>Vpn Whatsapp <br>(Free VPN DNS)</h2>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-rocket"></i> <strong>Unlimited</strong> Bandwidth</p>
                                            <p><i class="fa fa-link"></i> <strong>Free</strong> Setup</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="https://api.whatsapp.com/send?phone=6288213956984&text=Hallo%20Min,%20Saya%20tertarik%20order%20Tunnel%201%20VPN%20Whatsapp%20" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Order Now</a>
                                        </div>
                                    </div>
                                </div>
								
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>Hosting Mikhmon <br>(Mikhmon Online)</h2>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-text">
                                            <p>Free 1 Vpn Remote</p>
                                        </div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-rocket"></i> <strong>Unlimited</strong> Bandwidth</p>
                                            <p><i class="fa fa-link"></i> <strong>Free</strong> Setup</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="https://api.whatsapp.com/send?phone=6288213956984&text=Hallo%20Min,%20Saya%20tertarik%20order%20Mikhmon%20Online" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Order Now</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>VPN site to site / VPN Remote</h2>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-rocket"></i> <strong>Unlimited</strong> of Bandwidth</p>
                                            <p><i class="fa fa-link"></i> <strong>Free</strong> Setup</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="https://api.whatsapp.com/send?phone=6288213956984&text=Hallo%20Min,%20Saya%20tertarik%20order%20VPN%20Site%20to%20site%20/%20Vpn%20Remote" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end pane -->

                        <div class="tab-pane fade" id="tab2">
                            <div class="row text-center">
                                <div class="col-md-6">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>IIX</h2>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-text">
                                            <p>Upgrade Speed Bandwidth IIX</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="https://api.whatsapp.com/send?phone=6288213956984&text=Hallo%20Min,%20Saya%20Ingin%20melakukan%20upgrade%20Bandwitdh%20IIX" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Order Now</a>
                                        </div>
                                    </div>
                                </div>
								
                                <div class="col-md-6">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>INTERNATIONAL</h2>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-text">
                                            <p>Upgrade Speed Bandwidth INTERNATIONAL</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="https://api.whatsapp.com/send?phone=6288213956984&text=Hallo%20Min,%20Saya%20Ingin%20melakukan%20upgrade%20Bandwitdh%20INTERNATIONAL" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end pane -->
                    </div><!-- end content -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
	<div class="all-title-box">
		<div class="container text-center">
			<h1>Vps<span class="m_1">Virtual Private Server Located in Indonesia and Singapore	</span></h1>
		</div>
	</div>
	
    <div id="pricing-box"pricing-box class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="message-box">
                        <ul class="nav nav-pills nav-stacked" id="myTabs">
                            <li class="active"><a href="#tab3" data-toggle="pill">Packet VPS </a></li>
                            <li><a href="#tab4" data-toggle="pill">Custom VPS</a></li>
                        </ul>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="invis">

            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane active fade in" id="tab3">

							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="grid1">
									<span>Small</span>
									<div class="price-tit text-center">
										<h2>VPS Small <2048></h2>
									</div>
									<div class="para">
										<center>
											<p>2 GB RAM</p>
											<p>1 CPU Core</p>
											<p>20 GB HDD</p>
											<p>∞ Bandwidth</p>
										</center>
									</div>
									<div class="sign text-center pricing-table-sign-up">
										<a href="https://api.whatsapp.com/send?phone=6288213956984&text=Hallo%20Min,%20Saya%20tertarik%20order%20VPS%20Packet%20Small" class="btn btn-light btn-radius btn-brd grd1 effect-1">Order Now</a>
									</div>
								</div>
							</div>

							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="grid2">
									<span>Medium</span>
									<div class="price-tit text-center">
										<h2>VPS Medium <4096></h2>
									</div>
									<div class="para">									
										<center>
											<p><u> Best Seller </u></p>
											<p>4 GB RAM</p>
											<p>2 CPU Core</p>
											<p>50 GB HDD</p>
											<p>∞ Bandwidth</p>
										</center>
									</div>
									<div class="sign text-center pricing-table-sign-up">
										<a href="https://api.whatsapp.com/send?phone=6288213956984&text=Hallo%20Min,%20Saya%20tertarik%20order%20VPS%20Packet%20Medium" class="btn btn-light btn-radius btn-brd grd1 effect-1">Order Now</a>
									</div><br>
								</div>
							</div>

							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="grid2">
									<span>High</span>
									<div class="price-tit text-center">
										<h2>VPS High <8192></h2>
									</div>
									<div class="para">
										<center>
											<p>8 GB RAM</p>
											<p>6 CPU Core</p>
											<p>80 GB HDD</p>
											<p>∞ Bandwidth</p>
										</center>
									</div>
									<div class="sign text-center pricing-table-sign-up">
										<a href="https://api.whatsapp.com/send?phone=6288213956984&text=Hallo%20Min,%20Saya%20tertarik%20order%20VPS%20Packet%20High" class="btn btn-light btn-radius btn-brd grd1 effect-1">Order Now</a>
									</div>
								</div>
							</div>
						</div><!-- end pane -->

						<div class="tab-pane fade" id="tab4">
						   <div class="col-md-4 col-sm-6 col-xs-12">
								<div class="grid3">
									<span>Custom</span>
									<div class="price-tit text-center">
										<h2>VPS Custom</h2>
										<p>VPS for Spec Custom</p>
									</div>
									<div class="para">
										<center>
											<p>Custom RAM</p>
											<p>Custom CPU Core</p>
											<p>Custom GB HDD</p>
											<p>∞ Bandwidth</p>
										</center>
									</div>
									<div class="sign text-center pricing-table-sign-up">
										<a href="https://api.whatsapp.com/send?phone=6288213956984&text=Hallo%20Min,%20Saya%20tertarik%20order%20VPS%20Packet%20Custom" class="btn btn-light btn-radius btn-brd grd1 effect-1">Order Now</a>
									</div>
								</div>
							</div>
						</div><!-- end pane -->

                    </div><!-- end content -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

				
	<div class="all-title-box">
		<div class="container text-center">
			<h1>Contact Us<span class="m_1"></span></h1>
		</div>
	</div>
			
	<div id="support" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h2>Thunder X Cloud is located in Cyber ​​1 Building, serving international businesses and individuals.

					Thunder X Cloud provides local friendly network and higher bandwidth International network from various operators in various Data Centers,

					Providing highly personalized and customized services that meet and exceed client expectations, the team at Thunder X Cloud is always ready for business.	

					Contact us today.</h2><br>
					<h2>WhatsApp : +6288213956984 <br> topan71366@gmail.com <br> sales@topancloud.net </h2><br>

				<h3>Need Help? Sure we are Online!</h3>
					<p class="lead">Let us give you more details about the special offer website you want us. Please fill out the form below. <br>We have million of owners who happy to work with us!!</p>
            </div><!-- end title -->
			
            <div class="row">
                <div class="col-md-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="row" action="mailto:topan71366@gmail.com" name="contactform" method="post">
                            <fieldset class="row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label class="sr-only">Select Service</label>
                                    <select name="select_service" id="select_service" class="selectpicker form-control" data-style="btn-white">
                                        <option value="12">Select Package</option>
                                        <option value="Vpn Remote">Vpn Remote</option>
                                        <option value="Mikhmon Online">Mikhmon Online</option>
                                        <option value="Vps">Vps</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label class="sr-only">Select Country</label>
                                    <select name="select_price" id="select_price" class="selectpicker form-control" data-style="btn-white">
                                        <option value="India">Indonesia</option>
                                        <option value="Italy">English</option>
                                        <option value="Holland">Amerika</option>
                                        <option value="Germany">Germany</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Give us more details.."></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                    <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">Get a Quote</button>
                                </div>
                            </fieldset>
                        </form>
					</div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="parallax section db parallax-off" style="background-image:url('uploads/parallax_02.jpg');">
        <div class="container">
        </div><!-- end container -->
    </div><!-- end section -->

    <section class="section nopad cac text-center">
        <a href="#"><br><img src="../images/logos/tc-logo-light.png" alt="Thunder X Cloud"><br><br>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <img src="../images/logos/tc-logo-light.png" alt="Thunder X Cloud">
                        </div>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				<div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Information Link</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="#">Home</a></li>
                            <li><a href="https://thunderxcloud.net">Blog</a></li>
							<li><a href="#">About</a></li>
							<li><a href="contact.html">Contact Us</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:topan71366@gmail.com">topan71366@gmail.com</a></li>
                            <li><a href="https://www.thunderxcloud.net">www.thunderxcloud.net</a></li>
                            <li>Thunder X Cloud Gedung Cyber 1<br>Jl. Kuningan Barat No. 8, Jakarta 12710 <br> </li>
                            <li>021 570 1505 (Hunting) <br> 021 5147 2825 (Direct)</li>
                            <li>0882-1395-6984 (WA)</li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-company-name">All Rights Reserved. &copy; 2019 <a href="#">Thunder X Cloud</a> Design By : <a href="https://www.instagram.com/topaniqbal/">Topan Iqbal</a></p>
                </div>

                <div class="footer-right">
                    <form method="get" action="#">
                        <input placeholder="Subscribe our newsletter.." name="search">
                        <a href="mailto:topan71366@gmail.com"><i class="fa fa-envelope-o"></i></a>
                    </form>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->


    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js1/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js1/custom.js"></script>

</body>
</html>

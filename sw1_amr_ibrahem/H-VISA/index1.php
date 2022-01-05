<!DOCTYPE html>
<?php 
session_start();
?>
<html lang="zxx">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>H-VISA - Home Page</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,900">
    </head>


    <body>


        <!-- Start Nav bar Section -->




        <header>
           <div class="container">
                <a href="index1.php" class="logo">
                   <p><span class="text-uppercase">H-VISA</span></p>
                </a>
                <nav>
                   <button class="nav-btn">
                       <span class="btn-line"></span>
                       <span class="btn-line"></span>
                       <span class="btn-line"></span>
                   </button>
                    <ul class="nav-list">
                        <li class="list-item"><a href="#" data-value="about">About</a></li>
                        <li class="list-item"><a href="#" data-value="services">Services</a></li>
                        <li class="list-item"><a href="#" data-value="destinations">Visa Info</a></li>
                        <li class="list-item"><a href="#" data-value="blog">Blog</a></li>
                        <li class="list-item"><a href="#" data-value="contact">Contact</a></li>
                        <?php 
							if (!isset($_SESSION['LOGIN'])){
								echo '<li class="list-item"><a href="login1.php" data-value="login">Login</a></li>';
							}else{
								if (isset($_SESSION['Type'])){
									if($_SESSION['Type']==0){
									echo	'<li class="list-item"><a href="admin.php" data-value="admin">Dashboard</a></li>';
									}else if($_SESSION['Type']==1){
									echo	'<li class="list-item"><a href="hr.php" data-value="admin">HR</a></li>';
									}else if($_SESSION['Type']==2){
									echo	'<li class="list-item"><a href="employee.php" data-value="admin">Employee</a></li>';
									}
								}

								echo '<li class="list-item"><a href="../logout.php" data-value="login">Logout</a></li>';

							}
						?>
						
                       
                    </ul>
                </nav>
           </div>
        </header>




        <!-- End Nav bar Section -->







        <!-- Start Header Section -->



        <!-- Slider Show -->


        <div id="mySlider" class="carousel slide main-section" data-ride="carousel">

          <div class="carousel-inner">

            <div class="carousel-item carousel1 active">
               <div class="container">
                  <h1  class="text-uppercase">The fastest way To Get A Visa</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <button type="button" class="GetBtn">Explore More</button>
                </div>
            </div>

            <div class="carousel-item carousel2">
                <div class="container">
                  <h1  class="text-uppercase">Let's Explore the World</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <button type="button" class="GetBtn">Explore More</button>
                </div>
            </div>

            <div class="carousel-item carousel3">
                <div class="container">
                  <h1 class="text-uppercase">Let's Explore the World</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <button type="button" class="GetBtn">Explore More</button>
                </div>
            </div>

          </div>

          <ol class="carousel-indicators">
            <li data-target="#mySlider" data-slide-to="0" class="active"></li>
            <li data-target="#mySlider" data-slide-to="1"></li>
            <li data-target="#mySlider" data-slide-to="2"></li>
          </ol>

        </div>




        <!-- End Header Section -->





        <!-- Start Features Section -->



        <div class="our-features text-center">
            <div class="container">
                <h2>Why H-VISA?!</h2>
                <span><i class="fa fa-plane"></i></span>
                <p class="main-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua.</p>
                <div class="row">

                        <div class="col-lg-4 col-md-6">
                            <div class="feat-box wow slideInRight" data-wow-duration="2s" data-wow-offset="120">
                                <div class="icon">
                                  <img src="https://via.placeholder.com/150" alt="Feature Icon">
                                </div>
                                <div class="heading">
                                  <h4>Save Money</h4>
                                </div>
                                <div class="desc">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="feat-box wow slideUp" data-wow-duration="2s" data-wow-offset="120">
                              <div class="icon">
                                <img src="https://via.placeholder.com/150" alt="Feature Icon">
                              </div>
                              <div class="heading">
                                <h4>Get Help</h4>
                              </div>
                              <div class="desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                              </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12">
                            <div class="feat-box wow slideInLeft" data-wow-duration="2s" data-wow-offset="120">
                              <div class="icon">
                                <img src="https://via.placeholder.com/150" alt="Feature Icon">
                              </div>
                              <div class="heading">
                                <h4>Stay Safe</h4>
                              </div>
                              <div class="desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                              </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>




        <!-- End Features Section -->




        <!-- Start About Us Section -->



        <div id="about" class="about-us">
            <div class="container">
                <h2 class="text-center">Let's show you the World</h2>
                <span class="text-center"><i class="fa fa-plane"></i></span>
                <p class="main-para text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua.</p>
                <div class="row">

                   <div class="col-lg-6">
                       <img class="img-fluid" src="https://via.placeholder.com/150" alt="Our Pic" draggable="false">
                   </div>

                   <div class="col-lg-6">
                       <p class="firstPara">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                       <p class="secondPara">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                       <button type="button" class="ourSer">Our Services</button>
                   </div>

                </div>
            </div>
        </div>



        <!-- End About Us Section -->




        <!-- Start Our Services Section -->



        <div id="services" class="our-services text-center">
            <div class="container">
                <h2>Our Awesome Services</h2>
                <span class="text-center"><i class="fa fa-plane"></i></span>
                <p class="main-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua.</p>
                <div class="row">

                    <div class="col-md-4 col-sm-6">
                        <div class="serv-content">
                            <div class="serv-icon wow bounceIn" data-wow-duration="2s" data-wow-offset="120">
                                <i class="fa fa-diamond" aria-hidden="true"></i>
                            </div>
                            <div class="serv-heading">
                                <h5>Visa Provide</h5>
                            </div>
                            <div class="serv-para">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="serv-content">
                            <div class="serv-icon wow bounceIn" data-wow-duration="2s" data-wow-offset="120">
                                <i class="fa fa-hand-scissors-o" aria-hidden="true"></i>
                            </div>
                            <div class="serv-heading">
                                <h5>Visa Check</h5>
                            </div>
                            <div class="serv-para">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="serv-content">
                            <div class="serv-icon wow bounceIn" data-wow-duration="2s" data-wow-offset="120">
                                <i class="fa fa-clone" aria-hidden="true"></i>
                            </div>
                            <div class="serv-heading">
                                <h5>Travelling</h5>
                            </div>
                            <div class="serv-para">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="serv-content">
                            <div class="serv-icon wow bounceIn" data-wow-duration="2s" data-wow-offset="140">
                                <i class="fa fa-area-chart" aria-hidden="true"></i>
                            </div>
                            <div class="serv-heading">
                                <h5>Student Visa</h5>
                            </div>
                            <div class="serv-para">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="serv-content">
                            <div class="serv-icon wow bounceIn" data-wow-duration="2s" data-wow-offset="140">
                                <i class="fa fa-camera" aria-hidden="true"></i>
                            </div>
                            <div class="serv-heading">
                                <h5>Consular Closings</h5>
                            </div>
                            <div class="serv-para">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="serv-content">
                            <div class="serv-icon wow bounceIn" data-wow-duration="2s" data-wow-offset="140">
                              <i class="fa fa-bus" aria-hidden="true"></i>
                            </div>
                            <div class="serv-heading">
                                <h5>Legalizations</h5>
                            </div>
                            <div class="serv-para">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>





       <!-- End Our Services Section -->




       <!-- Start Hire Us Section -->





        <div class="hire-us text-center">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="hire-heading">
                            <h4 class="text-left">Have Some Question About Visa?</h4>
                        </div>
                        <div class="hire-para">
                            <p class="text-left">Duis aute irure dolor in reprehenderit in voluptate velit esse. Duis aute irure dolor in reprehenderit</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="hireButton">
                            <button class="hbtn hb-fill-bottom">Let's Talk</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>





       <!-- End Hire Us Section -->



      <!-- Start Destinations Section -->



      <div id="destinations" class="our-destinations text-center">
        <div class="container">
          <h2>How to get a Visa</h2>
          <span class="text-center"><i class="fa fa-plane"></i></span>
          <p class="main-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua.</p>
          <div class="row">
              <div class="col-lg-4 col-md-6 col-sm-12">
                <div id="accordion">
                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                          <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Download Application Pack
                          </button>
                        </h5>
                      </div>
                      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            Once you have acquired all the necessary documentation listed above, simply download our comprehensive application pack.
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                <div id="accordion">
                    <div class="card">
                      <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                          <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                            Application Processing
                          </button>
                        </h5>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            We receive your documentation and commence with immediate processing of the application.
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                <div id="accordion">
                    <div class="card">
                      <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                          <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
                            Confirm Processing Time
                          </button>
                        </h5>
                      </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            Select your processing time requirement via our online order form to confirm your application.
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                <div id="accordion">
                    <div class="card">
                      <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                          <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
                            Visa Issuance
                          </button>
                        </h5>
                      </div>
                      <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="card-body">
                            Once the visa has been issued, one of our representatives will contact and notify you straight away.
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                <div id="accordion">
                    <div class="card">
                      <div class="card-header" id="headingFive">
                        <h5 class="mb-0">
                          <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseOne">
                            Application Prechecking
                          </button>
                        </h5>
                      </div>
                      <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                        <div class="card-body">
                            We conduct a FREE precheck of all documents to ensure there are no delays in your application.
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                <div id="accordion">
                    <div class="card">
                      <div class="card-header" id="headingSix">
                        <h5 class="mb-0">
                          <button class="btn btn-link" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseOne">
                            AReturn of Saudi Visa
                          </button>
                        </h5>
                      </div>
                      <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                        <div class="card-body">
                            The documentation is sent out and you are provided the relevant tracking number to monitor its progress.
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
        </div>
      </div>



      <!-- End Destinations Section -->




      <!-- Start Apply for Visa Section -->


<?php

		if (isset($_SESSION["Type"])){

 		if ($_SESSION["Type"]==2){echo '
      <div class="apply-for-visa">
        <div class="container">
            <h2 class="text-center">Apply for Visa right now</h2>
            <p class="main-para text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua.</p>
            <form method="POST" action="../addvisa.php">
            <div class="row">
               
                <div class="col-lg-6 col-md-12">
                    <div class="form-group">
                        <label>I hold a passport from</label>
                        <select class="form-control" name="Source">
                            <option>London</option>
                            <option>Cairo</option>
                            <option>Chicago</option>
                            <option>Germany</option>
                            <option>India</option>
                            <option>Austrailia</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="form-group">
                        <label>Ism going to</label>
                        <select class="form-control" name="Destination">
                            <option>Select one</option>
                            <option>Cairo</option>
                            <option>London</option>
                            <option>Chicago</option>
                            <option>Germany</option>
                            <option>India</option>
                            <option>Austrailia</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="form-group">
                        <label>Start Date</label>
                        <input type="date" class="form-control" name="StartDate" required>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="form-group">
                        <label>End Date</label>
                        <input type="date" class="form-control" name="ENDDate" required>
                       
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Give some words</label>
                        <textarea class="form-control" name="Comment" id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Apply now</button>
            </div>
            </form>
        </div>
      </div>

';
 }}?>

      <!-- End Apply for Visa Section -->



       <!-- Start Achievement Section -->



       <div class="our-achievement text-center">
        <div class="container">
            <div class="containerr">
                <div class="single-event-container right">
                    <div class="event-description">
                        <h2>345</h2>
                        <p>Happy Clients</p>
                    </div>
                    <div class="border"></div>
                    <div class="circle-date">
                        <i class="fa fa-user fa-3x wow bounceIn" data-wow-duration="2s" data-wow-offset="140"></i>
                    </div>
                </div>
                <div class="single-event-container">
                    <div class="event-description">
                        <h2>123</h2>
                        <p>Clients Comments</p>
                    </div>
                    <div class="border"></div>
                    <div class="circle-date">
                        <i class="fa fa-comment fa-3x wow bounceIn" data-wow-duration="2s" data-wow-offset="140"></i>
                    </div>
                </div>
                <div class="single-event-container right">
                    <div class="event-description">
                        <h2>35,012</h2>
                        <p>Visa Complete</p>
                    </div>
                    <div class="border"></div>
                    <div class="circle-date">
                        <i class="fa fa-plane fa-3x wow bounceIn" data-wow-duration="2s" data-wow-offset="140"></i>
                    </div>
                </div>
                <div class="single-event-container">
                    <div class="event-description">
                        <h2>24/7</h2>
                        <p>Friendly Support</p>
                    </div>
                    <div class="border"></div>
                    <div class="circle-date">
                        <i class="fa fa-comments fa-3x wow bounceIn" data-wow-duration="2s" data-wow-offset="140"></i>
                    </div>
                </div>
            </div>
        </div>
     </div>



       <!-- End Achievement Section -->





       <!-- Start Top Tour Packages -->





       <div id="tours" class="our-tours text-center">
            <div class="container">
                <h2 class="text-center">Top Tour Packages</h2>
                <span class="text-center"><i class="fa fa-plane"></i></span>
                <p class="main-para text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua.</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="buttons">
                            <ul class="list-unstyled shuffle">
                                <li class="selected filter" data-filter="all">All</li>
                                <li class="filter" data-filter=".summer">Summer</li>
                                <li class="filter" data-filter=".winter">Winter</li>
                                <li class="filter" data-filter=".autumn">Autumn</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div id="Container" class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 mytour-item mix summer">
                        <div class="ImgHover">
                            <img src="https://via.placeholder.com/150" alt="" draggable="false">
                            <p class="figcaption">
                               <span>Summer Tour</span>
                            </p><a href="#"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mytour-item mix winter">
                        <div class="ImgHover">
                            <img src="https://via.placeholder.com/150" alt="" draggable="false">
                            <p class="figcaption">
                               <span>Winter Tour</span>
                            </p><a href="#"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mytour-item mix summer">
                        <div class="ImgHover">
                            <img src="https://via.placeholder.com/150" alt="" draggable="false">
                            <p class="figcaption">
                               <span>Summer Tour</span>
                            </p><a href="#"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mytour-item mix autumn">
                        <div class="ImgHover">
                            <img src="https://via.placeholder.com/150" alt="" draggable="false">
                            <p class="figcaption">
                               <span>Autumn Tour</span>
                            </p><a href="#"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mytour-item mix winter">
                        <div class="ImgHover">
                            <img src="https://via.placeholder.com/150" alt="" draggable="false">
                            <p class="figcaption">
                               <span>Winter Tour</span>
                            </p><a href="#"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mytour-item mix summer">
                        <div class="ImgHover">
                            <img src="https://via.placeholder.com/150" alt="" draggable="false">
                            <p class="figcaption">
                               <span>Summer Tour</span>
                            </p><a href="#"></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>








       <!-- End Top Tour Packages -->







       <!-- Start Our Blog Section -->






       <div id="blog" class="our-blog text-center">
           <div class="container">
                <h2>Latest Blog</h2>
                <span class="text-center"><i class="fa fa-plane"></i></span>
                <p class="main-para text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua.</p>
                <div class="row">

                    <div class="col-lg-4 col-md-12">
                        <div class="blog-box">
                            <div class="blog-img">
                                <img class="img-fluid" src="https://via.placeholder.com/150" alt="Blog Image" draggable="false">
                            </div>
                            <div class="blog-icon">
                                <i class="fa fa-arrows-v" aria-hidden="true"></i>
                            </div>
                            <div class="blog-date">
                                <p class="date text-left">January 14, 2018 || 3 Comments</p>
                            </div>
                            <div class="blog-heading">
                                <h5 class="text-left">Our Latest Blog</h5>
                            </div>
                            <div class="blog-desc">
                                <p class="blog-para text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div class="blog-link">
                                <a href="blog1.html">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="blog-box">
                            <div class="blog-img">
                                <img class="img-fluid" src="https://via.placeholder.com/150" alt="Blog Image" draggable="false">
                            </div>
                            <div class="blog-icon">
                                <i class="fa fa-arrows-v" aria-hidden="true"></i>
                            </div>
                            <div class="blog-date">
                                <p class="date text-left">July 9, 2018 || 6 Comments</p>
                            </div>
                            <div class="blog-heading">
                                <h5 class="text-left">Our Latest Blog</h5>
                            </div>
                            <div class="blog-desc">
                                <p class="blog-para text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div class="blog-link">
                                <a href="blog2.html">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="blog-box">
                            <div class="blog-img">
                                <img class="img-fluid" src="https://via.placeholder.com/150" alt="Blog Image" draggable="false">
                            </div>
                            <div class="blog-icon">
                                <i class="fa fa-arrows-v" aria-hidden="true"></i>
                            </div>
                            <div class="blog-date">
                                <p class="date text-left">Sep 17, 2018 || 9 Comments</p>
                            </div>
                            <div class="blog-heading">
                                <h5 class="text-left">Our Latest Blog</h5>
                            </div>
                            <div class="blog-desc">
                                <p class="blog-para text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div class="blog-link">
                                <a href="blog3.html">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
           </div>
       </div>






       <!-- End Our Blog Section -->






       <!-- Start Testimonials Section -->







       <div class="testimonials text-center">
           <div class="container">
               <h2>What Clients Say?!</h2>
               <span class="text-center"><i class="fa fa-plane"></i></span>
               <p class="main-para text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua.</p>
               <div class="row">

                   <div class="col-md-12">

                       <div id="myTestimonials" class="carousel slide" data-ride="carousel">

                          <!-- Slider Indicators -->

                          <ul class="carousel-indicators">
                            <li data-target="#myTestimonials" data-slide-to="0" class="active"></li>
                            <li data-target="#myTestimonials" data-slide-to="1"></li>
                            <li data-target="#myTestimonials" data-slide-to="2"></li>
                          </ul>

                          <!-- the Slider Content -->

                           <div class="carousel-inner">

                            <div class="carousel-item myCarousel-Profile active">

                                <div class="clientOpinionContent">
                                    <div class="clientImage">
                                        <img class="rounded-circle img-thumbnail img-fluid" src="https://via.placeholder.com/150" alt="testim Image">
                                    </div>
                                    <div class="clientPara">
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur<br> magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam<br> est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                                    </div>
                                    <div class="clientName">
                                        <h4>Justen Baker</h4>
                                        <span>Co-Founder -</span>
                                    </div>
                                </div>

                            </div>

                            <div class="carousel-item myCarousel-Profile">

                                <div class="clientOpinionContent">
                                    <div class="clientImage">
                                        <img class="rounded-circle img-thumbnail img-fluid" src="https://via.placeholder.com/150" alt="testim Image">
                                    </div>
                                    <div class="clientPara">
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur<br> magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam<br> est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                                    </div>
                                    <div class="clientName">
                                        <h4>Maria Doe</h4>
                                        <span>Marketer -</span>
                                    </div>
                                </div>

                            </div>

                            <div class="carousel-item myCarousel-Profile">

                                <div class="clientOpinionContent">
                                    <div class="clientImage">
                                        <img class="rounded-circle img-thumbnail img-fluid" src="https://via.placeholder.com/150" alt="testim Image">
                                    </div>
                                    <div class="clientPara">
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur<br> magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam<br> est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                                    </div>
                                    <div class="clientName">
                                        <h4>Fabricana</h4>
                                        <span>Senior Graphic Designer -</span>
                                    </div>
                                </div>

                            </div>

                           </div>

                        </div>

                   </div>

               </div>
           </div>
       </div>







       <!-- End Testimonials Section -->









       <!-- Start Contact Us Section -->





       <div id="contact" class="contact-us text-center">
           <div class="container">
               <h2 class="text-uppercase">Contact Us <span class="messageWord">Now!</span></h2>
               <span class="text-center"><i class="fa fa-plane"></i></span>
               <p class="main-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua.</p>
               <div class="row">

                   <div class="col-lg-4 col-md-12">
                       <div class="ourEmails">
                           <div class="ourOffice">
                               <i class="fa fa-telegram fa-2x"></i>
                               <h6 class="text-left">Our Office</h6>
                               <p class="text-left">859 train ST, Sui 584 Chicago</p>
                           </div>
                           <div class="ourPhone">
                               <i class="fa fa-phone fa-2x"></i>
                               <h6 class="text-left">Phone</h6>
                               <p class="text-left">(12) 1234 123456</p>
                           </div>
                           <div class="ourEmail">
                               <i class="fa fa-envelope fa-2x"></i>
                               <h6 class="text-left">E-mail</h6>
                               <p class="text-left">Info@example.com</p>
                           </div>
                       </div>
                   </div>

                   <div class="col-lg-5 col-md-12">
                       <div class="firstTowInputs">
                           <form class="inputs" action="index1.php" name="yourForm" id="theForm" method="post">
                               <input class="myInput" type="text" placeholder="Full Name" required>
                               <input class="myInput" type="email" placeholder="Your E-mail" required>
                               <textarea class="myInput" placeholder="Your Own Message"></textarea>
                               <button class="text-uppercase">Send <i class="fa fa-angle-right"></i></button>
                           </form>
                       </div>
                   </div>

                   <div class="col-lg-3 col-md-12">
                       <div class="address">
                           <i class="fa fa-map-marker"></i>
                           <p>Address: Bak-One Company 12345 Piaz BAld Street Chicago, U.S.A</p>
                       </div>
                   </div>

               </div>
           </div>
       </div>





       <!-- End Contact Us Section -->






        <!-- Start the Website Map Section -->


        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d3636175.570139567!2d-87.7992297423583!3d41.54795665165641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x89b7b7c65032f473%3A0x3ff431d3c7f4fd6f!2sWest+End+Travel+Inc%2C+Connecticut+Avenue+Northwest%2C+Washington%2C+DC%2C+USA!3m2!1d38.905215!2d-77.04119949999999!4m5!1s0x880e2c3cd0f4cbed%3A0xafe0a6ad09c0c000!2sChicago%2C+Illinois%2C+USA!3m2!1d41.8781136!2d-87.6297982!5e0!3m2!1sen!2seg!4v1516507772793"></iframe>
        </div>



        <!-- End the Website Map Section -->





        <!-- Start Footer Section -->



        <footer class="text-center">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-12">
                        <div class="CLogo">
                            <p>H-VISA<i class="fa fa-plane"></i></p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="copyright">
                            <p>&copy; Copyright 2018 made with <i class="fa fa-heart fa-1x"></i></p>
                            <p class="me">Designed by <a href="#">H-VISA</a></p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="social-icons">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-facebook fa-1x"></i></li>
                                <li><i class="fa fa-twitter fa-1x"></i></li>
                                <li><i class="fa fa-linkedin fa-1x"></i></li>
                                <li><i class="fa fa-behance fa-1x"></i></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </footer>





        <!-- End Footer Section -->





        <!-- Scroll to Top -->

        <div id="scroll-top">
            <i class="fa fa-angle-double-up"></i>
        </div>


        <!-- Loading Screen -->


        <div class="loading-overlay">
            <div class="spinner"></div>
        </div>









        <script src="js/jquery-3.2.1.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.mixitup.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>

@extends('layout.main')

@section('content')

		@include('layout.login-top')   

        <ul class="cb-slideshow" style="list-style-type:none">
            <li><span>Image 01</span><div><h3></h3></div></li>
            <li><span>Image 02</span><div><h3></h3></div></li>
            <li><span>Image 03</span><div><h3></h3></div></li>
            <li><span>Image 04</span><div><h3></h3></div></li>
            <li><span>Image 05</span><div><h3></h3></div></li>
            <li><span>Image 06</span><div><h3></h3></div></li>
        </ul>

   <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="segoeuiheading">Welcome to the Silver Reunion for the Class of 1990</h1>
                <hr>
                <h3>IIT Madras Class of 1990 - Silver Jubilee Reunion</h3>
                <a href="#register" class="btn btn-primary btn-xl page-scroll">Register</a>
            </div>
        </div>
    </header>
<!--
    <section class="bg-primary" id="planyourtrip">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Plan Your Trip</h2>
                    <hr class="light">
                    <h3>Planning a backpacking trip? Blaffer is here, one stop solution for your backpacking needs.</h3>
                    <a href="#" class="btn btn-default btn-xl">Subscribe</a>
                </div>
            </div>
        </div>
    </section>
-->

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">List of Events</h2>
                    <hr class="light">
                    <h3><i class="fa fa-calendar"></i> | 27th December</h3>
                    <ul class="text-left" style="font-size:16px;">
                        <li>Arrive at the Ginger Hotel/Hostel as per your booking</li>
                        <li>Evening Time, light music program and informal get together event 
                        at OAT</li>
                        <li>Dinner at OAT</li>
                    </ul>

                    <h3><i class="fa fa-calendar"></i> | 28th December</h3>
                    <ul class="text-left" style="font-size:16px;">
                        <li>Alumni Connect via series of talks at IC&SR until 2 p.m.</li>
                        <li>Evening Time, depart to Mahabalipuram for stay at Radisson Temple Bay Resort</li>
                        <li>Late Night program with DJ</li>
                    </ul>

                    <h3><i class="fa fa-calendar"></i> | 29th December</h3>
                    <ul class="text-left" style="font-size:16px;">
                        <li>Morning Time, depart back for Home OR Optionally stay back at the Resort</li>
                        <li>(Some groups in Ganga etc., have optionally booked additional time at the resort)</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="accommodation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Accommodation Details</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-user wow bounceIn text-primary"></i>
                        <h3>Travelling alone</h3>
                        <p>Travelling alone and want to take up a Twin-sharing room?</p>
                        <h4><i class="fa fa-inr"></i> 18,000/-</h4>
                        <br>
                        <ul class="text-left" style="font-size:16px;">
                            <li>Accommodation in Chennai can be at Ginger(twin sharing)/Hostel</li>
                            <li>Accommodation in Temple Bay at twin sharing</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-users wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>Travelling with spouse</h3>
                        <p>Travelling alone and want a single room or travelling with your spouse?</p>
                        <h4><i class="fa fa-inr"></i> 25,000/-</h4>
                        <br>
                        <ul class="text-left" style="font-size:16px;">
                            <li>Accommodation in Chennai can be at Ginger</li>
                            <li>Accommodation in Temple Bay</li>
                            <li>Children can also be accommodated in the same room by paying extra charges to the hotel directly</li>
                        </ul>
                    </div>
                </div>                
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                <hr>
                <p><strong>Note:</strong> If you want separate rooms for parents, or 
                additional rooms for their children, please make a direct request 
                to the organizers.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <a href="http://www.gingerhotels.com/chennai-hotel-profile?gclid=CjwKEAjw9dWuBRDFs9mHv-C9_FkSJADo58iMPbJjfUTTa0xfrV-RE2VYNWPuZoH5AfkAXtjuIwmA_xoCKSrw_wcB" class="portfolio-box" target="_alt">
                        <img src="img/portfolio/1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    accommodation
                                </div>
                                <div class="project-name">
                                    Ginger Hotel
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="http://www.radissonblu.com/hotel-mamallapuram" class="portfolio-box" target="_alt">
                        <img src="img/portfolio/2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    accommodation
                                </div>
                                <div class="project-name">
                                    Radisson Temple Bay Resort
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/3.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    accommodation
                                </div>
                                <div class="project-name">
                                    Hostel Guest House
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
               
            </div>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>View pictures of last years Silver Jubilee Reunion.</h2>
                <a href="http://alumni.iitm.ac.in/gallery/photo-gallery/?album=1&gallery=44" class="btn btn-default btn-xl wow tada" target="_alt">Silver Reunion - 1989</a>
            </div>
        </div>
    </aside>

    <section id="registrationfeedetails">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Registration Fee Details</h2>
                    <hr class="primary">
                    <p>The registration fees is inclusive of the following benefits</p>
                    <ol class="col-lg-6 col-lg-offset-3 col-sm-12 text-left" style="font-size:16px;">
                        <li>Stay for 2 nights on 27th and 28th of December</li>
                        <li>Entertainment and Dinner at OAT on 27th night</li>
                        <li>3 meals at Temple bay hotel</li>
                        <li>Banquet room at Temple bay</li>
                        <li>Entertainment for the night of 28th December</li>
                        <li>Transportation from Chennai to Mahabalipuram and back</li>
                        <li>T-shirts, memorabilia for each attending alumni</li>
                    </ol>
                </div>
            </div>
        </div>       
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                <hr>
                <p><strong>Note:</strong> Our fees are based on negotiated 
                rates from hotels, and actual spends from previous years. In case, 
                we do collect more than what we spend, the same will be donated to IITM for a 
                cause agreed upon by all alumni.</p>
                </div>
            </div>
        </div>
    </section>


    <aside class="bg-dark" id="register">
        <div class="container text-center">
           
            <div class="col-lg-6 col-lg-offset-3 col-sm-12 text-center">
                 <div class="call-to-action">
                    <h2><i class="fa fa-list-ul"></i> | Register</h2>
                    <hr>
                </div>
		        <form action="{{ URL::route('landing-pyt-default-post') }}" class="" method="post">
                  
                  <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                        <input style="height:auto;" type="text" class="form-control" id="InputName" name="InputName" placeholder="Your Name *" required>
                    </div>
                  </div>
                  <div class="form-group col-lg-6 col-sm-12">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
                        <input style="height:auto;" type="text" class="form-control" id="InputRollno" name="InputRollno" placeholder="Your Roll Number *" required>
                    </div>
                  </div>
                  <div class="form-group col-lg-6 col-sm-12">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                        <input style="height:auto;" type="text" class="form-control" id="InputPhone" name="InputPhone" placeholder="Your Phone Number *" required>
                    </div>
                  </div>
                  <div class="form-group col-lg-12 col-sm-12">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                        <input style="height:auto;" type="text" class="form-control" id="InputAddress" name="InputAddress" placeholder="Your Address *" required>
                    </div>
                  </div>
                  <div class="form-group col-lg-12 col-sm-12">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-inr"></i></div>
                        <select class="form-control" id="InputAccommodation" name="InputAccommodation" required>
                          <option value="18000">INR 18,000/- Travelling alone</option>
                          <option value="25000">INR 25,000/- Travelling with spouse</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group col-lg-12 col-sm-12">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-shirtsinbulk"></i></div>
                        <select class="form-control" id="InputTshirtsize" name="InputTshirtsize">
                          <option value="Small">Small</option>
                          <option value="Medium">Medium</option>
                          <option value="Large">Large</option>
                          <option value="Extra Large">Extra Large</option>
                          <option value="Double Extra Large">Double Extra Large</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                        <input style="height:auto;" type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Your Email Address">
                    </div>
                  </div>

                  <button type="submit" class="btn btn-default">Submit</button>
	              {{ Form::token() }}    

                </form>
               
            </div>
        </div>
    </aside>

<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>If you face any issues while registering, please contact us.</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>+91-9790970573</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:srinivasa32@hotmail.com">srinivasa.gopal.67@gmail.com</a></p>
                </div>
            </div>
        </div>
    </section>

    <aside class="bg-primary">
        <div class="container text-right">
            <div class="call-to-action">
            <p>Designed & Developed by <strong>@yashmurty</strong> & <strong>@dharanimanne</strong></p>
            </div>
        </div>
    </aside>

    
    @include('layout.login-bottom')


@stop

@section('jscontent')
	
@stop
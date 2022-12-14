    @include('layout.header')
<title>GeoHomes | Booking</title>

<!-- Google tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-203737296-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-203737296-1');
</script>
<!-- end of google analytics code -->

</head>

<body>


    <!-- Header -->
      @include('layout.navbar')
    </header>

   <!--? Hero Start -->
        <div class="slider-area2 section-bg2" data-background="assets/img/materials/book-inspection-banner.jpg">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2">
                                <h2>Booking Form</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
             <!-- booking Form starts here -->
                  <div class="container">
                 <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title mt-50 padding-40" style="color:#0EA15F">Kindly, fill the form to book your desired service.</h2>
                    </div>
                  </div>

                          <!-- it gives feedback messages -->
                                      @if($message = Session::get('success'))
                                      <div class="alert">
                                        <p style="color:#0EA10F;">{{$message}}</p>
                                      </div>
                                      @endif

                                      @if($message = Session::get('error'))
                                      <div class="alert">
                                        <p style="color:red;">{{$message}}</p>
                                      </div>
                                      @endif
                                      <!-- feedback message ends here -->

                        <form class="form-contact contact_form" action="{{route('book-inspection')}}" method="POST" novalidate="novalidate">
                            <div class="row">
                               
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                        <span class="text-danger">{{$errors->first('name') }}</span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                     <div class="form-group">
                                        <input class="form-control valid" name="middlename" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your Miidle Name">
                                        <span class="text-danger">{{$errors->first('middlename') }}</span>
                                    </div>
                                </div>
                                 <div class="col-sm-6 col-lg-6">
                                     <div class="form-group">
                                        <input class="form-control valid" name="surname" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your Surname">
                                        <span class="text-danger">{{$errors->first('surname') }}</span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                       <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                       <span class="text-danger">{{$errors->first('email') }}</span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                       <input class="form-control valid" name="phone" id="phone" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Mobile Line">
                                       <span class="text-danger">{{$errors->first('phone') }}</span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                       <input class="form-control valid" name="residential" id="residential" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Residential address'" placeholder="Residential Address">
                                       <span class="text-danger">{{$errors->first('residential') }}</span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                       <input class="form-control valid" name="office" id="address" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Office address'" placeholder="Office Address">
                                       <span class="text-danger">{{$errors->first('office') }}</span>
                                    </div>
                                </div>
                                    <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                       <input class="form-control valid" name="desired-service" id="service" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Desired Service address'" placeholder="Desired Service">
                                       <span class="text-danger">{{$errors->first('desired-service') }}</span>
                                    </div>
                                </div>
                           <div class="col-sm-6 col-lg-6 submit-info mb-40">
                             <button class="submit-btn2" type="submit" style="background-color:#0EA15F; margin-left:none">Book</button>
                              </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        </div>
        <!-- Contact Area End -->
                       <!-- <center>
                        <div class="container">
                        <div class="form-wrapper mt-50">
                            <form id="contact-form" action="#" method="POST">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-12">
                                        
                                        

                                        <p class="contact-title mt-20 padding-10" style="color:black">Kindly, fill the form to book your desired service.</p>
                                       </div>
                                         <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-box user-icon mb-10">
                                            <input type="text" name="name" placeholder="Your Name" required="name" >
                                        </div>
                                        <div class="form-box email-icon mb-10">
                                            <input type="text" name="middlename" placeholder="Middle Name" required="middlename" >
                                        </div>
                                        <div class="form-box email-icon mb-10">
                                            <input type="text" name="surname" placeholder="Surname" required="surname" >
                                        </div>
                                        <div class="form-box email-icon mb-10">
                                            <input type="tel" name="phone" placeholder="Mobile Number" required="phone" >
                                        </div>
                                        <div class="form-box email-icon mb-10">
                                            <input type="text" name="email" placeholder="Email" required="email" >
                                        </div>
                                        <div class="form-box email-icon mb-10">
                                            <input type="text" name="residential" placeholder="Residential Address" >
                                        </div>
                                        <div class="form-box email-icon mb-10">
                                            <input type="text" name="office" placeholder="Office Address" >
                                        </div>
                                        <div class="form-box email-icon mb-10">
                                            <input type="text" name="desired-service" placeholder="Desired Service" required="desired-service">
                                        </div>
                                    </div>
                                    </div>
                                <div class="col-lg-12 submit-info mb-45 ml-0">
                                 <button class="submit-btn2" type="submit" style="background-color:#0EA10F; width:50%;">Submit Form</button>
                              </div>
                            </form> 
                        </div>
                    </div>
                </center>

    <!-- booking Form End -->
 @include('layout.footer')
    </body>

</html>
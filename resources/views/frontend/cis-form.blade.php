  @include('layout.header')
<title>GeoHomes | CIS Form</title>

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
        <div class="slider-area2 section-bg2" data-background="assets/img/materials/cis.jpg">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2">
                                <h2 style="color:black">Client’s Information System (CIS)</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->

        <div class="container">
                 <div class="row">
                      @if(session()->has('success'))
  <div class="alert alert-success">{{session()->get('success')}}</div>

  @elseif(session()->has('error'))
  <div class="alert alert-danger">{{session()->get('error')}}</div>
  
   @endif
                    <div class="col-12">
                        <h2 class="contact-title mt-30 padding-40" style="color:#0EA15F">Kindly, fill the form with correct detail.</h2>
                    </div>
                  </div>

                         

                        <form class="form-contact contact_form" action="{{route('cis-form')}}" method="POST" novalidate="novalidate">
                            <div class="row">
                               
                                <div class="col-sm-6 col-md-6 col-lg-4 ">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                        <span class="text-danger">{{$errors->first('email') }}</span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 ">
                                     <div class="form-group">
                                        <input class="form-control valid" name="phone" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mobile Line'" placeholder="Mobile Line">
                                        <span class="text-danger">{{$errors->first('phone') }}</span>
                                    </div>
                                </div>
                                 
                              
                                <div class="col-sm-6 col-md-6 col-lg-4 ">
                                    <div class="form-group">
                                       <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                       <span class="text-danger">{{$errors->first('email') }}</span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 ">
                                    <div class="form-group">
                                       <input class="form-control valid" name="residential" id="phone" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Residential Address '" placeholder="Residential Address">
                                       <span class="text-danger">{{$errors->first('residential') }}</span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 ">
                                    <div class="form-group">
                                       <input class="form-control valid" name="occupation" id="address" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Occupation'" placeholder="Occupation">
                                       <span class="text-danger">{{$errors->first('ocupation') }}</span>
                                    </div>
                                </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 ">
                                    <div class="form-group">
                                       <input class="form-control valid" name="date_of_birth" id="date_of_birth" type="date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Date Of Birth'" placeholder="Date Of Birth">
                                       <span class="text-danger">{{$errors->first('date_of_birth') }}</span>
                                    </div>
                                </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 ">
                                    <div class="form-group">
                                       <input class="form-control valid" name="plot_number" id="plot_number" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Plot Number'" placeholder="Plot Number">
                                       <span class="text-danger">{{$errors->first('plot_number') }}</span>
                                    </div>
                                </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 ">
                                    <div class="form-group">
                                       <input class="form-control valid" name="lifted" id="lifted" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Lifted'" placeholder="Lifted">
                                       <span class="text-danger">{{$errors->first('lifted') }}</span>
                                    </div>
                                </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 ">
                                    <div class="form-group">
                                       <input class="form-control valid" name="amount" id="amount" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'amount'" placeholder="120,000 per plot" readonly="">
                                    </div>
                                </div>
                                 <div class="col-sm-6 col-md-6 col-lg-4 ">
                                    <div class="form-group">
                                       <select name="layout" id="select2">
                                      <option value="Divine City">Divine City Layout</option>
                                      <option value="Beloved">Beloved Layout</option>
                                       <option value="Golden Gate" >Golden Gate</option>
                                         <option value="Precious">Precious</option>
                                        <option value="Monic " >Monic</option>
                                        <option value="Valley of Life" >Valley of Life</option>
                                         <option value="Destiny" >Destiny</option>
                                        <option value="Christa City" >Christa City</option>
                                        <option value="blue lake" >Blue lake</option>
                                         <option value="peace" >Peace</option>
                                        <option value="Agu bite" >Agu Bite</option>
                                            </select>
                                            <span class="text-danger">{{$errors->first('layout') }}</span>
                                    </div>
                                </div>
                                 <div class="col-sm-6 col-md-6 col-lg-4 ">
                                    <div class="form-group">
                                       <input class="form-control valid" name="agent_name" id="agent_name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'agent name'" placeholder="Agent Name" >
                                       <span class="text-danger">{{$errors->first('agent_name') }}</span>
                                    </div>
                                </div>
                                 <div class="col-sm-6 col-md-6 col-lg-4 ">
                                    <div class="form-group">
                                       <input class="form-control valid" name="agent_phone" id="amount" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'agent phone'" placeholder="Agent Mobile Line" >
                                       <span class="text-danger">{{$errors->first('agent_phone') }}</span>
                                    </div>
                                </div>
                                 <div class="col-sm-6 col-md-6 col-lg-4 ">
                                    <div class="form-group">
                                       <input class="form-control valid" name="agent_address" id="agent_address" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Agent Address'" placeholder="Agent Address " >
                                       <span class="text-danger">{{$errors->first('agent_address') }}</span>
                                    </div>
                                </div>
                                 <div class="col-sm-6 col-md-6 col-lg-4 ">
                                    <div class="form-group">
                                       <input class="form-control valid" name="agent_occupation" id="agent_occupation" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'agent occupation'" placeholder="Agent Occupation" >
                                       <span class="text-danger">{{$errors->first('agent_occupation') }}</span>
                                    </div>
                                </div>
                                 <div class="col-sm-6 col-md-6 col-lg-4 ">
                                    <div class="form-group">
                                       <input class="form-control valid" name="agent_office" id="agent office" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'agent office'" placeholder="Agent Office" >
                                       <span class="text-danger">{{$errors->first('agent_office') }}</span>
                                    </div>
                                </div>
                           <div class="col-sm-6 col-lg-12 submit-info mb-40">
                             <button class="submit-btn2" type="submit" style="background-color:#0EA15F; margin-left:none; border-radius: 5px;">Submit</button>
                              </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
       
                         
        <!-- Contact form End -->
        <!--
      <center>
    <div class="container">
    <div class="form-wrapper mt-50">
   <form id="contact-form" action="#" method="POST">
    <div class="row">
       <div class="col-12">

       it gives feedback messages 
           @if($message = Session::get('success'))
          <div class="alert alert-success">
           <p style="color:#0EA10F;">{{$message}}</p>
            </div>
             @endif

             @if($message = Session::get('error'))
            <div class="alert alert-danger">
            <p style="color:red;">{{$message}}</p>
            </div>
            @endif
           feedback message ends here 

        <p class="contact-title mt-20 padding-10 " style="color:black">Kindly fill the CIS Form with correct details.</p>
        </div>

      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="form-box user-icon mb-0">
              <p>Full Name</p>
                <input type="text" name="name" id="name" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Nom' doit être renseigné."required="" />
                <div class="validation"></div>
            </div> 
                
            
            <div class="form-box user-icon mb-0">
            <p>Phone number</p> 
              <input type="text" name="phone" id="phone" data-rule="maxlen:10" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Téléphone' doit être renseigné. Minimum 10 chiffres"required="" />
                      <div class="validation"></div>
            </div>

              <div class="form-box user-icon mb-0">
              <p>E-mail</p>
                <input type="email" name="email" id="email" data-rule="email" data-msg="Vérifiez votre saisie sur les champs : Le champ 'E-mail' est obligatoire."required="" />
         			  <div class="validation"></div>
             	 </div> 
             	 
               <div class="form-box user-icon mb-0">
              <p> Residential Address</p>
                <input type="text" name="residential" id="adresse" data-rule="required" data-msg="please fill this filled"required="" />
                <div class="validation"></div>
              </div>
 		
           		   <div class="form-box user-icon mb-0">
                <p>Occupation</p>
                 <input type="text" name="occupation" id="fonction" data-rule="required" data-msg="please fill this filled"required="" />
                 <div class="validation"></div>
                </div>
              </div>

             		<div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="form-box user-icon mb-0">
                  <p>Date of Birth</p>
                    <input type="calendar" name="date_of_birth" data-rule="required" data-msg="please fill this filled"required="" />
                    <div class="validation"></div>
                  </div>

                  <div class="form-box user-icon mb-0">
                  <p>Plot Number</p>
                  <input type="number" name="plot_number" id="ville" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné."required="" />
                   <div class="validation"></div>
                </div> 

                  <div class="form-box user-icon mb-0">
                	<p>Lifted</p>
                  <input type="text" name="lifted" id="ville" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné."required="" />
                  <div class="validation"></div>
                </div> 

                <div class="form-box user-icon mb-0">
                 <p>Amount</p>
                  <input type="text" name="amount" id="ville" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné."required=""  value="$24,000 Per Plot" readonly />
                  <div class="validation"></div>
                </div>

                  <div class="form-box user-icon mb-0">
                 <p style="float: left;" class="ml-50">Layouts</p>
                 <select name="layout" id="select2" class="select-form ml-40" data-rule="required" >
                  <option value="Divine City">Divine City Layout</option>
                  <option value="Beloved">Beloved Layout</option>
                   <option value="Golden Gate" >Golden Gate</option>
                     <option value="Precious">Precious</option>
                    <option value="Monic " >Monic</option>
                    <option value="Valley of Life" >Valley of Life</option>
                     <option value="Destiny" >Destiny</option>
                    <option value="Christa City" >Christa City</option>
                    <option value="blue lake" >Blue lake</option>
                     <option value="peace" >Peace</option>
                    <option value="Agu bite" >Agu Bite</option>
                    
                    </select>
                    select ends here

                </div>


                  <div class="col-lg-4 col-md-4 col-sm-12">
                  
                  <div class="form-box user-icon mb-0">
                     <p>Agent Only</p>
                    <input type="text" name="agent_name"  placeholder="Agent`s Full Name" id="ville" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné."required="" />
                     <div class="validation"></div>
                  </div> 

                   <div class="form-box user-icon mb-0">
                  <p>Agent`s Phone number</p>  
                    <input type="text" name="agent_phone" id="phone" data-rule="maxlen:10" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Téléphone' doit être renseigné. Minimum 10 chiffres"required="" />
                            <div class="validation"></div>
                  </div>
                 	<div class="form-box user-icon mb-0">
                  <p> Agent`s Residential Address</p>
                    <input type="text" name="agent_adresse" id="adresse" data-rule="required" data-msg="please fill this filled"required="" />
                    <div class="validation"></div>
                  </div>

             		
             		<div class="form-box user-icon mb-0">
                  <p>Agent`s Occupation</p>
                    <input type="text" name="agent_occupation" id="fonction" data-rule="required" data-msg="please fill this filled"required="" />
                    <div class="validation"></div>
                  </div>


                
                  <p> Agent`s Office Address</p>
                    <input type="text" name="agent_office" id="fonction"  data-msg="please fill this filled"/>
                    <div class="validation"></div>
                  </div>
                </div>
             <div class="col-lg-12 submit-info mb-45 ml-0">
              <button class="submit-btn2" type="submit" style="background-color:#0EA10F; width:80%;">Submit Form</button>
              </div>

            </form>
          </div>
        </div>
        </center>
                          
  Consultants Form End -->
        @include('layout.footer')
     </body>
</html>
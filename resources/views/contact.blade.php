<x-app>
                     <!-- Modal -->
                     <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle">NOTICE FOR TABLE RESERVATION SYSTEM</h2>
          <data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
        </div>
        <div class="modal-body">
         For Reservation and Table booking system <br> please contact this number : <h2>9804782268</h2>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
    <div id="banner" class="banner full-screen-mode parallax">
        <div class="container pr">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
                    <div class="banner-text">
                        <div class="banner-cell">
                            <h1>Contact Us</h1>
                            <h2>Your way, Right away</h2>
                        </div>
                        <!-- end banner-cell -->
                    </div>
                    <!-- end banner-text -->
                </div>
                <!-- end banner-static -->
            </div>
            <!-- end col -->
        </div>
        <!-- end container -->
    </div>
    <!-- end banner -->


<section>
    <div class="container padd-50">
    <div class="col-md-8 contact-page-head-border" style="background-color: azure;">
      <div class="contact-page-head">
        <h2 style="font-family: 'nautilus_pompiliusregular'; color: #e75b1e;">How can you contact Kush Garden</h2>
        <p>Please give as much detail as possible so we can route your question properly.</p>
      </div>
      <form action="{{route('contact.store')}}" method="post">
      @csrf      
      <div class="row">
        <div class="col-md-11" style="padding:0;">
          <div class="col-sm-6 col-md-6 black"> <span class="input input--nariko">
            <input class="input__field input__field--nariko @error('first_name') is-invalid @enderror" name="first_name" type="text" id="input-20" value="{{old('first_name')}}" style="background-color:transparent;" />
            <label class="input__label input__label--nariko" for="input-20"> <span class="input__label-content input__label-content--nariko">First name</span> </label>
            </span>
            @error('first_name')
            <span class="text-danger" role="alert">
                <p>{{ $message }}</p>
            </span>
            @enderror           
          </div>
          <!--Last name-->
          <div class="col-sm-6 col-md-6 black"> <span class="input input--nariko">
            <input class="input__field input__field--nariko @error('last_name') is-invalid @enderror" type="text" name="last_name" id="input-20" value="{{old('last_name')}}" style="background-color:transparent;" />
            <label class="input__label input__label--nariko" for="input-20"> <span class="input__label-content input__label-content--nariko">Last name</span> </label>
            </span>
            @error('last_name')
            <span class="text-danger" role="alert">
                <p>{{ $message }}</p>
            </span>
            @enderror          
          </div>
          <div class="clearfix"></div>
          <!--Phone Number-->
          <div class="col-sm-6 col-md-6 black"> <span class="input input--nariko">
            <input class="input__field input__field--nariko @error('phone') is-invalid @enderror" type="text" id="input-20" name="phone" value="{{old('phone')}}" style="background-color:transparent;" />
            <label class="input__label input__label--nariko" for="input-20"> <span class="input__label-content input__label-content--nariko">Phone Number</span> </label>
            </span>
            @error('phone')
            <span class="text-danger" role="alert">
                <p>{{ $message }}</p>
            </span>
            @enderror          
          </div>
          <!--Email Address-->
          <div class="col-sm-6 col-md-6 black"> <span class="input input--nariko">
            <input class="input__field input__field--nariko @error('email') is-invalid @enderror" type="email" id="input-20" name="email" value="{{old('email')}}" style="background-color:transparent;" />
            <label class="input__label input__label--nariko" for="input-20"> <span class="input__label-content input__label-content--nariko">Email Address</span> </label>
            </span> 
            @error('email')
            <span class="text-danger" role="alert">
                <p>{{ $message }}</p>
            </span>
            @enderror
          </div>
          <div class="clearfix"></div>
          <!--Message-->
          <div class="col-md-12 message"> <span class="input input--nariko black">
            <textarea class="input__field input__field--nariko @error('message') is-invalid @enderror large-box" name="message" type="text" id="input-20" style="background-color:transparent;">{{old('message')}}</textarea>
            <label class="input__label input__label--nariko" for="input-20"> <span class="input__label-content input__label-content--nariko" style="color:#191919;">Message</span> </label>
            </span>
            @error('message')
            <span class="text-danger" role="alert">
                <p>{{ $message }}</p>
            </span>
            @enderror           
          </div>
          <div class="clearfix"></div>
          <div class="col-md-12 text-right"> <button type="submit" class="btn btn-primary">Submit</button> </div>
          <div class="clearfix"></div>
        </div>
        <div class="col-md-1"></div>
      </div>
      </form>
    </div>
    <div class="col-md-4">
      <div class="row margin-top">
        <div class="col-md-offset-2 col-md-10">
          <div class="contact-page-head">
            <h2 style="font-family: 'nautilus_pompiliusregular'; color: #e75b1e;">Contact Information</h2>
            <div class="contact-head-u btn-bg"></div>
          </div>
          <div class="contact-det">
            <div class="contact-icon"><i class="flaticon-placeholder"></i></div>
            <span>ADDRESS <br />
            <p>Biratnagar-04, Morang</p>
            <p>Air port mode </p>
            </span> </div>
          <div class="contact-det">
            <div class="contact-icon"><i class="flaticon-phone-call"></i></div>
            <span>PHONE <br />
            <p style="margin-bottom:8px;"><b>+977 9802763000</b></p>
            <p><b>+977 9802763001</b></p>
            </span> </div>
          <div class="contact-det">
            <div class="contact-icon"><i class="flaticon-envelope"></i></div>
            <span>EMAIL <br />
            <p>example@gmail.com</p>
            </span> </div>
          <div class="contact-det">
            <div class="contact-icon"><i class="flaticon2-clock"></i></div>
            <span>OPENING HOURS <br />
            <p>Sunday-Friday :- 8AM - 2PM</p>
            <p>Saturday:- <em class="content-subhead">Closed</em>
            </span>
      <br>
      <br>
    <!-- social media -->
    <ul class="socials-box footer-socials pull-left">
                                <li>
                                    <a href="https://www.facebook.com/kushgardenofficial/">
                                        <div class="social-circle-border"><i class="fa  fa-facebook"></i></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/kushgardenofficial/">
                                        <div class="social-circle-border"><i class="fa fa-instagram"></i></div>
                                    </a>
                                </li>
                                <!--<li>-->
                                <!--    <a href="#">-->
                                <!--        <div class="social-circle-border"><i class="fa fa-google-plus"></i></div>-->
                                <!--    </a>-->
                                <!--</li>-->
                                
                                <!--<li>-->
                                <!--    <a href="#">-->
                                <!--        <div class="social-circle-border"><i class="fa fa-linkedin"></i></div>-->
                                <!--    </a>-->
                                <!--</li>-->
                            </ul>

                        </div>
                        </div>
                        </div>
                        </div>
    </div>
    <div class="clearfix"></div>
  </div>
  
</section>

<!--MAP-->
  <div class="container-fluid">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3571.075237310832!2d87.27012711435599!3d26.48552228472703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef752463d9f8af%3A0x54c237f310c23799!2z4KSV4KWB4KS2IOCkl-CkvuCksOCljeCkoeClh-CkqA!5e0!3m2!1sne!2snp!4v1671270213505!5m2!1sne!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
  </div>    
</x-app>
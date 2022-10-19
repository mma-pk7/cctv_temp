@extends('layout.main')
@section('header')
@endsection

@section('content')
    <!--###################### Slider Starts Here ############################-->
    
    <div class="page-title titl-2">
        <div class="container">
            <div class="row">
                <h2>Contact Us</h2>
                <p> Home <i class="fas fa-angle-double-right"></i> Contact Us </p>
            </div>
        </div>
    </div>
       <div style="margin-top:0px;" class="row no-margin">
        {{-- <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d249759.19784092825!2d79.10145254589841!3d12.009924873581818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1448883859107"  height="450" frameborder="0" style="border:0" allowfullscreen></iframe> --}}
        {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3605.3983489905663!2d68.36321431442111!3d25.357962631383405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394c7046eb511977%3A0x6feeb05656cf6f5f!2sKohsar%20-%20Airport%20Rd%2C%20Iqbal%20Colony%20Latifabad%20Unit%2012%20Latifabad%2C%20Hyderabad%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1665573945474!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14418.2345247144!2d68.35945607140846!3d25.386104826747665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sSuit%20No.%20739%2F1-%20G-5%2C%20Gul%20Shah%20Road%2C%20Near%20Cloth%20Market%2C%20Hyderabad%20pakistan!5e0!3m2!1sen!2s!4v1666187868906!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

      <div class="row contact-rooo no-margin">
        <div class="container">
           <div class="row">
          
            <div style="padding:20px" class="col-sm-7">
            <h2 style="font-size:18px">Contact Form</h2>
                <div class="row cont-row">
                    <div  class="col-sm-3"><label>Enter Name </label><span>:</span></div>
                    <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="name" class="form-control input-sm"  ></div>
                </div>
                <div  class="row cont-row">
                    <div  class="col-sm-3"><label>Email Address </label><span>:</span></div>
                    <div class="col-sm-8"><input type="text" name="name" placeholder="Enter Email Address" class="form-control input-sm"  ></div>
                </div>
                 <div  class="row cont-row">
                    <div  class="col-sm-3"><label>Mobile Number</label><span>:</span></div>
                    <div class="col-sm-8"><input type="text" name="name" placeholder="Enter Mobile Number" class="form-control input-sm"  ></div>
                </div>
                 <div  class="row cont-row">
                    <div  class="col-sm-3"><label>Enter Message</label><span>:</span></div>
                    <div class="col-sm-8">
                      <textarea rows="5" placeholder="Enter Your Message" class="form-control input-sm"></textarea>
                    </div>
                </div>
                 <div style="margin-top:10px;" class="row">
                    <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                    <div class="col-sm-8">
                     <button class="btn btn-success btn-sm">Send Message</button>
                    </div>
                </div>
            </div>
             <div class="col-sm-5">
                    
                  <div style="margin:50px" class="serv"> 
                
               
             
                              
              
          <h2 style="margin-top:10px;">Address</h2>

          Suit No. 739/1- G-5, Gul Shah Road,
          <br> Near Cloth Market,
          <br> Hyderabad <br>
        Phone:+ 92-22-211203<br>
        Email:info@JPSolutions&Network.net<br>
        Website:www.JPSolutions&Network.net<br>

 
       
            
                
                
              
           </div>    
                
             
         </div>

            </div>
        </div>
        
      </div>

 <!--###################### Key Features Starts Here ##########################-->
 <div class="key-features container-fluid">
    <div class="container">
        <div class="session-title row">
            <h2>Trusted Brands</h2>
            <p>We only carry the most trusted brands at the highest quality. Our experience and expertise allows us to decide what we should offer.. </p>
        </div>
        <div class="key-row row">
            <div class="col-md-3">
                <div class="key-single">
                    <i class="fas fa-fingerprint"></i>
                    <h6>High Security</h6>
                    <p>Protecting your home or business should not be a complicated task and that’s why we are here. Make a quick call to set up a free security consultation today.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="key-single">
                    <i class="fas fa-user-lock"></i>
                    <h6>Full Device Protection</h6>
                    <p>Schedule an appointment with us for your home security needs.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="key-single">
                    <i class="fas fa-video"></i>
                    <h6>Remote Monitoring</h6>
                    <p>Sed ligula eros, convallis sit amet ullamcorper sit amet, consequat vel nulla. Maecenas quis convallis dolor. Ut enim lacus, aliquet at neque et,</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="key-single">
                    <i class="far fa-folder-open"></i>
                    <h6>Full Backup of Information</h6>
                    <p>Have one of our security experts put together a FREE quote for over the phone or on-site at your home!</p>
                </div>
            </div>
        </div>
    </div>
</div>

    <!--###################### Footer Starts Here ############################-->
@endsection

@section('footer')
@endsection
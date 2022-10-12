
@yield('footer')

<footer>
    <div class="foot-det">
        
    
     <div class="container foot-cont">
         <div class="row">
             <div class="col-md-4">
                 <div class="foot-about">
                     <h4>Smarteye</h4>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla vel nisl a dictum. Donec ut est arcu.</p>
                     <ul>
                             <li><a><i class="fab fa-github"></i></a></li>
                             <li><a><i class="fab fa-linkedin-in"></i></a></li>
                             <li> <a><i class="fab fa-pinterest-p"></i></a></li>
                             <li><a><i class="fab fa-twitter"></i></a></li>
                             <li> <a><i class="fab fa-facebook-f"></i></a></li>
                         </ul>
                 </div>
             </div>
             <div class="col-md-4 menu-foot">
                 <h4>Menu</h4>
                 <ul>
                     <li><a href="{{route('home')}}">Home</a></li>
                     <li><a href="{{route('about_company')}}">About Us</a></li>
                     <li><a href="{{'services'}}">Services</a></li>
                     <li><a href="{{route('our_blogs')}}">Blogs</a></li>
                     <li><a href="{{route('contact_us')}}">Contacts</a></li>
                 </ul>
             </div>
             <div class="col-md-4 cont-foot">
                 <h4>Contacts</h4>
                 <h5>+876 876 654</h5>
                 <p>454 New Seard St.Antony, Toranto</p>
                 <a href="">sales@smarteyeapps.com</a>
             </div>
         </div>
     </div>
     <div class="copy-right">
         <div class="container">
             <p>2015 © All Rights Reserved | Designed and Developed by <a href="https://www.smarteyeapps.com/">Smarteyeapps.com</a></p>
         </div>
     </div>
     </div>
 </footer>
    
 
 
 
 </body>
 <script src="assets/js/jquery-3.2.1.min.js"></script>
 <script src="assets/js/popper.min.js"></script>
 <script src="assets/js/bootstrap.min.js"></script>
 <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
 <script src="assets/plugins/scroll-nav/js/jquery.easing.min.js"></script>
 <script src="assets/js/script.js"></script>
 
 
 </html>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->

      @include('home.homecss')
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
      @include('home.header')
      </div>
    <!-- about section start -->
    <div class="about_section layout_padding">
        <div class="container-fluid">
           <div class="row">
              <div class="col-md-6">
                 <div class="about_taital_main">
                    <h1 class="about_taital">About Us</h1>
                    <p class="about_text">
                       Welcome to IIUM Futsal, where passion for the sport meets the principles of Shariah compliance. As enthusiasts of futsal, we've crafted a unique platform that not only celebrates the exhilaration of the game but also ensures adherence to Islamic values. Our commitment to Shariah compliance extends beyond the pitch, creating an inclusive and respectful environment for players and fans alike.
                       Join us in embracing the thrill of futsal while upholding the principles that define our identity as part of the IIUM Futsal community.
                    </p>
                 </div>
              </div>
              <div class="col-md-6 padding_right_0">
                 <div><img src="images/ball.png" class="about_img"></div>
              </div>
           </div>
        </div>
     </div>
     <!-- about section end -->
      @include('home.footer')
   </body>
</html>

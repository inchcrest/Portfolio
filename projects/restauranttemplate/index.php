<?php
    include_once 'php/header.php';
?>

<div id="swampCarousel" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#swampCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#swampCarousel" data-slide-to="1"></li>
    <li data-target="#swampCarousel" data-slide-to="2"></li>
  </ol>


  <div class="carousel-inner">
    <div class="item active">
      <img src="img/beer_carousel_2.jpg" alt="Huge Beer Selection">
      <div class="container">
        <div class="carousel-caption">
            <h1>Dude they have a huge selection of beers!</h1>
            <p>what in the world put something here</p>
            <a href="menu.php" class="btn btn-success btn-lg" role="buton">Menu</a>
        </div>   
      </div>
    </div>
    
    <div class="item">
      <img src="img/live_carousel.jpg" alt="Live Music on Weekends">
      <div class="container">
        <div class="carousel-caption">
            <h1>They got live music too!</h1>
            <p>This band is playing tonight!</p>
            <a href="#" class="btn btn-success btn-lg" role="buton">Events</a>
        </div>   
      </div>
    </div>
    
    <div class="item">
      <img src="img/happyhour_carousel.jpg" alt="Happy Hour 3:30-7 M-F">
      <div class="container">
        <div class="carousel-caption">
            <h1>Monday - Friday!</h1>
            <p>3:30 PM - 7 PM</p>
            <a href="#" class="btn btn-success btn-lg" role="buton">Happy Hour</a>
        </div>   
      </div>
    </div>
  </div>


  <a class="left carousel-control" href="#swampCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#swampCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>

<div class="well text-center">
    <h2>Coming Up @ Swamp</h2>
    <div class="row">
        <div class="col-md-4">
            <h4><b>Saturday</b></h4>
            <h5>Southside Dub - 10:00 PM</h5>
            <h6 class="text-danger">21 and Up</h6>
        </div>
        
        <div class="col-md-4">
            <h4><b>Sunday</b></h4>
            <h5>Frank and the Furters - 8:00 PM</h5>
            <h6 class="text-info">All Ages</h6>            
        </div>
        
        <div class="col-md-4">
            <h4><b>Monday</b></h4>
            <h5>Swamp Poker League - 7:00 PM</h5>
            <h6 class="text-danger">21 and Up</h6>
        </div>        
    </div>

</div>

<hr class="featurette divider">
<div class="row">
    <div class="col-lg-4 text-center">
        <img class="img-rounded" src="img/map_thumb.jpg" alt="Contact Info" style="width: 140px; height: 140px;">
        <h2>Information</h2>
        <p>
            Hours:<br>
            Monday - Friday 3:30 PM - 3:00 AM<br>
            Saturday & Sunday 12:00 PM - 3:00 AM<br>
            <a href="tel:+15616251555">561-625-1555</a>
            <address>9910 Alternate A1A Ste. #7111<br>
                PBG, FL 33410
            </address>
            <a target="_blank" href="https://www.google.com/maps/place/Swampgrass+Willys/@26.822984,-80.083777,17z/data=!4m2!3m1!1s0x88d8d54da146b273:0x69afc0f99606d57">Directions</a>
        </p>
        <p>
            <a href="#" class="btn btn-default" role="button">More</a>
        </p>
    </div>
    
    <div class="col-lg-4 text-center">
        <img class="img-rounded" src="img/biz_thumb.jpg" alt="20% off in the biz" style="width: 140px; height: 140px;">
        <h2>In the Biz?</h2>
        <p>
            If you're in the Biz, enjoy 20% off of your tab
        </p>
        <p>
            <a href="#" class="btn btn-default" role="button">More</a>
        </p>
    </div>

    <div class="col-lg-4 text-center">
        <img class="img-rounded" src="img/email_thumb.jpg" alt="Email List" style="width: 140px; height: 140px;">
        <h2>Get Informed</h2>
        <p>
            Join our email list to stay informed of events, current promotions, and coupons<br>
        </p>
        <p>
            <a href="#" class="btn btn-default" role="button">Join</a>
        </p>
    </div>

</div>




<?php
    include_once 'php/footer.php';
?>
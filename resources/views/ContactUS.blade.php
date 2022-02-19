<!DOCTYPE html>
<html lang="en">
@include('includes/header')
<body>
@include('includes/nav')
<div id="slider-wrap">
        <div id="slider" class="carousel slide inner" data-ride="carousel" data-interval="3000"
            data-pause="false">
            <div class="carousel-inner">
                <div class="item active">
                  <div id="map"></div>
                  <script>
                      function intMap()
                      {
                          var location={lat:22.691591643374515,lng:75.85773534414524};
                          var map=new google.maps.Map(document.getElementById('map')
                          ,{zoom:4,center:location});
                      }
                      </script>
                    <div id="map-canvas">
                    </div>
                    <a href="#" id="showall">Show All</a>
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#slider" data-slide-to="0"></li>
            </ol>
            <div class="clearfix">
            </div>
        </div>
    </div>
    <div id="PageContent" class="pad30">
        <div class="container">
            <h1 class="section-head">Contact Us</h1>
            <div class="row">
                <div class="address-wrap">
                    <div class="col-sm-4 address" id="address1" data-lat="22.6893158" data-long="75.863486">
                        <div class="address-inner">
                            <h4>AHUJA AUTO ABHIKARAN</h4>
                            <h5>Workshop</h5>
                            <p class="the-address">
                                Ahuja Auto Abhikaran<br />
                                    70/1 Pipliya Rao, A-1<br />
                                    Vishnupuri, Near Ahuja TVS,<br />
                                    Bhawarkuran A.B Road, Indore 
                            </p>
                            <p>
                                Contact: <a href="tel:+917611115611">+91 9174565656</a>
                             
                               
                            </p>
                            <p>
                                Email: <a href="mailto:crmahujamcs56@gmail.com">crmahujamcs56@gmail.com</a>
                            </p>
                            <a class="h6 directions">Get Direction</a> <a class="h6 map">View on Map</a>

                         
                        </div>
                    </div>

                    
                    <div class="clearfix">
                    </div>

                </div>
                
                    <br />
                </div>
            </div>
        </div>
    </div>
@include('includes/reachus')
@include('includes/footer')    
</body>
</html>
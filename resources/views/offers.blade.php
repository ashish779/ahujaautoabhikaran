<!DOCTYPE html>
<html lang="en">
@include('includes/header')
<body>
@include('includes/nav')
<div id="slider-wrap">
        <div id="slider" class="carousel slide inner" data-ride="carousel" data-interval="0"
            data-pause="false">
            <div class="carousel-inner">
                <div class="item active">
                    <img data-desktop-src="{{ asset('public/images//Offers.jpg') }}" data-mobile-src="{{ asset('public/images/Offers.jpg') }}" alt="">
                </div>
            </div>
            <div class="carousel-navigation">
                <a class="left carousel-control" href="#slider" role="button" data-slide="prev"><span
                    class="glyphicon glyphicon-chevron-left icon-left-open-big" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span> </a><a class="right carousel-control" href="#slider"
                        role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right icon-right-open-big"
                            aria-hidden="true"></span><span class="sr-only">Next</span> </a>
            </div>
            <div class="clearfix">
            </div>
        </div>
    </div>
    <div id="PageContent" class="offers pad30">
        <div class="container">
            <h1 class="section-head">Offers</h1>
            <div class="offer">
                <div class="offer-image col-sm-6">
                    <img src="{{ asset('public/images/offer-1.jpg')}}" />
                </div>
                <div class="offer-content col-sm-6">
                    <h5>Get Exciting Offers & Discount


</h5>

                </div>
                <div class="clearfix">
                </div>
            </div>
           
        </div>
        <script src="{{asset('public/js/moment.js')}}" type="text/javascript"></script>
        <div class="call-script" data-script="bootstrap-datetimepicker.min.js?&callback=datetime">
        </div>
    </div>
    @include('includes/reachus')
@include('includes/footer')    
</body>
</html>
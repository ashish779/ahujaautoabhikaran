<!DOCTYPE html>
<html lang="en">
@include('includes/header')
<body>
@include('includes/nav')
<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="0CC1FC85" />
</div>
            
    <div id="slider-wrap" class="container">
        <div id="slider" class="carousel slide inner row" data-ride="carousel" data-interval="0"
            data-pause="false">
            <div class="carousel-inner">
                <div class="item active">
                    <img data-desktop-src="{{asset('public/images/assistance.jpg')}}" data-mobile-src="{{asset('public/images/assistance.jpg')}}" alt="">
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
            <h1 class="section-head">Road side Assistance</h1>
            <p>
                Ahuja Auto Abhikaran Road Side Assistance Programme is a 24x7 emergency support provided in the event of any mechanical or electrical breakdown 
and or traffic accident of a vehicle. It is an initiative to increase our focus on the customers. The Road Side Assistance Program was launched with the aim 
of providing emergency road side assistance services round the clock to ensure a pleasurable and uninterrupted journey virtually anywhere in India. 
The program is designed to enhance the customer ownership experience and ensure that customers get immediate and hassle free service in the event 
of any car breakdown.
            </p>
            <h2>Benefits of Road Side Assistance</h2>
            <ul>
                <li><strong>Break Down/Accident :</strong>  Roadside repair or vehicle recovery in case of breakdown/road traffic accident.</li>
                <li><strong>Tire Related:</strong>  Tire punctures-replacement of punctured tire with the spare tire.</li>
                <li><strong>Battery Related:</strong>  Dead battery-jump start.</li>
                <li><strong>Key Related:</strong>  Locked keys, lost keys or broken vehicle keys.</li>
                <li><strong>Fuel Related:</strong>  Out of fuel, incorrect fuel or contaminated fuel.
                </li>
            </ul>
            <style>
                .assist {
                    margin: 30px 0;
                }

                .asist-no {
                    margin: 0;
                    background: #e41c39;
                    padding: 20px;
                    border-radius: 5px;
                    color: #fff;
                    font-size: 25px;
                    text-align: center;
                }
            </style>
            <div class="assist">
                <p class="asist-no">
                    Our Road Side Assistance number is : 1800 102 4241
                </p>
            </div>
        </div>
        <script src="js/moment.js" type="text/javascript"></script>
        <div class="call-script" data-script="bootstrap-datetimepicker.min.js?&callback=datetime">
        </div>
    </div>


    @include('includes/reachus')
@include('includes/footer')    
</body>
</html>
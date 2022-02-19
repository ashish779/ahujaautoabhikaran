<div class="wrapper">
        <div id="Home">

            <div id="header-wrap">
                <div id="header">
                    <div id="logo-wrapper">
                        

                        <div class=" mainheader">

                            <div class="logo pull-left text-center">
                                <a href="index.aspx" class="hidden-xs hidden-sm">
                                    <img src="{{asset('public/images/logo.png')}}" /></a>
                                <a href="index.aspx" class="visible-xs visible-sm">
                                    <img src="{{asset('public/images/logo-mobile.png')}}" /></a>
                            </div>
                            <div class="mobile-wrap">

                                <h1>Ahuja Auto Abhikaran</h1>
                                <div class="topContacts hidden-xs hidden-sm hidden-md">
                                    <div class="contactnumber">
                                        
                                        <span class="hidden-xs hidden-md">&nbsp;</span> <a href="tel:+919174565656"><span class="">Workshop: 9174565656</span></a>
                                    </div>
                                </div>
                                <div class="visible-xs visible-sm visible-md mobilehead">
                                    <span class="mobile-toggle">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#MainMenu, .wrapper">
                                            <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                                        </button>
                                    </span>
                                    
                                    <div class=" col-xs-5 col-sm-1 col-md-12 text-right">
                                        <a class="headnumber" href="tel:+91 9174565656"><i class="fa fa-phone"></i>Call</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="navbar-header desktophead">
                                    <nav class="navbar" role="navigation">
                                        <div class="collapse navbar-collapse" id="MainMenu">
                                            <ul class="nav navbar-nav hidden-xs hidden-sm desktopmenu">

                                                <li ><a href="{{url('index')}}">Book Service</a></li>
                                                <li ><a href="{{url('insurance')}}">Insurance</a></li>
                                                <li ><a href="{{url('offers')}}" >Offers</a></li>
                                                <li ><a href="{{url('onlinepayement')}}">Online Payment</a></li>
                                                <li ><a href="{{url('AboutUS')}}">About Us</a></li>
                                                <li ><a href="{{url('ContactUS')}}">Contact Us</a></li>
                                            </ul>
                                            <ul class="nav navbar-nav mobilemenu visible-xs visible-sm">
                                                <li><a href="who-we-are.aspx">
                                                    <img src="{{asset('public/images/aboutus.png')}}" /><span>About</span></a></li>
                                                <li><a href="index.aspx">
                                                    <img src="{{asset('public/images/serviceappointment.png')}}" /><span>Book Service</span></a></li>
                                                <li><a href="insurance.aspx">
                                                    <img src="{{asset('public/images/insurance.png')}}" /><span>Insurance</span></a></li>
                                                <li><a href="make-online-payment.aspx">
                                                    <img src="{{asset('public/images/payment.png')}}" /><span>Online Payment</span></a></li>
                                                <li><a href="offers.aspx">
                                                    <img src="{{asset('public/images/offers.png')}}" /><span>Offers</span></a></li>
                                                <li><a href="locate-us.aspx">
                                                    <img src="{{asset('public/images/contactus.png')}}" /><span>Contact</span></a></li>

                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
      <script>
  $("#navi a").live("click", function(){
  $("#navi a").removeClass("active");
  $(this).addClass("active")
});

   </script>
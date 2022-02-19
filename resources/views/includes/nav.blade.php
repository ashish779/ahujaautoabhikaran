<div id="Home">

            <div id="header-wrap">
                <div id="header">
                    <div id="logo-wrapper">
                        

                        <div class=" mainheader">

                            <div class="logo pull-left text-center">
                                <a href="index" class="hidden-xs hidden-sm">
                                    <img src="{{ asset('public/images/logo.png') }}" /></a>
                                <a href="index" class="visible-xs visible-sm">
                                    <img src="{{ asset('public/images/logo-mobile.png') }}" /></a>
                            </div>
                            <div class="mobile-wrap">

                                <h1>Ahuja Auto Abhikaran</h1>
                                <div class="topContacts hidden-xs hidden-sm hidden-md">
                                    <div class="contactnumber">
                                        
                                        <span class="hidden-xs hidden-md">&nbsp;</span> <a href="tel:+917611115611"><span class="">Workshop: 7611115611</span></a>
                                    </div>
                                </div>
                                <div class="visible-xs visible-sm visible-md mobilehead">
                                    <span class="mobile-toggle">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#MainMenu, .wrapper">
                                            <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                                        </button>
                                    </span>
                                    
                                    <div class=" col-xs-5 col-sm-1 col-md-12 text-right">
                                        <a class="headnumber" href="tel:+91 7611115611"><i class="fa fa-phone"></i>Call</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="navbar-header desktophead">
                                    <nav class="navbar" role="navigation">
                                        <div class="collapse navbar-collapse" id="MainMenu">
                                            <ul class="nav navbar-nav hidden-xs hidden-sm desktopmenu">

                                                <li class="{{ Request::segment(1) == '' ? 'active' : Request::segment(1) === 'index' ? 'active' : null }}">
                                                    <a href="{{ Request::segment(1) == '' ? '#BookAServiceAppointmentForm' : Request::segment(1) === 'index' ? '#BookAServiceAppointmentForm' : 'index#BookAServiceAppointmentForm' }}">Book Service</a></li>
                                                <li class="{{ Request::segment(1) === 'insurance' ? 'active' : null }}"><a href="insurance">Insurance</a></li>
                                                <li class="{{ Request::segment(1) === 'offers' ? 'active' : null }}"><a href="offers">Offers</a></li>
                                                <li class="{{ Request::segment(1) === 'make-online-payment' ? 'active' : null }}"><a href="make-online-payment">Online Payment</a></li>
                                                <li class="{{ Request::segment(1) === 'who-we-are' ? 'active' : null }}"><a href="who-we-are">About Us</a></li>
                                                <li class="{{ Request::segment(1) === 'locate-us' ? 'active' : null }}"><a href="locate-us">Contact Us</a></li>
                                            </ul>
                                            <ul class="nav navbar-nav mobilemenu visible-xs visible-sm">
                                                <li><a href="who-we-are">
                                                    <img src="{{ asset('public/images/mobilemenu/aboutus.png') }}" /><span>About</span></a></li>
                                                <li><a href="index">
                                                    <img src="{{ asset('public/images/mobilemenu/serviceappointment.png') }}" /><span>Book Service</span></a></li>
                                                <li><a href="insurance">
                                                    <img src="{{ asset('public/images/mobilemenu/insurance.png') }}" /><span>Insurance</span></a></li>
                                                <li><a href="make-online-payment">
                                                    <img src="{{ asset('public/images/mobilemenu/payment.png') }}" /><span>Online Payment</span></a></li>
                                                <li><a href="offers">
                                                    <img src="{{ asset('public/images/mobilemenu/offers.png') }}" /><span>Offers</span></a></li>
                                                <li><a href="locate-us">
                                                    <img src="{{ asset('public/images/mobilemenu/contactus.png') }}" /><span>Contact</span></a></li>

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
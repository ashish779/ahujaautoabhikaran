
<!DOCTYPE html>
<html lang="en">
@include('includes/header')
<body>
@include('includes/nav')
<div id="slider-wrap">
        <div id="slider" class="carousel slide" data-ride="carousel" data-interval="3000"
            data-pause="false">
            <div class="carousel-inner">
                <div class="item">
                    <img data-mobile-src="{{asset('public/images/s1.jpg')}}" data-desktop-src="{{asset('public/images/s1.jpg')}}"
                        alt="">
                    <div class="container">
                    </div>
                </div>
                <div class="item">
                    <img data-mobile-src="{{asset('public/images/s2.jpg')}}" data-desktop-src="{{asset('public/images/s2.jpg')}}"
                        alt="">
                    <div class="container">
                    </div>
                </div>
                <div class="item">
                    <img data-mobile-src="{{asset('public/images/s3.jpg')}}" data-desktop-src="{{asset('public/images/s3.jpg')}}"
                        alt="">
                    <div class="container">
                    </div>
                </div>
                <div class="item">
                    <img data-mobile-src="{{asset('public/images/s4.jpg')}}" data-desktop-src="{{asset('public/images/s4.jpg')}}"
                        alt="">
                    <div class="container">
                    </div>
                </div>
                <div class="item">
                    <img data-mobile-src="{{asset('public/images/s5.jpg')}}"data-desktop-src="{{asset('public/images/s5.jpg')}}"
                        alt="">
                    <div class="container">
                    </div>
                </div>
                <div class="item active">
                    <img data-mobile-src="{{asset('public/images/s6.jpg')}}" data-desktop-src="{{asset('public/images/s6.jpg')}}"
                        alt="">
                    <div class="container">
                    </div>
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
    <div id="call-to-action" class="upper section pad30">
        <div class="container">
            <h1 class="section-head">
                What are you looking out for?</h1>
            <div class="actions text-center">
                <a href="#BookAServiceAppointmentForm" class="col-md-3 col-sm-6 action">
                    <div class="row">
                        <div class="gateway-image col-md-12 col-xs-3">
                            <img src="{{asset('public/images/bs.png')}}" />
                        </div>
                        <h5 class="action-text col-md-12 col-xs-9">
                            Book <span class="visible-md visible-lg">
                                <br />
                            </span>Service</h5>
                    </div>
                </a><a href="{{url('insurance')}}" class="col-md-3 col-sm-6 action">
                    <div class="row">
                        <div class="gateway-image col-md-12 col-xs-3">
                            <img src="{{asset('public/images/ins.png')}}" />
                        </div>
                        <h5 class="action-text col-md-12 col-xs-9">
                            Buy or Renew <span class="visible-md visible-lg">
                                <br />
                            </span>Insurance</h5>
                    </div>
                </a><a href="{{url('offers')}}" class="col-md-3 col-sm-6 action">
                    <div class="row">
                        <div class="gateway-image col-md-12 col-xs-3">
                            <img src="{{ asset('public/images/op.png') }}" />
                        </div>
                        <h5 class="action-text col-md-12 col-xs-9">
                            Offers</h5>
                    </div>
                </a><a href="{{url('Roadside')}}" class="col-md-3 col-sm-6 action">
                    <div class="row">
                        <div class="gateway-image col-md-12 col-xs-3">
                            <img src="{{asset('public/images/ra.png')}}" />
                        </div>
                        <h5 class="action-text col-md-12 col-xs-9">
                            Roadside <span class="visible-md visible-lg">
                                <br />
                            </span>Assistance</h5>
                    </div>
                </a><a href="{{url('onlinepayement')}}" class="col-md-3 col-sm-6 action">
                    <div class="row">
                        <div class="gateway-image col-md-12 col-xs-3">
                            <img src="{{asset('public/images/op.png')}}" />
                        </div>
                        <h5 class="action-text col-md-12 col-xs-9">
                            Online <span class="visible-md visible-lg">
                                <br />
                            </span>Payment</h5>
                    </div>
                </a>
                <div class="clearfix">
                </div>
            </div>
        </div>
    </div>
    <div id="BookAServiceAppointmentForm">
        <div class="container">
            <div class="col-md-7 form-wrap">
                <h1 class="section-head">
                    Book Your Service</h1>
                    <form method="post" action="BookserviceController">
                <div class="row">
                    <div class="form">
                        <p>
                            <span id="ctl00_ContentPlaceHolder1_lblMessage" class="successMsg"></span>
                        </p>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input name="Name" type="text" id="ctl00_ContentPlaceHolder1_txtName" class="form-control" placeholder="Name" />
                                    <span id="ctl00_ContentPlaceHolder1_rfvName" class="text-danger" style="display:none;">Please specify name</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input name="ContactNo" type="text" id="ctl00_ContentPlaceHolder1_txtContactNo" class="form-control" placeholder="Contact No" />
                                    <span id="ctl00_ContentPlaceHolder1_rfvContactNo" class="text-danger" style="display:none;">Please specify contact no.</span>
                                    <span id="ctl00_ContentPlaceHolder1_revTelno" class="text-danger" style="display:none;">Please specify valid contact no.</span>
                                </div>
                            </div>
                            
                            <div class="col-sm-12">
                                    <input name="vehicalnumber" type="text" id="ctl00_ContentPlaceHolder1_txtName" class="form-control" placeholder="Add vehicle number " />
                                    <span id="ctl00_ContentPlaceHolder1_rfvName" class="text-danger" style="display:none;">Please specify name</span>
                                </div>
                                <br><br>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input name="ctl00$ContentPlaceHolder1$txtEmail" type="text" id="ctl00_ContentPlaceHolder1_txtEmail" class="form-control" placeholder="Email Id" />
                                   
                                    <span id="ctl00_ContentPlaceHolder1_rfvEmailId" class="text-danger" style="display:none;">Please specify email id.</span>
                                    <span id="ctl00_ContentPlaceHolder1_revEmailId" class="text-danger" style="display:none;">Please enter valid email address</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group hide">
                                <div class="col-sm-12">
                                    <select name="ctl00$ContentPlaceHolder1$ddlLocation" id="ctl00_ContentPlaceHolder1_ddlLocation" class="form-control">
	<option value="Indore">Indore</option>

</select>
                                    <span id="ctl00_ContentPlaceHolder1_rfvCity" class="text-danger" style="display:none;">Please select location</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <select name="car" id="ctl00_ContentPlaceHolder1_ddlModel" class="form-control ddModel">
	<option value="-1" ModelID="-1">Select Car</option>
	<option value="Mahindra-TUV-300-Plus" ModelID="6">Mahindra TUV 300 Plus</option>
	<option value="Mahindra-Nuvo-Sport" ModelID="7">Mahindra Nuvo Sport</option>
	<option value="Mahindra-Bolero" ModelID="8">Mahindra Bolero</option>
	<option value="Mahindra-Bolero-Power-+" ModelID="9">Mahindra Bolero Power +</option>
	<option value="Mahindra-Thar" ModelID="10">Mahindra Thar</option>
	<option value="Mahindra-TUV-300" ModelID="11">Mahindra TUV 300</option>
	<option value="Mahindra-Verito-Vibe" ModelID="12">Mahindra Verito Vibe</option>
	<option value="The-Plush-New-XUV-500" ModelID="13">The Plush New XUV 500</option>
	<option value="Mahindra-Xylo" ModelID="14">Mahindra Xylo</option>
	<option value="Mahindra-Verito" ModelID="15">Mahindra Verito</option>
	<option value="Mahindra-Scorpio" ModelID="16">Mahindra Scorpio</option>
	<option value="Mahindra-KUV-100-NXT" ModelID="17">Mahindra KUV 100 NXT</option>

</select>
                                    <span id="ctl00_ContentPlaceHolder1_rfvCars" class="text-danger" style="display:none;">Please select car</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="hidden" name="ctl00$ContentPlaceHolder1$hdfVariant" id="ctl00_ContentPlaceHolder1_hdfVariant" />
                                    <select name="Variants" id="ctl00_ContentPlaceHolder1_ddlVariants" class="form-control ddlVariants">
	<option value="-1">Select Variant</option>

</select>
                                    <span id="ctl00_ContentPlaceHolder1_rfvVariant" class="text-danger" style="display:none;">Please select variant</span>
                                </div>
                            </div>
                            
                            <div class="col-sm-8">
                                <input type="submit" name="ctl00$ContentPlaceHolder1$btnSubmit" value="Submit" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$btnSubmit&quot;, &quot;&quot;, true, &quot;ValidateBookService&quot;, &quot;&quot;, false, false))" id="ctl00_ContentPlaceHolder1_btnSubmit" class="btn btn-mahindra col-md-6" />
                            </div>
                            <div class="clearfix">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</form>
            <div class="col-sm-5">
                <img src="{{ asset('public/images/bolero.jpg') }}" draggable="false" unselectable="on">
            </div>
        </div>
    </div>
    <div id="latest-updates">
        <div class="container">
            <h1 class="section-head">
                Latest Updates</h1>
            <div class="row" id="latestUpdatesRow">
                <div class="col-md-4 col-sm-6">
                    <div class="sub">
                        <h4>
                            Social</h4>
                        <div class="action-image">
                            <img src="{{ asset('public/images/social.jpg') }}" draggable="false" unselectable="on">
                        </div>
                        <div class="socialdata">
                            <div class="social-header">
                                <a href="https://www.facebook.com/TVSAHUJA/
" target="_blank"><i class="fa fa-facebook-official"></i>&nbsp;Ahuja Auto Abhikaran</a> <span>
    15 days ago</span>
                            </div>
                            <p>
                                Check out one of the biggest blockbusters of the last 5 years! From the way it was
                                scripted to its high-decibel release. From its power-packed performance to the amazing
                                sequel. No it is not a movie but one of India’s most loved SUVs – the #XUV500.
                            </p>
                        </div>
                        <div class="clearfix">
                        </div>
                    </div>
                    <div class="button">
                        <a href="https://www.facebook.com/TVSAHUJA/
" target="_blank" class="h3 btn btn-mahindra">View More <i class="fa fa-angle-right">
</i></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="sub">
                        <h4>
                            Offers</h4>
                        <img src="{{asset('public/images/offers.jpg')}}" />
                        <h3>
                            TUV 300 - Tough outside. Refined on the inside.</h3>
                        <div class="details">
                            Get Assured gift on test drive.
                        </div>
                    </div>
                    <div class="clearfix">
                    </div>
                    <div class="button">
                        <a href="{{url('offers')}}" target="_blank" class="h3 btn btn-mahindra">Know More <i class="fa fa-chevron-right">
                        </i></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0">
                    <div class="sub">
                        <h4>
                            Videos</h4>
                        
                        <div class="videos">
							<video width="360" controls="">
							  <source src="{{asset('public/video/vid-01.mp4')}}" type="video/mp4">
							Your browser does not support the video tag.
							</video>
                            
                        </div>
                        <h3>
                            Watch the latest videos and TVCs</h3>
                    </div>
                    <div class="clearfix">
                    </div>
                    <div class="button">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

        

                            

   @include('includes/reachus')     
@include('includes/footer')    
</body>
</html>
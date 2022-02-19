@extends('main')

@section('title', '| Authorized Mahindra Dealership')

@section('style')

@endsection

@section('content')
<div id="slider-wrap">
    <div id="slider" class="carousel slide" data-ride="carousel" data-interval="3000"
    data-pause="false">
    <div class="carousel-inner">
        <div class="item">
            <img data-mobile-src="{{ asset('public/images/slider/mobile/s1.jpg') }}" data-desktop-src="{{ asset('public/images/slider/s1.jpg') }}"
            alt="">
            <div class="container">
            </div>
        </div>
        <div class="item">
            <img data-mobile-src="{{ asset('public/images/slider/mobile/s2.jpg') }}" data-desktop-src="{{ asset('public/images/slider/s2.jpg') }}"
            alt="">
            <div class="container">
            </div>
        </div>
        <div class="item">
            <img data-mobile-src="{{ asset('public/images/slider/mobile/s3.jpg') }}" data-desktop-src="{{ asset('public/images/slider/s3.jpg') }}"
            alt="">
            <div class="container">
            </div>
        </div>
        <div class="item">
            <img data-mobile-src="{{ asset('public/images/slider/mobile/s4.jpg') }}" data-desktop-src="{{ asset('public/images/slider/s4.jpg') }}"
            alt="">
            <div class="container">
            </div>
        </div>
        <div class="item">
            <img data-mobile-src="{{ asset('public/images/slider/mobile/s5.jpg') }}" data-desktop-src="{{ asset('public/images/slider/s5.jpg') }}"
            alt="">
            <div class="container">
            </div>
        </div>
        <div class="item active">
            <img data-mobile-src="{{ asset('public/images/slider/mobile/s6.jpg') }}" data-desktop-src="{{ asset('public/images/slider/s6.jpg') }}"
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
            <a href="index#BookAServiceAppointmentForm" class="col-md-3 col-sm-6 action">
                <div class="row">
                    <div class="gateway-image col-md-12 col-xs-3">
                        <img src="{{ asset('public/images/gateways/bs.png') }}" />
                    </div>
                    <h5 class="action-text col-md-12 col-xs-9">
                        Book <span class="visible-md visible-lg">
                            <br />
                        </span>Service</h5>
                    </div>
                </a><a href="insurance" class="col-md-3 col-sm-6 action">
                    <div class="row">
                        <div class="gateway-image col-md-12 col-xs-3">
                            <img src="{{ asset('public/images/gateways/ins.png') }}" />
                        </div>
                        <h5 class="action-text col-md-12 col-xs-9">
                            Buy or Renew <span class="visible-md visible-lg">
                                <br />
                            </span>Insurance</h5>
                        </div>
                    </a><a href="offers" class="col-md-3 col-sm-6 action">
                        <div class="row">
                            <div class="gateway-image col-md-12 col-xs-3">
                                <img src="{{ asset('public/images/gateways/offers.png') }}" />
                            </div>
                            <h5 class="action-text col-md-12 col-xs-9">
                            Offers</h5>
                        </div>
                    </a><a href="road-side-assistance" class="col-md-3 col-sm-6 action">
                        <div class="row">
                            <div class="gateway-image col-md-12 col-xs-3">
                                <img src="{{ asset('public/images/gateways/ra.png') }}" />
                            </div>
                            <h5 class="action-text col-md-12 col-xs-9">
                                Roadside <span class="visible-md visible-lg">
                                    <br />
                                </span>Assistance</h5>
                            </div>
                        </a><a href="make-online-payment" class="col-md-3 col-sm-6 action">
                            <div class="row">
                                <div class="gateway-image col-md-12 col-xs-3">
                                    <img src="{{ asset('public/images/gateways/op.png') }}" />
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

                <script type="text/javascript">

                    var car_arr = new Array("Mahindra-TUV-300-Plus", "Mahindra-Nuvo-Sport", "Mahindra-Bolero", "Mahindra-Bolero-Power-+", "Mahindra-Thar", "Mahindra-TUV-300", "Mahindra-Verito-Vibe", "The-Plush-New-XUV-500", "Mahindra-Xylo", "Mahindra-Verito", "Mahindra-Scorpio", "Mahindra-KUV-100-NXT");

                    var s_a = new Array();
                    s_a[0]=null;
                    s_a[1]="TUV 300 Plus";
                    s_a[2]="Nuvo Sport";
                    s_a[3]="Bolero";
                    s_a[4]="Bolero Power +";
                    s_a[5]="Thar";
                    s_a[6]="TUV 300";
                    s_a[7]="Verito Vibe";
                    s_a[8]="XUV 500";
                    s_a[9]="Xylo";
                    s_a[10]="Verito";
                    s_a[11]="Scorpio";
                    s_a[12]="KUV 100 NXT";

                    function print_car(car_id){
            // given the id of the <select> tag as function argument, it inserts <option> tags
            var option_str = document.getElementById(car_id);
            option_str.length=0;
            option_str.options[0] = new Option('Select Car','');
            option_str.selectedIndex = 0;
            for (var i=0; i<car_arr.length; i++) {
                option_str.options[option_str.length] = new Option(car_arr[i],i);
            }
            
            // var selectedImage = document.myForm.car.options[document.myForm.car.selectedIndex].value;
            // document.carimg.src = imageList[selectedImage].src;
        }

        function print_variant(variant_id, variant_index){
            var option_str = document.getElementById(variant_id);
    option_str.length=0;    // Fixed by Julian Woods
    option_str.options[0] = new Option('Select Variant','');
    // option_str.selectedIndex = 0;
    var variant_arr = s_a[variant_index].split("|");
    for (var i=0; i<variant_arr.length; i++) {
        option_str.options[option_str.length] = new Option(variant_arr[i],variant_arr[i]);
    }
}

</script>
<div id="BookAServiceAppointmentForm">
    <div class="container">
        <div class="col-md-7 form-wrap">
            <h1 class="section-head">
            Book Your Service</h1>
            <div class="row">
                <div class="form">
                    <p>
                        <span id="successMsgForServiceAppointment" class="successMsg" style="color:green;"></span>
                    </p>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input name="name" type="text" id="name" class="form-control" placeholder="Name" />
                                <span id="nameErr" class="text-danger" style="display:none;">Please specify name</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input name="contact" type="text" id="contact" class="form-control" placeholder="Contact No" maxlength="10" />
                                <span id="contactErr" class="text-danger" style="display:none;">Please specify valid contact no.</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input name="email" type="text" id="email" class="form-control" placeholder="Email Id" />
                                <span id="emailErr" class="text-danger" style="display:none;">Please enter valid email address</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input name="vehicle_number" type="text" id="vehicle_number" class="form-control" placeholder="Vehicle Number" />
                                <span id="vehicle_numberErr" class="text-danger" style="display:none;">Please enter valid Vehicle Number</span>
                            </div>
                        </div>
                        <div class="form-group hide">
                            <div class="col-sm-12">
                                <select name="location" id="location" class="form-control">
                                    <option value="Indore">Indore</option>
                                </select>
                                <span id="locationErr" class="text-danger" style="display:none;">Please select location</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <select name="carModel" onchange="print_variant('variant', this.selectedIndex);" id="carModel" class="form-control ddModel">
                                   <option value="" ModelID="-1">Select Car</option>
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
                               <span id="carModelErr" class="text-danger" style="display:none;">Please select car</span>
                           </div>
                       </div>
                       <div class="form-group">
                        <div class="col-sm-12">
                            <select id="variant" name="variant" class="form-control" required>
                                <option value="" ModelID="-1">Select Variant</option>
                            </select>
                            <script language="javascript">print_car("car");</script>
                            <span id="variantErr" class="text-danger" style="display:none;">Please select variant</span>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <input type="submit" name="submitServiceAppointmentForm" value="Submit" id="submitServiceAppointmentForm" class="btn btn-mahindra col-md-6" />
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-5">
        <img src="{{ asset('public/images/models/bolero.jpg') }}" draggable="false" unselectable="on">
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
                        <img src="{{ asset('public/images/home/social.jpg') }}" draggable="false" unselectable="on">
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
                    <img src="{{ asset('public/images/home/offers.jpg') }}" />
                    <h3>
                    TUV 300 - Tough outside. Refined on the inside.</h3>
                    <div class="details">
                        Get Assured gift on test drive.
                    </div>
                </div>
                <div class="clearfix">
                </div>
                <div class="button">
                    <a href="offers" target="_blank" class="h3 btn btn-mahindra">Know More <i class="fa fa-chevron-right">
                    </i></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0">
                <div class="sub">
                    <h4>
                    Videos</h4>

                    <div class="videos">
                        <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/Ez2IbQULlzk?rel=0&amp;showinfo=0"
                        frameborder="0" allowfullscreen></iframe>
                    </div>
                    <h3>
                    Watch the latest videos and TVCs</h3>
                </div>
                <div class="clearfix">
                </div>
                <div class="button">
                    <a href="https://youtu.be/Ez2IbQULlzk
                    " target="_blank" class=" h3 btn btn-mahindra">WATCH VIDEO <i class="fa fa-chevron-right">
                    </i></a>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{ asset('public/js/jquery-2.1.1.min.js') }}" type="text/javascript"></script>
<script>
    $(document).ready(function(){
        $("#submitServiceAppointmentForm").on('click', function(){

            url = "{{URL::to('/submitServiceAppointment')}}";
            name = $("#name").val();
            email = $("#email").val();
            contact = $("#contact").val();
            locationdd = $("#location").val();
            vehicle_number = $("#vehicle_number").val();
            carModel = $("#carModel").val();
            variant = $("#variant").val();

            if(name=='' || contact=='' || email=='' || carModel=='' || variant==''){
                $("#nameErr,#emailErr,#contactErr,#locationErr,#carModelErr,#variantErr").show();
                return false;
            }

            var regex = /^[A-Z]{2}[ -]{0,1}[0-9]{2}[ -]{0,1}[A-Z]{1,2}[ -]{0,1}[0-9]{1,4}$/;
            if (regex.test(vehicle_number)) {
                $("#vehicle_numberErr").hide();
            }
            else {
                $("#vehicle_numberErr").show();
                return false;
            }

            if(name!='' && name!=null && name.length>2){
                $("#nameErr").hide();
            }
            if(email!='' && emailValid(email)==true){
                $("#emailErr").hide();
            }
            if(contact!='' && contact.length>=10 && contact.length<=13){
                $("#contactErr").hide();
            }
            if(carModel!='' && carModel!=null){
                $("#carModelErr").hide();
            }
            if(variant!='' && variant!=null){
                $("#variantErr").hide();
            }
            

            data = {name:name,email:email,contact:contact,location:locationdd,vehicle_number:vehicle_number,carModel:carModel, variant:variant, '_token':'{{ csrf_token() }}'};
            $.ajax({
                url: url,
                type:'POST',
                data: data,
                dataType: "JSON",
                success:function(response){
                    if(response.status=='success'){
                        $("#nameErr,#emailErr,#contactNoErr,#carModelErr,#variantErr").hide();
                        $("#name, #email, #contact, #carModel, #variant").val("");
                        $("#successMsgForServiceAppointment").html('Thank you for sending an enquiry. We will get in touch with you soon.').show();
                    }else{
                        alert(response.status+":"+response.message);
                    }
                }
            });
        });

        function emailValid(email){
            atpos = email.indexOf("@");
            dotpos = email.lastIndexOf(".");
            if(atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length){
                return false;
            }
            return true;
        }

    });
</script>   
@endsection
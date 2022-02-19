<div id="Contact" class="section">
    <div class="container">
        <h1 class="section-head">Reach Us</h1>
        <div class="row" id="contactRow">
            <div class="col-xs-12 col-md-6 no-border footer-enquire-form">
                <div class="no-border slider-form">
                    <div class="form-group">
                        <span id="successMsgForEnquiry" class="successMsg" style="color:green;"></span>
                    </div>
                    <div class="form-group">
                        <input name="enquiryName" type="text" id="enquiryName" class="flat form-control" placeholder="Name" />
                        <span id="enquiryNameErr" class="text-danger" style="display:none;">Please specify Name</span>
                    </div>
                    <div class="form-group">
                        <input name="enquiryContact" type="text" id="enquiryContact" class="flat form-control" MinLength="10" placeholder="Phone Number" maxlength="10" />
                        <span id="enquiryContactErr" class="text-danger" style="display:none;">Please specify valid phone</span>
                    </div>
                    <div class="form-group">
                        <input name="enquiryEmail" type="text" id="enquiryEmail" class="flat form-control" placeholder="Email" />
                        <span id="enquiryEmailErr" class="text-danger" style="display:none;">Please enter valid email address</span>
                    </div>
                    <div class="form-group">
                        <textarea name="enquiryMessage" rows="2" cols="20" id="enquiryMessage" class="flat form-control" placeholder="Your message goes here..."></textarea>
                        <span id="enquiryMessageErr" class="text-danger" style="display:none;">Please specify Message</span>
                    </div>
                    <div>
                        <input type="submit" name="submitEnquiryForm" value="Submit" id="submitEnquiryForm" class="btn btn-mahindra col-xs-12 col-md-5 form-group" />
                        <div class="clearfix">
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>


            </div>

        </div>
    </div>
</div>

<script src="{{ asset('public/js/jquery-2.1.1.min.js') }}" type="text/javascript"></script>
<script>
    $(document).ready(function(){
        $("#submitEnquiryForm").on('click', function(){

            url = "{{URL::to('/submitEnquiry')}}";
            name = $("#enquiryName").val();
            email = $("#enquiryEmail").val();
            contact = $("#enquiryContact").val();
            message = $("#enquiryMessage").val();

            if(name=='' || contact=='' || email=='' || message==''){
                $("#enquiryNameErr,#enquiryEmailErr,#enquiryContactErr,#enquiryMessageErr").show();
                return false;
            }

            if(name!='' && name!=null && name.length>2){
                $("#enquiryNameErr").hide();
            }
            if(email!='' && emailValid(email)==true){
                $("#enquiryEmailErr").hide();
            }
            if(contact!='' && contact.length>=10 && contact.length<=13){
                $("#enquiryContactErr").hide();
            }
            if(message!='' && message!=null){
                $("#enquiryMessageErr").hide();
            }

            data = {name:name,email:email,contact:contact,message:message, '_token':'{{ csrf_token() }}'};
            $.ajax({
                url: url,
                type:'POST',
                data: data,
                dataType: "JSON",
                success:function(response){
                    if(response.status=='success'){
                        $("#enquiryNameErr,#enquiryEmailErr,#enquiryContactErr,#enquiryMessageErr").hide();
                        $("#enquiryName,#enquiryEmail,#enquiryContact,#enquiryMessage").val("");
                        $("#successMsgForEnquiry").html('Thank you for sending an enquiry. We will get in touch with you soon.').show();
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
</div>
<div id="footer" class="section">
    <div class="container dark">
        <div class="">
            <div class="row">
                <div class="col-md-9 upper">
                    <div class="row">
                        <div class="col-sm-4 ">
                            <h5>About Us</h5>
                            <ul>
                                <li><a href="who-we-are">Who We Are</a></li>
                                <li><a href="who-we-are#Showroom">Showroom</a></li>
                            </ul>
                        </div>

                        <div class="col-sm-4">
                            <h5>Buying Tools</h5>
                            <ul>
                                <li><a href="#BookAServiceAppointmentForm">Book Service</a></li>
                                <li><a href="insurance">Buy or Renew Insurance</a></li>
                                <li><a href="Offers">Offers</a></li>
                                <li><a href="road-side-assistance">Roadside Assistance</a></li>
                                <li><a href="make-online-payment">Online Payment</a></li>
                            </ul>
                        </div>

                        <div class="col-sm-4">
                            <h5>
                                <a href="offers">Offers</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 upper ">
                    <h2 class="text-center">Ahuja Auto Abhikaran</h2>

                </div>
                <div class="clearfix">
                </div>
                <div class="clearfix credits">
                    <div class=" col-sm-9">
                        &copy; Ahuja Auto Abhikaran  | <a href="Imprints" target="_blank">Imprints</a> | <a style="font-family: Verdana" href="http://ottoedge.com/"
                        target="_blank">Powered by OTTOEDGE</a>
                    </div>
                    <div class="col-sm-3 text-right">
                        <a href="#" target="_blank">
                            <i class="fa fa-facebook"></i></a>&nbsp;<a href="#" target="_blank">
                                <i class="fa fa-twitter"></i></a>&nbsp;<a href="#" target="_blank">
                                    <i class="fa fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="{{ asset('public/js/bootstrap.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('public/js/script.js') }}" type="text/javascript" id="scripts"></script>
        </body>
        </html>
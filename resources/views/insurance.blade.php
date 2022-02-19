@extends('main')

@section('title', '| Insurance')

@section('style')

@endsection

@section('content')
<div id="slider-wrap">
    <div id="slider" class="carousel slide inner" data-ride="carousel" data-interval="3000"
    data-pause="false">
    <div class="carousel-inner">
        <div class="item active">
            <img data-desktop-src="{{ asset('public/images/banner/insurance.jpg') }}" data-mobile-src="{{ asset('public/images/banner/mobile/insurance.jpg') }}" alt="AHUJA AUTO ABHIKARAN Slide 1">
        </div>
    </div>
    <ol class="carousel-indicators">
        <li data-target="#slider" data-slide-to="0"></li>
    </ol>
    <div class="clearfix">
    </div>
</div>
</div>
<div id="PageContent" class="insurance pad30">
    <div class="container">
        <h1 class="section-head">Insurance</h1>

        <div>
            <h2>Mahindra Assurance
            </h2>
            <p>
                Car insurance policy is mandatory under the Motor Vehicle Act. It ensures that the car owner is protected from financial losses, caused by damage or
                theft to the vehicle and third party liability. With a cashless facility of our workshop & you can avail of cashless claim facility with very limited
                out –of-pocket expenses. To facilitate greater convenience, you can  also renew your motor insurance through us.
            </p>
            <h2>Policy Benefits
            </h2>
            <ul>
                <li>Instant Policy insurance</li>
                <li>No paperwork</li>
                <li>No claim bonus: if you do not make a claim during policy period a no claim bonus (NCB) is offered on renewals.</li>
                <li>Transfer your NCB: you can transfer full benefits of no claim bonus when shift your monitor insurance policy to another company.</li>
                <li>Free renewal reminder services.</li>
                <li>Towing charges up to Rs. 1500 cover.</li>
                <li>Easy-to-follow quote takes only a couple of minutes.</li>
                <li>Transfer your existing No Claim Bonus from any Insurance provider ranging from 20% - 50%</li>

            </ul>
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
<div class="box  bg-grey">
    <div class="row">
        <div class="col-xs-12">
            <h3 class="col-xs-12 red">Insurance Calculator</h3>


            <div class="form-group">
                <span id="successMsgForInsurance" class="successMsg" style="color:green;"></span>
            </div>
            <div class="form-group">
                <label for="Type" class="col-sm-4 control-label">
                Insurance Type</label>
                <div class="col-sm-4">
                    <table id="insuranceType">
                        <tr>
                            <td>
                                <input id="new" type="radio" name="insuranceType" value="New" /><label for="new">&nbsp;&nbsp;New&nbsp;&nbsp;</label>
                            </td>
                            <td>
                                <input id="renew" type="radio" name="insuranceType" value="Renew" /><label for="renew">&nbsp;&nbsp;Renew&nbsp;&nbsp;</label>
                                </td>
                        </tr>
                    </table>
                    <span id="insuranceTypeErr" class="text-danger" style="display:none;">Please select insurance type</span>
                </div>
            </div>
            <div class="form-group">
                <label for="Cars" class="col-sm-4 control-label">
                Car Name</label>

                <div class="col-sm-4">
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
                <label for="Variant" class="col-sm-4 control-label">
                Variant</label>
                <div class="col-sm-4">
                    <select id="variant" name="variant" class="form-control" required>
                        <option value="" ModelID="-1">Select Variant</option>
                    </select>
                    <script language="javascript">print_car("car");</script>
                    <span id="variantErr" class="text-danger" style="display:none;">Please select variant</span>
                </div>
            </div>
            <div class="form-group">
                <label for="Year" class="col-sm-4 control-label">
                Registration Year</label>
                <div class="col-sm-4">
                    <select name="year" id="year" class="form-control">
                        <option value="">Select Year</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>

                    </select>
                    <span id="yearErr" class="text-danger" style="display:none;">Please select year</span>
                </div>
            </div>
            <div class="form-group hide">
                <label for="Location" class="col-sm-4 control-label">
                Location</label>
                <div class="col-sm-4">

                    <select name="location" id="location" class="form-control">
                        <option value="Indore">Indore</option>

                    </select>
                    <span id="locationErr" class="text-danger" style="display:none;">Please select year</span>

                </div>
            </div>
            <div class="form-group">
                <label for="FullName" class="col-sm-4 control-label">
                Name</label>
                <div class="col-sm-4">
                    <input name="name" type="text" id="name" class="form-control" />
                    <span id="nameErr" class="text-danger" style="display:none;">Please specify full name</span>
                </div>
            </div>
            <div class="form-group">
                <label for="Mobile" class="col-sm-4 control-label">
                Mobile</label>
                <div class="col-sm-4">
                    <input name="contact" type="text" id="contact" class="form-control" maxlength="10" />
                    <span id="contactErr" class="text-danger" style="display:none;">Please specify valid mobile no</span>
                </div>
            </div>
            <div class="form-group">
                <label for="Email" class="col-sm-4 control-label">
                Email</label>
                <div class="col-sm-4">
                    <input name="email" type="text" id="email" class="form-control" />
                    <span id="emailErr" class="text-danger" style="display:none;">Please enter valid email address</span>
                </div>
            </div>

            <div class="form-group">

                <div class="col-sm-8 col-sm-offset-4">
                    <input type="submit" name="submitInsuranceForm" value="Submit" id="submitInsuranceForm" class="btn btn-mahindra col-sm-3" />
                    <button type="reset" Class="btn btn-mahindra col-sm-3 col-sm-offset-1">Reset</button>
                </div>
            </div>


        </div>
    </div>
</div>
</div>
</div>

    <script src="{{ asset('public/js/jquery-2.1.1.min.js') }}" type="text/javascript"></script>
<script>
    $(document).ready(function(){
        $("#submitInsuranceForm").on('click', function(){

            url = "{{URL::to('/submitInsurance')}}";
            insuranceType = $("input[name='insuranceType']:checked").val();
            carModel = $("#carModel").val();
            variant = $("#variant").val();
            year = $("#year").val();
            locationdd = $("#location").val();
            name = $("#name").val();
            email = $("#email").val();
            contactNo = $("#contact").val();

            if(insuranceType=='' || carModel=='' || variant=='' || year=='' || name=='' || contactNo=='' || email==''){
                $("#insuranceTypeErr,#nameErr,#emailErr,#contactErr,#variantErr,#carModelErr,#yearErr").show();
                return false;
            }

            if(insuranceType!='' && insuranceType!=null){
                $("#insuranceTypeErr").hide();
            }
            if(carModel!='' && carModel!=null){
                $("#carModelErr").hide();
            }
            if(variant!='' && variant!=null){
                $("#variantErr").hide();
            }
            if(year!='' && year!=null){
                $("#yearErr").hide();
            }
            if(name!='' && name!=null && name.length>2){
                $("#nameErr").hide();
            }
            if(email!='' && emailValid(email)==true){
                $("#emailErr").hide();
            }
            if(contactNo!='' && contactNo.length>=10 && contactNo.length<=13){
                $("#contactErr").hide();
            }

            data = {insuranceType:insuranceType,name:name,email:email,contact:contactNo,location:locationdd,variant:variant, carModel:carModel, year:year, '_token':'{{ csrf_token() }}'};
            $.ajax({
                url: url,
                type:'POST',
                data: data,
                dataType: "JSON",
                success:function(response){
                    if(response.status=='success'){
                        $("#insuranceTypeErr,#nameErr,#emailErr,#contactErr,#variantErr,#carModelErr,#yearErr").hide();
                        $("#name,#email,#contact,#variant,#carModel,#year").val("");
                        $("input[name='insuranceType']").prop('checked', false);
                        $("#successMsgForInsurance").html('Thank you for sending an enquiry. We will get in touch with you soon.').show();
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

        if($("#contactNo")){
            $("#contactNo").attr("maxlength", 10);
        }

    });
</script>    

@section('script')
@endsection
@endsection
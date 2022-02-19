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
                    <img data-desktop-src="{{ asset('public/images/insurance.jpg')}}" data-mobile-src="{{ asset('public/images/insurance.jpg')}}" alt="AHUJA AUTO ABHIKARAN Slide 1">
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
            <div class="box  bg-grey">
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="col-xs-12 red">Insurance Calculator</h3>
                      
                        
                        <div class="form-group">
                            <span id="ctl00_ContentPlaceHolder1_lblMessage" class="successMsg"></span>
                        </div>
                        <div class="form-group">
                            <label for="Type" class="col-sm-4 control-label">
                                Insurance Type</label>
                            <div class="col-sm-4">
                                <table id="ctl00_ContentPlaceHolder1_rbInsuranceType">
	<tr>
		<td>&nbsp;&nbsp; </label></td><td><input id="ctl00_ContentPlaceHolder1_rbInsuranceType_1" type="radio" name="ctl00$ContentPlaceHolder1$rbInsuranceType" value="Renew" />&nbsp;&nbsp;<label for="ctl00_ContentPlaceHolder1_rbInsuranceType_1">&nbsp;&nbsp;  Renew  </label></td>
	</tr>
</table>
                                <span id="ctl00_ContentPlaceHolder1_rfvinsuranceType" class="text-danger" style="display:none;">Please select insurance type</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Cars" class="col-sm-4 control-label">
                                Car Name</label>
                            
                            <div class="col-sm-4">
                                <select name="ctl00$ContentPlaceHolder1$ddlModel" id="ctl00_ContentPlaceHolder1_ddlModel" class="form-control ddModel">
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
                            <label for="Variant" class="col-sm-4 control-label">
                                Variant</label>
                            <div class="col-sm-4">
                                <input type="hidden" name="ctl00$ContentPlaceHolder1$hdfVariant" id="ctl00_ContentPlaceHolder1_hdfVariant" />
                                
                                <select name="ctl00$ContentPlaceHolder1$ddlVariants" id="ctl00_ContentPlaceHolder1_ddlVariants" class="form-control">
	<option value="-1">Select Variant</option>

</select>
                                <span id="ctl00_ContentPlaceHolder1_rfvVariant" class="text-danger" style="display:none;">Please select variant</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Year" class="col-sm-4 control-label">
                                Registration Year</label>
                            <div class="col-sm-4">
                                <select name="ctl00$ContentPlaceHolder1$ddlYear" id="ctl00_ContentPlaceHolder1_ddlYear" class="form-control">
	<option value="-1">Select Year</option>
	<option value="2016">2016</option>
	<option value="2015">2015</option>
	<option value="2014">2014</option>
	<option value="2013">2013</option>
	<option value="2012">2012</option>
	<option value="2011">2011</option>
	<option value="2010">2010</option>

</select>
                                <span id="ctl00_ContentPlaceHolder1_rfvYear" class="text-danger" style="display:none;">Please select year</span>
                            </div>
                        </div>
                        <div class="form-group hide">
                            <label for="Location" class="col-sm-4 control-label">
                                Location</label>
                            <div class="col-sm-4">
                                
                                <select name="ctl00$ContentPlaceHolder1$ddlLocation" id="ctl00_ContentPlaceHolder1_ddlLocation" class="form-control">
	<option value="1">Indore</option>

</select>
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="FullName" class="col-sm-4 control-label">
                                Name</label>
                            <div class="col-sm-4">
                                <input name="ctl00$ContentPlaceHolder1$txtFullName" type="text" id="ctl00_ContentPlaceHolder1_txtFullName" class="form-control" />
                                <span id="ctl00_ContentPlaceHolder1_rfvFullName" class="text-danger" style="display:none;">Please specify full name</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Mobile" class="col-sm-4 control-label">
                                Mobile</label>
                            <div class="col-sm-4">
                                <input name="ctl00$ContentPlaceHolder1$txtMobile" type="text" id="ctl00_ContentPlaceHolder1_txtMobile" class="form-control" MinLength="10" />
                                <span id="ctl00_ContentPlaceHolder1_rfvMobile" class="text-danger" style="display:none;">Please specify mobile no</span>
                                <span id="ctl00_ContentPlaceHolder1_revTelno" class="text-danger" style="display:none;">Please specify valid mobile no</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Email" class="col-sm-4 control-label">
                                Email</label>
                            <div class="col-sm-4">
                                <input name="ctl00$ContentPlaceHolder1$txtEmail" type="text" id="ctl00_ContentPlaceHolder1_txtEmail" class="form-control" />
                                <input name="ctl00$ContentPlaceHolder1$txtSecEmail" type="text" id="ctl00_ContentPlaceHolder1_txtSecEmail" class="secemail" placeholder="E-mail" />
                                <span id="ctl00_ContentPlaceHolder1_rfvEmail" class="text-danger" style="display:none;">Please specify email id</span>
                                <span id="ctl00_ContentPlaceHolder1_revEmailId" class="text-danger" style="display:none;">Please enter valid email address</span>
                            </div>
                        </div>
                       
                             <div class="form-group">
                         
                            <div class="col-sm-8 col-sm-offset-4">
                                <input type="submit" name="ctl00$ContentPlaceHolder1$btnSubmit" value="Submit" onclick="return ReturnValidate();WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$btnSubmit&quot;, &quot;&quot;, true, &quot;ValidateInsurance&quot;, &quot;&quot;, false, false))" id="ctl00_ContentPlaceHolder1_btnSubmit" class="btn btn-mahindra col-sm-3" />
                                <button type="reset" Class="btn btn-mahindra col-sm-3 col-sm-offset-1">Reset</button>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
 @include('includes/reachus')
@include('includes/footer')    
</body>
</html>
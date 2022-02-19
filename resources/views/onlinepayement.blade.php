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
                    <img data-desktop-src="{{ asset('public/images/insurance-finance.jpg')}}" data-mobile-src="{{ asset('public/images/insurance-finance.jpg')}}" alt="AHUJA AUTO ABHIKARAN Slide 1">
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#slider" data-slide-to="0"></li>
            </ol>
            <div class="clearfix">
            </div>
        </div>
    </div>
    <div id="PageContent" class=" section pad30">
        <div class="container">
            
            <h1 class="section-head">Online payments</h1>
            <div class="">
                <div class="bg-grey box">
                    <div class="row">
                        <div class="col-md-9">
                            
                            <div class="form-group">
                                <span id="ctl00_ContentPlaceHolder1_lblMessage" class="successMsg"></span>
                            </div>
                            <div class="form-group">
                                <label for="Type" class="col-sm-4 control-label">
                                    Order Type</label>
                                <div class="col-sm-8">
                                    <select name="ctl00$ContentPlaceHolder1$ddlOrderType" id="ctl00_ContentPlaceHolder1_ddlOrderType" class="form-control">
	<option value="-1">Select Order Type</option>
	<option value="New Car">New Car</option>
	<option value="Service">Service</option>
	<option value="Accessories">Accessories</option>
	<option value="Used Car">Used Car</option>

</select>
                                    <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator1" class="text-danger" style="display:none;">Please select Order Type</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Cars" class="col-sm-4 control-label">
                                    Enter Car Details</label>
                                <div class="col-sm-8">
                                    <input name="ctl00$ContentPlaceHolder1$txtCarDetails" type="text" id="ctl00_ContentPlaceHolder1_txtCarDetails" class="form-control" placeholder="Car Model &amp; Car Variant" />
                                    <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator2" class="text-danger" style="display:none;">Please specify Car Details</span>
                                </div>

                            </div>
                            <div class="form-group hide">
                                <label for="Location" class="col-sm-4 control-label">
                                    Dealer Location</label>
                                <div class="col-sm-8">
                                    <select name="ctl00$ContentPlaceHolder1$ddlLocation" id="ctl00_ContentPlaceHolder1_ddlLocation" class="form-control">
	<option value="-1">Select Dealer Location</option>
	<option value="Indore">Indore</option>

</select>
                                    <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator3" class="text-danger" style="display:none;">Please select Dealer Location</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Location" class="col-sm-4 control-label">
                                    Payment Mode</label>
                                <div class="col-sm-8">
                                    <select name="ctl00$ContentPlaceHolder1$ddlPaymentMode" id="ctl00_ContentPlaceHolder1_ddlPaymentMode" class="form-control" onchange="CalAmountPayable()">
	<option value="-1">Select Payment Mode</option>
	<option value="1">Net Banking</option>
	<option value="2">Debit Card</option>
	<option value="3">Credit Card</option>

</select>
                                    <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator4" class="text-danger" style="display:none;">Please select Payment Mode</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Mobile" class="col-sm-4 control-label">
                                    Bill Amount</label>
                                <div class="col-sm-4">
                                    <input name="ctl00$ContentPlaceHolder1$txtBill" type="text" id="ctl00_ContentPlaceHolder1_txtBill" class="form-control" onchange="CalAmountPayable()" />
                                    <span id="ctl00_ContentPlaceHolder1_rfvBill" class="text-danger" style="display:none;">Please specify Bill Amount</span>
                                    <span id="ctl00_ContentPlaceHolder1_rfvBillValid" class="text-danger" style="display:none;">Please specify valid bill amount</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtInternetAccessFee" class="col-sm-4 control-label">
                                    Internet Access Fee</label>
                                <div class="col-sm-4">
                                    <input name="ctl00$ContentPlaceHolder1$txtInternetAccessFee" type="text" readonly="readonly" id="ctl00_ContentPlaceHolder1_txtInternetAccessFee" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtAmountPayable" class="col-sm-4 control-label">
                                    Amount Payable</label>
                                <div class="col-sm-4">
                                    <input name="ctl00$ContentPlaceHolder1$txtAmountPayable" type="text" readonly="readonly" id="ctl00_ContentPlaceHolder1_txtAmountPayable" class="form-control" />
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <br class="visible-xs" />
                                    <input type="submit" name="ctl00$ContentPlaceHolder1$btnPayNow" value="Pay Now" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$btnPayNow&quot;, &quot;&quot;, true, &quot;ValidateInsurance&quot;, &quot;&quot;, false, false))" id="ctl00_ContentPlaceHolder1_btnPayNow" class="btn btn-mahindra col-md-12 paynow" />
                                    
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-4 control-label">
                                    &nbsp;</label>
                                <div class="col-sm-8">
                                    <label for="tnc">
                                        <input name="ctl00$ContentPlaceHolder1$tnc" type="checkbox" id="ctl00_ContentPlaceHolder1_tnc" />
                                        I have read and agreed to these terms and conditions.</label>
                                </div>
                            </div>

                            
                        </div>
                        <div class="clearfix"></div>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="bg-grey text-center" style="background-color: rgb(243, 244, 246);">
                    <img src="{{asset('public/images/pci.jpg')}}" />
                    <img src="{{asset('public/images/norton.jpg')}}" />
                    <img src="{{asset('public/images/mastercard.jpg')}}" />
                    <img src="{{asset('public/images/verifiedbyvisa.jpg')}}" />
                    <img src="{{asset('public/images/ae.jpg')}}" />
                    <img src="{{asset('public/images/rupay.jpg')}}" />
                    <img src="{{asset('public/images/jcb.jpg') }}" />
                </div>
            </div>

        </div>
    </div>

    @include('includes/reachus')
@include('includes/footer')    
</body>
</html>
<div id="Contact" class="section">
                <div class="container">
                    <h1 class="section-head">Reach Us</h1>
                    <div class="row" id="contactRow">
                        <div class="col-xs-12 col-md-6 no-border footer-enquire-form">
                           
     
                            
                            
<form method="post" action="Contactcont">
    @csrf
<div class="no-border slider-form">
    <div class="form-group">
        <span id="ctl00_EnquireForm2_lblMessage" class="successMsg"></span>
    </div>
    <div class="form-group">
        <input  type="text" id="ctl00_EnquireForm2_txtName" class="flat form-control" placeholder="Name" name="name" />
        <span id="ctl00_EnquireForm2_rfvName" class="text-danger" style="display:none;">Please specify Name</span>
    </div>
    <div class="form-group">
        <input  type="text" id="ctl00_EnquireForm2_txtPhone" class="flat form-control" MinLength="10" placeholder="Phone Number" name="phonenumber" />
        <span id="ctl00_EnquireForm2_rfvPhone" class="text-danger" style="display:none;">Please specify phone</span>
        <span id="ctl00_EnquireForm2_revTelno" class="text-danger" style="display:none;">Please specify valid phone</span>
    </div>
    <div class="form-group">
        <input name="Email" type="text" id="ctl00_EnquireForm2_txtEmail" class="flat form-control" placeholder="Email" />
        <span id="ctl00_EnquireForm2_rfvEmail" class="text-danger" style="display:none;">Please specify email-id</span>
        <span id="ctl00_EnquireForm2_revEmailId" class="text-danger" style="display:none;">Please enter valid email address</span>
    </div>
    <div class="form-group">
        <textarea name="Message" rows="2" cols="20" id="ctl00_EnquireForm2_txtMessage" class="flat form-control" placeholder="Your message goes here...">
</textarea>
        <span id="ctl00_EnquireForm2_rfvMessage" class="text-danger" style="display:none;">Please specify Message</span>
    </div>
    <div>
        <input type="submit" name="Save" value="Submit"  id="ctl00_EnquireForm2_lnkSave" class="btn btn-mahindra col-xs-12 col-md-5 form-group" />
        <div class="clearfix">
        </div>
    </div>
</div>
</form>
<div class="clearfix"></div>

                            
                        </div>
                      
                    </div>
                </div>
            </div>
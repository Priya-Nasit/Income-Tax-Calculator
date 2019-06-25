<?php
include 'forms.php';
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<div class="container">
<div class="row">
      <div class="col-md-2"> </div>
      <div class="col-md-8">
        
        <!-- BEGIN DOWNLOAD PANEL -->
        <div class="panel panel-default well">
          <div class="panel-body">
          	<h1>Feedback</h1><br>
        <p class="lead"></p>
                <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
            <form action="" class="form-horizontal track-event-form bv-form" data-goaltype="”General”" data-formname="”ContactUs”" method="post" id="contact-us-all" novalidate="novalidate">
              <input name="elqSiteId" type="hidden" value="928">
              <input name="sFDCLastCampaignID" type="hidden" value="701400000012Lql">
              <input name="elqFormName" type="hidden" value="EMEAAllContactUsSubmissions">
              <input name="nexturl" type="hidden" value="">
              <input name="Partner" type="hidden" value="">
              <input name="language" type="hidden" value="en">

              <div class="form-group">               
                <div class="col-sm-6">
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-user"></i>
                            </div>
                    <input type="text" class="form-control" id="username" name="username" value="<?php if(isset($_SESSION['username'])) { echo $_SESSION['username']; }?>" data-bv-field="C_FirstName">
                        </div>
                    </div>                
                <div class="col-sm-6">
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-user"></i>
                            </div>
                    <input type="text" class="form-control" id="lastname" name="lastname" value="<?php if(isset($_SESSION['lastname'])) { echo $_SESSION['lastname']; }?>" data-bv-field="C_LastName"></div>
                        </div>
                        </div>

              <div class="form-group">               
                          <div class="col-sm-6">
                            <div class="input-group">
                              <div class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <input type="text" class="form-control" id="email" name="email" value="<?php if(isset($_SESSION['email'])) { echo $_SESSION['email']; }?>" data-bv-field="C_EmailAddress">
                        </div>
                    </div>  

                    <div class="col-sm-6">
                  <div class="input-group">
                              <div class="input-group-addon">
                      <i class="fa fa-phone"></i>                      
                    </div>
                    <input type="text" class="form-control" id="phone" name="phone" value="<?php if(isset($_SESSION['phone'])) { echo $_SESSION['phone']; }?>">
                  </div>                                    
                </div>              
                          
              </div>
              
                      <!--<div class="form-group">
                        <div class="col-sm-6">
                          <div class="input-group">
                              <div class="input-group-addon">
                      <i class="fa fa-globe"></i>          
                              </div>                        
                        
                    <select data-placeholder="Choose state" class="C_State_Modal form-control" id="C_State" name="C_State" data-bv-field="C_State">
                              <option value="">--Select State--</option>
                      <option value="United States">Andhra Pradesh</option>
                      <option value="Afghanistan">Arunachal Pradesh</option>
                      <option value="Albania">Assam</option>
                      <option value="Angola">Bihar</option>
                      <option value="Anguilla">Chattisgarh</option>
                      <option value="Antarctica">Goa</option>
                        <option value="Armenia">Gujarat</option>
                        <option value="Aruba">Hariyana</option>
                        <option value="Australia">Himachal Pradesh</option>
                        <option value="Austria">Jammu and Kashmir</option>
                        <option value="Azerbaijan">Jharkhand</option>
                        <option value="Bahamas">Karnataka</option>
                        <option value="Bahrain">Kerala</option>
                        <option value="Bangladesh">Madhya Pradesh</option>
                        <option value="Barbados">Maharashtra</option>
                        <option value="Belarus">Manipur</option>
                        <option value="Belgium">Meghalay</option>
                        <option value="Belize">Mizoram</option>
                        <option value="Benin">Nagaland</option>
                        <option value="Bermuda">Odisha</option>
                        <option value="Bhutan">Punjab</option>
                        <option value="Bolivia">Rajasthan</option>
                        <option value="Bosnia and Herzegovina">Sikkim</option>
                        <option value="Botswana">Tamil Nadu</option>
                        <option value="Bouvet Island">Telangana</option>
                        <option value="Brazil">Tripura</option>
                        <option value="British Indian Ocean Territory">Uttar Pradesh</option>
                        <option value="Brunei Darussalam">Uttarakhand</option>
                        <option value="Bulgaria">West Bengal</option>
                            </select>
                  </div>
                      <small data-bv-validator="callback" data-bv-validator-for="C_Country" class="help-block" style="display: none;">Choose one</small></div>
      
                        <div class="col-sm-6">
                          <div class="input-group" style="display: none;">
                    <div class="input-group-addon">
                      <i class="fa fa-globe"></i>          
                              </div>
                            
                    
                  </div>
                        </div>
                      </div>-->
                      
                      <div class="form-group">
                        <div class="col-sm-12">
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-comment fa-2"></i>                
                    </div>                  
                    <textarea class="form-control" id="message" name="message" rows="5" style="width:99.9%" placeholder="Enter your message here"></textarea>
                  </div>                                    
                </div>
                      </div>
                      
            <div class="container-login100-form-btn" align="center">
            <button class ="btn btn-primary"   name="submit">
              Submit
            </button>
          </div>


            <input type="hidden" value=""></form>
          </div><!-- end panel-body -->
        </div><!-- end panel -->
        <!-- END DOWNLOAD PANEL -->
      </div><!-- end col-md-8 -->
      <div class="col-md-2"> </div>
        </div>
</div>

</div>
</div>
</body>
</html>

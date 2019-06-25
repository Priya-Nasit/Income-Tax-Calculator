<?php
  include'forms.php';
?>
<?php if(!isset($_SESSION['username']))
{
   echo "<script>
       window.location.href='un_tax_calc_form';
       </script>";
 }    
?>

<?php if(isset($_SESSION['username']))
{
?>
<div class="container">
  <h4 style="text-align:center"><u><b>TAX CALCULATION</b></u></h4>
 <div class="row"><br>

<form method="post" action="">
  <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
</div> 
<!-- content area -->
  <div class="panel-heading">
        <h3 class="panel-title" >User Details</h3>     
      </div><br>
    <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="gross_AI">Username:</label>
                <input type="text" name="username" id="username" class="form-control" value="<?php if(isset($_SESSION['username'])) { echo $_SESSION['username']; }?>" />
                
              </div>
              <div class="col-md-6">
                <label for="other_sources_AI">Lastname:</label>
                <input type="text" name="lastname" id="lastname" class="form-control" value="<?php if(isset($_SESSION['lastname'])) { echo $_SESSION['lastname']; }?>">
              </div>
            </div>  
          </div>

          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="gross_AI">Email:</label>
                <input type="text" name="email" id="email" class="form-control" value="<?php if(isset($_SESSION['email'])) { echo $_SESSION['email']; }?>"/>
                
              </div>
              <div class="col-md-6">
                <label for="other_sources_AI">Phone:</label>
                <input type="text" name="phone" id="phone" class="form-control" value="<?php if(isset($_SESSION['phone'])) { echo $_SESSION['phone']; }?>">
              </div>
            </div>  
          </div>
          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="gross_AI"">Below 60/Senior Citizen:</label>                
                <select name="category" id="category" class="form-control">
                  <option value="Resident Below 60">Resident below 60</option>
                  <option value="Senior Citizen">Senior Citizen (above 60 and below 80)</option>
                  <option value="Super Senior Citizen">Super Senior Citizen (80 or above 80)</option>
                </select>
                
              </div>
            </div>  
          </div><br>

          
      <div class="panel-heading">
        <h3 class="panel-title" >Income</h3>     
      </div><br>

          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="salary">Salary</label>
                <input type="text" name="salary" id="salary" class="form-control" />
                
              </div>
              <div class="col-md-6">
                <label for="extra_income">Extra Income (Profit Only)</label>
                <input type="text" name="extra_income" id="extra_income" class="form-control">
              </div>
            </div>  
          </div><br>

             <div class="panel-heading">
        <h3 class="panel-title" >Deductions</h3>     
      </div><br>
      
          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="professional_tax">Professional Tax</label>
                <input type="text" name="professional_tax" id="professional_tax" class="form-control" />
                
              </div>
              <div class="col-md-6">
                <label for="house_loan_interest">House Loan Interest</label>
                <input type="text" name="house_loan_interest" id="house_loan_interest" class="form-control"/>
              </div>
            </div>  
          </div>

         
          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="education_loan_interest">Education Loan Interest</label>
                <input type="text" name="education_loan_interest" id="education_loan_interest" class="form-control"/>
                
              </div>
              <div class="col-md-6">
                <label for="mediclaim">Mediclaim</label>
                <input type="text" name="mediclaim" id="mediclaim" class="form-control"/>
              </div>
            </div>  
          </div><br>   

        <div class="panel-heading">
          <h3 class="panel-title" >Deductions upto 150000</h3>     
        </div><br>

         <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="provident_fund">Provident Fund</label>
                <input type="text" name="provident_fund" id="provident_fund" class="form-control"/>
              </div>

              <div class="col-md-6">
                <label for="insurance_premium">Insurance Premium</label>
                <input type="text" name="insurance_premium" id="insurance_premium" class="form-control"/>
              </div>
            </div>  
          </div>

          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="child_tution_fees">Child Tution Fees</label>
                <input type="text" name="child_tution_fees" id="child_tution_fees" class="form-control"/>
              </div>

              <div class="col-md-6">
                <label for="housing_loan_principle_amount">Housing Loan Principle Amount</label>
                <input type="text" name="housing_loan_principle_amount" id="housing_loan_principle_amount" class="form-control"/>
              </div>
            </div>
          </div>

              <div class ="form-group">
                <div class="row">
              <div class="col-md-6">
                <label for="insurance_pre_paid">Insurance Pre. Paid</label>
                <input type="text" name="insurance_pre_paid" id="insurance_pre_paid" class="form-control"/>
              </div>

              <div class="col-md-6">
                <label for="public_provident_fund">Public Provident Fund</label>
                <input type="text" name="public_provident_fund" id="public_provident_fund" class="form-control"/>
              </div>
            </div>  
          </div>

          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="national_saving_certificate">National Saving Certificate</label>
                <input type="text" name="national_saving_certificate" id="national_saving_certificate" class="form-control"/>
              </div>

              <div class="col-md-6">
                <label for="united_link_insurance_plan">United Link Insurance Plan</label>
                <input type="text" name="united_link_insurance_plan" id="united_link_insurance_plan" class="form-control"/>
              </div>
            </div>  
          </div>

          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="mutual_funds">Mutual Fund (ELSS)/Tax Saver(FD)</label>
                <input type="text" name="mutual_funds" id="mutual_funds" class="form-control"/>
              </div>
            </div>  
          </div><br>
          
          <div class="panel-heading">
            <h3 class="panel-title" >National Pension Scheme</h3>     
          </div><br>
          
          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="national_pension_scheme">NPS Tier 1 Only</label>
                <input type="text" name="national_pension_scheme" id="national_pension_scheme" class="form-control"/>
              </div>
            </div>
          </div><br>

          <div class="panel-heading">
            <h3 class="panel-title" >Standard Deduction</h3>     
          </div><br>

          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="mutual_funds" style="font-size: 25px">40000</label>
                
              </div>
            </div>
          </div>
        
          <div class="container-login100-form-btn" align="center">
            <button class ="btn btn-primary"   name="submit">
              Submit
            </button>
          </div>
         <!-- mutual_funds,national_pension_scheme,national_pension_scheme,national_saving_certificate,public_provident_fund,insurance_pre_paid,
          housing_loan_principle_amount,provident_fund,child_tution_fees,insurance_premium-->
          <?php 
          if(isset($_POST['submit']))
             {
            if($_POST['salary']!=NULL&&$_POST['insurance_premium']!=NULL&&$_POST['child_tution_fees']!=NULL&&$_POST['provident_fund']!=NULL&&$_POST['housing_loan_principle_amount']!=NULL&&$_POST['public_provident_fund']!=NULL&&$_POST['insurance_pre_paid']!=NULL&&$_POST['national_saving_certificate']!=NULL&&$_POST['national_pension_scheme']!=NULL&&$_POST['mutual_funds']!=NULL&&$_POST['national_pension_scheme']!=NULL)
            {  
              echo "<script>
              alert('Data Entered Successfully!!');
               
              </script>";
            }
            }
           ?>
                
        </form>
      </div>
      </div>
    </div>
  </div>
</div>
</div>
      </div>
    </div>
</body>
</html>
<?php
}
?>

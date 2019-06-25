<?php
  include'forms.php';
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
                <input type="text" name="username" id="username" class="form-control"  />
                
              </div>
              <div class="col-md-6">
                <label for="other_sources_AI">Lastname:</label>
                <input type="text" name="lastname" id="lastname" class="form-control" >
              </div>
            </div>  
          </div>

          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="gross_AI">Email:</label>
                <input type="text" name="email" id="email" class="form-control" />
                
              </div>
              <div class="col-md-6">
                <label for="other_sources_AI">Phone:</label>
                <input type="text" name="phone" id="phone" class="form-control" >
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
          <!-- Trigger the modal with a button -->
     <?php 
     if(isset($_POST['submit']))
      {
      if($_POST['username']!=NULL&&$_POST['lastname']!=NULL&&$_POST['email']!=NULL&&$_POST['phone']!=NULL&&$_POST['category']!=NULL&&$_POST['salary']!=NULL&&$_POST['insurance_premium']!=NULL&&$_POST['child_tution_fees']!=NULL&&$_POST['provident_fund']!=NULL&&$_POST['housing_loan_principle_amount']!=NULL&&$_POST['public_provident_fund']!=NULL&&$_POST['insurance_pre_paid']!=NULL&&$_POST['national_saving_certificate']!=NULL&&$_POST['national_pension_scheme']!=NULL&&$_POST['mutual_funds']!=NULL&&$_POST['national_pension_scheme']!=NULL)
      {  
      ?>      
  <button type="button" align="center" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Show TAX</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header"></div>
        <div class="modal-body">
         
         <title>Tax calculation</title>
<style type="text/css">
  body{
  font-family: "Lato",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.72222;
  }

  .tax-data {
    background: #F7F7F7;
    padding: 20px;
    font-size: 18px;
    margin-left: 90px;
  }

    .tax-data .sub-title {
    text-align: center;
    font-size: 30px;
  margin:auto;    
  }

  p {
    margin: 0;
    padding: 0;
    font-weight: normal;
    line-height: normal;
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
  }

  .tax-data .left {
    padding: 10px;
    display: inline-block;
  } 

  .tax-data .right {
    padding: 10px;
    display: inline-block;
    float: right;
    color: #38acc9;
    position: absolute;
    right: 32px;
}

  .data-btn{
  text-align:center;
  }
</style>

<div class="tax-data col-md-10 ">
               <p class="sub-title">User Details</p>
               <p><span class="left">Username</span> <span class="right"><span id="username"><?php echo $_POST['username']?></span></span></p>

                <p><span class="left">Lastname</span> <span class="right"><span id="lastname"><?php echo $_POST['lastname']?></span></span></p>

                <p> <span class="left">Email</span> <span class="right"><span id="email"><?php echo $_POST['email']?></span></span></p>

                <p> <span class="left">Phone</span> <span class="right"><span id="phone"><?php echo $_POST['phone']?></span></span></p>

            <p class="sub-title">Your Tax Details</p>
            <div>
              
                <p><span class="left">Salary</span> <span class="right"><span>&#8377;</span><span id="salary"><?php echo $_POST['salary']?></span></span></p>

                <p><span class="left">Extra Income(Profit Only)</span> <span class="right"><span>&#8377;</span><span id="extra_income"><?php echo $_POST['extra_income']?></span></span></p>

                <p> <span class="left">Professional Tax</span> <span class="right"><span>&#8377;</span><span id="professional_tax"><?php echo $_POST['professional_tax']?></span></span></p>

                <p> <span class="left">House Loan Interest</span> <span class="right"><span>&#8377;</span><span id="house_loan_interest"><?php echo $_POST['house_loan_interest']?></span></span></p>

                <p> <span class="left">Educational Loan Interest</span> <span class="right"><span>&#8377;</span><span id="education_loan_interest"><?php echo $_POST['education_loan_interest']?></span></span></p>

                <p> <span class="left">Mediclaim</span> <span class="right"><span>&#8377;</span><span id="mediclaim"><?php echo $_POST['mediclaim']?></span></span></p>

                <p> <span class="left">Provident Fund</span> <span class="right"><span>&#8377;</span><span id="provident_fund"><?php echo $_POST['provident_fund']?></span></span></p>

                <p> <span class="left">Insurance Premium</span> <span class="right"><span>&#8377;</span><span id="insurance_premium"><?php echo $_POST['insurance_premium']?></span></span></p>

                <p> <span class="left">Child Tution Fees Paid</span> <span class="right"><span>&#8377;</span><span id="child_tution_fees"><?php echo $_POST['child_tution_fees']?></span></span></p>

                <p> <span class="left">Housing Loan Principle Amounty</span> <span class="right"><span>&#8377;</span><span id="housing_loan_principle_amount"><?php echo $_POST['housing_loan_principle_amount']?></span></span></p>

                <p> <span class="left">Insurance Pre.Paid</span> <span class="right"><span>&#8377;</span><span id="insurance_pre_paid"><?php echo $_POST['insurance_pre_paid']?></span></span></p>

                <p> <span class="left">Public Provident Fund</span> <span class="right"><span>&#8377;</span><span id="public_provident_fund"><?php echo $_POST['public_provident_fund']?></span></span></p>

                <p> <span class="left">National Saving Certificate</span> <span class="right"><span>&#8377;</span><span id="national_saving_certificate"><?php echo $_POST['national_saving_certificate']?></span></span></p>

                <p> <span class="left">United Link Insurance Plan</span> <span class="right"><span>&#8377;</span><span id="united_link_insurance_plan"><?php echo $_POST['united_link_insurance_plan']?></span></span></p>

                <p> <span class="left">Mutual Funds(ELSS)/Tax Saver(FD)</span> <span class="right"><span>&#8377;</span><span id="mutual_funds"><?php echo $_POST['mutual_funds']?></span></span></p>

                <p> <span class="left">National Pension Scheme</span> <span class="right"><span>&#8377;</span><span id="national_pension_scheme"><?php echo $_POST['national_pension_scheme']?></span></span></p>
                
                
            </div>
        </div>

 <?php
$income = 0;
$extra_income = 0; 
$professional_tax = $_POST['professional_tax']; 
$mediclaim = 0;
$jmp;$jump;

//$total_sal=0;
$gross_salary;
$full_total;

$insurance_premium=$_POST['insurance_premium'];
$child_tution_fees=$_POST['child_tution_fees'];
$house_loan_interest=$_POST['house_loan_interest'];
$educational_loan_interest=$_POST['education_loan_interest'];
$mediclaim=$_POST['mediclaim'];
$provident_fund=$_POST['provident_fund'];
$mutual_fund=$_POST['mutual_funds'];
$insurance_pre_paid=$_POST['insurance_pre_paid'];
$public_provident_fund=$_POST['public_provident_fund'];
$national_saving_certificate=$_POST['national_saving_certificate'];
$united_link_insurance=$_POST['united_link_insurance_plan'];
$nps=$_POST['national_pension_scheme'];
$sd=40000;
$tax_income;
$cess=0; 
$final_tax=0; $final_tax1=0; 
$total_salr=0;
$housing_loan=$_POST['housing_loan_principle_amount'];
$tmp_1;
$tmp_2; 
$tmp_3; 
$tmp_4; 
$nps;
$sd=40000;
$ans;
echo $total_sal=$_POST['salary']+$_POST['extra_income'];
    
    /**if(isset($_POST['calculate']))*/
    {
        if($total_sal<=250000) 
        {
            $tax_income=0;
            $final_tax= 0;
            
        }
        else if($total_sal>250000&&$total_sal<=500000) 
        {

            if($total_sal<=350000)
            {
                $total_sal=$total_sal-2500;
                /*tmp_1=total_sal-250000;
                ans=tmp_1*(0.05f);
                ans=ans-2500;
                if(ans<=0){
                    final_tax=0;
                }
                else {
                    cess=ans*(0.04f);
                    tax_income=ans+cess;
                    final_tax=ans+cess+stcg_tax+ltcg_tax;
                }*/
            }

            
             $tmp_1 = $total_sal - 250000;
             $ans = $tmp_1*(0.05);
             $cess = $ans*(0.04);
             $tax_income=$ans+$cess;
             $final_tax=$ans+$cess;
            

        }
        else if($total_sal>500000&&$total_sal<=1000000)
        {
            $tmp_1=$total_sal-250000;
            $tmp_2=$tmp_1-250000;
            $tmp_3=$tmp_2*(0.20);
            $tmp_1=$tmp_1-$tmp_2;
            $tmp_2=$tmp_1*(0.05);
            $ans=$tmp_3+$tmp_2;
            $cess=$ans*(0.04);
            $tax_income=$ans+$cess;
            $final_tax=$ans+$cess;
           // $_SESSION['final_tax']=$final_tax;
        }
        else if($total_sal>1000000)
        {
            $tmp_1=$total_sal-250000;
            $tmp_2=$tmp_1-250000;
            $tmp_3=$tmp_2-500000;
            $tmp_4=$tmp_3;
            $tmp_3=$tmp_3*(0.3);
            $tmp_2=$tmp_2-$tmp_4;
            $tmp_2=$tmp_2*(0.2);
            $ans=$tmp_2+$tmp_3+12500;
            $cess=$ans*(0.04);
            $tax_income=$ans+$cess;
            $final_tax=$ans+$cess;
             //$_SESSION['final_tax']=$final_tax;
        }
}

if($professional_tax<=2400)
        {
            //echo "<br>Profe:";
            $total_salr = $total_sal - $professional_tax ;
        }
        else
        {
            $total_salr=$total_sal-2400;
        }
        if($house_loan_interest<=50000)//slab for the house loan interest is changed from 200000 to 50000 (SECTION 80D)
        {
            //echo "<br>house:";
             $total_salr=$total_salr-$house_loan_interest;
        }
        else
        {
            $total_salr=$total_salr-50000;
        }

        //echo "<br>educa";
        $total_salr=$total_salr-$educational_loan_interest;

            //else
          //  total_salr=total_salr-400000;
        if($mediclaim<=50000)//slab for the mediclaim is changed from 25000 to 50000 (SECTION 80D)
        {
            //echo "<br>mediclaim";
            $total_salr=$total_salr-$mediclaim;
        }
        else
        {
            $total_salr=$total_salr-50000;
        }

        $temp_final_ded;
         $temp_final_ded=$provident_fund+$insurance_premium+$child_tution_fees+$housing_loan+$insurance_pre_paid+$public_provident_fund+$national_saving_certificate+$united_link_insurance+$mutual_fund;

        if($temp_final_ded<=150000)
        {
            //echo "<br>-40,000-dedu";
            $total_salr=$total_salr-$temp_final_ded-$sd;
        }
        else
        {
            $total_salr=$total_salr-150000-$sd;
        }

        if($nps<=150000)//slab changed to 150000 from 50000
        {
            //echo "<br>nps";
            $total_salr=$total_salr-$nps;
        }
        else
        {
            $total_salr=$total_salr-150000;
        }


        $gross_salary=$total_salr;

    

 ?>        
<div class="datadiv">
<div class="tax-data col-md-10 ">
            <p class="sub-title">Income Tax Payable : &#8377;0,00,000</p>
            <div>
              
                <p><span class="left">Total Salary</span> <span class="right"><span>&#8377;</span><span id="salary"><?php echo $total_sal ?></span></span></p>
                <p> <span class="left">Net Taxable Income</span> <span class="right"><span>&#8377;</span><span id="deductions"><?php echo $total_salr ?></span></span></p>
                <p> <span class="left">Total Tax</span> <span class="right"><span>&#8377;</span><span id="nettaxableincome">
                    <?php echo $final_tax;
                    /**if($total_sal<=250000)
                    {
                    echo  $final_tax;
                    }
                    else if($total_sal>250000&&$total_sal<=500000)
                    {
                    echo  $_SESSION['final_tax1'];
                    }*/

                    ?>
                    
                    </span></span></p>
                
                <div class="data-btn">
              </div>
            </div>
        </div>
</div>
       





        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
    <?php
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

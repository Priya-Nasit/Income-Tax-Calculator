<?php
include 'config.php';
include 'forms.php';
?>

<?php
 
//$url = "?" . $query_string;
foreach ($item as $row) {
  
  //if($id==$row['id'])
{
?>  
<title>Update your form</title>

  
<div class="container">

 <div class="page-header">
  <h2>Update!!</h2>
 </div>

<div class="panel panel-default">
   <div class="panel-body"> 

<form class="form" method="post" action="<?php echo base_url('index.php/auth/update_data/'.$row['id']);?>">

  
    <div class="form-group">
      <lable class="control-label col-sm-2" >Salary</lable>
      <div class="col-sm-10"><input type="text" name="salary" class="form-control"  value="<?php echo $row['salary'] ?>" ></div>
    </div>

   
    <div class="form-group">
      <lable class="control-label col-sm-2">Extra Income(Profit Only)</lable>
      <div class="col-sm-10"><input type="text" name="extra_income" class="form-control" value="<?php echo $row['extra_income']?>" ></div>
    </div>

    <div class="form-group">
      <lable class="control-label col-sm-2">Professional Tax</lable>
      <div class="col-sm-10"><input type="text" name="professional_tax" class="form-control" value="<?php echo $row['professional_tax']?>" ></div>
    </div>
    <div class="form-group">
      <lable class="control-label col-sm-2" >House Loan Interest</lable>
      <div class="col-sm-10"><input type="text" name="house_loan_interest" class="form-control"  value="<?php echo $row['house_loan_interest'] ?>" ></div>
    </div>

   
    <div class="form-group">
      <lable class="control-label col-sm-2">Educational Loan Interest</lable>
      <div class="col-sm-10"><input type="text" name="education_loan_interest" class="form-control" value="<?php echo $row['education_loan_interest']?>" ></div>
    </div>

    <div class="form-group">
      <lable class="control-label col-sm-2">Mediclaim</lable>
      <div class="col-sm-10"><input type="text" name="mediclaim" class="form-control" value="<?php echo $row['mediclaim']?>" ></div>
    </div>

    <div class="form-group">
      <lable class="control-label col-sm-2" >Provident Fund</lable>
      <div class="col-sm-10"><input type="text" name="provident_fund" class="form-control" value="<?php echo $row['provident_fund'] ?>" ></div>
    </div>

    <div class="form-group">
      <lable class="control-label col-sm-2" >Insurance Premium</lable>
      <div class="col-sm-10"><input type="text" name="insurance_premium" class="form-control" value="<?php echo $row['insurance_premium'] ?>" ></div>
    </div>

   
    <div class="form-group">
      <lable class="control-label col-sm-2">Child Tution Fees Paid</lable>
      <div class="col-sm-10"><input type="text" name="child_tution_fees" class="form-control" value="<?php echo $row['child_tution_fees']?>" ></div>
    </div>

    <div class="form-group">
      <lable class="control-label col-sm-2">Housing Loan Principle Amount</lable>
      <div class="col-sm-10"><input type="text" name="housing_loan_principle_amount" class="form-control" value="<?php echo $row['housing_loan_principle_amount']?>" ></div>
    </div>

    <div class="form-group">
      <lable class="control-label col-sm-2" >Insurance Pre.Paid</lable>
      <div class="col-sm-10"><input type="text" name="insurance_pre_paid" class="form-control" value="<?php echo $row['insurance_pre_paid'] ?>" ></div>
    </div>

   
    <div class="form-group">
      <lable class="control-label col-sm-2">Public Provident Fund</lable>
      <div class="col-sm-10"><input type="text" name="public_provident_fund" class="form-control" value="<?php echo $row['public_provident_fund']?>" ></div>
    </div>

    <div class="form-group">
      <lable class="control-label col-sm-2">National Saving Certificate</lable>
      <div class="col-sm-10"><input type="text" name="national_saving_certificate" class="form-control" value="<?php echo $row['national_saving_certificate']?>" ></div>
    </div>

    <div class="form-group">
      <lable class="control-label col-sm-2">United Link Insurance Plan</lable>
      <div class="col-sm-10"><input type="text" name="united_link_insurance_plan" class="form-control" value="<?php echo $row['united_link_insurance_plan']?>" ></div>
    </div>

    <div class="form-group">
      <lable class="control-label col-sm-2">Mutual Funds(ELSS)/Tax Saver(FD)</lable>
      <div class="col-sm-10"><input type="text" name="mutual_funds" class="form-control" value="<?php echo $row['mutual_funds']?>" ></div>
    </div>

    <div class="form-group">
      <lable class="control-label col-sm-2">National Pension Scheme</lable>
      <div class="col-sm-10"><input type="text" name="national_pension_scheme" class="form-control" value="<?php echo $row['national_pension_scheme']?>" ></div>
    </div>

    <div class="form-group">
    <div class="col-sm-offset-5 col-sm-8"><button type="submit" name="submit" value="submit" class="btn btn-success">Update</button>
    </div>
    </div>


</form>
</div>
</div>
</div>


<?php
}
}
?>
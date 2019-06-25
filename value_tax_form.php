<?php
include 'forms.php';
include 'config.php';
?>

<?php if(isset($_SESSION['username']))
{
?>
<div class="content">
<div class="table-responsive">
<table class="table table-bordered" data-page-length='5' style="background-color:white;">
 <thead class="heading" style="background-color:#201919;color:white ">
   <h4 style="color: red">Note*:Here Colored Row Show Your Today's Tax Calculation List</h4><br>
  
  <tr>
    <th style="background-color:#6c757d">Id</th>
    <th style="background-color:#6c757d">UserName</th>
    <th style="background-color:#6c757d">LastName</th>
    <th style="background-color:#6c757d">Email</th>
    <th style="background-color:#6c757d">Category</th>
    <th style="background-color:#6c757d">Salary</th>
   <th style="background-color:#6c757d">Extra Income</th>
   <th style="background-color:#6c757d">Professional Tax</th>
   <th style="background-color:#6c757d">House Loan Interest </th>

   <th style="background-color:#6c757d">Education Loan Interest</th>
   <th style="background-color:#6c757d">Mediclaim</th>
   <th style="background-color:#6c757d">Provident Fund</th>
   <th style="background-color:#6c757d">Insurance Premium</th>
   <th style="background-color:#6c757d">Child Tution Fees Paid</th>

   <th style="background-color:#6c757d">Housing Loan Principle Amount</th>
   <th style="background-color:#6c757d">Insurance Pre. Paid</th>
   <th style="background-color:#6c757d">Public Provident Fund</th>
   <th style="background-color:#6c757d">National Saving Certificate</th>
   <th style="background-color:#6c757d">United Link Insurance Plan</th>
   <th style="background-color:#6c757d">Mutual Fund(ELSS)/Tax Saver(FD)</th>
   <th style="background-color:#6c757d">National Pension Fund</th>
  
   <th style="background-color:#6c757d">Date</th>
   <th style="background-color:#6c757d">Time</th>
   <th style="background-color:#6c757d">Update/Delete</th>
   
   
  </tr>    
  </thead>
 <div align="center">
 <?php
 date_default_timezone_set("Asia/kolkata");
$date=date('Y-m-d');  
    foreach($item as $row)
      { 
     if($_SESSION['username']==$row['username'])
     {  
      echo "<tr>";
     //echo "<td>" . $row['id']."</td>";
      if($row['date']==$date)
     {
     echo "<td style='background-color:#cff01a7a'>" . $row['id'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['username'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['lastname'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['email'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['category'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['salary'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['extra_income'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['professional_tax'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['house_loan_interest'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['education_loan_interest'] . "</td>";
    
     echo "<td style='background-color:#cff01a7a'>" . $row['mediclaim'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['provident_fund'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['insurance_premium'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['child_tution_fees'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['housing_loan_principle_amount'] . "</td>";

     echo "<td style='background-color:#cff01a7a'>" . $row['insurance_pre_paid'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['public_provident_fund'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['national_saving_certificate'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['united_link_insurance_plan'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['mutual_funds'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['national_pension_scheme'] . "</td>";
     
     echo "<td style='background-color:#cff01a7a'>" . $row['date'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['time'] . "</td>";
    
      echo "<td style='background-color:#cff01a7a'>".'<a class="btn btn-info" href="update?id=' . $row['id'] . '">Edit' . '</a>'.'<a class="btn btn-success" href="calculation?id=' . $row['id'] . '">Cal' . '</a>'."</td>";
      //'</a>'.'<a class="btn btn-danger" href="delete?id=' . $row['id'] . '">Del' . 
    }
    else
    {
       echo "<td>" . $row['id'] . "</td>";
     echo "<td>" . $row['username'] . "</td>";
     echo "<td>" . $row['lastname'] . "</td>";
     echo "<td>" . $row['email'] . "</td>";
     echo "<td>" . $row['category'] . "</td>";
     echo "<td>" . $row['salary'] . "</td>";
     echo "<td>" . $row['extra_income'] . "</td>";
     echo "<td>" . $row['professional_tax'] . "</td>";
     echo "<td>" . $row['house_loan_interest'] . "</td>";
     echo "<td>" . $row['education_loan_interest'] . "</td>";
    
     echo "<td>" . $row['mediclaim'] . "</td>";
     echo "<td>" . $row['provident_fund'] . "</td>";
     echo "<td>" . $row['insurance_premium'] . "</td>";
     echo "<td>" . $row['child_tution_fees'] . "</td>";
     echo "<td>" . $row['housing_loan_principle_amount'] . "</td>";

     echo "<td>" . $row['insurance_pre_paid'] . "</td>";
     echo "<td>" . $row['public_provident_fund'] . "</td>";
     echo "<td>" . $row['national_saving_certificate'] . "</td>";
     echo "<td>" . $row['united_link_insurance_plan'] . "</td>";
     echo "<td>" . $row['mutual_funds'] . "</td>";
     echo "<td>" . $row['national_pension_scheme'] . "</td>";
     
     echo "<td>" . $row['date'] . "</td>";
     echo "<td>" . $row['time'] . "</td>";
    
      echo "<td>".'<a class="btn btn-info" href="update?id=' . $row['id'] . '">Edit' . '</a>'.'<a class="btn btn-success" href="calculation?id=' . $row['id'] . '">Cal' . '</a>'."</td>";
      //'<a class="btn btn-danger" href="delete?id=' . $row['id'] . '">Del' . '</a>'.
    }    
   echo "</tr>";
  
 }
 }
 //echo $count;
 ?>  
          </tbody>
        </table>
      </div>
      <!-- /Panel Content -->
    </div>
  </div>
  <!-- /Main area -->
</div>


</div>
</div>
</body>
</html>

<?php
}
?>
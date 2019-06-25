<?php
include 'forms.php';
include 'config.php';

foreach($item as $row)
{
	?>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<div class="tax-data col-md-10 ">
            <p class="sub-title">Your Tax Details</p>
            <div>
            	
                <p><span class="left">Salary</span> <span class="right"><span>&#8377;</span><span id="salary"><?php echo $row['salary']?></span></span></p>

                <p><span class="left">Extra Income(Profit Only)</span> <span class="right"><span>&#8377;</span><span id="extra_income"><?php echo $row['extra_income']?></span></span></p>

                <p> <span class="left">Professional Tax</span> <span class="right"><span>&#8377;</span><span id="professional_tax"><?php echo $row['professional_tax']?></span></span></p>

                <p> <span class="left">House Loan Interest</span> <span class="right"><span>&#8377;</span><span id="house_loan_interest"><?php echo $row['house_loan_interest']?></span></span></p>

                <p> <span class="left">Educational Loan Interest</span> <span class="right"><span>&#8377;</span><span id="education_loan_interest"><?php echo $row['education_loan_interest']?></span></span></p>

                <p> <span class="left">Mediclaim</span> <span class="right"><span>&#8377;</span><span id="mediclaim"><?php echo $row['mediclaim']?></span></span></p>

                <p> <span class="left">Provident Fund</span> <span class="right"><span>&#8377;</span><span id="provident_fund"><?php echo $row['provident_fund']?></span></span></p>

                <p> <span class="left">Insurance Premium</span> <span class="right"><span>&#8377;</span><span id="insurance_premium"><?php echo $row['insurance_premium']?></span></span></p>

                <p> <span class="left">Child Tution Fees Paid</span> <span class="right"><span>&#8377;</span><span id="child_tution_fees"><?php echo $row['child_tution_fees']?></span></span></p>

                <p> <span class="left">Housing Loan Principle Amounty</span> <span class="right"><span>&#8377;</span><span id="housing_loan_principle_amount"><?php echo $row['housing_loan_principle_amount']?></span></span></p>

                <p> <span class="left">Insurance Pre.Paid</span> <span class="right"><span>&#8377;</span><span id="insurance_pre_paid"><?php echo $row['insurance_pre_paid']?></span></span></p>

                <p> <span class="left">Public Provident Fund</span> <span class="right"><span>&#8377;</span><span id="public_provident_fund"><?php echo $row['public_provident_fund']?></span></span></p>

                <p> <span class="left">National Saving Certificate</span> <span class="right"><span>&#8377;</span><span id="national_saving_certificate"><?php echo $row['national_saving_certificate']?></span></span></p>

                <p> <span class="left">United Link Insurance Plan</span> <span class="right"><span>&#8377;</span><span id="united_link_insurance_plan"><?php echo $row['united_link_insurance_plan']?></span></span></p>

                <p> <span class="left">Mutual Funds(ELSS)/Tax Saver(FD)</span> <span class="right"><span>&#8377;</span><span id="mutual_funds"><?php echo $row['mutual_funds']?></span></span></p>

                <p> <span class="left">National Pension Scheme</span> <span class="right"><span>&#8377;</span><span id="national_pension_scheme"><?php echo $row['national_pension_scheme']?></span></span></p>
                
                <div class="data-btn">
                <input type="submit" value="Calculate" name="calculate" class="btn btn-primary active" id="show_div">
            	</div>
            </div>
        </div>

 <?php
$income = 0;
$extra_income = 0; 
$professional_tax = $row['professional_tax']; 
$mediclaim = 0;
$jmp;$jump;

//$total_sal=0;
$gross_salary;
$full_total;

$insurance_premium=$row['insurance_premium'];
$child_tution_fees=$row['child_tution_fees'];
$house_loan_interest=$row['house_loan_interest'];
$educational_loan_interest=$row['education_loan_interest'];
$mediclaim=$row['mediclaim'];
$provident_fund=$row['provident_fund'];
$mutual_fund=$row['mutual_funds'];
$insurance_pre_paid=$row['insurance_pre_paid'];
$public_provident_fund=$row['public_provident_fund'];
$national_saving_certificate=$row['national_saving_certificate'];
$united_link_insurance=$row['united_link_insurance_plan'];
$nps=$row['national_pension_scheme'];
$sd=40000;
$tax_income;
$cess=0; 
$final_tax=0; $final_tax1=0; 
$total_salr=0;
$housing_loan=$row['housing_loan_principle_amount'];
$tmp_1;
$tmp_2; 
$tmp_3; 
$tmp_4; 
$nps;
$sd=40000;
$ans;
$total_sal=$row['salary']+$row['extra_income'];
    
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

            echo "<br>";
             echo $tmp_1 = $total_sal - 250000;
            echo "<br>"; echo $ans = $tmp_1*(0.05);
             echo "<br>";echo $cess = $ans*(0.04);
             echo "<br>";echo $tax_income=$ans+$cess;
             echo "<br>";echo $final_tax=$ans+$cess;
             //$_SESSION['final_tax']=$final_tax;

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
        echo "<br>deduca";
        echo $temp_final_ded=$provident_fund+$insurance_premium+$child_tution_fees+$housing_loan+$insurance_pre_paid+$public_provident_fund+$national_saving_certificate+$united_link_insurance+$mutual_fund;

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
<div class="datadiv" style="display:none">
<div class="tax-data col-md-10 ">
            <p class="sub-title">Income Tax Payable : &#8377;0,00,000</p>
            <div>
            	
                <p><span class="left">Total Salary</span> <span class="right"><span>&#8377;</span><span id="salary"><?php echo $total_sal ?></span></span></p>
                <p> <span class="left">Net Taxable Income</span> <span class="right"><span>&#8377;</span><span id="deductions"><?php echo $total_salr ?></span></span></p>
                <p> <span class="left">Total Tax</span> <span class="right"><span>&#8377;</span><span id="nettaxableincome">
                    <?php echo $tax_income;
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

<script>
$('#show_div').click(function() {
  var datadiv = $('.datadiv').show(), // show the form wrapper in order to get its height
      divLHeight = datadiv.height(),
      hidediv = datadiv.find('div').hide(); // hide the form itself instead
      
  datadiv.height(divLHeight);
  hidediv.toggle("slow", function() {
    // optionally, reset the height
    datadiv.height('auto');
  }); 
 
  // this line is only needed so that the code snippet will not scroll the
  // outer browser window, but only the iframe content. If you're not in an iframe,
  // you can just use the original scrollIntoView() approach instead
  document.documentElement.scrollTop = datadiv[0].offsetTop;
  // formL.get(0).scrollIntoView();
  
});
</script>

 <?php
   }
?>




<?php
$income = 0,
$extra_income = 0, 
$professional_tax = 0, 
$house_loan_interest = 0, 
$educational_loan_interest = 0,
$mediclaim = 0,
$jmp,$jump;

$total_sal=0,
$gross_salary,
$full_total;

$provident_fund=0,
$insurance_premium=0,
$child_tution_fees=0,
$housing_loan=0,
$insurance_pre_paid=0,
$public_provident_fund=0,
$national_saving_certificate=0,
$united_link_insurance=0,
$mutual_fund=0,
$nps=0,
$sd=40000;
$tax_income,
$cess=0, 
$final_tax=0, 
$tmp_1, 
$tmp_2, 
$tmp_3, 
$tmp_4, 
$ans;

	if($row['category']=='Resident Below 60')
    {
		if($total_sal<=250000) 
        {
            $tax_income=0;
            $final_tax = 0;
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
            $ans = $tmp_1*(0.05f);
            $cess = $ans*(0.04f);
            $tax_income=$ans+$cess;
            $final_tax=$ans+$cess;
        }
        else if($total_sal>500000&&$total_sal<=1000000)
        {
            $tmp_1=$total_sal-250000;
            $tmp_2=$tmp_1-250000;
            $tmp_3=$tmp_2*(0.20f);
            $tmp_1=$tmp_1-$tmp_2;
            $tmp_2=$tmp_1*(0.05f);
            $ans=$tmp_3+$tmp_2;
            $cess=$ans*(0.04f);
            $tax_income=$ans+$cess;
            $final_tax=$ans+$cess;
        }
        else if($total_sal>1000000)
        {
            $tmp_1=$total_sal-250000;
            $tmp_2=$tmp_1-250000;
            $tmp_3=$tmp_2-500000;
            $tmp_4=$tmp_3;
            $tmp_3=$tmp_3*(0.3f);
            $tmp_2=$tmp_2-tmp_4;
            $tmp_2=$tmp_2*(0.2f);
            $ans=$tmp_2+$tmp_3+$12500;
            $cess=$ans*(0.04f);
            $tax_income=$ans+$cess;
            $final_tax=$ans+$cess;
        }
    }
	}	

    if($row['category']=='Resident Below 60')
    {

    }
 ?>
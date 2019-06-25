<?php
include 'forms.php';
?>
<div class="content">
<div class="table-responsive">
<table class="table table-bordered" data-page-length='5' style="background-color:white;">
 <thead class="heading" style="background-color:#201919;color:white ">
  <tr>
  	<th style="background-color:#6c757d">Id</th>
    <th style="background-color:#6c757d">Insurance provider</th>
    <th style="background-color:#6c757d">Coverage</th>
    <th style="background-color:#6c757d">Pre and post hospitalization expenses cover</th>
    <th style="background-color:#6c757d">Co-pay</th>
    <th style="background-color:#6c757d">Renewability</th>
    <th style="background-color:#6c757d">Pre-existing disease cover</th>
    <th style="background-color:#6c757d">Network hospitals</th>
     <th style="background-color:#6c757d">Incurred Claim Rati</th>
     <!--<th style="background-color:#6c757d">Edit</th>-->
  </tr>    
  </thead>
 <div align="center">
 <?php
    foreach($item as $row)
      {  
      echo "<tr>";
     //echo "<td>" . $row['id']."</td>";
     
     echo "<td>" . $row['id'] . "</td>";
     echo "<td>" . $row['insurance_provider'] . "</td>";
     echo "<td>" . $row['coverage'] . "</td>";
     echo "<td>" . $row['pre_post_hospitalization_expenses_cover'] . "</td>";
     echo "<td>" . $row['co_pay'] . "</td>";
     echo "<td>" . $row['renewability'] . "</td>";
     echo "<td>" . $row['pre_existing_disease_cover'] . "</td>";
      echo "<td>" . $row['network_hospitals'] . "</td>";
       echo "<td>" . $row['incurred_claim_ratio'] . "</td>";
      //echo "<td>".'<a class="btn btn-info" href="update?id=' . $row['id'] . '">Edit' . '</a>'."</td>";
   echo "</tr>";
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

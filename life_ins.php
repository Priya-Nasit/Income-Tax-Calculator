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
    <th style="background-color:#6c757d">Grievances Solved</th>
    <th style="background-color:#6c757d">Claim Settlement Ratio*</th>
    <th style="background-color:#6c757d">Maximum Cover (Sum Assured)</th>
    <th style="background-color:#6c757d">New Business Premium</th>
    <th style="background-color:#6c757d">Maximum Maturity Age</th>
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
     echo "<td>" . $row['grievances_solved'] . "</td>";
     echo "<td>" . $row['claim_settlement_ratio'] . "</td>";
     echo "<td>" . $row['maximum_cover'] . "</td>";
     echo "<td>" . $row['new_business_premium'] . "</td>";
     echo "<td>" . $row['maximum_maturity_age'] . "</td>";
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

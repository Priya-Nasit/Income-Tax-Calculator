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
    <th style="background-color:#6c757d">Third Party Cover</th>
    <th style="background-color:#6c757d">Cashless Network Garages</th>
    <th style="background-color:#6c757d">Incurred Claim Ratio*</th>
    <th style="background-color:#6c757d">Special features</th>
    <th style="background-color:#6c757d">Exclusions</th>
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
     echo "<td>" . $row['third_party_cover'] . "</td>";
     echo "<td>" . $row['cashless_network_garages'] . "</td>";
     echo "<td>" . $row['incurred_claim_ratio'] . "</td>";
     echo "<td>" . $row['special_features'] . "</td>";
     echo "<td>" . $row['exclusion'] . "</td>";
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

<?php
include 'forms.php';
?>
<div class="content">
<div class="table-responsive">
<table class="table table-bordered" data-page-length='5' style="background-color:white;">
 <thead class="heading" style="background-color:#201919;color:white ">
  <tr>
  	<th style="background-color:#6c757d">Id</th>
    <th style="background-color:#6c757d">Card Image/Name</th>
    <th style="background-color:#6c757d">1st Year Fee</th>
    <th style="background-color:#6c757d">Rewards</th>
  <!-- <th style="background-color:#6c757d">More Information</th>-->
   
  </tr>    
  </thead>
 <div align="center">
 <?php
    foreach($item as $row)
      {  
      echo "<tr>";
     //echo "<td>" . $row['id']."</td>";
     
     echo "<td>" . $row['id'] . "</td>";
     echo "<td>" . $row['card name'] . "</td>";
     echo "<td>" . $row['1_year_fee'] . "</td>";
     echo "<td>" . $row['rewards'] . "</td>";
    
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

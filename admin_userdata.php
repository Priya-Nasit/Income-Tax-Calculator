<?php
include 'admin_dashboard.php';
include 'config.php';
?>

<div class="content">
<div class="table-responsive">
<table class="table table-bordered" data-page-length='5' style="background-color:white;">
 <thead class="heading" style="background-color:#201919;color:white ">
  <tr>
  	<th style="background-color:#6c757d">Id</th>
    <th style="background-color:#6c757d">Username</th>
     <th style="background-color:#6c757d">Lastname</th>
    <th style="background-color:#6c757d">Email</th>
    <th style="background-color:#6c757d">Gender</th>
    <th style="background-color:#6c757d">Phone</th>
    <th style="background-color:#6c757d">Created Date</th>
    <th style="background-color:#6c757d">Time</th>
    <th style="background-color:#6c757d">Delete</th>
  </tr>    
  </thead>
 <div align="center">
 <?php
 date_default_timezone_set("Asia/kolkata");
$date=date('Y-m-d');
    foreach($item as $row)
      {  
      echo "<tr>";
     //echo "<td>" . $row['id']."</td>";
     if($row['created_date']==$date)
     {
     echo "<td style='background-color:#cff01a7a'>" . $row['user_id'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['username'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['lastname'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['email'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['gender'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['phone'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['created_date'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['time'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>".'<a class="btn btn-info" href="admin_delete?user_id=' . $row['user_id'] . '">Delete' . '</a>'."</td>";

     //echo "<td>".'<a class="btn btn-info" href="update?id=' . $row['id'] . '">Edit' . '</a>'."</td>";
     
   echo "</tr>";
 }
 else
 {
    echo "<td>" . $row['user_id'] . "</td>";
     echo "<td>" . $row['username'] . "</td>";
     echo "<td>" . $row['lastname'] . "</td>";
     echo "<td>" . $row['email'] . "</td>";
     echo "<td>" . $row['gender'] . "</td>";
     echo "<td>" . $row['phone'] . "</td>";
     echo "<td>" . $row['created_date'] . "</td>";
     echo "<td>" . $row['time'] . "</td>";
     echo "<td>".'<a class="btn btn-info" href="admin_delete?user_id=' . $row['user_id'] . '">Delete' . '</a>'."</td>";
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


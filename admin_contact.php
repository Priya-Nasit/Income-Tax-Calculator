<?php
include 'admin_dashboard.php';
include 'config.php';

if(isset($_SESSION['admin']))
{
?>

<div class="content">
<div class="table-responsive">
<table class="table table-bordered" data-page-length='5' style="background-color:white;">
  <h4 style="color: red">Note*:Here Colored Row Show Your Today's Customer's Contact List</h4><br>
 <thead class="heading" style="background-color:#201919;color:white ">
  <tr>
  	<th style="background-color:#6c757d">Id</th>
    <th style="background-color:#6c757d">Username</th>
    <th style="background-color:#6c757d">Email</th>
    <th style="background-color:#6c757d">Message</th>
    <th style="background-color:#6c757d">Date</th>
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
      if($row['date']==$date)
     {
     echo "<td style='background-color:#cff01a7a'>" . $row['id'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['username'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['email'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['message'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['date'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>" . $row['time'] . "</td>";
     echo "<td style='background-color:#cff01a7a'>".'<a class="btn btn-info" href="admin_contact_delete?id=' . $row['id'] . '">Delete' . '</a>'."</td>";
   
 }
 else
 {
  echo "<td>" . $row['id'] . "</td>";
     echo "<td>" . $row['username'] . "</td>";
     echo "<td>" . $row['email'] . "</td>";
     echo "<td>" . $row['message'] . "</td>";
     echo "<td>" . $row['date'] . "</td>";
     echo "<td>" . $row['time'] . "</td>";
     echo "<td>".'<a class="btn btn-info" href="admin_contact_delete?id=' . $row['id'] . '">Delete' . '</a>'."</td>";
 }
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

<?php 
}
if(!isset($_SESSION['admin']))
{
   echo "<script>
       window.location.href='admin_login';
       </script>";
 }    
?>
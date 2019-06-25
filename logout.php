<?php
include 'dashboard.php';

//session_start();
session_destroy();
if(isset($_SESSION['username']))
{
  echo "<script>
       alert('Are you sure you want to logout!!');
       window.location.href='dashboard';
       </script>";
}
//redirect('auth/dashboard');
exit();

?>
</div>
</div>
</body>
</html>
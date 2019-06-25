<?php
include 'forms.php';
?>

<style>
body 
{
  background: #eee ;  
}
.wrapper {  
  margin-top:0px;
  margin-bottom:0px;
}
.form-signin {
  width: 410px;
  height:410px; 
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color:#4c6ef58a;
  border: 1px solid rgba(0,0,0,0.1);  

  .form-signin-heading,
   {
    margin-bottom: 30px;
  }

  .checkbox {
    font-weight: normal;
  }

  .form-control {
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    @include box-sizing(border-box);

    &:focus {
      z-index: 2;
    }
  }
  input[type="text"] {
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
  }
  input[type="password"] {
    margin-bottom: 20px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
}
</style>
</head>
<body>
<div class="container">      
 <div class="wrapper">

<form action="forgotpassword.php" class="form-signin" method="post">
    <h2 class="form-signin-heading">Change Password!!</h2><br><br>
   
    <input type="password" class="form-control"  name="password" placeholder="Enter old password"  autofocus="" value="<?php if(isset($_POST['submit'])) { echo $_POST['password']; }?>">
    <br>
    <input type="password" class="form-control"  name="npassword" placeholder="Enter New Password" ><br>
     <input type="password" class="form-control"  name="newpassword" placeholder="Confirm Password" ><br>      
    <button class="btn btn-lg btn-success btn-block" type="submit" name="submit" value="submit" >Change Password</button>   
</form>
  </div>
  </div>

  </body>
  </html>
  
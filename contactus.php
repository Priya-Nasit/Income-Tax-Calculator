<?php
include 'forms.php';
?>

<style type="text/css">
  body
{
  background-image: url(<?php echo base_url(); ?>assets/images/contact5.jpg);
  margin: 0;
 
 
 background-size: 100%;
 background-size: cover;

 background-repeat: no-repeat;
 background-position: fixed;
 

}

.form-contact 
{
  width: 450px;
  height: 455px;
  padding: 30px 35px 47px;
  background-color:#080d2da6;
  border: 1px solid rgba(0,0,0,0.1); 
  margin-top: 30px;
  .form-signin-heading
   {
     padding-top: 20px;
   }
 }

  .checkbox 
  {
    font-weight: normal;
  }

  .form-control 
  {
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    @include box-sizing(border-box);

    &:focus
     {
      z-index: 2;
    }
  }
  input[type="text"] 
  {
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
  }
  input[type="password"] 
  {
    margin-bottom: 20px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }

</style>

<div class="container">
  <!--<ol class="breadcrumb" style="background-color:#f6f6f6;">
  <li class="breadcrumb-item"><a href="home.php">Home</a></li>
  <li class="breadcrumb-item active">Contact us</li>
  </ol>-->
    <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>

  <div class="wrapper">
  <form action="" class="form-contact" method="post">
    <h2 class="form-contact-heading" style="color:#fffaf9">Contact Us!!</h2><hr>
      
     <input type="text" name="username" class="form-control" placeholder="Enter Username" value="<?php if(isset($_SESSION['username'])) { echo $_SESSION['username']; }?>" ><br>

      <input type="text" name="email" class="form-control" placeholder="Enter Email Address" value="<?php if(isset($_SESSION['email'])) { echo $_SESSION['email']; }?>"><br>
    
      <textarea class="form-control" name="message" rows="5" id="comment" placeholder="Enter Your Message"></textarea><br>
     
      <div class="container-login100-form-btn" align="center">
            <button class="btn btn-primary" name="submit">
              Submit
            </button>
          </div>
          <?php 
          if(isset($_POST['submit']))
             {
            if($_POST['message']!=NULL)
            {  
              echo "<script>
              alert('Your Message Successfully Send!!');
              </script>";
            }
            }
           ?>
    </form>
  </div>
  </div>


</div>
</div>
</body>
</html>
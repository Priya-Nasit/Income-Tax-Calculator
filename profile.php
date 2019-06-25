<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link  href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <title>Login Page</title>
  </head>
  <body>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    

    <div class="col-lg-8 col-lg-offset-2">
      <h1>Login Page:</h1>
   

<?php if(isset($_SESSION['success']))
{
  ?>
<div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
<?php
}
?>
HELLO, <?php echo $_SESSION['username'];?>
</div>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.css"></script>
     </form>
  </body>
</html>
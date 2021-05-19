<?php
session_start();
error_reporting(0);
?>
<?php
include("inc/config.php");
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
   $phone=$_POST['phone'];
    $address=$_POST['address'];
  $date=date("d-m-y @ g:i A");
$da=mysqli_query($con,"insert into user(name,email,password,phone,address,date_created) values('$name','$email','$password','$phone','$address','$date')");
if ($da) {
$_SESSION['msg']='<div class="alert alert-success hide alert-dismissible fade show" role="alert">
  <strong>Your account was created successfully, login to begin....</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
header("location:login.php");
} else {
  $_SESSION['msg']='<div class="alert alert-danger hide alert-dismissible fade show" role="alert">
  <strong>Error creating account....</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
header("location:login.php");
}

}

?>




<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>GAS STATION LOCATION SYSTEM</title>
    <style type="text/css">
    body{
  background: url(images/a2.png) no-repeat;
  width:100%;
  min-height: 700px;
  background-size: cover;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
    }
  </style>

  <?php
include 'inc/header.php';
  ?>



  <div id="wrapper">

    <div id="content-wrapper">
 <?php
               if (!empty($_SESSION['dmsg'])) {
                      echo $_SESSION['dmsg'];
                       $_SESSION['dmsg']="";
               }
         
               ?>
<div class="container-fluid col-lg-7">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register to create an account</div>
      <div class="card-body">
        <form action="#" method="post">
          <div class="form-group">
           <div class="form-label-group">
                  <input type="text" id="FullName" name="name" class="form-control" placeholder="FullName" required="required" autofocus="autofocus">
                  <label for="FullName">Fullname</label>
                </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
                  <input type="email" id="Email" class="form-control" name="email" placeholder="Email" required="required">
                  <label for="Email">Email</label>
                </div>
          </div>
          <div class="form-group">
          <div class="form-label-group">
                  <input type="text" id="Password" name="password" class="form-control" placeholder="Password" required="required">
                  <label for="Password">Password</label>
                </div>
          </div>
          <div class="form-group">
        <div class="form-label-group">
                  <input type="text" id="Phone" name="phone" class="form-control" placeholder="Phone Number" required="required">
                  <label for="Phone">Phone Number</label>
                </div>
          </div>
          <div class="form-group">
           <div class="form-label-group">
              <input type="text" id="Address" name="address" class="form-control" placeholder="Address" required="required">
              <label for="Address">Address</label>
            </div>
          </div>
          
          <div class="form-group">
        <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
          </div>
         
        </form>
        <div class="text-center">
         <a class="d-block small mt-3" href="login.php">Click to Login</a>
         
          <a class="d-block small mt-3" href="index.html"><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;Back to Home</a>
        </div>
      </div>
    </div>
<br/>

  </div>



      <!-- /.container-fluid -->
<!-- Main close -->

<?php
include 'inc/footer.php';
?>
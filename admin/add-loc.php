
<?php 
ob_start();
session_start();
include '../inc/checklogin.php';
checkLogin();
$_SESSION['wmsg']="";
include('../inc/config.php');
if(isset($_POST['sub'])){
extract($_POST);
$place=$_POST['place'];
$d=strtolower(str_replace(' ', '', $place));
$date=date("d-m-y @ g:i A");
$qb=mysqli_query($con,"insert into geodata(place,ff,ch,mq,mk,cl,sc,hs,sr,ht,hp,date) values('$d','$ff','$ch','$mq','$mk','$cl','$sc','$hs','$sr','$ht','$hp','$date')");
if($qb){
$_SESSION['wmsg']='<div class="alert alert-success hide alert-dismissible fade show" role="alert">
  <strong>Location was successfully Added...</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
else{
$_SESSION['wmsg']='<div class="alert alert-danger hide alert-dismissible fade show" role="alert">
  <strong>Error adding Location....</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';   
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

  <?php
include 'inc/header.php';
  ?>



  <div id="wrapper">
<?php
include 'inc/sidebar.php';
?>


    <div id="content-wrapper">

<div class="container-fluid col-lg-12">
  
    <div class="container-fluid col-lg-12">

         <p>
     <?php if (!empty($_SESSION['wmsg'])) {
                                    echo $_SESSION['wmsg'];
                                } 
                                 ?>
                            </p>
       <div class="card-header">Add Geo-data</div>

    </div>
     <div class="card-body">
                                <div class="basic-form">
                                    <form action="#" method="POST">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Please enter name of place to attach to map data :</p>
                                            <input type="text" class="form-control input-rounded" name="place" placeholder="Please enter name of place" required="required">
                                        </div>
                                                </div>

                                               


                                                 <div class="col-md-2">
                                                    <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Number of Football Field :</p>
                                            <input type="number" class="form-control input-rounded" name="ff"  required="required">
                                        </div>
                                                </div>

                                                 <div class="col-md-2">
                                                    <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Number of Church :</p>
                                            <input type="number" class="form-control input-rounded" name="ch"  required="required">
                                        </div>
                                                </div>


                                                 <div class="col-md-2">
                                                    <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Number of Mosques :</p>
                                            <input type="number" class="form-control input-rounded" name="mq"  required="required">
                                        </div>
                                                </div>

                                                 
                                                 <div class="col-md-2">
                                                    <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Number of Market :</p>
                                            <input type="number" class="form-control input-rounded" name="mk"  required="required">
                                        </div>
                                                </div>

                                                

                                                 <div class="col-md-2">
                                                    <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Number of Club&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</p>
                                            <input type="number" class="form-control input-rounded" name="cl"  required="required">
                                        </div>
                                                </div>

                                                 <div class="col-md-2">
                                                    <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Number of &nbsp;&nbsp;School :&nbsp;&nbsp;</p>
                                            <input type="number" class="form-control input-rounded" name="sc"  required="required">
                                        </div>
                                                </div>


                                                 <div class="col-md-2">
                                                    <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Number of Houses:</p>
                                            <input type="number" class="form-control input-rounded" name="hs"  required="required">
                                        </div>
                                                </div>


                                                 <div class="col-md-2">
                                                    <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Number of &nbsp;&nbsp;&nbsp;&nbsp;Store :&nbsp;&nbsp;&nbsp;</p>
                                            <input type="number" class="form-control input-rounded" name="sr"  required="required">
                                        </div>
                                                </div>


                                                <div class="col-md-2">
                                                    <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Number of &nbsp;&nbsp;&nbsp;&nbsp;Hotel :&nbsp;&nbsp;&nbsp;</p>
                                            <input type="number" class="form-control input-rounded" name="ht"  required="required">
                                        </div>
                                                </div>


                                                <div class="col-md-2">
                                                    <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Number of &nbsp;&nbsp;&nbsp;&nbsp; Hospital :&nbsp;&nbsp;&nbsp;</p>
                                            <input type="number" class="form-control input-rounded" name="hp"  required="required">
                                        </div>
                                                </div>






                                            </div>

                                        </div>
                                       
                                        
                                        <div class="form-actions">
                                        <button type="submit" name="sub" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                        <button type="reset" class="btn btn-dark">Clear</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
    </div>
  </div>

      <!-- /.container-fluid -->
<!-- Main close -->

<?php
include 'inc/footer.php';
?>
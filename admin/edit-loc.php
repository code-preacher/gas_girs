
<?php 
ob_start();
session_start();
$id=$_GET['id'];
include '../inc/checklogin.php';
checkLogin();
include('../inc/config.php');
if(isset($_POST['sub'])){
extract($_POST);
$date=date("d-m-y @ g:i A");
$qb=mysqli_query($con,"update geodata set place='$place',ff='$ff',ch='$ch',mq='$mq',mk='$mk',cl='$cl',sc='$sc',hs='$hs',sr='$sr',ht='$ht',hp='$hp',date='$date' where id='$id'");
if($qb){
$_SESSION['fmsg']='<div class="alert alert-success hide alert-dismissible fade show" role="alert">
  <strong>Location was successfully updated....</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
header("location:view-loc.php");
}
else{
$_SESSION['fmsg']='<div class="alert alert-danger hide alert-dismissible fade show" role="alert">
  <strong>Error updating Location....</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';  
header("location:view-loc.php"); 
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
       <div class="card-header">Modify Geo-data</div>
     


                            <?php
$qm=mysqli_query($con,"select * from geodata where id='$id'");
$r=mysqli_fetch_array($qm);
                            ?>

    </div>
     <div class="card-body">
                                <div class="basic-form">
                                    <form action="#" method="POST">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Please enter name of place to attach to map data :</p>
                                            <input type="text" class="form-control input-rounded" name="place" value="<?php echo $r['place']; ?>" placeholder="Please enter name of place" required="required">
                                        </div>
                                                </div>

                                               


                                                 <div class="col-md-2">
                                                    <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Number of Football Field :</p>
                                            <input type="number" class="form-control input-rounded" name="ff" value="<?php echo $r['ff']; ?>"  required="required">
                                        </div>
                                                </div>

                                                 <div class="col-md-2">
                                                    <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Number of Church :</p>
                                            <input type="number" class="form-control input-rounded" name="ch" value="<?php echo $r['ch']; ?>"  required="required">
                                        </div>
                                                </div>


                                                 <div class="col-md-2">
                                                    <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Number of Mosques :</p>
                                            <input type="number" class="form-control input-rounded" name="mq" value="<?php echo $r['mq']; ?>" required="required">
                                        </div>
                                                </div>

                                                 
                                                 <div class="col-md-2">
                                                    <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Number of Market :</p>
                                            <input type="number" class="form-control input-rounded" name="mk" value="<?php echo $r['mk']; ?>" required="required">
                                        </div>
                                                </div>

                                                

                                                 <div class="col-md-2">
                                                    <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Number of Club&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</p>
                                            <input type="number" class="form-control input-rounded" name="cl" value="<?php echo $r['cl']; ?>" required="required">
                                        </div>
                                                </div>

                                                 <div class="col-md-2">
                                                    <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Number of &nbsp;&nbsp;School :&nbsp;&nbsp;</p>
                                            <input type="number" class="form-control input-rounded" name="sc" value="<?php echo $r['sc']; ?>"  required="required">
                                        </div>
                                                </div>


                                                 <div class="col-md-2">
                                                    <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Number of Houses:</p>
                                            <input type="number" class="form-control input-rounded" name="hs" value="<?php echo $r['hs']; ?>" required="required">
                                        </div>
                                                </div>


                                                 <div class="col-md-2">
                                                    <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Number of &nbsp;&nbsp;&nbsp;&nbsp;Store :&nbsp;&nbsp;&nbsp;</p>
                                            <input type="number" class="form-control input-rounded" name="sr" value="<?php echo $r['sr']; ?>"  required="required">
                                        </div>
                                                </div>


                                                <div class="col-md-2">
                                                    <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Number of &nbsp;&nbsp;&nbsp;&nbsp;Hotel :&nbsp;&nbsp;&nbsp;</p>
                                            <input type="number" class="form-control input-rounded" name="ht" value="<?php echo $r['ht']; ?>"  required="required">
                                        </div>
                                                </div>


                                                <div class="col-md-2">
                                                    <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Number of &nbsp;&nbsp;&nbsp;&nbsp; Hospital :&nbsp;&nbsp;&nbsp;</p>
                                            <input type="number" class="form-control input-rounded" name="hp" value="<?php echo $r['hp']; ?>" required="required">
                                        </div>
                                                </div>






                                            </div>

                                        </div>
                                       
                                        
                                        <div class="form-actions">
                                        <button type="submit" name="sub" class="btn btn-success"> <i class="fa fa-check"></i> Update</button>
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
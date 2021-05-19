<?php
ob_start();
session_start();
error_reporting(0);
include '../inc/checklogin.php';
include '../inc/config.php';
checkLogin();
$r="";
?>

<?php
if(isset($_POST['sub'])){
$d=$_POST['data']; 
$data= strtolower(str_replace(' ', '', $d));

$g=mysqli_query($con,"select * from geodata where place='$data' ");
$jp=mysqli_fetch_array($g);

$gx=mysqli_query($con,"select * from map where name='$data' ");
$jx=mysqli_fetch_array($gx);

if($jp){
$r='
  <div class="container-fluid">

  </div>
            <div class="container-fluid">
                <!-- Start Page Content -->



    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">'. $data.' MAP&nbsp;&nbsp; '. $jx['latitude'].'&nbsp;|'. $jx['longitude'].'&nbsp;|Located at:&nbsp;'. $jx['location'].'&nbsp;,&nbsp;Otukpo, Benue State

             </h3><br>'.$jx['description'].'<br><br>
       <center>     <img src="../img/'. $jx['image'].'" class="" style="width:85%;height: 45%;"></center><br>
           <center>     <img src="../img2/'. $jx['image2'].'" class="" style="width:85%;height: 400px;"></center>
        </div>
    </div>

                <div class="row">

                <div class="col-md-12">
                        
                                <h4> Searched Location : <span style="color:#006e80;">
                            '. $data.'
                        </span> </h4><hr/>

                           
                             
 
  </div>




  <div class="col-md-2">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                  <span><i class="fa fa-circle f-s-50 color-success"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>'.$jp['ff'].'</h2>
                                    <p class="m-b-0">Football Field</p>
                                </div>
                            </div>
                        </div>
                    </div>




  <div class="col-md-2">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                  <span><i class="fa fa-home f-s-50 color-warning"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>'.$jp['ch'].'</h2>
                                    <p class="m-b-0">Church</p>
                                </div>
                            </div>
                        </div>
                    </div>


  <div class="col-md-2">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                  <span><i class="fa fa-home f-s-50 color-danger"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>'.$jp['mq'].'</h2>
                                    <p class="m-b-0">Mosque</p>
                                </div>
                            </div>
                        </div>
                    </div>






  <div class="col-md-2">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                  <span><i class="fa fa-shopping-basket f-s-50 color-danger"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>'.$jp['mk'].'</h2>
                                    <p class="m-b-0">Market</p>
                                </div>
                            </div>
                        </div>
                    </div>







  <div class="col-md-2">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                  <span><i class="fa fa-home f-s-50 color-success"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>'.$jp['cl'].'</h2>
                                    <p class="m-b-0">Club</p>
                                </div>
                            </div>
                        </div>
                    </div>



  <div class="col-md-2">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                  <span><i class="fa fa-building f-s-50 color-primary"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>'.$jp['sc'].'</h2>
                                    <p class="m-b-0">School</p>
                                </div>
                            </div>
                        </div>
                    </div>




                     <div class="col-md-2">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                  <span><i class="fa fa-building f-s-50 color-info"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>'.$jp['hs'].'</h2>
                                    <p class="m-b-0">House</p>
                                </div>
                            </div>
                        </div>
                    </div>


 <div class="col-md-2">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                  <span><i class="fa fa-home f-s-50 color-info"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>'.$jp['sr'].'</h2>
                                    <p class="m-b-0">Store</p>
                                </div>
                            </div>
                        </div>
                    </div>



  <div class="col-md-2">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                  <span><i class="fa fa-hotel f-s-50 color-dark"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>'.$jp['ht'].'</h2>
                                    <p class="m-b-0">Hostel</p>
                                </div>
                            </div>
                        </div>
                    </div>


  <div class="col-md-2">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                  <span><i class="fa fa-medkit f-s-50 color-dark"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>'.$jp['hp'].'</h2>
                                    <p class="m-b-0">Hospital</p>
                                </div>
                            </div>
                        </div>
                    </div>
 

               
                  
                   
                </div>
                
            </div>';
            
}
else{

$r='
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                <div class="col-md-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>SEARCH RESULT</h4><hr/>

                                <p>No result found for 
                        <span style="color:red;">
                            "'.$_POST['data'].'"</span></b></i>
                        </span>       
                               </p> 

                            </div>
                           

                        </div>
                    </div>
                   
                </div>
                
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

<!-- Main open -->
      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Search Location</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
         
   <h5>&nbsp;&nbsp;PLEASE SELECT A PLACE TO RETRIEVE GAS STATION INFORMATION...</h5>

            <div class="col-md-10">
               <form action="#" method="post">
          <div class="form-group">

                  <select name="data" required="required" class="form-control" required="required" autofocus="autofocus" style="height: 60px;font-size: 1.1em;">
                 
                    <?php
                    $zc=mysqli_query($con,"select place from geodata");
                    while ($zt=mysqli_fetch_array($zc)) {
               ?>
               <option value="<?php echo $zt['place']; ?>"><?php echo strtoupper($zt['place']); ?></option>

               <?php
                    }
                    ?>
                  </select>

                
                </div>
               
          </div>


            <div class="col-md-2">
               <div class="form-group">
        <button type="submit" name="sub" class="btn btn-primary btn-block" style="height: 60px;">Search</button>
          </div>
          
            </div>
    </form>
        </div>


      

      </div>
      <!-- /.container-fluid -->
<!-- Main close -->

<?php  echo $r; ?>
 <?php  echo $r=""; ?>


<?php
include 'inc/footer.php';
?>
<?php 
ob_start();
session_start();
include '../inc/checklogin.php';
checkLogin();
include('../inc/config.php');
$qm=mysqli_query($con,"select * from geodata order by id desc");
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
         <li class="breadcrumb-item active">Location Data</li>
        </ol>

 <?php
               if (!empty($_SESSION['fmsg'])) {
                      echo $_SESSION['fmsg'];
                       $_SESSION['fmsg']="";
               }
         
               ?>

<!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-map-marker"></i>
            ALL LOCATIONS</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                   <th>#</th>
                                                <th>Place</th>
                                              
                                                <th>Football Field</th>
                                                 <th>Church</th>
                                                  <th>Mosque</th>
                                             
                                                    <th>Market</th>
                                                 
                                                      <th>Club</th>
                                                       <th>School</th>
                                                    
                                                         <th>House</th>
                                                          <th>Store</th>
                                                          <th>Hotel</th>
                                                          <th>Hospital</th>


                                                <th>Edit</th>
                                                <th>Delete</th>
                                                <th>Date</th>
                  </tr>
                </thead>
                
         <tbody>
                                            <?php
                                            $id=0;
                                            while($r=mysqli_fetch_array($qm)) {
                                                $id++;

                                             ?>
                                            <tr>
                                                <th scope="row"><?php echo $id; ?></th>
                                                <td><?php echo $r['place']; ?></td>
                                            
                                                <td><?php echo $r['ff']; ?></td>
                                                <td><?php echo $r['ch']; ?></td>
                                                <td><?php echo $r['mq']; ?></td>
                                         
                                                <td><?php echo $r['mk']; ?></td>
                                            
                                                <td><?php echo $r['cl']; ?></td>
                                                <td><?php echo $r['sc']; ?></td>
                                       
                                                <td><?php echo $r['hs']; ?></td>
                                                <td><?php echo $r['sr']; ?></td>
                                                <td><?php echo $r['ht']; ?></td>
                                                <td><?php echo $r['hp']; ?></td>

                                                <td><a href="edit-loc.php?id=<?php echo $r['id'];?>" onClick="return confirm('Are you sure you want to edit this geodata?')"><i class="fa fa-edit"></i></a></td>
                                                <td><a href="del-loc.php?id=<?php echo $r['id'];?>" onClick="return confirm('Are you sure you want to delete this geodata ?')"><i class="fa fa-trash"></i></a></td>
                                                <td><?php echo $r['date']; ?></td>
                                            </tr>
                                            <?php                                                
                                            }
                                             ?>
                                           
                                        </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->
<!-- Main close -->

<?php
include 'inc/footer.php';
?>
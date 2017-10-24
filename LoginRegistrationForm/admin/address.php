<?php include_once "inc/header.php";?>
 <?php include_once "../Classes/schedule.php";?>
  <?php include_once "../Classes/resume.php";?>

      <!-- sidebar menu: : style can be found in sidebar.less -->
 <?php include_once "inc/sidebar.php";?>    
 <?php
      $time = new Schedule();
      /*if (isset($_GET['delete'])) {
      $Did = $_GET['delete'];
      $delCat = $edu->delByid($Did);
    }*/
  ?>
  <?php
    if (!isset($_GET['uId']) || $_GET['uId'] == NULL ) {
        
      }else{
        $uId = $_GET['uId'];
      }

?> 
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Address</h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <?php
        if (isset($addSchedule)) {
          echo $addSchedule;
        }
      ?>
      <div class="row">
      <h4>Present Address</h4>
      <?php
        $getadd = $time->getAlladdressby($uId);
        if ($getadd) {
         while ($value = $getadd->fetch_assoc()) {
         
      ?>
      <div class="col-md-5">
        <p>Flat : <?php $value['flat'];?></p>
        <p>Holding : <?php $value['holding'];?></p>
        <p>Building : <?php $value['building'];?></p>
        <p>Road : <?php $value['road'];?></p>
        <p>Block : <?php $value['block'];?></p>
        <p>Area : <?php $value['area'];?></p>
        <p>Divission : <?php $value['divId'];?></p>
        <p>District : <?php $value['distId'];?></p>
        <p>Thana : <?php $value['thId'];?></p>
        <p>Post : <?php $value['postId'];?></p>
      </div>
<?php } } ?>
 <div class="col-md-3">


      </div>
      <?php
        $getadd = $time->getPaddressby($uId);
        if ($getadd) {
         while ($value = $getadd->fetch_assoc()) {
         
      ?>
      <h4>Permanent Address</h4>
      <div class="col-md-5">
        <p>Flat : <?php
        if ($value['id'] == "1") {
          echo "Same as Present address";
        }
         ;
         ?></p>
        <p>Flat : <?php $value['flat'];?></p>
        <p>Holding : <?php $value['holding'];?></p>
        <p>Building : <?php $value['building'];?></p>
        <p>Road : <?php $value['road'];?></p>
        <p>Block : <?php $value['block'];?></p>
        <p>Area : <?php $value['area'];?></p>
        <p>Divission : <?php $value['divId'];?></p>
        <p>District : <?php $value['distId'];?></p>
        <p>Thana : <?php $value['thId'];?></p>
        <p>Post : <?php $value['postId'];?></p>

      </div>
      <?php } } ?>
      </div>
      <!-- /.row -->

      
      <!-- Main row -->
      <div class="row">
        
            </div>
           
    
         

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php include_once "inc/footer.php";?> 
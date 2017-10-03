       <?php include_once "inc/header.php";?>
 <?php include_once "../Classes/resume.php";?>
          <?php
            $edu = new Resume();
          ?>
      <!-- sidebar menu: : style can be found in sidebar.less -->
 <?php include_once "inc/sidebar.php";?>    

  <!-- Content Wrapper. Contains page content -->
<?php
    if (!isset($_GET['uId']) || $_GET['uId'] == NULL ) {
        echo "<script>window.location = 'applied_job.php'</script>";
      }else{
        $uId = $_GET['uId'];
      }

?> 
<?php 

    
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        $status = $_POST['status'];
        
        $addcomment = $edu->updateStatus($status, $uId);
    }
 
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Control panel
       
      </h1>
      <h3><?php
      if (isset($addcomment)) {
        echo $addcomment;
      }

      ?></h3>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <?php
        $getschool = $edu->getSchoolinfoby($uId);
        if ($getschool) {
            $i = 0;
            while($value = $getschool->fetch_assoc()){
                $i++;

    ?>
      <div class="row">
       <table class="table">
    <thead>
      <tr>
        <td>SL</td>
        <td>School Name</td>
        <td>Group</td>
        <td>cgpa</td>
        <td>Passing Year</td>
        <td>Board</td>
      </tr>
    </thead>
    <tbody>
    <h3>Secondary School Information</h3>
    
      <tr>
        <td><?php echo $i ;?></td>
        <td><?php echo $value['name'];?></td>
        <td><?php echo $value['gId'];?></td>
        <td><?php echo $value['cgpa'];?></td>
        <td><?php echo $value['pyearid'];?></td>
      </tr>
   
    </tbody>
  </table>
      </div>
    <?php } } ?>
      <!-- /.row -->
<!-- /2nd row -->
<?php
        $geto = $edu->getoLevelinfoby($uId);
        if ($geto) {
            $i = 0;
            while($value = $geto->fetch_assoc()){
                $i++;

    ?>
      <div class="row">
       <table class="table">
    <thead>
      <tr>
        <td>SL</td>
        <td>Institute</td>
        
        <td>cgpa</td>
        <td>Passing Year</td>
        <td>Board</td>
      </tr>
    </thead>
    <tbody>
    <h3>O-level Information</h3>
    
      <tr>
        <td><?php echo $i ;?></td>
        <td><?php echo $value['name'];?></td>
        
        <td><?php echo $value['cgpa'];?></td>
        <td><?php echo $value['pyearid'];?></td>
        <td><?php echo $value['divId'];?></td>
      </tr>
   
    </tbody>
  </table>
      </div>
      <?php } } ?>
<!-- /2nd row end-->


      <!-- /3rd row -->
<?php
        $geth = $edu->gethscinfoby($uId);
        if ($geth) {
            $i = 0;
            while($value = $geth->fetch_assoc()){
                $i++;

    ?>
      <div class="row">
       <table class="table">
    <thead>
      <tr>
        <td>SL</td>
        <td>Institute</td>
        
        <td>cgpa</td>
        <td>Passing Year</td>
        <td>Board</td>
      </tr>
    </thead>
    <tbody>
    <h3>HSC Information</h3>
    
      <tr>
        <td><?php echo $i ;?></td>
        <td><?php echo $value['name'];?></td>
        
        <td><?php echo $value['cgpa'];?></td>
        <td><?php echo $value['pyear'];?></td>
        <td><?php echo $value['divName'];?></td>
      </tr>
   
    </tbody>
  </table>
      </div>
      <?php } } ?>
<!-- /3rd row end-->

      <!-- /4th row -->
<?php
        $getdip = $edu->getdiplomainfoby($uId);
        if ($getdip) {
            $i = 0;
            while($value = $getdip->fetch_assoc()){
                $i++;

    ?>
      <div class="row">
       <table class="table">
    <thead>
      <tr>
        <td>SL</td>
        <td>Institute</td>
        
        <td>cgpa</td>
        <td>Passing Year</td>
        <td>Board</td>
      </tr>
    </thead>
    <tbody>
    <h3>Diploma Information</h3>
    
      <tr>
        <td><?php echo $i ;?></td>
        <td><?php echo $value['name'];?></td>
        <td><?php echo $value['degName'];?></td>
         <td><?php echo $value['deptName'];?></td>
        <td><?php echo $value['cgpa'];?></td>
        <td><?php echo $value['pyear'];?></td>
        <td><?php echo $value['divName'];?></td>
      </tr>
   
    </tbody>
  </table>
      </div>
      <?php } } ?>
<!-- /4th row end-->
      <!-- Main row -->
    <div class="container">
      <div class="row">
      
  <h3>Select Your Option For This Candidate</h3>
  
  <form action="" method="post">
   <label>Slecet Your Comment</label>
    <br>
                    <input class="w3-radio" type="radio"   name="status" value="1" checked>
                    <label>Select</label>
                    &nbsp;
                    <input class="w3-radio" type="radio"   name="status" value="2">
                    <label>Deselect</label>
                    &nbsp;
                    <input class="w3-radio" type="radio"   name="status" value="3">
                    <label>Confirm</label>
   <p><button type="submit" name="submit" class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding">Submit</button></p>
  </form>
 
      </div>
    </div>      
    
         

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php include_once "inc/footer.php";?> 
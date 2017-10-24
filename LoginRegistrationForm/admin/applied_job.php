<?php include_once "inc/header.php";?>
      <?php include_once "../Classes/module.php";?>
      <?php include_once "../helpers/Format.php";?>

<?php
    $allM = new Module();
     $fm = new Format();
    /* if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $userjob = $allM->jobInput($_POST);
    }*/
?>
 <?php include_once "inc/sidebar.php";?>    

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Control panel
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
       <table class="table">
    <thead>
      <tr>
        <td>SL</td>
        <td>Applicant</td>
        <td>Job Title</td>
        <td>Department</td>
        
        <td>Last date<br/> of Application</td>
        
        <td>Registration Date</td>
       <td>Interview Date</td>
      
        <td>Action</td>
        

      </tr>
    </thead>
    <tbody>
    <?php
        //$userId = Session::get("userId");
        $getCandidate = $allM->getCadidateList();
        if ($getCandidate) {
            $i = 0;
            while($value = $getCandidate->fetch_assoc()){
                $i++;

    ?>
      <tr>
      <?php 
        $uId = $value['userId'];
        $jId = $value['jId'];
       ?>
        <td><?php echo $i ;?></td>
        <td><?php echo $value['userName'];?></td>
        <td><?php echo $value['jobtitle'];?></td>
        <td><?php echo $value['deptName'];?></td>
        
        <td><?php echo $value['lastdApplication'];?></td>
        <?php
        //$userId = Session::get("userId");
        $gette = $allM->getdate($uId);
        if ($gette) {
           
            while($value = $gette->fetch_assoc()){
                

        ?>
        <td><?php echo $fm->Dateformat($value['date']);?></td>
        <?php } } ?>
       <?php
        //$userId = Session::get("userId");
        $gette = $allM->getinterdate($uId, $jId);
        if ($gette) {
           
            while($value = $gette->fetch_assoc()){
                

        ?>
        <td><?php echo $fm->Dateformat($value['interviewdate']);?></td>
        <?php } } ?>
        <td>
        <a href="applicant_details.php?uId=<?php echo $value['userId'];?>">
        <input type="button" value="View"/> </a>
        </td>
        
       

      </tr>
   <?php } } ?>
    </tbody>
  </table>
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
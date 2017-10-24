<?php include_once "inc/header.php";?>
      <?php include_once "../Classes/module.php";?>

<?php
    $allM = new Module();
     if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $jId = $_POST['jId'];
        $userjob = $allM->jobPosting($jId);
    }
?>
 <?php include_once "inc/sidebar.php";?>    

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Control panel
       
      </h1>
      <?php 
        if (isset($userjob)) {
          echo $userjob;
        }
      ?>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
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
        <td>Job Title</td>
        <td>Department</td>
        <td>Job level</td>
        <td>Last date of Application</td>
        <td>Education</t>
        
        <td>Min Compansation</td>
        <td>Max Compansation</td>
        <td>Expected Joining Date</td>
        <td>Pre-requisite For Joining:</td>
        

      </tr>
    </thead>
    <tbody>
    <?php
        $getAjobs = $allM->getjobList();
        if ($getAjobs) {
            $i = 0;
            while($value = $getAjobs->fetch_assoc()){
                $i++;

    ?>
      <tr>
        <td><?php echo $i ;?></td>
        <td><span style="text-decoration-line: underline;"><a href="job_description.php?jobId=<?php echo $value['jId'];?>" title="Job Description/Responsibilities"><?php echo $value['jobtitle'];?></a></span></td>
        <td><?php echo $value['deptName'];?></td>
        <td><?php echo $value['levelName'];?></td>
        <td><?php echo $value['ldApplication'];?></td>
        <td><?php echo $value['degName'];?></td>
        <td><?php echo $value['mimcomp'];?></td>
        <td><?php echo $value['mxmcomp'];?></td>
        <td><?php echo $value['expDate'];?></td>
        <td><?php echo $value['prerequisite'];?></td>
        <td><?php echo $value['joblocation'];?></td>
       
       <form action="" method="post">
              <td><input type="hidden" name="jId" value="<?php echo $value['jId'];?>"></td>
              <td><input type="submit" name="submit" value="Post"/></td>
        </form>


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
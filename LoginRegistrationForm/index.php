<?php include_once "inc/header.php";?>
<?php include_once "Classes/address.php";?>
<?php include_once "Classes/frontclass.php";?>

<?php
    $allF = new Front();
    /* if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $userjob = $allM->jobInput($_POST);
    }*/
?>

<?php 
  $add = new Address();
   if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $insertAdd = $add->addressInsert($_POST);
    }
 
?>

        

        
<br/><br/>
        
        
        <div class="container">
            <h3> Welcome to Kyoto Recruitment Portal</h3>
            
            <br>
            
            <div>
                <p>
                    Complete the following steps to complete your CV. Without completing CV, there will be no job interview. You <strong>must</strong> provide the following informations.
                </p>

                <br>

                <ol>
                    <li> Your <b> Personal</b> Infomation. </li>
                    <li> Information about your <b> Address</b>. </li>
                    <li> Your <b> Educational </b> details. </li>
                </ol>

            </div>
            
            <br>
            <header>
                <h3>Choose Your Job From List</h3>
            </header>
            <div>
                <table class="table">
    <thead>
      <tr>
        <th>SL</th>
        <th>Job Title</th>
        <th>Department</th>
        <th>Job level</th>
        <th>Last date of Application</th>
        <th>Education</th>
        
        <th>Monthly Compansation</th>
        <th>Expected Joining Date</th>
        <th>Pre-requisite For Joining:</th>
        <th>Action</th>
        

      </tr>
    </thead>
    <tbody>
    <?php
        $getAjobs = $allF->getjobList();
        if ($getAjobs) {
            $i = 0;
            while($value = $getAjobs->fetch_assoc()){
                $i++;

    ?>
      <tr>
        <td><?php echo $i ;?></td>
        <td><?php echo $value['jobtitle'];?></td>
        <td><?php echo $value['deptName'];?></td>
        <td><?php echo $value['levelName'];?></td>
        <td><?php echo $value['ldApplication'];?></td>
        <td><?php echo $value['degName'];?></td>
        <td><?php echo $value['mcomp'];?></td>
        <td><?php echo $value['expDate'];?></td>
        <td><?php echo $value['prerequisite'];?></td>
        <td><?php echo $value['joblocation'];?></td>

        <td>
        <a href="apply.php?id=<?php echo $value['jsId'];?>"><button type="button" class="btn btn-primary">Apply</button></a>
        </td>
       

      </tr>
   <?php } } ?>
    </tbody>
  </table>
            </div>
            
        </div>
       <br> <br>

<?php include_once "inc/footer.php";?>
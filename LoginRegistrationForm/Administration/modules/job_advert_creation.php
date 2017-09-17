<?php include_once "../../Classes/module.php";?>

<?php
    $allM = new Module();
     if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $userjob = $allM->jobInput($_POST);
    }
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Admin: Job Advertisement </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../assets/css/form.css">
        <link rel="stylesheet" href="../assets/css/footer.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        
    </head>
    
    
    <body>
        
        <div id="banner">
                <img src="../assets/kyotoBanner.PNG">
            
            <div class="container-fluid w3-bar w3-red" style="width:100%">
                <a href="../create.php"> Create Panel </a> &nbsp;
                <a href="../index.php"> Dashboard</a>
            </div>
        </div> <br>
        
        
        
        
        
        <div id="adminForm">
            <h3 id="Header"> Job Advertisement Form</h3>
            <br>
            <?php
              if (isset($userjob)) {
                  echo $userjob;
              }
            ?>
            <form action="" method="post" style="padding:2px">
                                  <p> 
                                     <label for="sel1">Job Title</label>
                                        <select class="form-control" id="sellect" name="jId">
                                          <option>Select Job Title</option>
                                           <?php
                                             $getJob = $allM->getAlljobs();
                                              if ($getJob) {
                                                while ($value = $getJob->fetch_assoc()) {
                                                  
                                            ?>
                                           <option value="<?php echo $value['jId'];?>" ><?php echo $value['jobtitle'];?></option>  
                                          <?php } } ?>    
                                        </select>
                                        
                                       
                                    <br>
                                </p>
              
                                    <p> 
                                     <label for="sel1">Department</label>
                                        <select class="form-control" id="sellect" name="dId">
                                          <option>Select Department</option>
                                            <?php
                                                $getdept = $allM->getAllDept();
                                                if ($getdept) {
                                                  while ($value = $getdept->fetch_assoc()) {
                                                    
                                              ?>
                                           <option value="<?php echo $value['dId'];?>" ><?php echo $value['deptName'];?></option>  
                                          <?php } } ?>    
                                        </select>
                                        
                                       
                                    <br>
                                </p>
                                 <p> 
                                     <label for="sel1">Job Level</label>
                                        <select class="form-control" id="sellect" name="levelId">
                                          <option>Select Job Level</option>
                                            <?php
                                                $getJob = $allM->getJoblevel();
                                                if ($getJob) {
                                                  while ($value = $getJob->fetch_assoc()) {
                                                    
                                              ?>
                                           <option value="<?php echo $value['levelId'];?>" ><?php echo $value['levelName'];?></option>  
                                          <?php } } ?>    
                                        </select>
                                        
                                       
                                    <br>
                                </p>
                <div class="form-group" style="padding:2px">
                    <div class='input-group date' id='datetimepicker1'> <b> Last date of Application </b>
                        <input type='date' name="ldApplication" class="form-control" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
                <p> 
                                     <label for="sel1">Education</label>
                                        <select class="form-control" id="sellect" name="degId">
                                          <option>Minimum Education Required</option>
                                            <?php
                                                $getMedu = $allM->getMinimumedu();
                                                if ($getMedu) {
                                                  while ($value = $getMedu->fetch_assoc()) {
                                                    
                                              ?>
                                           <option value="<?php echo $value['degId'];?>" ><?php echo $value['degName'];?></option>  
                                          <?php } } ?>    
                                        </select>
                                        
                                       
                                    <br>
                                </p>
                
                   
                  
                
                <div class="form-group" style="padding:2px">
                    <div class='input-group date' id='datetimepicker1'> <b> Last date of Application </b>
                        <input type='date' name="joblocation" class="form-control" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
                <p> 
                
                <div class="form-group" style="padding:2px">
                  <label for="usr">Monthly Compansation:</label>
                  <input type="number" name="mcomp" class="form-control" id="compansation">
                </div>
                
                <div class="form-group" style="padding:2px">
                    <div class='input-group date' id='datetimepicker1'> <b> Expected Joining Date </b>
                        <input type='date' name="expDate" class="form-control" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
                
                <div class="form-group" style="padding:2px">
                  <label for="usr">Pre-requisite For Joining:</label>
                  <input type="text" name="prerequisite" class="form-control" id="usr">
                </div>
                
                <button type="submit" name="submit" class="btn btn-default" style="padding:2px">Submit</button>
                
            </form>
        </div> &nbsp; <br> 
        
        <div>
            <br>
            <footer>
                <p> Copyright &copy; Kyoto Engineering &amp; Automation Ltd.</p>
            </footer>
        </div>
    </body>
</html>
<?php include_once "inc/header.php";?>
<?php include_once "Classes/educationc.php";?>
<?php include_once "Classes/cvdrop.php";?>

<?php 
  $edu = new Education();
  $userId = Session::get("userId");
   if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $insertdiploma = $edu->diplomaInsert($_POST, $userId);
    }
 
?>


        <div class="container" ">
            
            <h2>Diploma Degree Details</h2> <br>
           <div class="row">
               <div class="col-md-6">
                   <form action="" method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1">Name of Institution</label>
    <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group">
                <label for="exampleFormControlSelect1">Name Of Degree</label>
                <select class="form-control" id="exampleFormControlSelect1" name="degId">
                <option>Select Your Degree</option>
                 <?php
                    $cvd = new Curriculum();
                    $getdg = $cvd->getDegree();
                    if ($getdg) {
                    while ($value = $getdg->fetch_assoc()) {
                   
                ?>
                   <option value="<?php echo $value['degId'];?>" ><?php echo $value['degName'];?></option>
                  <?php } } ?>
                </select>
              </div>
  <div class="form-group">
                <label for="exampleFormControlSelect1">Name Of Department</label>
                <select class="form-control" id="exampleFormControlSelect1" name="dId">
                <option>Select Your Department</option>
                 <?php
                    $cvd = new Curriculum();
                    $getyd = $cvd->getDept();
                    if ($getyd) {
                    while ($value = $getyd->fetch_assoc()) {
                   
                ?>
                   <option value="<?php echo $value['dId'];?>" ><?php echo $value['deptName'];?></option>
                  <?php } } ?>
                </select>
              </div>
  <div class="form-group">
                <label for="exampleFormControlSelect1">Education Board</label>
                <select class="form-control" id="exampleFormControlSelect1" name="divId">
                <option>Select Board/Controlling Authority</option>
                 <?php
                    $cvd = new Curriculum();
                    $getyr = $cvd->getDivission();
                    if ($getyr) {
                    while ($value = $getyr->fetch_assoc()) {
                   
                ?>
                   <option value="<?php echo $value['divId'];?>" ><?php echo $value['divName'];?></option>
                  <?php } } ?>
                </select>
              </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">G.P.A</label>
    <input type="text" name="cgpa" class="form-control" id="exampleFormControlInput1" placeholder="CGPA 5.00">
  </div>
   <div class="form-group">
                <label for="exampleFormControlSelect1">Passing Year</label>
                <select class="form-control" id="exampleFormControlSelect1" name="pyearid">
                <option>Select Year</option>
                 <?php
                    $cvd = new Curriculum();
                    $getyr = $cvd->getYear();
                    if ($getyr) {
                    while ($value = $getyr->fetch_assoc()) {
                   
                ?>
                   <option value="<?php echo $value['pyearid'];?>" ><?php echo $value['pyear'];?></option>
                  <?php } } ?>
                </select>
              </div>
  <p><button type="submit" name="submit" class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding">Submit</button></p>
</form>
               </div>
           </div> 
           
            
        </div>




















<?php include_once "inc/footer.php";?>
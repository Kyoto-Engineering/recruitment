<?php include_once "inc/header.php";?>
<?php include_once "Classes/address.php";?>

<?php 
  $add = new Address();
   if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $insertAdd = $add->addressInsert($_POST);
    }
 
?>

        

        
<br/><br/>
        
        <div class="w3-bar">
            <a href="basicinfo.php" class="w3-bar-item"> Basic Info</a> 
            <a href="personalInfo.php" class="w3-bar-item"> Personal Info </a>
            <a href="cv.php" class="w3-bar-item"> My CV</a>
        </div>
        
        <div>
            <h3> WelCome to Kyoto Recruitment Portal</h3>
            <p></p>
        </div>
       

<?php include_once "inc/footer.php";?>
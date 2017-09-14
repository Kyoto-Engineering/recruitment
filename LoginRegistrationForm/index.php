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
            <a href="index.php" class="w3-bar-item"> Home </a>
            <a href="basicinfo.php" class="w3-bar-item"> Basic Info</a> 
            <a href="personalInfo.php" class="w3-bar-item"> Personal Info </a>
            <a href="cv.php" class="w3-bar-item"> Educational Details </a>
        </div>
        
        <div>
            <h3> Welcome to Kyoto Recruitment Portal</h3>
            <p> Complete the following steps to complete your CV. Without completing CV, there will be no job interview. You have to provide
                the following informations.
            </p>
            <ol>
                <li> Your <b> Basic Information </b>. </li>
                <li> Your <b> Personal Infomation </b>. </li>
                <li> Your <b> Educational Details </b>. </li>
            </ol>
            
        </div>
       

<?php include_once "inc/footer.php";?>
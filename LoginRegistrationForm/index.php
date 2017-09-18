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
            <a href="personalInfo.php" class="w3-bar-item"> Personal Info </a>
            <a href="basicinfo.php" class="w3-bar-item"> Address Info</a>
            <a href="education.php" class="w3-bar-item"> Educational Details </a>
            <a href="professionalTraining.php" class="w3-bar-item"> Professional Training </a>
            <a href="workExperience.php" class="w3-bar-item"> WorK Experience </a>
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
            
            <p> If you have received/attended any kind of professional training you can add that to your CV in the <a href="professionalTraining.php">professional training</a>  section.</p>
            
        </div>
       <br> <br>

<?php include_once "inc/footer.php";?>
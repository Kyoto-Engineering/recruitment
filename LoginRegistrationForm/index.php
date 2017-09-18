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
            <a href="workExperience.php" class="w3-bar-item"> Work Experience </a>
        </div>
        
        <div class="w3-container">
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
            
            <div>
                <p>
                    <b> You should provide the following informations only if you meet those information criteria.</b>
                </p>
                
                <br>
                
                <p> If you have received/attended any kind of professional training you can add that to your CV in the <a href="professionalTraining.php">professional training</a>  section.</p>

                <br>

                <p>
                    If you have worked in any company in the past, you can add those informations in the <a href="workExperience.php"> Work Experience</a> section.
                </p>
            </div>
            
        </div>
       <br> <br>

<?php include_once "inc/footer.php";?>
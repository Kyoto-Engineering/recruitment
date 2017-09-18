<?php include_once "inc/header.php";?>
<?php include_once "Classes/address.php";?>

<?php 
  $add = new Address();
   if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $insertAdd = $add->addressInsert($_POST);
    }
 
?>

        <div class="w3-bar" style="margin:10px">
            <a href="index.php" class="w3-bar-item"> Home </a>
            <a href="personalInfo.php" class="w3-bar-item"> Personal Info </a>
            <a href="basicinfo.php" class="w3-bar-item"> Address Info</a>
            <a href="education.php" class="w3-bar-item"> Educational Details </a>
            <a href="professionalTraining.php" class="w3-bar-item"> Professional Training </a>
            <a href="workExperience.php" class="w3-bar-item"> Work Experience </a>
        </div>

        <div class="w3-container" style="margin:10px">
            
            <div class="w3-container">
                                
                            
                <div>
                    <label> Primary Schooling Information </label>
                    <select class="w3-input" name="primarySchooling">
                        <option>Select only your highest achieved degree </option>
                        <option> <a href="primarySchooling.php"> Primary Schooling (P.S.C) </a> </option>
                        <option> <a href="juniorSchooling.php"> Junior Schooling (J.S.C) </a> </option>
                        <option>  Not Attended any of these </option>
                    </select>
                </div>
                <br>
            </div>
            
            <br>
            
            <div class="w3-container">
                <br>
                <div>
                    <label> Secondary Schooling Information </label>
                    <select class="w3-input" name="secondarySchooling">
                        <option>Select only your highest achieved degree </option>
                        <option> <a href="secondarySchooling.php"> Secondary Schooling (S.S.C) </a> </option>
                        <option> <a href="oLevel.php"> Junior Schooling (J.S.C) </a> </option>
                        <option>  <a href="vocational.php"> Vocational </a> </option>
                    </select>
                </div>
                <br>
            </div>
            
            <div class="w3-container">
                <br>                
                <div>
                    <label> Higher Secondary Schooling Information </label>
                    <select class="w3-input" name="higherSecondarySchooling">
                        <option>Select only your highest achieved degree </option>
                        <option> <a href="hsc.php"> Higher Secondary (H.S.C) </a> </option>
                        <option> <a href="diploma.php"> Diploma </a> </option>
                        <option>  <a href="aLevel.php"> A - Level </a> </option>
                    </select>
                </div>
                <br>
            </div>
            
            <div class="w3-container">
                <br>
                <div>
                    <label> Graduation Information </label>
                    <select class="w3-input" name="graduation">
                        <option>Select only your highest achieved degree </option>
                        
                    </select>
                </div>
                <br>
            </div>
            <br>
            <div class="w3-container">
                <br>
                <div>
                    <label> Post-Graduation Information </label>
                    <select class="w3-input" name="graduation">
                        <option>Select only your highest achieved degree </option>
                        
                    </select>
                </div>
                <br>
            </div>
            <br>
        </div>








<?php include_once "inc/footer.php";?>
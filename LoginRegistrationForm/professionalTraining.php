<?php include_once "inc/header.php";?>
<?php include_once "Classes/address.php";?>

<?php 
  $add = new Address();
   if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $insertAdd = $add->addressInsert($_POST);
    }
 
?>

        <div class="w3-bar">
            <a href="index.php" class="w3-bar-item"> Home </a>
            <a href="basicinfo.php" class="w3-bar-item"> Basic Info</a> <!-- Add #toregister -->  
            <a href="personalInfo.php" class="w3-bar-item"> Personal Info </a>
            <a href="cv.php" class="w3-bar-item"> Educational Details </a>
            <a href="professionalTraining.php" class="w3-bar-item"> Professional Training </a>
        </div>

        <div>
            <h3 style="text-align:center"> Professional Training Inclusion Form</h3> <br>
            <p> Add details about any kind of professional trainings you have attended in this section.</p>
        </div>
        
        <div>
            <form class="w3-container">
                <p>
                    <label>Training Name</label>
                    <input class="w3-input" type="text" placeholder="Name of the training course" required>
                </p>
                
                <br>
                
                <p>
                    <label>Training Topic</label>
                    <input class="w3-input" type="text" placeholder="Topic of the training course" required>
                </p>
                
                <br>
                
                <p>
                    <label>Training Length</label>
                    <input class="w3-input" type="number" placeholder="Length of the training" required>
                    
                    <input class="w3-radio" type="radio" name="length" value="day">
                    <label>Day(s)</label>
                    
                    <input class="w3-radio" type="radio" name="length" value="week">
                    <label>Week(s)</label>
                    
                    <input class="w3-radio" type="radio" name="length" value="month">
                    <label>Month(s)</label>
                </p>
                
                <br>
                
                <p>
                    <label>Training Institution</label>
                    <input class="w3-input" type="text" placeholder="Name of the institution from which you have received training" required>
                </p>
                
                <br>
                
                <p>
                    <button class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding">Submit</button>
                </p>
                
            </form>
        </div>






<?php include_once "inc/footer.php";?>
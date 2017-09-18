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
            <a href="personalInfo.php" class="w3-bar-item"> Personal Info </a>
            <a href="basicinfo.php" class="w3-bar-item"> Address Info</a>
            <a href="education.php" class="w3-bar-item"> Educational Details </a>
            <a href="professionalTraining.php" class="w3-bar-item"> Professional Training </a>
        </div>

    
        <div>
            <h2>Present Address</h2>
            <br>
            <form class="w3-container">
                <p>
                    <label> Flat/Level/Floor No</label>
                    <input class="w3-input" type="text" placeholder="Your Flat/Level/Floor No; ex:Flat-B2/Level-3/2nd Floor" >
                </p>
                
                <br>
                
                <p>
                    <label> Holding No </label>
                    <input class="w3-input" type="text" placeholder="Holding No of your residence; Ex;64, 432/C etc" required>
                </p>
                
                <br>
                
                <p>
                    <label> Building Name </label>
                    <input class="w3-input" type="text" placeholder="Name of your residence; Ex: Iqbal center, Rangpur House etc" >
                </p>
                
                <br>
                
                <p>
                    <label> Road No / Road Name </label>
                    <input class="w3-input" type="text" placeholder="Road no of your residence; Ex:5, Atish Dipankar Road etc" >
                </p>
                
                <br>
                
                <p>
                    <label> Block/Sector </label>
                    <input class="w3-input" type="text" placeholder="Block/Sector name/number of your residence; Ex:B,13 etc" >
                </p>
                
                <br>
                
                <p>
                    <label> Area </label>
                    <input class="w3-input" type="text" placeholder="Area name of your residence; ex: Niketon, Mohakhali" >
                </p>
                
                <br>
                
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Division
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      <li class="dropdown-header">Division</li>
                      <li>Dhaka</li> <!-- Dhaka -->
                    </ul>
                </div>
                
                <br>
                
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">District
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      <li class="dropdown-header">District</li>
                      <li>Gazipur</li> <!-- Dhaka -->
                    </ul>
                </div>
                
                <br>
                
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Thana
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      <li class="dropdown-header">Thana</li>
                      <li>Kaliakoir</li> <!-- Dhaka -->
                    </ul>
                </div>
                
                <br>
                
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Post Code
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      <li class="dropdown-header">Post Code</li>
                      <li>1701</li> <!-- Dhaka -->
                    </ul>
                </div>
                
                <br>
                
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Post Office
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      <li class="dropdown-header">Division</li>
                      <li>Kaliakoir</li> <!-- Dhaka -->
                    </ul>
                </div>
                
                <br>
                
                <p>
                    <button class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding">Submit</button>
                </p>
                
                <br>
            </form>
        </div>









<?php include_once "inc/footer.php";?>
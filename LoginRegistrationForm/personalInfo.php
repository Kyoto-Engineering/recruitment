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
            <a href="basicinfo.php" class="w3-bar-item"> Basic Info</a> 
            <a href="personalInfo.php" class="w3-bar-item"> Personal Info </a>
            <a href="cv.php" class="w3-bar-item"> Educational Details </a>
        </div>

        <div class="w3-container">
            <h2> Personal Information </h2>
            <form class="w3-container">
                <p>
                    <label>Full Name</label>
                    <input class="w3-input" type="text" placeholder="Your Full Name" required>
                </p>
                <p>
                    <label> Date of Birth </label>
                    <input class="w3-input" type="date" placeholder="Your Birthdate" required>
                </p>
                <p>
                    <label> <b> Gender </b> </label> <br>
                    <input class="w3-radio" type="radio" name="gender" value="male" checked>
                    <label>Male</label>
                    &nbsp;
                    <input class="w3-radio" type="radio" name="gender" value="female">
                    <label>Female</label>
                </p>
                
                <p>
                    <label> <b> Marital Status </b> </label> <br>
                    <input class="w3-radio" type="radio" name="maritalStatus" value="married">
                    <label>Married</label>
                    &nbsp;
                    <input class="w3-radio" type="radio" name="maritalStatus" value="single" checked>
                    <label>Single</label>
                </p>
                
                <p>
                    <label> National ID </label>
                    <input class="w3-input" type="number" required placeholder="National ID card no">
                </p>
                <p>
                    <button class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding">Send</button>
                </p>
            </form>
        </div>


















<?php include_once "inc/footer.php";?>
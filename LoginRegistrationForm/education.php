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

        <div class="w3-container" style="margin:10px">
            
            <div class="row">
                <header> <h2> Schooling Informations </h2></header> <br>
                <div class="col-sm-1">
                    <button> <a href="primarySchooling.php"> Primary Schooling (P.S.C) </a> </button>
                </div>
                
                <div class="col-sm-1">
                    <button> <a href="juniorSchooling.php"> Junior Schooling (J.S.C) </a> </button>
                </div>
                
                <div class="col-sm-1">
                    <button> <a href="secondarySchooling.php"> Secondary Schooling (S.S.C) </a> </button>
                </div>
                
                <div class="col-sm-1">
                    <button> O-Level </button>
                </div>
                
            </div>
            
            <div class="row">
                <header> <h2> Higher Secondary Schooling </h2></header><br>
                <div class="col-sm-4">
                    <button> <a href="hsc.php"> Higher Secondary (H.S.C) </a> </button>
                </div>
                
                <div class="col-sm-4">
                    <button> Diploma</button>
                </div>
                
                <div class="col-sm-4">
                    <button> A-Level </button>
                </div>
                
            </div>
            
            <div class="row">
                <header> <h2>Graduation</h2> </header><br>
                <div class="col-sm-12">
                    <button> <a href="graduation.php"> Bachelor </a> </button>
                </div>
            </div>
            
            <div class="row">
                <header> <h2>Post-Graduation</h2> </header><br>
                <div class="col-sm-12">
                    <button> <a href="masters.php"> Post - Graduation </a> </button>
                </div>
            </div>
            
        </div>








<?php include_once "inc/footer.php";?>
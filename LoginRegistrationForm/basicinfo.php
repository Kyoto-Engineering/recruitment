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
            <a href="workExperience.php" class="w3-bar-item"> Work Experience </a>
        </div>


        <div class="container">
            <div class="col-sm-6" id="adminForm">
            <h2>Present Address</h2>
            <br>
            <?php 
                if (isset($insertAdd)) {
                    echo $insertAdd;
                }
             ?>
            <form action="" method="post" class="w3-container">
                <p>
                    <label> Flat/Level/Floor No</label>
                    <input class="w3-input" type="text" name="flat" placeholder="Your Flat/Level/Floor No; ex:Flat-B2/Level-3/2nd Floor" >
                </p>
                
                <br>
                
                <p>
                    <label> Holding No </label>
                    <input class="w3-input" type="text" name="holding" placeholder="Holding No of your residence; Ex;64, 432/C etc" required>
                </p>
                
                <br>
                
                <p>
                    <label> Building Name </label>
                    <input class="w3-input" type="text" name="building" placeholder="Name of your residence; Ex: Iqbal center, Rangpur House etc" >
                </p>
                
                <br>
                
                <p>
                    <label> Road No / Road Name </label>
                    <input class="w3-input" type="text" name="road" placeholder="Road no of your residence; Ex:5, Atish Dipankar Road etc" >
                </p>
                
                <br>
                
                <p>
                    <label> Block/Sector </label>
                    <input class="w3-input" type="text" name="block" placeholder="Block/Sector name/number of your residence; Ex:B,13 etc" >
                </p>
                
                <br>
                
                <p>
                    <label> Area </label>
                    <input class="w3-input" type="text" name="area" placeholder="Area name of your residence; ex: Niketon, Mohakhali" >
                </p>
                
                <br>
                

                 <p> 
                                     <label for="sel1">Divission</label>
                                        <select class="form-control" id="sellect" name="divId">
                                          <option>Your Divission</option>
                                            <?php
                                                $getDiv = $add->getDivission();
                                                if ($getDiv) {
                                                  while ($value = $getDiv->fetch_assoc()) {
                                                    
                                              ?>
                                           <option value="<?php echo $value['divId'];?>" ><?php echo $value['divName'];?></option>  
                                          <?php } } ?>    
                                        </select>
                                        
                                       
                                    <br>
                                </p>
             
                
                <p> 
                                     <label for="sel1">District</label>
                                        <select class="form-control" id="sellect" name="distId">
                                          <option>Your District</option>
                                            <?php
                                                $getDist = $add->getDistrict();
                                                if ($getDist) {
                                                  while ($value = $getDist->fetch_assoc()) {
                                                    
                                              ?>
                                           <option value="<?php echo $value['distId'];?>" ><?php echo $value['distName'];?></option>  
                                          <?php } } ?>    
                                        </select>
                                        
                                       
                                    <br>
                                </p>
                
               
                
                                <p> 
                                     <label for="sel1">Thana</label>
                                        <select class="form-control" id="sellect" name="thId">
                                          <option>Your Thana</option>
                                            <?php
                                                $getTh = $add->getThana();
                                                if ($getTh) {
                                                  while ($value = $getTh->fetch_assoc()) {
                                                    
                                              ?>
                                           <option value="<?php echo $value['thId'];?>" ><?php echo $value['thName'];?></option>  
                                          <?php } } ?>    
                                        </select>
                                        
                                       
                                    <br>
                                </p>
                
                 <p> 
                                     <label for="sel1">Post Office</label>
                                        <select class="form-control" id="sellect" name="postId">
                                          <option>Your Post Office</option>
                                            <?php
                                                $getPo = $add->getpostName();
                                                if ($getPo) {
                                                  while ($value = $getPo->fetch_assoc()) {
                                                    
                                              ?>
                                           <option value="<?php echo $value['postId'];?>" ><?php echo $value['postName'];?></option>  
                                          <?php } } ?>    
                                        </select>
                                        
                                       
                                    <br>
                                </p>


                
                <p>
                    <button type="submit" name="submit" class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding">Submit</button>
                </p>
                
                <br>
            </form>
        </div>
            <div class="col-sm-6" id="adminForm">
            <h2>Permanent Address</h2>
            <br>
            <form class="w3-container">
                
                <p>
                    <label>My permanent and present addreses are same</label>
                    <input class="w3-radio" type="radio" name="same" value="same">
                </p>
                
                <br>
                
                <p>
                    <label> Flat/Level/Floor No</label>
                    <input class="w3-input" type="text" placeholder="Your Flat/Level/Floor No; ex:Flat-B2/Level-3/2nd Floor" >
                </p>
                
                <br>
                
                <p>
                    <label> Holding No </label>
                    <input class="w3-input" type="text" placeholder="Holding No of your residence; Ex;64, 432/C etc" >
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
                    <label> Area / Village </label>
                    <input class="w3-input" type="text" placeholder="Area name of your residence; ex: Niketon, Mohakhali" required>
                </p>
                
                <br>
                
                <p>
                    <label> Division </label>
                    <select class="w3-input" name="division" required>
                        <option>Select Division </option>
                    </select>
                </p>
                
                <br>
                
                <p>
                    <label> District </label>
                    <select class="w3-input" name="district" required>
                        <option>Select District </option>
                    </select>
                </p>
                
                <br>
                
                <p>
                    <label> Thana </label>
                    <select class="w3-input" name="thana" required>
                        <option>Select Thana </option>
                    </select>
                </p>
                
                <br>
                
                <p>
                    <label> Post Code </label>
                    <select class="w3-input" name="postCode" required>
                        <option>Select Post Code </option>
                    </select>
                </p>
                
                <br>
                
                <p>
                    <label> Post Office </label>
                    <select class="w3-input" name="postOffice" required>
                        <option>Select Post Office </option>
                    </select>
                </p>
                
                <br>
                
                <p>
                    <button class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding" type="submit" name="submit">Submit</button>
                </p>
                
                <br>
            </form>
        </div>
        </div>
    
        









<?php include_once "inc/footer.php";?>
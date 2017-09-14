<?php include "inc/signhead.php";?>
<?php include_once "Classes/reglog.php";?>
<?php include_once "Classes/address.php";?>
<?php
      $user = new Signup(); 
?>

<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
        $userlog = $user->userLogin($_POST);
    }

?>  

                       
   <header>
             
                        
                         
                
            </header>
            <section>               
                <div id="container_demo" >
                   
                    <a class="hiddenanchor" id="toregister"></a>
                    
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="" method="post"> 
                            
                                
                            </form>
                        </div>



<?php 
  $add = new Address();
   if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $insertAdd = $add->addressInsert($_POST);
    }
 
?>      

                        <div id="register" class="animate form">
                            <form  action="" method="post"> 
                            <?php
                                if (isset($userReg)) {
                                    echo $userReg;
                                }
                            ?>
                                <h1> Provide Basic Info </h1> 
                                <p> 
                                     <label for="sel1">Divission</label>
                                        <select class="form-control" id="sellect" name="divId">
                                          <option>Select Divission</option>
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
                                   <label for="sel1">Divission</label>
                                        <select class="form-control" id="sellect" name="divId">
                                          <option>Select Divission</option>
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
                                          <option>Select District</option>
                                          <?php
                                            $getDis = $add->getDistrict();
                                            if ($getDis) {
                                                while ($value = $getDis->fetch_assoc()) {
                                           
                                             
                                          ?>
                                          <option value="<?php echo $value['distId'];?>" ><?php echo $value['distName'];?></option>
                                         <?php } } ?>
                                        </select>
                                    <br>
                                </p>
                              
                                  
                                <p class="signin button"> 
                                    <input type="submit" name= "submit" value="Submit"/> 
                                </p>
                                <p class="change_link">  
                                   
                                    <a href="index.php" class="to_register"> Go To Home </a>
                                </p>
                            </form>
                        </div>
        <?php include "inc/signfoot.php";?>         
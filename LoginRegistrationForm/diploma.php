<?php include_once "inc/header.php";?>
<?php include_once "Classes/address.php";?>

<?php 
  $add = new Address();
   if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $insertAdd = $add->addressInsert($_POST);
    }
 
?>


        <div id="adminForm" class="w3-container">
            
            <h2>Diploma Degree Details</h2> <br>
            
            <form>
                
                <div>
                    <p>
                        <label> Name of Degree </label>
                    </p>
    
                    <p>
                        <select class="w3-input" name="degree">
                        <option> Select Degree</option>
                        </select>
                    </p>
                </div>
                <br>
                
                <div>
                    
                    <p>
                        <label> Name of Institution </label>
                    </p>
                    
                    <p>
                        <input class="w3-input" type="text" placeholder="Name of your diploma institution">
                    </p>
                    
                </div>
                <br>
                
                <div>
                    <p>
                        <label> Name of Department </label>
                    </p>
    
                    <p>
                        <select class="w3-input" name="department">
                        <option> Select Department</option>
                        </select>
                    </p>
                </div>
                <br>
                
                <div>
                    <p>
                        <label> Name of Board </label>
                    </p>
    
                    <p>
                        <select class="w3-input" name="degree">
                        <option> Select Board </option>
                        </select>
                    </p>
                </div>
                <br>
                
                <div>
                    
                    <p>
                        <label> G.P.A </label>
                    </p>
                    
                    <p>
                        <input class="w3-input" type="number" placeholder="Your achieved GPA">
                    </p>
                    
                </div>
                
                <div>
                    <p>
                        <label> Passing Year </label>
                    </p>
    
                    <p>
                        <select class="w3-input" name="degree">
                        <option> Select Passing Year </option>
                        </select>
                    </p>
                </div>
                <br>
                
                <div>
                    <button class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding">Submit</button>
                </div>
                
            </form>
            
        </div>




















<?php include_once "inc/footer.php";?>
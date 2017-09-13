<?php include_once "inc/header.php";?>

<div class="container back-pic">
	<div class="row">
	<div class="col-md-6"></div>
		<div class="col-md-6 tab1">
			<h2>HSC Level</h2>
			<div class="education">
				<p> 
                                     <label for="sel1">College</label>
                                        <select class="form-control" id="sellect" name="divId">
                                          <option>Select college Name</option>
                                          
                                          
                                          <option value="<>" ><></option>
                                        
                                        </select>
                                    <br>
                                </p>
                                <br>
                                <p> 
                                     <label for="sel1">Divission</label>
                                        <select class="form-control" id="sellect" name="divId">
                                          <option>Select Divission Name</option>
                                          
                                          
                                          <option value="<>" ><></option>
                                        
                                        </select>
                                    <br>
                                </p>
                                <p> 
                                     <label for="sel1">Passing Year</label>
                                        <select class="form-control" id="sellect" name="divId">
                                          <option>Select Passing Year</option>
                                          
                                          
                                          <option value="<>" ><></option>
                                        
                                        </select>
                                    <br>
                                </p>
                                <p> 
                                     <label for="sel1">CGPA</label>
                                        <select class="form-control" id="sellect" name="divId">
                                          <option>Select Your CGPA</option>
                                          
                                          
                                          <option value="<>" ><></option>
                                        
                                        </select>
                                    <br>
                                </p>
                                <p class="signin button"> 
                                    <input type="submit" name= "submit" value="Submit"/> 
                                </p>
                                <p class="change_link">  
                                   
                                    <a href="index.php" class="to_register"> Go To Home </a>
                                </p>
			</div>
		</div>
	</div>

</div>
<?php include_once "inc/footer.php";?>
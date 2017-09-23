<?php include_once "../../Classes/module.php";?>
<?php
    $allM = new Module();
     if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $usercv = $allM->departmentCreate($_POST);
    }
?>
<?php
    //method call for delete cart product
   /* if (isset($_GET['deldeg'])) {
        $deldeg = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['deldeg']);
        $deldep = $allM->delDepartmentByid($deldeg);
    }*/
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Admin : Department Creation.</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../assets/css/form.css">
        <link rel="stylesheet" href="../assets/css/footer.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    
    
    <body>
        
        <div id="banner">
            <img src="../assets/kyotoBanner.PNG">
        </div>
        
        <br>
        
        <div class="w3-container">
            <nav>
                <a href="../create.php"> Go to Create </a>
            </nav>
        </div>
        
        <br>
        
        
        <div class="row">
            <div class="col-md-6">
             <span style="color: green">
                    <?php
                        /*if (isset($deldep)) {
                            echo $deldep;
                        }*/
                    ?>
                </span>
                <table class="table">
                    <thead>
                      <tr>
                        <th>Department</th>
                        
                      </tr>
                    </thead>
                    
                    <tbody>
                    <?php
                      $getdept = $allM->getAlldept();
                       if ($getdept) {
                           while ($value = $getdept->fetch_assoc()) {
                              
                         
                    ?>
                      <tr>
                        <td><?php echo $value['deptName'];?></td>
                        <td><a href=""><span class="glyphicon glyphicon-edit"></span></a>&nbsp;||&nbsp;<a
                        onclick="return confirm('Are You Sure To Delete!');" href="?deldeg=<?php echo $value['dId'];?>"><span class="glyphicon glyphicon-remove"></span></a></td>
                      </tr>
                      </tr>
                      <?php } } ?>
                    </tbody>
                  </table>

            </div>

            <div class="col-md-6">
                

                        <h3 id="Header"> Department Input Form</h3>
                    <?php
                        if (isset($usercv)) {
                            echo $usercv;
                        }
                    ?>
                    <br>
                       <form action="" method="POST">
                          <div class="form-group">
                            <label for="dept_name">Department Name: </label>
                            <input type="text" name="deptName" class="form-control" id="dept_name">
                          </div>
                           
                           <div class="form-group">
                              <label for="description">Description:</label>
                              <textarea class="form-control" name="description" rows="5" id="description"></textarea>
                           </div>
                           
                           
                          <button type="submit" name="submit" class="w3-button w3-block w3-section w3-green w3-ripple w3-padding">Submit</button>
                        </form>
            </div>


        </div>
            

         <br> &nbsp;
        
        <div>
            <footer>
                <p> Copyright &copy; Kyoto Engineering &amp; Automation Ltd.</p>
            </footer>
        </div>
        
    </body>
</html>
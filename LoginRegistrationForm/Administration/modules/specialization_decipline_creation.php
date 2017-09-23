<?php include_once "../../Classes/module.php";?>

<?php
    $allM = new Module();
     if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $special = $allM->specializationCreate($_POST);
    }
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Admin : Department Creation.</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../assets/css/form.css">
        <link rel="stylesheet" href="../assets/css/footer.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
         <table class="table">
                    <thead>
                      <tr>
                      <th>Sl</th>
                        <th>Department</th>
                        
                      </tr>
                    </thead>
                    
                    <tbody>
                    <?php
                      $getsp = $allM->getAllspecializ();
                       if ($getsp) {
                        $i=0;
                           while ($value = $getsp->fetch_assoc()) {
                              $i++;
                         
                    ?>
                      <tr>
                      <td><?php echo $i;?></td>
                        <td><?php echo $value['specialization'];?></td>
                        
                      </tr>
                      </tr>
                      <?php } } ?>
                    </tbody>
                  </table>

    </div>
        <div class="col-md-6">
            
            <h3 id="Header"> Specialization Input Form</h3><br><br>
            <?php
                if (isset($special)) {
                    echo $special;
                }
            ?>
            
            
            <form action="" method="post" class="w3-container">
                
                <p>
                    <label>Specialization</label>
                    <input class="w3-input" type="text" name="specialization" placeholder="Specialization" required>
                </p>
                
                <br>
                
                
                <p>
                    <button type="submit" name="submit" class="w3-button w3-block w3-section w3-green w3-ripple w3-padding">Submit</button>
                </p>
                
    
            </form>
        </div>
</div>        
        <div>
            <footer>
                <p> Copyright &copy; Kyoto Engineering &amp; Automation Ltd.</p>
            </footer>
        </div>
        
    </body>
</html>
<?php include_once "../../Classes/module.php";?>
<?php
    $allM = new Module();
     if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $usercv = $allM->degreeCreate($_POST);
    }
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Admin : Degree Creation</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../assets/css/form.css">
        <link rel="stylesheet" href="../assets/css/footer.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    
    
    <body>
        
        <div id="banner">
            <img src="../assets/kyotoBanner.PNG">
        </div>
        
        <div id="adminForm">
            <h3 id="Header"> Degree Input Form</h3>
            <?php
                if (isset($usercv)) {
                    echo $usercv;
                }
            ?>
            <br>
               <form action="" method="post">
                  <div class="form-group">
                    <label for="degree">Degree Name</label>
                    <input type="text" class="form-control" name="degreeName" id="degree">
                  </div>
                  <button type="submit" name="submit" class="btn btn-default">Submit</button>
                 
                </form>
        </div> <br> &nbsp;
        
        <div>
            <footer>
                <p> Copyright &copy; Kyoto Engineering &amp; Automation Ltd.</p>
            </footer>
        </div>
        
    </body>
</html>
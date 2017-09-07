<?php
    session_start();
?>

<!Doctype html>

<html>
    <head>
        
        <!-- metadata section -->
        <meta name="author" content="Tauhidul Islam">
        <meta name="email" content="tauhidtonmoy@gmail.com">
        
        
        <!-- necessary links -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/adminCSS.css">
        
        <!-- necessary scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="assets/js/adminJS.js"></script>
    </head>
    
    <body>
        
        <div class="w3-card w3-border w3-hover-border-red">
            <form id="adminLoginForm" class="" action="controllers/adminLoginHandler.php" method="post">
                <table>
                    
                    <caption class="w3-wide"> <h2> Admin Login </h2> </caption>
                    
                    <tr>
                        <td> User Name </td> <td> <input type="text" placeholder="Enter Username" name="uname" required> </td>
                    </tr>
                    
                    <tr>
                        <td> Password </td> <td> <input type="password" placeholder="Enter Password" name="pass" required> </td>
                    </tr>
                    
                    <tr >
                        <td id="buttonBox" colspan="2"> <input id="submission" type="submit" name="submission" value="Log In"> </td>
                    </tr>
                </table>
            </form>
        </div>
        
        <footer>
            <p> Copyright &copy; Kyoto Engineering &amp; Automation Ltd.</p>
        </footer>
        
    </body>
</html>
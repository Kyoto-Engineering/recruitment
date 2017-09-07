<?php
    
    session_start();
    
    include_once'dbconfig.php';

    if(isset($POST['submission'])){
        $admin_user_name = mysql_real_escape_string($_POST['uname']);
        $admin_user_pass = trim(mysql_real_escape_string($_POST['pass']));
        
        echo "Session_id()";
        
        $query = "select * from admin_panel where u_name = '$admin_user_name'";
        $result = mysqli_query($query);
        
        $count = mysql_num_rows($result);
        
        if($count == 1){
            echo '<html> <head> </head> <body> <h1> You are on admin panel </body> </html> ';
        }else{
            echo '<html> <head> </head> <body> <h1> You are on admin panel </body> </html>';
        }
        
    }


?>
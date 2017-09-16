<?php include_once "../../Classes/module.php";?>
<!DOCTYPE html>

<html>
    <head>
        
    </head>
    
  <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $job = $allM->createJob($_POST);
    }

?>   
    <body>
        
        <div>
            <form>
                
                <table>
                    
                    <caption> Job Title Creation </caption>
                    <?php
                        if (isset($job)) {
                            echo $job;
                        }
                    ?>
                    <form action="" method="POST">
                            <tr>
                             <td> Job Title </td> 
                                <td>
                                 <input type="text" name="jobtitle">
                                  </td>
                             </tr> 
                            
                            <tr>
                                <td> Job Description </td>
                                 <td>
                                    <textarea rows="4" cols="50" name="description"> </textarea>
                                </td>
                            </tr>
                            
                            <tr> <td id="formButton"> <input type="submit" name="submit" value="Add Job Title"> </td> </tr>
                    </form>
                </table>
    
            </form>
        </div>
        
    </body>
</html>
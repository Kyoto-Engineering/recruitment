<?php include "inc/signhead.php";?>
<?php include_once "Classes/reglog.php";?>

<?php
      $user = new Signup(); 
?>

<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
        $userlog = $user->userLogin($_POST);
    }

?>  

                        <?php
                            if (isset($userReg)) {
                                echo $userReg;
                            }
                        ?>
                         <?php
                            if (isset($userlog)) {
                                echo $userlog;
                            }
                        ?>

        <br><br>
            <section>				
                <div id="container_demo" >
                   
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="" method="post"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your email or username </label>
                                    <input id="username" name="email" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>

                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="phone" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>


                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" name="login" value="Login" /> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>



<?php
  

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $userReg = $user->userRegistration($_POST);
    }

?>         

                        <div id="register" class="animate form">
                            <form  action="" method="post"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Username</label>

                                    <input id="usernamesignup" name="userName" required="required" type="text" placeholder="Your Name" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" >Email</label>

                                    <input id="emailsignup" name="email" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="uname" data-icon="p">Phone</label>
                                    <input id="passwordsignup" name="phone" required="required" type="password" placeholder="Your Phone"/>
                                </p>
                                <p> 
                                    <label for="usernamesignup" class="" data-icon="p">Date Of Birth</label>
                                    <input id="usernamesignup" name="dob" required="required" type="date"/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" name= "submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
		<?php include "inc/signfoot.php";?>			
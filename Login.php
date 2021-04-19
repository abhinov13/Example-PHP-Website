<?php

session_start();

?>
<html>
<head>
    <title> Login
        </title>

    
    <link rel="stylesheet" href="css_Login.css">
    </head>
<body>
    <?php include "topBar.php"	?>

    <div class="formContainer">
        
        <form method="POST" action="Log.php">
        
            <label for="Email">EmailId</label><br>
            <div class="inputLoginDetails">
            <input type="email" name="loginMail" placeholder="Enter your email here" required>
<br />

            <label for="Password">Password</label>
<br />
            <input type="password" name="loginPassword" placeholder="Enter your password here" required>
<br />
            </div>
            <div class="loginSubmit">
            <input type="submit" name="loginSubmit" value="Let's Go">
            </div>
                </form>

    
    </div>


    <?php include "followLine.php"?>
    </body>
</html>
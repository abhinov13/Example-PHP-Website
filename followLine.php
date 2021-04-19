
<link rel="stylesheet" href="css_followLine.css" type="text/css" />

<?php
    $userFilled = false;
    $idFilled = false;
    $errorMessage = "";
    if(!empty($_POST['name']))
    {
        $userFilled = true;
    }
    if(!empty($_POST['id']))
    {
        $idFilled = true;
    }
    if(!($userFilled) && !($idFilled))
    {
        $errorMessage = "Please Enter Name and Email";
    }
    else if(!($userFilled))
    {
        $errorMessage = "Please Enter Name";
    }
    else if(!($idFilled))
    {
        $errorMessage = "Please Enter Email id";
    }
?>



<div class="contactInfo">
    <div class="leftCol">
        <b>Steinsgate Mubong,</b><br> 123456, Melbourne,<br> Australia

    </div>
    <div class="midCol">
        <b>+04 987654321</b><br>+04 946547891<br>  semplice_products@senplice.com

    </div>

    <div class="rightCol">
            Subscribe to our newsletter to receive news &<br> updates.
    <div>
    <form method="POST">
        <div class="inputField">
            <input type="text" id="name" name="name" placeholder="Your Name" size="30">
            <br />
            <input type="email" id="email" name="id" placeholder="Your Email Address"  size="30">
        </div>
        <div class="submitButton">
                <input type="submit" value =">" name ="Submit">
        </div>
    </form>
        <div class="errorMessage">
            <?php
            echo $errorMessage;
            ?>

        </div>
        </div>
        </div>

    </div>


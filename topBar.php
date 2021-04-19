<link rel="stylesheet" href="css_topBar.css">
<div class="topContainer">
    <a href="ContactUs.php"><span class="item">  Contact Us </span></a>

    <?php
    if(isset($_SESSION['username']))
    {
        echo "<a href = \"Logout.php\"><span class=\"item login\"> Logout </span></a>";
    }
    else
    {
        echo "<a href = \"Login.php\"><span class=\"item login\"> Login </span></a>";
    }

    ?>
</div>
<?php
session_start();
?>
<html>
<head>
  <title>
	  Semplice
  </title>
	<link rel="stylesheet" href="css_Welcome.css">
    
</head>
<body>

	<?php include "topBar.php"	?>
	<div class="midPart">
		<div class="heading">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
		</div>
		Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</div>
	<div class = "heading">Our Products</div>
	<div class="videoContainer">

	<video height="400" width="600" controls>
		<source src ="board.mp4" type="video/mp4">
	</video>
	<video height = "400" width="600" controls>
		<source src ="scooty.mp4" type="video/mp4">
	</video>
		</div>
    

    <?php include "followLine.php"	?>
</body>
</html>

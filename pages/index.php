<!-- 
    Webpro Spring 2022
    Author: Tony Imbesi
    Date: 3/23/2022
-->
<?php 
 /* Starts the session */
	session_start();
	session_unset();
	// include 'common.php';
	// Initialize the session variables
	// PROG and INDEX are used to check quiz progress
	$_SESSION['PROG'] = 0;	
	$_SESSION['INDEX'] = 0;
	$_SESSION['NAMES'] = array("Mario", "Link", "Sonic", "Lara", "Chief", "Steve", "Samus", "Cloud", "Kratos", "Peach");
	$_SESSION['SCORES'] = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

	print_r($_SESSION);

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Personality Quiz</title>
<!-- <link href="./css/style.css" rel="stylesheet"> -->
</head>
<body>
	<?php
		// Include header image
		//headerImage();
	?>
	
	<h1> Welcome! </h1>
	<form action="./quiz1.php" method="post">
		<input type="submit" value="Submit"> 
	</form>
	
	<?php
		// Include the footer
		// createFooter();
	?>
</body>
</html>
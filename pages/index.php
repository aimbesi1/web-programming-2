<!-- 
    Webpro Spring 2022
    Author: Tony Imbesi
    Date: 3/23/2022
-->
<?php 
 /* Starts the session */
	session_start();
	session_unset();
	include 'common.php';
	// Initialize the session variables
	// PROG and INDEX are used to check quiz progress

	// print_r($_SESSION);

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Personality Quiz</title>
<link href="./css/style.css" rel="stylesheet">
</head>
<body>
	<?php
		// Include header image
		insertHeader();
	?>
	
	<div class="quiz">
	<h1> Welcome to our personality quiz! </h1>
	<h2> Which Video Game character are you??? </h2>
	Answer a quick and easy series of questions to find out!
	<h2><a href="./quiz1.php">Start the quiz!</a></h2>
	<footer>
	Project by:
	<div>Tony Imbesi</div>
	<div>Minhad Muhammad</div>
	<div>Frank Dadzie</div>
	</footer>
	</div>
	
	<?php
		// Include the footer
		insertFooter();
	?>
</body>
</html>
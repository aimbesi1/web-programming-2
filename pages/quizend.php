<!-- 
    Webpro Spring 2022
    Author: Tony Imbesi
    Date: 3/23/2022
-->
<?php 
 /* Starts the session */
	session_start();
	include 'common.php';
	$_SESSION['INDEX'] = 3;
	
	updateScores($_POST['choice']);

	
	
	print_r($_SESSION);
	print_r($outcome_array);
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
		checkQuizProgress($_SESSION['INDEX']);
	?>
	
	<h1> Welcome! </h1>
	<h2> Your result: </h2>
	<?php determineResult(); ?>
	<p><a href="./index.php">Go to start</a></p>
	
	<?php
		print_r($_SESSION);
	?>
</body>
</html>
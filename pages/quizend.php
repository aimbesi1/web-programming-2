<!-- 
    Webpro Spring 2022
    Author: Tony Imbesi
    Date: 3/23/2022
-->
<?php 
 /* Starts the session */
	session_start();
	include 'common.php';
	$_SESSION['INDEX'] = 16;
	
	updateScores($_POST['choice']);

	
	
	// print_r($_SESSION);
	// print_r($outcome_array);
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
		checkQuizProgress($_SESSION['INDEX']);
	?>
	
	<div class="quiz">
	<h1> Your result: </h1>
	<?php determineResult(); ?>
	<p><a href="./index.php">Start over?</a></p>
	</div>
	
	<?php
		// print_r($_SESSION);
	?>
</body>
</html>
<!-- 
    Webpro Spring 2022
    Author: Tony Imbesi
    Date: 3/23/2022
-->
<?php 
 /* Starts the session */
	session_start();
	include 'common.php';
	$_SESSION['INDEX'] = 5;
	
	updateScores($_POST['choice']);
	
	$_SESSION['choices'] = array(
	'A' => array( 10,   0,  10,  10,  10,   0,  10,   0,  10,  10),
	'B' => array( 10,   0,  10,   0,  10,  10,   0,  10,  10,   0),
	'C' => array(  0,  10,   0,  10,   0,  10,  10,   0,   0,   0),
	'D' => array( 10,   0,  10,   0,   0,  10,  10,  10,   0,  10)
	);
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
	
	<h1> What's most important to you? </h1>
	<form action="./quiz6.php" method="post">
		<fieldset>
			<legend>Choose</legend>
			<label>
				<input type="radio" value="A" name="choice"> Being the best
			</label>
			<label>
				<input type="radio" value="B" name="choice"> Your friends
			</label>
			<label>
				<input type="radio" value="C" name="choice"> Your possessions
			</label>
			<label>
				<input type="radio" value="D" name="choice"> Trying new things
			</label>
			<br>
			
			<input type="submit" value="Submit"> 
		</fieldset>
	</form>
	<p><a href="./index.php">Go to start</a></p>
	
	<?php
		print_r($_SESSION);
	?>
</body>
</html>
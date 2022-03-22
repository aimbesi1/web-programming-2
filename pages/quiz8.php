<!-- 
    Webpro Spring 2022
    Author: Tony Imbesi
    Date: 3/23/2022
-->
<?php 
 /* Starts the session */
	session_start();
	include 'common.php';
	$_SESSION['INDEX'] = 8;
	
	updateScores($_POST['choice']);
	
	$_SESSION['choices'] = array(
	'A' => array(  0,   0,   0,  10,   0,   5,  10,  10,  10,  10),
	'B' => array( 10,  10,  10,  10,   0,  10,   0,  10,   0,  10),
	'C' => array( 10,  10,  10,   0,  10,  10,   0,   0,   0,   0),
	'D' => array( 10,  10,   0,   0,  10,  10,  10,  10,  10,  10),
	'E' => array( 10, -10, -10, -10, -10,  20,  10,   0, -10, -10)
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
	
	<h1> What is your favorite pastime? </h1>
	<form action="./quiz9.php" method="post">
		<fieldset>
			<legend>Choose</legend>
			<label>
				<input type="radio" value="A" name="choice"> Reading and literature
			</label>
			<label>
				<input type="radio" value="B" name="choice"> Art and fine arts
			</label>
			<label>
				<input type="radio" value="C" name="choice"> Hanging out with friends
			</label>
			<label>
				<input type="radio" value="D" name="choice"> Learning new skills
			</label>
			<label>
				<input type="radio" value="E" name="choice"> ??? (secret)
			</label><br>
			
			<input type="submit" value="Submit"> 
		</fieldset>
	</form>
	<p><a href="./index.php">Go to start</a></p>
	
	<?php
		print_r($_SESSION);
	?>
</body>
</html>
<!-- 
    Webpro Spring 2022
    Author: Tony Imbesi
    Date: 3/23/2022
-->
<?php 
 /* Starts the session */
	session_start();
	include 'common.php';
	$_SESSION['INDEX'] = 12;
	
	updateScores($_POST['choice']);
	
	$_SESSION['choices'] = array(
	'A' => array(  0,  10,  10,  10,  10,   0,  10,  10,  10,   0),
	'B' => array(  0,  10,   0,   0,   0,   0,   0,  10,   0,  10),
	'C' => array(  0,   0,   0,   0,  10,  10,  10,   0,  10,   0),
	'D' => array(  0,   0,   0,  10,  10,   0,  10,  10,   0,  10),
	'E' => array( 10,   0,  10,   0,   0,  10,   0,   0,   0,   0)
	);
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
		insertHeader();
	?>
	
	<div class="quiz">
	<h1> What is your favorite Film genre? </h1>
	<form action="./quiz13.php" method="post">
		<fieldset>
			<legend>Choose</legend>
			<label>
				<input type="radio" value="A" name="choice"> Action
			</label><br><br>
			<label>
				<input type="radio" value="B" name="choice"> Romance
			</label><br><br>
			<label>
				<input type="radio" value="C" name="choice"> Horror
			</label><br><br>
			<label>
				<input type="radio" value="D" name="choice"> Drama
			</label><br><br>
			<label>
				<input type="radio" value="E" name="choice"> Comedy
			</label><br><br>
			
			<input type="submit" value="Submit"> 
		</fieldset>
	</form>
	<p><a href="./index.php">Go to start</a></p>
	</div>
	
	<?php
		// print_r($_SESSION);
		insertFooter();
	?>
</body>
</html>
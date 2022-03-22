<!-- 
    Webpro Spring 2022
    Author: Tony Imbesi
    Date: 3/23/2022
-->
<?php 
 /* Starts the session */
	session_start();
	include 'common.php';
	$_SESSION['INDEX'] = 9;
	
	updateScores($_POST['choice']);
	
	$_SESSION['choices'] = array(
	'A' => array(  0,   0,   0,   0,  10,  10,   0,   0,   0,   0),
	'B' => array(  0,  10,  10,   0,  10,  10,  10,   0,   0,   0),
	'C' => array( 10,   0,   0,   0,   0,   0,  10,  10,  10,  10),
	'D' => array(  0,  10,   0,  10,   0,   0,  10,   0,  10,   0)
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
	
	<h1> What is your favorite subject in school? </h1>
	<form action="./quiz10.php" method="post">
		<fieldset>
			<legend>Choose</legend>
			<label>
				<input type="radio" value="A" name="choice"> Math
			</label>
			<label>
				<input type="radio" value="B" name="choice"> Science
			</label>
			<label>
				<input type="radio" value="C" name="choice"> Language Arts
			</label>
			<label>
				<input type="radio" value="D" name="choice"> Social Studies
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
<!-- 
    Webpro Spring 2022
    Author: Tony Imbesi
    Date: 3/23/2022
-->
<?php 
 /* Starts the session */
	session_start();
	include 'common.php';
	$_SESSION['INDEX'] = 11;
	
	updateScores($_POST['choice']);
	
	$_SESSION['choices'] = array(
	'A' => array(  0,   0,  10,  10,  10,   0,  10,  10,  10,   0),
	'B' => array(  0,   0,  10,   0,   0,  10,   0,  10,   0,  10),
	'C' => array( 10,  10,   0,   0,  10,  10,  10,   0,   0,   0),
	'D' => array(  0,  10,   0,  10,   0,  10,   0,  10,   0,  10),
	'E' => array(  0,   0,  10,   0,  10,  10,   0,   0,  10,   0),
	'F' => array( 10,   0,  10,   0,   0,  10,  10,  10,   0,  10)
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
	
	<h1> What is your favorite music genre? </h1>
	<form action="./quiz12.php" method="post">
		<fieldset>
			<legend>Choose</legend>
			<label>
				<input type="radio" value="A" name="choice"> Rock
			</label>
			<label>
				<input type="radio" value="B" name="choice"> Pop
			</label>
			<label>
				<input type="radio" value="C" name="choice"> Classical
			</label>
			<label>
				<input type="radio" value="D" name="choice"> Lo-fi
			</label>
			<label>
				<input type="radio" value="E" name="choice"> Rap
			</label>
			<label>
				<input type="radio" value="E" name="choice"> Jazz
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
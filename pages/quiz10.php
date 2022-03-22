<!-- 
    Webpro Spring 2022
    Author: Tony Imbesi
    Date: 3/23/2022
-->
<?php 
 /* Starts the session */
	session_start();
	include 'common.php';
	$_SESSION['INDEX'] = 10;
	
	updateScores($_POST['choice']);
	
	$_SESSION['choices'] = array(
	'A' => array(  5,  10,  10,  10,   5,   5,  10,  10,  10,   0),
	'B' => array( 10,   0,   0,   0,  10,  10,   0,   0,   0,  10),
	'C' => array(  0,   0,   0,   0,   0,   0,   0,   0,   0,   0)
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
	
	<h1> Real talk: Single-player?? Or multi player? </h1>
	<form action="./quiz11.php" method="post">
		<fieldset>
			<legend>Choose</legend>
			<label>
				<input type="radio" value="A" name="choice"> Single-player
			</label>
			<label>
				<input type="radio" value="B" name="choice"> Multi-player
			</label>
			<label>
				<input type="radio" value="C" name="choice"> Other
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
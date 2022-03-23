<!-- 
    Webpro Spring 2022
    Author: Tony Imbesi
    Date: 3/23/2022
-->
<?php 
 /* Starts the session */
	session_start();
	include 'common.php';
	$_SESSION['INDEX'] = 13;
	
	updateScores($_POST['choice']);
	
	$_SESSION['choices'] = array(
	'A' => array(  0,  10,  10,  10,  10,  10,  10,  10,  10,  10),
	'B' => array( 10,   0,  10,  10,  10,  10,  10,  10,  10,  10),
	'C' => array( 10,  10,   0,  10,  10,  10,  10,  10,  10,  10),
	'D' => array( 10,  10,  10,   0,  10,  10,  10,  10,  10,  10),
	'E' => array( 10,  10,  10,  10,   0,  10,  10,  10,  10,  10),
	'F' => array( 10,  10,  10,  10,  10,   0,  10,  10,  10,  10),
	'G' => array( 10,  10,  10,  10,  10,  10,   0,  10,  10,  10),
	'H' => array( 10,  10,  10,  10,  10,  10,  10,   0,  10,  10),
	'I' => array( 10,  10,  10,  10,  10,  10,  10,  10,   0,  10),
	'J' => array( 10,  10,  10,  10,  10,  10,  10,  10,  10,   0)
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
	<h1> What is your favorite video game character? </h1>
	<form action="./quiz14.php" method="post">
		<fieldset>
			<legend>Choose</legend>
			<label>
				<input type="radio" value="A" name="choice"> Mario
			</label><br><br>
			<label>
				<input type="radio" value="B" name="choice"> Sonic
			</label><br><br>
			<label>
				<input type="radio" value="C" name="choice"> Dracovish
			</label><br><br>
			<label>
				<input type="radio" value="D" name="choice"> Pac Man
			</label><br><br>
			<label>
				<input type="radio" value="E" name="choice"> Master Chief
			</label><br><br>
			<label>
				<input type="radio" value="F" name="choice"> Minecraft Steve
			</label><br><br>
			<label>
				<input type="radio" value="G" name="choice"> Sans Undertale
			</label><br><br>
			<label>
				<input type="radio" value="H" name="choice"> Your Dark Souls character
			</label><br><br>
			<label>
				<input type="radio" value="I" name="choice"> Princess Peach
			</label><br><br>
			<label>
				<input type="radio" value="J" name="choice"> Samus Aran
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
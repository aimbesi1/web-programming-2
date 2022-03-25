<!-- 
    Webpro Spring 2022
    Author: Tony Imbesi
    Date: 3/23/2022
-->
<?php 
 /* Starts the session */
	session_start();
	include 'common.php';
	initializeArrays();
	
	if (isset($_GET['choice']))
		updateScores($_GET['choice'], 1, $_SESSION['choices1']);
		
	// $_SESSION['choices2'] = array(
	// 'A' => array(  0, 10,  0, 10, 10,  0,  0,  0,  0,  0),
	// 'B' => array(  0,  0,  0, 10, 10,  0,  0,  0, 10,  0),
	// 'C' => array( 10,  0, 10,  0,  0,  0, 10,  0,  0, 10),
	// 'D' => array(  0, 10,  0,  0,  0,  0,  0,  0, 10,  0),
	// 'E' => array( 10,  0,  0,  0,  0, 10,  0,  0,  0,  0));
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
		// checkQuizProgress($_SESSION['INDEX']);
		insertHeader();
	?>
	
	<div class="quiz">
	<h1> 2. What is your favorite video game genre? </h1>
	<form action="./quiz3.php" method="get">
		<fieldset>
			<legend>Choose</legend>
			<label>
				<input type="radio" value="A" name="choice"> RPG
			</label><br><br>
			<label>
				<input type="radio" value="B" name="choice"> FPS
			</label><br><br>
			<label>
				<input type="radio" value="C" name="choice"> Platformer
			</label><br><br>
			<label>
				<input type="radio" value="D" name="choice"> Action
			</label><br><br>
			<label>
				<input type="radio" value="E" name="choice"> Other / Nerds Genre
			</label><br><br>
			
			<input type="submit" value="Submit"> 
		</fieldset>
	</form>
	<p><a href="./index.php">Go to start</a></p>
	</div>
	
	<?php
		insertFooter();
		// print_r($_SESSION);
	?>
</body>
</html>
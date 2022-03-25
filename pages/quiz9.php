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
		updateScores($_GET['choice'], $_SESSION['INDEX'], $_SESSION['choices8']);
	
	$_SESSION['INDEX'] = 9;
	
	// $_SESSION['choices9'] = array(
	// 'A' => array(  0,   0,   0,   0,  10,  10,   0,   0,   0,   0),
	// 'B' => array(  0,  10,  10,   0,  10,  10,  10,   0,   0,   0),
	// 'C' => array( 10,   0,   0,   0,   0,   0,  10,  10,  10,  10),
	// 'D' => array(  0,  10,   0,  10,   0,   0,  10,   0,  10,   0)
	// );
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
	<h1> What is your favorite subject in school? </h1>
	<form action="./quiz10.php" method="get">
		<fieldset>
			<legend>Choose</legend>
			<label>
				<input type="radio" value="A" name="choice"> Math
			</label><br><br>
			<label>
				<input type="radio" value="B" name="choice"> Science
			</label><br><br>
			<label>
				<input type="radio" value="C" name="choice"> Language Arts
			</label><br><br>
			<label>
				<input type="radio" value="D" name="choice"> Social Studies
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
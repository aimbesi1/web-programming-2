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
		updateScores($_GET['choice'], $_SESSION['INDEX'], $_SESSION['choices10']);
	
	$_SESSION['INDEX'] = 11;
	
	// $_SESSION['choices11'] = array(
	// 'A' => array(  0,   0,  10,  10,  10,   0,  10,  10,  10,   0),
	// 'B' => array(  0,   0,  10,   0,   0,  10,   0,  10,   0,  10),
	// 'C' => array( 10,  10,   0,   0,  10,  10,  10,   0,   0,   0),
	// 'D' => array(  0,  10,   0,  10,   0,  10,   0,  10,   0,  10),
	// 'E' => array(  0,   0,  10,   0,  10,  10,   0,   0,  10,   0),
	// 'F' => array( 10,   0,  10,   0,   0,  10,  10,  10,   0,  10)
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
	<h1> What is your favorite music genre? </h1>
	<form action="./quiz12.php" method="get">
		<fieldset>
			<legend>Choose</legend>
			<label>
				<input type="radio" value="A" name="choice"> Rock
			</label><br><br>
			<label>
				<input type="radio" value="B" name="choice"> Pop
			</label><br><br>
			<label>
				<input type="radio" value="C" name="choice"> Classical
			</label><br><br>
			<label>
				<input type="radio" value="D" name="choice"> Lo-fi
			</label><br><br>
			<label>
				<input type="radio" value="E" name="choice"> Rap
			</label><br><br>
			<label>
				<input type="radio" value="E" name="choice"> Jazz
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
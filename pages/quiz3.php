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
		updateScores($_GET['choice'], 3, $_SESSION['choices2']);
		
	// $_SESSION['choices3'] = array(
	// 'A' => array( 10,  10,  10,   0,  10,   0,  10,   0,  10,  10),
	// 'B' => array(-10,  10,   0,   0,   0,   0,  10,   0,   0,   0),
	// 'C' => array( 10,  10,   0,  10,  10, -10,   0,   0,   0,   0),
	// 'D' => array(  0,  10,  10,   0,  10,  10,   0,  10,   0,   0),
	// 'E' => array(  0,  10,   0,   0,   0,   0,   0,  10,   0,  10)
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
	<h1> 3. What is your favorite color? </h1>
	<form action="./quiz4.php" method="get">
		<fieldset>
			<legend>Choose</legend>
			<label>
				<input type="radio" value="A" name="choice"> Red
			</label><br><br>
			<label>
				<input type="radio" value="B" name="choice"> Yellow
			</label><br><br>
			<label>
				<input type="radio" value="C" name="choice"> Green
			</label><br><br>
			<label>
				<input type="radio" value="D" name="choice"> Blue
			</label><br><br>
			<label>
				<input type="radio" value="E" name="choice"> Purple
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
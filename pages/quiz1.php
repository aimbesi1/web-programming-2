<!-- 
    Webpro Spring 2022
    Author: Tony Imbesi
    Date: 3/23/2022
-->
<?php 
 /* Starts the session */
	session_start();
	include 'common.php';
	$_SESSION['INDEX'] = 1;
	$_SESSION['PROG'] = 0;	
	$_SESSION['NAMES'] = array("Mario", "Link", "Sonic", "Lara", "Chief", "Steve", "Samus", "Cloud", "Kratos", "Peach");
	$_SESSION['SCORES'] = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
	
	/* 
	Each answer corresponds to an array of 10 numbers.
	The number at each choice array's index will be added to the score of the character at that same index if that choice is selected.
	i.e. selecting A awards points to Link (index 1), Lara (index 3), and Chief (index 4), and gives no points to everyone else.
	If the score numbers are negative, they will subtract from the corresponding character's score.
	*/
	$_SESSION['choices'] = array(
	'A' => array(0, 10, 0, 10, 10, 0, 0, 0, 0, 0),
	'B' => array(0, 0, 10, 0, 0, 0, 0, 0, 10, 0),
	'C' => array(10, 0, 0, 0, 0, 0, 10, 0, 0, 0),
	'D' => array(0, 0, 0, 0, 0, 10, 0, 0, 0, 10));
	
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
	<h1> 1. How do you respond to stressful situations? </h1>
	<!-- The form may be subject to change. -->
	<form action="./quiz2.php" method="post">
		<fieldset>
			<legend>Choose</legend>
			<label>
				<input type="radio" value="A" name="choice"> Take a moment to calm down
			</label><br><br>
			<label>
				<input type="radio" value="B" name="choice"> Let your emotions burst out
			</label><br><br>
			<label>
				<input type="radio" value="C" name="choice"> Keep your emotions to yourself
			</label><br><br>
			<label>
				<input type="radio" value="D" name="choice"> Escape / run away
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
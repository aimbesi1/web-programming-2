<!-- 
    Webpro Spring 2022
    Author: Tony Imbesi
    Date: 3/23/2022
-->
<?php 
 /* Starts the session */
	session_start();
?>

<?php
	/*
	Adds points to each character's score based on the selected choice.
	
	Receives: $_POST['choice'], a string that should match 
	one of the keys in $_SESSION['choices']
	*/
	function updateScores($choice) {
		$choiceKeys = array_keys($_SESSION['choices']);
		// echo $choice;
		// Get the array corresponding to the choice
		if (array_key_exists($choice, $_SESSION['choices'])) {
			$add = $_SESSION['choices'][$choice];
		}
		else {
			echo "Key ".$choice." did not exist in choices array<br>";
			tooBad();
		}
		
		// Add each value in $add to its corresponding value in the scores array
		for ($i = 0; $i < count($add); $i++) {
			$_SESSION['SCORES'][$i] += $add[$i];
		}
	}
	
	/*
	This function will throw an invalid data message if the user reloads the page or goes back to a previous quiz question.
	
	Receives: $_SESSION['INDEX'], a number representing the current quiz page number
	*/
	function checkQuizProgress($index) {
		// Increment PROG
		if (isset($_SESSION['PROG'])) {
			$_SESSION['PROG']++;
			// Throw error if progress doesn't match current page index
			if ($_SESSION['PROG'] != $index) {
				tooBad();
			}
		}
		else {
			tooBad();
		}
	}
	
	function determineResult() {
		// Find the key corresponding to the largest score
		$max = $_SESSION['SCORES'][0];
		$maxKey = $_SESSION['NAMES'][0];
		for ($i = 1; $i < count($_SESSION['SCORES']); $i++) {
			if ($_SESSION['SCORES'][$i] >= $max) {
				$max = $_SESSION['SCORES'][$i];
				$maxKey = $_SESSION['NAMES'][$i];
			}
		}
		outputResult($maxKey);
	}
	
	function outputResult($key) {
		switch ($key) {
			case "Mario": 
				echo "MARIO TIME";
				break;
			case "Link":
				echo "Excuuuuse me, Princess!!!";
				break;
			default:
				echo $key;
		}
	}
	
	function scoredLots($score) {
		return $score >= 100;
	}
	
	// Error function. Replaces the webpage with a different webpage.
	function tooBad() {
		echo "Too bad! <br>";
		echo '<p><a href="./index.php">Go to start</a></p>';
		// print_r($_SESSION);
		exit;
	}
	
	function insertHeader() {
		echo '<div class="endimg">
		<img src="./images/mario-run.gif" alt="Mario">
		</div>';
	}
	
	function insertFooter() {
		echo '<div class="endimg">
		<img src="./images/sonic-run.gif" alt="Sonic">
		</div>';
	}
?>
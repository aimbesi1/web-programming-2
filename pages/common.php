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
	Ensures every choice array is initialized before running updateScores()
	*/
	function initializeArrays() {
		$_SESSION['choices1'] = array(
		'A' => array(  0, 10,  0, 10, 10,  0,  0,  0,  0,  0),
		'B' => array(  0,  0, 10,  0,  0,  0,  0,  0, 10,  0),
		'C' => array( 10,  0,  0,  0,  0,  0, 10,  0,  0,  0),
		'D' => array(  0,  0, 10,  0,  0, 10,  0,  0,  0, 10)
		);
	
		$_SESSION['choices2'] = array(
		'A' => array(  0, 10,  0, 10, 10,  0,  0,  0,  0,  0),
		'B' => array(  0,  0,  0, 10, 10,  0,  0,  0, 10,  0),
		'C' => array( 10,  0, 10,  0,  0,  0, 10,  0,  0, 10),
		'D' => array(  0, 10,  0,  0,  0,  0,  0,  0, 10,  0),
		'E' => array( 10,  0,  0,  0,  0, 10,  0,  0,  0,  0)
		);
		
		$_SESSION['choices3'] = array(
		'A' => array( 10,  10,  10,   0,  10,   0,  10,   0,  10,  10),
		'B' => array(-10,  10,   0,   0,   0,   0,  10,   0,   0,   0),
		'C' => array( 10,  10,   0,  10,  10, -10,   0,   0,   0,   0),
		'D' => array(  0,  10,  10,   0,  10,  10,   0,  10,   0,   0),
		'E' => array(  0,  10,   0,   0,   0,   0,   0,  10,   0,  10)
		);
		
		$_SESSION['choices4'] = array(
		'A' => array( 10,  10,   0,  10,   0,  10,   0,   0,   0,  10),
		'B' => array(  0,  10,   0,   0,  10,  10,   0,   0,  10,   0),
		'C' => array( 10,  10,   0,  10,   0,   0,   0,   0,   0,  10),
		'D' => array(  0,   0,  10,   0,   0,  10,  10,  10,   0,   0),
		'E' => array(  0,   0,   0,   0,  10,   0,  10,  10,   0,  10)
		);
		
		$_SESSION['choices5'] = array(
		'A' => array( 10,   0,  10,  10,  10,   0,  10,   0,  10,  10),
		'B' => array( 10,   0,  10,   0,  10,  10,   0,  10,  10,   0),
		'C' => array(  0,  10,   0,  10,   0,  10,  10,   0,   0,   0),
		'D' => array( 10,   0,  10,   0,   0,  10,  10,  10,   0,  10)
		);
		
		$_SESSION['choices6'] = array(
		'A' => array(  0,   0,  10,  10,   0,   0,   0,   0,  10,   0),
		'B' => array(  0,   0,   0,   0,   0,  10,   0,  10,   0,   0),
		'C' => array( 10,  10,  10,   0,   0,   0,  10,   0,   0,   0),
		'D' => array(  0,   0,  10,   0,  10,  10,   0,  10,   0,  10)
		);
		
		$_SESSION['choices7'] = array(
		'A' => array( 10,   0,  10,   0,   0,   0,   0,   0,   0,  10),
		'B' => array(  0,  10,   0,  10,  10,  10,  10,  10,  10,   0)
		);
		
		$_SESSION['choices8'] = array(
		'A' => array(  0,   0,   0,  10,   0,   5,  10,  10,  10,  10),
		'B' => array( 10,  10,  10,  10,   0,  10,   0,  10,   0,  10),
		'C' => array( 10,  10,  10,   0,  10,  10,   0,   0,   0,   0),
		'D' => array( 10,  10,   0,   0,  10,  10,  10,  10,  10,  10),
		'E' => array( 10, -10, -10, -10, -10,  20,  10,   0, -10, -10)
		);
		
		$_SESSION['choices9'] = array(
		'A' => array(  0,   0,   0,   0,  10,  10,   0,   0,   0,   0),
		'B' => array(  0,  10,  10,   0,  10,  10,  10,   0,   0,   0),
		'C' => array( 10,   0,   0,   0,   0,   0,  10,  10,  10,  10),
		'D' => array(  0,  10,   0,  10,   0,   0,  10,   0,  10,   0)
		);
		
		$_SESSION['choices10'] = array(
		'A' => array(  5,  10,  10,  10,   5,   5,  10,  10,  10,   0),
		'B' => array( 10,   0,   0,   0,  10,  10,   0,   0,   0,  10),
		'C' => array(  0,   0,   0,   0,   0,   0,   0,   0,   0,   0)
		);
		
		$_SESSION['choices11'] = array(
		'A' => array(  0,   0,  10,  10,  10,   0,  10,  10,  10,   0),
		'B' => array(  0,   0,  10,   0,   0,  10,   0,  10,   0,  10),
		'C' => array( 10,  10,   0,   0,  10,  10,  10,   0,   0,   0),
		'D' => array(  0,  10,   0,  10,   0,  10,   0,  10,   0,  10),
		'E' => array(  0,   0,  10,   0,  10,  10,   0,   0,  10,   0),
		'F' => array( 10,   0,  10,   0,   0,  10,  10,  10,   0,  10)
		);
		
		$_SESSION['choices12'] = array(
		'A' => array(  0,  10,  10,  10,  10,   0,  10,  10,  10,   0),
		'B' => array(  0,  10,   0,   0,   0,   0,   0,  10,   0,  10),
		'C' => array(  0,   0,   0,   0,  10,  10,  10,   0,  10,   0),
		'D' => array(  0,   0,   0,  10,  10,   0,  10,  10,   0,  10),
		'E' => array( 10,   0,  10,   0,   0,  10,   0,   0,   0,   0)
		);
		
		$_SESSION['choices13'] = array(
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
		
		$_SESSION['choices14'] = array(
		'A' => array( 10,  10,   0,   0,   5,  10,  10,   0,   0,   0),
		'B' => array(  0,   0,   0,   0,   0,  10,   0,   0,   0,  10),
		'C' => array(  0,  10,  10,  10,  10,   0,  10,  10,  10,   0),
		);
		
		$_SESSION['choices15'] = array(
		'A' => array( 10,   0,  10,   0,   0,  10,   0,   0,   0,   0),
		'B' => array(  0,   0,   0,   0,   0,  10,  10,   0,  10,   0),
		'C' => array(  0,   0,   0,   0,   0,  10,   0,  10,   0,   0),
		'D' => array(  0,   0,   0,  10,   0,  10,   0,   0,   0,  10),
		'E' => array(  0,  10,   0,  10,   0,   0,  10,   0,   0,   0)
		);
	}

	/*
	Adds points to each character's score based on the selected choice.
	
	Receives:
	$choices, the submitted letter key
	$index, the page index number
	$choices, the array of choices chosen from the arrays in initializeArrays()
	*/
	function updateScores($choice, $index, $choices) {
		if (!isset($_SESSION['SCORES'])) {
			// Make an array of fifteen arrays each filled with ten zeroes
			$_SESSION['SCORES'] = array_fill(0, 15, array_fill(0, 10, 0));
		}
		
		// Passed value of 1 will affect the first array at index 0
		$index -= 1;
		
		// $choiceKeys = array_keys($_SESSION['choices']);
		// echo $choice;
		// Get the array corresponding to the choice
		if (array_key_exists($choice, $choices)) {
			$add = $choices[$choice];
		}
		else {
			// echo "Key ".$choice." did not exist in choices array<br>";
			tooBad();
		}
		
		// Replace the array at the given index with the provided score array
		$_SESSION['SCORES'][$index] = $add;
		// print_r($_SESSION['SCORES']);
	}
	
	/*
	This function will throw an invalid data message if the user reloads the page or goes back to a previous quiz question.
	
	Receives: $_SESSION['INDEX'], a number representing the current quiz page number
	*/
	// function checkQuizProgress($index) {
		// Increment PROG
		// if (isset($_SESSION['PROG'])) {
			// $_SESSION['PROG']++;
			// Throw error if progress doesn't match current page index
			// if ($_SESSION['PROG'] != $index) {
				// tooBad();
			// }
		// }
		// else {
			// tooBad();
		// }
	// }
	
	function determineResult() {
		// print "running";
		$_SESSION['NAMES'] = array("Mario", "Link", "Sonic", "Lara", "Chief", "Steve", "Samus", "Cloud", "Kratos", "Peach");
		// Initialize total array with ten zeroes
		$_SESSION['TOTAL'] = array_fill(0, 10, 0);
		
		// print_r($_SESSION['SCORES']);
		// print_r($_SESSION['TOTAL']);
		// First, add each stored score into the total score array. Each 'column' in SCORES corresponds to a character.
		for ($i = 0; $i < count($_SESSION['TOTAL']); $i++) {
			for ($j = 0; $j < count($_SESSION['SCORES']); $j++) {
				$_SESSION['TOTAL'][$i] += $_SESSION['SCORES'][$j][$i];
			}
		}			
		

		// Then, find the key corresponding to the largest score
		$max = $_SESSION['TOTAL'][0];
		$maxKey = $_SESSION['NAMES'][0];
		for ($i = 1; $i < count($_SESSION['TOTAL']); $i++) {
			if ($_SESSION['TOTAL'][$i] > $max) {
				$max = $_SESSION['TOTAL'][$i];
				$maxKey = $_SESSION['NAMES'][$i];
			}
		}
		
		outputResult($maxKey, $max);
	}
	
	function outputResult($key, $score) {
		switch ($key) {
			case "Mario": 
				echo '<img src="./images/mario.png" alt="Mario">';
				echo '<h2>You are most like Mario!</h2>
				<p>Lucky you! You got Mr. Video Game himself! Tell your friends!
				Sure, it sounds easy enough to describe you at first glance, 
				but anyone who’s been with you long enough would know there’s a lot going on under the hood.
				Have you tried backward long-jumping up the stairs in Mario 64? Or have you tried smuggling a bullet bill into first place in Mario Kart?
				Even if you haven’t, that could just mean you haven’t yet! “Anything is possible in the world of Mario”</p>
				';
				if (scoredLots($score))
					echo '<p>In fact, now that I think of it, you probably seriously considered what a third Mario brother would be at some point in your life.
					I’m not talking about Wario or Waluigi. This is the secret third Mario brother. Just think about it!</p>';

				break;
			case "Link":
				echo '<img src="./images/link.png" alt="Link">';
				echo '<h2>You are most like Link!</h2>
				<p>Either you think the best game is OoT or BotW, or you once made a post along the lines of,
				“Oh, those games are good and all, but personally, I feel like Phantom Hourglass really captured the spirit of the franchise better overall, and here’s why,”
				and so on. I don’t know, did you know what I was talking about when I wrote “O O T” or “B O T W”? If you asked me,
				I would be screwed because I never played Phantom Hourglass, and that’s where you’d have an advantage.
				That’s Link for you: Always finding those advantages, always seizing those opportunities.</p>';
				if (scoredLots($score))
					echo '<p>In fact, now that I think of it, you would probably try re-enacting some funny glitches and tricks in Breath of the Wild after you saw them on the web.
					“This is giving me a funny idea! This one’s going into my next playthrough!”</p>';
				break;
			case "Sonic":
				echo '<img src="./images/sonic.png" alt="Sonic">'; 
				echo '<h2>You are most like Sonic the Hedgehog!</h2>
				<p>You can’t decide if your favorite series is very good or completely inside a tombstone.
				 That might just be because you’re a veteran fan of the series,
				 or it might be because you finished watching a sick video essay analyzing how the level design in Sonic 1 marked an unprecedented low point of the franchise.
				 Or it’s completely possible you haven’t actually played a Sonic game,
				 and you just appreciate the character’s signature “too cool for school” tude.
				 And that\'s okay; the Blue Blur can roll with pretty much anything.</p>';
				if (scoredLots($score))
					echo '<p>In fact, now that I think of it, you probably cooked up a lot of cool OCs in your time.
					 They don’t even have to be Sonic OCs. They are VERY cool.
					 There’s nothing quite like letting your imagination run free like an unchained Sonic.</p>';
				break;
				
			case "Lara":
				echo '<img src="./images/lara.png" alt="Lara Croft">'; 
				echo '<h2>You are most like Lara Croft! (the Tomb Raider)</h2>
				<p>Whenever you take these personality quizzes, 
				you are eager to distinguish yourself from others who are most like other temple-raiding adventuring-type characters. 
				Unlike Indiana Jones or the poor guy from Temple Run, 
				Lara Croft uses a gun and has an eye for secrets. 
				She is the one that is MOST likely to point a gun at the secret temple trap operator and tell them,
				 “Listen here, chief. 
				Either you take me to the goblin’s treasure,
				 or I’ll be having a new Tomb to Raid tonight. 
				And you don’t wanna know whose tomb it is.”
				</p>';
				if (scoredLots($score))
					echo '<p>In fact, now that I think of it, 
					if you ever played the Tomb Raider title with the big Midas hand in it, 
					you could have thought the scene where Tomb Raider accidentally stands on the Midas hand and dies immediately to the Midas touch
					is easily one of the most iconic scenes in the franchise, 
					and you reference it constantly with your fellow Tomb Raider fans, 
					who are numerous and readily available for Tomb Raider discourse. 
					At least, that’s what I assume. 
					I looked at the promotional Lara Croft Fortnite skins for reference when writing this. 
					It must be a really good scene.
					</p>';
				break;
				
			case "Chief":
				echo '<img src="./images/masterchief.gif" alt="Master Chief">'; 
				echo '<h2>You are most like Master Chief!</h2>
				<p>Oh yeah! When you’re working with the Chief, you know you’re playing with power! 
				Mega kill! Monstro kill! Headshot! 
				We captured the flag! For you, it’s big gameplay, all the time. 
				Whether it’s messing around in the single-player campaign or messing around in multi-player,
				 you’re here to let the good times roll. 
				Remember to pay your respects to your teammates by saying “booyah!” into the voice chat within the first 2 seconds of the match! 
				What, wrong game? I figured as much...
				</p>';
				if (scoredLots($score))
					echo '<p>In fact, now that I think of it, you might have tried recording some cool gameplay clips in case you were to make a big montage later.
					If only sniping someone from the back seat of an airborne, 360-degrees-spinning Mongoose was that easy...
					</p>';
				break;
				
			case "Steve":
				echo '<img src="./images/steve.jpg" alt="Steve">'; 
				echo '<h2>You are most like Minecraft Steve!</h2>
				<p>Your reputation precedes yourself. 
				Similar to how the character is best known as “Minecraft” Steve,
				 you are best known for what you do best! 
				Maybe you can take a page from the world’s most famous square pixel art man and take this moment to really shake up your brand. 
				“Hello, my name is STEM Major Zyglak.” 
				“Wassup guys, it’s me, CSS Andy!” 
				“Oh, don’t mind me, just OreoMugCake Oswald coming through”
				</p>';
				if (scoredLots($score))
					echo '<p>In fact, now that I think of it, 
					you might have tried applying some of your computer science know-how to something like Minecraft to get something really crazy to happen. 
					Maybe you made your own mod and added some new tools and armor!! 
					Or maybe you found a top-secret backdoor exploit on your favorite server that lets you place bedrock all over the place like a real sucker. The world is truly your oyster.
					</p>';
				break;
				
			case "Samus":
				echo '<img src="./images/samus.jpg" alt="Samus">'; 
				echo '<h2>You are most like Samus Aran!</h2>
				<p>Even when times are bad, you have a real can-do attitude and a hustle more potent than any Super Missile. 
				Get enough momentum going, and you’ve got yourself a speed boost! Wahoo!
				For a calculating and cool bounty hunter like Samus, it’s all about the process. 
				You stay committed to doing all the steps because the payoff will be huge!
				Yeah, get all of the missile expansions! Go go go!
				Years and years of waiting for more Metroid titles to be released has made you exquisitely patient and resolute.
				</p>';
				if (scoredLots($score))
					echo '<p>In fact, now that I think of it, if you already played through Metroid Dread, 
					you would know that now they got to make Metroid 6. 
					How long do you think that will take? 
					You think they would release Metroid Prime 4 by then? 
					Only time will tell, and that is the true magic of Metroid.
					</p>';
				break;
				
			case "Cloud":
				echo '<img src="./images/cloud.png" alt="Cloud">'; 
				echo '<h2>You are most like Cloud Strife!</h2>
				<p>When it comes to JRPG protagonists, there’s simply no one cooler! 
				Big sword, cool special moves, spiky hair, funny catchphrases, what’s not to like? 
				And the character dynamics, too. 
				Cloud has great supporting characters. 
				You know the scene in the Final Fantasy 7 Remake where Aerith dies to Cloud’s archnemesis (Sephiroth!!) and it’s really tragic and awful? 
				It’s scenes like that one that really complete the character and show you why the Final Fantasy 7 series is still going strong.
				</p>';
				if (scoredLots($score))
					echo '<p>In fact, now that I think of it, you owe me a pizza. <br>
					(Bonus comment for scoring 100 points or more!)
					</p>';
				break;
				
			case "Kratos":
				echo '<img src="./images/kratos.jpg" alt="Kratos">'; 
				echo '<h2>You are most like Kratos!</h2>
				<p>No way! It’s Kratos, the God Of War!
				Kratos is best known for his incredible displays of strength,
				and his even more incredible displays of dad energy.
				You just got to see him in his newest game, which is called God of War.
				Just so you have a taste of his crazy combat powers,
				I attached an image of him fighting some other guy.
				This has to be a secret boss.
				</p>';
				if (scoredLots($score))
					echo '<p>In fact, now that I think of it, if I showed you Kratos’s son,
					you would probably have a soft spot for him.
					What a nice little lad he is!
					</p>';
				break;
				
			case "Peach":
				echo '<img src="./images/peach.jpeg" alt="Peach">'; 
				echo '<h2>You are most like Princess Peach!</h2>
				<p>The quintessential girl character in gaming. You truly don\'t care what anyone has to say about you.
				All you know is that if you\'re playing a Mario spinoff title and you see Peach is playable (and she almost always is),
				you\'re picking her. Doesn\'t matter to me. There\'s nothing wrong. Whatcha gonna do about it? Truly a free spirit.
				By the way, you gotta look up the Super Nintendo World Toad costume if you haven\'nt already. This is my secret tip to you.</p>';
				if (scoredLots($score))
					echo '<p>In fact, now that I think of it, you probably have a really good additional reason for choosing Peach.
					From what I understand, you have to dabble in either the occult or secret monk training in order to achieve the
					finger speed necessary to play Peach in Super Smash Bros. Melee or Ultimate. I think I\'ll just stay out of your way
					if I see you in the bracket at my weekly local. Thank you.</p>';
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
		insertHeader();
		echo "<div class='quiz'>
		<h1> Error </h1>
		We're sorry, something went wrong. Please try again...
		<p><a href='./index.php'>Back to start</a></p>";
		// print_r($_SESSION);
		exit;
	}
	
	function insertHeader() {
		echo '<div class="translate">
		<img src="./images/mario-run.gif" alt="Mario">
		</div>';
	}
	
	function insertFooter() {
		echo '<div class="translate">
		<img src="./images/sonic-run.gif" alt="Sonic">
		</div>';
	}
?>
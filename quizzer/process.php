<?php include'database.php' ?>

<?php 
	session_start();
 ?>

 <?php 
 	//check to see if score is set
 	if (!isset($_SESSION['score'])) {
 		$_SESSION['score'] = 0;
 	}

 	//if post was submited
 	if ($_POST) {
 		$number = $_POST['number'];
 		$selected_choice = $_POST['choice'];
 		$next = $number+1;

 		/*
		* Get Total Questions
		*/
		$query = "SELECT * FROM questions";
		// Get Results
		$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
		$total = $results->num_rows;

 		/*
 		* Get Correct Choice
 		*/

 		$query = "SELECT * FROM `choices` WHERE question_number = $number AND is_correct = 1";

 		//GET RESULT
 		$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

 		//GET ROW
 		$row = $result->fetch_assoc();

 		//Set correct choice
 		$correct_choice = $row['id'];

 		//compare
 		if ($correct_choice == $selected_choice) {
 			//Answer is correct
 			$_SESSION['score']++;
 		}

 		//Check Last question
 		if ($number == $total) {
 			header("Location: final.php");
 			exit();
 		} else {
 			header("Location: questions.php?n=".$next);
 		}
 		
 	}
  ?>
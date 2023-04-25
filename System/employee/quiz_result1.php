<?php

require '../constants/settings.php';
require 'constants/check-login.php';


if ($user_online == "true") {
	if ($myrole == "employee") {
        // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //     // Code to handle form submission
        //     // ...
        // }
	} else {
		header("location:../");
	}
} else {
	header("location:../");
}

//declaration of variable
$user_id = $_POST['user_id'];
$jobid = $_POST['user_id'];


// Connect to the database
$conn = mysqli_connect('localhost', 'root', 'HandyHunt2023', 'job_portal');

// Check connection
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Retrieve the correct answers from the database
$correct_answers = array();
$sql = "SELECT answer FROM quiz_questions ORDER BY id ASC";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($correct_answers, $row['answer']);
    }
}

// Process the user's answers and calculate their score
$user_answers = array();
$score = 0;
for ($i = 1; $i <= 10; $i++) {
    $answer = $_POST['answer'.$i];
    array_push($user_answers, $answer);
    if ($answer == $correct_answers[$i-1]) {
        $score++;
    }
}

// Display the user's score and their answers
echo '<h1>Quiz Results</h1>';
echo '<p>Your score is: '.$score.'/10</p>';
echo '<h2>Answers:</h2>';
echo '<ol>';
for ($i = 0; $i < 10; $i++) {
    echo '<li>';
    echo 'Question '.($i+1).': '.$user_answers[$i].' (Correct answer: '.$correct_answers[$i].')';
    echo '</li>';
}
echo '</ol>';

// Insert the score into the database
// $user_id = 123; 
// Replace with the ID of the logged-in user
$sql = "INSERT INTO quiz_scores (user_id, score) VALUES ('$user_id', '$score')";
if (mysqli_query($conn, $sql)) {
    echo '<p>Your score has been saved.</p>';
    echo $jobid;
} else {
    echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
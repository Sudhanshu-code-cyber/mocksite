<?php
session_start();
include_once("config/connect.php");

// Set default values if session variables are not found
$total_questions = isset($_SESSION['question_index']) ? $_SESSION['question_index'] : 0;
$correct_answers = isset($_SESSION['correct_answers']) ? $_SESSION['correct_answers'] : 0;
$wrong_answers = isset($_SESSION['wrong_answers']) ? $_SESSION['wrong_answers'] : 0;

// Calculate the score percentage
$score_percentage = $total_questions > 0 ? round(($correct_answers / $total_questions) * 100, 2) : 0;

// Destroy session to restart quiz
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Results</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-lg flex flex-col gap-4 shadow-lg h-auto text-center w-96">
        <h1 class="text-2xl font-bold text-gray-800">Quiz Results</h1>
        <div class="mt-4 text-lg">
            <p class="text-blue-600 font-semibold">Total Questions: <span class="font-bold"><?= $total_questions ?></span></p>
            <p class="text-green-600 font-semibold mt-2">Right Answers: <span class="font-bold"><?= $correct_answers ?></span></p>
            <p class="text-red-600 font-semibold mt-2">Wrong Answers: <span class="font-bold"><?= $wrong_answers ?></span></p>
            <p class="text-gray-700 font-semibold mt-2">Score: <span class="font-bold"><?= $score_percentage ?>%</span></p>
        </div>
        <a href="start-quize.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Restart Quiz</a>
    </div>
    <?php
        $query = $connect->query("insert into ranking (score, user_id) values('$score_percentage','')");
    ?>
</body>
</html>

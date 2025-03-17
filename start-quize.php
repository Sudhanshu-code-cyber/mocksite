<?php 
session_start(); 

include_once "config/connect.php";

if (!isset($_SESSION['question_index'])) {
    $_SESSION['question_index'] = 0;
    $_SESSION['correct_answers'] = 0;
    $_SESSION['wrong_answers'] = 0;
}

$question_index = $_SESSION['question_index'];
$total_questions_query = $connect->query("SELECT COUNT(*) AS total FROM question");
$total_questions = $total_questions_query->fetch_assoc()['total'];

if ($question_index >= $total_questions) {
    redirect("result.php");
}

$callquestion = $connect->query("SELECT * FROM question LIMIT 1 OFFSET $question_index");

if ($qus = $callquestion->fetch_array()) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Question</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<div class="flex flex-col">
    <?php include_once "includes/header.php"; ?>

    <div class="flex justify-center items-center">
        <div class="bg-white shadow-md mt-40 rounded-lg p-6 w-[120vh]">
            <h2 class="text-lg font-semibold mb-4">Question <?= $_SESSION['question_index'] + 1 ?> of <?= $total_questions ?> ::</h2>
            <p class="text-gray-700 mb-4"><?= $qus['question']; ?>?</p>

            <form action="" method="POST" class="flex flex-col gap-3">
                <label class="flex items-center space-x-2">
                    <input type="radio" name="answer" value="<?= $qus['opt1']; ?>" class="w-4 h-4 text-blue-600" required>
                    <span><?= $qus['opt1']; ?></span>
                </label>

                <label class="flex items-center space-x-2">
                    <input type="radio" name="answer" value="<?= $qus['opt2']; ?>" class="w-4 h-4 text-blue-600">
                    <span><?= $qus['opt2']; ?></span>
                </label>

                <label class="flex items-center space-x-2">
                    <input type="radio" name="answer" value="<?= $qus['opt3']; ?>" class="w-4 h-4 text-blue-600">
                    <span><?= $qus['opt3']; ?></span>
                </label>

                <label class="flex items-center space-x-2">
                    <input type="radio" name="answer" value="<?= $qus['opt4']; ?>" class="w-4 h-4 text-blue-600">
                    <span><?= $qus['opt4']; ?></span>
                </label>

                <button type="submit" name="next" class="mt-4 w-40 bg-[#2E5077] text-white py-2 rounded-md hover:bg-blue-700 transition flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Submit
                </button>
            </form>
        </div>
    </div>
</div>

</body>
</html>

<?php 
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['next'])) {
    if (isset($_POST['answer'])) {
        $selected_answer = $_POST['answer'];
        $correct_answer = $qus['correct_ans'];

        if ($selected_answer == $correct_answer) {
            $_SESSION['correct_answers']++;
        } else {
            $_SESSION['wrong_answers']++;
        }
    }
    
    $_SESSION['question_index']++;

    if ($_SESSION['question_index'] >= $total_questions) {
        header("Location: result.php");
        exit();
    } else {
        header("Location: start-quize.php");
        exit();
    }
} 
?>

<?php 
session_start();
include_once "config/connect.php";

if (!isset($_SESSION['question_index'])) {
    $_SESSION['question_index'] = 0;
}

$question_index = $_SESSION['question_index'];
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
<body class="">
      <div class="flex flex-col">
        <?php include_once "includes/header.php";?>
        <?php include_once "includes/subheader.php";?>
      
   <div class="flex justify-center items-center  ">
   <div class="bg-white shadow-md mt-40 rounded-lg p-6 w-[120vh]">
        <h2 class="text-lg font-semibold mb-4">Question <?= $_SESSION['question_index'] + 1 ?> ::</h2>
        <p class="text-gray-700 mb-4"><?= $qus['question']; ?>?</p>

        <form action="" method="POST" class="flex flex-col gap-3">
            <label class="flex items-center space-x-2">
                <input type="radio" name="answer" value="<?= htmlspecialchars($qus['opt1']); ?>" class="w-4 h-4 text-blue-600">
                <span><?= htmlspecialchars($qus['opt1']); ?></span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="radio" name="answer" value="<?= htmlspecialchars($qus['opt2']); ?>" class="w-4 h-4 text-blue-600">
                <span class="font-semibold"><?= htmlspecialchars($qus['opt2']); ?></span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="radio" name="answer" value="<?= htmlspecialchars($qus['opt3']); ?>" class="w-4 h-4 text-blue-600">
                <span><?= htmlspecialchars($qus['opt3']); ?></span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="radio" name="answer" value="<?= htmlspecialchars($qus['opt4']); ?>" class="w-4 h-4 text-blue-600">
                <span><?= htmlspecialchars($qus['opt4']); ?></span>
            </label>

            <!-- Submit Button -->
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
} else {
    session_destroy(); // Reset session when quiz ends
    header("Location: index.php");
    exit();
}
?>

<?php 
// Handle form submission and move to the next question
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['next'])) {
    $_SESSION['question_index']++; // Move to the next question
    redirect("start-quize.php"); // Reload page
    exit();
}
?>

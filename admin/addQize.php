<?php
include_once("../config/connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Quiz| Admin</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-200">
    <?php include_once "includes/header.php"; ?>
    <div class="flex flex-col justify-center items-center">
        <h2 class="font-semibold text-2xl p-2 text-center">Add Quiz</h2>
        <form action="" method="POST" class="space-y-4 mt-30 w-[50rem] rounded shadow-xl bg-gray-400 p-5">
            <input type="text" name="quiz_title" placeholder="Quiz Title" required class="w-full p-2 border rounded">
            <input type="number" name="total_questions" placeholder="Total Questions" required
                class="w-full p-2 border rounded">
            <input type="number" name="marks_per_question" placeholder="Marks per Right Answer" required
                class="w-full p-2 border rounded">
            <input type="number" name="negative_marks" placeholder="Minus Marks on Wrong Answer" required
                class="w-full p-2 border rounded">
            <input type="text" name="tag" placeholder="Enter #tag which is used for searching" required
                class="w-full p-2 border rounded">
            <input type="number" name="time_limit" placeholder="Time Limit (minutes)" required
                class="w-full p-2 border rounded">
            <textarea name="description" placeholder="Description" required
                class="w-full p-2 border rounded"></textarea>
            <button type="submit" name="submit"
                class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">Submit</button>
        </form>
        <?php
        if (isset($_POST["submit"])) {
            $quiz_title = $_POST['quiz_title'];
            $total_questions = $_POST['total_questions'];
            $marks_per_question = $_POST['marks_per_question'];
            $negative_marks = $_POST['negative_marks'];
            $tag = $_POST['tag'];
            $time_limit = $_POST['time_limit'];
            $description = $_POST['description'];

            $query = $connect->query("insert into quiz (title, total_question, right_answer_marks, wrong_answer_minusMarks, tag, time_limit, description) value('$quiz_title','$total_questions','$marks_per_question','$negative_marks','$tag','$time_limit','$description')");

            if ($query) {
                redirect("index.php");
            } else {
                message("not Inserted");
            }
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
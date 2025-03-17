<div class="flex px-[5%] py-3 flex-1 bg-[#2E5077] justify-between items-center">
    <a href="index.php" class="font-bold text-2xl text-[#F6F4F0]">QuizWin</a>
    <?php
    if (isset($_SESSION['user'])) {
        $email = $_SESSION['user'];

        // Fetch username from database
        $query = $connect->query("SELECT * FROM users WHERE email ='$email' ");
       
        if ($row = $query->fetch_assoc()) {
            $username = $row['username'];
            echo "<h2>Hello, " . htmlspecialchars($username) . "!</h2>";
        } else {
            echo "<h2>Hello, User!</h2>"; // If no user found, show default
        }
    } else {
        echo "<h2>Guest</h2>"; // If session is not set
    }
    ?>
    <a href="index.php"
        class="flex items-center gap-2 font-semibold text-lg text-[#F6F4F0] bg-[#4DA1A9] px-4 py-2 rounded-lg transition duration-300 hover:bg-[#3b8b91]">

        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-9A2.25 2.25 0 0 0 2.25 5.25V18.75A2.25 2.25 0 0 0 4.5 21h9a2.25 2.25 0 0 0 2.25-2.25V15M16.5 12H22m0 0-3-3m3 3-3 3" />
        </svg>
        logout
    </a>
</div>
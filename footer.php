<div class="bg-white">
    <div class="bg-black  py-6 mt-1">
        <div class="flex justify-between mx-10">
            <a href="" class="py-2 px-4 border text-yellow-500 hover:border-yellow-500 rounded font-semibold">About
                Us</a>
            <a data-modal-target="adminModel" data-modal-toggle="adminModel"
                class="py-2 px-4 border text-yellow-500 hover:border-yellow-500 rounded font-semibold">
                Admin Login
            </a>
            <div id="adminModel" tabindex="-1" aria-hidden="true"
                class="fixed top-0 left-0 right-0 z-50 hidden w-full h-screen p-4 overflow-x-hidden overflow-y-auto flex items-center justify-center">

                <div class="relative rounded-lg shadow-md max-w-xl w-[80vw] p-8 flex items-center justify-center">
                    <div class="absolute inset-0 bg-white rounded-lg"></div>

                    <button type="button" class="absolute top-3 right-3 text-white z-10" data-modal-hide="adminModel">
                        <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" viewBox="0 0 14 14">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1l6 6m0 0l6 6M7 7l6-6M7 7L1 13" />
                        </svg>
                    </button>
                    <div class="relative z-10 w-full">
                        <div class="">
                            <h2 class="text-2xl text-red-600 font-semibold">Login</h2>
                            <div class="flex justify-center items-center">
                                <form action="" method="post">
                                    <div class="flex flex-col gap-4">
                                        <input type="text" name="admin" placeholder="Enter Admin User Id"
                                            class="py-2 px-4 border border-gray-600 w-[50vh] rounded">
                                        <input type="text" name="password" placeholder="Password"
                                            class="py-2 px-4 border border-gray-600 w-[50vh] rounded">
                                        <input type="submit" name="submit" value="login"
                                            class="py-2 bg-blue-600 text-white font-semibold px-4 border border-gray-600 w-[20vh] text-center rounded">
                                    </div>
                                </form>
                                <?php
                                if (isset($_POST['submit'])) {
                                    $admin_id = $_POST['admin'];
                                    $password = $_POST['password'];

                                    $query = $connect->query("select * from admin where admin_id='$admin_id' and password='$password'");
                                    $count = $query->num_rows;
                                    if ($count) {
                                        $_SESSION['admin'] = $admin_id;
                                        redirect("admin/index.php");
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a data-modal-target="developerModel" data-modal-toggle="developerModel"
                class="py-2 px-4 border text-yellow-500 hover:border-yellow-500 rounded font-semibold">
                Developer
            </a>
            <div id="developerModel" tabindex="-1" aria-hidden="true"
                class="fixed top-0 left-0 right-0 z-50 hidden w-full h-screen p-4 overflow-x-hidden overflow-y-auto flex items-center justify-center">

                <div class="relative rounded-lg shadow-md max-w-xl w-[80vw] p-8 flex items-center justify-center">
                    <div class="absolute inset-0 bg-white rounded-lg"></div>

                    <button type="button" class="absolute top-3 right-3 text-white z-10"
                        data-modal-hide="developerModel">
                        <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" viewBox="0 0 14 14">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1l6 6m0 0l6 6M7 7l6-6M7 7L1 13" />
                        </svg>
                    </button>
                    <div class="relative bg-white z-10 w-full">

                        <h2 class="text-2xl text-red-600 font-semibold mb-4 border-b pb-2">Developer</h2>

                        <div class="flex items-center space-x-6 mt-4">
                            <!-- Profile Image -->
                            <img src="assets/IMG_20250310_091929.jpg"
                                class="h-32 w-32 object-cover rounded-full shadow-md border-2 border-gray-200"
                                alt="Profile Image" />

                            <!-- Info -->
                            <div class="text-gray-800 space-y-1">
                                <p class="text-lg font-semibold">Aman Kumar</p>
                                <p class="text-sm">📞 +91 8227046826</p>
                                <p class="text-sm">✉️ theaman6826@gmail.com</p>
                                <p class="text-sm">🎓 Purnea College, Purnea</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <a data-modal-target="feedbackModal" data-modal-toggle="feedbackModal"
                class="py-2 px-4 border text-yellow-500 hover:border-yellow-500 rounded font-semibold">
                Feedback
            </a>
            <div id="feedbackModal" tabindex="-1" aria-hidden="true"
                class="fixed top-0 left-0 right-0 z-50 hidden w-full h-screen p-4 overflow-x-hidden overflow-y-auto flex items-center justify-center">

                <div class="relative bg-cover bg-center rounded-lg shadow-md max-w-xl w-[80vw] p-8 flex items-center justify-center"
                    >

                    <div class="absolute inset-0 bg-white rounded-lg"></div>

                    <button type="button" class="absolute top-3 right-3 text-white z-10"
                        data-modal-hide="feedbackModal">
                        <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" viewBox="0 0 14 14">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1l6 6m0 0l6 6M7 7l6-6M7 7L1 13" />
                        </svg>
                    </button>

                    <div class="relative z-10 w-full">
                        <h3 class="text-2xl font-semibold text-yellow-500 text-center mb-3">FEEDBACK / REPORT A PROBLEM
                        </h3>
                        <p class="text-center mb-4 text-sm leading-relaxed">
                            You can send us your feedback through email on the following email ID:
                            <span class="text-yellow-400">theaman6826@gmail.com</span><br><br>
                            Or you can directly submit your feedback by filling out the form below:
                        </p>

                        <form action="" method="post" class="space-y-3 text-sm">
                            <div>
                                <label for="name" class="block font-medium">Your Name</label>
                                <input type="text" name="name" id="name"
                                    class="w-full mt-1 px-3 py-2 rounded-md text-black focus:ring-yellow-500 focus:border-yellow-500"
                                    placeholder="John Doe">
                            </div>
                            <div>
                                <label for="subject" class="block font-medium">Subject</label>
                                <input type="text" name="subject" id="subject"
                                    class="w-full mt-1 px-3 py-2 rounded-md text-black focus:ring-yellow-500 focus:border-yellow-500"
                                    placeholder="Subject">
                            </div>
                            <div>
                                <label for="email" class="block font-medium">E-mail Address</label>
                                <input type="email" name="email" id="email"
                                    class="w-full mt-1 px-3 py-2 rounded-md text-black focus:ring-yellow-500 focus:border-yellow-500"
                                    placeholder="you@example.com">
                            </div>
                            <div>
                                <label for="feedback" class="block font-medium">Your Feedback</label>
                                <textarea id="feedback" name="feedback" rows="3"
                                    class="w-full mt-1 px-3 py-2 rounded-md text-black focus:ring-yellow-500 focus:border-yellow-500"
                                    placeholder="Write something..."></textarea>
                            </div>
                            <button type="submit_feed" name="submit"
                                class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-4 rounded">
                                Submit Feedback
                            </button>
                        </form>
                        <?php
                        if (isset($_POST['submit_feed'])) {
                            $name = $_POST['name'];
                            $subject = $_POST['subject'];
                            $email = $_POST['email'];
                            $feedback = $_POST['feedback'];

                            $query = $connect->query("insert into feedback (name,subject,email,feedback) value('$name','$subject','$email','$feedback')");

                            if ($query) {
                                message('feedback send sucessfull');
                            }
                        }

                        ?>
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

        </div>
    </div>
</div>
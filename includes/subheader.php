<div class="mb-4">
      <ul class="flex flex-wrap ml-4 -mb-px text-md font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
         
          <li class="me-2" role="presentation">
              <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Home</button>
          </li>
          <li class="me-2" role="presentation">
              <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">History</button>
          </li>
          <li class="me-2" role="presentation">
              <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Ranking</button>
          </li>
          <li class="me-2" role="presentation">
              <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-red-600 hover:border-red-300 dark:hover:text-red-400" id="signout-tab" data-tabs-target="#signout" type="button" role="tab" aria-controls="signout" aria-selected="false">SingOut</button>
          </li>
          <form action="" method="get">
              <input type="search" name="seacrh" placeholder="Enter Tage" class="inline-block py-2 mt-2 text-gray-600 border-gray-600 px-4 border rounded ">
              <input type="submit" name="go" value="search" class="py-2 px-4 bg-black text-white font-semibold rounded text-md">
          </form>
      </ul>
  </div>

  <div id="default-tab-content">
      <div class="hidden p-4 rounded-lg bg-red-200 shadow-xl flex justify-center items-center m-20" id="profile" role="tabpanel" aria-labelledby="profile-tab">
         
      </div>
      <div class="hidden p-6 rounded-lg bg-white shadow-xl flex justify-center items-center m-20" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
          <div class="flex w-full">
              <table class="w-full">
                  <tr>
                      <th class="border py-2 px-4 text-center">S.N</th>
                      <th class="border py-2 px-4 text-center">Topics</th>
                      <th class="border py-2 px-4 text-center">Total Question</th>
                      <th class="border py-2 px-4 text-center">Marks</th>
                      <th class="border py-2 px-4 text-center">Action</th>
                  </tr>
                  <?php
                    $callingQuiz = $connect->query("select * from quiz");
                    while ($quiz = $callingQuiz->fetch_array()):
                    ?>
                      <tbody>
                          <td class="border py-2 px-4 text-center"><?= $quiz['id']; ?></td>
                          <td class="border py-2 px-4 text-center"><?= $quiz['title']; ?></td>
                          <td class="border py-2 px-4 text-center"><?= $quiz['total_question']; ?></td>
                          <td class="border py-2 px-4 text-center"><?= $quiz['total_question'] * $quiz['right_answer_marks']; ?></td>
                          <td class="border py-2 px-4 text-center">
                              <a href="" class="bg-red-500 text-white font-semibold py-1 px-4 rounded">Start</a>
                          </td>
                      </tbody>
                  <?php endwhile; ?>
              </table>
          </div>
      </div>
      <div class="hidden p-4 rounded-lg shadow-xl flex justify-center items-center m-20" id="settings" role="tabpanel" aria-labelledby="settings-tab">
          <div class="flex w-full">
              <table class="w-full">
                  <tr>
                      <th class="border py-2 px-4 text-center text-red-500">S.N</th>
                      <th class="border py-2 px-4 text-center text-red-500">Quiz</th>
                      <th class="border py-2 px-4 text-center text-red-500">Question Solve</th>
                      <th class="border py-2 px-4 text-center text-red-500">Right</th>
                      <th class="border py-2 px-4 text-center text-red-500">Wrong</th>
                      <th class="border py-2 px-4 text-center text-red-500">Score</th>
                  </tr>
              </table>

          </div>
      </div>
      <div class="hidden p-4 rounded-lg shadow-xl flex justify-center items-center m-20" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
          <div class="flex w-full">
              <table class="w-full">
                  <tr>
                      <th class="border py-2 px-4 text-center text-red-500">Rank</th>
                      <th class="border py-2 px-4 text-center text-red-500">Name</th>
                      <th class="border py-2 px-4 text-center text-red-500">Gender</th>
                      <th class="border py-2 px-4 text-center text-red-500">College</th>
                      <th class="border py-2 px-4 text-center text-red-500">Score</th>
                  </tr>
                  <tbody>
                      <td class="border py-2 px-4 text-center">1</td>
                      <td class="border py-2 px-4 text-center">Vikash</td>
                      <td class="border py-2 px-4 text-center">Male</td>
                      <td class="border py-2 px-4 text-center">purnea college purnea</td>
                      <td class="border py-2 px-4 text-center">8</td>


                  </tbody>
              </table>

          </div>
      </div>
      <div class="hidden p-4 rounded-lg bg-red-200 shadow-xl flex justify-center items-center m-20" id="signout" role="tabpanel" aria-labelledby="signout-tab">
          <p class="text-sm text-red-600 dark:text-red-300">You're about to <strong class="font-medium">sign out</strong>. Click here to confirm or cancel.</p>
      </div>
      <div class="hidden p-4 rounded-lg bg-red-200 shadow-xl flex justify-center items-center m-20" id="ranking" role="tabpanel" aria-labelledby="ranking-tab">
          <p class="text-sm text-blue-600 dark:text-blue-300">This section displays the <strong class="font-medium">ranking</strong> information of users.</p>
      </div>
  </div>
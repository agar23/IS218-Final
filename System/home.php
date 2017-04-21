<?php include '../View/header3.php'; ?>
<?php
  include_once '../Database/Database.php';

  $Username = filter_input(INPUT_POST, 'username');
  $Password = filter_input(INPUT_POST, 'password');

  $RetEmail=get_email($Username);
  $RetPass=get_pass($Username, $Password);
  $RetID=get_UserID($Username);

  $UserID=$RetID[0];

  $task = get_incomplete_items($UserID);
  $cTask = get_complete_items($UserID);

?>

<p id='b3'> Welcome back <?php echo $Username ?>! |
<span id='b4'> <a href='../index.php'>logout</a></span> </p>

<h1> To-Do Items </h1>
          <table>
            <tr>
                <th>Task&nbsp;</th>
                <th>Date Added&nbsp;</th>
                <th>Due Date&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($task as $tasks) : ?>
              <tr>
                  <td><?php echo $tasks['Task']; ?></td>
                  <td><?php echo $tasks['Date added']; ?></td>
                  <td><?php echo $tasks['Due Date']; ?></td>
              </tr>
              <?php endforeach; ?>
          </table>


<h1> Items Completed</h1>
          <table>
            <tr>
                <th>Task&nbsp;</th>
                <th>Date Added&nbsp;</th>
                <th>Due Date&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($cTask as $ctasks) : ?>
              <tr>
                  <td><?php echo $ctasks['Task']; ?></td>
                  <td><?php echo $ctasks['Date added']; ?></td>
                  <td><?php echo $ctasks['Due Date']; ?></td>
              </tr>
              <?php endforeach; ?>
          </table>






<?php include '../View/footer.php'; ?>

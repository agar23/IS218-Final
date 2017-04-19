<?php include '../View/header2.php'; ?>
<?php
  include_once '../Database/Database.php';

  $Username = filter_input(INPUT_POST, 'username');
  $Password = filter_input(INPUT_POST, 'password');

  echo "Welcome back $Username!"





 ?>
<?php include '../View/footer.php'; ?>

<?php include '../View/header2.php'; ?>
<?php
  include_once '../Database/Database.php';

  $Username = filter_input(INPUT_POST, 'username');
  $Password = filter_input(INPUT_POST, 'password');

  $RetEmail=get_email($Username);
  $RetPass=get_pass($Username, $Password);

  if (empty($RetEmail)){

      include '../Error/error.php';

  }elseif (empty($RetPass)){

      include '../Error/error2.php';

  }else{

    echo "   <p id='b3'> Welcome back $Username! | ";
    echo "   <span id='b4'> <a href='../index.php'>logout</a></span> </p> ";

  }
 ?>
<?php include '../View/footer.php'; ?>

<?php include 'view/header.php'; ?>

<form action="main.php">
  <div class="imgcontainer">
    <img src="Pictures/login.png" alt="Avatar" class="avatar">
  </div>
  <div class="container">
<label for="EnterUsername"> Username </label>
  <input type=text name="username" placeholder="Enter Username" id="username" > <br>
<label for="EnterPassword"> Password </label>
  <input type=text name="password" placeholder="Enter Password" id="password" > <br>
<button type="submit">Login</button>
</div>
<div class="container" style="background-color:#f1f1f1">
  <span class="psw"> <a href="#">Register?</a></span>
</div>
</form>

<?php include 'view/footer.php'; ?>

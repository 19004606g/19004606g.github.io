

<?php include('header.php'); ?>

<form action="functions.php?op=checkLogin" method="post">

  <label for="email">Login Email : </label>
  <input type="email" id="email" name="email" require><br>
  
  <label for="email">Password : </label>
  <input type="password" id="password" name="password">
  
  <br>
  <input type="submit" value="LOGIN">
</form>

<?php include('footer.php'); ?>


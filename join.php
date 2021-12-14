<?php include('header.php'); ?>

<h2> Join it Today! </h2>

<form action="functions.php?op=joinMember" method="post">

  <label for="newemail">Your email :    </label>
  <input type="email" id="newemail" name="newemail" require><br>
  
  <label for="newemail">Password :</label>
  <input type="password" id="newpassword" name="newpassword">
  
  <br>
  <input type="submit" value="JOIN">
</form>

<?php include('footer.php'); ?>
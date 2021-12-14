<?php include('header.php'); 


//block somone without login
if(!isset($_SESSION['email']))
    header("Location: /login.php");

?>


<form action="/functions.php?op=createDB" method="post">

 
  
  <input type="hidden" id="mindful_id" name="mindful_id" value="<?php echo $_GET['mindful_id'];?>">
  
  <input type="hidden" id="email" name="email" value="<?php echo $_SESSION['email'];?>">

  <h2><?php echo $mindfuls[$_GET['mindful_id']-1]['name'];?></h2>

  <img src="images/<?php echo $mindfuls[$_GET['mindful_id']-1]['image'];?>" style="max-width:400px;max-height:250px;" alt="mindfulness">

</br></br>

  <audio controls autoplay muted>
    <source src="audio/<?php echo $mindfuls[$_GET['mindful_id']-1]['audio'];?>" type="audio/mpeg">

  </audio>
  </br></br>

  <label for="name">Date:</label>
  <input type="date" id="date" name="date"><br/>
<br>

  <label for="time">Start Time:</label>
  <input type="time" id="time" name="time" require><br/>
<br>

  <label for="quantity">Duration (mins): </label>
  <input type="number" id="quantity" name="quantity" min="1" max="300" value="1">

 <br><br>
  <input class="submitBtn" type="submit" value="Submit">
</form> 

<?php include 'footer.php'; ?>
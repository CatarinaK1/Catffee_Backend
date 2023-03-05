<?php
$title = "Catffee: survey";
include "../php/header.php";
?>
<style>
<?PHP include('../css/survey_style.css'); ?> 
</style>


<div class = "section1">
		<h2>How would you rate your experience with us?</h2>
        <p>from not satisfied to very satisfied</p>

        <form method = "post" action=""> 
		<div class="rate" select name="rate">  
			<input type="radio" name="rate" id="radio1"  value="1">
			<label for="radio1">1</label>
			<input type="radio" name="rate" id="radio2"  value="2">
			<label for="radio2">2</label>
			<input type="radio" name="rate" id="radio3"  value="3">
			<label for="radio3">3</label>
			<input type="radio" name="rate" id="radio4"  value="4">
			<label for="radio4">4</label>
			<input type="radio" name="rate" id="radio5"  value="5">
			<label for="radio5">5</label>
		</div>
</div>      
       
<div class = "section2">
  <h2>Where did you hear about us?</h2>
  <br>
    <select name="how" style="width: 155px; height:35px;">
        <option value = "Newsletter"> Newsletter </option>
        <option value = "Advertisment"> Advertisment </option>
        <option value = "Social media"> Social media </option>
        <option value = "Other"> Other </option>
    </select><br>
</div>


<div class="section3">
	<h2>Additional Comments...</h2>
		
		<textarea id="comment" name="comment" placeholder="Enter your comments ..."></textarea>
        <br>
	<br>
		<input type="submit" class="btn" name="submit" value="Submit"><br>
        <?php 
   if (isset($_POST['submit'])){

    $how = $_POST['how'];
    $rate = $_POST['rate'];
    $comment = $_POST['comment'];
   

    include '../database/db.php';
    $sql = "insert into Survey(how, comment, rate )
    values ('$how','$comment','$rate')";
    
    
    if ($connection -> query($sql) === TRUE){
        echo "Thank you!";

    }
    else {
        echo "Error: " . $connection -> error;
    }

  }


?></div>
</form>



<?php include "../php/footer.php";
?>


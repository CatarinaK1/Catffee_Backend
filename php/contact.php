<?php $style = "contact_style"; $title = "Catffee: contact"; include "../php/header.php";
?>

<style>
<?PHP include('../layout/contact_style.css'); ?> 
</style>

<script> 
<?PHP include('../database/javaScript'); ?> 
</script>

<!-- </?php include('../layout/contact_style.css'); ?>-->



<script>
  
    window.alert("Please answer the survey at the bottom of the page");
    
    </script>

   <section>
    <img src = "../images/pexels-photo-5490818.jpeg"  div class = "coverImage">
    </div>

    <div class = "section1">
     <h1>OPENING HOURS</h1>
     <p>Monday - Friday 8:00 - 19:00<br> 
        Saturday 8:00 - 20:00 <br>
        Sunday closed <br>    
    </p>
    </div>

    <div class = "section2">
        <div class = "addressContact">
        <h2> ADDRESS</h2>
        <p>Kissankatu 42 A 2<br>
        13100 Hämeenlinna</p>

        <h2>CONTACT</h2>
        <p>+358 000000000000000 <br>
        catffee@gmail.com</p>
       </div>
        <div class="map">
            <img src = "../images/map.png" class="Map" alt="map">   
        </div>
        
    </div>

    <div class = "section3">
     <h1>Join our newsletter!</h1>
     <p>
        Get to know our new items before everyone! <br>
    </p>

    <form method = "post" action=""> 
    <input type = "text" name="fname" placeholder="First name" required>
    <input type = "text" name="email" placeholder="Email" required>

    <input type = "submit" value= "Submit" name="submit">
   </form>
   
    <?php 
   if (isset($_POST['submit'])){

    $fname = $_POST['fname'];
    $email = $_POST['email'];


    include '../database/db.php';
    $sql = " insert into Newsletter(fname, customerEmail )
    values ('$fname','$email')";
    
    
    if ($connection -> query($sql) === TRUE){
        echo "Thank you!";

    }
    else {
        echo "Error: " . $connection -> error;
    }

   }

    ?>
<br>

    <button class = "button" ><a href="../php/survey.php">Survey</a></button>
    </div>

      

   </section>
   <?php include "../php/footer.php";?>
<?php $style = "reservation_style"; $title = "Catffee: reservation"; include "../php/header.php";
?>
<style>
<?PHP include('../css/reservation_style.css'); ?> 
</style>

<section>
    <h1>Please fill the form</h1>
<form method = "post" action=""> 
    <input type = "text" name="fname" placeholder="First name" required>
    <input type = "text" name="lname" placeholder="Last name" required>
    <input type = "text" name="email" placeholder="Email" required>
    <input type = "number" name="phone_number" placeholder="Phone Number" required>
    <input type = "date" name="tableDate" placeholder="Table Date" required>
    <input type = "submit" value= "Submit" name="submit">
   </form>
   
    <?php 
   if (isset($_POST['submit'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $tableDate = $_POST['tableDate'];

    include '../database/db.php';
    $sql = "insert into Customer (FirstName, LastName, PhoneNumber, Email, TableDate)
    values ('$fname','$lname','$phone_number','$email', '$tableDate')";
    
    if ($connection -> query($sql) === TRUE){
        echo "Thank you!";
       
    }
    else {
        echo "Error: " . $connection -> error;
    }



   }

    ?>
    <h1>Do you also wanna make order?</h1>

<button class = "makeOrder" ><a href="../php/order.php">Make Order</div></a></button>

   </section>
   <?php include "../php/footer.php";?>
<?php $style = "reservation_style"; $title = "Catffee: reservation"; include "../php/header.php";
?>
<style>
<?PHP include('../css/reservation_style.css'); ?> 
</style>







<section>
    <h1>Please fill the form</h1>
<form name = "reservationForm" method = "post" onsubmit="return validateform()" action=""> 
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

    // CustomerID = $_COOKIE['latest_customer']

    include '../database/db.php';
    $sql = "insert into Customer (FirstName, LastName, PhoneNumber, Email, TableDate)
    values ('$fname','$lname','$phone_number','$email', '$tableDate')";
    
    if ($connection -> query($sql) === TRUE){
        echo "Thank you ".$fname." ".$lname." for your reservation";

        //$last_id = $connection->insert_id; 
        //session_start();
        //$_SESSION["last_customer_id"] = $last_id;
        //setcookie("latest_customer", $last_id);
        //echo $last_id;
       
    }
    else {
        echo "Error: " . $connection -> error;
    }
   }

       
?>




    <h1>Would you also like to make an order?</h1>

<button class = "makeOrder" ><a href="../php/order.php">Make Order</div></a></button>

   </section>
   <?php include "../php/footer.php";?>
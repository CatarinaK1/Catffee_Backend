<?php 
session_start();
include '../database/db.php';
//$displayname = $_SESSION['name'];
$orderId = $_SESSION['orderId'];
?>

<?php $style = "successOrder_style"; $title = "Catffee: order"; include "../php/header.php";
?>
<style>
<?PHP include('../css/successOrder_style.css'); ?> 
</style>

<section>
   <div class = "section1">
    <h1> Thank you! Your Order Id is <?php echo $orderId; ?> <br><br></h1>
    <h2> You may pick up your order at the cafe </h2>
</div>
</section>
  




        

   
<?php include "../php/footer.php";?>
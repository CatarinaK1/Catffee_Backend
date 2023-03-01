<?php 
session_start();
include '../database/db.php';
?>

<?php $style = "order_style"; $title = "Catffee: order"; include "../php/header.php";
?>
<style>
<?PHP include('../css/order_style.css'); ?> 
</style>

<div class = "section1">
<h1>Hi! what are you craving for? </h1>
    </div>

   
   <h2> Thank you for your order </h2>

   <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $quan = $_POST['quan'];
    foreach ($quan as $itemid => $itemQuantity) {

        $sql = "INSERT INTO Order (FirstName) VALUES (?)";
        $stmt= mysqli_prepare($connection, $sql);
        //var_dump($stmt);
        mysqli_stmt_bind_param($stmt, 's', $_POST['fname']);
        mysqli_stmt_execute($stmt);
        $orderId = mysqli_insert_id($connection) ;

        mysqli_query($connection, $sql);

        if(!empty($itemQuantity)){
            echo "$itemid : $itemQuantity <br>";

            $sql = " insert into order (fname )
            values ('')";
        }
    }
}




$sql = "select * from menu";

$result = mysqli_query($connection, $sql) or trigger_error(mysqli_error($connection));
?>

<body>
    <div id='container'>

        <a href='<?php echo $_SERVER['PHP_SELF']; ?>' ?clear=1> Clear cart</a>
        <h1> Order</h1>

        <?php echo "<form action ='{$_SERVER['PHP_SELF']}' method='post' >" ?>
       <label for = 'fname'>First name</label> <input type='text' name= 'fname' id='fname' >
        <table>
            <tr>
                <th>Item </th>
                <th> Price</th>
                <th>Quantity </th>
            </tr>

            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "
        <tr>
            <td>
            {$row['name']} <br>
            </td>
        
                <td>
                {$row['price']} <br>
                </td>


            <td>
              
                    <input type='text' name ='quan[{$row['itemid']}]'>
                
                    
            </td>
                
        </tr>
        ";
            }
            ?>

        </table>
        <input type='submit' value= 'order'>
        </form>
    </div>
        </body >





















   
<?php include "../php/footer.php";?>
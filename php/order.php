<?php 
session_start();
$displayname = $_SESSION['name'];
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

    <div class = "section2">  
    <?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //mysqli_report(MYSQLI_REPORT_ALL);
    
    $quan = $_POST['quan'];
    $sql = "INSERT INTO `Order` (FirstName) VALUES (?)";
    $stmt= mysqli_prepare($connection, $sql);
  
    mysqli_stmt_bind_param($stmt, 's', $_POST['fname']);
    mysqli_stmt_execute($stmt);
    $orderId = mysqli_insert_id($connection) ;


    foreach ($quan as $itemid => $itemQuantity) {
    

        if(!empty($itemQuantity)){
           // echo "$itemid : $itemQuantity <br>";

            $stmt= mysqli_prepare($connection, "Select price FROM `menu` WHERE itemid = ?");
            mysqli_stmt_bind_param($stmt, 'i', $itemid );
            mysqli_stmt_execute($stmt);
            $a = mysqli_stmt_get_result($stmt);
            $b =mysqli_fetch_row($a)[0];
           // var_dump($b);
            
            $sql = "INSERT INTO `OrderItem` (OrderId, price, quantity, ProductId) VALUES (?,?,?,?)";
            $stmt= mysqli_prepare($connection, $sql);
          
            mysqli_stmt_bind_param($stmt, 'isii', $orderId, $b, $itemQuantity , $itemid);
            mysqli_stmt_execute($stmt);
        }
    }
?>
    <body> <h1> Thank you!</h1>  </body>
<?php } else {
    # code...





$sql = "select * from menu";

$result = mysqli_query($connection, $sql) or trigger_error(mysqli_error($connection));
?>

<body>
    
    <div id='container'>

        <a href='<?php echo $_SERVER['PHP_SELF']; ?>' ?clear=1> Clear cart</a>
        <h1> Order</h1>

        <?php echo "<form action ='{$_SERVER['PHP_SELF']}' method='post' >" ?>
       <!--<label for = 'fname'>First name</label> <input type='text' name= 'fname' id='fname' >-->
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
        </body > <?php } ?>  </div>
   
<?php include "../php/footer.php";?>
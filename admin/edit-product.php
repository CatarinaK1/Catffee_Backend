<?php
$itemid = $_GET['itemid'];
$getProduct= mysqli_query($connection, "SELECT * FROM menu WHERE itemid = '$itemid'");
$productRow = mysqli_fetch_array($getProduct);
?>

<?php
      echo' <h3 style="text-align: center; font-size: 30px;">Edit product</h3>';
 ?>


    <form style=" text-align: center;" method="POST" action="">
    <input type="text" name="name" class="form-control" value="<?php echo $productRow['name']; ?>"><br><br>
    <input name="price" type="decimal(5,2)" class="form-control" style="margin-left: 14px;" size="60" value="<?php  echo $productRow['price'] ?>"><br><br>
    select category 
    <select name="category" >
    <?php
    $categories = array('Coffee', 'Salads', 'Snacks', 'Desserts', 'Smoothies', 'Beverages');
    foreach ($categories as $category) {
        if ($category == $productRow['category']) {
            echo '<option value="' . $category . '" selected="selected">' . $category . '</option>';
        } else {
            echo '<option value="' . $category . '">' . $category . '</option>';
        }
    }
    ?>
</select> <br><br>
    <input type="submit" value="Submit"  name="submit" >
</form>
<?php
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    include '../database/db.php';
    $sql = "UPDATE menu SET name = '$name' ,   category = '$category', price = '$price' WHERE itemid = '$itemid'";

    if ($connection ->query($sql)=== TRUE){
        echo "Your information is edited successfully";
    }
    else {
         echo "Error: ". $connect-> $error;
        }

}


?>







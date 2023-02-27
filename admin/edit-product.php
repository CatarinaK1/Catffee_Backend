<?php
$itemid = $_GET['itemid'];
$getProduct= mysqli_query($connection, "SELECT * FROM menu WHERE itemid = '$itemid'");
$productRow = mysqli_fetch_array($getProduct);
?>

<?php
      echo' <h3 style="text-align: center; font-size: 30px;">Edit product</h3>';
 ?>


    <form style=" text-align: center;" method="POST" action="actions.php?edit-product=<?php echo $id ?>" method="POST" enctype="multipart/form-data">
    <input type="text" name="name" class="form-control" value="<?php echo $productRow['name']; ?>" placeholder=" Name"><br><br>
    <input name="price" type="decimal(5,2)" class="form-control" style="margin-left: 14px;" size="60" value="<?php  echo $productRow['price'] ?>" placeholder="Price"><br><br>
    select category 
    <select name="category";>
        <option value="Coffee"> Coffee </option>
        <option value="Salads"> Salads </option>
        <option value="Snacks"> Snacks </option>
        <option value="Desserts"> Desserts </option>
        <option value="Smoothies"> Smoothies </option>
        <option value="Beverages"> Beverages </option>
    </select> <br><br>
    <input type="submit" value="Submit"  name="submit" >
</form>







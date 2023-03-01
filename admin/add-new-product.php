<?php
$title = "Add New Cat";
?>
<form style=" text-align: center;" method="post" action="">
    <input type="text" name="name" placeholder="Name" required ><br><br>
    <input type="decimal(5,2)" name="price" placeholder="Price" required ><br><br>
    select category 
    <select name="category" >
    <?php
    $categories = array('Coffee', 'Salads', 'Snacks', 'Desserts', 'Smoothies', 'Beverages');
    foreach ($categories as $category) {  
            echo '<option value="' . $category . '">' . $category . '</option>';
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
    $sql = "insert into menu (name, category, price)
    values ('$name', '$category', '$price')";

    if ($connection ->query($sql)=== TRUE){
        echo "Your information is added successfully";
    }
    else {
         echo "Error: ". $connect-> $error;
        }

}
?>


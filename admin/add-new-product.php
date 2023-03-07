<?php
$title = "Add New Cat";
?>
<form style=" text-align: center;" method="post" action="" onsubmit="return notempity()" name="NewEdit">
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
<script>
//Not empity name and price for new product in AdminPanel
function notempity() {
  let name = (document.NewEdit.name.value).trim();
  if (name.length < 3) {
    alert("Product Name must have at least 3 characters");
    return false;
  }

  let price = (document.NewEdit.price.value).trim();
  if (!price.match(/^\d+(\.\d{1,2})?$/)) {
    alert("Price must be a valid decimal number with up to 2 decimal places");
    return false;
  }

  return true;
}
</script>

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


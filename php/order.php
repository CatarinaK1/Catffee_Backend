<?php 
session_start();
$displayname = $_SESSION['name'];
?>

<?php $style = "order_style"; $title = "Catffee: order"; include "../php/header.php";
?>
<style>
<?PHP include('../css/order_style.css'); ?> 
</style>

<div class = "section1">
<h1>Hi<?php echo " " .$displayname;?>! what are you craving for? </h1>
    </div>

    <form method = "post" action=""> 
    
    <select name="Snacks" placeholder="snacks">
        <option value = "Pretzels"> Pretzels </option>
        <option value = "Muffin"> Muffin </option>
        <option value = "None"> None </option>
    </select><br>

    <select name="Salads">
        <option value = "Caesar"> Caesar </option>
        <option value = "Spinach"> Spinach </option>
        <option value = "None"> None </option>
    </select><br>

    <select name="Desserts">
        <option value = "Cake"> Cake </option>
        <option value = "Cheesecake"> Cheesecake </option>
        <option value = "None"> None </option>
    </select><br>

    <select name="Bevearages">
        <option value = "Soda"> Soda </option>
        <option value = "Lemonade"> Lemonade </option>
        <option value = "Milkshake"> Milkshake </option>
        <option value = "Iced Tea"> Iced Tea </option>
        <option value = "None"> None </option>
        </select><br>

    <select name="Coffee">
        <option value = "Latte"> Latte </option>
        <option value = "Espresso"> Espresso </option>
        <option value = "None"> None </option>
    </select><br>

    <select name="Smoothies">
        <option value = "Strawberry"> Strawberry </option>
        <option value = "Blueberry"> Blueberry </option>
        <option value = "Mango Peach"> Mango Peach </option>
        <option value = "None"> None </option>
    </select><br>

    <input type="submit" value="Submit" name="submit" >
   </form>



   
   
   <h2> Thank you for your order </h2>























   
<?php include "../php/footer.php";?>
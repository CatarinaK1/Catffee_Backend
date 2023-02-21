<?php

include '../database/db.php';

if(isset($_GET['delete_product'])){

    $itemid = $_GET['delete_product'];
    $query = mysqli_query($connection, "DELETE FROM menu WHERE itemid = '$itemid'");
    header('Location: index.php');



}elseif(isset($_GET['add-new-product']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $query = mysqli_query($connection, "INSERT INTO menu(name,category,price) VALUES('$name','$category','$price')");


}elseif(isset($_GET['edit-product']) && !empty($_GET['edit-product']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
    $itemid = $_GET['edit_product'];
    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $query = mysqli_query($connection, "UPDATE menu SET name = '$name' ,   category = '$category', price = '$price' WHERE itemid = '$itemid' ");

}
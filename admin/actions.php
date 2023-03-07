<?php

include '../database/db.php';

if(isset($_GET['itemid'])){

    $itemid = $_GET['itemid'];
    $query = mysqli_query($connection, "DELETE FROM menu WHERE itemid = '$itemid'");
    header('Location: index.php');

}

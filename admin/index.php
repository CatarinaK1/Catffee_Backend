<?php $style = "menu_style"; $title = "Admin panel: menu"; include '../database/db.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

 
    <link rel="stylesheet" href="../css/footer_style.css">
    <link rel="stylesheet" href="../css/<?php echo $style ?>.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;1,100;1,600&family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">
  

</head>
<body>
   <nav>
    <div class = "logoText">
     <div class = "navItem1"><img src="../images/logo.png" alt="Logo"></div>
     <div class = "navItem2">Catffee</div>
    </div>
    <div class = "navRest">
      <div class = "navItem4"><a href="index.php">Access</a></div>
      <div class = "navItem4"><a href="index.php?add-new-product">New Cat</a></div>
      <div class = "navItem4"><a href="../php/menu.php">Menu</a></div>

     </div>
    </nav>


    <h1 style="text-align: center; font-size: 50px;">Admin Panel</h1>
<section>
            <?php
            if (isset($_GET['add-new-product'])) {
                echo' <h3 style="text-align: center; font-size: 30px;">Add new product</h3>';
                include( 'add-new-product.php');            
            }elseif(isset($_GET['edit-product']) && isset($_GET['itemid']) && !empty($_GET['itemid'])){
                include('edit-product.php');
            }else {

                ?>
                <!-- table list -->

  

                            <table style="width: 70%; margin: 10px 50px 50px 50px; margin: auto; ">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Remove</th>
                                    <th>Edit</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $num = 1;
                                $product_query = mysqli_query($connection,"SELECT * FROM menu");
                                while($product_row = mysqli_fetch_array($product_query)):
                                    $itemid = $product_row['itemid'];
                                ?>
                                <tr>
                                    <td><?php echo $num++; ?></td>
                                    <td><?php echo $product_row['name']; ?></td>
                                    <td><?php
                                        echo $product_row['category']; ?></td>
                                    <td><?php echo $product_row['price']; ?></td>
                                    <td>
                                        <a href="actions.php?delete_product=<?php echo $product_row['itemid']; ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                    <td>
                                        <a href="index.php?edit-product&itemid=<?php echo $product_row['itemid']; ?>" class="btn btn-warning">Edit</a>
                                    </td>
                                </tr>

                                <?php  endwhile; ?>
                                </tbody>
                            </table>

                </div>


                <?php

            }
            ?>


        </div>
    </div>
</div>

</section>
    <?php include "../php/footer.php";?>
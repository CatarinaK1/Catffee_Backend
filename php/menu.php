
<?php $style = "menu_style"; $title = "Catffee: menu"; include '../database/db.php'; include "../php/header.php";?>
   <section>
    
    <div class="container">
      <img src = "../images/CoffeCat.jpg"  div class = "coverImage" style="width:100%">
      <div class="text"> What are you craving for?</div>
    </div>


     
    <div class="menu-container" style="display: flex; flex-wrap: wrap;">
      <div class="Coffee" style="flex: 1; padding: 10px;">
        <table style="width: 100%;">
          <tr>
            <th><h2>Coffee</h2></th>
            <th><h2>Price</h2></th>
          </tr>
          <?php
  $menu_query = mysqli_query($connection,"SELECT * FROM menu WHERE category = 'Coffee' ");
   while($menu_row = mysqli_fetch_array($menu_query)):
   ?>
     <tr>
    <td><?php echo $menu_row['name']; ?></td>
    <td><?php echo $menu_row['price'] . ' €'; ?></td>               
      </tr>
    <?php  endwhile; ?>
        </table>
      </div>
      <div class="Salads" style="flex: 1; padding: 10px;">
        <table style="width: 100%;">
          <tr>
            <th><h2>Salads</h2></th>
            <th><h2>Price</h2></th>
          </tr>
          <?php
  $menu_query = mysqli_query($connection,"SELECT * FROM menu WHERE category = 'Salads' ");
   while($menu_row = mysqli_fetch_array($menu_query)):
   ?>
     <tr>
    <td><?php echo $menu_row['name']; ?></td>
    <td><?php echo $menu_row['price'] . ' €'; ?></td>               
      </tr>
    <?php  endwhile; ?>
        </table>
      </div>
    </div>
    <div class="menu-container" style="display: flex; flex-wrap: wrap;">
      <div class="Snacks" style="flex: 2; padding: 10px;">

        <table style="width: 100%;">
          <tr>
            <th><h2>Snacks</h2></th>
            <th><h2>Price</h2></th>
          </tr>
          <?php
  $menu_query = mysqli_query($connection,"SELECT * FROM menu WHERE category = 'Snacks' ");
   while($menu_row = mysqli_fetch_array($menu_query)):
   ?>
     <tr>
    <td><?php echo $menu_row['name']; ?></td>
    <td><?php echo $menu_row['price'] . ' €'; ?></td>               
      </tr>
    <?php  endwhile; ?>
        </table>
      </div>
      <div class="Desserts" style="flex: 2; padding: 10px;">
        <table style="width: 100%;">
          <tr>
            <th><h2>Desserts</h2></th>
            <th><h2>Price</h2></th>
          </tr>
          <?php
  $menu_query = mysqli_query($connection,"SELECT * FROM menu WHERE category = 'Desserts' ");
   while($menu_row = mysqli_fetch_array($menu_query)):
   ?>
     <tr>
    <td><?php echo $menu_row['name']; ?></td>
    <td><?php echo $menu_row['price'] . ' €'; ?></td>               
      </tr>
    <?php  endwhile; ?>
        </table>
      </div>
    </div>
 <div class="menu-container" style="display: flex; flex-wrap: wrap;">
      <div class="Smoothies" style="flex: 2; padding: 10px;">
        <table style="width: 100%;">
          <tr>
            <th><h2>Smoothies</h2></th>
            <th><h2>Price</h2></th>
          </tr>
          <?php
  $menu_query = mysqli_query($connection,"SELECT * FROM menu WHERE category = 'Smoothies' ");
   while($menu_row = mysqli_fetch_array($menu_query)):
   ?>
     <tr>
    <td><?php echo $menu_row['name']; ?></td>
    <td><?php echo $menu_row['price'] . ' €'; ?></td>               
      </tr>
    <?php  endwhile; ?>
        </table>
      </div>
      <div class="Beverages" style="flex: 2; padding: 10px;">
        <table style="width: 100%;">
          <tr>
            <th><h2>Beverages</h2></th>
            <th><h2>Price</h2></th>
          </tr>
          <?php
  $menu_query = mysqli_query($connection,"SELECT * FROM menu WHERE category = 'Beverages' ");
   while($menu_row = mysqli_fetch_array($menu_query)):
   ?>
     <tr>
    <td><?php echo $menu_row['name']; ?></td>
    <td><?php echo $menu_row['price'] . ' €'; ?></td>               
      </tr>
    <?php  endwhile; ?>
        </table>

        
      </div>
    </div>
    
    </section>
    

    <?php include "../php/footer.php";?>
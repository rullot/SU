<?php
require('connection.php');
include("auth.php");
include("navbar.php");

if(isset($_POST["submit"]))
  $dateX=$_REQUEST["date"];
?>

<main role="main" class="container">
    <div class="row">
        <div class="col-md-4">
          <h3>Choose a date</h3>
          <form name="myForm" method="POST" action="menu.php">
            <input type="date" name="date" required/>
            <input name="submit" type="submit" value="Submit"/>
          </form>
        </div>
        <div class="col-md-4">
          <?php if(isset($dateX))
          {
          ?>
          <h3>Date: <?php echo $dateX ?></h3>
      <form name="form" method="POST" action="/api/api.php/menu_dish" target="hidden-form">
        <input type="hidden" name="date" value="<?php echo $dateX?>"/>
       <select name="dish"> <!--Supplement an id here instead of using 'text'-->
           <?php
           $count=1;
           $sel_query="Select * from dish ORDER BY id desc;";
           $result = mysqli_query($con,$sel_query);
           while($row = mysqli_fetch_assoc($result)) {
           ?>
              <option value="<?php echo $row["ID"]; ?>"> <?php echo $row["name"]; ?> </option>
           <?php } ?>
        </select>
        <select name="meal">
          <option value="5">Breakfast</option>
          <option value="6">Lunch</option>
          <option value="7">Snacks</option>
        </select>
        </br>
        </br>
        <input name="submit" type="submit" value="Submit"/>
      </form>
    <?php } ?>
    </div>
    <div class="col-md-4"></div>
  </div>
    <IFRAME style="display:none" name="hidden-form"></IFRAME>

    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <table width="100%" border="1" style="border-collapse:collapse;">
        <thead>
        <tr>
          <th><strong>Dish</strong></th>
          <th><strong>Price</strong></th>
          <th><strong>Image</strong></th>
          <th><strong>Delete</strong></th>
        </tr>
        </thead>

          <?php
          if(isset($dateX))
          {

          $sel_query="Select * from dish where ID in(select dish from menu_dish where date='" .$dateX. "');";
          $result = mysqli_query($con,$sel_query);
          while($row = mysqli_fetch_assoc($result)) {
          ?>
                  <tr>
                    <td align="center"><?php echo $row["name"]; ?></td>
                    <td align="center"><?php echo $row["price"]; ?></td>
                    <td align="center"><?php echo '<img src = "images/'.$row["image"].'"width = "60px" height = "60px"';?></td>
                    <td align="center"><a href="delete-menu-dish.php?id=<?php echo $row["ID"]; ?>">Delete</a></td>
                  </tr>

          <?php }} ?>
          </div>
          <div class="col-md-4"></div>
          </div>


    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>

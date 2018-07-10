<?php
require('connection.php');
include("auth.php");
include("navbar.php");
?>


    <main role="main" class="container">
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">

    </div>
  </div>

    <div class="row">
      <div class="col-md-4">
        <div class="form">
        <h1>Add Dish</h1>
        <form name="" method="POST" action="up.php" enctype="multipart/form-data">
        <input type="hidden" name="new" value="1" />
        <p><input type="text" name="name" placeholder="Enter dish name" required /></p>
        <p><input type="text" name="price" placeholder="Enter price" required /></p>
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <!--<input type="submit" value="Upload Image" name="submit">-->
        <p><input name="submit" type="submit" value="Submit" /></p>
        </form>
        <p style="color:#FF0000;"></p>

      </div>
    </div>
      <div class="col-md-4">
        <table width="100%" border="1" style="border-collapse:collapse;">
        <thead>
        <tr>
        <th><strong>S.No</strong></th>
        <th><strong>Dish</strong></th>
        <th><strong>price</strong></th>
        <th><strong>image</strong></th>
        <th><strong>Edit</strong></th>
        <th><strong>Delete</strong></th>
        </tr>
        </thead>
        <tbody>
        <?php

        $count=1;
        $sel_query="Select * from dish ORDER BY id desc;";
        $result = mysqli_query($con,$sel_query);
        while($row = mysqli_fetch_assoc($result)) {

        ?>

        <tr>
        	<td align="center"><?php echo $count; ?></td>
        	<td align="center"><?php echo $row["name"]; ?></td>
        	<td align="center"><?php echo $row["price"]; ?></td>
        	<td align="center"><?php echo '<img src = "images/'.$row["image"].'"width = "60px" height = "60px"';?></td>
        	<td align="center"><a href="edit.php?id=<?php echo $row["ID"]; ?>">Edit</a></td>
        	<td align="center"><a href="delete.php?id=<?php echo $row["ID"]; ?>">Delete</a></td>
        </tr>

        <?php $count++; } ?>
        </tbody>
        </table>
      </div>
      <div class="col-md-4"></div>
    </div>

    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->'
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>

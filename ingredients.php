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
    <div class="row"></div>

    <div class="row">
      <div class="col-md-4">

        <div class="form">
        <h1>Add Ingredient</h1>
        <form name="myForm" method="POST" action="/api/api.php/ingredient" target="hidden-form">
        <input type="text" name="name"/>
        </br>
        </br>
        Allergen <select name="allergen"> <!--Supplement an id here instead of using 'text'-->
        <option value="0">No</option>
        <option value="1" selected>Yes</option>
        </select>
        </br>
        </br>
        <input name="submit" type="submit" value="Submit" />
        </form>
        <IFRAME style="display:none" name="hidden-form"></IFRAME>

        </div>

      </div>
      <div class="col-md-4">
        <table width="100%" border="1" style="border-collapse:collapse;">
        <thead>
        <tr>
        <th><strong>S.No</strong></th>
        <th><strong>Name</strong></th>
        <th><strong>Allergen</strong></th>
        <th><strong>Delete</strong></th>
        </tr>
        </thead>
        <tbody>
        <?php

        $count=1;
        $sel_query="Select * from ingredient ORDER BY id desc;";
        $result = mysqli_query($con,$sel_query);
        while($row = mysqli_fetch_assoc($result)) {

        ?>

        <tr>
        	<td align="center"><?php echo $row["ID"]; ?></td>
        	<td align="center"><?php echo $row["name"]; ?></td>
        	<td align="center"><?php if($row["allergen"]==1){
            echo "Yes";
          } else if($row["allergen"]==0) {
            echo "No";
          }; ?></td>
        	<td align="center"><a href="delete-ingredient.php?id=<?php echo $row["ID"]; ?>">Delete</a></td>
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

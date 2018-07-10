<?php
include("auth.php");
include("navbar.php");
?>

<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">

    <div class="form">
    <h1>Add Dish</h1>
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
  <div class="col-md-4"></div>
</div>
</body>
</html>

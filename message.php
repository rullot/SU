<?php
include("auth.php");
include("navbar.php");
?>

<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">

    <div class="form">
    <h1>Message</h1>
    <p>Type in your message to send a notification to app users.</p>
    <form name="myForm" method="POST" action="/api/api.php/message">
      <textarea name="text" cols="40" rows="5"></textarea>
    </br>
      <input name="submit" type="submit" value="Send"/>
    </form>
    </div>
  </div>
  <div class="col-md-4"></div>
</div>
</body>
</html>
